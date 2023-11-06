<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Big Column-->
                <div class="big-column col-md-12 col-sm-12 col-xs-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-md-5 col-sm-6 col-xs-12">
                            <div class="footer-widget logo-widget">
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li><div class="icon"><span class="flaticon-placeholder"></span></div><span class="Location">Homestead Projects and Developers Pvt. Ltd</span><br>Door No. EP / VII - 691, E - L, Opp. Govt. Rest House <br>Changuvetty, Kottakkal, Malappuram Dt.<br> Kerala - 676 501,India</li>
                                        <li><div class="icon"><span class="flaticon-email"></span></div><span class="Email">Send us on : </span>  <a href="mailto:sales@homesteadprojects.com">sales@homesteadprojects.com</a>  </li>
                                        <li><div class="icon"><span class="flaticon-phone-call"></span></div><span class="Mobile">Get us on : </span><a href="tel:+91 9847540000">+91 9847540000</a> <br/><a href= "tel:+914832750600"> +91 483 2750600</a>, <a href= "tel:+914832750250"> +91 483 2750250</a><br> <a href= "tel:+914832750200"> +91 483 2750200</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Main Links</h2>
                                <ul class="services-list">
                                    <li><a href="{{ url('About') }}">About</a></li>
                                    <li><a href="{{ url('News') }}">News & Events</a></li>
                                    <li><a href="{{ url('Careers') }}">Careers</a></li>
                                    <li><a href="{{ url('Contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column / Tweet Widget-->
                        <div class="footer-column col-md-2 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <h2>Projects</h2>
                                <ul class="services-list">
                                    <li><a href="{{ url('Project/upcoming') }}">Upcoming</a></li>
                                    <li><a href="{{ url('Project/ongoing') }}">On Progress</a></li>
                                    <li><a href="{{ url('Project/completed') }}">Completed</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget links-widget">
                                <div class="fb-page" data-href="https://www.facebook.com/HomesteadProjects" data-tabs="timeline" data-height="280" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                                    <blockquote cite="https://www.facebook.com/HomesteadProjects" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HomesteadProjects">Homestead Projects &amp; Developers Pvt. Ltd.</a></blockquote>
                                </div>
                            </div>
                        </div>
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="copyright">Copyrights &copy; 2017 <a href="#">Homestead Projects.</a> All Rights Reserved</div>
                </div>
                <!--Nav Column-->
                <div class="nav-column col-md-6 col-sm-12 col-xs-12">
                    <ul class="footer-nav">
                        <li><a href="#" onclick="showdesclamermodal();">Disclaimer</a> | powered by Coperor 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- DISCLAIMER -->
<div class="modal" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="indexLoadModalContent" style="margin-top:110px;" aria-hidden="true" style="z-index:9999999994 !important;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content custom-disclaimer">
        <div class="modal-header">
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          <p>The information provided in the website is for general guidance only.  Though we have taken utmost care on the accuracy of the contents, the customer should make autonomous assessment of the contents.  However, the prospective buyers should rely upon the terms and conditions of the sale and construction agreement between the Builder and the Client .</p>

          <p>For any clarification please feel free to call +91 9847540000 or walk into our offices.  Our representatives will be always at your service.</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Agree" OnClick="$('#disclaimerModal').removeClass('show');">I Agree</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /DESCLAIMER MODAL ENDS -->

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>
