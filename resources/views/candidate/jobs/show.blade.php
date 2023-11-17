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
                                <h2 class="wt-title">Job Seeker Jobs Applied</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('candidate.index') }}">Home</a></li>
                                    <li>Job Seeker Jobs Applied</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t60  p-b90 site-bg-white">


                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">



                                <div class="twm-mid-content text-center">
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4></h4>
                                    </a>

                                </div>

                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li class="active"><a href="{{ route('candidate.index') }}"><i class="fa fa-tachometer-alt"></i> Dashboard</a></li>
                                        <li><a href="{{ route('candidate-details.create') }}"><i class="fa fa-user"></i> My Profile</a></li>
                                        <li><a href="{{ route('candidate.applied-jobs') }}"><i class="fa fa-suitcase"></i> Applied Jobs</a></li>
                                        <li><a href="{{ route('candidate.jobs.index') }}"><i class="fa fa-bell"></i> Job Alerts</a></li>
                                        <li><a href="{{ route('candidate.change.password.form') }}"><i class="fa fa-fingerprint"></i> Change Password</a></li>
                                        <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i class="fa fa-share-square"></i>Logout</a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            <div class="twm-right-section-panel candidate-save-job site-bg-gray">
                                <!--Filter Short By-->
                                <div class="product-filter-wrap d-flex justify-content-between align-items-center">
                                    <span class="woocommerce-result-count-left">Applied {{$appliedJobs->count() }} jobs</span>

                                    <form class="woocommerce-ordering twm-filter-select" method="get">
                                        <span class="woocommerce-result-count">Short By</span>

                                        <select class="wt-select-bar-2 selectpicker"  data-live-search="true" data-bv-field="size">
                                            <option>Show 10</option>
                                            <option>Show 20</option>
                                            <option>Show 30</option>
                                            <option>Show 40</option>
                                            <option>Show 50</option>
                                            <option>Show 60</option>
                                        </select>
                                    </form>

                                </div>

                                <div class="twm-jobs-list-wrap">
                                    @if (count($appliedJobs) > 0)
                                    <ul>
                                         @foreach($appliedJobs as $application)
                                        <li>
                                            <div class="twm-jobs-list-style1 mb-1">

                                                <div class="twm-mid-content">
                                                    <a href="job-detail.html" class="twm-job-title">
                                                        <h4>{{ $application->job->job_position }}<span class="twm-job-post-duration"> {{ $application->job->location }}</span>, <span class="twm-job-post-duration text-danger"> Job Code:{{ $application->job->job_code }}</span></h4>
                                                    </a>

                                                    <p class="twm-job-address"><p class="twm-job-title"></p>
                                                      <p>
    <span class="text-success">Applied Date: </span>{{ $application->created_at->format('d-m-Y') }},
    <span class="text-danger">Field of Work: </span>{{ $application->job->field_of_work }}

</p>

                                                     <!--<div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>-->
                                                </div>
                                                <div class="twm-right-content">
                                                    <div class="twm-jobs-category green"><span  style="background-color:
                @if ($application->job->status === 'pending')
                    orange
                @elseif ($application->job->status === 'Open')
                    green
                @elseif ($application->job->status === 'Closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                 @endif" >{{ $application->job->status }}</span></div>
                                                    <div class="twm-jobs-amount"> {{ $application->job->salary }} <span>/ Month</span></div>
                                                    <!--<a href="job-detail.html" class="twm-jobs-browse site-text-primary">Apply Job</a>-->
                                                </div>
                                            </div>
                                        </li>
 @endforeach


                                    </ul>
                                     @else
    <p>No jobs applied yet.</p>
    @endif
                                </div>

                                <div class="pagination-outer">
                                    <div class="pagination-style1">
                                        <ul class="clearfix">
                                            <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i> </span></a></li>
                                            <li><a href="javascript:;">1</a></li>
                                            <li class="active"><a href="javascript:;">2</a></li>
                                            <li><a href="javascript:;">3</a></li>
                                            <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                            <li><a href="javascript:;">5</a></li>
                                            <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i> </span></a></li>
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
