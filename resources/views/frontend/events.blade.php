<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unicktheme.com/2024/eventflow/main-html/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2025 11:25:29 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Event || eventflow || eventflow HTML 5 Template </title>
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
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/animate.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/custom-animate.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/all.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jarallax.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend-assets/assets/css/jquery.magnific-popup.css') }}" type="text/css"
        media="all" />
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
                                <a href="index.html"><img src="assets/images/resources/logo-1.png"
                                        alt="" /></a>
                            </div>
                      
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->

    <div class="page-wrapper">

        <!--Page Header Start-->
        @include('frontend.layouts.header')
        <!--Page Header End-->

        <!-- Event Page Start -->
        <section class="event-page">
            <div style="justify-content: center; padding:12px 21px; " class=" event-view">


                {{-- catagory section --}}
                <div class="sidebar__single sidebar__all-category">
                    <h3 class="sidebar__title">Catagory</h3>
                    <ul class="sidebar__all-category-list list-unstyled">
                        <li>
                            <a href="blog-details.html"><i class="icon-double-angle"></i>Event Prodigy
                                <span>(02)</span></a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i class="icon-double-angle"></i>Stellar Events
                                Co<span>(04)</span></a>
                        </li>
                        <li class="active">
                            <a href="blog-details.html"><i class="icon-double-angle"></i>Elite Event
                                Management<span>(01)</span></a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i class="icon-double-angle"></i>Infinite
                                Occasions<span>(06)</span></a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i class="icon-double-angle"></i>Dream Event
                                Planners<span>(03)</span></a>
                        </li>
                    </ul>
                </div>
                {{-- end catagory --}}






                <div class="schedule-one__inner">

                    <div class="schedule-one__main-tab-box tabs-box">
                        <div class="filter-section  py-3">
                            <div class="d-flex align-items-center gap-4">
                                <div class="flex filter-items " id="category-btn"><i
                                        class="fa-solid px-1 fa-layer-group"></i><b><span class="filter-text">Category</span></b></div>
                                <div class="flex filter-items ">
                                    <div class="dropdown">
                                        <i class="fa-solid  fa-filter"></i></i><b>
                                            <button
                                                style="background: transparent; color:white; border:none; outline:none;"
                                                class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="filter-text">Filter</span>
                                            </button>
                                            <ul class="dropdown-menu"
                                                style=" color:white; background:rgb(37, 37, 37); border:1px solid rgb(31, 31, 31)">
                                                <li style="color: white;"><a style="color: white;"
                                                        class="dropdown-item" href="#">Upcoming</a></li>
                                                <li style="color: white;"><a style="color: white;"
                                                        class="dropdown-item" href="#">Live</a></li>
                                                <li style="color: white;"><a style="color: white;"
                                                        class="dropdown-item" href="#">Today</a></li>
                                            </ul>
                                    </div>
                                    </b>
                                </div>
                            </div>
                            {{-- srch bar --}}
                            <div class="">

                                <form action="#" class="sidebar__search-form">
                                    <input type="search" class="search-bar" placeholder="Type to search events">
                                    <button type="submit"><i class="fa  fa-search"></i></button>
                                </form>
                            </div>
                        </div>


                        <div class="tabs-content">


                            <div class="tab active-tab" id="1st-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="/event/details/12">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/event/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="/event/details/12">Sparkle &
                                                    Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/event/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="/event/details/12">Sparkle &
                                                    Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/event/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="2nd-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/event/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Sparkle &
                                                    Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="contact.html" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Sparkle &
                                                    Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/event/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="3rd-day">
                                <div class="schedule-one__tab-content-box">
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Events That
                                                    Leave a <br>
                                                    Impression</a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-7.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/events/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Sparkle &
                                                    Shine
                                                    on <br>
                                                    Celebrations
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="assets/images/resources/schedule-one-1-8.jpg" alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/events/details/12" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="schedule-one__single">
                                        <div class="schedule-one__left">
                                            <h3 class="schedule-one__title"><a href="event-details.html">Sparkle &
                                                    Shine
                                                    <br> Events
                                                </a></h3>
                                            <p class="schedule-one__text">A personal portfolio is a curated collection
                                                of <br> an individual's professional work</p>
                                        </div>
                                        <div class="schedule-one__img">
                                            <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="schedule-one__address-and-btn-box">
                                            <ul class="list-unstyled schedule-one__address">
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>10 Am To 10 Pm <br> 20 April 2024</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="icon-pin"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>Mirpur 01 Road N 12 Dhaka <br> Bangladesh</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="schedule-one__btn-box">
                                                <a href="/details/23" class="schedule-one__btn thm-btn">Buy
                                                    Ticket<span class="icon-arrow-right"></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </section>
        <!-- Event Page End -->



        <!--Site Footer Start-->
        {{-- site footer start --}}
        @include('frontend.layouts.footer')
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-1.png"
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

    <div class="popup">
        <div class="category-pop" style="z-index: 12;">
            <div class="cat-header">
                <div class="sidebar__single my-3 sidebar__search">
                    <h3 class="sidebar__title w-full">
                        <div class="bar-content"><b>Search category</b> <span style="cursor: pointer"
                                class="close-cat">Close</span></div>
                    </h3>
                    <form action="#" class="sidebar__search-form">
                        <input type="search" class="search-bar" placeholder="Type to search events">
                        <button type="submit"><i class="fa  fa-search"></i></button>
                    </form>
                </div>

                <div class="view-categorys gap-2 grid px-4  grid-cols-4">
                    <div>
                        <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}" />

                        <b class="py-4">Alan walker</b>
                    </div>
                    
                    <div>
                        <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}" />

                        <b class="py-4">Alan walker</b>
                    </div>

                    <div>
                        <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}" />

                        <b class="py-4">Alan walker</b>
                    </div>

                    <div>
                        <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}" />

                        <b class="py-4">Alan walker</b>
                    </div>

                    <div>
                        <img src="{{ asset('frontend-assets/assets/images/resources/schedule-one-1-9.jpg') }}" />

                        <b class="py-4">Alan walker</b>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.mobile-nav__wrapper -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i
                class="fas fa-arrow-up"></i></a>


        <script>
            let category_btn = document.querySelector('#category-btn');
            let category_pop = document.querySelector('.category-pop');
            let Close_pop = document.querySelector('.close-cat');
            category_btn.addEventListener('click', () => {
                category_pop.classList.add('active')

                Close_pop.addEventListener('click', () => {
                    category_pop.classList.remove('active')

                })
            });
        </script>




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


        <!-- template js -->

</body>


<!-- Mirrored from unicktheme.com/2024/eventflow/main-html/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2025 11:25:29 GMT -->

</html>
