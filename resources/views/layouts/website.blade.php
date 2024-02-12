<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Best For You HR Consultancy, Dubai, UAE , Find the Best Jobs in UAE, Job Consultant, HR Consultancy, Job Consultant Dubai, HR Consultancy Dubai, Jobs in Dubai, Jobs in Sharjah, Jobs in Ajman, Jobs in Ras Al Khaimah, Jobs in Abu Dhabi, Jobs in Fujairah,Jobs in Umm Al Quwain ">
    <meta property="og:site_name" content="Best For You HR Consultancy" />
    <meta name="author" content="Best For You HR Consultancy" />
    <meta name="robots" content="" />
    <meta name="description" content="Best for you is a pioneer in rendering HR Solutions across the Globe. It is a combined venture of leading and experienced HR Professionals & Masters.The company laid its roots from basics of HR Management, thereby bringing a unique approach to cater the requirements of our Clients." />

	<meta property="og:title" content="Best For You HR Consultancy, Dubai, UAE | Find the Best Jobs in UAE, Job Consultant, HR Consultancy, Job Consultant Dubai, HR Consultancy Dubai, Jobs in Dubai, Jobs in Sharjah, Jobs in Ajman, Jobs in Ras Al Khaimah, Jobs in Abu Dhabi, Jobs in Fujairah,Jobs in Umm Al Quwain">
    <meta property="og:site_name" content="Best For You HR Consultancy">
    <meta property="og:url" content="https://best4uhr.com/">
    <meta property="og:description" content="Best for you is a pioneer in rendering HR Solutions across the Globe. It is a combined venture of leading and experienced HR Professionals & Masters.The company laid its roots from basics of HR Management, thereby bringing a unique approach to cater the requirements of our Clients."/>
    <meta property="og:image" content="https://best4uhr.com/images/logosoc.png"/>
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height" content="200"/>
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!-- PAGE TITLE HERE -->
    <title>Best For You HR Consultancy, Dubai, UAE | Find the Best Jobs in UAE</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"><!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"><!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}"><!-- FEATHER ICON SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}"><!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}"><!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lc_lightbox.css') }}"><!-- Lc light box popup -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}"><!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}"><!-- DATA table STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/select.bootstrap5.min.css') }}"><!-- DASHBOARD select bootstrap  STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.css') }}"><!-- DROPZONE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/scrollbar.css') }}"><!-- CUSTOM SCROLL BAR STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}"><!-- DATEPICKER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}"><!-- Flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper-bundle.min.css') }}"><!-- Swiper Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"><!-- MAIN STYLE SHEET -->

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skins-type/skin-6.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css') }}">
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
</head>
<body>
    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">






        <div class="page-content">
    <!-- Header Section -->

        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container-fluid clearfix">

                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo-dark.svg') }}" alt="">
                                </a>
                            </div>
                        </div>

                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                            <ul class=" nav navbar-nav">
                                <li><a href="{{ route('home') }}">Home</a>

                                </li>

								 <li class="has-child"><a href="javascript:;">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('home.profile') }}">Our Profile</a></li>
                                        <li><a href="{{ route('home.recruitments') }}">Recruitments</a></li>
                                        <li><a href="{{ route('home.specialization') }}">Specialization</a></li>

                                        <li><a href="{{ route('home.career') }}">Career</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{ route('home.jobs') }}">Find Your Jobs</a>

                                </li>
                                <li><a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup2" role="button" >Post Your Jobs</a>

                                </li>






								<li><a href="{{ route('home.contact') }}">Contact Us</a>

                                </li>

                            </ul>

                        </div>

                        <!-- Header Right Section-->
                        <div class="extra-nav header-2-nav">

                            <div class="extra-cell">
                                <div class="header-nav-btn-section">
                                    <div class="twm-nav-btn-left">
                                        <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                            <i class="feather-log-in"></i> Login
                                        </a>
                                    </div>

									<div class="twm-nav-btn-right">
                                        <a data-bs-toggle="modal" href="#apply_job_popup" role="button" class="twm-nav-post-a-job">
                                            <i class="feather-briefcase"></i> Drop Your CV
                                        </a>
                                    </div>





                                </div>
                            </div>

                        </div>



                    </div>


                </div>

                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="#" method="get" class="radius-xl">
                        <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                        <span class="input-group-append">
                            <button type="button" class="search-btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </span>
                    </form>
                </div>
            </div>

        </header>
        <!-- HEADER END -->

        @yield('content')

        @yield('errors')

   <!-- FOOTER START -->
        <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">

                <!-- NEWS LETTER SECTION START -->

                <!-- NEWS LETTER SECTION END -->
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top">
                    <div class="row">

                        <div class="col-lg-4 col-md-12">

                            <div class="widget widget_about">
                                <div class="logo-footer clearfix">
                                    <a href=""><img src="images/logo-light.svg" alt=""></a>
                                </div>

                                <ul class="ftr-list">
                                    <li><p><span>Address :</span>Office No: 203, 2nd Floor, <br> Brass II Building, Near Sharaf DG Metro Station (Exit No:3), Bur Dubai,
										Dubai, UAE.</p></li>
                                    <li><p><span>Email :</span><a class="text-white" href="mailto:info@best4uhr.com" target="_blank">info@best4uhr.com</a></p></li>
                                    <li><p><span>Mobile :</span><a class="text-white" href="tel:+971545865418" target="_blank">+971 54 586 5418</a></p></li>
                                    <li><p><span>Landline :</span><a class="text-white" href="tel:+9142682901" target="_blank">+971 4  268 2901</a></p></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-8 col-md-12">
                            <div class="row">







                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Quick Links</h3>
                                        <ul>
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('home.profile') }}">Our Profile</a></li>
                                            <li><a href="{{ route('home.recruitments') }}">Recruitments</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs</a></li>
                                            <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Jobs </h3>
                                        <ul>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Dubai</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Sharjah</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Ajman</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Ras Al Khaimah</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Jobs </h3>
                                        <ul>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Abu Dhabi</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Fujairah</a></li>
                                            <li><a href="{{ route('home.jobs') }}">Jobs in Umm Al Quwain</a></li>

                                        </ul>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom">

                    <div class="footer-bottom-info">

                        <div class="footer-copy-right">
                            <span class="copyrights-text">Copyright © 2023 Best For You HR Consultancy. All Rights Reserved.</span>
                        </div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/Best4uhrSolutions?mibextid=ZbWKwL" class="fab fa-facebook-f"></a></li>

                            <li><a href="https://instagram.com/best4uhrconsultancy?igshid=MzRlODBiNWFlZA==" class="fab fa-instagram"></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </footer>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">




                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features of Best For You HR Consultancy</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Job Seekers</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>

                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->

                                    <div class="tab-pane fade" id="sign-candidate">
                                        <div class="row">
                 <form method="POST" action="{{ route('candidate.register.submit') }}">
        @csrf
        <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="name" type="text" required="" class="form-control" placeholder="Name*">
                                                     @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>



                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="contact_email" type="eamil" class="form-control" required="" placeholder="Email*">

@error('contact_email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="mobile" type="text" class="form-control" required="" placeholder="Phone*">
                                                     @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="registration_number" type="text" class="form-control" required="" placeholder="Registration Number*">
                                                     @error('registration_number')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Username*">
                                                     @error('username')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="password" id="password-toggle-candidate" type="password" class="form-control" required="" placeholder="Password*">
<span class="password-toggle" id="password-toggle-btn-candidate" onclick="togglePasswordVisibility('candidate')">
    <i id="eye-icon-candidate" class="fa fa-eye passi3"></i>
</span>
                                                      @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                         </form>
                                        </div>
                                    </div>
                                    <!--Signup Employer Content-->
                                    <div class="tab-pane fade show active" id="sign-Employer">
                                        <div class="row">
                          <form id="employerRegistrationForm" method="POST" action="{{ route('employer.register.submit') }}">
                            @csrf
                                        <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="company_name" id="company_name" type="text" required="" class="form-control" placeholder="company name*">
                                                    @error('company_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="contact_person" id="contact_person" type="text" required="" class="form-control" placeholder="Contact Person Name*">
                                                    @error('contact_person')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                                                </div>
                                            </div>
<div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="address" id="address" type="text" required="" class="form-control" placeholder="Company Address*">
                                                    @error('address')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                   <input name="contact_email" type="email" class="form-control" required="" placeholder="Email*">
 @error('contact_email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="mobile" type="text" class="form-control" required="" placeholder="Phone*">


                                                    @error('mobile')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>
  <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Username*">
                                                    @error('username')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="password" type="password" id="password-toggle-employer" class="form-control" required="" placeholder="Password*">
 <span class="password-toggle" id="password-toggle-btn-employer" onclick="togglePasswordVisibility('employer')">
    <i id="eye-icon-employer" class="fa fa-eye passi0"></i>
</span>
                                                    @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>

                                        </div>
                                    </div>
 </form>
                                    </div>
                                </div>
                            </div>




                    </div>
                </div>

            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">


                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                                <p>Login and get access to all the features of Best For You HR Consultancy</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->
                                        <li class="nav-item">
                                            <button class="nav-link active " data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Job Seekers</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>

                                    </ul>

                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->

                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                             <form  method="POST" action="{{ route('candidate.loginsubmit') }}">
    @csrf

    <div class="col-lg-12">
        <div class="form-group mb-3">
            <input name="username" type="text" required class="form-control" placeholder="Username*">
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

   <div class="col-lg-12">
    <div class="form-group mb-3">

           <input name="password" id="password-toggle-candidate" type="password" class="form-control" required placeholder="Password*">
<span class="password-toggle" id="password-toggle-btn-candidate" onclick="togglePasswordVisibility('candidate')">
    <i id="eye-icon-candidate" class="fa fa-eye passi"></i>
</span>


        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>


    <div class="col-lg-12">
        <div class="form-group mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="Password3">
                <label class="form-check-label rem-forgot" for="Password3">Remember me</label>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="site-button">Log in</button>
        <div class="mt-3 mb-3">Don't have an account?
            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
        </div>
    </div>
</form>

                                            </div>
                                        </div>
                                        <!--Login Employer Content-->
                                        <div class="tab-pane fade " id="login-Employer">
                                            <div class="row">
                                                 <form  method="POST" action="{{ route('employer.loginsubmit') }}">
                                            @csrf

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Username*">
                                                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                </div>

                                               <div class="col-lg-12">
    <div class="form-group mb-3">

            <input name="password" id="password-toggle-employer" type="password" class="form-control" required placeholder="Password*">
<span class="password-toggle" id="password-toggle-btn-employer" onclick="togglePasswordVisibility('employer')">
    <i id="eye-icon-employer" class="fa fa-eye passi"></i>
</span>


        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ?
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->

        <!--apply job popup -->
        <div class="modal fade " id="apply_job_popup" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                        <div class="modal-header">
                            <h4 class="modal-title" id="sign_up_popupLabel">Upload Your Resume</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                    <div class="modal-body">
                        <div class="apl-job-inpopup">
                            <!--Basic Information-->
                            <div class="panel panel-default">

                                <div class="panel-body wt-panel-body p-a20 ">



<div class="twm-tabs-style-1">
    <form method="POST" action="{{ route('home.upload') }}" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Your Name</label>
                    <div class="ls-inputicon-box">

                        <input class="form-control"  name="name" type="text"  placeholder="Your Name" >
                     <i class="fs-input-icon fa fa-user"></i>
                          @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Email Address</label>
                    <div class="ls-inputicon-box">
                        <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                        <i class="fs-input-icon fas fa-at"></i>
                         @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Phone</label>
                    <div class="ls-inputicon-box">
                        <input class="form-control" name="mobile" id="mobile" type="text"  placeholder="Your Phone Nubumer">
                        <i class="fs-input-icon fa fa-phone-alt"></i>
                         @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Job Category</label>
                    <div class="ls-inputicon-box">
                        <input class="form-control" name="job_position" id="job_position" type="text" placeholder="IT & Software">
                        <i class="fs-input-icon fa fa-border-all"></i>
                         @error('job_position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
              <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Experience Regions</label>
                    <div class="ls-inputicon-box">
                        <div class="form-check">
                <input class="form-check-input" type="radio" name="experience_region" id="uaeRegion" value="UAE">
                <label class="form-check-label" for="uaeRegion">
                    UAE
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="experience_region" id="gccRegion" value="GCC">
                <label class="form-check-label" for="gccRegion">
                    GCC
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="experience_region" id="europeRegion" value="Europe">
                <label class="form-check-label" for="europeRegion">
                    Europe
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="experience_region" id="othersRegion" value="Others">
                <label class="form-check-label" for="othersRegion">
                    Others
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="experience_region" id="noExperience" value="no">
                <label class="form-check-label" for="noExperience">
                    No Experience
                </label>
            </div>
            <div id="experienceYearsSelect" style="display: none">
                <label>Experience in Years</label>
                <div class="ls-inputicon-box">
                    <select class="wt-select-box selectpicker" name="experience_years" id="" data-live-search="true" title="" data-bv-field="size">
                        @for($i = 0; $i <= 50; $i++)
                            <option value="{{ $i }}">{{ $i }} {{ $i === 0 ? 'Year' : 'Years' }}</option>
                        @endfor
                    </select>
                    <i class="fs-input-icon fa fa-user-edit"></i>
                </div>
            </div>
                         @error('experience_region')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="form-group">
                    <label>Upload Resume</label>
                    <div class="ls-inputicon-box">
                        <input class="form-control" type="file" id="resume" name="resume" placeholder="Click here or drop files to upload" >
                        <small>*You can upload your resume in PDF or Word format.</small>
                        <i class="sl-icon-plus"></i>

                         @error('resume')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="text-left">
                    <button type="submit" class="site-button">Upload Resume</button>
                </div>
            </div>
        </div>
    </form>
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

<script>
    function togglePasswordVisibility(formType) {
        const passwordInput = $(`input[name="password"][id="password-toggle-${formType}"]`);
        const inputType = passwordInput.attr('type');
        if (inputType === 'password') {
            passwordInput.attr('type', 'text');
            $(`#eye-icon-${formType}`).removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordInput.attr('type', 'password');
            $(`#eye-icon-${formType}`).removeClass('fa-eye-slash').addClass('fa-eye');
        }
    }
</script>
<script>
    @if (session('success'))
        // Display a success alert
        alert("{{ session('success') }}");
    @endif

    @if (session('error'))
        // Display an error alert
        alert("{{ session('error') }}");
    @endif

    @if($errors->any())
        alert("{{ implode('\n', $errors->all()) }}");
    @endif
</script>

<script>
    // Get the radio buttons and select element
    const radioButtons = document.querySelectorAll('input[name="experience_region"]');
    const experienceYearsSelect = document.getElementById('experienceYearsSelect');

    // Function to toggle the visibility of the select element
    function toggleExperienceYearsVisibility() {
        if (this.value === 'no') {
            experienceYearsSelect.style.display = 'none'; // Hide the select
        } else {
            experienceYearsSelect.style.display = 'block'; // Show the select
        }
    }

    // Add an event listener to each radio button
    radioButtons.forEach(radio => {
        radio.addEventListener('change', toggleExperienceYearsVisibility);
    });

    // Initially hide the select when the page loads if "No Experience" is checked
    if (document.querySelector('input[name="experience_region"]:checked').value === 'no') {
        experienceYearsSelect.style.display = 'none';
    }
</script>

<script>
    function validateAndSubmit() {
        // Clear previous validation errors
        $('#validationErrors').html('');

        // Perform AJAX request for validation
        $.ajax({
            url: "{{ route('employer.register.submit') }}",
            type: "POST",
            data: $('#employerRegistrationForm').serialize(),
            success: function (response) {
                if (response.success) {
                    // If validation succeeds, submit the form
                    $('#employerRegistrationForm').submit();
                } else {
                    // If validation fails, display errors in alert messages
                    $.each(response.errors, function (key, value) {
                        alert(value); // Display validation error in an alert
                    });
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
</script>


 <!-- JAVASCRIPT  FILES ========================================= -->
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{ asset('js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- Form js -->
    <script src="{{ asset('js/dropzone.js') }}"></script><!-- IMAGE UPLOAD  -->
    <script src="{{ asset('js/jquery.scrollbar.js') }}"></script><!-- scroller -->
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script><!-- scroller -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script><!-- Datatable -->
    <script src="{{ asset('js/chart.js') }}"></script><!-- Chart -->
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script><!-- Price range slider -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script><!-- Swiper JS -->
    <script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->


</body>
</html>


