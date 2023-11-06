<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\Candidate;
use App\Models\Employers;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AuthController extends Controller
{
    public function index()
    {

        $user = Auth::guard('user')->user();
         $jobs = Jobs::all();
         $appliedJobs =JobApplication::all();
         $jobseekr=Candidate::all();
         $employer=Employers::all();
        // Authentication passed, redirect to employer dashboard or desired page
        return view('admin.index' ,compact('user','jobs','appliedJobs','jobseekr','employer'));
    }
    public function showLoginForm()
    {
        return view('admin.login'); // Create a login form view for admin (admin.login).
    }
    public function adminLogin(Request $request)
    {
        // Validate the login data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::guard('user')->attempt($request->only('username', 'password'))) {
           $user = Auth::guard('user')->user();
            $jobs = Jobs::all();
            $appliedJobs =JobApplication::all();
         $jobseekr=Candidate::all();
         $employer=Employers::all();
            return view('admin.index' ,compact('user','jobs','appliedJobs','jobseekr','employer'));
        }


        // Authentication failed, redirect back with errors
        return redirect()->route('admin.login')->with('error', 'Invalid credentials');

    }
   // logout
   public function adminLogout()
   {

    Auth::logout();
    return redirect()->route('admin.login')->with('success', 'Logged out successfully');
}


   public function showChangePasswordForm()
   {
       return view('admin.changepassword');
   }
   public function changePassword(Request $request)
   {
       $request->validate([
           'old_password' => 'required',
           'new_password' => 'required|string|min:8|confirmed',
       ]);

       $credentials = [
           'username' => Auth::user()->username, // Assuming your username field is 'username'
           'password' => $request->old_password,
       ];

       if (Auth::attempt($credentials)) {
           $user = Auth::user();
           $user->password = Hash::make($request->new_password);
           $user->save();

           return redirect()->route('change.password.form')->with('success', 'Password changed successfully.');
       } else {
           return redirect()->route('change.password.form')->with('error', 'The provided old password is incorrect.');
       }
   }
}
