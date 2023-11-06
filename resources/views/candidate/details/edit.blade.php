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
                                <h2 class="wt-title">Job Seeker Profile</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('candidate.index') }}">Home</a></li>
                                    <li>Job Seeker Profile</li>
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
                                    <a href="candidate-detail.html" class="twm-job-title">
                                        <h4>{{ $candidate->name }}  </h4>
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
                                <form method="POST" action="{{ route('candidate.details.update') }}" enctype="multipart/form-data">

  @csrf
   @method('PUT')

                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                            <div class="row">

<div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Your Name</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="name" value="{{ old('name', $candidate->name) }}" type="text" placeholder="Your Name">
                                                                <i class="fs-input-icon fa fa-user "></i>
                                                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Phone</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="mobile" id="mobile" type="text" value="{{ $candidate->mobile }}" placeholder="Your Phone">
                                                                <i class="fs-input-icon fa fa-phone-alt"></i>
  @if ($errors->has('mobile'))
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Email Address</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="contact_email" value="{{ old('contact_email', $candidate->contact_email) }}" type="email" placeholder="Your Email Address">
                                                                <i class="fs-input-icon fas fa-at"></i>
                                                                @if ($errors->has('contact_email'))
                                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                             <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Home Country</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="home_country" value="{{ old('home_country', $candidateDetail->home_country ?? '') }}" type="text" placeholder="UAE">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
@if ($errors->has('home_country'))
                                    <span class="text-danger">{{ $errors->first('home_country') }}</span>
                                @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Nationality</label>
                                                            <div class="ls-inputicon-box">
<select class="wt-select-box selectpicker" id="nationality" name="nationality" data-live-search="true" title="" id="country" data-bv-field="size">
                                                    <option class="bs-title-option" value="">Nationality</option>
                                                     <option value="Afghanistan" {{ $candidate->candidateDetail->nationality === 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
    <option value="Albania" {{ $candidate->candidateDetail->nationality === 'Albania' ? 'selected' : '' }}>Albania</option>
    <option value="Algeria" {{ $candidate->candidateDetail->nationality === 'Algeria' ? 'selected' : '' }}>Algeria</option>
    <option value="American Samoa" {{ $candidate->candidateDetail->nationality === 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
    <option value="Andorra" {{ $candidate->candidateDetail->nationality === 'Andorra' ? 'selected' : '' }}>Andorra</option>
    <option value="Angola" {{ $candidate->candidateDetail->nationality === 'Angola' ? 'selected' : '' }}>Angola</option>
    <option value="Anguilla" {{ $candidate->candidateDetail->nationality === 'Anguilla' ? 'selected' : '' }}>Anguilla</option>
    <option value="Antarctica" {{ $candidate->candidateDetail->nationality === 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
    <option value="Antigua and Barbuda" {{ $candidate->candidateDetail->nationality === 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
    <option value="Argentina" {{ $candidate->candidateDetail->nationality === 'Argentina' ? 'selected' : '' }}>Argentina</option>
    <option value="Armenia" {{ $candidate->candidateDetail->nationality === 'Armenia' ? 'selected' : '' }}>Armenia</option>
    <option value="Aruba" {{ $candidate->candidateDetail->nationality === 'Aruba' ? 'selected' : '' }}>Aruba</option>
    <option value="Australia" {{ $candidate->candidateDetail->nationality === 'Australia' ? 'selected' : '' }}>Australia</option>
    <option value="Austria" {{ $candidate->candidateDetail->nationality === 'Austria' ? 'selected' : '' }}>Austria</option>
    <option value="Azerbaijan" {{ $candidate->candidateDetail->nationality === 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
    <option value="Bahamas" {{ $candidate->candidateDetail->nationality === 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
    <option value="Bahrain" {{ $candidate->candidateDetail->nationality === 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
    <option value="Bangladesh" {{ $candidate->candidateDetail->nationality === 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
    <option value="Barbados" {{ $candidate->candidateDetail->nationality === 'Barbados' ? 'selected' : '' }}>Barbados</option>
    <option value="Belarus" {{ $candidate->candidateDetail->nationality === 'Belarus' ? 'selected' : '' }}>Belarus</option>
    <option value="Belgium" {{ $candidate->candidateDetail->nationality === 'Belgium' ? 'selected' : '' }}>Belgium</option>
    <option value="Belize" {{ $candidate->candidateDetail->nationality === 'Belize' ? 'selected' : '' }}>Belize</option>
    <option value="Benin" {{ $candidate->candidateDetail->nationality === 'Benin' ? 'selected' : '' }}>Benin</option>
    <option value="Bermuda" {{ $candidate->candidateDetail->nationality === 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
    <option value="Bhutan" {{ $candidate->candidateDetail->nationality === 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
    <option value="Bolivia" {{ $candidate->candidateDetail->nationality === 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
    <option value="Bosnia and Herzegovina" {{ $candidate->candidateDetail->nationality === 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
    <option value="Botswana" {{ $candidate->candidateDetail->nationality === 'Botswana' ? 'selected' : '' }}>Botswana</option>
    <option value="Bouvet Island" {{ $candidate->candidateDetail->nationality === 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
    <option value="Brazil" {{ $candidate->candidateDetail->nationality === 'Brazil' ? 'selected' : '' }}>Brazil</option>
    <option value="British Indian Ocean Territory" {{ $candidate->candidateDetail->nationality === 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
    <option value="Brunei Darussalam" {{ $candidate->candidateDetail->nationality === 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
    <option value="Bulgaria" {{ $candidate->candidateDetail->nationality === 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
    <option value="Burkina Faso" {{ $candidate->candidateDetail->nationality === 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
    <option value="Burundi" {{ $candidate->candidateDetail->nationality === 'Burundi' ? 'selected' : '' }}>Burundi</option>
    <option value="Cambodia" {{ $candidate->candidateDetail->nationality === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
    <option value="Cameroon" {{ $candidate->candidateDetail->nationality === 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
    <option value="Canada" {{ $candidate->candidateDetail->nationality === 'Canada' ? 'selected' : '' }}>Canada</option>
    <option value="Cape Verde" {{ $candidate->candidateDetail->nationality === 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
    <option value="Cayman Islands" {{ $candidate->candidateDetail->nationality === 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
    <option value="Central African Republic" {{ $candidate->candidateDetail->nationality === 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
    <option value="Chad" {{ $candidate->candidateDetail->nationality === 'Chad' ? 'selected' : '' }}>Chad</option>
    <option value="Chile" {{ $candidate->candidateDetail->nationality === 'Chile' ? 'selected' : '' }}>Chile</option>
    <option value="China" {{ $candidate->candidateDetail->nationality === 'China' ? 'selected' : '' }}>China</option>
    <option value="Christmas Island" {{ $candidate->candidateDetail->nationality === 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
    <option value="Cocos Islands" {{ $candidate->candidateDetail->nationality === 'Cocos Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
    <option value="Colombia" {{ $candidate->candidateDetail->nationality === 'Colombia' ? 'selected' : '' }}>Colombia</option>
    <option value="Comoros" {{ $candidate->candidateDetail->nationality === 'Comoros' ? 'selected' : '' }}>Comoros</option>
    <option value="Congo" {{ $candidate->candidateDetail->nationality === 'Congo' ? 'selected' : '' }}>Congo</option>
    <option value="Congo, the Democratic Republic of the" {{ $candidate->candidateDetail->nationality === 'Congo, the Democratic Republic of the' ? 'selected' : '' }}>Congo, the Democratic Republic of the</option>
    <option value="Cook Islands" {{ $candidate->candidateDetail->nationality === 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
    <option value="Costa Rica" {{ $candidate->candidateDetail->nationality === 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
    <option value="Cote d'Ivoire" {{ $candidate->candidateDetail->nationality === 'Cote d Ivoire' ? 'selected' : '' }}>Cote d'Ivoire</option>
    <option value="Croatia" {{ $candidate->candidateDetail->nationality === 'Croatia' ? 'selected' : '' }}>Croatia (Hrvatska)</option>
    <option value="Cuba" {{ $candidate->candidateDetail->nationality === 'Cuba' ? 'selected' : '' }}>Cuba</option>
    <option value="Cyprus" {{ $candidate->candidateDetail->nationality === 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
    <option value="Czech Republic" {{ $candidate->candidateDetail->nationality === 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
    <option value="Denmark" {{ $candidate->candidateDetail->nationality === 'Denmark' ? 'selected' : '' }}>Denmark</option>
    <option value="Djibouti" {{ $candidate->candidateDetail->nationality === 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
    <option value="Dominica" {{ $candidate->candidateDetail->nationality === 'Dominica' ? 'selected' : '' }}>Dominica</option>
    <option value="Dominican Republic" {{ $candidate->candidateDetail->nationality === 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
    <option value="East Timor" {{ $candidate->candidateDetail->nationality === 'East Timor' ? 'selected' : '' }}>East Timor</option>
    <option value="Ecuador" {{ $candidate->candidateDetail->nationality === 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
    <option value="Egypt" {{ $candidate->candidateDetail->nationality === 'Egypt' ? 'selected' : '' }}>Egypt</option>
    <option value="El Salvador" {{ $candidate->candidateDetail->nationality === 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
    <option value="Equatorial Guinea" {{ $candidate->candidateDetail->nationality === 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
    <option value="Eritrea" {{ $candidate->candidateDetail->nationality === 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
    <option value="Estonia" {{ $candidate->candidateDetail->nationality === 'Estonia' ? 'selected' : '' }}>Estonia</option>
    <option value="Ethiopia" {{ $candidate->candidateDetail->nationality === 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
    <option value="Falkland Islands (Malvinas)" {{ $candidate->candidateDetail->nationality === 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands" {{ $candidate->candidateDetail->nationality === 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
    <option value="Fiji" {{ $candidate->candidateDetail->nationality === 'Fiji' ? 'selected' : '' }}>Fiji</option>
<option value="Finland" {{ $candidate->candidateDetail->nationality === 'Finland' ? 'selected' : '' }}>Finland</option>
<option value="France" {{ $candidate->candidateDetail->nationality === 'France' ? 'selected' : '' }}>France</option>
<option value="Gabon" {{ $candidate->candidateDetail->nationality === 'Gabon' ? 'selected' : '' }}>Gabon</option>
<option value="Gambia" {{ $candidate->candidateDetail->nationality === 'Gambia' ? 'selected' : '' }}>Gambia</option>
<option value="Georgia" {{ $candidate->candidateDetail->nationality === 'Georgia' ? 'selected' : '' }}>Georgia</option>
<option value="Germany" {{ $candidate->candidateDetail->nationality === 'Germany' ? 'selected' : '' }}>Germany</option>
<option value="Greece" {{ $candidate->candidateDetail->nationality === 'Greece' ? 'selected' : '' }}>Greece</option>
<option value="Greenland" {{ $candidate->candidateDetail->nationality === 'Greenland' ? 'selected' : '' }}>Greenland</option>
<option value="Grenada" {{ $candidate->candidateDetail->nationality === 'Grenada' ? 'selected' : '' }}>Grenada</option>
<option value="Guadeloupe" {{ $candidate->candidateDetail->nationality === 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
<option value="Guam" {{ $candidate->candidateDetail->nationality === 'Guam' ? 'selected' : '' }}>Guam</option>
<option value="Guatemala" {{ $candidate->candidateDetail->nationality === 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
<option value="Guinea" {{ $candidate->candidateDetail->nationality === 'Guinea' ? 'selected' : '' }}>Guinea</option>
<option value="Guinea-Bissau" {{ $candidate->candidateDetail->nationality === 'Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
<option value="Guyana" {{ $candidate->candidateDetail->nationality === 'Guyana' ? 'selected' : '' }}>Guyana</option>
<option value="Haiti" {{ $candidate->candidateDetail->nationality === 'Haiti' ? 'selected' : '' }}>Haiti</option>
<option value="Heard and McDonald Islands" {{ $candidate->candidateDetail->nationality === 'Heard and McDonald Islands' ? 'selected' : '' }}>Heard and McDonald Islands</option>
<option value="Holy See" {{ $candidate->candidateDetail->nationality === 'Holy See' ? 'selected' : '' }}>Holy See</option>
<option value="Honduras" {{ $candidate->candidateDetail->nationality === 'Honduras' ? 'selected' : '' }}>Honduras</option>
<option value="Hong Kong" {{ $candidate->candidateDetail->nationality === 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
<option value="Hungary" {{ $candidate->candidateDetail->nationality === 'Hungary' ? 'selected' : '' }}>Hungary</option>
<option value="Iceland" {{ $candidate->candidateDetail->nationality === 'Iceland' ? 'selected' : '' }}>Iceland</option>
<option value="India" {{ $candidate->candidateDetail->nationality === 'India' ? 'selected' : '' }}>India</option>
<option value="Indonesia" {{ $candidate->candidateDetail->nationality === 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
<option value="Iran" {{ $candidate->candidateDetail->nationality === 'Iran' ? 'selected' : '' }}>Iran</option>
<option value="Iraq" {{ $candidate->candidateDetail->nationality === 'Iraq' ? 'selected' : '' }}>Iraq</option>

<option value="Ireland" {{ $candidate->candidateDetail->nationality === 'Ireland' ? 'selected' : '' }}>Ireland</option>
<option value="Israel" {{ $candidate->candidateDetail->nationality === 'Israel' ? 'selected' : '' }}>Israel</option>
<option value="Italy" {{ $candidate->candidateDetail->nationality === 'Italy' ? 'selected' : '' }}>Italy</option>
<option value="Jamaica" {{ $candidate->candidateDetail->nationality === 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
<option value="Japan" {{ $candidate->candidateDetail->nationality === 'Japan' ? 'selected' : '' }}>Japan</option>
<option value="Jordan" {{ $candidate->candidateDetail->nationality === 'Jordan' ? 'selected' : '' }}>Jordan</option>

<option value="Kazakhstan" {{ $candidate->candidateDetail->nationality === 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
<option value="Kenya" {{ $candidate->candidateDetail->nationality === 'Kenya' ? 'selected' : '' }}>Kenya</option>
<option value="Kiribati" {{ $candidate->candidateDetail->nationality === 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
<option value="Korea, Democratic People's Republic of" {{ $candidate->candidateDetail->nationality === "Korea, Democratic People's Republic of" ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of" {{ $candidate->candidateDetail->nationality === 'Korea, Republic of' ? 'selected' : '' }}>Korea, Republic of</option>
<option value="Kuwait" {{ $candidate->candidateDetail->nationality === 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
<option value="Kyrgyzstan" {{ $candidate->candidateDetail->nationality === 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
<option value="Lao People's Democratic Republic" {{ $candidate->candidateDetail->nationality === "Lao People's Democratic Republic" ? 'selected' : '' }}>Lao People's Democratic Republic</option>

<option value="Latvia" {{ $candidate->candidateDetail->nationality === 'Latvia' ? 'selected' : '' }}>Latvia</option>
<option value="Lebanon" {{ $candidate->candidateDetail->nationality === 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
<option value="Lesotho" {{ $candidate->candidateDetail->nationality === 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
<option value="Liberia" {{ $candidate->candidateDetail->nationality === 'Liberia' ? 'selected' : '' }}>Liberia</option>
<option value="Libyan Arab Jamahiriya" {{ $candidate->candidateDetail->nationality === 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libyan Arab Jamahiriya</option>
<option value="Liechtenstein" {{ $candidate->candidateDetail->nationality === 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
<option value="Lithuania" {{ $candidate->candidateDetail->nationality === 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
<option value="Luxembourg" {{ $candidate->candidateDetail->nationality === 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
<option value="Macao" {{ $candidate->candidateDetail->nationality === 'Macao' ? 'selected' : '' }}>Macao</option>
<option value="Macedonia" {{ $candidate->candidateDetail->nationality === 'Macedonia' ? 'selected' : '' }}>Macedonia</option>
<option value="Madagascar" {{ $candidate->candidateDetail->nationality === 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
<option value="Malawi" {{ $candidate->candidateDetail->nationality === 'Malawi' ? 'selected' : '' }}>Malawi</option>
<option value="Malaysia" {{ $candidate->candidateDetail->nationality === 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
<option value="Maldives" {{ $candidate->candidateDetail->nationality === 'Maldives' ? 'selected' : '' }}>Maldives</option>
<option value="Mali" {{ $candidate->candidateDetail->nationality === 'Mali' ? 'selected' : '' }}>Mali</option>
<option value="Malta" {{ $candidate->candidateDetail->nationality === 'Malta' ? 'selected' : '' }}>Malta</option>
<option value="Marshall Islands" {{ $candidate->candidateDetail->nationality === 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
<option value="Martinique" {{ $candidate->candidateDetail->nationality === 'Martinique' ? 'selected' : '' }}>Martinique</option>
<option value="Mauritania" {{ $candidate->candidateDetail->nationality === 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
<option value="Mauritius" {{ $candidate->candidateDetail->nationality === 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
<option value="Mayotte" {{ $candidate->candidateDetail->nationality === 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
<option value="Mexico" {{ $candidate->candidateDetail->nationality === 'Mexico' ? 'selected' : '' }}>Mexico</option>
<option value="Micronesia" {{ $candidate->candidateDetail->nationality === 'Micronesia' ? 'selected' : '' }}>Micronesia</option>
<option value="Moldova" {{ $candidate->candidateDetail->nationality === 'Moldova' ? 'selected' : '' }}>Moldova</option>
<option value="Monaco" {{ $candidate->candidateDetail->nationality === 'Monaco' ? 'selected' : '' }}>Monaco</option>
<option value="Mongolia" {{ $candidate->candidateDetail->nationality === 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
<option value="Montserrat" {{ $candidate->candidateDetail->nationality === 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
<option value="Morocco" {{ $candidate->candidateDetail->nationality === 'Morocco' ? 'selected' : '' }}>Morocco</option>
<option value="Mozambique" {{ $candidate->candidateDetail->nationality === 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
<option value="Myanmar" {{ $candidate->candidateDetail->nationality === 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
<option value="Namibia" {{ $candidate->candidateDetail->nationality === 'Namibia' ? 'selected' : '' }}>Namibia</option>
<option value="Nauru" {{ $candidate->candidateDetail->nationality === 'Nauru' ? 'selected' : '' }}>Nauru</option>
<option value="Nepal" {{ $candidate->candidateDetail->nationality === 'Nepal' ? 'selected' : '' }}>Nepal</option>
<option value="Netherlands" {{ $candidate->candidateDetail->nationality === 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
<option value="Netherlands Antilles" {{ $candidate->candidateDetail->nationality === 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
<option value="New Caledonia" {{ $candidate->candidateDetail->nationality === 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
<option value="New Zealand" {{ $candidate->candidateDetail->nationality === 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
<option value="Nicaragua" {{ $candidate->candidateDetail->nationality === 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
<option value="Niger" {{ $candidate->candidateDetail->nationality === 'Niger' ? 'selected' : '' }}>Niger</option>
<option value="Nigeria" {{ $candidate->candidateDetail->nationality === 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
<option value="Niue" {{ $candidate->candidateDetail->nationality === 'Niue' ? 'selected' : '' }}>Niue</option>
<option value="Norfolk Island" {{ $candidate->candidateDetail->nationality === 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
<option value="Northern Mariana Islands" {{ $candidate->candidateDetail->nationality === 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
<option value="Norway" {{ $candidate->candidateDetail->nationality === 'Norway' ? 'selected' : '' }}>Norway</option>
<option value="Oman" {{ $candidate->candidateDetail->nationality === 'Oman' ? 'selected' : '' }}>Oman</option>
<option value="Pakistan" {{ $candidate->candidateDetail->nationality === 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
<option value="Palau" {{ $candidate->candidateDetail->nationality === 'Palau' ? 'selected' : '' }}>Palau</option>
<option value="Panama" {{ $candidate->candidateDetail->nationality === 'Panama' ? 'selected' : '' }}>Panama</option>
<option value="Papua New Guinea" {{ $candidate->candidateDetail->nationality === 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
<option value="Paraguay" {{ $candidate->candidateDetail->nationality === 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
<option value="Peru" {{ $candidate->candidateDetail->nationality === 'Peru' ? 'selected' : '' }}>Peru</option>
<option value="Philippines" {{ $candidate->candidateDetail->nationality === 'Philippines' ? 'selected' : '' }}>Philippines</option>
<option value="Pitcairn" {{ $candidate->candidateDetail->nationality === 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
<option value="Poland" {{ $candidate->candidateDetail->nationality === 'Poland' ? 'selected' : '' }}>Poland</option>
<option value="Portugal" {{ $candidate->candidateDetail->nationality === 'Portugal' ? 'selected' : '' }}>Portugal</option>
<option value="Puerto Rico" {{ $candidate->candidateDetail->nationality === 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
<option value="Qatar" {{ $candidate->candidateDetail->nationality === 'Qatar' ? 'selected' : '' }}>Qatar</option>
<option value="Reunion" {{ $candidate->candidateDetail->nationality === 'Reunion' ? 'selected' : '' }}>Reunion</option>
<option value="Romania" {{ $candidate->candidateDetail->nationality === 'Romania' ? 'selected' : '' }}>Romania</option>
<option value="Russia" {{ $candidate->candidateDetail->nationality === 'Russia' ? 'selected' : '' }}>Russian Federation</option>
<option value="Rwanda" {{ $candidate->candidateDetail->nationality === 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
<option value="Saint Kitts and Nevis" {{ $candidate->candidateDetail->nationality === 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
<option value="Saint LUCIA" {{ $candidate->candidateDetail->nationality === 'Saint LUCIA' ? 'selected' : '' }}>Saint LUCIA</option>
<option value="Saint Vincent" {{ $candidate->candidateDetail->nationality === 'Saint Vincent' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
<option value="Samoa" {{ $candidate->candidateDetail->nationality === 'Samoa' ? 'selected' : '' }}>Samoa</option>
<option value="San Marino" {{ $candidate->candidateDetail->nationality === 'San Marino' ? 'selected' : '' }}>San Marino</option>
<option value="Sao Tome and Principe" {{ $candidate->candidateDetail->nationality === 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
<option value="Saudi Arabia" {{ $candidate->candidateDetail->nationality === 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
<option value="Senegal" {{ $candidate->candidateDetail->nationality === 'Senegal' ? 'selected' : '' }}>Senegal</option>
<option value="Seychelles" {{ $candidate->candidateDetail->nationality === 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
<option value="Sierra" {{ $candidate->candidateDetail->nationality === 'Sierra' ? 'selected' : '' }}>Sierra Leone</option>
<option value="Singapore" {{ $candidate->candidateDetail->nationality === 'Singapore' ? 'selected' : '' }}>Singapore</option>
<option value="Slovakia" {{ $candidate->candidateDetail->nationality === 'Slovakia' ? 'selected' : '' }}>Slovakia (Slovak Republic)</option>
<option value="Slovenia" {{ $candidate->candidateDetail->nationality === 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
<option value="Solomon Islands" {{ $candidate->candidateDetail->nationality === 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
<option value="Somalia" {{ $candidate->candidateDetail->nationality === 'Somalia' ? 'selected' : '' }}>Somalia</option>
<option value="South Africa" {{ $candidate->candidateDetail->nationality === 'South Africa' ? 'selected' : '' }}>South Africa</option>
<option value="South Georgia" {{ $candidate->candidateDetail->nationality === 'South Georgia' ? 'selected' : '' }}>South Georgia and the South Sandwich Islands</option>
<option value="Span" {{ $candidate->candidateDetail->nationality === 'Span' ? 'selected' : '' }}>Spain</option>
<option value="SriLanka" {{ $candidate->candidateDetail->nationality === 'SriLanka' ? 'selected' : '' }}>Sri Lanka</option>
<option value="St. Helena" {{ $candidate->candidateDetail->nationality === 'St. Helena' ? 'selected' : '' }}>St. Helena</option>
<option value="St. Pierre and Miguelon" {{ $candidate->candidateDetail->nationality === 'St. Pierre and Miguelon' ? 'selected' : '' }}>St. Pierre and Miquelon</option>
<option value="Sudan" {{ $candidate->candidateDetail->nationality === 'Sudan' ? 'selected' : '' }}>Sudan</option>
<option value="Suriname" {{ $candidate->candidateDetail->nationality === 'Suriname' ? 'selected' : '' }}>Suriname</option>
<option value="Svalbard" {{ $candidate->candidateDetail->nationality === 'Svalbard' ? 'selected' : '' }}>Svalbard and Jan Mayen Islands</option>
<option value="Swaziland" {{ $candidate->candidateDetail->nationality === 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
<option value="Sweden" {{ $candidate->candidateDetail->nationality === 'Sweden' ? 'selected' : '' }}>Sweden</option>
<option value="Switzerland" {{ $candidate->candidateDetail->nationality === 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
<option value="Syria" {{ $candidate->candidateDetail->nationality === 'Syria' ? 'selected' : '' }}>Syrian Arab Republic</option>
<option value="Taiwan" {{ $candidate->candidateDetail->nationality === 'Taiwan' ? 'selected' : '' }}>Taiwan, Province of China</option>
<option value="Tajikistan" {{ $candidate->candidateDetail->nationality === 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
<option value="Tanzania" {{ $candidate->candidateDetail->nationality === 'Tanzania' ? 'selected' : '' }}>Tanzania, United Republic of</option>
<option value="Thailand" {{ $candidate->candidateDetail->nationality === 'Thailand' ? 'selected' : '' }}>Thailand</option>
<option value="Togo" {{ $candidate->candidateDetail->nationality === 'Togo' ? 'selected' : '' }}>Togo</option>
<option value="Tokelau" {{ $candidate->candidateDetail->nationality === 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
<option value="Tonga" {{ $candidate->candidateDetail->nationality === 'Tonga' ? 'selected' : '' }}>Tonga</option>
<option value="Trinidad and Tobago" {{ $candidate->candidateDetail->nationality === 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
<option value="Tunisia" {{ $candidate->candidateDetail->nationality === 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
<option value="Turkey" {{ $candidate->candidateDetail->nationality === 'Turkey' ? 'selected' : '' }}>Turkey</option>
<option value="Turkmenistan" {{ $candidate->candidateDetail->nationality === 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
<option value="Turks and Caicos" {{ $candidate->candidateDetail->nationality === 'Turks and Caicos' ? 'selected' : '' }}>Turks and Caicos Islands</option>
<option value="Tuvalu" {{ $candidate->candidateDetail->nationality === 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
<option value="Uganda" {{ $candidate->candidateDetail->nationality === 'Uganda' ? 'selected' : '' }}>Uganda</option>
<option value="Ukraine" {{ $candidate->candidateDetail->nationality === 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
<option value="United Arab Emirates" {{ $candidate->candidateDetail->nationality === 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
<option value="United Kingdom" {{ $candidate->candidateDetail->nationality === 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
<option value="United States" {{ $candidate->candidateDetail->nationality === 'United States' ? 'selected' : '' }}>United States</option>
<option value="United States Minor Outlying Islands" {{ $candidate->candidateDetail->nationality === 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
<option value="Uruguay" {{ $candidate->candidateDetail->nationality === 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
<option value="Uzbekistan" {{ $candidate->candidateDetail->nationality === 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
<option value="Vanuatu" {{ $candidate->candidateDetail->nationality === 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
<option value="Venezuela" {{ $candidate->candidateDetail->nationality === 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
<option value="Vietnam" {{ $candidate->candidateDetail->nationality === 'Vietnam' ? 'selected' : '' }}>Viet Nam</option>
<option value="Virgin Islands (British)" {{ $candidate->candidateDetail->nationality === 'Virgin Islands (British)' ? 'selected' : '' }}>Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)" {{ $candidate->candidateDetail->nationality === 'Virgin Islands (U.S)' ? 'selected' : '' }}>Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands" {{ $candidate->candidateDetail->nationality === 'Wallis and Futuna Islands' ? 'selected' : '' }}>Wallis and Futuna Islands</option>
<option value="Western Sahara" {{ $candidate->candidateDetail->nationality === 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
<option value="Yemen" {{ $candidate->candidateDetail->nationality === 'Yemen' ? 'selected' : '' }}>Yemen</option>
<option value="Serbia" {{ $candidate->candidateDetail->nationality === 'Serbia' ? 'selected' : '' }}>Serbia</option>
<option value="Zambia" {{ $candidate->candidateDetail->nationality === 'Zambia' ? 'selected' : '' }}>Zambia</option>
<option value="Zimbabwe" {{ $candidate->candidateDetail->nationality === 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                  @error('nationality')
            <span class="invalid-feedback">{{ $message }}</span>
@enderror
                                                            </div>

                                                        </div>
                                                    </div>

                                                   <div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>UAE Visa Status?</label>
        <div class="row twm-form-radio-inline">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="uae_status" id="residenceVisa" value="residence_visa" {{ old('uae_status', $candidateDetail->uae_status) === 'residence_visa' ? 'checked' : '' }}>
                <label class="form-check-label" for="residenceVisa">
                    Residence Visa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="uae_status" id="visitingVisa" value="visiting_visa" {{ old('uae_status', $candidateDetail->uae_status) === 'visiting_visa' ? 'checked' : '' }}>
                <label class="form-check-label" for="visitingVisa">
                    Visiting Visa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="uae_status" id="outOfUAE" value="out_of_uae" {{ old('uae_status', $candidateDetail->uae_status) === 'out_of_uae' ? 'checked' : '' }}>
                <label class="form-check-label" for="outOfUAE">
                    Out of UAE
                </label>
            </div>
        </div>
        @error('uae_status')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>

<div id="expiryDateInput" style="display: none;">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="form-group city-outer-bx has-feedback">
            <label>UAE Visa Status Expiry Date</label>
            <div class="ls-inputicon-box">
                <input class="form-control" type="date" name="uae_status_expiry_date" id="uae_status_expiry_date" value="{{ old('uae_status_expiry_date', $candidateDetail->uae_status_expiry_date) }}">
                <i class="fs-input-icon fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Do you have a UAE driving license?</label>
        <div class="row twm-form-radio-inline">
            <div class="form-check">
                <input type="radio" class="form-check-input" id="driving-licence-yes" name="driving_licence" value="yes" {{ $candidateDetail->driving_licence === 'yes' ? 'checked' : '' }}>
                <label class="form-check-label" for="driving-licence-yes">Yes</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="driving-licence-no" name="driving_licence" value="no" {{ $candidateDetail->driving_licence === 'no' ? 'checked' : '' }}>
                <label for="driving-licence-no" class="form-check-label">No</label>
            </div>
        </div>
        @error('driving_licence')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>

<div id="driving_licence_expiryDate" style="display: {{ $candidateDetail->driving_licence === 'yes' ? 'block' : 'none' }}">
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="form-group city-outer-bx has-feedback">
            <label>UAE driving license Expiry Date</label>
            <div class="ls-inputicon-box">
                <input class="form-control" type="date" name="driving_licence_expiry_date" id="driving_licence_expiry_date" value="{{ old('driving_licence_expiry_date', $candidateDetail->driving_licence_expiry_date) }}">
                <i class="fs-input-icon fa fa-calendar"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Experience Regions</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experience_region" id="uaeRegion" value="UAE" {{ $candidateDetail->experience_region === 'UAE' ? 'checked' : '' }}>
            <label class="form-check-label" for="uaeRegion">
                UAE
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experience_region" id="gccRegion" value="GCC" {{ $candidateDetail->experience_region === 'GCC' ? 'checked' : '' }}>
            <label class="form-check-label" for="gccRegion">
                GCC
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experience_region" id="europeRegion" value="Europe" {{ $candidateDetail->experience_region === 'Europe' ? 'checked' : '' }}>
            <label class="form-check-label" for="europeRegion">
                Europe
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experience_region" id="othersRegion" value="Others" {{ $candidateDetail->experience_region === 'Others' ? 'checked' : '' }}>
            <label class="form-check-label" for="othersRegion">
                Others
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="experience_region" id="noExperience" value="no" {{ $candidateDetail->experience_region === 'no' ? 'checked' : '' }}>
            <label class="form-check-label" for="noExperience">
                No Experience
            </label>
        </div>
        <div id="experienceYearsSelect" style="display: {{ $candidateDetail->experience_region === 'no' ? 'none' : 'block' }}">
            <label>Experience in Years</label>
            <div class="ls-inputicon-box">
                <select class="wt-select-box selectpicker" name="experience_years" id="" data-live-search="true" title="" data-bv-field="size">
                    @for($i = 0; $i <= 50; $i++)
                        <option value="{{ $i }}" {{ $candidateDetail->experience_years == $i ? 'selected' : '' }}>{{ $i }} {{ $i === 0 ? 'Year' : 'Years' }}</option>
                    @endfor
                </select>
                <i class="fs-input-icon fa fa-user-edit"></i>
            </div>
        </div>
    </div>
</div>



<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Language Known</label>
        <div class="ls-inputicon-box">
            <select class="wt-select-box selectpicker" data-live-search="true" title="Nothing Selected" id="autocomplete" name="languages_known[]" multiple="multiple" data-bv-field="size">
                @foreach($languages as $language)
                    <option value="{{ $language->name }}" {{ is_array($selectedLanguages) && in_array($language->name, $selectedLanguages) ? 'selected' : '' }}>
                        {{ $language->name }}
                    </option>
                @endforeach
            </select>
            <i class="fs-input-icon fa fa-language"></i>
        </div>
        @error('languages_known')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>


          <!-- Qualification Field -->
    <div class="col-xl-4 col-lg-6 col-md-12">
        <div class="form-group city-outer-bx has-feedback">
            <label>Qualification</label>
            <div class="ls-inputicon-box">
                <input class="form-control" name="qualification" type="text" placeholder="Qualification" value="{{ $candidateDetail->qualification }}">
                <i class="fs-input-icon fa fa-user-graduate"></i>
            </div>
            @error('qualification')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Gender</label>
        <div class="ls-inputicon-box">
            <select id="gender" name="gender" class="wt-select-box selectpicker" data-live-search="true" title="Gender" data-bv-field="size">
                <option class="bs-title-option" value="">Gender</option>
                <option value="Male" {{ $candidateDetail->gender === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $candidateDetail->gender === 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Any" {{ $candidateDetail->gender === 'Any' ? 'selected' : '' }}>Any</option>
            </select>
            <i class="fs-input-icon fa fa-venus-mars"></i>
        </div>
    </div>
</div>



<div class="col-xl-12 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Upload Resume</label>
        <div class="ls-inputicon-box">
            <input class="form-control" type="file" id="resume" name="resume" placeholder="Click here or drop files to upload">
            <small>*You can upload your resume in PDF or Word format.</small>
            <i class="sl-icon-plus"></i>
        </div>
        @error('resume')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Current Resume</label>
        <div class="ls-inputicon-box">
<a href="{{ asset('storage/' . $candidateDetail->resume) }}" target="_blank">{{ __('View Resume') }}</a>
        </div>

    </div>
</div>

                                            <div class="col-lg-12 col-md-12">
                                                        <div class="text-left">
                                                            <button type="submit" class="site-button">Save Changes</button>
                                                        </div>
                                                    </div>


                                            </div>

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
    // Add an event listener to watch for changes in the radio buttons
    const residenceVisaRadio = document.getElementById('residenceVisa');
    const visitingVisaRadio = document.getElementById('visitingVisa');
    const outOfUAERadio = document.getElementById('outOfUAE');
    const expiryDateInput = document.getElementById('expiryDateInput');

    // Function to update the visibility of the expiry date input based on the initial state
    function updateExpiryDateInputVisibility() {
        if (residenceVisaRadio.checked || visitingVisaRadio.checked) {
            expiryDateInput.style.display = 'block';
        } else if (outOfUAERadio.checked) {
            expiryDateInput.style.display = 'none';
        }
    }

    // Initial setup when the page loads
    updateExpiryDateInputVisibility();

    residenceVisaRadio.addEventListener('change', function () {
        if (this.checked) {
            expiryDateInput.style.display = 'block';
        }
    });

    visitingVisaRadio.addEventListener('change', function () {
        if (this.checked) {
            expiryDateInput.style.display = 'block';
        }
    });

    outOfUAERadio.addEventListener('change', function () {
        if (this.checked) {
            expiryDateInput.style.display = 'none';
        }
    });
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
        $(document).ready(function() {
            $('#autocomplete').select2({
                placeholder: 'Select Languages',
                allowClear: true,
                tags: true,
            });
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the radio buttons for "Yes" and "No"
    var drivingLicenseYes = document.getElementById("driving-licence-yes");
    var drivingLicenseNo = document.getElementById("driving-licence-no");

    // Get the section for the expiry date
    var expiryDateSection = document.getElementById("driving_licence_expiryDate");

    // Add an event listener to the radio buttons
    drivingLicenseYes.addEventListener("change", function() {
        if (drivingLicenseYes.checked) {
            expiryDateSection.style.display = "block";
        } else {
            expiryDateSection.style.display = "none";
        }
    });

    drivingLicenseNo.addEventListener("change", function() {
        if (drivingLicenseNo.checked) {
            expiryDateSection.style.display = "none";
        }
    });
});
</script>
@endsection
