@extends('layouts.employer')

@section('content')
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Edit a New Jobs</h2>
                    <div class="breadcrumbs"><a href="{{ route('employer.index') }}">Home</a><a href="{{ route('employer.index') }}">Dashboard</a><span>Job Submission Form</span></div>
                </div>

                <!--Logo and Cover image-->
                <!-- <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Logo and Cover image</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 ">

                        <div class="row">

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">

                                    <div class="dashboard-profile-pic">
                                        <div class="dashboard-profile-photo">
                                            <img src="images/jobs-company/pic1.jpg" alt="">
                                            <div class="upload-btn-wrapper">
                                                <button class="site-button button-sm">Upload Photo</button>
                                                <input type="file" name="myfile">
                                            </div>
                                        </div>
                                        <p><b>Company Logo :- </b> Max file size is 1MB, Minimum dimension: 136 x 136 And Suitable files are .jpg & .png</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="dashboard-cover-pic">
                                    <form action="upload.php" class="dropzone"></form>
                                    <p><b>Background Banner Image :- </b> Max file size is 1MB, Minimum dimension: 770 x 310 And Suitable files are .jpg & .png</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>  -->

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <form method="POST" action="{{ route('jobs.update', $job->id) }}">
                             @csrf
                             @method('PUT')
<div class="row">


                                    <!--Job title-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_position">Job Position</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="job_position" name="job_position" value="{{ old('job_position', $job->job_position) }}" placeholder="Job Position">
                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                 @error('job_position')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--Job title-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Field of Work</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="field_of_work" name="field_of_work" value="{{ old('field_of_work', $job->field_of_work) }}" placeholder="Field of Work">
                                                <i class="fs-input-icon fa fa-file-alt"></i>
                                                 @error('field_of_work')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                   <!--Offered Salary-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Offered Salary</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="salary" name="salary" value="{{ old('field_of_work', $job->salary) }}" placeholder="Salary">
                                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                 @error('salary')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Gender-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="ls-inputicon-box">
                                               <select id="gender" name="gender" class="wt-select-box selectpicker" data-live-search="true" title="Gender" data-bv-field="size">
    <option class="bs-title-option" value="">Gender</option>
    <option value="Male" {{ $job->gender === 'Male' ? 'selected' : '' }}>Male</option>
    <option value="Female" {{ $job->gender === 'Female' ? 'selected' : '' }}>Female</option>
    <option value="Any" {{ $job->gender === 'Any' ? 'selected' : '' }}>Any</option>
</select>
                                                <i class="fs-input-icon fa fa-venus-mars"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Country-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <div class="ls-inputicon-box">
                                                 <select class="wt-select-box selectpicker" data-live-search="true" name="nationality[]" id="autocomplete" multiple="multiple" title="" data-bv-field="size">
                @foreach($nationalities as $country)
                    <option value="{{ $country->name }}" {{ is_array($selectedNationalities) && in_array($country->name, $selectedNationalities) ? 'selected' : '' }}>
                        {{ $country->name }}
                    </option>
                @endforeach
            </select>
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                  @error('nationality')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--Location-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group">
        <label >Location</label>
        <div class="ls-inputicon-box">
            <select class="wt-select-box selectpicker @error('location') is-invalid @enderror" id="location" name="location">
                <option value="">Select Location</option>
                <option value="Dubai" {{ old('location', $job->location) === 'Dubai' ? 'selected' : '' }}>Dubai</option>
                <option value="Sharjah" {{ old('location', $job->location) === 'Sharjah' ? 'selected' : '' }}>Sharjah</option>
                <option value="Ajman" {{ old('location', $job->location) === 'Ajman' ? 'selected' : '' }}>Ajman</option>
                <option value="Ras Al Khaimah" {{ old('location', $job->location) === 'Ras Al Khaimah' ? 'selected' : '' }}>Ras Al Khaimah</option>
                <option value="Abu Dhabi" {{ old('location', $job->location) === 'Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
                <option value="Fujairah" {{ old('location', $job->location) === 'Fujairah' ? 'selected' : '' }}>Fujairah</option>
                <option value="Umm Al Quwain" {{ old('location', $job->location) === 'Umm Al Quwain' ? 'selected' : '' }}>Umm Al Quwain</option>
            </select>
            <i class="fs-input-icon fa fa-map-marker-alt"></i>
        </div>
        @error('location')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>




                                   <!--Description-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="form-control" id="requirements" name="requirements"  rows="3" >{{  $job->requirements }}</textarea>
                                        </div>
                                    </div>

                                   <!--Start Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" id="posted_date" name="posted_date" value="{{  $job->posted_date }}"  type="date" placeholder="mm/dd/yyyy">
<i class="fs-input-icon fa fa-calendar-alt"></i>
                                                 @error('posted_date')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" id="closing_date" name="closing_date" value="{{  $job->closing_date }}" type="date" placeholder="mm/dd/yyyy">
<i class="fs-input-icon fa fa-calendar-alt"></i>
                                                 @error('closing_date')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="text-left">
                                            <button type="submit" class="site-button m-r5">Publish Job</button>

                                        </div>
                                    </div>




                            </div>
                       </form>
                    </div>
                </div>

            </div>

    	</div>

@endsection
