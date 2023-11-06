@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Candidate Details') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('candidate-details.store') }}" enctype="multipart/form-data">
                        @csrf

                        {{-- Candidate Details --}}



                        <div class="form-group row">
                            <label for="home_country" class="col-md-4 col-form-label text-md-right">{{ __('Home Country') }}</label>
                            <div class="col-md-6">
                                <input id="home_country" type="text" class="form-control" name="home_country" value="{{ old('home_country') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="uae_status" class="col-md-4 col-form-label text-md-right">{{ __('UAE Status') }}</label>
                            <div class="col-md-6">
                                <input id="uae_status" type="text" class="form-control" name="uae_status" value="{{ old('uae_status') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience') }}</label>
                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control" name="experience" value="{{ old('experience') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="languages_known" class="col-md-4 col-form-label text-md-right">{{ __('Languages Known') }}</label>
                            <div class="col-md-6">
                                <input id="languages_known" type="text" class="form-control" name="languages_known" value="{{ old('languages_known') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
    <label for="resume" class="col-md-4 col-form-label text-md-right">{{ __('Resume (PDF/DOC/DOCX)') }}</label>
    <div class="col-md-6">
        <input id="resume" type="file" class="form-control" name="resume" accept=".pdf,.doc,.docx">
        @error('resume')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <p>The uploaded file exceeds the maximum allowed size of 2MB.</p>
    </div>
</div>


                        {{-- Display Validation Errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Submit Button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Details') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
