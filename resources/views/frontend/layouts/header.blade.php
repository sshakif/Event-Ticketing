<!--==================================================-->
<!-- Start Header Area -->
<!--==================================================-->
<div class="header-area" id="sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="header-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('frontend-assets/assets/images/sct-bangla.svg') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="header-menu">
                    <ul>
                        <li class="menu-item-has-children"><a href="{{ route('index') }}">Home<i></i></a></li>
                        <li class="menu-item-has-children"><a href="{{ route('about') }}">About<i></i></a></li>
                        <li class="menu-item-has-children"><a href="{{ route('service') }}">Service<i></i></a></li>
                        <li class="menu-item-has-children"><a href="{{ route('projects') }}">Projects<i></i></a></li>
                        <li class="menu-item-has-children"><a href="{{ route('careers') }}">Careers<i></i></a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                    <div class="header-search-icon search-box-outer">
                        <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                    <div class="header-button">
                        <a href="{{ route('contact') }}">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End Header Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Main Menu Area -->
<!--==================================================-->
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
    <div class="mobile-menu">
        <nav class="header-menu">
            <ul class="nav_scroll">
                <li class="menu-item-has-children"><a href="{{ route('index') }}">Home</a></li>
                <li class="menu-item-has-children"><a href="{{ route('about') }}">About</a></li>
                <li class="menu-item-has-children"><a href="{{ route('service') }}">Service</a></li>
                <li class="menu-item-has-children"><a href="{{ route('projects') }}">Projects<i></i></a></li>
                <li class="menu-item-has-children"><a href="{{ route('careers') }}">Careers<i></i></a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>

        </nav>
    </div>
</div>
<!--==================================================-->
<!-- End Main Menu Area -->
<!--==================================================-->
