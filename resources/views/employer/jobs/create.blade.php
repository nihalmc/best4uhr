@extends('layouts.employer')

@section('content')
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Post a New Jobs</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="{{ route('employer.index') }}">Dashboard</a><span>Job Submission Form</span></div>
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
                        <form method="POST" action="{{ route('jobs.store') }}">
                             @csrf
                               <div class="row">


                                    <!--Job title-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_position">Job Position</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="job_position" name="job_position" placeholder="Job Position">
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
                                                <input class="form-control" type="text" id="field_of_work" name="field_of_work" placeholder="Field of Work">
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
                                                <input class="form-control" type="text" id="salary" name="salary" placeholder="Salary">
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
                                                <select id="gender" name="gender" class="wt-select-box selectpicker"  data-live-search="true" title="" id="gender" data-bv-field="size">
                                                     <option class="bs-title-option" value="">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
                                    </select>
                                                <i class="fs-input-icon fa fa-venus-mars"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Country-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="autocomplete">Nationality</label>
                                            <div class="ls-inputicon-box">
                                                <select select class="wt-select-box selectpicker" id="autocomplete" name="nationality[]" data-live-search="true" title="Nationality" multiple="multiple">
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

                                    <!--Location-->
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



                                   <!--Description-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="form-control" id="requirements" name="requirements"  rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>

                                   <!--Start Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" id="posted_date" name="posted_date"   type="date">
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
                                                <input class="form-control " id="closing_date" name="closing_date"  type="date" >
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
