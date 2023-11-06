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
    <title>Best For You HR Consultancy Job Seeker</title>

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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
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


        <!-- HEADER START -->
        <header  class="site-header header-style-3 mobile-sider-drawer-menu">

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">

                    <div class="container-fluid clearfix">

                        <div class="logo-header">
                            <div class="logo-header-inner logo-header-one">
                                <a href="{{ route('candidate.index') }}">
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


								<li><a href="{{ route('candidate.index') }}">Dashboard</a></li>
                               <li><a href="{{ route('candidate-details.create') }}">My Profile</a></li>
                                <li><a href="{{ route('candidate.applied-jobs') }}">Applied Jobs</a></li>
                                <li><a href="{{ route('candidate.jobs.index') }}">Job Alerts</a></li>
                                        <li><a href="{{ route('candidate.change.password.form') }}">Change Password</a></li>
                                        <li>  <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile">Job Seeker Logout</a></li>

                            </ul>
                        </div>



        </header>
        <!-- HEADER END -->



 @yield('content')
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
                                    <a href=""><img src="{{ asset('images/logo-light.svg') }}" alt=""></a>
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
                                            <li><a href="{{ route('candidate.index') }}">Dashboard</a></li>
                                            <li><a href="{{ route('candidate-details.create') }}">My Profile</a></li>
                                            <li><a href="{{ route('candidate.applied-jobs') }}">Applied Jobs</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Job Alerts</a></li>
                                            <li><a href="{{ route('candidate.change.password.form') }}">Change Password</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Jobs </h3>
                                        <ul>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Dubai</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Sharjah</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Ajman</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Ras Al Khaimah</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="widget widget_services ftr-list-center">
                                        <h3 class="widget-title">Our Jobs </h3>
                                        <ul>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Abu Dhabi</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Fujairah</a></li>
                                            <li><a href="{{ route('candidate.jobs.index') }}">Jobs in Umm Al Quwain</a></li>

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
                            <span class="copyrights-text">Copyright © 2023 by Best For You HR Consultancy All Rights Reserved.</span>
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

  <!--Logout Profile Popup-->
        <div class="modal fade twm-model-popup" id="logout-dash-profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">Do you want to Logout your profile?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                    <button type="button"  class="site-button outline-primary"><a href="{{ route('candidate.logout') }}">Yes</a></button>
                </div>
            </div>
            </div>
        </div>

    </div>
<script>
    @if (session('success'))
        // Display a success alert
        alert("{{ session('success') }}");
    @endif

    @if (session('error'))
        // Display an error alert
        alert("{{ session('error') }}");
    @endif
</script>
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

