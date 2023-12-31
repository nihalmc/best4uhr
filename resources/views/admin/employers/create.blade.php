@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Employers</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Employers</span></div>
                </div>

                <!--Change Pawssword-->

                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Create Employer</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 ">
                        <form method="POST" action="{{ route('employers.store') }}">
                              @csrf
                            <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>company name </label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control"  name="company_name" id="company_name" type="text" placeholder="company name">
                                                <i class="fs-input-icon fas fa-building"></i>
                                                @error('company_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Contact Person Name</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control"  name="contact_person" id="contact_person" type="text" placeholder="Contact Person Name">
                                                <i class="fs-input-icon fas fa-user-tie "></i>
                                                @error('contact_person')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>
      <div class="col-lg-6 col-md-6">
    <div class="form-group">
        <label>Company Address</label>
        <div class="ls-inputicon-box">
            <input class="form-control wt-form-control" name="address" id="address" type="text" placeholder="Company Address">
            <i class="fs-input-icon fas fa-map-marker"></i>
        </div>
    </div>
</div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Employer Email</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control" name="contact_email" id="contact_email"  type="email" placeholder="Employer Email">
                                                <i class="fs-input-icon fas fa-at"></i>
                                                 @error('contact_email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                            </div>
                                        </div>
                                    </div>

<div class="col-lg-6 col-md-6">
    <div class="form-group">
        <label>Employer Mobile</label>
        <div class="ls-inputicon-box">
            <input class="form-control wt-form-control"  name="mobile" type="text" placeholder="Mobile Number" />
<i class="fs-input-icon fas fa-phone-alt"></i>
            @error('mobile')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>

                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control wt-form-control" name="username" id="username" type="text" placeholder="Username">
                                                <i class="fs-input-icon fas fa-user-tie"></i>
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
                                                <input class="form-control wt-form-control"  name="password" id="password" type="password" placeholder="Password">
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
                                            <button type="submit" class="site-button">Save Employer</button>
                                        </div>
                                    </div>

                            </div>
                        </form>
                    </div>
                </div>


            </div>

    	</div>
        <script>
  const phoneInputField = document.querySelector("#mobile");
  const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
</script>
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
