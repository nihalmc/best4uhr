<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\JobStatus; // Assuming you have a JobStatus model
use App\Models\CandidateDetail;
use App\Models\Candidate;
use App\Models\Employers;
use App\Models\Freedetails;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Notifications\NewNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Models\Nationality;
use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Artisan;
use App\Console\Commands\CloseExpiredJobs;

class AdminJobController extends Controller
{


    public function index(Request $request)
    {
        // Get the search query and selected status from the request
        $search = $request->input('search');
        $selectedStatus = $request->input('status');

        // Query to fetch job listings based on search and status criteria
        $query = Jobs::query();

        if ($search) {
            $query->where(function ($subquery) use ($search) {
                $subquery->where('job_position', 'like', '%' . $search . '%')
                    ->orWhere('location', 'like', '%' . $search . '%')
                    ->orWhere('posted_date', 'like', '%' . $search . '%')
                    ->orWhereHas('employer', function ($employerQuery) use ($search) {
                        $employerQuery->where('company_name', 'like', '%' . $search . '%');
                    });
            });
        }

        if ($selectedStatus) {
            $query->where('status', $selectedStatus);
        }

        // Order the jobs by posted_date in descending order
        $jobs = $query->orderBy('posted_date', 'desc')->get();

        return view('admin.job_listings', compact('jobs', 'selectedStatus'));
    }

 public function updateStatus(Jobs $job, $newStatus)
{
    $validStatuses = ['Open', 'Closed']; // Add your valid statuses here

    if ($newStatus == 'Open' && now() > $job->closing_date) {
        return redirect()->route('admin.jobsdetails')->with('error', 'Cannot open job. Closing date has passed.');
    }

    if (in_array($newStatus, $validStatuses)) {
        // Logic to change the job status
        $job->update(['status' => $newStatus]);

        return redirect()->back()->with('success', 'Job status updated successfully');
    }

    return redirect()->route('admin.jobListings')->with('error', 'Invalid status');
}



    public function appliedJobs(Request $request)
    {
        $searchQuery = $request->input('search_query');

        $query = JobApplication::with(['job', 'candidate.candidateDetail']); // Eager load CandidateDetail

        if ($searchQuery) {
            $query->where(function ($subquery) use ($searchQuery) {
                $subquery->whereHas('job', function ($jobQuery) use ($searchQuery) {
                    $jobQuery->where('job_position', 'like', '%' . $searchQuery . '%');
                });
            });
        }

        $appliedJobs = $query->orderBy('created_at', 'desc')->get();

        return view('admin.candidate.show', compact('appliedJobs'));
    }

    public function Status(JobApplication $application, $newStatus)
    {
        $validStatuses = ['Shortlist', 'Decline']; // Add your valid statuses here

        if (in_array($newStatus, $validStatuses)) {
            // Logic to change the job status
            $application->update(['status' => $newStatus]);

            return redirect()->back()->with('success', 'Candidate status updated successfully');
        }

        return redirect()->back()->with('error', 'Invalid status');
    }

    public function updateLStatus(JobApplication $application)
    {
        $validStatus = 'Hired';

        if ($application->status !== $validStatus) {
            // Logic to change the job status to "Hired"
            $application->update(['lstatus' => $validStatus]);

            return redirect()->back()->with('success', 'lstatus updated successfully');
        }

        return redirect()->back()->with('error', 'Invalid status');
    }

    public function show()
{
   $jobs = Jobs::orderBy('posted_date', 'desc')->get();

    // Iterate through the jobs and fetch the selected nationalities for each job
    foreach ($jobs as $job) {
        $job->selectedNationalities = $job ? json_decode($job->nationality) : [];
    }

    return view('admin.jobs.index', compact('jobs'));
}


   public function create()
{
    $employers = Employers::all();
    $nationalities = Nationality::all(); // Assuming you have a Nationality model

    return view('admin.jobs.create', compact('employers', 'nationalities'));
}

     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'job_position' => 'required|string',
            'field_of_work' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|string',
            'nationality' => 'required|array', // Validate as an array
            'gender' => 'required|string',
            'requirements' => 'required|string',
            'posted_date' => 'required|date',
            'closing_date' => 'required|date',
            'job_code' => 'required|string|unique:jobs,job_code,NULL,id', // Ensure job_code is unique in the jobs table
            'employer_id' => [
                'required',
                Rule::exists('employers', 'id'), // Ensure the selected employer exists in the employers table
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.jobs.create')
                ->withErrors($validator)
                ->withInput();
        }

        $job = new Jobs();
        $job->job_position = $request->input('job_position');
        $job->field_of_work = $request->input('field_of_work');
        $job->location = $request->input('location');
        $job->salary = $request->input('salary');
        $job->nationality = json_encode($request->input('nationality')); // Store nationalities as JSON
        $job->gender = $request->input('gender');
        $job->requirements = $request->input('requirements');
        $job->posted_date = $request->input('posted_date');
        $job->closing_date = $request->input('closing_date');
        $job->job_code = $request->input('job_code');
        $job->employer_id = $request->input('employer_id');
        $job->status = JobStatus::PENDING;

        $job->save();

        return redirect()->route('admin.jobsdetails')->with('success', 'Job listing created successfully');
    }

    public function closeJobs()
{
    $exitCode = Artisan::call('jobs:close-expired');
    return redirect()->route('admin.jobListings')->with('success', 'Job closing triggered successfully.');
}

 public function edit($id)
{
    $job = Jobs::findOrFail($id);

    if (!$job) {
        return redirect()->route('admin.jobs.index')->with('error', 'Job not found.');
    }

    $employers = Employers::all();
    $nationalities = Nationality::all();

   $selectedNationalities = $job ? json_decode($job->nationality) : [];

    return view('admin.jobs.edit', compact('job', 'employers', 'nationalities', 'selectedNationalities'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'job_position' => 'required|string',
            'field_of_work' => 'required|string',
            'location' => 'required|string',
            'salary' => 'required|string',
            'nationality' => 'required|array',
            'gender' => 'required|string',
            'requirements' => 'required|string',
            'posted_date' => 'required|date',
            'closing_date' => 'required|date',
            'job_code' => [
                'required',
                'string',
                Rule::unique('jobs', 'job_code')->ignore($id),
            ],
            'employer_id' => [
                'required',
                Rule::exists('employers', 'id'),
            ],
        ]);

        $job = Jobs::findOrFail($id);
        $job->job_position = $request->input('job_position');
        $job->field_of_work = $request->input('field_of_work');
        $job->location = $request->input('location');
        $job->salary = $request->input('salary');
        $job->nationality = json_encode($request->input('nationality'));
        $job->gender = $request->input('gender');
        $job->requirements = $request->input('requirements');
        $job->posted_date = $request->input('posted_date');
        $job->closing_date = $request->input('closing_date');
        $job->job_code = $request->input('job_code');
        $job->employer_id = $request->input('employer_id');

        $job->save();

        return redirect()->route('admin.jobsdetails')->with('success', 'Job listing updated successfully');
    }

    public function destroy($id)
    {
        $job = Jobs::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobsdetails')->with('success', 'Job listing deleted successfully');
    }

    public function display()
    {
        $cvenquiry = Freedetails::orderBy('created_at', 'desc')->get();

        return view('admin.cvenquiry', ['cvenquiry' => $cvenquiry]);
    }

    public function showjob($id)
    {
        $job = Jobs::findOrFail($id);

        return view('admin.jobs.show', compact('job'));
    }

     public function cvenquiry($id)
    {
        $cvenquiry = Freedetails::findOrFail($id);
         $cvenquiry->delete();

        return redirect()->route('admin.display')->with('success', 'Job Cv deleted successfully');
    }


public function downloadAllFiles()
{
    // Query to fetch open job listings
    $openJobs = Jobs::where('status', 'Open')->orderBy('posted_date', 'desc')->get();
  foreach ($openJobs as $job) {
        $job->selectedNationalities = $job ? json_decode($job->nationality) : [];
    }
    // Load the PDF library
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);
    $dompdf = new Dompdf($options);

    // Generate the PDF content
    $pdfContent = view('admin.jobs.pdf', compact('openJobs'));

    // Load the HTML content into Dompdf
    $dompdf->loadHtml($pdfContent);

    // Set paper size and rendering options
    $dompdf->setPaper('A4', 'landscape');

    // Render the PDF (prevents it from being displayed on the screen)
    $dompdf->render();

    // Output the PDF as a download
    return $dompdf->stream('open_jobs.pdf');
}

public function closeExpiredJobs()
{
    \Log::info('Closing expired jobs triggered.');
    Artisan::call('jobs:close-expired');
    return redirect()->route('admin.jobs.index')->with('success', 'Expired jobs Closed successfully.');
}



}
