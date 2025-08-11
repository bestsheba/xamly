<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Robiul Alam Rakib - Musician | Composer | Traveler</title>
    <meta name="description"
        content="Official website of Robiul Alam Rakib - Singer, Music Director, Composer, Travel Vlogger, and Founder of BD HOLIDAYS" />
    <meta name="keywords"
        content="Robiul Alam Rakib, Musician Bangladesh, Ghurbaz Vlogs, BD Holidays, BD SoundLab, Bangladeshi Singer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "bangladesh-green": "#006A4E",
                        "bangladesh-red": "#F42A41",
                        golden: "#FFD700",
                        "deep-blue": "#1E3A8A",
                    },
                },
            },
        };
    </script>
    <style>
        .modal {
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            animation: zoomIn 0.3s ease-out;
            max-height: 95vh;
            max-width: 95vw;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .gallery-item img {
            transition: all 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .close-btn {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
        }

        /* Auto-detects images with gallery-trigger class */
        .gallery-trigger {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .gallery-trigger:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Visual feedback for hover delay */
        .gallery-trigger {
            position: relative;
        }

        .gallery-trigger::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%23000'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7'/%3E%3C/svg%3E");
            background-size: 18px;
            background-repeat: no-repeat;
            background-position: center;
        }

        .gallery-trigger:hover::after {
            opacity: 1;
        }

        /* Responsive modal image handling */
        #modalImage {
            max-width: calc(100vw - 40px);
            max-height: calc(100vh - 120px);
            width: auto;
            height: auto;
            object-fit: contain;
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            #modalImage {
                max-width: calc(100vw - 20px);
                max-height: calc(100vh - 100px);
            }

            .modal-content {
                max-width: 98vw;
                max-height: 98vh;
                margin: 10px;
            }

            /* Adjust button positions for mobile */
            #closeModal {
                top: -10px;
                right: -10px;
                width: 35px;
                height: 35px;
            }

            #prevImage,
            #nextImage {
                width: 35px;
                height: 35px;
                font-size: 18px;
            }

            #prevImage {
                left: 10px;
            }

            #nextImage {
                right: 10px;
            }
        }

        /* Very small screens */
        @media (max-width: 480px) {
            #modalImage {
                max-width: calc(100vw - 10px);
                max-height: calc(100vh - 80px);
            }

            .modal-content {
                max-width: 99vw;
                max-height: 99vh;
                margin: 5px;
            }

            /* Hide navigation arrows on very small screens to save space */
            #prevImage,
            #nextImage {
                display: none;
            }

            /* Make info panel more compact */
            .modal-content .absolute.bottom-0 {
                padding: 8px 12px;
            }

            #modalTitle {
                font-size: 16px;
            }

            #modalInfo {
                font-size: 12px;
            }
        }

        /* Landscape orientation on mobile */
        @media (max-height: 500px) and (orientation: landscape) {
            #modalImage {
                max-height: calc(100vh - 60px);
            }

            .modal-content .absolute.bottom-0 {
                padding: 6px 12px;
            }

            #modalTitle {
                font-size: 14px;
            }

            #modalInfo,
            .text-gray-400 {
                font-size: 11px;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-bangladesh-green">
                    Robiul Alam Rakib
                </div>
                <div class="hidden lg:flex space-x-6">
                    <a href="#home" class="text-gray-700 hover:text-bangladesh-green transition-colors">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-bangladesh-green transition-colors">About</a>
                    <a href="#music" class="text-gray-700 hover:text-bangladesh-green transition-colors">Music
                        Photo</a>
                    <a href="#music" class="text-gray-700 hover:text-bangladesh-green transition-colors">Song</a>
                    <a href="#ghurbaz" class="text-gray-700 hover:text-bangladesh-green transition-colors">Ghurbaz</a>
                    <a href="#travel" class="text-gray-700 hover:text-bangladesh-green transition-colors">Travel</a>
                    <a href="#news" class="text-gray-700 hover:text-bangladesh-green transition-colors">News</a>
                    <a href="#blog" class="text-gray-700 hover:text-bangladesh-green transition-colors">Blog</a>
                    <a href="#contact" class="text-gray-700 hover:text-bangladesh-green transition-colors">Contact</a>
                </div>
                <button id="mobile-menu-btn" class="lg:hidden">
                    <i class="fas fa-bars text-bangladesh-green text-xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <div class="flex flex-col space-y-2">
                    <a href="#home" class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">About</a>
                    <a href="#biography"
                        class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Biography</a>
                    <a href="#music" class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Music</a>
                    <a href="#ghurbaz"
                        class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Ghurbaz</a>
                    <a href="#travel"
                        class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Travel</a>
                    <a href="#news" class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">News</a>
                    <a href="#blog" class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Blog</a>
                    <a href="#contact"
                        class="text-gray-700 hover:text-bangladesh-green transition-colors py-2">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home"
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-bangladesh-green/10 to-golden/20 pt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold text-bangladesh-green mb-4">
                        Robiul Alam Rakib
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-700 mb-6">
                        Musician | Composer | Traveler
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Hello! I’m Robiul Alam Rakib a singer, composer, content creator, and traveler from
                        Bangladesh. My passion for music and travel drives my projects like BD SoundLab, Ghurbaz, BD
                        HOLIDAYS, and Hangout Restaurant & Music Café.

                        Here, you'll find my music, travel stories, and a gateway to unforgettable journeys. Join me as
                        I explore the world through melodies and adventures!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#about"
                            class="bg-bangladesh-green text-white px-8 py-3 rounded-full hover:bg-green-700 transition-colors inline-flex items-center justify-center">
                            <i class="fas fa-user mr-2"></i>Read More
                        </a>
                        <a href="#music"
                            class="border-2 border-bangladesh-green text-bangladesh-green px-8 py-3 rounded-full hover:bg-bangladesh-green hover:text-white transition-colors inline-flex items-center justify-center">
                            <i class="fas fa-music mr-2"></i>Listen to Music
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <img src="{{ asset('/images/robiul-alam-rakib.JPG') }}" alt="Robiul Alam Rakib"
                        class="w-80 h-96 rounded-lg shadow-2xl mx-auto object-cover border-4 border-white gallery-trigger" />
                </div>
            </div>
        </div>
    </section>
    <!-- About Me Section -->
    <section id="about" class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="images/about1.JPG" alt="Robiul Alam Rakib in studio" class="rounded-lg shadow-xl" />
                </div>
                <div>
                    <h2 class="text-4xl font-bold text-bangladesh-green mb-6">
                        About Me
                    </h2>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            I’m Robiul Alam Rakib, born on March 19, 1989, in Noakhali, Bangladesh. My journey in music
                            started at a very young age, thanks to the inspiration I received from my father, Dr. Abdul
                            Momin. Not only was he a physician, but he was also an enlisted singer for Bangladesh Betar
                            and BTV. Growing up surrounded by music, I knew early on that this would be my path.
                        </p>
                        <p>
                            By the age of eight, I started learning music and playing instruments. Over the years, I
                            became proficient in several, including the harmonium, keyboard, piano, guitar, drums, and
                            more. Since 2004, I’ve been performing as a singer and keyboardist in various settings, from
                            stages to television shows. Music has always been my passion, and in 2006, I took a step
                            further by establishing my own music studio, BD SoundLab. It was here that I began composing
                            and directing music for films, dramas, and special projects. Along the way, I had the honor
                            of collaborating with some incredible artists, like Sabina Yasmin, Andrew Kishor, and Fakir
                            Alamgir, to name a few.

                        </p>
                        <p>
                            In 2023, I decided to channel my love for travel into something bigger and founded BD
                            HOLIDAYS, a travel agency with the aim of making travel more affordable and accessible for
                            everyone. Through customized itineraries and hands-on support, I hope to make international
                            and domestic travel easier and more meaningful for others
                        </p>
                        <p>
                            Along the way, I’ve documented my travels on my YouTube channel Ghurbaz, where I share my
                            adventures from all around the world. I’ve been lucky enough to explore diverse cultures,
                            beautiful landscapes, and meet some incredible people along the way. Each trip gives me new
                            stories to tell and new inspiration to share.
                        </p>
                        <p>
                            On a personal note, I’m blessed to have a wonderful family — my wife, Bibi Moreyam Munni,
                            and our three children: Nusaiba, Miftahul, and Rufaida. They are my constant source of
                            motivation.
                        </p>
                        <p>
                            Through everything I do — from music to travel to business — my goal is to inspire others to
                            live their dreams, explore new horizons, and create something meaningful. Life is all about
                            connection, creativity, and exploration, and I hope my work helps others feel inspired to do
                            the same.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Music Gallery Section -->
    <section id="music" class="py-10 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">
                Music Photo Gallery
            </h2>

            <!-- Dynamic Images Grid -->
            <div id="images-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($images as $image)
                    <div class="gallery-item aspect-square bg-white rounded-lg shadow-lg overflow-hidden"
                        data-country="{{ $image->country }}">
                        <img src="{{ Storage::url($image->image) }}" alt="{{ $image->alt ?? 'Travel Photo' }}"
                            class="w-full h-full object-cover rounded-lg shadow-md hover:shadow-xl transition-shadow cursor-pointer gallery-trigger" />
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-8">
                        No travel photos available at the moment.
                    </div>
                @endforelse
            </div>

            <!-- Load More Button -->
            @if ($images->count() >= 8)
                <div class="text-center mt-8">
                    <button id="load-more-btn"
                        class="bg-bangladesh-green hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors"
                        data-page="2">
                        Load More
                    </button>
                </div>
            @endif
        </div>
    </section>
    <section id="songGallery" class="py-10 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">
                Song Gallery
            </h2>

            <!-- Dynamic Video Grid -->
            <div id="videos-grid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($songs as $song)
                    @php
                        // Extract video ID from YouTube link
                        preg_match(
                            '/(?:youtube\\.com\\/(?:[^\\/]+\\/\\S+\\/|(?:v|e(?:mbed)?)\\/|.*[?&]v=)|youtu\\.be\\/)([a-zA-Z0-9_-]{11})/',
                            $song->youtube_url,
                            $matches,
                        );
                        $videoId = $matches[1] ?? null;
                    @endphp

                    @if ($videoId)
                        <div class="gallery-item bg-white rounded-lg shadow-lg overflow-hidden"
                            data-video-id="{{ $videoId }}">
                            <div class="aspect-video bg-gray-200 relative">
                                <iframe class="w-full h-full absolute inset-0"
                                    src="https://www.youtube.com/embed/{{ $videoId }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="col-span-full text-center text-gray-500 py-8">
                        No songs available at the moment.
                    </div>
                @endforelse
            </div>

            <!-- Load More Button -->
            @if ($songs->count() >= 6)
                <div class="text-center mt-8">
                    <button id="load-more-btn"
                        class="bg-bangladesh-green hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors"
                        data-page="2">
                        Load More
                    </button>
                </div>
            @endif
        </div>
    </section>
    <!-- Ghurbaz Travel Vlog Section -->
    <section id="ghurbaz" class="py-10 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-bangladesh-green mb-4">
                    Ghurbaz - Travel Vlogs
                </h2>
                <p class="text-xl text-gray-600">
                    Join me on incredible journeys around the world
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Vlog 1 -->
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-golden/20 to-golden/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-golden"></i>
                    </div>
                </div>

                <!-- Vlog 2 -->
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-deep-blue/20 to-deep-blue/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-deep-blue"></i>
                    </div>
                </div>

                <!-- Vlog 3 -->
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-bangladesh-green/20 to-bangladesh-green/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-bangladesh-green"></i>
                    </div>
                </div>

                <!-- Add more vlogs -->
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-bangladesh-red/20 to-bangladesh-red/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-bangladesh-red"></i>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-purple-400/20 to-purple-600/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-purple-600"></i>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div
                        class="aspect-video bg-gradient-to-br from-green-400/20 to-green-600/40 flex items-center justify-center">
                        <i class="fas fa-play-circle text-6xl text-green-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="travel" class="py-10 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">
                Travel Photo Gallery
            </h2>

            <!-- Dynamic Images Grid -->
            <div id="travel-images-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @forelse($travelImages as $image)
                    <div class="gallery-item aspect-square bg-white rounded-lg shadow-lg overflow-hidden"
                        data-country="{{ $image->country }}">
                        <img src="{{ Storage::url($image->image) }}" alt="{{ $image->alt ?? 'Travel Photo' }}"
                            class="w-full h-full object-cover rounded-lg shadow-md hover:shadow-xl transition-shadow cursor-pointer gallery-trigger" />
                    </div>
                @empty
                    <div class="col-span-full text-center text-gray-500 py-8">
                        No travel photos available at the moment.
                    </div>
                @endforelse
            </div>

            <!-- Load More Button -->
            @if ($travelImages->count() >= 8)
                <div class="text-center mt-8">
                    <button id="travel-load-more-btn"
                        class="bg-bangladesh-green hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition-colors"
                        data-page="2">
                        Load More
                    </button>
                </div>
            @endif
        </div>
    </section>

    <section id="news" class="py-10 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">News & Press</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/1.png" alt="Newspaper Article" class="w-full h-48 object-cover">
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/2.png" alt="Magazine Feature" class="w-full h-48 object-cover">
                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/03.JPG" alt="Travel Feature" class="w-full h-48 object-cover">

                </div>
                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/4.PNG" alt="Award Ceremony" class="w-full h-48 object-cover">

                </div>

                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/5.PNG" alt="Interview" class="w-full h-48 object-cover">

                </div>

                <div class="bg-gray-50 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="news/6.JPG" alt="Concert Review" class="w-full h-48 object-cover">

                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">Blog</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/2.JPG" alt="Music Journey" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">January 15, 2024</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">My Musical Journey: From Dreams to
                            Reality</h3>
                        <p class="text-gray-600 mb-4">Reflecting on the path that led me to become a professional
                            musician and the lessons learned along the way...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/3.JPG" alt="Travel Tips" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">December 20, 2023</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">Travel Tips for First-Time
                            International Travelers</h3>
                        <p class="text-gray-600 mb-4">Essential advice for Bangladeshi travelers planning their first
                            international trip...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/4.JPG" alt="Music Production" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">November 10, 2023</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">Behind the Scenes: Music Production at
                            BD SoundLab</h3>
                        <p class="text-gray-600 mb-4">A glimpse into the creative process and technology behind our
                            music production...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/5.JPG" alt="Cultural Exchange" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">October 5, 2023</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">Music as a Bridge: Cultural Exchange
                            Through Art</h3>
                        <p class="text-gray-600 mb-4">How music helps connect different cultures and creates
                            understanding...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/6.JPG" alt="Travel Photography" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">September 18, 2023</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">Capturing Memories: Travel Photography
                            Tips</h3>
                        <p class="text-gray-600 mb-4">How to take stunning photos during your travels and preserve
                            memories...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>

                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="images/7.JPG" alt="Business Journey" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">August 25, 2023</div>
                        <h3 class="text-xl font-bold text-bangladesh-green mb-3">Building BD HOLIDAYS: From Passion to
                            Business</h3>
                        <p class="text-gray-600 mb-4">The story behind starting BD HOLIDAYS and turning travel passion
                            into business...</p>
                        <a href="#" class="text-bangladesh-green hover:underline">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center text-bangladesh-green mb-12">
                Get In Touch
            </h2>

            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h3 class="text-2xl font-bold text-bangladesh-green mb-6">
                        Contact Information
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <i class="fas fa-phone text-bangladesh-green text-xl mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Phone Numbers</h4>
                                <p class="text-gray-600">+88 01724-184826</p>
                                <p class="text-gray-600">+88 01712-369343</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <i class="fas fa-envelope text-bangladesh-green text-xl mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Email</h4>
                                <p class="text-gray-600">contact@mrarakib.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-bangladesh-green text-xl mr-4 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Address</h4>
                                <p class="text-gray-600">
                                    Momin Doctor Bari<br />Gopai, Noakhali, 3802<br />Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Business Links -->
                    <div class="mt-8">
                        <h4 class="text-xl font-bold text-bangladesh-green mb-4">
                            Present Address
                        </h4>
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-bangladesh-green text-xl mr-4 mt-1"></i>
                            <div>
                                <p class="text-gray-600">
                                    83/5 West Rampura<br />Wapda Road<br />1219 Dhaka
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h3 class="text-2xl font-bold text-bangladesh-green mb-6">
                        Send Message
                    </h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                            <input type="text" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-bangladesh-green focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-bangladesh-green focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                            <input type="text" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-bangladesh-green focus:border-transparent" />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                            <textarea rows="5" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-bangladesh-green focus:border-transparent"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-bangladesh-green text-white py-3 px-6 rounded-lg hover:bg-green-700 transition-colors font-semibold">
                            <i class="fas fa-paper-plane mr-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-bangladesh-green text-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- About Column -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Robiul Alam Rakib</h3>
                    <p class="text-green-100 mb-4">
                        Musician, Composer, Travel Vlogger, and Entrepreneur passionate
                        about creating meaningful connections through music and travel.
                    </p>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="#home" class="text-green-200 hover:text-white transition-colors">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="text-green-200 hover:text-white transition-colors">About</a>
                        </li>
                        <li>
                            <a href="#music" class="text-green-200 hover:text-white transition-colors">Music</a>
                        </li>
                        <li>
                            <a href="#ghurbaz" class="text-green-200 hover:text-white transition-colors">Ghurbaz</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-green-200 hover:text-white transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Me</h3>
                    <ul class="space-y-2">
                        <a href="https://en.m.wikipedia.org/wiki/User:Robiul_Alam_Rakib"></a>
                        <li class="text-green-200"><a href="https://web.facebook.com/mra.rakib">My Facebook</a></li>
                        <li class="text-green-200"><a href="https://www.tiktok.com/@robiulalamrakib">My Tiktok</a>
                        </li>
                        <li class="text-green-200"><a href="https://en.m.wikipedia.org/wiki/User:Robiul_Alam_Rakib">My
                                Wikipedia</a></li>
                        <li class="text-green-200"><a href="https://web.facebook.com/Ghurbazbd">Ghurbaz FB Page</a>
                        </li>
                        <li class="text-green-200"><a href="https://web.facebook.com/bdholidays.net">BDH FB Page</a>
                        </li>
                        <li class="text-green-200"><a href="https://www.youtube.com/@ghurbaz826">Ghurbaz YouTube</a>
                        </li>
                        <li class="text-green-200"><a href="https://www.youtube.com/@bdsoundlab826">BD SoundLab
                                YouTube</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Info</h3>
                    <div class="space-y-2 text-green-200">
                        <p><i class="fas fa-phone mr-2"></i>+88 01724-184826</p>
                        <p><i class="fas fa-envelope mr-2"></i>contact@mrarakib.com</p>
                        <p>
                            <i class="fas fa-map-marker-alt mr-2"></i> 83/5 West Rampura<br />Wapda Road<br />1219
                            Dhaka
                        </p>
                    </div>
                </div>
            </div>

            <div class="border-t border-green-600 mt-8 pt-8 text-center">
                <p class="text-green-200">
                    © 2024 Robiul Alam Rakib. All rights reserved. |
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    |
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </p>
            </div>
        </div>
    </footer>
    <div id="imageModal"
        class="modal fixed inset-0 bg-black bg-opacity-80 hidden items-center justify-center z-50 p-4">
        <div class="modal-content relative">
            <!-- Close Button -->
            <button id="closeModal"
                class="close-btn absolute -top-4 -right-4 w-10 h-10 rounded-full text-white hover:bg-red-600 transition-colors z-10 flex items-center justify-center text-xl font-bold">
                ×
            </button>

            <!-- Navigation Arrows -->
            <button id="prevImage"
                class="close-btn absolute left-4 top-1/2 transform -translate-y-1/2 w-10 h-10 rounded-full text-white hover:bg-blue-600 transition-colors z-10 flex items-center justify-center text-xl font-bold">
                ←
            </button>
            <button id="nextImage"
                class="close-btn absolute right-4 top-1/2 transform -translate-y-1/2 w-10 h-10 rounded-full text-white hover:bg-blue-600 transition-colors z-10 flex items-center justify-center text-xl font-bold">
                →
            </button>

            <!-- Full Size Image -->
            <img id="modalImage" src="" alt=""
                class="max-w-full max-h-full object-contain rounded-lg shadow-2xl" />

            <!-- Image Info -->
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 rounded-b-lg">
                <h3 id="modalTitle" class="text-white text-lg font-semibold"></h3>
                <p id="modalInfo" class="text-gray-300 text-sm"></p>
                <p class="text-gray-400 text-xs mt-1">
                    <span id="imageCounter"></span> • Press ESC to close • Use arrow
                    keys to navigate • Hover or click any image
                </p>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        mobileMenuBtn.addEventListener("click", function() {
            mobileMenu.classList.toggle("hidden");
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                    // Close mobile menu if open
                    mobileMenu.classList.add("hidden");
                }
            });
        });

        // Music Filter
        const musicFilters = document.querySelectorAll(".music-filter");
        const musicItems = document.querySelectorAll(".music-item");

        musicFilters.forEach((filter) => {
            filter.addEventListener("click", function() {
                // Remove active class from all filters
                musicFilters.forEach((f) => {
                    f.classList.remove("active", "bg-bangladesh-green", "text-white");
                    f.classList.add("bg-gray-200", "text-gray-700");
                });

                // Add active class to clicked filter
                this.classList.add("active", "bg-bangladesh-green", "text-white");
                this.classList.remove("bg-gray-200", "text-gray-700");

                const category = this.getAttribute("data-category");

                musicItems.forEach((item) => {
                    if (
                        category === "all" ||
                        item.getAttribute("data-category") === category
                    ) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });

        // Gallery Filter
        const galleryFilters = document.querySelectorAll(".gallery-filter");
        const galleryItems = document.querySelectorAll(".gallery-item");

        galleryFilters.forEach((filter) => {
            filter.addEventListener("click", function() {
                // Remove active class from all filters
                galleryFilters.forEach((f) => {
                    f.classList.remove("active", "bg-bangladesh-green", "text-white");
                    f.classList.add("bg-gray-200", "text-gray-700");
                });

                // Add active class to clicked filter
                this.classList.add("active", "bg-bangladesh-green", "text-white");
                this.classList.remove("bg-gray-200", "text-gray-700");

                const country = this.getAttribute("data-country");

                galleryItems.forEach((item) => {
                    if (
                        country === "all" ||
                        item.getAttribute("data-country") === country
                    ) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });

        // Navbar Background Change on Scroll
        window.addEventListener("scroll", function() {
            const nav = document.querySelector("nav");
            if (window.scrollY > 100) {
                nav.classList.remove("bg-white/95");
                nav.classList.add("bg-white");
            } else {
                nav.classList.remove("bg-white");
                nav.classList.add("bg-white/95");
            }
        });

        // Form Submission
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Thank you for your message! I will get back to you soon.");
            this.reset();
        });
    </script>
    <script>
        class ReusableImageGallery {
            constructor() {
                this.modal = document.getElementById("imageModal");
                this.modalImage = document.getElementById("modalImage");
                this.modalTitle = document.getElementById("modalTitle");
                this.modalInfo = document.getElementById("modalInfo");
                this.imageCounter = document.getElementById("imageCounter");
                this.closeModal = document.getElementById("closeModal");
                this.prevButton = document.getElementById("prevImage");
                this.nextButton = document.getElementById("nextImage");

                this.images = [];
                this.currentIndex = 0;
                this.hoverTimeout = null;

                this.init();
            }

            init() {
                this.bindEvents();
                this.updateImageList();

                // Watch for new images added dynamically
                this.observeNewImages();
            }

            updateImageList() {
                this.images = Array.from(
                    document.querySelectorAll(".gallery-trigger")
                );
                this.bindImageEvents();
            }

            bindImageEvents() {
                this.images.forEach((img, index) => {
                    // Remove existing listeners to prevent duplicates
                    img.removeEventListener("click", this.handleImageClick);
                    img.removeEventListener("mouseenter", this.handleImageHover);

                    // Add both click and hover events
                    img.addEventListener("click", (e) =>
                        this.handleImageClick(e, index)
                    );
                    img.addEventListener("mouseenter", (e) =>
                        this.handleImageHover(e, index)
                    );
                });
            }

            handleImageClick = (e, index) => {
                this.currentIndex = index;
                this.showModal();
            };

            // handleImageHover = (e, index) => {
            //     // Add a small delay to prevent accidental triggers
            //     clearTimeout(this.hoverTimeout);
            //     this.hoverTimeout = setTimeout(() => {
            //         this.currentIndex = index;
            //         this.showModal();
            //     }, 500); // 500ms delay
            // };

            showModal() {
                const img = this.images[this.currentIndex];
                const container =
                    img.closest("[data-country], [data-category], .gallery-item") ||
                    img.parentElement;

                this.modalImage.src = img.src;
                this.modalImage.alt = img.alt;
                this.modalTitle.textContent = img.alt || "Image";

                // Get additional info from data attributes or container
                let info = "";
                if (container.dataset.country) {
                    info = `Country: ${container.dataset.country}`;
                } else if (container.dataset.category) {
                    info = `Category: ${container.dataset.category}`;
                }
                this.modalInfo.textContent = info;

                this.imageCounter.textContent = `${this.currentIndex + 1} of ${
            this.images.length
          }`;

                this.modal.classList.remove("hidden");
                this.modal.classList.add("flex");
                document.body.style.overflow = "hidden";
            }

            hideModal = () => {
                this.modal.classList.add("hidden");
                this.modal.classList.remove("flex");
                document.body.style.overflow = "auto";
            };

            showPrevImage = () => {
                this.currentIndex =
                    (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.showModal();
            };

            showNextImage = () => {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.showModal();
            };

            bindEvents() {
                // Close modal events
                this.closeModal.addEventListener("click", this.hideModal);
                this.modal.addEventListener("click", (e) => {
                    if (e.target === this.modal) this.hideModal();
                });

                // Navigation events
                this.prevButton.addEventListener("click", this.showPrevImage);
                this.nextButton.addEventListener("click", this.showNextImage);

                // Keyboard events
                document.addEventListener("keydown", (e) => {
                    if (!this.modal.classList.contains("hidden")) {
                        switch (e.key) {
                            case "Escape":
                                this.hideModal();
                                break;
                            case "ArrowLeft":
                                e.preventDefault();
                                this.showPrevImage();
                                break;
                            case "ArrowRight":
                                e.preventDefault();
                                this.showNextImage();
                                break;
                        }
                    }
                });

                // Prevent modal from closing when clicking on content
                document
                    .querySelector(".modal-content")
                    .addEventListener("click", (e) => {
                        e.stopPropagation();
                    });
            }

            observeNewImages() {
                // Use MutationObserver to detect new images added to the DOM
                const observer = new MutationObserver(() => {
                    this.updateImageList();
                });

                observer.observe(document.body, {
                    childList: true,
                    subtree: true,
                });
            }
        }

        // Initialize the gallery when DOM is loaded
        document.addEventListener("DOMContentLoaded", () => {
            new ReusableImageGallery();
        });

        // Also initialize immediately in case DOM is already loaded
        if (document.readyState === "loading") {
            // DOM not yet loaded
        } else {
            // DOM already loaded
            new ReusableImageGallery();
        }
    </script>
    <script>
        // Obfuscated JavaScript functions
        (function() {
            'use strict';

            // Disable right-click context menu
            // document.addEventListener('contextmenu', function(e) {
            //     e.preventDefault();
            //     showWarning('Right-click is disabled on this page.');
            //     return false;
            // });

            // Disable common keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                // Disable F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U, Ctrl+S, Ctrl+A, Ctrl+P, Ctrl+C, Ctrl+V
                if (e.keyCode === 123 || // F12
                    (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74)) || // Ctrl+Shift+I/J
                    (e.ctrlKey && e.keyCode === 85) || // Ctrl+U
                    (e.ctrlKey && e.keyCode === 83) || // Ctrl+S
                    (e.ctrlKey && e.keyCode === 65) || // Ctrl+A
                    (e.ctrlKey && e.keyCode === 80) || // Ctrl+P
                    (e.ctrlKey && e.keyCode === 67) || // Ctrl+C
                    (e.ctrlKey && e.keyCode === 86) || // Ctrl+V
                    (e.ctrlKey && e.keyCode === 88)) { // Ctrl+X
                    e.preventDefault();
                    showWarning('This keyboard shortcut is disabled.');
                    return false;
                }
            });

            // Disable text selection with mouse
            // document.addEventListener('selectstart', function(e) {
            //     e.preventDefault();
            //     return false;
            // });
            // document.addEventListener('dragstart', function(e) {
            //     e.preventDefault();
            //     return false;
            // });

            // Basic developer tools detection
            let devtools = {
                open: false,
                orientation: null
            };
            const threshold = 160;

            function detectDevTools() {
                if (window.outerHeight - window.innerHeight > threshold ||
                    window.outerWidth - window.innerWidth > threshold) {
                    if (!devtools.open) {
                        devtools.open = true;
                        document.getElementById('devToolsWarning').style.display = 'block';
                        // Could redirect or hide content here
                        // window.location.href = 'about:blank';
                    }
                } else {
                    devtools.open = false;
                    document.getElementById('devToolsWarning').style.display = 'none';
                }
            }

            // Check for dev tools every 500ms
            setInterval(detectDevTools, 500);

            // Disable printing
            window.addEventListener('beforeprint', function(e) {
                e.preventDefault();
                showWarning('Printing is not allowed on this page.');
                return false;
            });

            // Clear clipboard
            document.addEventListener('copy', function(e) {
                e.clipboardData.setData('text/plain', '');
                e.preventDefault();
            });

            // Show warning function
            function showWarning(message) {
                const existingWarning = document.querySelector('.temp-warning');
                if (existingWarning) {
                    existingWarning.remove();
                }

                const warning = document.createElement('div');
                warning.className = 'temp-warning';
                warning.style.cssText = `
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: rgba(255, 0, 0, 0.9);
                    color: white;
                    padding: 15px;
                    border-radius: 5px;
                    z-index: 10000;
                    font-family: Arial, sans-serif;
                    font-size: 14px;
                    box-shadow: 0 4px 8px rgba(0,0,0,0.3);
                `;
                warning.textContent = message;
                document.body.appendChild(warning);

                setTimeout(() => {
                    if (warning.parentNode) {
                        warning.parentNode.removeChild(warning);
                    }
                }, 3000);
            }

            // Disable image saving
            document.addEventListener('dragstart', function(e) {
                if (e.target.tagName === 'IMG') {
                    e.preventDefault();
                }
            });

            // Obfuscated console warning
            console.log('%cSTOP!', 'color: red; font-size: 50px; font-weight: bold;');
            console.log('%cThis is a browser feature intended for developers. Unauthorized access is prohibited.',
                'color: red; font-size: 16px;');

            // Simple anti-debugging
            let start = Date.now();
            debugger;
            if (Date.now() - start > 100) {
                // Debugger was likely open
                showWarning('Debugging detected!');
            }

            // Disable text highlighting with CSS injection
            const style = document.createElement('style');
            style.textContent = `
                ::selection { background: transparent; }
                ::-moz-selection { background: transparent; }
            `;
            document.head.appendChild(style);

            // Monitor for DOM changes (basic tamper detection)
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList' && mutation.target !== document.body) {
                        // Could implement more sophisticated tamper detection here
                    }
                });
            });

            observer.observe(document, {
                childList: true,
                subtree: true,
                attributes: true
            });

        })();

        // Additional obfuscated protection (example of code obfuscation)
        const _0x1234 = ['log', 'warn', 'This page is protected'];
        (function(_0x5678, _0x9abc) {
            const _0xdef0 = function(_0x1111) {
                while (--_0x1111) {
                    _0x5678['push'](_0x5678['shift']());
                }
            };
            _0xdef0(++_0x9abc);
        }(_0x1234, 0x123));

        // Disable common developer shortcuts in different browsers
        document.onkeydown = function(e) {
            if (e.which === 123) return false; // F12
            if (e.ctrlKey && e.shiftKey && e.which === 73) return false; // Ctrl+Shift+I
            if (e.ctrlKey && e.which === 85) return false; // Ctrl+U
        };

        // Load More Images Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.getElementById('load-more-btn');
            const imagesGrid = document.getElementById('images-grid');

            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    const currentPage = parseInt(this.getAttribute('data-page'));
                    loadMoreImages(currentPage);
                });
            }
        });

        function loadMoreImages(page) {
            const loadMoreBtn = document.getElementById('load-more-btn');
            const imagesGrid = document.getElementById('images-grid');

            // Show loading state
            loadMoreBtn.textContent = 'Loading...';
            loadMoreBtn.disabled = true;

            fetch(`/load-more-images?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest', // Make Laravel think it's AJAX
                        'Accept': 'application/json' // Laravel will know to send JSON
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);

                    // Add new images to the grid
                    data.images.forEach(image => {
                        const imageElement = document.createElement('div');
                        imageElement.className = 'gallery-item bg-white rounded-lg shadow-lg overflow-hidden';
                        imageElement.setAttribute('data-image-id', image.id);

                        imageElement.innerHTML = `
                <div class="aspect-video bg-gray-200">
                    <img src="/storage/${image.image}" 
                         alt="Gallery Image"
                         class="w-full h-full object-cover gallery-trigger" />
                </div>
            `;

                        imagesGrid.appendChild(imageElement);
                    });

                    // Update button state
                    if (data.hasMorePages) {
                        loadMoreBtn.setAttribute('data-page', data.nextPage);
                        loadMoreBtn.textContent = 'Load More Images';
                        loadMoreBtn.disabled = false;
                    } else {
                        loadMoreBtn.style.display = 'none';
                    }

                    // Reinitialize gallery for new images
                    if (window.ReusableImageGallery) {
                        new ReusableImageGallery();
                    }
                })
                .catch(error => {
                    console.error('Error loading more images:', error);
                    loadMoreBtn.textContent = 'Error - Try Again';
                    loadMoreBtn.disabled = false;
                });
        }
    </script>
    <script>
        /**
         * Song Load More Functionality
         */
        function initSongLoadMore() {
            const loadMoreBtn = document.getElementById('load-more-btn');
            const videosGrid = document.getElementById('videos-grid');

            if (loadMoreBtn && videosGrid) {
                loadMoreBtn.addEventListener('click', function() {
                    const currentPage = parseInt(this.getAttribute('data-page'));
                    const button = this;

                    // Disable button and show loading state
                    button.disabled = true;
                    button.textContent = 'Loading...';

                    fetch(`/songs/load-more?page=${currentPage}`)
                        .then(response => response.json())
                        .then(data => {
                            if (data.songs && data.songs.length > 0) {
                                // Add new songs to the grid
                                data.songs.forEach(song => {
                                    const videoId = extractVideoId(song.youtube_url);
                                    if (videoId) {
                                        const songElement = createSongElement(song, videoId);
                                        videosGrid.appendChild(songElement);
                                    }
                                });

                                // Update button state
                                if (data.hasMore) {
                                    button.setAttribute('data-page', data.nextPage);
                                    button.disabled = false;
                                    button.textContent = 'Load More';
                                } else {
                                    button.style.display = 'none';
                                }
                            }
                        })
                        .catch(error => {
                            console.error('Error loading more songs:', error);
                            button.disabled = false;
                            button.textContent = 'Load More';
                        });
                });
            }
        }

        /**
         * Extract YouTube video ID from URL
         */
        function extractVideoId(url) {
            const regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
            const match = url.match(regex);
            return match ? match[1] : null;
        }

        /**
         * Create song element for the grid
         */
        function createSongElement(song, videoId) {
            const div = document.createElement('div');
            div.className = 'gallery-item bg-white rounded-lg shadow-lg overflow-hidden';
            div.setAttribute('data-video-id', videoId);

            div.innerHTML = `
      <div class="aspect-video bg-gray-200 relative">
        <iframe class="w-full h-full absolute inset-0"
          src="https://www.youtube.com/embed/${videoId}"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-900 mb-2">${song.title}</h3>
        ${song.description ? `<p class="text-gray-600 text-sm">${song.description.substring(0, 100)}${song.description.length > 100 ? '...' : ''}</p>` : ''}
      </div>
    `;

            return div;
        }

        // Initialize song load more functionality
        window.addEventListener('load', initSongLoadMore);
    </script>
</body>

</html>
