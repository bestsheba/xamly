@extends('layouts.guest')
@section('content')
    <section class="p-0" style="margin-top: 91px;">
        <div class="container">
            <div class="row g-0">
                <div class="col-12">
                    <img src="banner.jpg" alt="Hero Banner" class="img-fluid w-100 hero-banner">
                </div>
            </div>
            <h1 class="hero-title">
                এডমিশন এক্সাম এর পূর্ণাঙ্গ প্রস্তুতি হোক
                <span class="brand-highlight">Xamly</span> তার সাথে
            </h1>
            <p class="text-center">এটা সাধারণ কোনো এক্সাম ব্যাচ নয়। এটা এমন একটি ব্যাচ যেটা তোমাকে সম্পূর্ণরূপে প্রস্তুত
                করবে মেডিকেল ও ভার্সিটি ভর্তি পরীক্ষার জন্য।</p>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="300">
                <h2 class="fw-bold">কেন <span class="text-primary">Xamly</span> সেরা?</h2>
            </div>

            <div class="row row-cols-lg-3 g-4" data-aos="fade-up" data-aos-delay="500">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card shadow-sm border-0 text-center p-1 p-sm-4 p-md-5 p-lg-4 p-xl-4">
                        <div class="mb-3 text-primary fs-1">
                            <img src="expert/guide.png" class="w-25" alt="" srcset="">
                        </div>
                        <a href="#" class="btn bgprimary text-white btn-sm mb-3">সেরা গাইডলাইন</a>
                        <p class="text-muted mb-0">এডমিশনে কিভাবে এগোতে হবে তার পূর্ণাঙ্গ রোড ম্যাপ</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card shadow-sm border-0 text-center p-1 p-sm-4 p-md-5 p-lg-4 p-xl-4">
                        <div class="mb-3 text-primary fs-1">
                            <img src="expert/exam.png" class="w-25" alt="" srcset="">
                        </div>
                        <a href="#" class="btn bgprimary text-white btn-sm mb-3">স্ট্যান্ডার্ড এক্সাম</a>
                        <p class="text-muted mb-0">সম্পূর্ণ এডমিশন স্ট্যান্ডার্ড এক্সামের সুযোগ</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col">
                    <div class="card shadow-sm border-0 text-center p-1 p-sm-4 p-md-5 p-lg-4 p-xl-4">
                        <div class="mb-3 text-primary fs-1">
                            <img src="expert/feature.png" class="w-25" alt="" srcset="">
                        </div>
                        <a href="#" class="btn bgprimary text-white btn-sm mb-3">ইউনিক ফিচারস</a>
                        <p class="text-muted mb-0">যেটা তোমাকে এগিয়ে রাখবে বাকিদের থেকে
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Addmission Exam Batch</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="program-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">সকল</li>
                    <li data-filter=".মেডিকেল">মেডিকেল</li>
                    <li data-filter=".filter-master">ভার্সিটি</li>
                    <li data-filter=".filter-certificate">অন্যান্য</li>
                </ul>

                <div class="row g-4 isotope-container">
                    <div class="col-lg-6 isotope-item মেডিকেল" data-aos="zoom-in" data-aos-delay="100">
                        <div class="program-item">
                            <div class="program-badge">Exam Batch </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-1.webp" class="img-fluid" alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>Computer Science</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 4 Years</span>
                                            <span><i class="bi bi-people-fill"></i> 120 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Fall &amp; Spring</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                            luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->

                    <div class="col-lg-6 isotope-item filter-bachelor" data-aos="zoom-in" data-aos-delay="200">
                        <div class="program-item">
                            <div class="program-badge">Exam Batch </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-3.webp" class="img-fluid"
                                            alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>Business Administration</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 3 Years</span>
                                            <span><i class="bi bi-people-fill"></i> 90 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Fall Only</span>
                                        </div>
                                        <p>Nullam sed augue a turpis bibendum cursus. Suspendisse potenti. Praesent
                                            mi diam, feugiat a tincidunt at.</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->

                    <div class="col-lg-6 isotope-item filter-bachelor" data-aos="zoom-in" data-aos-delay="300">
                        <div class="program-item">
                            <div class="program-badge">Exam Batch </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-5.webp" class="img-fluid"
                                            alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>মেডিকেল অপ্রতিরোধ্য এক্সাম ব্যাচ</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 5 Years</span>
                                            <span><i class="bi bi-people-fill"></i> 150 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Fall Only</span>
                                        </div>
                                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia curae.</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->

                    <div class="col-lg-6 isotope-item filter-master" data-aos="zoom-in" data-aos-delay="100">
                        <div class="program-item">
                            <div class="program-badge">Exam Batch </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-7.webp" class="img-fluid"
                                            alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>Environmental Studies</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 2 Years</span>
                                            <span><i class="bi bi-people-fill"></i> 60 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Spring Only</span>
                                        </div>
                                        <p>Aenean imperdiet, erat vel consequat mollis, nunc risus aliquam nunc,
                                            eget condimentum urna dui et metus.</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->

                    <div class="col-lg-6 isotope-item ভার্সিটি" data-aos="zoom-in" data-aos-delay="200">
                        <div class="program-item">
                            <div class="program-badge">ভার্সিটি</div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-9.webp" class="img-fluid"
                                            alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>Mechanical Engineering</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 2 Years</span>
                                            <span><i class="bi bi-people-fill"></i> 64 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Fall &amp; Spring</span>
                                        </div>
                                        <p>Praesent tincidunt, massa et porttitor imperdiet, lorem ex ultricies
                                            ipsum, a tempus metus eros non tortor.</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->

                    <div class="col-lg-6 isotope-item অন্যান্য" data-aos="zoom-in" data-aos-delay="100">
                        <div class="program-item">
                            <div class="program-badge">Certificate</div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="program-image-wrapper">
                                        <img src="assets/img/education/education-2.webp" class="img-fluid"
                                            alt="Program">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="program-content">
                                        <h3>Data Science</h3>
                                        <div class="program-highlights">
                                            <span><i class="bi bi-clock"></i> 6 Months</span>
                                            <span><i class="bi bi-people-fill"></i> 24 Credits</span>
                                            <span><i class="bi bi-calendar3"></i> Year-round</span>
                                        </div>
                                        <p>Mauris sed erat in mi vestibulum commodo. Donec a purus at justo
                                            facilisis imperdiet tnteger pell</p>
                                        <div class="d-flex justify-content-between"> <a href="#"
                                                class="program-btn"><span>বিস্তারিত</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                            <a href="#" class="program-btn"><span>ইনরোল প্রসেস</span> <i
                                                    class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Program Item -->
                </div>
            </div>
        </div>
    </section><!-- /Featured Programs Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">শিক্ষার্থী রিভিউ</h2>

            <div class="swiper" id="testimonialSwiper">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"Xamly আমার প্রস্তুতিকে অনেক সহজ করে দিয়েছে। কুইজ ও বিশ্লেষণগুলো দারুণ
                                সহায়ক।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— তানজিমা আক্তার</h5>
                            <small class="text-muted">ঢাকা বিশ্ববিদ্যালয়</small>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"গ্রামের ছাত্র হয়েও আমি সমান সুযোগ পেয়েছি। Xamly সত্যিই অসাধারণ।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— রিফাতুল ইসলাম</h5>
                            <small class="text-muted">চট্টগ্রাম বিশ্ববিদ্যালয়</small>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"প্রশ্নব্যাংক আর রিপোর্টিং সিস্টেম খুব কার্যকর। সময় বাঁচিয়ে দিয়েছে।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— সুমাইয়া হাসান</h5>
                            <small class="text-muted">রুয়েট</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"প্রশ্নব্যাংক আর রিপোর্টিং সিস্টেম খুব কার্যকর। সময় বাঁচিয়ে দিয়েছে।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— সুমাইয়া হাসান</h5>
                            <small class="text-muted">রুয়েট</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"প্রশ্নব্যাংক আর রিপোর্টিং সিস্টেম খুব কার্যকর। সময় বাঁচিয়ে দিয়েছে।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— সুমাইয়া হাসান</h5>
                            <small class="text-muted">রুয়েট</small>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card shadow-sm h-100 p-4 text-center">
                            <p class="fst-italic">"প্রশ্নব্যাংক আর রিপোর্টিং সিস্টেম খুব কার্যকর। সময় বাঁচিয়ে দিয়েছে।"</p>
                            <h5 class="mt-3 mb-0 fw-semibold">— সুমাইয়া হাসান</h5>
                            <small class="text-muted">রুয়েট</small>
                        </div>
                    </div>

                    <!-- You can add more slides as needed -->
                </div>

                <!-- Swiper Pagination & Arrows -->
                <div class="swiper-pagination mt-4"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <section class="py-5 bgprimary text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-white">আমাদের সফলতা</h2>
                <p class="text-light">শিক্ষার্থীদের অর্জনের কিছু সংখ্যা</p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <h1 class="fw-bold text-white">১০,০০০+</h1>
                    <p>সন্তুষ্ট শিক্ষার্থী</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h1 class="fw-bold text-white">৮৫%</h1>
                    <p>প্রবেশিকা পরীক্ষায় সফলতা</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h1 class="fw-bold text-white">৫০০+</h1>
                    <p>লাইভ সেশন</p>
                </div>
                <div class="col-md-3 mb-4">
                    <h1 class="fw-bold text-white">৯৭%</h1>
                    <p>পজিটিভ রেটিং</p>
                </div>
            </div>
        </div>
    </section>
@endsection
