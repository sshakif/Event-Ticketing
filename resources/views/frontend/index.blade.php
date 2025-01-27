<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unicktheme.com/2024/eventflow/main-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2025 06:17:41 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home One || eventflow || eventflow HTML 5 Template </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="eventflow HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/custom.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/bootstrap.min.css') }}" type="text/css"
        media="all" />

    <!-- <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" /> -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/animate.min.css') }}" type="text/css"
        media="all" />

    <!-- <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" /> -->
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/custom-animate.css') }}" type="text/css"
        media="all" />

    <!-- <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" /> -->

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/all.min.css') }}" type="text/css"
        media="all" />

    <!-- <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" /> -->

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jarallax.css') }}" type="text/css"
        media="all" />
    <!-- <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" /> -->

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jquery.magnific-popup.css') }}" type="text/css"
        media="all" />

    <!-- <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" /> -->

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/odometer.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/swiper.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/owl.carousel.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/owl.theme.default.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/bootstrap-select.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/nice-select.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jquery-ui.css') }}" type="text/css"
        media="all" />

    <!-- template styles -->


    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/eventflow.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/eventflow-responsive.css') }}" type="text/css"
        media="all" />


</head>

<body class="body-bg-color-1">

    <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img
                                        src="{{ asset('frontend-assets/assets/images/resources/logo-1.png') }}"
                                        alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                    labore et magna aliqua.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Get a free quote</h4>
                                <form action="https://unicktheme.com/2024/eventflow/main-html/assets/inc/sendemail.php"
                                    class="contact-form-validated" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Submit Now</button>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->


    <div class="page-wrapper">
 
@include('frontend.layouts.header')
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>


        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider"
                data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                }
            }'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider__img">
                            <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="main-slider__shpae-1">
                            <!-- <img src="assets/images/shapes/main-slider-shape-1.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__shpae-2">
                            <!-- <img src="assets/images/shapes/main-slider-shape-2.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-2.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-1">
                            <!-- <img src="assets/images/shapes/main-slider-star-1.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-2 zoominout">
                            <!-- <img src="assets/images/shapes/main-slider-star-2.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-2.png') }}"
                                alt="">

                        </div>
                        <div class="main-slider__start-3">
                            <!-- <img src="assets/images/shapes/main-slider-star-3.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-3.png') }}"
                                alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">Music fastival</p>
                                        <h2 class="main-slider__title">Discover a World <br> <span>of
                                                Celebration</span>
                                        </h2>
                                        <p class="main-slider__text">As an AI language model, I don't have personal
                                            opinions or points of view. However, I <br> can tell you that design is a
                                            multifaceted field that enco various</p>
                                        <ul class="list-unstyled main-slider__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="main-slider__btn-box">
                                            <a href="/event/details/12" class="main-slider__btn thm-btn">Purchase Ticket
                                                <span class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider__img">
                            <!-- <img src="assets/images/resources/main-slider-img-1-2.jpg" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-2.jpg') }}"
                                alt="">

                        </div>
                        <div class="main-slider__shpae-1">
                            <!-- <img src="assets/images/shapes/main-slider-shape-1.png" alt=""> -->
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__shpae-2">

                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-2.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-1">

                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-2 zoominout">

                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-2.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-3">

                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-3.png') }}"
                                alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">Music fastival</p>
                                        <h2 class="main-slider__title">Discover a World <br> <span>of
                                                Celebration</span>
                                        </h2>
                                        <p class="main-slider__text">As an AI language model, I don't have personal
                                            opinions or points of view. However, I <br> can tell you that design is a
                                            multifaceted field that enco various</p>
                                        <ul class="list-unstyled main-slider__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="main-slider__btn-box">
                                            <a href="/event/details/12" class="main-slider__btn thm-btn">Purchase Ticket
                                                <span class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="main-slider__img">
                        
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-img-1-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="main-slider__shpae-1">
                            
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__shpae-2">
                         
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-shape-2.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-1">
                         
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-1.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-2 zoominout">
                            
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-2.png') }}"
                                alt="">
                        </div>
                        <div class="main-slider__start-3">
                            <img src="{{ asset('frontend-assets/assets/images/shapes/main-slider-star-3.png') }}"
                                alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <p class="main-slider__sub-title">Music fastival</p>
                                        <h2 class="main-slider__title">Discover a World <br> <span>of
                                                Celebration</span>
                                        </h2>
                                        <p class="main-slider__text">As an AI language model, I don't have personal
                                            opinions or points of view. However, I <br> can tell you that design is a
                                            multifaceted field that enco various</p>
                                        <ul class="list-unstyled main-slider__address">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-pin"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Mirpur 01 Road N 12 Dhaka Bangladesh</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-clock"></span>
                                                </div>
                                                <div class="text">
                                                    <p>10 Am To 10 Pm 20 April 2024</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="main-slider__btn-box">
                                            <a href="/event/details/12" class="main-slider__btn thm-btn">Purchase Ticket
                                                <span class="icon-arrow-right"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->



        <!-- Sliding Text One Start -->



        <section class="blog-one">
            <div class="container">
                <div class="blog-one__top">
                    <div class="section-title text-left">

                        <h2 class="section-title__title">Upcoming Events</h2>
                    </div>
                    <div class="blog-one__btn-box">
                        <a href="/events" class="blog-one__btn thm-btn">View All Events<span
                                class="icon-arrow-right"></span>
                        </a>
                    </div>
                </div>
                <div class="blog-one__bottom">
                    <div class="row">
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img">

                                    <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-1.jpg') }}"
                                        alt="">
                                    <div class="blog-one__hover">
                                        <a href="/event/details/12">
                                            <div class="blog-one__hover-icon-1">
                                                <span class="blog-one__hover-icon-2"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="/event/details/12">Join the Festivi Celebrate
                                            <br> Special Moments</a></h3>
                                    <div class="blog-one__btn-box-two">
                                        <a href="/event/details/12" class="blog-one__btn-2 thm-btn">Read More<span
                                                class="fa fa-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img">

                                    <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-2.jpg') }}"
                                        alt="">
                                    <div class="blog-one__hover">
                                        <a href="/event/details/12">
                                            <div class="blog-one__hover-icon-1">
                                                <span class="blog-one__hover-icon-2"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="/event/details/12">Embrace the Joyful Spirit
                                            Discover a World</a></h3>
                                    <div class="blog-one__btn-box-two">
                                        <a href="/event/details/12" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="fa fa-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img">

                                    <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-3.jpg') }}"
                                        alt="">
                                    <div class="blog-one__hover">
                                        <a href="/event/details/12">
                                            <div class="blog-one__hover-icon-1">
                                                <span class="blog-one__hover-icon-2"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li>
                                            <a href="#"><span class="icon-user"></span>By admin</a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="icon-calendar"></span>October 19, 2022</a>
                                        </li>
                                    </ul>
                                    <h3 class="blog-one__title"><a href="/event/details/12">Where Moments Come Alive
                                            an
                                            Celebrate</a></h3>
                                    <div class="blog-one__btn-box-two">
                                        <a href="/event/details/12" class="blog-one__btn-2 thm-btn">Read More<span
                                            class="fa fa-arrow-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                    </div>
                </div>
            </div>
        </section>

        <section class="sliding-text-one mt-4">
            <div class="sliding-text-one__wrap w-full ">
                <h1 class="w-full py-5 fw-bold text-2xl text-center">Catagory</h1>
                <ul class="sliding-text__list  marquee_mode">
                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-2.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>



                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-2.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>


                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-2.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>


                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/resources/main-slider-img-1-2.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>


                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-1.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>


                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-1.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>



                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-1.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>



                    <li>

                        <div class="catagory-card">
                            <div class="catagory-img">
                                <img src="{{ asset('frontend-assets/assets/images/blog/blog-1-1.jpg') }}"
                                    alt="">
                            </div>

                            <b>Alan waker</b>
                        </div>
                    </li>

                </ul>
            </div>
        </section>


        <!--Site Footer Start-->
         @include('frontend.layouts.footer')
        <!--Site Footer End-->


    </div>

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png"
                        width="150" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@eventflow.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->

        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fas fa-arrow-up"></i></a>


    <script src="{{ asset('frontend-assets/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/wNumb.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/marquee.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/assets/js/jquery-sidebar-content.js') }}"></script>

    <!-- template js -->

    <script src="{{ asset('frontend-assets/assets/js/eventflow.js') }}"></script>
</body>


</html>
