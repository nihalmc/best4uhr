@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Apply for Job</div>

                <div class="card-body">
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @else
                        <form method="POST" action="{{ route('job.apply.store', ['jobId' => $job->id]) }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Display Candidate Name -->
                            <div class="form-group">
                                <label for="candidate_name">Name</label>
                                <input id="candidate_name" type="text" class="form-control" value="{{ $candidateName }}" readonly>
                            </div>

                            <!-- Display Candidate Email -->
                            <div class="form-group">
                                <label for="candidate_email">Email</label>
                                <input id="candidate_email" type="email" class="form-control" value="{{ $candidateEmail }}" readonly>
                            </div>

                            <!-- Display Candidate Resume -->
                            @if ($resumePath)
                            <div class="form-group">
                                <label for="candidate_resume">Resume</label>
                                <p>
                                    <iframe src="{{ asset('storage/' . $resumePath) }}" width="150px"></iframe>
                                    <a href="{{ asset('storage/' . $resumePath) }}" target="_blank">View Resume</a>
                                </p>
                            </div>
                            @endif

                            <!-- Cover Letter -->
                            <div class="form-group">
                                <label for="cover_letter">Cover Letter</label>
                                <textarea id="cover_letter" name="cover_letter" class="form-control" required></textarea>
                            </div>

                            <!-- Resume Upload -->
                            <div class="form-group">
                                <label for="resume">Resume (PDF or Word)</label>
                                <input type="file" id="resume" name="resume" class="form-control-file" readonly>
                                <small class="form-text text-muted">Optional: You can upload your resume in PDF or Word format.</small>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
