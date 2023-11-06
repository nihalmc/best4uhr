<!-- resources/views/employer/change_password.blade.php -->

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
                                <h2 class="wt-title">Job Seeker Change Password</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('candidate.index') }}">Home</a></li>
                                    <li>Job Seeker Change Password</li>
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
                                    <a href="{{ route('candidate.index') }}" class="twm-job-title">
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
                            @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
                            <div class="twm-right-section-panel site-bg-gray">
                                <form method="post" action="{{ route('candidate.change.password') }}">
                                    @csrf
                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Change Password</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 ">

                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>Old Password</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control" type="password" name="old_password" id="old_password" placeholder="">
                                                                     <span class="password-toggle" onclick="togglePassword('old_password', 'old_toggle')">
                                            <i id="old_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                                    <i class="fs-input-icon fa fa-asterisk "></i>
                                                                    @error('old_password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <label>New Password</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control" type="password" name="new_password" id="new_password" placeholder="">
                                                                    <span class="password-toggle" onclick="togglePassword('new_password', 'new_toggle')">
                                            <i id="new_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                                    <i class="fs-input-icon fa fa-asterisk"></i>
                                                                    @error('new_password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Confirm New Password</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control wt-form-control"  type="password" name="new_password_confirmation" id="new_password_confirmation"  placeholder="">
                                                                    <span class="password-toggle" onclick="togglePassword('confirm_password', 'confirm_toggle')">
                                            <i id="confirm_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                                    <i class="fs-input-icon fa fa-asterisk"></i>
                                                                     @error('new_password_confirmation')
       <span class="text-danger">{{ $message }}</span>
       @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="text-left">
                                                                <button type="submit" class="site-button">Save Changes</button>
                                                            </div>
                                                        </div>

                                                </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- OUR BLOG END -->



        </div>
        <!-- CONTENT END -->
        <script>


        function togglePassword(inputId, toggleId) {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId);

            if (input.type === 'password') {
                input.type = 'text';
                toggle.classList.remove('fa-eye-slash');
                toggle.classList.add('fa-eye');
            } else {
                input.type = 'password';
                toggle.classList.remove('fa-eye');
                toggle.classList.add('fa-eye-slash');
            }
        }
    </script>
@endsection
