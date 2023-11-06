@extends('layouts.employer')

@section('content')
<div class="container">
    <h2>Job Details</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $job->job_position }}</h4>

            <p class="card-text">
                <strong>Field of Work:</strong> {{ $job->field_of_work }}<br>
                <strong>Location:</strong> {{ $job->location }}<br>
                <strong>Salary:</strong> {{ $job->salary }}<br>
                <strong>Nationality:</strong> {{ $job->nationality }}<br>
                <strong>Gender:</strong> {{ $job->gender }}<br>
                <strong>Requirements:</strong><br>{{ $job->requirements }}<br>
                <strong>Posted Date:</strong> {{ $job->posted_date }}<br>
                <strong>Closing Date:</strong> {{ $job->closing_date }}<br>
                <!-- Add more job attributes as needed -->
            </p>
        </div>
    </div>

    <!-- Add a link to go back to the job listings -->
    <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Back to Job Listings</a>
</div>

@endsection
