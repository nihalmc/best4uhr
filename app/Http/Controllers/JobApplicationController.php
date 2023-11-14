<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobApplication;
use App\Models\CandidateDetail;
use App\Models\Candidate; // Import the Candidate model
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{

public function index(Request $request)
{
    // Get the currently authenticated candidate
    $candidate = auth('candidate')->user();

    if (!$candidate) {
        // Candidate is not authenticated, handle accordingly
        return redirect()->route('home')->with('error', 'Please log in to access this page.');
    }

    // Get the search query and jobs per page value from the request
    $searchQuery = $request->input('search_query');
    $jobsPerPage = $request->input('jobs_per_page', 10); // Default to 10 if not specified

    // Build a query to fetch jobs with "Open" status and apply search filters
    $query = Jobs::where('status', 'Open');

    if ($searchQuery) {
        $query->where(function ($q) use ($searchQuery) {
            $q->where('job_position', 'like', '%' . $searchQuery . '%')
                ->orWhere('field_of_work', 'like', '%' . $searchQuery . '%')
                ->orWhere('location', 'like', '%' . $searchQuery . '%');
        });
    }

    // Order the jobs by posted_date in descending order
    $query->orderBy('posted_date', 'desc');

    // Fetch jobs based on the search query and status, limited by the jobs per page value
    $jobs = $query->paginate($jobsPerPage);

    return view('candidate.jobs.index', compact('jobs', 'searchQuery'));
}



public function show($jobId)
{
    // Retrieve the job by its ID
    $job = Jobs::find($jobId);

    if (!$job) {
        // Handle the case where the job is not found
        return redirect()->route('candidate.jobs.index')->with('error', 'Job not found.');
    }

    // Decode the 'nationality' field to get the selected nationalities for this job
    $selectedNationalities = json_decode($job->nationality);

    // Check if the candidate is authenticated and has the necessary information
    $candidate = auth('candidate')->user();
    if (!$candidate) {
        // Candidate is not authenticated, handle accordingly
        return redirect()->route('home')->with('error', 'Please log in to access this page.');
    }

    $candidateName = $candidate->name ?? 'Candidate Name Not Available';
    $candidateEmail = $candidate->contact_email ?? 'Candidate Email Not Available';

    $resumePath = optional($candidate->candidateDetail)->resume;

    $existingApplication = JobApplication::where('job_id', $jobId)
        ->where('candidate_id', $candidate->id)
        ->first();

    if ($existingApplication) {
        // Candidate has already applied for this job, show an error message
        return redirect()->route('candidate.jobs.index')->with('error', 'You have already applied for this job.');
    }

    return view('candidate.job-detail', compact('job', 'candidateName', 'candidateEmail', 'resumePath', 'selectedNationalities'));
}




    public function create($jobId)
    {

        // Retrieve the job by its ID
        $job = Jobs::find($jobId);

        if (!$job) {
            // Handle the case where the job is not found
            return redirect()->route('candidate.jobs.index')->with('error', 'Job not found.');
        }

        // Get the currently authenticated candidate
        $candidate = auth('candidate')->user();
        // Check if the candidate is authenticated
        if (!$candidate) {
            // Candidate is not authenticated, handle accordingly
            return redirect()->route('home')->with('error', 'Please log in to access this page.');
        }
        // Check if the candidate has a name and email
        $candidateName = $candidate->name ?? 'Candidate Name Not Available';
        $candidateEmail = $candidate->contact_email ?? 'Candidate Email Not Available';

        // Check if the candidate has a resume
        $resumePath = optional($candidate->candidateDetail)->resume;

        // Check if the candidate has already applied for this job
        $existingApplication = JobApplication::where('job_id', $jobId)
            ->where('candidate_id', $candidate->id)
            ->first();

        if ($existingApplication) {
            // Candidate has already applied for this job, show an error message
            return redirect()->route('candidate.jobs.index')->with('error', 'You have already applied for this job.');
        }

        // You can pass other relevant data to the view if needed
        return view('candidate.jobs.apply', compact('job', 'candidateName', 'candidateEmail', 'resumePath'));
    }

public function store(Request $request, $jobId)
{
    // Validate the form data
    $request->validate([
        'cover_letter' => 'nullable|string',
        'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Get the currently authenticated candidate's user ID
    $user_id = Auth::guard('candidate')->id();

    // Update the 'applied_at' timestamp for the candidate
    $candidate = Candidate::find($user_id);
    $candidate->applied_at = now(); // This sets the current timestamp
    $candidate->save();

    // Find the existing job application (if it exists)
    $existingJobApplication = JobApplication::where('job_id', $jobId)
        ->where('candidate_id', $user_id)
        ->first();

    // Check if the candidate has complete details
    $candidateDetail = $candidate->candidateDetail;
    if (!$candidateDetail) {
        return redirect()->route('candidate.jobs.index')->with('error', 'Please fill in your profile details before applying for jobs.');
    }

    // Create a new job application record or update the existing one
    if ($existingJobApplication) {
        $jobApplication = $existingJobApplication;
    } else {
        $jobApplication = new JobApplication();
        $jobApplication->job_id = $jobId;
        $jobApplication->candidate_id = $user_id;
    }

    $jobApplication->cover_letter = $request->input('cover_letter');
    $jobApplication->details_id = $candidateDetail->id;

    // Upload and save the new resume file if provided
    if ($request->hasFile('resume')) {
        $resumeFile = $request->file('resume');
        $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
        $resumePath = $resumeFile->storeAs('resumes', $resumeFileName, 'public');
        $jobApplication->resume = $resumePath;
    } elseif (!$jobApplication->resume) {
        // If no new resume is uploaded and the job application does not have a resume,
        // set it to the candidate's resume from CandidateDetail (if it exists)
        if ($candidateDetail && $candidateDetail->resume) {
            $jobApplication->resume = $candidateDetail->resume;
        }
    }

    $jobApplication->save();

    // Redirect back to the job listing or show a success message
    return redirect()->route('candidate.jobs.index')->with('success', 'Job application submitted successfully');
}


    public function appliedJobs()
{
    // Get the currently authenticated candidate
    $candidate = Auth::guard('candidate')->user();

    if (!$candidate) {
        // Candidate is not authenticated, handle accordingly
        return redirect()->route('home')->with('error', 'Please log in to access this page.');
    }
    // Fetch applied jobs for the candidate and order them by applied_at in descending order
    $appliedJobs = JobApplication::where('candidate_id', $candidate->id)
        ->with(['job' => function ($query) {
            $query->orderBy('created_at', 'desc'); // Order by created_at in descending order
        }])
        ->orderBy('created_at', 'desc') // Additional ordering by applied_at for appliedJobs collection
        ->get();

    return view('candidate.jobs.show', compact('appliedJobs'));
}


}
