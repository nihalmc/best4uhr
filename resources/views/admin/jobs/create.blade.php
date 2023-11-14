@extends('layouts.admin')

@section('content')
<div id="content">
    <div class="content-admin-main">
        <div class="wt-admin-right-page-header clearfix">
            <h2>Post New Jobs</h2>
            <div class="breadcrumbs">
                <a href="#">Home</a>
                <a href="#">Dashboard</a>
                <span>Job Submission Form</span>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-title m-a0"><i class="fa fa-suitcase"></i> Job Details</h4>
            </div>
            <div class="panel-body wt-panel-body p-a20 m-b30">
                <div class="col-md-12">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

                <form method="POST" action="{{ route('admin.jobs.store') }}">
                    @csrf
                    <div class="row">
                        <!-- Job Category -->
                        <!-- Company Name -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label for="employer_id">Company Name</label>
                                <div class="ls-inputicon-box">
                                    <select class="wt-select-box selectpicker" id="employer_id" name="employer_id"
                                        data-live-search="true" title="" data-bv-field="employer_id" required>
                                        <option disabled selected value="">Select Company</option>
                                        @foreach($employers as $employer)
                                        <option value="{{ $employer->id }}">{{ $employer->company_name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fs-input-icon fa fa-user-tie"></i>
                                    @error('employer_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Job title -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label for="job_position">Job Position</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" type="text" id="job_position" name="job_position"
                                        placeholder="Job Position">
                                    <i class="fs-input-icon fa fa-address-card"></i>
                                    @error('job_position')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Field of Work -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Field of Work</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" type="text" id="field_of_work" name="field_of_work"
                                        placeholder="Field of Work">
                                    <i class="fs-input-icon fa fa-file-alt"></i>
                                    @error('field_of_work')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Offered Salary -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Offered Salary</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" type="text" id="salary" name="salary"
                                        placeholder="Salary">
                                    <i class="fs-input-icon fa fa-dollar-sign"></i>
                                    @error('salary')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="ls-inputicon-box">
                                    <select id="gender" name="gender" class="wt-select-box selectpicker"
                                        data-live-search="true" title="" data-bv-field="size">
                                       <option class="bs-title-option" value="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
                                    </select>
                                    <i class="fs-input-icon fa fa-venus-mars"></i>
                                       @error('gender')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Nationality -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                             <div class="form-group city-outer-bx has-feedback">
        <label for="autocomplete">Nationality</label>
        <div class="ls-inputicon-box">
            <select class="wt-select-box selectpicker" id="autocomplete" name="nationality[]" data-live-search="true" title="" data-bv-field="size" multiple="multiple">
                @foreach($nationalities as $country)
                    <option value="{{ $country->name }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <i class="fs-input-icon fa fa-globe-americas"></i>
            @error('nationality')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
                        </div>

                        <!-- Location -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group">
        <label >Location</label>
        <div class="ls-inputicon-box">
        <select class="wt-select-box selectpicker" id="location" name="location">
            <option value="Dubai">Dubai</option>
            <option value="Sharjah">Sharjah</option>
            <option value="Ajman">Ajman</option>
            <option value="Ras Al Khaimah">Ras Al Khaimah</option>
            <option value="Abu Dhabi">Abu Dhabi</option>
            <option value="Fujairah">Fujairah</option>
            <option value="Umm Al Quwain">Umm Al Quwain</option>
        </select>
        <i class="fs-input-icon fa fa-map-marker-alt"></i>
        @error('location')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>
 </div>

                       <!-- Job Code -->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Job Code</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" id="job_code" name="job_code" type="text"
                                value="{{ old('job_code') }}" placeholder="Job Code">
                            <i class="fs-input-icon fa fa-map-pin"></i>
                            @error('job_code')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                        <!-- Job Requirements -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Requirements</label>
                                <div class="ls-inputicon-box">
                                    <textarea class="form-control" id="requirements" name="requirements"
                                        rows="5"></textarea>
                                    <i class="fs-input-icon fa fa-list-ul"></i>
                                    @error('requirements')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
<!-- Posted Date -->
<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group">
        <label>Posted Date</label>
        <div class="ls-inputicon-box">
            <input class="form-control" type="date" id="posted_date" name="posted_date" placeholder="mm/dd/yyyy">
            <i class="fs-input-icon fa fa-calendar-alt"></i>
            @error('posted_date')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>





                        <!-- Closing Date -->
                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Closing Date</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control " type="date" id="closing_date" name="closing_date" >
                                    <i class="fs-input-icon fa fa-calendar-alt"></i>
                                    @error('closing_date')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                      <div class="col-lg-12 col-md-12">
                            <div class="text-left">
                        <button class="site-button m-r5" type="submit">Publish Job</button>
                    </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
        $(document).ready(function() {
            $('#autocomplete').select2({
                placeholder: 'Select Nationality',
                allowClear: true,
                tags: true,
            });
        });
    </script>

@endsection
