
@extends('layouts.website')

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
                                                <div class="twm-media-bg">


                                                </div>
<div class="side-bar mb-4">
                                    <div class="twm-s-info2-wrap mb-5">
                                        <div class="twm-s-info2">
                                            <h4 class="section-head-small mb-4">Job Information</h4>

                                            <ul class="twm-job-hilites2">
  <li>
                                                    <div class="twm-s-info-inner">

                                                        <i class="fas fa-user"></i>
                                                        <span class="twm-title">Job Code</span>
                                                        <div class="twm-s-info-discription">{{ $job->job_code }}</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-user-tie"></i>
                                                        <span class="twm-title">Field of Work</span>
                                                        <div class="twm-s-info-discription">{{ $job->field_of_work }}</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                        <span class="twm-title">Location</span>
                                                        <div class="twm-s-info-discription">{{ $job->location }}</div>
                                                    </div>
                                                </li>
                                                 <li>
                                                    <div class="twm-s-info-inner">

                                                        <i class="fas fa-money-bill-wave"></i>
                                                        <span class="twm-title">Offered Salary</span>
                                                        <div class="twm-s-info-discription">{{ $job->salary }} / Month</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="twm-s-info-inner">
                                                        <i class="fas fa-venus-mars"></i>
                                                        <span class="twm-title">Gender</span>
                                                        <div class="twm-s-info-discription">{{ $job->gender }}</div>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>

                                </div>


                                                <div class="twm-mid-content">



                                                     <h4 class="twm-job-title">Posted Date<span class="twm-job-post-duration">/{{ date('d/m/Y', strtotime($job->posted_date)) }}</span></h4>

                                                   <p class="twm-job-address"><i class="feather-map-pin"></i>{{ $job->location }}</p>
                                                    <div class="twm-job-self-mid">
                                                        <div class="twm-job-self-mid-left">
                                                             <!--<div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>-->
                                                            <div class="twm-jobs-amount">{{ $job->salary }} <span>/ Month</span></div>
                                                        </div>

                                                    </div>
                                      <div class="twm-job-apllication-area">Application ends:
                                                            <span class="twm-job-apllication-date">{{ date('d/m/Y', strtotime($job->closing_date)) }}<span>
                                                        </div>

                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    <h4 class="twm-s-title">Requirements:</h4>
                                    <ul class="description-list-2">


                                        <li>
                                            <i class="feather-check"></i>
                                           {{ $job->requirements }}
                                        </li>



                                    </ul>


                                    <h4 class="twm-s-title">Important Note:</h4>
                                    <ul class="description-list-2">
                                        <li>
                                            <i class="feather-check"></i>
                                            Those who have already registered in our consultancy, kindly send your resume with the Job Position Name & our Register Number in the subject of the Email.

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
                                                        <a class="site-button" href="#sign_up_popup" data-bs-toggle="modal" role="button">
                                                            Apply Now
                                                        </a>
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
                                                    <div class="twm-s-info-discription" ><a href="mailto:info@best4uhr.com" target="_blank">best4uhr@gmail.com</a></div>
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




@endsection
