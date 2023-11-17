@extends('layouts.website')

@section('content')

        <!-- CONTENT START -->
        <div class="page-content">

            <!--Banner Start-->
            <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image:url(images/main-slider/slider1/bg1.jpg)">
                <div class="row">

                    <!--Left Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="twm-bnr-left-section">

                            <div class="twm-bnr-title-large">Find the <span class="site-text-orange">job</span> that fits your life</div>
                            <div class="twm-bnr-discription">Valuable Help
To Pick Your
Dream Job
HR
Consultancy</div>

                            <div class="twm-bnr-search-bar">
                               <form method="GET" action="{{ route('search') }}">
                                @csrf
    <div class="row">
        <!-- Title -->
        <div class="form-group col-xl-3 col-lg-6 col-md-6">
            <label>What</label>
            <select name="job_position" class="wt-search-bar-select selectpicker" data-live-search="true">
                <option value="" selected>Select Category</option>
                @foreach ($jobs->unique('job_position') as $job)
                    <option value="{{ $job->job_position }}">{{ $job->job_position }}</option>
                @endforeach
            </select>
        </div>

        <!-- All Category -->
        <div class="form-group col-xl-3 col-lg-6 col-md-6">
            <label>Type</label>
            <select name="field_of_work" class="wt-search-bar-select selectpicker" data-live-search="true">
                <option value="">Select Category</option>
@foreach ($jobs->unique('field_of_work') as $job)
    <option value="{{ $job->field_of_work }}">{{ $job->field_of_work }}</option>
@endforeach

            </select>
        </div>

        <!-- Location -->
        <div class="form-group col-xl-3 col-lg-6 col-md-6">

<label>Location</label>
               <select class="wt-search-bar-select selectpicker" id="location" name="location" data-live-search="true">
                <option value="">Select Location</option>
            <option value="Dubai">Dubai</option>
            <option value="Sharjah">Sharjah</option>
            <option value="Ajman">Ajman</option>
            <option value="Ras Al Khaimah">Ras Al Khaimah</option>
            <option value="Abu Dhabi">Abu Dhabi</option>
            <option value="Fujairah">Fujairah</option>
            <option value="Umm Al Quwain">Umm Al Quwain</option>
        </select>


        </div>

        <!-- Find job button -->
        <div class="form-group col-xl-3 col-lg-6 col-md-6">
            <button type="submit" class="site-button">Find Job</button>
        </div>
    </div>
</form>

                            </div>


                        </div>
                    </div>

                    <!--right Section-->
                    <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                        <div class="twm-bnr-right-content">

                            <div class="twm-img-bg-circle-area">
                                <div class="twm-img-bg-circle1 rotate-center"><span></span></div>
                                <div class="twm-img-bg-circle2 rotate-center-reverse"><span></span></div>
                                <div class="twm-img-bg-circle3"><span></span></div>
                            </div>

                            <div class="twm-bnr-right-carousel">
                                <div class="owl-carousel twm-h1-bnr-carousal">
                                    <div class="item">
                                      <div class="slide-img">
                                        <img src="images/main-slider/slider1/r-img1.png" alt="#">
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="slide-img">
                                        <div class="slide-img">
                                            <img src="images/main-slider/slider1/r-img2.png" alt="#">
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>






                            <!--Samll Ring Left-->
                            <div class="twm-small-ring-l slide-top-animation"></div>
                            <div class="twm-small-ring-2 slide-top-animation"></div>



                        </div>
                    </div>

                </div>
                <div class="twm-gradient-text">
                    Jobs
                </div>
            </div>
            <!--Banner End-->

            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t60 p-b60 site-bg-white twm-how-it-work-area">

                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Working Process</div>
                        </div>
                        <h2 class="wt-title">How It Works</h2>

                    </div>
                    <!-- TITLE END-->

                    <div class="twm-how-it-work-section">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">01</span>
                                    <div class="twm-w-pro-top bg-clr-sky">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Register<br>Your Account</h4>
                                    </div>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">02</span>
                                    <div class="twm-w-pro-top bg-clr-pink">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon2.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Apply <br>
                                            For Dream Job</h4>
                                    </div>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps">
                                    <span class="twm-large-number">03</span>
                                    <div class="twm-w-pro-top bg-clr-green">
                                        <div class="twm-media">
                                            <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                        </div>
                                        <h4 class="twm-title">Upload <br>Your Resume</h4>
                                    </div>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- HOW IT WORK SECTION END -->

            <!-- JOB POST START -->
            <div class="section-full p-t60 p-b60 site-bg-light-purple twm-bg-ring-wrap">
                <div class="twm-bg-ring-right"></div>
                <div class="twm-bg-ring-left"></div>
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>All Jobs Post</div>
                        </div>
                        <h2 class="wt-title">Find Your Career You Deserve it</h2>
                    </div>
                    <!-- TITLE END-->


                    <div class="section-content">
                       <div class="twm-jobs-list-wrap">
                           <ul>
                            @foreach($jobs as $job)
                                <li>
                                    <div class="twm-jobs-list-style1 mb-1">
                                        <!--<div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>-->
                                        <div class="twm-mid-content">
                                            <a href="{{ route('Home.job-detail', $job->id) }}" class="twm-job-title">
                                                <h4>{{ $job->job_position }}, <span class="twm-job-post-duration">{{ $job->location }} </span>, <span class="twm-job-post-duration text-danger"> Job Code:{{ $job->job_code }}</span></h4>
                                            </a>
                                            <p>
    <span class="text-success">Open: </span>{{ date('d/m/Y', strtotime($job->posted_date)) }},
    <span class="text-danger">Close: </span>{{ date('d/m/Y', strtotime($job->closing_date)) }}
</p>



                                           <!-- <a href="#" class="twm-job-websites site-text-primary">http://best4uhr.com/</a>-->
                                        </div>
                                        <div class="twm-right-content">
                                               <div class="twm-jobs-category green"><span style="background-color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'Open')
                    green
                @elseif ($job->status === 'Closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
            " >{{ $job->status }}</span></div>
                                            <div class="twm-jobs-amount">{{ $job->salary }}<span>/ Month</span></div>
                                            <a href="{{ route('Home.job-detail', $job->id) }}" class="twm-jobs-browse ">View and Apply</a>
                                        </div>
                                    </div>
                                </li>
 @endforeach

                           </ul>
                           <div class="text-center m-b30">
                                <a href="{{ route('home.jobs') }}" class=" site-button">Browse All Jobs</a>
                           </div>
                       </div>
                    </div>

                </div>
            </div>
            <!-- JOB POST END -->


            <!-- JOBS CATEGORIES SECTION START -->
            <!-- <div class="section-full p-t60 p-b60 site-bg-gray twm-job-categories-area">

                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-5 col-lg-5 col-md-12 wt-separator-two-part-left"> -->
                                <!-- TITLE START-->
                                <!-- <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>Jobs by Categories</div>
                                    </div>
                                    <h2 class="wt-title">Choose Your Desire Category</h2>
                                </div> -->
                                <!-- TITLE END-->
                            <!-- </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right">
                                <p>We believe that we are an extension of our client’s HR team and must
perform as a responsible representative of their organization. We, further,
like to highlight following for comfort level of our prospective
clients.</p>
                            </div>

                        </div>
                    </div>

                    <div class="twm-job-categories-section">

                        <div class="job-categories-style1 m-b30">
                            <div class="owl-carousel job-categories-carousel owl-btn-left-bottom "> -->

                                <!-- COLUMNS 1 -->
                                <!-- <div class="item ">
                                    <div class="job-categories-block">
                                        <div class="twm-media">
                                            <div class="flaticon-dashboard"></div>
                                        </div>
                                        <div class="twm-content">
                                            <div class="twm-jobs-available">9,185 Jobs</div>
                                            <a href="job-detail.html">Business Development</a>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>

                        <div class="text-right job-categories-btn">
                            <a href="{{ route('home.jobs') }}" class=" site-button">All Categories</a>
                        </div>

                    </div>

                </div>

            </div> -->
            <!-- JOBS CATEGORIES SECTION END -->

            <!-- EXPLORE NEW LIFE START -->
            <div class="section-full p-t60 p-b60 twm-explore-area bg-cover " style="background-image: url(images/background/bg-1.jpg);">
                <div class="container">

                    <div class="section-content">
                        <div class="row">

                            <div class="col-lg-4 col-md-12">
                                <div class="twm-explore-media-wrap">
                                    <div class="twm-media">
                                        <img src="images/gir-large.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <div class="twm-explore-content-outer">
                                    <div class="twm-explore-content">

                                        <div class="twm-l-line-1"></div>
                                        <div class="twm-l-line-2"></div>

                                        <div class="twm-r-circle-1"></div>
                                        <div class="twm-r-circle-2"></div>

                                        <div class="twm-title-small">Explore New Life</div>
                                        <div class="twm-title-large">
                                            <h2>Don’t just find. be found
                                            put your CV in front of
                                            great employers </h2>
                                            <p>We continually emphasize on upgrading the database by exploring
new resources.</p>
                                        </div>


                                        <div class="twm-upload-file">
                                            <button type="button" class="site-button"><a data-bs-toggle="modal" href="#apply_job_popup" role="button" class="twm-nav-post-a-job">Upload Your Resume <i class="feather-upload"></i></a></button>
                                        </div>


                                    </div>
                                    <div class="twm-bold-circle-right"></div>
                                    <div class="twm-bold-circle-left"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- EXPLORE NEW LIFE END -->

            <!-- TOP COMPANIES START -->

            <!-- TOP COMPANIES END -->


            <!-- TESTIMONIAL SECTION START -->

            <!-- TESTIMONIAL SECTION END -->

            <!-- OUR BLOG START -->

            <!-- OUR BLOG END -->


        </div>
        <!-- CONTENT END -->


@endsection
