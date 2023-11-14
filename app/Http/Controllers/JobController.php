<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\Employers;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use App\JobStatus;
use Illuminate\Support\Facades\DB;
use App\Models\Nationality;

class JobController extends Controller
{
    public function indexd()
    {
        // Get the currently authenticated employer
    $employer = auth('employer')->user();

     if (!$employer) {
        // If the employer is not authenticated, set a message and redirect
        return redirect()->route('home')->with('error', 'Please login to access your job listings.');
    }
        // Add logic to fetch and prepare data for the dashboard

        // Example: Fetch jobs, notifications, or other relevant data
        $jobs = Jobs::where('employer_id', auth('employer')->user()->id)->get();

        return view('employer.index', compact('jobs'));
    }
    public function index()
    {
       // Get the currently logged-in employer
       $employer = Auth::guard('employer')->user();
        if (!$employer) {

        // If the employer is not authenticated, set a message and redirect
        return redirect()->route('home')->with('error', 'Please login to access your job listings.');
    }

       // Fetch job listings associated with the employer
       $jobs = Jobs::where('employer_id', $employer->id)->get();
// Iterate through the jobs and fetch the selected nationalities for each job
    foreach ($jobs as $job) {
        $job->selectedNationalities = $job ? json_decode($job->nationality) : [];
    }
       // Return a view to display the job listings
       return view('employer.jobs.index', compact('jobs'));

    }

    public function create()
    {
        // Get the currently authenticated employer
    $employer = auth('employer')->user();

     if (!$employer) {
        // If the employer is not authenticated, set a message and redirect
        return redirect()->route('home')->with('error', 'Please login to access your job listings.');
    }
         $nationalities = Nationality::all(); // Assuming you have a Nationality model
        // Return a view to create a new job listing
        return view('employer.jobs.create',compact('nationalities'));
    }

    public function store(Request $request)
    {
        // Validate the form data
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
        ]);
        $employerId = Auth::guard('employer')->id();
        $jobs = new Jobs();
        $jobs->job_position = $request->input('job_position');
$jobs->field_of_work = $request->input('field_of_work');
$jobs->location = $request->input('location');
$jobs->salary = $request->input('salary');
$jobs->nationality = json_encode($request->input('nationality'));
$jobs->gender = $request->input('gender');
$jobs->requirements = $request->input('requirements');
$jobs->posted_date = $request->input('posted_date');
$jobs->closing_date = $request->input('closing_date');
$jobs->employer_id = $employerId;
$jobs->status = JobStatus::PENDING;


        $jobs  ->save();
        // Create a new job listing in the database


        // Redirect to the job listings index page
        return redirect()->route('jobs.index')->with('success', 'Job listing created successfully');
    }

    public function show($id)
    {
        // Find and display the specified job listing
        $job = Jobs::findOrFail($id);

        // Return a view to display the job details
        return view('employer.jobs.show', compact('job'));
    }

    public function edit($id)
    {
        // Get the currently authenticated employer
    $employer = auth('employer')->user();

     if (!$employer) {
        // If the employer is not authenticated, set a message and redirect
        return redirect()->route('home')->with('error', 'Please login to access your job listings.');
    }
        // Find and display the form to edit the specified job listing
        $job = Jobs::findOrFail($id);
        $nationalities = Nationality::all();
        $selectedNationalities = $job ? json_decode($job->nationality) : [];
        // Return a view to edit the job listing
        return view('employer.jobs.edit', compact('job','nationalities', 'selectedNationalities'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
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
        ]);

        // Find and update the specified job listing in the database
        $job = Jobs::findOrFail($id);
        $job->update($request->all());

        // Redirect to the job listings index page
        return redirect()->route('jobs.index')->with('success', 'Job listing updated successfully');
    }

    public function destroy($id)
    {
        // Find and delete the specified job listing from the database
        $job = Jobs::findOrFail($id);
        $job->delete();

        // Redirect to the job listings index page
        return redirect()->route('jobs.index')->with('success', 'Job listing deleted successfully');
    }

public function appliedJobs(Request $request)
{

    // Get the currently authenticated employer
    $employer = auth('employer')->user();

     if (!$employer) {
        // If the employer is not authenticated, set a message and redirect
        return redirect()->route('home')->with('error', 'Please login to access your job listings.');
    }


    // Get the search query from the request
    $searchQuery = $request->input('search_query');

    // Build a query to filter applied jobs based on the search query and employer_id
    $query = JobApplication::with('candidate', 'job')
        ->where('employer_id', $employer->id)->where('status', 'Shortlist'); // Filter by employer ID

    if ($searchQuery) {
        $query->where(function ($q) use ($searchQuery) {
            $q->orWhereHas('job', function ($q) use ($searchQuery) {
                $q->where('job_position', 'like', '%' . $searchQuery . '%');
            })
            ->orWhereHas('candidate', function ($q) use ($searchQuery) {
                $q->where('name', 'like', '%' . $searchQuery . '%');
            })
            ->orWhereDate('created_at', 'LIKE', '%' . $searchQuery . '%'); // Use 'LIKE' to match date partially
        });
    }

    // Execute the query
    $appliedJobs = $query->get();

    return view('employer.appliedjobs', compact('appliedJobs'));
}

 public function lastStatus(JobApplication $application)
{
    $validStatus = 'Hired';

    if ($application->status !== $validStatus) {
        // Logic to change the job status to "Hired"
        $application->update(['lstatus' => $validStatus]);

        return redirect()->back()->with('success', 'Candidate status updated successfully');
    }

    return redirect()->back()->with('error', 'Invalid status');
}


}
