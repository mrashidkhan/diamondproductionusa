<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/meeta/meeta/index-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2024 20:35:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Diamond Productions USA</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon/favicon.png') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Equal Grid CSS -->
    <style>
    .equal-height-image {
        width: 300px;
        height: 100%; /* Set the height you want */
        object-fit: cover;
        object-position: center;

    }

    .row {
    display: flex;
    flex-wrap: wrap;
}

.column {
    flex-basis: 25%;
    margin: 10px;
}

.column img {
    width: 100%;
    height: 200px; /* Set the height you want */
    object-fit: cover;
    object-position: center;
}

/* For extra small mobile devices */
@media (max-width: 480px) {
    .row {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .column {
        margin-bottom: 20px; /* Add a gap between each image */
    }
    .column img {
        margin: 10 auto; /* Center the image horizontally */
    }
}

/* For larger devices */
@media (min-width: 481px) {
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    .column {
        flex-basis: 25%;
        margin: 20px;
    }
    .column img {
        width: 100%;
        height: 200px; /* Set the height you want */
        object-fit: cover;
        object-position: center;
    }
}
    </style>

</head>

<body>


    <div class="main-wrapper">

        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start -->
        <div class="meeta-header-section meeta-header-2">

            <!-- Header Middle Start -->
            <div class="header-middle header-sticky">
                <div class="container">

                    <div class="header-wrap">
                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/diamond-logo.png') }}" alt="Logo" style="width: 157px; height: 88px; object-fit: cover;">
                            </a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Navigation Start -->
                        <div class="header-navigation d-none d-lg-block">
                            <ul class="main-menu">

                                <li class="{{ Request::is('/') ? 'active-menu' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                                <li class="{{ Request::is('contact') ? 'active-menu' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="{{ Request::is('about') ? 'active-menu' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                {{-- <li class="{{ Request::is('gallery') ? 'active-menu' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li class="{{ Request::is('events') ? 'active-menu' : '' }}"><a href="{{ route('events') }}">Past Events</a></li> --}}
                                <li class="{{ Request::is('posters') ? 'active-menu' : '' }}"><a href="{{ route('posters') }}">Past Events</a></li>
                                <li class="{{ Request::is('upcomingposters') ? 'active-menu' : '' }}"><a href="{{ route('upcomingposters') }}">Upcoming Events</a></li>




                            </ul>
                        </div>
                        <!-- Header Navigation End -->

                        <!-- Header Meta Start -->
                        <div class="header-meta">

                            <div class="header-btn d-none d-md-block">
                                <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                            </div>

                            <!-- Header Toggle Start -->
                            <div class="header-toggle d-lg-none">
                                <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <!-- Header Toggle End -->

                        </div>
                        <!-- Header Meta End -->

                    </div>

                </div>
            </div>
            <!-- Header Middle End -->

        </div>
        <!-- Header End -->

        <!-- Mini Cart Start -->
        <div class="off-canvas">
            <div class="icon-close"></div>

            <!-- Mini Cart Box Start -->
            <div class="meeta-mini-cart-box">

                <div class="mini-cart-items">

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="{{ asset('assets/images/cart/cart-1.jpg') }}" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Diamond Productions USA </a></h4>
                            <p class="mini-cart-quantity">1 × $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="{{ asset('assets/images/cart/cart-2.jpg') }}" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Diamond Productions USA </a></h4>
                            <p class="mini-cart-quantity">1 × $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="{{ asset('assets/images/cart/cart-3.jpg') }}" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Diamond Productions USA </a></h4>
                            <p class="mini-cart-quantity">1 × $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                </div>

                <div class="mini-cart-sub-total">
                    <p><strong>Subtotal:</strong> <span class="mini-cart-amount">$99.97</span></p>
                </div>
                <div class="mini-cart-sub-btn">
                    <a class="btn btn-primary" href="#">View cart</a>
                    <a class="btn btn-white" href="#">Checkout</a>
                </div>
            </div>
            <!-- Mini Cart Box End -->

        </div>
        <!-- Mini Cart End -->


        <!-- Offcanvas Start-->
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
                <!-- Offcanvas Logo Start -->
                <div class="offcanvas-logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('assets/images/diamond-logo.png') }}" alt="Logo"></a>
                </div>
                <!-- Offcanvas Logo End -->
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            <!-- Offcanvas Body Start -->
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                    <ul class="main-menu">

                        <li class="{{ Request::is('/') ? 'active-menu' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                        <li class="{{ Request::is('contact') ? 'active-menu' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li class="{{ Request::is('about') ? 'active-menu' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                        {{-- <li class="{{ Request::is('gallery') ? 'active-menu' : '' }}"><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                        <li class="{{ Request::is('events') ? 'active-menu' : '' }}"><a href="{{ route('posters') }}">Past Events</a></li>
                        <li class="{{ Request::is('upcomingposters') ? 'active-menu' : '' }}"><a href="{{ route('upcomingposters') }}">Upcoming Events</a></li>

                    </ul>
                </div>
            </div>
            <!-- Offcanvas Body End -->
        </div>
        <!-- Offcanvas End -->
