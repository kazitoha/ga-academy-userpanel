<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>


        @if (!empty(websiteSetting()))
            {{ websiteSetting()->school_name }}
        @else
            {{ 'School Name' }}
        @endif
    </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('public_asset/images/logo.jpg') }}">
    <!-- fontawesome link---- -->
    <link rel="stylesheet" href="{{ asset('public_asset/css/all.min.css') }}">
    <!-- owl slider link ========= -->
    <link rel="stylesheet" href="{{ asset('public_asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public_asset/css/owl.theme.default.min.css') }}">
    <!-- venobox link------= -->
    <link rel="stylesheet" href="{{ asset('public_asset/css/venobox.min.css') }}">
    <!-- bootstrap link============= -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- main css link-------- -->
    <link rel="stylesheet" href="{{ asset('public_asset/css/style.css') }}">
    <!-- responsive css strat------- -->
    <link rel="stylesheet" href="{{ asset('public_asset/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public_asset/css/scroll_slider.css') }}">
    <!-- font awosome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

        .main-nav {
            position: fixed;
            z-index: 2;
            width: 100%;
            /* Add your desired background color */
            /* Add any other styling you need for the fixed navbar */
        }
    </style>
</head>

<body>

    @php
        $url = Route::current()->uri;
    @endphp





    <div class="sticky_top" style="position: fixed">
        <div class="d-none d-lg-block d-xl-block" style="background: #f8f7f7">
            <div class="row">
                <div class="col-2 m-auto">
                    <img src="{{ asset('public_asset/images/Untitled-2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-8 text-center m-auto">
                    <span class="mb-0 mt-2"
                        style="color:#666666; font-weight: bold; @if (strlen(websiteSetting()->school_name) <= 50) font-size: 29px; @else font-size: 26px; @endif ">
                        @if (!empty(websiteSetting()))
                            {{ websiteSetting()->school_name }}
                        @else
                            {{ 'School Name' }}
                        @endif
                    </span>
                </div>
                <div class="col-2 text-right m-auto" style="padding-right: 28px;">
                    <a href="https://portal.fenigaacademy.edu.bd/" type="button" class="btn btn-outline-info">Login</a>
                    <a href="{{ route('contact') }}" type="button"
                        class="btn btn-outline-info @if ($url == 'contact') active @endif">Contact</a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <div class="container">
                <a class="navbar-brand navbar-mobile-logo" href="#"><img
                        src="{{ asset('public_asset/images/Untitled-2.png') }}" alt="" class="img-fluid"
                        style="width: 162px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-md-right" id="navbarNavDropdown">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link  @if ($url == '/') active @endif"
                                href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'notice' || $url == 'single/notice/{id}') active @endif"
                                href="{{ route('notice') }}">notice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'news' || $url == 'single/news/{id}') active @endif"
                                href="{{ route('news') }}">News</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'event' || $url == 'single/event/{id}') active @endif"
                                href="{{ route('event') }}">Event</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if ($url == 'academic/calendar' || $url == 'honorable/guardians') active @endif"
                                id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                                Academic
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item @if ($url == 'academic/calendar') active @endif"
                                    href="{{ route('academic.calendar') }}">Syllabus</a>
                                <a class="dropdown-item @if ($url == 'academic/calendar') active @endif"
                                    href="{{ route('academic.calendar') }}">Class Routine
                                </a>
                                <a class="dropdown-item @if ($url == 'academic/calendar') active @endif"
                                    href="{{ route('academic.calendar') }}">Academic Calendar</a>
                                <a class="dropdown-item @if ($url == 'academic/calendar') active @endif"
                                    href="{{ route('group.view') }}">Groups</a>
                                <a class="dropdown-item @if ($url == 'honorable/guardians') active @endif"
                                    href="{{ route('honorable.guardians') }}">Honorable Guardians</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'admission') active @endif"
                                href="{{ route('admission.view') }}">Admission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'golden-jubilee-independence-corner') active @endif"
                                href="{{ route('independence-corner') }}">সুবর্ণ জয়ন্তী কর্নার</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if ($url == 'bongobondhu/corner') active @endif"
                                href="{{ route('bongobondhu-corner') }}">বঙ্গবন্ধু কর্নার</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if (
                                $url == 'about/committee' ||
                                    $url == 'history' ||
                                    $url == 'gallery' ||
                                    $url == 'contact' ||
                                    $url == 'staff' ||
                                    $url == 'teachers') active @endif"
                                id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item d-lg-block d-xl-none @if ($url == 'contact') active @endif"
                                    href="{{ route('contact') }}">Contact</a>
                                <a class="dropdown-item @if ($url == 'teachers' || $url == 'select/teachers/{id}') active @endif"
                                    href="{{ route('teacher') }}">Teacher</a>
                                <a class="dropdown-item @if ($url == 'staff' || $url == 'select/staff/{id}') active @endif"
                                    href="{{ route('staff') }}">Staff</a>
                                <a class="dropdown-item @if ($url == 'about/committee') active @endif"
                                    href="{{ route('about.committee') }}">About Committee</a>
                                <a class="dropdown-item @if ($url == 'history') active @endif"
                                    href="{{ route('history') }}">About School</a>
                                <a class="dropdown-item @if ($url == 'gallery') active @endif"
                                    href="{{ route('gallery') }}">gallerys</a>


                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @if ($url == 'academic/testimonial') active @endif"
                                id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Links
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item d-lg-block d-xl-none"
                                    href="https://demo.portal.fenigaacademy.edu.bd">Login</a>
                                <a class="dropdown-item @if ($url == 'academic/testimonial') active @endif"
                                    href="{{ route('academic.testimonial') }}">Apply For Testimonial</a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar part finish -->














    @yield('userview-navbar')













    <!-- ===================footer part start================= -->
    <footer id="footer-part" class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-md-5">
                    <div class="footer-top-one">
                        <h2>Essential Link</h2>
                        <div class="footer-link">
                            <ul>

                                <li class="active">
                                    <a href="{{ url('notice') }}"><i class="fa fa-bell-o" aria-hidden="true"></i>
                                        Notice</a>
                                </li>
                                <li>
                                    <a href="{{ url('event') }}"><i class="fa fa-calendar" aria-hidden="true"></i>
                                        Event</a>
                                </li>
                                <li>
                                    <a href="{{ url('teacher&staff') }}"><i class="fa fa-user"
                                            aria-hidden="true"></i> About Teacher & Staff</a>
                                </li>
                                <li>
                                    <a href="{{ url('gallery') }}"><i class="fa fa-file-image-o"
                                            aria-hidden="true"></i> Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ url('about/committee') }}"><i class="fa fa-address-card-o"
                                            aria-hidden="true"></i> About Committee</a>
                                </li>



                            </ul>
                        </div>
                    </div>
                </div>

                <!-- academic -->
                <div class="col-lg-3 col-md-6 pb-md-5">
                    <div class="footer-top-one">
                        <h2>Academic</h2>
                        <div class="footer-link">
                            <ul>
                                <li>
                                    <a href="{{ url('history') }}"><i class="fa fa-history" aria-hidden="true"></i>
                                        School History</a>
                                </li>
                                <li>
                                    <a href="{{ url('academic/calendar') }}"><i class="fa fa-calendar"
                                            aria-hidden="true"></i> Academic Calendar</a>
                                </li>
                                <li>
                                    <a href="{{ url('honorable/guardians') }}"><i class="fa fa-users"
                                            aria-hidden="true"></i> Honorable Guardians</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6">
                    <div class="footer-top-one">
                        <img src="{{ asset('public_asset/images/logo.jpg') }}" height="82" width="92"
                            alt="">
                        <h2>Address</h2>
                        <div class="footer-link">
                            <ul>
                                <li>
                                    <a href="{{ route('contact') }}"><i class="fa fa-map-marker"
                                            aria-hidden="true"></i>
                                        @if (!empty(websiteSetting()))
                                            {{ websiteSetting()->address }}
                                        @else
                                            {{ 'School Address' }}
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <strong><a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            @if (!empty(websiteSetting()))
                                                {{ websiteSetting()->email }}
                                            @else
                                                {{ 'School@email.com' }}
                                            @endif
                                        </a></strong>
                                </li>
                                <li>
                                    <a href="@if (!empty(websiteSetting())) {{ websiteSetting()->facebook_link }}@else {{ 'facebook.com' }} @endif"
                                        target="_blank"><strong><i class="fa fa-facebook-official"
                                                aria-hidden="true"></i> Facebook</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="footer-bottom-left ">
                            <p><i class="fa fa-copyright" aria-hidden="false"></i> 2022-<?php echo date('Y'); ?>
                                Developed and Maintained By <a
                                    href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwQncjStzfPxssNZPPPJrWxnGvvZwczZSPxMrTfsrGJnbvxcwfSjKMRvlxnfBQcmmzjFJWP">TeamNexio.</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- ================footer part finish================ -->


    <!-- back to top======== -->
    <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
</body>

<!-- jquery link js------------ -->
<script src="{{ asset('public_asset/js/jquery-1.12.4.min.js') }}"></script>
<!-- main js link============= -->
<script src="{{ asset('public_asset/js/main.js') }}"></script>
<!-- bootstrap js link============== -->
<script src="{{ asset('public_asset/js/bootstrap.min.js') }}"></script>
<!-- owl js link======== -->
<script src="{{ asset('public_asset/js/owl.carousel.min.js') }}"></script>
<!-- waypoint js link----- -->
<script src="{{ asset('public_asset/js/waypoints.min.js') }}"></script>
<!-- venobox js link==== -->
<script src="{{ asset('public_asset/js/venobox.min.js') }}"></script>
<!-- counter js strat---- -->
<script src="{{ asset('public_asset/js/jquery.counterup.min.js') }}"></script>
<!-- popper js link-------- -->
<script src="{{ asset('public_asset/js/popper.min.js') }}"></script>
<!-- ----mixitup js------------ -->
<script src="{{ asset('public_asset/js/mixitup.min.js') }}"></script>
<script src="{{ asset('public_asset/js/scroll_slider.js') }}"></script>


</html>
