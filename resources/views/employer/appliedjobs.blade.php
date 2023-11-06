@extends('layouts.employer')

@section('content')
    <div class="container">
        <h1>Applied Job Applications</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('applied-jobs.index') }}" method="GET">
            <div class="form-group row">
                <div class="col-md-8">
                    <input type="text" name="search_query" class="form-control" placeholder="Search by Job Position, Candidate Name, or Application Date">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Candidate</th>
                    <th>Job Position</th>
                    <th>Resume</th>
                    <th>Application Date</th>
                     <th>Lstatus</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appliedJobs as $application)
                    <tr>
                        <td>{{ $application->candidate->name }}</td>
                        <td>{{ $application->job->job_position }}</td>
                        <td>
                            @if ($application->resume)
                                <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a>
                            @else
                                No Resume Attached
                            @endif
                        </td>
                        <td>{{ $application->created_at }}</td>
                        <td>{{ $application->lstatus }}</td>
                        <td>
                             <form action="{{ route('job-applications.update-last-status', ['application' => $application, 'lstatus' => 'Hired']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Hired</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
