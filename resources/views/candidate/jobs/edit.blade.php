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

                        @if ($jobApplication && $$jobApplication->cv_path)
                            <p>You have already uploaded a CV.</p>
                            <!-- Display a link to view the CV or provide options to update it -->
                            <a href="{{ asset('storage/' . $jobApplication->resume) }}" target="_blank">View CV</a>
                        @else
                            <p>You have not uploaded a CV yet.</p>
                            <!-- Provide options to upload a CV -->
                            <div class="form-group">
                                <label for="cv">Upload CV (PDF or Word)</label>
                                <input type="file" id="cv" name="cv" class="form-control-file" required>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<iframe src="{{ asset('storage/' . $invoice->file) }}" width="150px"></iframe>
                                            <a href="{{ asset('storage/' . $invoice->file) }}" target="_blank" class="mt-3 flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                Open File
                                            </a>
                                            <a href="{{ asset('storage/' . $invoice->file) }}" target="_blank" download class="mt-3 flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                Download File
                                            </a>
