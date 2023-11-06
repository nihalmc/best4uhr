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
                                <form id="languageForm"  method="POST" action="{{ route('candidate-details.store') }}" enctype="multipart/form-data">
  @csrf

                                    <!--Basic Information-->
                                    <div class="panel panel-default">
                                        <div class="panel-heading wt-panel-heading p-a20">
                                            <h4 class="panel-tittle m-a0">Basic Informations</h4>
                                        </div>
                                        <div class="panel-body wt-panel-body p-a20 m-b30 ">

                                            <div class="row">


                                             <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Home Country</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="home_country" type="text" placeholder="UAE">
                                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                            </div>
                                              @if ($errors->has('home_country'))
                                    <span class="text-danger">{{ $errors->first('home_country') }}</span>
                                @endif
                                                        </div>
                                                    </div>



                                                    <div class="col-xl-6 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Nationality</label>
                                                            <div class="ls-inputicon-box">
<select class="wt-select-box selectpicker" id="nationality" name="nationality" data-live-search="true" title="" id="country" data-bv-field="size">
                                                    <option class="bs-title-option" value="">Nationality</option>
                                                        <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India" selected >India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
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
                <input class="form-check-input" type="radio" name="uae_status" id="residenceVisa" value="residence_visa">
                <label class="form-check-label" for="residenceVisa">
                   Residence Visa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="uae_status" id="visitingVisa" value="visiting_visa">
                <label class="form-check-label" for="visitingVisa">
                    Visiting Visa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="uae_status" id="outOfUAE" value="out_of_uae">
                <label class="form-check-label" for="outOfUAE">
                    Out of UAE
                </label>
            </div>
            <div id="expiryDateInput" style="display: none;">

        <div class="form-group city-outer-bx has-feedback">

        <label>UAE Visa Status Expiry Date</label>
            <div class="ls-inputicon-box">
                <input class="form-control" type="date" name="uae_status_expiry_date" id="uae_status_expiry_date">
                <i class="fs-input-icon fa fa-calendar"></i>
            </div>
        </div>

</div>
        </div>
          @error('uae_status')
            <span class="invalid-feedback">{{ $message }}</span>
@enderror
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Do you have a UAE driving license?</label>
                                                            <div class=" row twm-form-radio-inline">
                                                                <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="driving-licence-yes" name="driving_licence" value="yes">
                                                     <label class="form-check-label" for="driving-licence-yes">Yes</label>
                                                       </div>
                                                       <div class="form-check">
                                                     <input class="form-check-input" type="radio" id="driving-licence-no" name="driving_licence" value="no">
                                                 <label for="driving-licence-no" class="form-check-label">No</label>
                        </div>
                          @error('driving_licence')
            <span class="invalid-feedback">{{ $message }}</span>
@enderror
                        </div>
   <div id="driving_licence_expiryDate" style="display: none;">
        <label>UAE driving license Expiry Date</label>
            <div class="ls-inputicon-box">
                <input class="form-control" type="date" name="driving_licence_expiry_date" id="driving_licence_expiry_date">
                <i class="fs-input-icon fa fa-calendar"></i>
            </div>



                                                            </div>

                                                        </div>
                                                    </div>



<div class="col-xl-4 col-lg-6 col-md-12">
        <div class="form-group city-outer-bx has-feedback">
            <label>Experience Regions</label>
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
        </div>
    </div>

 <div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group city-outer-bx has-feedback">
        <label>Language Known</label>
        <div class="ls-inputicon-box">
            <select class="wt-select-box selectpicker" data-live-search="true" title="Nothing Selected" id="autocomplete" name="languages_known[]" multiple="multiple" data-bv-field="size">
                @foreach($languages as $language)
                    <option value="{{ $language->name }}">{{ $language->name }}</option>
                @endforeach
            </select>
            <i class="fs-input-icon fa fa-language"></i>
        </div>
        @error('languages_known')
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
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
            </select>
            <i class="fs-input-icon fa fa-venus-mars"></i>
        </div>
    </div>
</div>


  <div class="col-xl-4 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Qualification</label>
                                                            <div class="ls-inputicon-box">
                                                                <input class="form-control" name="qualification" type="text" placeholder="Qualification">
                                                                  <i class="fs-input-icon fa fa-user-graduate"></i>
                                                            </div>
  @error('qualification')
            <span class="invalid-feedback">{{ $message }}</span>
@enderror
                                                        </div>
                                                    </div>


<div class="col-xl-12 col-lg-6 col-md-12">
                                                        <div class="form-group city-outer-bx has-feedback">
                                                            <label>Upload Resume</label>
                                                            <div class="ls-inputicon-box ">
                                                                 <input class="form-control" type="file"  id="resume" name="resume"  placeholder="Click here or drop files to upload">
                                                                <small>*You can upload your resume in PDF or Word format.</small>
                                                            <i class="sl-icon-plus"></i>
                                                            </div>
  @error('resume')
            <span class="invalid-feedback">{{ $message }}</span>
@enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="text-left">
                                                            <button type="submit" id="submitBtn" class="site-button">Save Changes</button>
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
