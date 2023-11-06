@extends('layouts.employer')

@section('content')
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Edit a New Jobs</h2>
                    <div class="breadcrumbs"><a href="{{ route('employer.index') }}">Home</a><a href="{{ route('employer.index') }}">Dashboard</a><span>Job Submission Form</span></div>
                </div>

                <!--Logo and Cover image-->
                <!-- <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0">Logo and Cover image</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 p-b0 m-b30 ">

                        <div class="row">

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">

                                    <div class="dashboard-profile-pic">
                                        <div class="dashboard-profile-photo">
                                            <img src="images/jobs-company/pic1.jpg" alt="">
                                            <div class="upload-btn-wrapper">
                                                <button class="site-button button-sm">Upload Photo</button>
                                                <input type="file" name="myfile">
                                            </div>
                                        </div>
                                        <p><b>Company Logo :- </b> Max file size is 1MB, Minimum dimension: 136 x 136 And Suitable files are .jpg & .png</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="dashboard-cover-pic">
                                    <form action="upload.php" class="dropzone"></form>
                                    <p><b>Background Banner Image :- </b> Max file size is 1MB, Minimum dimension: 770 x 310 And Suitable files are .jpg & .png</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>  -->

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <form method="POST" action="{{ route('jobs.update', $job->id) }}">
                             @csrf
                             @method('PUT')
<div class="row">


                                    <!--Job title-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="job_position">Job Position</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="job_position" name="job_position" value="{{ old('job_position', $job->job_position) }}" placeholder="Job Position">
                                                <i class="fs-input-icon fa fa-address-card"></i>
                                                 @error('job_position')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--Job title-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Field of Work</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="field_of_work" name="field_of_work" value="{{ old('field_of_work', $job->field_of_work) }}" placeholder="Field of Work">
                                                <i class="fs-input-icon fa fa-file-alt"></i>
                                                 @error('field_of_work')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                   <!--Offered Salary-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Offered Salary</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" type="text" id="salary" name="salary" value="{{ old('field_of_work', $job->salary) }}" placeholder="Salary">
                                                <i class="fs-input-icon fa fa-dollar-sign"></i>
                                                 @error('salary')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Gender-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="ls-inputicon-box">
                                                <select id="gender" name="gender" class="wt-select-box selectpicker"  data-live-search="true" title="" id="gender" data-bv-field="size">
                                                    <option class="bs-title-option" value="">Gender</option>
              <option value="Male" {{ old('gender', $job->gender) === 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $job->gender) === 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Any" {{ old('gender', $job->gender) === 'Any' ? 'selected' : '' }}>Any</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-venus-mars"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Country-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>Nationality</label>
                                            <div class="ls-inputicon-box">
                                                <select class="wt-select-box selectpicker" id="nationality" name="nationality" data-live-search="true" title="" id="country" data-bv-field="size">
                                                    <option class="bs-title-option" value="" >Nationality</option>
                                                        <option value="Afghanistan" {{ $job->nationality === 'Afghanistan' ? 'selected' : '' }}>Afghanistan</option>
    <option value="Albania" {{ $job->nationality === 'Albania' ? 'selected' : '' }}>Albania</option>
    <option value="Algeria" {{ $job->nationality === 'Algeria' ? 'selected' : '' }}>Algeria</option>
    <option value="American Samoa" {{ $job->nationality === 'American Samoa' ? 'selected' : '' }}>American Samoa</option>
    <option value="Andorra" {{ $job->nationality === 'Andorra' ? 'selected' : '' }}>Andorra</option>
    <option value="Angola" {{ $job->nationality === 'Angola' ? 'selected' : '' }}>Angola</option>
    <option value="Antarctica" {{ $job->nationality === 'Antarctica' ? 'selected' : '' }}>Antarctica</option>
    <option value="Antigua and Barbuda" {{ $job->nationality === 'Antigua and Barbuda' ? 'selected' : '' }}>Antigua and Barbuda</option>
    <option value="Argentina" {{ $job->nationality === 'Argentina' ? 'selected' : '' }}>Argentina</option>
    <option value="Armenia" {{ $job->nationality === 'Armenia' ? 'selected' : '' }}>Armenia</option>
    <option value="Aruba" {{ $job->nationality === 'Aruba' ? 'selected' : '' }}>Aruba</option>
    <option value="Australia" {{ $job->nationality === 'Australia' ? 'selected' : '' }}>Australia</option>
    <option value="Austria" {{ $job->nationality === 'Austria' ? 'selected' : '' }}>Austria</option>
    <option value="Azerbaijan" {{ $job->nationality === 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan</option>
    <option value="Bahamas" {{ $job->nationality === 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
    <option value="Bahrain" {{ $job->nationality === 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
    <option value="Bangladesh" {{ $job->nationality === 'Bangladesh' ? 'selected' : '' }}>Bangladesh</option>
    <option value="Barbados" {{ $job->nationality === 'Barbados' ? 'selected' : '' }}>Barbados</option>
    <option value="Belarus" {{ $job->nationality === 'Belarus' ? 'selected' : '' }}>Belarus</option>
    <option value="Belgium" {{ $job->nationality === 'Belgium' ? 'selected' : '' }}>Belgium</option>
    <option value="Belize" {{ $job->nationality === 'Belize' ? 'selected' : '' }}>Belize</option>
    <option value="Benin" {{ $job->nationality === 'Benin' ? 'selected' : '' }}>Benin</option>
    <option value="Bermuda" {{ $job->nationality === 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
    <option value="Bhutan" {{ $job->nationality === 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
    <option value="Bolivia" {{ $job->nationality === 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
    <option value="Bosnia and Herzegovina" {{ $job->nationality === 'Bosnia and Herzegovina' ? 'selected' : '' }}>Bosnia and Herzegovina</option>
    <option value="Botswana" {{ $job->nationality === 'Botswana' ? 'selected' : '' }}>Botswana</option>
    <option value="Bouvet Island" {{ $job->nationality === 'Bouvet Island' ? 'selected' : '' }}>Bouvet Island</option>
    <option value="Brazil" {{ $job->nationality === 'Brazil' ? 'selected' : '' }}>Brazil</option>
    <option value="British Indian Ocean Territory" {{ $job->nationality === 'British Indian Ocean Territory' ? 'selected' : '' }}>British Indian Ocean Territory</option>
    <option value="Brunei Darussalam" {{ $job->nationality === 'Brunei Darussalam' ? 'selected' : '' }}>Brunei Darussalam</option>
    <option value="Bulgaria" {{ $job->nationality === 'Bulgaria' ? 'selected' : '' }}>Bulgaria</option>
    <option value="Burkina Faso" {{ $job->nationality === 'Burkina Faso' ? 'selected' : '' }}>Burkina Faso</option>
    <option value="Burundi" {{ $job->nationality === 'Burundi' ? 'selected' : '' }}>Burundi</option>
    <option value="Cambodia" {{ $job->nationality === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
    <option value="Cameroon" {{ $job->nationality === 'Cameroon' ? 'selected' : '' }}>Cameroon</option>
    <option value="Canada" {{ $job->nationality === 'Canada' ? 'selected' : '' }}>Canada</option>
    <option value="Cape Verde" {{ $job->nationality === 'Cape Verde' ? 'selected' : '' }}>Cape Verde</option>
    <option value="Cayman Islands" {{ $job->nationality === 'Cayman Islands' ? 'selected' : '' }}>Cayman Islands</option>
    <option value="Central African Republic" {{ $job->nationality === 'Central African Republic' ? 'selected' : '' }}>Central African Republic</option>
    <option value="Chad" {{ $job->nationality === 'Chad' ? 'selected' : '' }}>Chad</option>
    <option value="Chile" {{ $job->nationality === 'Chile' ? 'selected' : '' }}>Chile</option>
    <option value="China" {{ $job->nationality === 'China' ? 'selected' : '' }}>China</option>
    <option value="Christmas Island" {{ $job->nationality === 'Christmas Island' ? 'selected' : '' }}>Christmas Island</option>
    <option value="Cocos (Keeling) Islands" {{ $job->nationality === 'Cocos (Keeling) Islands' ? 'selected' : '' }}>Cocos (Keeling) Islands</option>
     <option value="Cambodia" {{ $job->nationality === 'Cambodia' ? 'selected' : '' }}>Cambodia</option>
    <option value="Comoros" {{ $job->nationality === 'Comoros' ? 'selected' : '' }}>Comoros</option>
    <option value="Congo" {{ $job->nationality === 'Congo' ? 'selected' : '' }}>Congo</option>
    <option value="Congo, the Democratic Republic of the" {{ $job->nationality === 'Congo, the Democratic Republic of the' ? 'selected' : '' }}>Congo, the Democratic Republic of</option>
    <option value="Cook Islands" {{ $job->nationality === 'Cook Islands' ? 'selected' : '' }}>Cook Islands</option>
    <option value="Costa Rica" {{ $job->nationality === 'Costa Rica' ? 'selected' : '' }}>Costa Rica</option>
    <option value="Cote d'Ivoire" {{ $job->nationality === "Cote d'Ivoire" ? 'selected' : '' }}>Cote d'Ivoire</option>
    <option value="Croatia" {{ $job->nationality === 'Croatia' ? 'selected' : '' }}>Croatia (Hrvatska)</option>
    <option value="Cuba" {{ $job->nationality === 'Cuba' ? 'selected' : '' }}>Cuba</option>
    <option value="Cyprus" {{ $job->nationality === 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
    <option value="Czech Republic" {{ $job->nationality === 'Czech Republic' ? 'selected' : '' }}>Czech Republic</option>
    <option value="Denmark" {{ $job->nationality === 'Denmark' ? 'selected' : '' }}>Denmark</option>
    <option value="Djibouti" {{ $job->nationality === 'Djibouti' ? 'selected' : '' }}>Djibouti</option>
    <option value="Dominica" {{ $job->nationality === 'Dominica' ? 'selected' : '' }}>Dominica</option>
    <option value="Dominican Republic" {{ $job->nationality === 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic</option>
    <option value="East Timor" {{ $job->nationality === 'East Timor' ? 'selected' : '' }}>East Timor</option>
    <option value="Ecuador" {{ $job->nationality === 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
    <option value="Egypt" {{ $job->nationality === 'Egypt' ? 'selected' : '' }}>Egypt</option>
    <option value="El Salvador" {{ $job->nationality === 'El Salvador' ? 'selected' : '' }}>El Salvador</option>
    <option value="Equatorial Guinea" {{ $job->nationality === 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea</option>
    <option value="Eritrea" {{ $job->nationality === 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
    <option value="Estonia" {{ $job->nationality === 'Estonia' ? 'selected' : '' }}>Estonia</option>
    <option value="Ethiopia" {{ $job->nationality === 'Ethiopia' ? 'selected' : '' }}>Ethiopia</option>
    <option value="Falkland Islands (Malvinas)" {{ $job->nationality === 'Falkland Islands (Malvinas)' ? 'selected' : '' }}>Falkland Islands</option>
    <option value="Faroe Islands" {{ $job->nationality === 'Faroe Islands' ? 'selected' : '' }}>Faroe Islands</option>
    <option value="Fiji" {{ $job->nationality === 'Fiji' ? 'selected' : '' }}>Fiji</option>
    <option value="Finland" {{ $job->nationality === 'Finland' ? 'selected' : '' }}>Finland</option>
    <option value="France" {{ $job->nationality === 'France' ? 'selected' : '' }}>France</option>
    <option value="France, Metropolitan" {{ $job->nationality === 'France, Metropolitan' ? 'selected' : '' }}>France, Metropolitan</option>
    <option value="French Guiana" {{ $job->nationality === 'French Guiana' ? 'selected' : '' }}>French Guiana</option>
    <option value="French Polynesia" {{ $job->nationality === 'French Polynesia' ? 'selected' : '' }}>French Polynesia</option>
    <option value="French Southern Territories" {{ $job->nationality === 'French Southern Territories' ? 'selected' : '' }}>French Southern Territories</option>
 <option value="Gabon" {{ $job->nationality === 'Gabon' ? 'selected' : '' }}>Gabon</option>
    <option value="Gambia" {{ $job->nationality === 'Gambia' ? 'selected' : '' }}>Gambia</option>
    <option value="Georgia" {{ $job->nationality === 'Georgia' ? 'selected' : '' }}>Georgia</option>
    <option value="Germany" {{ $job->nationality === 'Germany' ? 'selected' : '' }}>Germany</option>
    <option value="Ghana" {{ $job->nationality === 'Ghana' ? 'selected' : '' }}>Ghana</option>
    <option value="Gibraltar" {{ $job->nationality === 'Gibraltar' ? 'selected' : '' }}>Gibraltar</option>
    <option value="Greece" {{ $job->nationality === 'Greece' ? 'selected' : '' }}>Greece</option>
    <option value="Greenland" {{ $job->nationality === 'Greenland' ? 'selected' : '' }}>Greenland</option>
    <option value="Grenada" {{ $job->nationality === 'Grenada' ? 'selected' : '' }}>Grenada</option>
    <option value="Guadeloupe" {{ $job->nationality === 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe</option>
    <option value="Guam" {{ $job->nationality === 'Guam' ? 'selected' : '' }}>Guam</option>
    <option value="Guatemala" {{ $job->nationality === 'Guatemala' ? 'selected' : '' }}>Guatemala</option>
    <option value="Guinea" {{ $job->nationality === 'Guinea' ? 'selected' : '' }}>Guinea</option>
    <option value="Guinea-Bissau" {{ $job->nationality === 'Guinea-Bissau' ? 'selected' : '' }}>Guinea-Bissau</option>
    <option value="Guyana" {{ $job->nationality === 'Guyana' ? 'selected' : '' }}>Guyana</option>
    <option value="Haiti" {{ $job->nationality === 'Haiti' ? 'selected' : '' }}>Haiti</option>
    <option value="Heard and Mc Donald Islands" {{ $job->nationality === 'Heard and Mc Donald Islands' ? 'selected' : '' }}>Heard and Mc Donald Islands</option>
    <option value="Holy See (Vatican City State)" {{ $job->nationality === 'Holy See (Vatican City State)' ? 'selected' : '' }}>Holy See</option>
    <option value="Honduras" {{ $job->nationality === 'Honduras' ? 'selected' : '' }}>Honduras</option>
    <option value="Hong Kong" {{ $job->nationality === 'Hong Kong' ? 'selected' : '' }}>Hong Kong</option>
    <option value="Hungary" {{ $job->nationality === 'Hungary' ? 'selected' : '' }}>Hungary</option>
    <option value="Iceland" {{ $job->nationality === 'Iceland' ? 'selected' : '' }}>Iceland</option>
    <option value="India" {{ $job->nationality === 'India' ? 'selected' : '' }}>India</option>
    <option value="Indonesia" {{ $job->nationality === 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
    <option value="Iran (Islamic Republic of)" {{ $job->nationality === 'Iran (Islamic Republic of)' ? 'selected' : '' }}>Iran</option>
    <option value="Iraq" {{ $job->nationality === 'Iraq' ? 'selected' : '' }}>Iraq</option>
    <option value="Ireland" {{ $job->nationality === 'Ireland' ? 'selected' : '' }}>Ireland</option>
    <option value="Israel" {{ $job->nationality === 'Israel' ? 'selected' : '' }}>Israel</option>
    <option value="Italy" {{ $job->nationality === 'Italy' ? 'selected' : '' }}>Italy</option>
    <option value="Jamaica" {{ $job->nationality === 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
    <option value="Japan" {{ $job->nationality === 'Japan' ? 'selected' : '' }}>Japan</option>
    <option value="Jordan" {{ $job->nationality === 'Jordan' ? 'selected' : '' }}>Jordan</option>
    <option value="Kazakhstan" {{ $job->nationality === 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan</option>
    <option value="Kenya" {{ $job->nationality === 'Kenya' ? 'selected' : '' }}>Kenya</option>
    <option value="Kiribati" {{ $job->nationality === 'Kiribati' ? 'selected' : '' }}>Kiribati</option>
    <option value="Korea, Democratic People's Republic of" {{ $job->nationality === "Korea, Democratic People's Republic of" ? 'selected' : '' }}>Korea, Democratic People's Republic of</option>
    <option value="Korea, Republic of" {{ $job->nationality === 'Korea, Republic of' ? 'selected' : '' }}>Korea, Republic of</option>
    <option value="Kuwait" {{ $job->nationality === 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
    <option value="Kyrgyzstan" {{ $job->nationality === 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan</option>
    <option value="Lao People's Democratic Republic" {{ $job->nationality === "Lao People's Democratic Republic" ? 'selected' : '' }}>Lao People's Democratic Republic</option>
    <option value="Latvia" {{ $job->nationality === 'Latvia' ? 'selected' : '' }}>Latvia</option>
    <option value="Lebanon" {{ $job->nationality === 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
    <option value="Lesotho" {{ $job->nationality === 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
    <option value="Liberia" {{ $job->nationality === 'Liberia' ? 'selected' : '' }}>Liberia</option>
<option value="Libyan Arab Jamahiriya" {{ $job->nationality === 'Libyan Arab Jamahiriya' ? 'selected' : '' }}>Libyan Arab Jamahiriya</option>
<option value="Liechtenstein" {{ $job->nationality === 'Liechtenstein' ? 'selected' : '' }}>Liechtenstein</option>
<option value="Lithuania" {{ $job->nationality === 'Lithuania' ? 'selected' : '' }}>Lithuania</option>
<option value="Luxembourg" {{ $job->nationality === 'Luxembourg' ? 'selected' : '' }}>Luxembourg</option>
<option value="Macau" {{ $job->nationality === 'Macau' ? 'selected' : '' }}>Macau</option>
<option value="Macedonia, The Former Yugoslav Republic of" {{ $job->nationality === 'Macedonia, The Former Yugoslav Republic of' ? 'selected' : '' }}>Macedonia</option>
<option value="Madagascar" {{ $job->nationality === 'Madagascar' ? 'selected' : '' }}>Madagascar</option>
<option value="Malawi" {{ $job->nationality === 'Malawi' ? 'selected' : '' }}>Malawi</option>
<option value="Malaysia" {{ $job->nationality === 'Malaysia' ? 'selected' : '' }}>Malaysia</option>
<option value="Maldives" {{ $job->nationality === 'Maldives' ? 'selected' : '' }}>Maldives</option>
<option value="Mali" {{ $job->nationality === 'Mali' ? 'selected' : '' }}>Mali</option>
<option value="Malta" {{ $job->nationality === 'Malta' ? 'selected' : '' }}>Malta</option>
<option value="Marshall Islands" {{ $job->nationality === 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands</option>
<option value="Martinique" {{ $job->nationality === 'Martinique' ? 'selected' : '' }}>Martinique</option>
<option value="Mauritania" {{ $job->nationality === 'Mauritania' ? 'selected' : '' }}>Mauritania</option>
<option value="Mauritius" {{ $job->nationality === 'Mauritius' ? 'selected' : '' }}>Mauritius</option>
<option value="Mayotte" {{ $job->nationality === 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
<option value="Mexico" {{ $job->nationality === 'Mexico' ? 'selected' : '' }}>Mexico</option>
<option value="Micronesia, Federated States of" {{ $job->nationality === 'Micronesia, Federated States of' ? 'selected' : '' }}>Micronesia</option>
<option value="Moldova, Republic of" {{ $job->nationality === 'Moldova, Republic of' ? 'selected' : '' }}>Moldova</option>
<option value="Monaco" {{ $job->nationality === 'Monaco' ? 'selected' : '' }}>Monaco</option>
<option value="Mongolia" {{ $job->nationality === 'Mongolia' ? 'selected' : '' }}>Mongolia</option>
<option value="Montserrat" {{ $job->nationality === 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
<option value="Morocco" {{ $job->nationality === 'Morocco' ? 'selected' : '' }}>Morocco</option>
<option value="Mozambique" {{ $job->nationality === 'Mozambique' ? 'selected' : '' }}>Mozambique</option>
<option value="Myanmar" {{ $job->nationality === 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
<option value="Namibia" {{ $job->nationality === 'Namibia' ? 'selected' : '' }}>Namibia</option>
<option value="Nauru" {{ $job->nationality === 'Nauru' ? 'selected' : '' }}>Nauru</option>
<option value="Nepal" {{ $job->nationality === 'Nepal' ? 'selected' : '' }}>Nepal</option>
<option value="Netherlands" {{ $job->nationality === 'Netherlands' ? 'selected' : '' }}>Netherlands</option>
<option value="Netherlands Antilles" {{ $job->nationality === 'Netherlands Antilles' ? 'selected' : '' }}>Netherlands Antilles</option>
<option value="New Caledonia" {{ $job->nationality === 'New Caledonia' ? 'selected' : '' }}>New Caledonia</option>
<option value="New Zealand" {{ $job->nationality === 'New Zealand' ? 'selected' : '' }}>New Zealand</option>
<option value="Nicaragua" {{ $job->nationality === 'Nicaragua' ? 'selected' : '' }}>Nicaragua</option>
<option value="Niger" {{ $job->nationality === 'Niger' ? 'selected' : '' }}>Niger</option>
<option value="Nigeria" {{ $job->nationality === 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
<option value="Niue" {{ $job->nationality === 'Niue' ? 'selected' : '' }}>Niue</option>
<option value="Norfolk Island" {{ $job->nationality === 'Norfolk Island' ? 'selected' : '' }}>Norfolk Island</option>
<option value="Northern Mariana Islands" {{ $job->nationality === 'Northern Mariana Islands' ? 'selected' : '' }}>Northern Mariana Islands</option>
<option value="Norway" {{ $job->nationality === 'Norway' ? 'selected' : '' }}>Norway</option>
 <option value="Oman" {{ $job->nationality === 'Oman' ? 'selected' : '' }}>Oman</option>
    <option value="Pakistan" {{ $job->nationality === 'Pakistan' ? 'selected' : '' }}>Pakistan</option>
    <option value="Palau" {{ $job->nationality === 'Palau' ? 'selected' : '' }}>Palau</option>
    <option value="Panama" {{ $job->nationality === 'Panama' ? 'selected' : '' }}>Panama</option>
    <option value="Papua New Guinea" {{ $job->nationality === 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea</option>
    <option value="Paraguay" {{ $job->nationality === 'Paraguay' ? 'selected' : '' }}>Paraguay</option>
    <option value="Peru" {{ $job->nationality === 'Peru' ? 'selected' : '' }}>Peru</option>
    <option value="Philippines" {{ $job->nationality === 'Philippines' ? 'selected' : '' }}>Philippines</option>
    <option value="Pitcairn" {{ $job->nationality === 'Pitcairn' ? 'selected' : '' }}>Pitcairn</option>
    <option value="Poland" {{ $job->nationality === 'Poland' ? 'selected' : '' }}>Poland</option>
    <option value="Portugal" {{ $job->nationality === 'Portugal' ? 'selected' : '' }}>Portugal</option>
    <option value="Puerto Rico" {{ $job->nationality === 'Puerto Rico' ? 'selected' : '' }}>Puerto Rico</option>
    <option value="Qatar" {{ $job->nationality === 'Qatar' ? 'selected' : '' }}>Qatar</option>
    <option value="Reunion" {{ $job->nationality === 'Reunion' ? 'selected' : '' }}>Reunion</option>
    <option value="Romania" {{ $job->nationality === 'Romania' ? 'selected' : '' }}>Romania</option>
    <option value="Russian Federation" {{ $job->nationality === 'Russian Federation' ? 'selected' : '' }}>Russian Federation</option>
    <option value="Rwanda" {{ $job->nationality === 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
    <option value="Saint Kitts and Nevis" {{ $job->nationality === 'Saint Kitts and Nevis' ? 'selected' : '' }}>Saint Kitts and Nevis</option>
    <option value="Saint LUCIA" {{ $job->nationality === 'Saint LUCIA' ? 'selected' : '' }}>Saint LUCIA</option>
    <option value="Saint Vincent and the Grenadines" {{ $job->nationality === 'Saint Vincent and the Grenadines' ? 'selected' : '' }}>Saint Vincent and the Grenadines</option>
    <option value="Samoa" {{ $job->nationality === 'Samoa' ? 'selected' : '' }}>Samoa</option>
    <option value="San Marino" {{ $job->nationality === 'San Marino' ? 'selected' : '' }}>San Marino</option>
    <option value="Sao Tome and Principe" {{ $job->nationality === 'Sao Tome and Principe' ? 'selected' : '' }}>Sao Tome and Principe</option>
    <option value="Saudi Arabia" {{ $job->nationality === 'Saudi Arabia' ? 'selected' : '' }}>Saudi Arabia</option>
    <option value="Senegal" {{ $job->nationality === 'Senegal' ? 'selected' : '' }}>Senegal</option>
    <option value="Seychelles" {{ $job->nationality === 'Seychelles' ? 'selected' : '' }}>Seychelles</option>
    <option value="Sierra Leone" {{ $job->nationality === 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
    <option value="Singapore" {{ $job->nationality === 'Singapore' ? 'selected' : '' }}>Singapore</option>
    <option value="Slovakia (Slovak Republic)" {{ $job->nationality === 'Slovakia (Slovak Republic)' ? 'selected' : '' }}>Slovakia (Slovak Republic)</option>
    <option value="Slovenia" {{ $job->nationality === 'Slovenia' ? 'selected' : '' }}>Slovenia</option>
    <option value="Solomon Islands" {{ $job->nationality === 'Solomon Islands' ? 'selected' : '' }}>Solomon Islands</option>
    <option value="Somalia" {{ $job->nationality === 'Somalia' ? 'selected' : '' }}>Somalia</option>
    <option value="South Africa" {{ $job->nationality === 'South Africa' ? 'selected' : '' }}>South Africa</option>
    <option value="South Georgia and the South Sandwich Islands" {{ $job->nationality === 'South Georgia and the South Sandwich Islands' ? 'selected' : '' }}>South Georgia and the South Sandwich Islands</option>
    <option value="Spain" {{ $job->nationality === 'Spain' ? 'selected' : '' }}>Spain</option>
    <option value="Sri Lanka" {{ $job->nationality === 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka</option>
    <option value="St. Helena" {{ $job->nationality === 'St. Helena' ? 'selected' : '' }}>St. Helena</option>
    <option value="St. Pierre and Miquelon" {{ $job->nationality === 'St. Pierre and Miquelon' ? 'selected' : '' }}>St. Pierre and Miquelon</option>
    <option value="Sudan" {{ $job->nationality === 'Sudan' ? 'selected' : '' }}>Sudan</option>
    <option value="Suriname" {{ $job->nationality === 'Suriname' ? 'selected' : '' }}>Suriname</option>
    <option value="Svalbard and Jan Mayen Islands" {{ $job->nationality === 'Svalbard and Jan Mayen Islands' ? 'selected' : '' }}>Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland" {{ $job->nationality === 'Swaziland' ? 'selected' : '' }}>Swaziland</option>
    <option value="Sweden" {{ $job->nationality === 'Sweden' ? 'selected' : '' }}>Sweden</option>
<option value="Switzerland" {{ $job->nationality === 'Switzerland' ? 'selected' : '' }}>Switzerland</option>
<option value="Syrian Arab Republic" {{ $job->nationality === 'Syrian Arab Republic' ? 'selected' : '' }}>Syria</option>
<option value="Taiwan, Province of China" {{ $job->nationality === 'Taiwan, Province of China' ? 'selected' : '' }}>Taiwan</option>
<option value="Tajikistan" {{ $job->nationality === 'Tajikistan' ? 'selected' : '' }}>Tajikistan</option>
<option value="Tanzania, United Republic of" {{ $job->nationality === 'Tanzania, United Republic of' ? 'selected' : '' }}>Tanzania</option>
<option value="Thailand" {{ $job->nationality === 'Thailand' ? 'selected' : '' }}>Thailand</option>
<option value="Togo" {{ $job->nationality === 'Togo' ? 'selected' : '' }}>Togo</option>
<option value="Tokelau" {{ $job->nationality === 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
<option value="Tonga" {{ $job->nationality === 'Tonga' ? 'selected' : '' }}>Tonga</option>
<option value="Trinidad and Tobago" {{ $job->nationality === 'Trinidad and Tobago' ? 'selected' : '' }}>Trinidad and Tobago</option>
<option value="Tunisia" {{ $job->nationality === 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
<option value="Turkey" {{ $job->nationality === 'Turkey' ? 'selected' : '' }}>Turkey</option>
<option value="Turkmenistan" {{ $job->nationality === 'Turkmenistan' ? 'selected' : '' }}>Turkmenistan</option>
<option value="Turks and Caicos Islands" {{ $job->nationality === 'Turks and Caicos Islands' ? 'selected' : '' }}>Turks and Caicos Islands</option>
<option value="Tuvalu" {{ $job->nationality === 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
<option value="Uganda" {{ $job->nationality === 'Uganda' ? 'selected' : '' }}>Uganda</option>
<option value="Ukraine" {{ $job->nationality === 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
<option value="United Arab Emirates" {{ $job->nationality === 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates</option>
<option value="United Kingdom" {{ $job->nationality === 'United Kingdom' ? 'selected' : '' }}>United Kingdom</option>
<option value="United States" {{ $job->nationality === 'United States' ? 'selected' : '' }}>United States</option>
<option value="United States Minor Outlying Islands" {{ $job->nationality === 'United States Minor Outlying Islands' ? 'selected' : '' }}>United States Minor Outlying Islands</option>
<option value="Uruguay" {{ $job->nationality === 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
<option value="Uzbekistan" {{ $job->nationality === 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan</option>
<option value="Vanuatu" {{ $job->nationality === 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
<option value="Venezuela" {{ $job->nationality === 'Venezuela' ? 'selected' : '' }}>Venezuela</option>
<option value="Viet Nam" {{ $job->nationality === 'Viet Nam' ? 'selected' : '' }}>Viet Nam</option>
<option value="Virgin Islands (British)" {{ $job->nationality === 'Virgin Islands (British)' ? 'selected' : '' }}>Virgin Islands (British)</option>
<option value="Virgin Islands (U.S.)" {{ $job->nationality === 'Virgin Islands (U.S.)' ? 'selected' : '' }}>Virgin Islands (U.S.)</option>
<option value="Wallis and Futuna Islands" {{ $job->nationality === 'Wallis and Futuna Islands' ? 'selected' : '' }}>Wallis and Futuna Islands</option>
<option value="Western Sahara" {{ $job->nationality === 'Western Sahara' ? 'selected' : '' }}>Western Sahara</option>
<option value="Yemen" {{ $job->nationality === 'Yemen' ? 'selected' : '' }}>Yemen</option>
<option value="Serbia" {{ $job->nationality === 'Serbia' ? 'selected' : '' }}>Serbia</option>
<option value="Zambia" {{ $job->nationality === 'Zambia' ? 'selected' : '' }}>Zambia</option>
<option value="Zimbabwe" {{ $job->nationality === 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe</option>
                                                </select>
                                                <i class="fs-input-icon fa fa-globe-americas"></i>
                                                  @error('nationality')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--Location-->
                                    <div class="col-xl-4 col-lg-6 col-md-12">
    <div class="form-group">
        <label >Location</label>
        <div class="ls-inputicon-box">
            <select class="wt-select-box selectpicker @error('location') is-invalid @enderror" id="location" name="location">
                <option value="">Select Location</option>
                <option value="Dubai" {{ old('location', $job->location) === 'Dubai' ? 'selected' : '' }}>Dubai</option>
                <option value="Sharjah" {{ old('location', $job->location) === 'Sharjah' ? 'selected' : '' }}>Sharjah</option>
                <option value="Ajman" {{ old('location', $job->location) === 'Ajman' ? 'selected' : '' }}>Ajman</option>
                <option value="Ras Al Khaimah" {{ old('location', $job->location) === 'Ras Al Khaimah' ? 'selected' : '' }}>Ras Al Khaimah</option>
                <option value="Abu Dhabi" {{ old('location', $job->location) === 'Abu Dhabi' ? 'selected' : '' }}>Abu Dhabi</option>
                <option value="Fujairah" {{ old('location', $job->location) === 'Fujairah' ? 'selected' : '' }}>Fujairah</option>
                <option value="Umm Al Quwain" {{ old('location', $job->location) === 'Umm Al Quwain' ? 'selected' : '' }}>Umm Al Quwain</option>
            </select>
            <i class="fs-input-icon fa fa-map-marker-alt"></i>
        </div>
        @error('location')
        <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>




                                   <!--Description-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="form-control" id="requirements" name="requirements"  rows="3" >{{  $job->requirements }}</textarea>
                                        </div>
                                    </div>

                                   <!--Start Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" id="posted_date" name="posted_date" value="{{  $job->posted_date }}"  type="date" placeholder="mm/dd/yyyy">

                                                 @error('posted_date')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!--End Date-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <div class="ls-inputicon-box">
                                                <input class="form-control" id="closing_date" name="closing_date" value="{{  $job->closing_date }}" type="date" placeholder="mm/dd/yyyy">

                                                 @error('closing_date')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="text-left">
                                            <button type="submit" class="site-button m-r5">Publish Job</button>

                                        </div>
                                    </div>




                            </div>
                       </form>
                    </div>
                </div>

            </div>

    	</div>

@endsection
