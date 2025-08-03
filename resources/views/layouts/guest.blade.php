<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Xamly is a trusted platform for admission test preparation in Bangladesh.</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .card-glass {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .button-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .custom-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 40px;
            border: none;
            background: var(--accent-color);
            color: white;
            transition: 0.3s ease-in-out;
            text-decoration: none;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        .custom-btn:hover {
            background: #ED1B24;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="/xlogo.jpg" alt="Xamly Logo">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    {{-- <li><a href="about.html">Students Life</a></li> --}}
                    {{-- <li><a href="{{ route('events') }}">Events</a></li> --}}
                    {{-- <li class="dropdown"><a href="#"><span>More Pages</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="news-details.html">News Details</a></li>
                            <li><a href="event-details.html">Event Details</a></li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li><a href="terms-of-service.html">Terms of Service</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="starter-page.html">Starter Page</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>
    <footer id="footer" class="footer position-relative">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="/xlogo.jpg" alt="" srcset="">
                    </a>
                    <p>Xamly is a trusted platform for admission test preparation in Bangladesh. We offer
                        online mock exams, performance analysis, and personalized preparation tools for Medical,
                        Engineering, and University admission seekers.

                    </p>
                    <div>
                        <ul class="list-unstyled">
                            <li><strong>Address:</strong> 123 Main Street, Dhaka, Bangladesh</li>
                            <li><strong>Phone:</strong> <a href="tel:+8801650235997">+880 123 456 7890</a></li>
                            <li><strong>Email:</strong> <a href="mailto:xamly@gmail.com">xamly@gmail.com</a></li>
                            <li><strong>Hours:</strong> Sat - Thu: 9:00 AM - 6:00 PM</li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <!-- Exam Categories -->
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Exam Categories</h4>
                    <ul>
                        <li><a href="/exams/medical">Medical Admission Preparation</a></li>
                        <li><a href="/exams/engineering">Engineering Admission Preparation</a></li>
                        <li><a href="/exams/university">University Admission Test</a></li>
                        <li><a href="/exams/model-tests">Model Test Series</a></li>
                        <li><a href="/exams/subject-wise">Subject-wise Practice</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Social Links</h4>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Xamly</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Developed by <a href="https://bestsheba.com">Bestsheba</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const testimonialSwiper = new Swiper('#testimonialSwiper', {
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        slidesPerGroup: 1,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                        slidesPerGroup: 3,
                    }
                },
            });
        });
    </script>
    <script src="assets/js/main.js"></script>

</body>

</html>
