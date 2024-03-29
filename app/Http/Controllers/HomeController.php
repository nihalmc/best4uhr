<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freedetails;
use App\Models\Jobs;
use App\Models\Employers;
use App\JobStatus;
use App\Models\Aplay_details;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Nationality;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
   function index(){

    $jobs = Jobs::where('status', 'Open')
        ->orderBy('posted_date', 'desc') // Order by posted_date in descending order
        ->take(10) // Limit the result to 10 jobs
        ->get();

    return view('website.index' , compact('jobs'));
   }
public function search(Request $request)
{
    // Retrieve job search criteria from the request
    $jobTitle = $request->input('job_position');
    $category = $request->input('field_of_work');
    $location = $request->input('location');

    // Query the database to find matching jobs based on the criteria
    $jobs = Jobs::whereIn('status', ['Open', 'Closed'])
        ->when($jobTitle, function ($query, $jobTitle) {
            return $query->where('job_position', $jobTitle);
        })
        ->when($category, function ($query, $category) {
            return $query->where('field_of_work', $category);
        })
        ->when($location, function ($query, $location) {
            return $query->where('location', 'like', '%' . $location . '%');
        })
        ->get();

    // Check if there are results
    if ($jobs->count() > 0) {
        // If results are found, return them to the view along with searchQuery and totalJobsCount
        $searchQuery = $request->input('search_query'); // Get the search query
        $totalJobsCount = $jobs->count(); // Calculate total jobs count
        return view('website.jobs', compact('jobs', 'searchQuery', 'totalJobsCount'));
    } else {
        // If no matching jobs are found, return with an error message
        return redirect()->route('home')->with('error', 'No matching jobs found.');
    }
}



public function indexd(Request $request)
{
    // Get the search query and jobs per page value from the request
    $searchQuery = $request->input('search_query');
    $jobsPerPage = (int) $request->input('jobs_per_page', 10); // Cast to integer; default to 10 if not specified

    // Build a query to fetch jobs with both "Open" and "Closed" statuses and apply search filters
    $query = Jobs::where(function ($q) {
        $q->where('status', 'Open')
            ->orWhere('status', 'Closed');
    });

    if ($searchQuery) {
        $query->where(function ($q) use ($searchQuery) {
            $q->where('job_position', 'like', '%' . $searchQuery . '%')
                ->orWhere('field_of_work', 'like', '%' . $searchQuery . '%')
                ->orWhere('location', 'like', '%' . $searchQuery . '%');
        });
    }

    // Order the jobs by status and then by posted_date in descending order
    $query->orderByRaw('FIELD(status, "Open", "Closed")')->orderBy('posted_date', 'desc');

    // Check for "Show All" option
    if ($request->has('jobs_per_page') && $request->input('jobs_per_page') === 'all') {
        // No pagination for "Show All"
        $jobs = $query->get();
        $totalJobsCount = $jobs->count(); // Total count for "Show All"
    } else {
        // Paginate the results
        $jobs = $query->paginate($jobsPerPage);
        $totalJobsCount = $jobs->total(); // Total count for paginated results
    }

    if ($request->ajax()) {
        return response()->json(['jobs' => $jobs]);
    }

    return view('website.jobs', compact('jobs', 'searchQuery', 'totalJobsCount'));
}



public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'mobile' => 'required|string',
        'job_position' => 'required|string',
         'experience_region' => 'nullable|string',
        'experience_years' => 'nullable|integer',
        'resume' => 'sometimes|nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    if ($request->hasFile('resume') && $request->file('resume')->isValid()) {
        $cvPath = $request->file('resume')->store('resumes', 'public');

        Freedetails::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'job_position' => $request->input('job_position'),
            'experience_region' => $request->input('experience_region'),
        'experience_years' => $request->input('experience_years'),
            'resume' => $cvPath,
        ]);

        return redirect()->route('home')->with('success', 'Resume uploaded successfully.');
    }

    
}


function enquriform(){

    return view('website.enquriform');
   }
public function enquriformupload(Request $request)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'mobile' => 'required|string',
        'job_position' => 'required|string',
        'experience_region' => 'nullable|string',
        'experience_years' => 'nullable|integer',
        'resume' => 'sometimes|nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Check if a resume file is uploaded and valid
    if ($request->hasFile('resume') && $request->file('resume')->isValid()) {
        // Store the resume file in the 'resumes' directory within the 'public' disk
        $cvPath = $request->file('resume')->store('resumes', 'public');

        // URL of the script that handles form submissions
        $scriptURL = 'https://script.google.com/macros/s/AKfycbzM_I7XCTucQv1yaEUlv662oQBXybFyY9WQKLlg__qd-HG01VmvGdFvn5BzRX3SqRjHKA/exec';

        // Generate timestamp in IST with correct formatting
        $timestamp = Carbon::now('Asia/Kolkata')->format('d-m-Y h:i A');

        // Data to be sent to the script
        $formData = [
            'Name' => $request->name,
            'Email' => $request->email,
            'Mobile' => $request->mobile,
            'Jobposition' => $request->job_position,
            'Experienceregion' => $request->experience_region,
            'Experienceyears' => $request->experience_years,
            'Resumeurl' => asset('storage/' . $cvPath), // Assuming you're storing resumes in the 'storage' directory
            'Timestamp' => $timestamp,// Add timestamp to the form data
        ];

        // Send a POST request to the script URL with form data using GuzzleHttp\Client
        $client = new Client();
        $response = $client->post($scriptURL, [
            'form_params' => $formData,
        ]);

        // Check if the request was successful
        if ($response->getStatusCode() === 200) {
            // Redirect back to the home page with a success message
            return redirect()->route('enquriform')->with('success', 'Resume uploaded successfully.');
        } else {
            // Handle the case where the request was not successful
            return redirect()->back()->with('error', 'Failed to upload resume. Please try again later.');
        }
    } else {
        // Handle the case where no resume file is uploaded or it's not valid
        return redirect()->back()->with('error', 'Invalid or missing resume file.');
    }
}


    public function stored(Request $request, $jobId)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'mobile' => 'required|string',
        'cover_letter' => 'required|string',
        'resume' => 'nullable|mimes:pdf,doc,docx|max:2048',
    ]);

    // Find the job by its ID
    $job = Jobs::find($jobId);

    if (!$job) {
        // Handle the case where the job is not found
        return redirect()->route('website.jobs')->with('error', 'Job not found.');
    }

    // Create a new job application record
    $jobApplication = new Aplay_details([
        'job_id' => $job->id,
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'mobile' => $request->input('mobile'),
        'cover_letter' => $request->input('cover_letter'),
    ]);

    // Upload and save the resume file if provided
    if ($request->hasFile('resume')) {
        $resumeFile = $request->file('resume');
        $resumeFileName = time() . '_' . $resumeFile->getClientOriginalName();
        $resumePath = $resumeFile->storeAs('resumes', $resumeFileName, 'public');
        $jobApplication->resume = $resumePath;
    }

    // Save the job application record
    $jobApplication->save();

    // Redirect back to the job listing or show a success message
    return redirect()->route('home.jobs')->with('success', 'Job application submitted successfully.');
}

public function show($jobId)
{
    $job = Jobs::find($jobId);

    if (!$job) {
        // Handle the case where the job with the given ID is not found
        return abort(404); // You can customize the error response
    }

    // Decode the 'nationality' field to get the selected nationalities for this job
    $job->selectedNationalities = json_decode($job->nationality);


    return view('website.job-detail', compact('job'));
}



   function contact(){

    return view('website.contact');
   }


    public function submitContactForm(Request $request)
    {
         // Validate reCAPTCHA
    $recaptchaResponse = $request->input('g-recaptcha-response');
    $recaptchaSecret = '6LeLVXknAAAAAOcnebWUxR6JwzhtZk4hlKrZ1nb_';



    $recaptchaVerifyResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
    ]);

    if (!$recaptchaVerifyResponse->json()['success']) {
        return response()->json([
            'statusCode' => 401,
            'status' => false,
            'message' => 'Please complete the reCAPTCHA challenge.'
        ], 401);
    }


        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // Send the email
        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('bestforuhr@gmail.com')->send(new ContactFormMail($data)); // Update with your email address

        return view('website.contact');

    }

 function career(){

    return view('website.career');
   }

    function profile(){

    return view('website.profile');
   }
    function recruitments(){

    return view('website.recruitments');
   }
    function specialization(){

    return view('website.specialization');
   }




}
