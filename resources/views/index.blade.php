<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME</title>
    <link rel="icon" href="{{ asset('img/yume-logo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

@include('layouts.header')

<section id="hero" class="relative bg-black text-white">
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
                <a href="{{ route('publishing') }}"
                   class="inline-block text-center px-6 py-3 rounded-full bg-yume text-white font-bold uppercase tracking-wide transition duration-300"
                   style="width: 192.14px">
                    Join as Artist
                </a>
                <a href="{{ route('register') }}"
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
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                    Love music? Now you can turn that passion into rewards.
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    YUME.global is more than just a music platform — it's a movement where passionate listeners and
                    independent artists come together. Stream exclusive tracks, uncover future stars, and earn rewards
                    for being part of the next big thing.
                </p>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Spotlight Rising Talent</h4>
                            <p class="text-gray-600 text-base">
                                Aspiring artists gain exposure and grow their fanbase, directly connecting with music
                                lovers eager for fresh sounds.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Listen & Get Rewarded</h4>
                            <p class="text-gray-600 text-base">
                                Stream exclusive new music and earn rewards just for discovering future hits — the more
                                you listen, the more you earn.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900">Grow the Music Community</h4>
                            <p class="text-gray-600 text-base">
                                Invite friends, share your discoveries, and help build a thriving global music platform
                                — where every voice matters.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>


            <!-- Image Section -->
            <div class="relative text-center">
                <div class="relative rounded-lg overflow-hidden w-full max-w-md mx-auto">
                    <img src="{{ asset('img/landing-page-1.png') }}" alt="YUME Platform Showcase" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-gray-900 text-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Text Content Section -->
            <div class="order-1 md:order-2">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-wide mb-6">
                    Your Stage to Shine on the <span class="text-yume">Global Music Scene</span>
                </h2>

                <p class="text-lg text-gray-300 leading-relaxed mb-8">
                    YUME.global empowers aspiring artists by providing a global platform where their music can be heard,
                    loved, and rewarded. Whether you’re an emerging indie star or an undiscovered voice, YUME.global
                    helps you break into the world stage.
                </p>

                <ul class="space-y-6">
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-white">Stream to Global Audiences</h4>
                            <p class="text-gray-300 text-base">
                                Reach music fans across continents, expanding your fanbase and gaining recognition where
                                it matters most.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-white">Headline International Events</h4>
                            <p class="text-gray-300 text-base">
                                Stand out from the crowd and get the chance to perform at international concerts and
                                exclusive YUME.global events.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-semibold text-white">Publish Your Music for Free</h4>
                            <p class="text-gray-300 text-base">
                                Share your songs with the world — no fees, no hassle. Just pure music, directly to your
                                future fans.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="order-2 md:order-1 text-center">
                <div class="relative rounded-lg overflow-hidden w-full max-w-md mx-auto">
                    <img src="{{ asset('img/landing-page-2.png') }}" alt="Aspiring Artist Platform"
                         class="w-full h-auto">
                </div>
            </div>

        </div>
    </div>
</section>
<section id="feature-sections" class="bg-white py-20">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">

        <!-- Section Header -->
        <div class="text-center pb-16">
            <div class="flex justify-center items-center space-x-4">
                <div class="text-3xl md:text-5xl font-extrabold text-gray-900">
                    YUME ARTISTS
                </div>
            </div>
            <p class="mt-6 text-lg md:text-xl text-gray-700 leading-relaxed max-w-3xl mx-auto">
                Meet the rising stars shaping the future of music. YUME’s global community is discovering tomorrow’s
                chart-toppers today. Join our roster of talented artists and take the first step toward living your
                dream.
            </p>
        </div>

        <!-- Artist Carousel -->
        <div class="overflow-hidden">
            <!-- Mobile: Horizontal Scroll with 2 images visible at a time -->
            <div class="flex overflow-x-auto pb-6 scrollbar-hide snap-x snap-mandatory md:hidden">
                @foreach (range(1, 5) as $index)
                    <div class="relative overflow-hidden rounded-xl flex-none w-[calc(50%-0.5rem)] mx-1 snap-center"
                         style="aspect-ratio: 3/4;">
                        <img src="{{ asset("img/yume-artist-$index.png") }}" class="w-full h-full object-contain"
                             alt="YUME Artist {{ $index }}">
                    </div>
                @endforeach
            </div>

            <!-- Desktop: Grid Layout -->
            <div class="hidden md:grid grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach (range(1, 5) as $index)
                    <div class="relative overflow-hidden rounded-xl w-full" style="aspect-ratio: 3/4;">
                        <img src="{{ asset("img/yume-artist-$index.png") }}" class="w-full h-full object-contain"
                             alt="YUME Artist {{ $index }}">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="text-center mt-12">
            <a href="{{ route('publishing') }}"
               class="inline-block px-12 py-4 text-xl font-extrabold text-white rounded-full shadow-2xl
       bg-yume
       transform hover:scale-105 focus:scale-105 transition-transform duration-300 ease-out
       shadow-pink-400/50 tracking-wide
       md:px-16 md:py-6 md:text-3xl
       cursor-pointer">
                Get Published for FREE
            </a>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-[#162e60] py-16">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">

        <!-- Section Title - Enhanced with YUME Logo Color -->
        <div class="text-center mb-12">
            <div class="flex flex-col justify-center items-center space-y-4">
                <div class="hidden md:block w-1/4"></div>
                <div class="text-center text-4xl md:text-5xl font-extrabold uppercase tracking-wide text-yume">
                    Listen to YUME
                </div>
            </div>
        </div>

        <!-- YouTube Playlist Embed - Taller Version -->
        <div class="flex justify-center">
            <div class="w-full max-w-6xl">
                <iframe
                    src="https://www.youtube.com/embed/videoseries?si=AUMCF01JQKqOoHSv&amp;list=PLjLOGm1HDJ7gT61c9qGutu-hw5Fye3iLq&amp;rel=0&amp;autoplay=0"
                    title="YUME Artists Playlist"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    class="w-full h-[300px] md:h-[500px] lg:h-[600px] rounded-lg shadow-lg">
                </iframe>
            </div>
        </div>

    </div>
</section>

<section class="py-16 bg-white-900">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div>
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight text-gray-900 mb-6">
                    Finally, your passion for music pays.
                </h2>
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    YUME makes a true music listener's dream come true: to be able to discover and support artists; and
                    be rewarded for doing so.
                </p>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Freemium Account</h4>
                            <p class="text-gray-600 text-base">
                                With a FREE account, get a chance to receive exclusive access to concerts, limited
                                edition merchandise, or VIP experiences.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-7 h-7 mt-1 mr-4 flex-shrink-0">
                        <div>
                            <h4 class="text-xl font-bold text-gray-900">Premium Account</h4>
                            <p class="text-gray-600 text-base">
                                With a PREMIUM Membership, earn income when you help grow the YUME community.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="relative text-center">
                <div class="relative rounded-lg overflow-hidden w-full max-w-md mx-auto">
                    <img src="{{ asset('img/landing-page-3.png') }}" alt="YUME Platform Showcase" class="w-full h-auto">
                </div>
            </div>
        </div>

        <!-- CTA Section with proper spacing -->
        <div class="text-center pt-16 md:pt-20 lg:pt-24">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight">
                Stream. Share. Get Paid. Simple.
            </h2>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed pt-6 pb-10 max-w-4xl mx-auto">
                Join the <span class="font-semibold text-[#FF7F3F]">Powerline™</span>, YUME’s community of tastemakers
                that get instantly rewarded <br class="hidden sm:inline">
                just by listening to music and sharing their discoveries with the world.
            </p>
            <div class="flex justify-center">
                <img src="{{ asset('img/img-feature.png') }}"
                     class="w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl rounded-lg">
            </div>
        </div>


        <!-- Call to Action Button with space below -->
        <div class="text-center mt-12">
            <a href="{{ route('register') }}"
               class="inline-block px-12 py-4 text-xl font-extrabold text-white rounded-full shadow-2xl
       bg-yume-contrast
       transform hover:scale-105 focus:scale-105 transition-transform duration-300 ease-out
       shadow-pink-400/50 tracking-wide
       md:px-16 md:py-6 md:text-3xl
       cursor-pointer">
                Create an Account
            </a>
        </div>
    </div>
</section>

<section id="feature-sections" class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <div class="text-3xl md:text-5xl font-extrabold text-gray-900">What YUME Listeners Say</div>
        </div>

        <div class="overflow-hidden">
            <div class="flex space-x-4 overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                <!-- Review 1 -->
                <div class="min-w-[300px] snap-start">
                    <div class="rounded-lg bg-white p-4">
                        <img src="{{ asset('img/yume-listener-1.png') }}"
                             alt="YUME Review" class="w-full rounded-md">
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="min-w-[300px] snap-start">
                    <div class="rounded-lg bg-white p-4">
                        <img src="{{ asset('img/yume-listener-2.png') }}"
                             alt="YUME Review" class="w-full rounded-md">
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="min-w-[300px] snap-start">
                    <div class="rounded-lg bg-white p-4">
                        <img src="{{ asset('img/yume-listener-3.png') }}"
                             alt="YUME Review" class="w-full rounded-md">
                    </div>
                </div>

                <!-- Add more reviews as needed -->
            </div>
        </div>
    </div>
</section>
<section id="news-section" class="bg-gray-200 py-16">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <!-- Title -->
        <div class="text-center pb-10">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900">In The News</h2>
        </div>

        <!-- Images Grid (side by side on md+, stacked on mobile) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- News Image 1 -->
            <div class="flex justify-center">
                <img src="{{ asset('img/img-news-1.png') }}"
                     alt="YUME News"
                     class="w-full max-w-md rounded-lg shadow-lg cursor-pointer hover:opacity-80 transition"
                     onclick="window.open('https://www.wicz.com/story/50475038/yume-unveils-game-changing-streaming-and-music-publishing-platform','_blank')">
            </div>

            <!-- News Image 2 (Add top padding on mobile for spacing like pt-xs-40) -->
            <div class="flex justify-center md:pt-0 pt-10">
                <img src="{{ asset('img/img-news-2.png') }}"
                     alt="YUME News"
                     class="w-full max-w-md rounded-lg shadow-lg cursor-pointer hover:opacity-80 transition"
                     onclick="window.open('https://philippines-startup.biz/%e3%83%97%e3%83%ac%e3%82%b9%e3%83%aa%e3%83%aa%e3%83%bc%e3%82%b9/?t=yume-sets-the-stage-for-a-more-rewarding-music-experience-for-filipino-music-listeners&amp;rid=1547','_blank')">
            </div>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-5xl font-extrabold text-gray-900 tracking-wide">AS SEEN ON</h2>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6">
            <!-- Brand Logos -->
            <a href="https://www.benzinga.com/pressreleases/24/02/ab37217186/yume-unveils-game-changing-streaming-and-music-publishing-platform"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ec881fff-1d06-43da-18e1-4460b8922c00/public"
                    alt="Featured on Benzinga"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.barchart.com/story/news/24209395/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/d1d24201-6f48-4c9b-6ed2-46464eac1900/public"
                    alt="Featured on BarChart"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.theglobeandmail.com/investing/markets/markets-news/GetNews/24209404/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/7acfc7a6-2b16-4ba6-01d5-96b99d462f00/public"
                    alt="Featured on The Globe And Mail"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.wicz.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/3fc4af63-e906-4112-d141-d504c6ea5c00/public"
                    alt="Featured on FOX 40"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.newschannelnebraska.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/31f90197-ad2e-4772-b420-56e60b9b4a00/public"
                    alt="Featured on NCN"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://business.starkvilledailynews.com/starkvilledailynews/markets/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/5c25786a-6267-4a1d-bcb7-3ccaa5676700/public"
                    alt="Featured on Starkville Daily News"
                    class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://markets.chroniclejournal.com/chroniclejournal/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/"
               target="_blank">
                <img
                    src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ac708810-3bf8-4cd0-f934-a3f51cd64e00/public"
                    alt="Featured on The Chronicle Journal"
                    class="w-28 h-auto transition hover:scale-105">
            </a>
        </div>

        <div class="text-center mt-8">
            <p class="text-gray-600 text-sm font-semibold tracking-widest">AND OVER 400 NEWS SITES</p>
            <p class="text-gray-500 text-xs mt-1">
                Verified by
                <a href="https://www.brandpush.co?utm_source=Client+Referral&utm_medium=Trust+Badge&utm_campaign=Trust+Badge&utm_content=1708135500624"
                   target="_blank" class="text-blue-500 hover:underline">BrandPush.co</a>
            </p>
        </div>
    </div>
</section>
@include('layouts.footer')
<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    function toggleNavbarBackground() {
        const header = document.getElementById('main-header');
        const hero = document.getElementById('hero');

        const heroBottom = hero.offsetTop + hero.offsetHeight;
        if (window.scrollY > heroBottom - 60) { // 60px buffer to catch right at transition
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', toggleNavbarBackground);

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        document.body.classList.toggle('menu-open');  // Disable or enable scrolling
    });
</script>
</body>
</html>
