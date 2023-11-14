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

class HomeController extends Controller
{
   function index(){

    $jobs = Jobs::where('status', 'Open')
        ->orderBy('posted_date', 'desc') // Order by posted_date in descending order
        ->take(10) // Limit the result to 10 jobs
        ->get();
         $nationalities = Nationality::all();
    return view('website.index' , compact('jobs','nationalities'));
   }

    public function search(Request $request)
    {
        // Retrieve job search criteria from the request
        $jobTitle = $request->input('job_position');
        $category = $request->input('field_of_work');
        $location = $request->input('location');

        // Query the database to find matching jobs based on the criteria
        $jobs = Jobs::where('status', 'Open')
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
 $nationalities = Nationality::all();
        // Return the search results to a view
        return view('website.index', compact('jobs','nationalities'));
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


public function indexd(Request $request)
{
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

    // Order jobs by posted_date in descending order
    $jobs = $query->orderBy('posted_date', 'desc')->paginate($jobsPerPage);

    if ($request->ajax()) {
        return response()->json(['jobs' => $jobs]);
    }

    return view('website.jobs', compact('jobs', 'searchQuery'));
}


 public function created($jobId)
    {
        // Retrieve the job by its ID
        $job = Jobs::find($jobId);

        if (!$job) {
            // Handle the case where the job is not found
            return redirect()->route('candidate.jobs.index')->with('error', 'Job not found.');
        }


        // You can pass other relevant data to the view if needed
        return view('website.apply', compact('job'));
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

    $nationalities = Nationality::all();
    return view('website.job-detail', compact('job','nationalities'));
}



   function contact(){
$nationalities = Nationality::all();
    return view('website.contact', compact('nationalities'));
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
$nationalities = Nationality::all();
    return view('website.profile', compact('nationalities'));
   }
    function recruitments(){
$nationalities = Nationality::all();
    return view('website.recruitments', compact('nationalities'));
   }
    function specialization(){
$nationalities = Nationality::all();
    return view('website.specialization', compact('nationalities'));
   }




}
