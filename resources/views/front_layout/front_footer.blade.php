<footer id="footer" data-footer-style="4">
    <div class="container contact-details">
        <div class="row">
            <div class="col-sm-3">
                <div class="footer-widget">
                    <!--									<div  class="footer-title-wrap">-->
                    <!--										<h4 class="footer-title">Download<br>-->
                    <!--											App</h4>-->
                    <!--									</div>-->
                    <div class="footer-detail-wrap mt-0">
                        <div class="footer-logo-wrap">
                            <a href="http://ebilty.com">
                                <img src="{{ asset ('assets/img/ebiltylogo.png') }}">
                            </a>
                        </div>
                        <div class="mt-30 footer-about-wrap">
                            <p class="mb-0 text-justify">An online technology company connecting transporters with customers having a broader vision of changing the way how things have been working conventionally and providing end to end solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="footer-title-wrap">
                        <h4 class="footer-title">Quick<br>Links</h4>
                    </div>
                    <div class="footer-detail-wrap d-flex flex-column">
                        <a href="{{ url ('/') }}"  class="footer-links">
                            <span>Home</span>
                        </a>
                        <a href="#faq"  class="footer-links">
                            <span>About us</span>
                        </a>
                        
                        <a href="{{ url('/') }}#faq"  class="footer-links">
                            <span>F.A.Q</span>
                        </a>
                        <a href="{{ url ('/career') }}" class="footer-links">
                            <span>Careers</span>
                        </a>
                        <a href=" {{ url ('/') }}#contact "  class="footer-links">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="footer-title-wrap">
                        <h4 class="footer-title">Contact<br>Info</h4>
                    </div>
                    <div class="footer-detail-wrap d-flex flex-column">
                        <div class="contact-info d-flex flex-column">
                            <!--                                        <a href="javascript:void(0);"  class="footer-links">-->
                            <!--                                            <i class="glyphicon glyphicon-flag icon-size-xxs"></i>-->
                            <!--                                            <span>Gulberg Continental</span>-->
                            <!--                                        </a>-->
                            <a href="mailto:info@ebilty.com"  class="footer-links">
                                <i class="glyphicon glyphicon-user icon-size-xxs"></i>
                                <span>info@ebilty.com</span>
                            </a>
                            {{--  <a href="tel:03000123456"  class="footer-links">
                             <i class="glyphicon glyphicon-earphone icon-size-xxs"></i>
                             <span>03000123456</span>
                             </a>
                             <a href="tel:03210123456"  class="footer-links">
                             <i class="glyphicon glyphicon-earphone icon-size-xxs"></i>
                             <span>03210123456</span>
                             </a>
                             <a href="tel:03330123456"  class="footer-links">
                             <i class="glyphicon glyphicon-earphone icon-size-xxs"></i>
                             <span>03330123456</span>
                             </a> --}}
                        </div>
                        <div class="d-flex">
                            <!-- Social icons colored background, aligned center and rounded style -->
                            <div class="elm-socialicons mb-0">
                                <ul class="elm-social-icons sc--colored sh--circle clearfix mt-3">
                                    <li>
                                        <a href="https://facebook.com/ebilty" class="elm-sc-icon elm-sc-icon-0 fab fa-facebook-f bg-icon" target="_self" title="Facebook"></a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/ebilty" class="elm-sc-icon elm-sc-icon-1 fab fa-twitter bg-icon" target="_self" title="Twitter"></a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/ebilty" class="elm-sc-icon elm-sc-icon-2 fab fa-instagram bg-icon" target="_self" title="Instagram"></a>
                                    </li>
                                </ul>
                            </div>
                            <!--/ Social icons colored background, aligned center and rounded style -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-widget">
                    <div class="footer-title-wrap">
                        <h4 class="footer-title">Download<br>App</h4>
                    </div>
                    <div class="footer-detail-wrap">
                        <div class="download-app-wrap d-flex flex-column">
      <span class="app-wrap mb-4">
        <a href="#"> <img class="" src="{{ asset('assets/img/playstore.png') }}" alt="Google Play Store"> </a>
      </span>
                            <span class="app-wrap mb-4">
        <a href="#"> <img class="" src="{{ asset('assets/img/appstore.png') }}" alt="Apple App Store"> </a>
      </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ col-sm-offset-2 col-md-8 col-sm-8 -->
        <!--/ row -->
        <div class="row">
            <div class="col-sm-12 footer-area--bottom"></div>
            <!-- Left side Copyright -->
            <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-start">
                <div class="d-flex">
                    <p class="mb-0">© 2021 <span class="font-weight-bold brand_title">eBilty</span> All rights reserved.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 text-center d-flex align-items-center justify-content-center">
                <a href="{{ url ('/terms-conditions') }}"  class="footer-links" style="font-size: 12px;">
                            <span>Terms & Conditions</span>
                        </a>
            </div>
            <!--/ Left side Copyright -->
            <!-- Right side -->
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="d-block text-right">Powered By &nbsp;<a href="https://ivylabtech.com"  class="font-weight-bold refer_title">IvyLab Technologies</a>.
                    <!--                                Developed By &nbsp;<a href="https://ivylabtech.com" >Spotlayer</a>.--></div>
            </div>
            <!--/ Right side -->
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</footer>
</div>
<!--/ Page Wrapper -->
<!-- Login Panel content -->
<div id="login_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container login-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title tcolor">
            SIGN IN YOUR ACCOUNT TO HAVE ACCESS TO DIFFERENT FEATURES
        </h3>
        <form class="login_panel" name="login_panel" method="get" action="http://ebilty.com/login">
            <div class=" kl-fancy-form">
                <input type="text" id="userSigninLogin" name="login" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="eg: james_smith" required="">
                <label class="kl-font-alt kl-fancy-form-label">
                    Username
                </label>
            </div>
            <div class=" kl-fancy-form">
                <input type="password" id="userSigninPassword" name="password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type password" required="">
                <label class="kl-font-alt kl-fancy-form-label">
                    Password
                </label>
            </div>
            <input type="submit" name="submit_button" class="btn zn_sub_button btn-fullcolor btn-md" value="Sign In">
            <div class="links auth-popup-links">
                <a href="#register_panel" class="create_account auth-popup-createacc kl-login-box auth-popup-link">
                    CREATE AN ACCOUNT
                </a>
                <span class="sep auth-popup-sep"></span>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<div id="register_panel" class="mfp-hide loginbox-popup auth-popup">
    <div class="inner-container register-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">
            CREATE ACCOUNT
        </h3>
        <form class="register_panel" name="register_panel" method="post" action="#" data-h5-instanceid="0" novalidate="novalidate">
            <div class="cf_response"></div>
            <div class=" kl-fancy-form ">
                <input type="text" id="registerName" name="name" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type your name" required="">
                <label for="registerName" class="kl-font-alt kl-fancy-form-label">FULL NAME</label>
            </div>
            <div class=" kl-fancy-form ">
                <input type="text" id="registerUsername" name="username" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="type desired username" required="">
                <label for="registerUsername" class="kl-font-alt kl-fancy-form-label">Username</label>
            </div>
            <div class="kl-fancy-form">
                <input type="text" id="registerEmail" name="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="your-email@website.com" required="">
                <label for="registerEmail" class="kl-font-alt kl-fancy-form-label">EMAIL</label>
            </div>
            <div class=" kl-fancy-form">
                <input type="password" id="registerPassword" name="password" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required="">
                <label for="registerPassword" class="kl-font-alt kl-fancy-form-label">Password</label>
            </div>
            <div class="kl-fancy-form">
                <input type="password" id="rpassword" name="rpassword" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="*****" required="">
                <label class="kl-font-alt kl-fancy-form-label">
                    CONFIRM PASSWORD
                </label>
            </div>
            <label class="auth-popup-remember" for="agreement">
                <input name="agree" type="checkbox" value="1" id="agreement" class="auth-popup-remember-chb" required=""> I Agree the <a href="#" data-toggle="modal" data-target="#kt_modal_6" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>
            </label>
            <div class="">
                <input type="submit" id="signup" name="submit" class="btn zn_sub_button btn-block btn-fullcolor btn-md" value="CREATE MY ACCOUNT">
            </div>
            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">
                    ALREADY HAVE AN ACCOUNT?
                </a>
            </div>
        </form>
    </div>
</div>
<div id="forgot_panel" class="mfp-hide loginbox-popup auth-popup forgot-popup">
    <div class="inner-container forgot-panel auth-popup-panel">
        <h3 class="m_title m_title_ext text-custom auth-popup-title">
            FORGOT YOUR PASSWORD?
        </h3>
        <form class="forgot_form" data-request="::onRestorePassword" data-request-update="'::reset': '#partialUserResetForm'">
            <div class=" kl-fancy-form">
                <input type="email" id="userRestoreEmail" name="email" class="form-control inputbox kl-fancy-form-input kl-fw-input" placeholder="..." required="">
                <label class="kl-font-alt kl-fancy-form-label">
                    EMAIL
                </label>
            </div>
            <div class="">
                <input type="submit" id="kt_login_forgot_submit" name="submit" class="btn btn-block zn_sub_button btn-fullcolor btn-md" value="SEND MY DETAILS!">
            </div>
            <div class="links auth-popup-links">
                <a href="#login_panel" class="kl-login-box auth-popup-link">
                    AAH, WAIT, I REMEMBER NOW!
                </a>
            </div>
        </form>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Login Panel content -->
<!-- Contact form pop-up element content -->
<div id="contact_panel" class="mfp-hide contact-popup">
    <div class="contact-popup-panel">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- Contact form pop-up element -->
                    <div class="contactForm pop-up-form">
                        <!-- Title -->
                        <h3 class="m_title m_title_ext text-custom contact-popup-title tcolor">
                            TRACK A PACKAGE
                        </h3>
                        <h4 class="tbk__subtitle fw-thin">
                            Just type the tracking code and we'll do everything!
                        </h4>
                        <form action="#" method="get" class="contact_form row mt-40" data-h5-instanceid="1" novalidate="novalidate">
                            <div class="cf_response"></div>
                            <input name="_token" type="hidden" value="VHua1cK3OOhcypf2NC4EI5og6E7krvTUpQWTDK4P">
                            <input name="_session_key" type="hidden" value="ikd96sYWgPIOZLVW9hPRyk86FgzK0RsZbi7epnDk">
                            <div class="col-sm-12 kl-fancy-form">
                                <input type="text" name="number" id="cf_name-pop-up" class="form-control" placeholder="Please enter a valid tracking number" value="" tabindex="1" maxlength="35" required="">
                                <label class="control-label">
                                    Tracking numbers
                                </label>
                            </div>
                            <div class="col-sm-12">
                                <!-- Contact form send button -->
                                <button class="btn btn-fullcolor" type="submit">
                                    TRACK
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/ Contact form pop-up element -->
                </div>
                <!--/ col-md-12 col-sm-12 -->
            </div>
            <!--/ .row -->
        </div>
        <!--/ .container -->
    </div>
    <!--/ .contact-popup-panel -->
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
<!--/ Contact form pop-up element content -->
<!-- ToTop trigger -->
<a href="javascript:void(0);" id="totop" class="">TOP</a>
<!--/ ToTop trigger -->

<!-- Custom Kallyas JS codes -->



<script>
    var owl = $('.screenshot_slider').owlCarousel({
        loop: true,
        responsiveClass: true,
        nav: true,
        margin: 0,
        autoplayTimeout: 4000,
        smartSpeed: 400,
        center: true,
        navText: ['&#8592;', '&#8594;'],
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            1200: {
                items: 5
            }
        }
    });

    /****************************/

    jQuery(document.documentElement).keydown(function (event) {

        // var owl = jQuery("#carousel");

        // handle cursor keys
        if (event.keyCode == 37) {
            // go left
            owl.trigger('prev.owl.carousel', [400]);
            //owl.trigger('owl.prev');
        } else if (event.keyCode == 39) {
            // go right
            owl.trigger('next.owl.carousel', [400]);
            //owl.trigger('owl.next');
        }

    });
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->



<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('assets/js/classie.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/modernizr.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kl-plugins.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery.iosslider.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kl-ios-slider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/slick.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kl-slick-slider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kl-scripts.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/kl-custom.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/framework.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/framework.extras.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/home.js')}}" type="text/javascript"></script>



<!--end::Global Theme Bundle -->

<!-- end::Page Scripts -->
{{--      <div class="stripe-loading-indicator loaded">--}}
{{--         <div class="stripe"></div>--}}
{{--         <div class="stripe-loaded"></div>--}}
{{--      </div>--}}



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>



<script>
    @if (\Session::has('success'))
    toastr.success('{{\Session::get('success')}}');
    @endif
</script>




<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;
    var pusher = new Pusher('72b442ca7a1676508340', {
        cluster: 'ap2',
        encrypted: true
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('notification');

    // Bind a function to a Event (the full Laravel class)
    // channel.bind('App\\Events\\NotificationEvent', function(data) {
    //    console.log('sfddsfdsfsdf')
    //     // this is called when the event notification is received...
    // });
</script>








</body>
</html>
