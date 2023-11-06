

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!-- PAGE TITLE HERE -->
    <title> BEST4UHR  | Candidate Login</title>

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
        <!-- CONTENT START -->





        <div class="page-content">


 <div class="section-full site-bg-white">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-6 col-md-5 twm-log-reg-media-wrap">
                            <div class="twm-log-reg-media">
                                <div class="twm-l-media">
                                    <img src="images/login-bg.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-7">
                            <div class="twm-log-reg-form-wrap">
                                <div class="twm-log-reg-logo-head">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('images/logo-dark.svg') }}" alt="" class="logo">
                                    </a>
                                </div>

                                <div class="twm-log-reg-inner">
                                    <div class="twm-log-reg-head">
                                        <div class="twm-log-reg-logo">
                                            <span class="log-reg-form-title">Sign up</span>
                                        </div>
                                    </div>
                                    <div class="twm-tabs-style-2">

                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                            <!--Login Employer-->
                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"  type="button"><i class="fas fa-building"></i>Job Seekers</button>
                                            </li>

                                        </ul>
                                         @if(session('error'))
                    <p class="text-danger">{{ session('error') }}</p>
                    @endif

                                            <!-- Employer Content-->
                                            <div class="tab-pane" >
                                                <div class="row">
                                                 <form method="POST" action="{{ route('employer.register.submit') }}">
                                                            @csrf
                                                               <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="company_name" type="text" required="" class="form-control" placeholder="Company Name*">
                                                    @error('company_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                                                </div>
                                            </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                                            <input name="password" type="password" class="form-control" required="" placeholder="Password*">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="contact_email" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>

                                                     <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="mobile" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>

                                                    <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>

                                                </div>
                                            </div>

                                    <div class="col-md-12">
        <div class="form-group ">
              <a href="{{ route('candidate.login') }}">Already have an account? <span class="login-here-text">Login Here</span></a>
              </div>
                   </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button type="submit" class="site-button">Sign Up</button>
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
            <!-- Login Section End -->



        </div>
        <!-- CONTENT END -->


   <!-- JAVASCRIPT  FILES ========================================= -->

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




