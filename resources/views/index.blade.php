<!DOCTYPE html>

    <head>
        <meta name="_token" content="{{ csrf_token() }}">
        <meta charset="utf-8">

        <title>DentaDash - Dental Clinic Management System</title>


        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7COpen+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <!--- End google font-->
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/bootstrap-grid.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/swiper.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/owl.theme.default.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/jarallax.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/wave-banner.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/frontend/responsive.css') }}">
        <!--End ALL STYLESHEET -->
    </head>





    <body class="appmax_curved">

        <div id="preloader">
            <div class="cube-wrapper">
                <div class="cube-folding">
                    <span class="leaf1"></span>
                    <span class="leaf2"></span>
                    <span class="leaf3"></span>
                    <span class="leaf4"></span>
                </div>
                <span class="loading" data-name="Loading">Loading</span>
            </div>
        </div><!-- End preloader -->

        <div class="appmax-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="appmax-header-logo">
                            <a href="#"><img src="/assets/images/front/logo_white.svg" alt="appmax-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9">
                        <div class="menu-toggle fa">
                            
                        </div>
                        <div class="appmax-header-menu">
                            <ul>
                                <li><a href="#appmax-home">Home</a></li>
                                <li><a href="#appmax-feture">features</a></li>
                                <li><a href="#appmax-about">about</a></li>
                                <li><a href="#appmax-feedback">feedback</a></li>
                                <li><a href="#appmax-pricing">pricing</a></li>
                                
                                <li><a href="#appmax-contact">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-header-area -->

        <section id="appmax-home" class="appmax-banner-area">
            <div class="appmax--bannerllax jarallax" data-speed="0.4" style="background-image: url('/assets/images/frontbanner-texture.png');"></div>
            <div class="container appmax_curved_banner_container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex align-items-center height-100vh">
                        <div class="appmax-banner-content appmax_hover_animation">
                            <div class="layer" data-depth="0.20">
                                <h1>Control. Simplify. Optimise.</h1>
                                <p>Time to catch up with the world with how you <br>manage &amp; run your dental practice.</p>

                                <a class="appmax-default-btn" href="#demo">Check the demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 mobile-hidden d-flex align-items-center justify-content-end height-100vh">
                        
                        <img src="{{ asset('assets/images/front/dd-logo-02.svg') }}">
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </section><!-- End appmax-banner-area -->

        <div class="appmax-banner-promo-section">
            <div class="container">
                <div class="appmax-banner-promo-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="appmax-banner-single-promo">
                                <img src="{{asset('assets/images/front/promo-1.svg') }}" alt="Promo thumb">
                                <h2>Fluent workflow</h2>
                                <p>Take your daily management & administration up levels by utilising a group of modern tools.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="appmax-banner-single-promo">
                                <img src="{{asset('assets/images/front/promo-2.svg') }}" alt="Promo thumb">
                                <h2>Flexibility throughout</h2>
                                <p>Tailor everything to the specifics of your dental practice. Other than security, nothing is set in stone.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3">
                            <div class="appmax-banner-single-promo">
                                <img src="{{asset('assets/images/front/promo-3.svg') }}" alt="Promo thumb">
                                <h2>Continous upgrades</h2>
                                <p>You are eligible for all free updates that we regularly push out based on your feedback.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-banner-promo-section -->

        <div id="appmax-feture" class="appmax-feature-area appmax--parallax jarallax" style="background-image: url('/assets/images/frontfeatures-bg.png');">

            <div class="container">
                <div class="appmax-heding-title">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                    <h2>Packed with features</h2>
                    <p>No more pushing paper. Schedule appointments, send automatic reminders and more.</p>
                    <p> Beautiful (but customisable) invoicing solutions, right out of the box. </p>
                
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="appmax-feature-item">
                            <div class="appmax-feature-single-item url fslide_nav_active" data-index="1">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-user-tag" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Patient management</h2>
                                <p>Access all patient data in one place. Allergies, dental history, x-rays, procedures and more.</p>
                            </div>
                            <div class="appmax-feature-single-item url" data-index="2">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-notes-medical" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Dental charts</h2>
                            </div>
                            <div class="appmax-feature-single-item url" data-index="3">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-calendar-check" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Appointment booking</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 push-md-6 col-sm-6">
                        <div class="appmax-feature-item">
                            <div class="appmax-feature-single-item url" data-index="4">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-user-md" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Team management</h2>
                            </div>
                            <div class="appmax-feature-single-item url" data-index="5">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-receipt" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Integrated invoicing</h2>
                            </div>
                            <div class="appmax-feature-single-item url" data-index="6">
                                <div class="appmax-feature-item-icon">
                                    <i class="fa fa-tasks" aria-hidden="true"></i>
                                </div>
                                <h2 class="item-title">Task creation</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pull-md-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.5">
                        <div class="appmax-feature-single-phone appmax_hover_animation">
                            <div class="layer" data-depth="0.20">
                                <div class="appmax-feature-animate-frame">
                                    <div class="appmax-feature-animate-slider owl-carousel owl-theme">
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/tasks.png') }}" alt="">
                                        </div>
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/patient.png') }}" alt="">
                                        </div>
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/dental.png') }}" alt="">
                                        </div>
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/booking.png') }}" alt="">
                                        </div>
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/staff.png') }}" alt="">
                                        </div>
                                        <div class="feature-item">
                                            <img src="{{asset('assets/images/front/invoice.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <img class="featured-slider-static-img" src="{{asset('assets/images/front/feature.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-feature-area -->

    

        <div id="appmax-about" class="appmax-about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 push-lg-5 col-md-7 push-md-5">
                        <div class="appmax-about-right-content">
                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                            <h2>Built for flexibility</h2>
                            <p>DentaDash features a fully responsive layout and natively supports most modern devices. 
                                At DentaDash, we realise things happen fast and you might need to access data from a phone
                            or a table or even schedule an appointment while you're out getting coffee. </p> 
                            <p>We got you covered.</p>
                            <a class="appmax-default-btn" href="#demo">Check the demo</a>
                        </div>
                    </div>
                    <div class="col-lg-5 pull-lg-7 col-md-5 pull-md-7 wow fadeInLeftX" data-wow-duration=".5s" data-wow-delay=".5s">
                        <div class="appmax-about-left-img ">
                            <div class="appmax--about-parallax jarallax">
                                <img class="jarallax-img" src="{{asset('assets/images/front/about-bg.png') }}" alt="">
                            </div>
                            <div class="appmax_hover_animation">
                                <div class="layer" data-depth="0.20">
                                    <img src="{{asset('assets/images/front/about.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-about-area -->

        <div class="appmax-about-two-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="appmax-about-right-content">
                            <i class="fa fa-space-shuttle" aria-hidden="true"></i>
                            <h2>Light &amp; powerful</h2>
                            <p>No downloading, no installations. Just login and do what you need to do.</p>

                            <ul class="about-list">
                                <li>Stress tested with <a href="https://browserstack.com">Browser Stack</a>.</li>
                                <li>Built on Laravel</li>
                                <li>Highly scalable</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInRightX" data-wow-duration=".5s" data-wow-delay=".5s">
                        <div class="appmax-about-left-img appmax_hover_animation">
                            <div class="layer" data-depth="0.20">
                                <img src="{{asset('assets/images/front/flexible.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-about-area -->

        <div id="appmax-feedback" class="appmax-user-review-area">
            <div class="appmax-only-bg">
                <div class="container">
                    <div class="appmax-pricing-bg" data-jarallax-element="0 -50"></div>
                </div>
            </div>
            <div class="appmax-heding-title">
                <i class="fa fa-comment" aria-hidden="true"></i>
                <h2>Feedback</h2>
                <p>What our customers say about us</p>
            </div>
            <div class="swiper-container-user-view" dir="rtl">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="appmax-user-review-item">
                        <div class="user-review-content">
                            <h2>Makes my life easier</h2>
                            <p>I run a small private dental clinic and this software has saved me hours.</p>
                        </div>
                        <div class="user-review-meta clearfix">
                            <div class="user-review-meta-img">
                                <img src="{{asset('assets/images/front/1.png') }}" alt="">
                            </div>
                            <div class="user-review-meta-content">
                                <h2>Olivia</h2>
                                <p>Stomatologist</p>
                            </div>
                        </div>
                    </div>  
                  </div>
                  <div class="swiper-slide">
                    <div class="appmax-user-review-item">
                        <div class="user-review-content">
                            <h2>Invoicing is great!</h2>
                            <p>Used to re-do my invoices in Excel from scratch. This is so much easier and it looks good :).</p>
                        </div>
                        <div class="user-review-meta clearfix">
                            <div class="user-review-meta-img">
                                <img src="{{asset('assets/images/front/2.png') }}" alt="">
                            </div>
                            <div class="user-review-meta-content">
                                <h2>Thomas</h2>
                                <p>Dentist</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="appmax-user-review-item">
                        <div class="user-review-content">
                            <h2>How did we function without this?</h2>
                            <p>The clinic I work at used to note all appointments on paper. Appointment management was a full-time job.</p>
                        </div>
                        <div class="user-review-meta clearfix">
                            <div class="user-review-meta-img">
                                <img src="{{asset('assets/images/front/3.png') }}" alt="">
                            </div>
                            <div class="user-review-meta-content">
                                <h2>Janice</h2>
                                <p>Nurse</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="appmax-user-review-item">
                        <div class="user-review-content">
                            <h2>It does a lot</h2>
                            <p>Genuinely surprised at the amount of useful features DentaDash gives.</p>
                        </div>
                        <div class="user-review-meta clearfix">
                            <div class="user-review-meta-img">
                                <img src="{{asset('assets/images/front/2.png') }}" alt="">
                            </div>
                            <div class="user-review-meta-content">
                                <h2>Tom</h2>
                                <p>Business owner</p>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="appmax-user-review-item">
                        <div class="user-review-content">
                            <h2>It even shows me profit!</h2>
                            <p>I think the profit display is a nice touch.</p>
                        </div>
                        <div class="user-review-meta clearfix">
                            <div class="user-review-meta-img">
                                <img src="{{asset('assets/images/front/3.png') }}" alt="">
                            </div>
                            <div class="user-review-meta-content">
                                <h2>William</h2>
                                <p>Director</p>
                            </div>
                        </div>
                    </div>
                  </div>
                   
                </div>
                <!-- Add Pagination -->
                <!-- Add Arrows -->
                <div class="container">
                    <div class="user-view-slider-btn">
                        <div class="swiper-btn-next">
                            <img src="{{asset('assets/images/front/next.png') }}" alt="">
                        </div>
                        <div class="swiper-btn-prev">
                            <img src="{{asset('assets/images/front/prev.png') }}" alt="">
                        </div>
                    </div>
                </div>
             </div>
        </div><!-- End appmax-user-review-area -->

        <div class="appmax-counter-area">
            <div id="counter"></div>
            <div class="container">
                <div class="appmax-counter-colume">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-counter clearfix">
                                <div class="counter-left">
                                    <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                </div>
                                <div class="count-right">
                                    <h2 data-percentage="200K" class="counter-result">0</h2>
                                    <p>Thousand downloads</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-counter clearfix">
                                <div class="counter-left">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </div>
                                <div class="count-right ">
                                    <h2 data-percentage="80K" class="counter-result">0</h2>
                                    <p>Thousand reviews</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-counter clearfix">
                                <div class="counter-left">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>
                                <div class="count-right">
                                    <h2 data-percentage="173" class="counter-result">0</h2>
                                    <p>Thousan active users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-counter clearfix">
                                <div class="counter-left">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="count-right">
                                    <h2 data-percentage="2.2M" class="counter-result">0</h2>
                                    <p>Milions saved AVG</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-counter-area -->

        <div id="appmax-download" class="appmax-download-section-area">
            <div class="container">
                <div class="appmax-download-bg" data-jarallax-element="0 50"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="appmax-download-content">
                            <h2>See the latest demo version</h2>
                            <p>Username: admin@admin.com | Password: admin</p>
                            <a class="appmax-default-btn" href="#demo">Try the demo</a>

                            
                        </div>
                    </div>
                </div>
            </div><!-- End container -->
        </div><!-- End appmax-download-section-area -->
    
        

        <div id="appmax-pricing" class="appmax-pricing-table-area">
            <div class="container">
                <div class="appmax-pricing-bg" data-jarallax-element="0 -50"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="appmax-pricing-table-content">
                            <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                            <h2>Straightforward pricing*</h2>
                            <p>*Nope, no hidden fees.</p>

                            <div class="table-btn">
                                <a data-pckage-name="yearly" class="pricing-table-btn pricing_active" href="#">YEARLY</a>
                                <a data-pckage-name="monthly" class="pricing-table-btn btn-gray" href="#">MONTHLY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="pricing-table-right">
                            <div data-package="yearly" class="appmax-pricing-table-box appmax-pricing-table-1 package_active">
                                <div class="table-box-title">
                                    <h2>Yearly</h2>
                                    <p>Save 25%</p>
                                </div>
                                <div class="amount">
                                    <p>899 KM</p>
                                </div>
                                <ul class="customar-facility">
                                    <li>premium bundle</li>
                                    <li>up to 20 users</li>
                                    <li>unlimited bandwith</li>
                                    <li>24/7 customer support</li>
                                </ul>
                                <a class="table-box-btn" href="#">Start now</a>
                            </div>
                            <div data-package="monthly" class="appmax-pricing-table-box appmax-pricing-table-2">
                                <div class="table-box-title">
                                    <h2>Monthly</h2>
                                    <p>Pay as you go</p>
                                </div>
                                <div class="amount">
                                    <p>93 KM</p>
                                </div>
                                <ul class="customar-facility">
                                    <li>cancel any time</li>
                                    <li>up to 8 users</li>
                                    <li>unlimited bandwith</li>
                                    <li>12/7 customer support</li>
                                </ul>
                                <a class="table-box-btn" href="#">Start now</a>
                            </div>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End appmax-pricing-table-area -->

        <div id="appmax-contact" class="appmax-contact-form-area jarallax" style="background-image: url("/assets/images/frontcontact-bg.png");>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="appmax-contact-form-content">
                            <div class="contact-form-content-title">
                                
                                <h2>Questions in mind?</h2>
                            </div>
                            <p class="mail">E-mail: <a href="mailto:info@dentadash.io">info@dentadash.io</a></p>
                            <div class="information">
                                <p>Office</p>
                                <h5>Titova 54, 71000 Sarajevo</h5>
                            </div>
                            <div class="information">
                                <p>Prefer the phone?</p>
                                <h5>+387 33 215 9983</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="appmax-contact-form-box">
                            <h3>You can also contact us through this form</h3>
                            <form  id="appmax-contactForm" class="appmax-contact-form" method="post" action="php/contact.php">

                                <div class="contact-alert-message">
                                    <div id='mail_success' class='success'><i class="fa fa-check-circle"></i> Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'><i class="fa fa-exclamation-circle"></i> Woops. Something went wrong. Try again, please.</div>
                                </div>

                                <div class="appmax-input-item">
                                    <input name="appmax_name" id="appmax_name" type="text" placeholder="Name*">
                                </div>
                                <div class="appmax-input-item">
                                    <input name="appmax_email" id="appmax_email" type="text"   placeholder="Email Address*">
                                </div>
                                <div class="appmax-input-item">
                                    <textarea name="appmax_message" id="appmax_message"  placeholder="Message*"></textarea>
                                </div>
                                <button id="appmax_submit" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End appmax-contact-form-area -->

        <div class="appmax-fotter-area">
            <div class="container appmax_curved_footer_container">
                <div class="appmax-fotter-top">
                    <div class="appmax-fotter-title">
                        <i class="fas fa-envelope-open" aria-hidden="true"></i>
                        <h2>Subscribe to our Newsletter</h2>

                    </div>
                    <div class="appmax-subscribe clearfix">
                        <form id="mc-form">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input id="mc-email" class="mc-email" placeholder="Enter your email address..." required="required" name="EMAIL" type="email">

                            <input class="submit-btn" value="SUBSCRIBE NOW" type="submit">
                            <label for="mc-email"></label>
                        </form>
                    </div>
                </div>
                
                <div class="appmax-fotter-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="fotter-logo">
                                <a href="#"><img src="/assets/images/front/dd-logo-02.svg" alt=""></a>
                                <p>Made by <a href="https://damircengic.me">Damir</a><br>
                                &copy; All rights reserved. DentaDash 2018</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="fotter-social-icon">
                                <ul>
                                    <li><a href="https://twitter.com/cengic_damir"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://telegram.me/DamirCengic"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div><!-- End container -->
        </div><!-- End appmax-fotter-area -->


<!-- page level js starts-->
<script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>

        <script src="{{ asset('assets/js/frontend/swiper.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/ajaxchimp.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/wow.min.js') }}"></script>
        <script type="text/javascript"src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/jarallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/jarallax-element.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.parallax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/frontend/main.js') }}"></script>

<!--page level js ends-->

    </body>
  
</html>




