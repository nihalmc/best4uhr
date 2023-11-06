@extends('layouts.app') <!-- Include your app's layout if you have one -->

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Apply for Job</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('job.apply.store', ['jobId' => $job->id]) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="cover_letter">Cover Letter</label>
                            <textarea id="cover_letter" name="cover_letter" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="resume">Resume (PDF or Word)</label>
                            <input type="file" id="resume" name="resume" class="form-control-file" required>
                        </div>

                        @if ($resumePath)
                            <p>You have already uploaded a resume.</p>
                            <!-- Display a link to view the resume or provide options to update it -->
                            <a href="{{ $resumeUrl }}" target="_blank">View Resume</a>
                        @else
                            <p>You have not uploaded a resume yet.</p>
                        @endif

                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
