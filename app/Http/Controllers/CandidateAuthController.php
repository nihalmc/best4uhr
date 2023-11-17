<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Candidate;
use App\Models\Jobs;
use App\Models\JobApplication;


class CandidateAuthController extends Controller
{


    public function index()
    {
        $candidate = Auth::guard('candidate')->user();
        $jobs = Jobs::all();
        // Fetch applied jobs for the candidate
        $appliedJobs = JobApplication::where('candidate_id', $candidate->id)
            ->with('job') // Eager load the job details
            ->get();

        return view('candidate.index', compact('candidate', 'jobs', 'appliedJobs'));
    }

    public function showLoginForm()
    {
        return redirect()->route('home');
    }

   public function login(Request $request)
{
    // Validate the login data
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ], [
        'password.required' => 'The password field is required.',
    ]);

    // Attempt to log in the candidate
    if (Auth::guard('candidate')->attempt($request->only('username', 'password'))) {
        $candidate = Auth::guard('candidate')->user();

        if ($candidate->status === 'approved') {
            // Candidate is approved, authentication passed, redirect to candidate dashboard
            return redirect()->route('candidate.index')->with('success', 'Login successful.');
        } else {
            // Candidate is not approved, log them out and display an error message
            Auth::guard('candidate')->logout();
            return redirect()->route('home')->with('error', 'Your account is not yet approved.');
        }
    }

    // Authentication failed, redirect back with errors
    return redirect()->route('home')->with('error', 'Invalid credentials.');
}


   public function logout(Request $request)
{
    Auth::guard('candidate')->logout();

    // Additional logout logic or data for the view
    $additionalData = [
        'logoutMessage' => 'Logged out successfully.',
        'additionalScript' => '<script>alert("Additional logout script");</script>',
    ];

    return redirect()->route('home')->with($additionalData);
}


    public function showRegistrationForm()
    {
        return redirect()->route('home');
    }

  public function register(Request $request)
{
    // Validate the form data with custom messages
    $request->validate([
        'name' => 'required|string|max:255',
        'contact_email' => 'required|email|unique:candidates,contact_email',
        'mobile' => 'nullable|string',
        'username' => 'required|string|unique:candidates,username',
        'password' => 'required|min:8',
        'registration_number' => 'required|string|unique:candidates,registration_number',
    ], [
        'registration_number.unique' => 'The registration number has already been taken.',
        'password.required' => 'The password field is required.', // You can add custom messages for other rules
    ]);

    // Create a new candidate with the default 'pending' status
    $candidate = new Candidate([
        'name' => $request->name,
        'contact_email' => $request->contact_email,
        'mobile' => $request->mobile,
        'username' => $request->username,
        'registration_number' => $request->registration_number,
        'password' => Hash::make($request->password),
        'status' => 'pending',
    ]);

    $candidate->save();

    // You can add your approval logic here to change the candidate's status to 'approved' when needed.

    return redirect()->route('home')->with('success', 'Candidate created successfully. You are pending approval.');
}



    public function showChangePasswordForm()
    {
        $candidate = Auth::guard('candidate')->user();
        return view('candidate.changepassword', compact('candidate'));
    }

    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if the old password matches the current authenticated candidate's password
        $user = Auth::guard('candidate')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('candidate.change.password')->with('error', 'The provided old password is incorrect.');
        }

        // Update the employer's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('candidate.change.password')->with('success', 'Password changed successfully.');
    }
}
