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
    <title>Best For You HR Consultancy | Admin</title>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>

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






        <div class="page-content">
<header id="header-admin-wrap" class="header-admin-fixed">

            <!-- Header Start -->
            <div id="header-admin">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="header-left">
                        <div class="nav-btn-wrap">
                            <a class="nav-btn-admin" id="sidebarCollapse">
                                <span class="fa fa-angle-left"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Left Side Content End -->

                    <!-- Right Side Content -->
                    <div class="header-right">
                        <ul class="header-widget-wrap">
                            <!--Account-->
                            <li class="header-widget">
								<div class="dashboard-user-section">
                                	<div class="listing-user">
                                        <div class="dropdown">
                                            <a href="javascript:;" class="dropdown-toggle" id="ID-ACCOUNT_dropdown" data-bs-toggle="dropdown">
                                                <div class="user-name text-black">
                                                   BEST4UHR
                                                </div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">

                                                <ul>
                                                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i>Dashboard</a></li>
                                                    <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i class="fa fa-share-square"></i> Logout</a></li>
                                                </ul>


                                            </div>
                                        </div>

                                    </div>
                               </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Right Side Content End -->

                </div>
            </div>
            <!-- Header End -->

        </header>

        <!-- Sidebar Holder -->
        <nav id="sidebar-admin-wraper">
            <div class="page-logo">
                <a href="{{ route('admin.index') }}"><img src="{{ asset('images/logo-dark.svg') }}" alt=""></a>
            </div>

            <div class="admin-nav scrollbar-macosx">
                <ul>
                    <li class="active">
                        <a href="{{ route('admin.index') }}"><i class="fa fa-home"></i><span class="admin-nav-text">Dashboard</span></a>
                    </li>

                     <li>
                        <a href="{{ route('employers.index') }}"><i class="fa fa-user-tie"></i><span class="admin-nav-text">Employers</span></a>
                    </li>

                    <li>
                        <a href="{{ route('candidates.index') }}"><i class="fa fa-user-friends"></i><span class="admin-nav-text">Job Seekers</span></a>
                    </li>
               <li>
                    	<a href="javascript:;"><i class="fa fa-suitcase"></i><span class="admin-nav-text">Jobs</span></a>
                        <ul class="sub-menu">
                        	<li> <a href="{{ route('admin.jobs.create') }}"><span class="admin-nav-text">Post New Jobs</span></a></li>
                        	<li> <a href="{{ route('admin.jobListings') }}"><span class="admin-nav-text">Manage Jobs</span></a></li>
                            <li> <a href="{{ route('job.applications.index') }}"><span class="admin-nav-text">Applied Jobs</span></a></li>
                            <li> <a href="{{ route( 'admin.jobsdetails') }}"><span class="admin-nav-text">Job Details</span></a></li>
                        </ul>
                    </li>
              <li>
                        <a href="{{ route('admin.display') }}"><i class="feather-briefcase"></i><span class="admin-nav-text">Cv Inbox</span></a>
                    </li>


                    <li>
                        <a href="{{ route('change.password.form') }}"><i class="fa fa-fingerprint"></i><span class="admin-nav-text">Change Password</span></a>
                    </li>

                    <li>
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i class="fa fa-share-square"></i><span class="admin-nav-text">Logout</span></a>
                    </li>


                </ul>
            </div>
        </nav>

            @yield('content')





       <!-- Logout Profile Popup -->
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
                 <form method="POST"  action="{{ route('admin.logout') }}">
                             @csrf
                    <button type="submit" class="site-button outline-primary" data-bs-dismiss="modal">Yes</button>
                </form>
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
     <script src="{{ asset('js/custom-logout.js') }}"></script>

</body>
</html>

