
@extends('layouts.app')

@section('content')

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">{{ $job->job_position }}</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>Job Detail</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

     @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


            <!-- OUR BLOG START -->
            <div class="section-full  p-t20 p-b20 bg-white">
                <div class="container">

                    <!-- BLOG SECTION START -->
                    <div class="section-content">
                        <div class="row d-flex justify-content-center">

                            <div class="col-lg-8 col-md-12">
                                <!-- Candidate detail START -->
                                <div class="cabdidate-de-info">
                                    <div class="twm-job-self-wrap">
                                        <div class="twm-job-self-info">
                                            <div class="twm-job-self-top">
                                                <div class="twm-mid-content">
<h3 class="mb-3">Job Information:-</h3>
                       <h5 >Job Code:{{ $job->job_code }}</h5>
                        <h5 >Field of Work:{{ $job->field_of_work }}</h5>
                         <h5>Location:{{ $job->location }}</h5>
                         <h5>Offered Salary:{{ $job->salary }}/Month</h5>
                         <h5>Nationalities:@if ($selectedNationalities)
    @foreach ($selectedNationalities as $selectedNationality)
        {{ $selectedNationality }},
    @endforeach
@else
    No selected nationalities for this job.
@endif
</h5>
                         <h5>Gender:{{ $job->gender }}</h5>



                                                    <div class="twm-job-self-mid">
                                                        <div class="twm-job-self-mid-left">

                                                             <!--<div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>-->

                                                        </div>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <h4 >Requirements:</h4>
                                    <ul class="description-list-2">


                                        <li>
                                            <i class="feather-check"></i>
                                           {{ $job->requirements }}
                                        </li>



                                    </ul>
<h5>Posted Date:<span style="color:#00cc00"> {{ date('d/m/Y', strtotime($job->posted_date)) }}</span></h5>
 <h5 class="twm-job-apllication-area">Closing Date:<span style="color:#d81f34"> {{ date('d/m/Y', strtotime($job->closing_date)) }}</span></h5>

                                    <h4 class="twm-s-title">Important Note:</h4>
                                    <ul class="description-list-2">
                                        <li>
                                            <i class="feather-check"></i>
                                           Those who have already registered in our consultancy, kindly send your resume with the  Job Code,Job Position Name & our Register Number in the subject of the Email.

                                        </li>
                                        <li>
                                            <i class="feather-check"></i>
                                           After that, please note when you are sending the resume make sure that it should be STRICTLY matching the REQUIREMENTS, DUTIES & RESPONSIBILITIES that we mentioned above & it should be mentioned in the resume also.
                                        </li>
                                        <li>
                                            <i class="feather-check"></i>
                                            If it is not matching our requirements, your resume will not be considered.
                                        </li>


                                    </ul>
                                    <div class=" twm-job-self-wrap text-center">
                                    <div class=" twm-job-self-info">
 <div class="twm-job-self-bottom">
                                                         @if ($job->status === 'Open')
    <a class="site-button" href="#apply_job_popup" data-bs-toggle="modal" role="button">
        Apply Now
    </a>
@else
    <p ><span style="color:red ">This job is currently Closed. Applications are not being accepted.</span></p>
@endif
                                                    </div>
                                               </div>
                                               </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 rightSidebar">



                                <div class="twm-s-info3-wrap mb-5">
                                    <div class="twm-s-info3">
                                        <div class="twm-s-info-logo-section">

                                            <h4 class="twm-title">Best For You HR Consultancy</h4>
                                        </div>
                                        <ul>


                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-mobile-alt"></i>
                                                    <span class="twm-title">Phone</span>
                                                    <div class="twm-s-info-discription"><a href="tel:+971545865418" target="_blank">+971 54 586 5418</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-at"></i>
                                                    <span class="twm-title">Email</span>
                                                    <div class="twm-s-info-discription" ><a href="mailto:info@best4uhr.com" target="_blank">info@best4uhr.com</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-desktop"></i>
                                                    <span class="twm-title">Website</span>
                                                    <div class="twm-s-info-discription"><a href="http://www.best4uhr.com/" target="_blank">http://best4uhr.com/</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="twm-title">Address</span>
                                                    <div class="twm-s-info-discription">Office No: 203, 2nd Floor, Brass II Building, Near Sharaf DG Metro Station (Exit No:3), Bur Dubai, Dubai, UAE</div>
                                                </div>
                                            </li>

                                        </ul>


                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- OUR BLOG END -->


        </div>
        <!-- CONTENT END -->


<!--apply job popup -->
        <div class="modal fade" id="apply_job_popup" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="sign_up_popupLabel">Apply For This Job</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                    <div class="modal-body">
                        <div class="apl-job-inpopup">
                            <!--Basic Information-->
                            <div class="panel panel-default">

                                <div class="panel-body wt-panel-body p-a20 ">

 @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                                    <div class="twm-tabs-style-1">
                           <form method="POST" action="{{ route('job.apply.store', ['jobId' => $job->id]) }}" enctype="multipart/form-data">
                                   @csrf

                                        <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Your Name</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" name="candidateName" type="text" value="{{ $candidateName }}" placeholder="Devid Smith">
                                                            <i class="fs-input-icon fa fa-user "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" type="email" value="{{ $candidateEmail }}" placeholder="Devid@example.com">
                                                            <i class="fs-input-icon fas fa-at"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea class="form-control" name="cover_letter" rows="3" placeholder="Message sent to the employer"></textarea>
                                                    </div>
                                                </div>

<div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Upload Resume</label>
                                                        <div class="ls-inputicon-box">
                                                            <input class="form-control" type="file"  id="resume" name="resume"  placeholder="Click here or drop files to upload">
                                                            <small>*You can upload your resume in PDF or Word format.</small>
                                                            <i class="sl-icon-plus"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="text-left">
                                                        <button type="submit" class="site-button">Send Application</button>
                                                    </div>
                                                </div>



                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


@endsection
