<!-- resources/views/employer/register.blade.php -->

@extends('layouts.website')  <!-- Use an appropriate layout -->

@section('content')
<div class="container">
    <h2>Register as an Employer</h2>
    <form method="POST" action="{{ route('employer.register.submit') }}">
        @csrf

        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
             @error('company_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>


        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" name="contact_email" id="contact_email" class="form-control" required>
             @error('contact_email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
         <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required>
             @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
             @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
             @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
             @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection


<!-- resources/views/employer/register.blade.php -->

@extends('layouts.website')  <!-- Use an appropriate layout -->

@section('content')
<div class="container">
    <h2>Register as an Candidate</h2>
    <form method="POST" action="{{ route('candidate.register.submit') }}">
        @csrf

        <div class="form-group">
            <label for="company_name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
             @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>


        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" name="contact_email" id="contact_email" class="form-control" required>
             @error('company_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
         <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" name="mobile" id="mobile" class="form-control" required>
             @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
             @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
             @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
             @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
