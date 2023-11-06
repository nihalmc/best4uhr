@extends('layouts.app') <!-- Use your layout file if applicable -->

@section('content')
<div class="container">
    <h1>Job Listings</h1>

    @if (count($jobs) > 0)
        <ul class="list-group">
            @foreach ($jobs as $job)
                <li class="list-group-item">
                    <h4>{{ $job->job_position }}</h4>
                    <p>{{ $job->field_of_work }}</p>
                    <p>Location: {{ $job->location }}</p>
                    <p>Salary: {{ $job->salary }}</p>
                    <!-- Add more job details as needed -->

                    <a href="{{ route('job.apply.form', ['jobId' => $job->id]) }}" class="btn btn-primary">Apply</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No jobs available.</p>
    @endif
</div>

@endsection
