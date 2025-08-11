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
        <div class="container mx-auto">
            <!-- Navigation -->
            <div class="mb-8">
                <a href="{{ route('admin.articles.index') }}"
                    class="text-gray-600 hover:text-gray-800 flex items-center">
                    ← Back to Articles
                </a>
            </div>

            <!-- Article Header -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                @if ($article->image)
                    <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                        class="w-full h-64 md:h-96 object-cover">
                @endif

                <div class="p-8">
                    <!-- Meta Information -->
                    <div class="flex justify-between items-center mb-4">
                        <div class="text-sm text-gray-500">{{ $article->formatted_date }}</div>

                        <div class="flex space-x-2">
                            <a href="{{ route('admin.articles.edit', $article) }}"
                                class="text-blue-600 hover:text-blue-800 flex items-center space-x-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                <span>Edit</span>
                            </a>

                            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this article?')"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-800 flex items-center space-x-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Title -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $article->title }}</h1>

                    <!-- Status Badge -->
                    <div class="mb-6">
                        @if ($article->is_published)
                            <span
                                class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">Published</span>
                        @else
                            <span
                                class="inline-block bg-gray-100 text-gray-800 text-sm px-3 py-1 rounded-full">Draft</span>
                        @endif
                    </div>

                    <!-- Excerpt -->
                    <div class="text-xl text-gray-600 mb-8 italic border-l-4 border-green-500 pl-6">
                        {{ $article->excerpt }}
                    </div>

                    <!-- Content -->
                    <div class="prose prose-lg max-w-none">
                        {!! $article->content !!}
                    </div>

                    <!-- Article Footer -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-500">
                                Created: {{ $article->created_at->format('F j, Y \a\t g:i A') }}
                                @if ($article->updated_at->ne($article->created_at))
                                    <br>Updated: {{ $article->updated_at->format('F j, Y \a\t g:i A') }}
                                @endif
                            </div>

                            <!-- Share Buttons -->
                            <div class="flex space-x-3">
                                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article->title) }}&url={{ urlencode(request()->fullUrl()) }}"
                                    target="_blank" class="text-blue-400 hover:text-blue-600">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                    target="_blank" class="text-blue-600 hover:text-blue-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
<footer class="bg-bangladesh-green text-white py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
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
</body>

</html>
