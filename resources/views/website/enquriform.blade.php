<!DOCTYPE html>
<html>
<head>
    <title>enquriform</title>
    <link rel="stylesheet" href="style.css">
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

</head>
<body>
    <div class="container">
    <div class="twm-tabs-style-1">
        <form method="POST" action="{{ route('enquriformupload') }}" enctype="multipart/form-data">
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
