@extends('layouts.website')

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
                                <h2 class="wt-title">Contact Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->

                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>

                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->

            <!-- CONTACT FORM -->
            <div class="section-full twm-contact-one">
                <div class="section-content">
                    <div class="container">

                        <!-- CONTACT FORM-->
                        <div class="contact-one-inner">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-form-outer">

                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h2 class="wt-title">Send Us a Message</h2>
                                            <p>Feel free to contact us and we will get back to you as soon as we can.</p>
                                        </div>
                                        <!-- TITLE END-->
                                        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="cons-contact-form" >
                                        <form   method="post" action="{{ route('sendemail.contact') }}">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                    <input name="email" type="email" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                       <div class="col-lg-12">
                                                        <div class="form-group mb-3">
                                <div class="g-recaptcha" data-sitekey="6LeLVXknAAAAAA_MAt96QsAtsFmxcHFIDGKFovDi"></div>
                                </div>
                                  </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Submit Now</button>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-info-wrap">

                                        <div class="contact-info">
                                            <div class="contact-info-section">

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class=" fas fa-map-marker-alt"></i></div>
                                                        <h3 class="twm-title">Best 4 You HR Consultancy</h3>
                                                        <p>Office No :203, 2nd Floor, Brass II Building
Near Sharaf DG Metro Station (Exit No:3)
Bur Dubai, Dubai, UAE.</p>
                                                    </div>

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i></div>
                                                        <h3 class="twm-title">Feel free to contact us</h3>
                                                        <p><a href="tel:+9142682901" target="_blank">+971 4  268 2901</a></p>
                                                        <p><a href="tel:+971545865418" target="_blank">+971 54 586 5418</a></p>
                                                    </div>

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                                        <h3 class="twm-title">Support</h3>
                                                        <p><a href="mailto:info@best4uhr.com" target="_blank">info@best4uhr.com</a></p>
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
            <div class="gmap-outline">
                <div class="google-map">
                    <div style="width: 100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28866.777665592836!2d55.297185000000006!3d25.258903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43c835d66973%3A0xadb22a142746ce7b!2sBest%20For%20You%20HR%20Consultancy!5e0!3m2!1sen!2sus!4v1695038800666!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>


        </div>
        <!-- CONTENT END -->
@endsection
