@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Change Password!</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Change Password</span></div>
                </div>

                <!--Change Pawssword-->

                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Change Password</h4>
                    </div>
                     @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

                    <div class="panel-body wt-panel-body p-a20 ">
                        <form method="post" action="{{ route('change.password') }}">
                            @csrf
                            <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control" name="old_password" id="old_password" type="password" placeholder="">
                                                <span class="password-toggle" onclick="togglePassword('old_password', 'old_toggle')">
                                            <i id="old_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                <i class="fs-input-icon fas fa-asterisk "></i>
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
                                                <input class="form-control wt-form-control" name="new_password" id="new_password" id="new_password" type="password" placeholder="">
                                                 <span class="password-toggle" onclick="togglePassword('new_password', 'new_toggle')">
                                            <i id="new_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                <i class="fs-input-icon fas fa-asterisk"></i>
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
                                                <input class="form-control wt-form-control" name="confirm_password" type="password" id="confirm_password" placeholder="">
                                                  <span class="password-toggle" onclick="togglePassword('confirm_password', 'confirm_toggle')">
                                            <i id="confirm_toggle" class="fas fa-eye passi2"></i>
                                        </span>
                                                <i class="fs-input-icon fas fa-asterisk"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="text-left">
                                            <button type="submit" class="site-button">Save Changes</button>
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
