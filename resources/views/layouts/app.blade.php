<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Intellectual Property rights portal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    {{-- font family for nav items --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Sedan:ital@0;1&display=swap"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                {{-- <h1>Append</h1> --}}
                <span>.</span>
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="/templates"
                            class="nav-link {{ Request::is('templates') ? 'active' : '' }}">Templates</a></li>
                    <li><a href="/resources"
                            class="nav-link {{ Request::is('resources') ? 'active' : '' }}">Educational Resources</a>
                    </li>
                    <li><a href="{{ url('intellectual-properties/create') }}"
                            class="nav-link {{ Request::is('intellectual-properties/create') ? 'active' : '' }}">Intellectual
                            Property</a></li>
                    <li><a href="{{ url('intellectual-properties') }}"
                            class="nav-link {{ Request::is('intellectual-properties') ? 'active' : '' }}">Search</a>
                    </li>
                    <li><a href="/#contact" class="nav-link {{ Request::is('/#contact') ? 'active' : '' }}">Contact</a>
                    </li>
                    @auth
                        <li><a href="/profile" class="nav-link {{ Request::is('profile') ? 'active' : '' }}">Profile</a>
                        </li>
                        <li><a href="/notifications"
                                class="nav-link {{ Request::is('notifications') ? 'active' : '' }}">Notifications</a></li>
                        <li>

                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn-getstarted">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li>
                            <a href="{{ route('login') }}" class="btn-getstarted">Register</a>
                        </li>
                    @endguest
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->





        </div>
    </header><!-- End Header -->

    <main id="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>
                            <img src="{{ asset('assets/img/logo.png') }}" alt="">
                        </span>
                    </a>
                    <p>
                        Your Intellectual Property Match Making buddy. We help you find the right resources for your
                        needs.
                        Whether you are looking for templates, educational resources or intellectual property, we have
                        got you covered.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/#about">About us</a></li>
                        <li><a href="/#services">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Matching</a></li>
                        <li><a href="#">Rights Request</a></li>
                        <li><a href="#">Notification System</a></li>
                        <li><a href="#">Guidance</a></li>
                        <li><a href="#">Discoverable</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>Kampala, UG 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+256 785065399</span></p>
                    <p><strong>Email:</strong> <span>info@ipportal.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1">Intellectual Property Rights Portal</strong>
                <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://impactoutsourcing.co.ug/">Impact Outsourcing</a>
            </div>
        </div>

    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
