@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Job Seekers</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Job Seekers</span></div>
                </div>

                <!--Change Pawssword-->

                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Edit Job Seeker</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 ">
                        <form method="POST" action="{{ route('candidates.update', $candidates->id) }}">
                            @csrf
                      @method('PUT')
                            <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Job Seeker Name</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" name="name" id="name" type="text" value="{{ $candidates->name }}" placeholder="">
                                                <i class="fs-input-icon fas fa-user "></i>
                                                 @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Job Seeker Email</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control"  name="contact_email" id="contact_email" type="email" placeholder="" value="{{ $candidates->contact_email }}">
                                                <i class="fs-input-icon fas fa-at"></i>
                                                 @error('contact_email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Job Seeker Mobile</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control" name="mobile" type="text" placeholder=""  value="{{ $candidates->mobile }}">
                                                <i class="fs-input-icon fas fa-phone-alt"></i>
                                                 @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Job Seeker Registration Number</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control wt-form-control" name="registration_number" type="text" value="{{ old('registration_number', $candidates->registration_number) }}" placeholder="Registration Number">
                                        <i class="fs-input-icon fas fa-id-card"></i>
                                        @error('registration_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" name="username" id="username" type="text" placeholder="" value="{{ $candidates->username }}">
                                                <i class="fs-input-icon fas fa-user "></i>
                                                 @error('username')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control" name="password" id="password" type="password" placeholder="">
                                                 <span class="password-toggle" onclick="togglePassword('password', 'old_toggle')">
                                            <i id="old_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                <i class="fs-input-icon fas fa-asterisk"></i>
                                                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="text-left">
                                            <button type="submit" class="site-button">Update Job Seeker</button>
                                        </div>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>

    	</div>
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
