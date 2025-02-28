<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Streaming - Discover & Earn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Hide scrollbar for the carousel */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        .text-yume {
            color: #FF7F3F;
        }

        .bg-yume-contrast {
            background-color: rgb(153, 139, 252);
        }

        .bg-yume-contrast:hover {
            background-color: rgb(100, 79, 251);
        }

        .bg-yume {
            background-color: #ff7F3F;
        }

        .bg-yume:hover {
            background-color: rgb(255, 91, 13);
        }

        #mobile-menu-btn {
            cursor: pointer;
        }

        /* Mobile Menu Animation */
        #mobile-menu.show {
            display: flex;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-gray-100">

<header class="absolute top-0 left-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME" class="h-10">
        </a>

        <!-- Desktop Navigation -->
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="text-white hover:text-yume font-medium transition">Home</a>
            <a href="publishing.php" class="text-white hover:text-yume font-medium transition">Publishing</a>
            <a href="plan.php" class="text-white hover:text-yume font-medium transition">Affiliate</a>
            <a href="rewards.php" class="text-white hover:text-yume font-medium transition">Rewards</a>
            <a href="{{ route('faq') }}" class="text-white hover:text-yume font-medium transition">FAQ</a>

            <!-- Wrapping Sign In button in a flex container to align properly -->
            <div class="flex items-center">
                <a href="{{ route('index') }}"
                   class="bg-yume hover:bg-yume-contrast text-white font-semibold py-2 px-6 rounded-full transition shadow-md">
                    Sign In
                </a>
            </div>
        </nav>

        <!-- Mobile Menu Button (Hamburger Icon) -->
        <button id="mobile-menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-50 relative">
            <span class="w-6 h-0.5 bg-white transition-transform" id="bar1"></span>
            <span class="w-6 h-0.5 bg-white transition-transform" id="bar2"></span>
            <span class="w-6 h-0.5 bg-white transition-transform" id="bar3"></span>
        </button>
    </div>

    <!-- Fullscreen Mobile Menu (Hidden by default) -->
    <nav id="mobile-menu"
         class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="text-xl hover:text-yume font-medium">Home</a>
        <a href="publishing.php" class="text-xl hover:text-yume font-medium">Publishing</a>
        <a href="plan.php" class="text-xl hover:text-yume font-medium">Affiliate</a>
        <a href="rewards.php" class="text-xl hover:text-yume font-medium">Rewards</a>
        <a href="{{ route('faq') }}" class="text-xl hover:text-yume font-medium">FAQ</a>
        <a href="{{ route('login') }}"
           class="bg-yume hover:bg-yume-contrast text-white font-semibold py-3 px-6 rounded-full transition">Sign In</a>
    </nav>
</header>
<section class="relative bg-black text-white">
    <div class="relative w-full h-[70vh] flex items-center justify-center overflow-hidden">
        <!-- Background Gradient and Subtle Waves -->
        <div class="absolute inset-0 bg-gradient-to-r from-black via-gray-900 to-black opacity-90"></div>

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
            <svg class="w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="wave-pattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0 50 Q25 0 50 50 T100 50" fill="none" stroke="rgba(255,255,255,0.12)"
                              stroke-width="2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#wave-pattern)"/>
            </svg>
        </div>

        <!-- Animated Equalizer Bars -->
        <div class="absolute bottom-0 left-0 right-0 h-24 flex items-end justify-center space-x-2 z-0">
            <div class="w-3 bg-pink-500 animate-pulse h-10"></div>
            <div class="w-3 bg-blue-500 animate-pulse h-14 delay-100"></div>
            <div class="w-3 bg-purple-500 animate-pulse h-18 delay-200"></div>
            <div class="w-3 bg-pink-500 animate-pulse h-12 delay-300"></div>
            <div class="w-3 bg-blue-500 animate-pulse h-16 delay-400"></div>
        </div>

        <!-- Main Banner Content -->
        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                Discover & Stream Fresh New Music
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-gray-300">
                YUME connects emerging artists with global listeners. Be the first to discover tomorrow’s stars.
            </p>
            <div class="mt-8 flex flex-col items-center gap-4 md:flex-row md:justify-center">
                <a href="#"
                   class="inline-block text-center px-6 py-3 rounded-full bg-yume text-white font-bold uppercase tracking-wide transition duration-300"
                   style="width: 192.14px">
                    Join as Artist
                </a>
                <a href="#"
                   class="inline-block text-center px-6 py-3 rounded-full bg-yume-contrast text-white font-bold uppercase tracking-wide transition duration-300"
                   style="width: 192.14px">
                    Join as Listener
                </a>
            </div>

        </div>

        <!-- Ambient Neon Blobs -->
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-blue-500 rounded-full blur-3xl opacity-30 mix-blend-screen"></div>
        <div
            class="absolute bottom-0 right-0 w-72 h-72 bg-pink-500 rounded-full blur-3xl opacity-30 mix-blend-screen"></div>
    </div>
</section>
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12">
            Frequently Asked Questions
        </h2>
        <div class="space-y-6 max-w-4xl mx-auto">
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What is YUME?
                        </span>
                        <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                             fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                        </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        <div>YUME is a music discovery platform where listeners stream future hit makers and are rewarded for doing so. Listeners are rewarded for streaming music and sharing the experience with others, completing the robust ecosystem where musicians and the community of music fans thrive.</div>
                        <div class="mt-2">YUME is a comprehensive music publishing and record label solution, combined with a one-stop-shop platform designed to bring the artist’s narrative to a wider audience.</div>
                    </p>
                </div>
            </div>
{{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            As an artist, how to connect with Yume?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        You may connect with Yume through our publishing page: https://www.yume.global/publishing.php. <br />
                        Fill out the form and express your interest in joining Yume.
                    </p>
                </div>
            </div>
{{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Is it exclusive to English songs?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        No. We will consider any language if the song is good and of great quality.
                    </p>
                </div>
            </div>
{{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What genre do you need?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Any genre will be considered if the song has a good-quality recording and radio radio-ready.
                    </p>
                </div>
            </div>
{{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How do I publish my songs?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        First, you need to fill out the form on the publishing page expressing your interest in publishing your song with us. After that, someone from Yume will connect with you for a screening of your songs. If your songs pass, you will proceed with the signing of the agreement and provide the necessary requirements. Once everything is done, we will publish your songs right away and distribute them to streaming platforms around the world.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const faqToggles = document.querySelectorAll('.faq-toggle');

    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const content = toggle.nextElementSibling;
            const icon = toggle.querySelector('svg');

            content.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');

            // Close others (optional - remove if you want multiple open at once)
            faqToggles.forEach(otherToggle => {
                if (otherToggle !== toggle) {
                    otherToggle.nextElementSibling.classList.add('hidden');
                    otherToggle.querySelector('svg').classList.remove('rotate-180');
                }
            });
        });
    });

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('show');
    });
</script>
</body>
</html>
