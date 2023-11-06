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
                                <h2 class="wt-title">Job Seeker Dashboard</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('candidate.index') }}">Home</a></li>
                                    <li>Job Seeker Chat</li>
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
                                    <a href="" class="twm-job-title">
                                        <h4>{{ $candidate->name }} </h4>
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
                            <!--Filter Short By-->
                            <div class="twm-right-section-panel site-bg-gray">
                                <div class="wt-admin-right-page-header">
                                    <h2>{{ $candidate->name }} </h2>
                                </div>

                                <div class="twm-dash-b-blocks mb-5">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-job"></i></div>
                                                        <div class="wt-card-right wt-total-active-listing counter ">{{ $jobs->count() }}</div>
                                                        <div class="wt-card-bottom-2 ">
                                                            <h4 class="m-b0">Posted Jobs</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                            <div class="panel panel-default">
                                                <div class="panel-body wt-panel-body dashboard-card-2 block-gradient-2">
                                                    <div class="wt-card-wrap-2">
                                                        <div class="wt-card-icon-2"><i class="flaticon-resume"></i></div>
                                                        <div class="wt-card-right  wt-total-listing-view counter ">{{ $appliedJobs->count() }}</div>
                                                        <div class="wt-card-bottom-2">
                                                            <h4 class="m-b0">Total Applications</h4>
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

                    </div>
                </div>
            </div>
            <!-- OUR BLOG END -->



        </div>
        <!-- CONTENT END -->
@endsection
