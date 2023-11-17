<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Employers;
use App\Models\Jobs;

class EmployerAuthController extends Controller
{


    public function index()
    {
        $employer = Auth::guard('employer')->user();
        $jobs = Jobs::where('employer_id', auth('employer')->user()->id)->get();
        return view('employer.index', compact('employer', 'jobs'));
    }

    public function showLoginForm()
    {
        return view('employer.login');
    }

    // Handle employer login
    public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log in the employer
        if (Auth::guard('employer')->attempt($request->only('username', 'password'))) {
            $employer = Auth::guard('employer')->user();
            $jobs = Jobs::all();
            // Authentication passed, redirect to employer dashboard or desired page
            return view('employer.index', compact('employer', 'jobs'))->with('success', 'Login successful.');
        }

        // Authentication failed, redirect back with errors
        return redirect()->route('home')->with('error', 'Invalid employer credentials.');
    }

    // Logout the employer
    public function logout()
    {
        Auth::guard('employer')->logout();
        return redirect()->route('home')->with('success', 'Logged out successfully.');
    }


    public function register(Request $request)
    {
        // Validate the registration data (similar to your restore method)
        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'address' => 'required|string|max:255' ,
            'contact_email' => 'required|email|unique:employers,contact_email',
            'mobile' => 'required|string',
            'username' => 'required|string|unique:employers,username',
            'password' => 'required|min:8',
        ]);

        // Create a new employer instance
        $employer = new Employers();
        $employer->company_name = $request->company_name;
        $employer->contact_person = $request->contact_person;
        $employer->contact_email = $request->contact_email;
        $employer->address = $request->address;
        $employer->mobile = $request->mobile;
        $employer->username = $request->username;
        $employer->isEmployer = true;
        $employer->password = Hash::make($request->password);

        $employer->save();

        // Authenticate the newly registered employer (optional)
        Auth::guard('employer')->login($employer);

        // Redirect to the employer dashboard or desired page
        return redirect()->route('employer.index')->with('success', 'Employer registered successfully');
    }

    public function showChangePasswordForm()
    {
        return view('employer.changepassword');
    }

    public function changePassword(Request $request)
    {
        // Validate the form data
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
        ]);

        // Check if the old password matches the current authenticated employer's password
        $user = Auth::guard('employer')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('employer.change.password')->with('error', 'The provided old password is incorrect.');
        }

        // Update the employer's password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('employer.change.password')->with('success', 'Password changed successfully.');
    }
}
