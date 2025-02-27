<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Streaming - Discover & Earn</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<header id="header" class="bg-gray-900 text-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo Section -->
        <div class="flex items-center space-x-3">
            <a href="{{ route('index') }}" rel="home">
                <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME" class="h-9">
            </a>
        </div>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('index') }}" class="hover:text-blue-400">Home</a>
            <a href="publishing.php" class="hover:text-blue-400">Publishing</a>
            <a href="plan.php" class="hover:text-blue-400">Affiliate</a>
            <a href="rewards.php" class="hover:text-blue-400">Rewards</a>
            <a href="faq.php" class="hover:text-blue-400">FAQ</a>
            <a href="{{ route('login') }}" class="hover:text-blue-400 font-semibold">Sign In</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden focus:outline-none">
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white mb-1"></span>
            <span class="block w-6 h-0.5 bg-white"></span>
        </button>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden z-50 absolute top-16 left-0 w-full bg-gray-900 md:hidden">
        <nav class="flex flex-col items-center space-y-4 py-4">
                <a href="{{ route('index') }}" class="hover:text-blue-400">Home</a>
                <a href="#" class="hover:text-blue-400">Publishing</a>
                <a href="#" class="hover:text-blue-400">Affiliate</a>
                <a href="#" class="hover:text-blue-400">Rewards</a>
                <a href="#" class="hover:text-blue-400">FAQ</a>
                <a href="{{ route('login') }}" class="hover:text-blue-400 font-semibold">Sign In</a>
            </nav>
        </div>
    </div>
</header>
<section id="main-slider2" class="w-full">
    <!-- Slider Container -->
    <div class="relative w-full overflow-hidden">
        <div class="flex">
            <!-- Desktop Image -->
            <a href="javascript:" class="hidden sm:block w-full">
                <img src="{{ asset('img/img-main-section.png') }}" alt="Slider Image" class="w-full">
            </a>
            <!-- Mobile Image -->
            <a href="javascript:" class="block sm:hidden w-full">
                <img src="{{ asset('img/img-main-section.png') }}"  alt="Slider Image" class="w-full">
            </a>
        </div>

        <!-- Navigation Arrows -->
        <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-70">
            <i class="fa fa-angle-left text-2xl"></i>
        </button>
        <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-70">
            <i class="fa fa-angle-right text-2xl"></i>
        </button>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">A Rewarding Music Discovery Platform.</h2>
                <p class="text-gray-600 text-lg">YUME is a music discovery platform where listeners stream future hit makers and are rewarded for doing so.</p>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Aspiring artists launch their careers with a captive audience eager to listen to their songs.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Listeners are rewarded for streaming music and sharing the experience with others.</li>
                </ul>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/img-section-1.png') }}" alt="YUME" class="rounded-lg w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="order-2 md:order-1 text-center">
                <img src="{{ asset('img/img-section-2.png') }}" alt="YUME" class="rounded-lg w-full max-w-md mx-auto">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-4">The Platform for Future Chart Toppers</h2>
                <p class="text-lg text-gray-300">YUME gives aspiring artists a platform to break into the global scene.</p>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Get streamed globally by a community of listeners.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Get a chance to headline international concerts.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Publish your songs <span class="text-blue-400 font-bold">FOR FREE</span>.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="text-center pb-20">
            <div class="flex justify-center items-center space-x-4">
                <div class="hidden md:block w-1/4"></div>
                <div class="w-12 md:w-16">
                    <img src="{{ asset('img/yume-logo.png') }}" class="w-full h-auto" alt="YUME Logo">
                </div>
                <div class="text-left text-3xl md:text-4xl font-bold">YUME ARTISTS</div>
            </div>
            <p class="text-lg text-gray-600 mt-6">Meet the future music stars listened to by YUME’s growing community of listeners across the globe. Join our roster of artists and live the dream.</p>
        </div>
        <div class="overflow-hidden">
            <div class="flex space-x-4 overflow-x-auto pb-4">
                <div class="flex-none w-60">
                    <img src="{{ asset('img/yume-artist-1.png') }}" class="w-full rounded-lg" alt="YUME Artist">
                </div>
                <div class="flex-none w-60">
                    <img src="{{ asset('img/yume-artist-2.png') }}" class="w-full rounded-lg" alt="YUME Artist">
                </div>
                <div class="flex-none w-60">
                    <img src="{{ asset('img/yume-artist-3.png') }}" class="w-full rounded-lg" alt="YUME Artist">
                </div>
                <div class="flex-none w-60">
                    <img src="{{ asset('img/yume-artist-4.png') }}" class="w-full rounded-lg" alt="YUME Artist">
                </div>
                <div class="flex-none w-60">
                    <img src="{{ asset('img/yume-artist-5.png') }}" class="w-full rounded-lg    " alt="YUME Artist">
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-16">
            <div class="text-white cursor-pointer px-6 py-3 bg-gray-800 rounded-lg hover:bg-gray-700 transition" onclick="window.open('publishing.php#interest','_self')">
                Get Published for FREE
            </div>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-[#162e60] py-16">
    <div class="container mx-auto px-4">
        <div class="text-center wow fadeInDown">
            <div class="pb-16">
                <h2 class="text-white text-3xl font-extrabold uppercase">Listen to YUME</h2>
            </div>
            <div class="pt-16">
                <div class="flex justify-center">
                    <iframe
                        src="https://www.youtube.com/embed/videoseries?si=AUMCF01JQKqOoHSv&amp;list=PLjLOGm1HDJ7gT61c9qGutu-hw5Fye3iLq&amp;rel=0&amp;autoplay=0"
                        title="YUME"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        class="w-full max-w-4xl h-64 md:h-96">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-gray-200 py-16">
    <div class="container mx-auto px-4">
        <div class="text-center wow fadeInDown">
            <div class="flex flex-wrap items-center pb-24">
                <!-- Left Content -->
                <div class="w-full md:w-1/2 px-4">
                    <h2 class="text-3xl font-extrabold pb-5">Finally, your passion for music pays.</h2>
                    <p class="text-lg text-gray-700 pb-8">
                        YUME makes a true music listener's dream come true: to be able to discover and support artists; and be rewarded for doing so.
                    </p>

                    <div class="flex items-start pb-6">
                        <img src="{{ asset('img/bullet.png') }}" class="w-6 h-6 mt-1">
                        <p class="text-gray-700 pl-4">
                            With a <strong>FREE</strong> account, get a chance to receive exclusive access to concerts, limited edition merchandise, or VIP experiences.
                        </p>
                    </div>

                    <div class="flex items-start">
                        <img src="{{ asset('img/bullet.png') }}" class="w-6 h-6 mt-1">
                        <p class="text-gray-700 pl-4">
                            With a <strong>PREMIUM</strong> Membership, earn income when you help grow the YUME community.
                        </p>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="w-full md:w-1/2 px-4 pt-10 md:pt-0">
                    <img class="w-full max-w-md mx-auto md:float-right" src="{{ asset('img/img-section-5.png') }}" alt="YUME">
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center pb-16">
                <h2 class="text-3xl font-extrabold">Stream. Share. Get paid. Simple.</h2>
                <p class="text-lg text-gray-700 pt-5 pb-8">
                    Join the Powerline™, Yume’s community of tastemakers that get instantly <br class="hidden sm:inline">rewarded by listening to music.
                </p>
                <img src="{{ asset('img/img-feature.png') }}" class="w-full max-w-lg mx-auto">

            </div>

            <!-- Call to Action Button -->
            <div class="text-center">
                <button onclick="window.open('https://www.yume.global/Gcell18','_self')" class="bg-white text-lg font-bold py-3 px-6 rounded-lg shadow-md hover:bg-gray-100 cursor-pointer">
                    Create Your Account Now
                </button>
            </div>

        </div>
    </div>
</section>
<section id="feature-sections" class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900">What YUME Listeners Say</h2>
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
<section id="feature-sections" class="bg-gray-200 py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-gray-900">In The News</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- News Image 1 -->
            <div class="text-center">
                <img src="{{ asset('img/img-news-1.png') }}"
                     alt="YUME News"
                     class="w-full max-w-md mx-auto rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                     onclick="window.open('https://www.wicz.com/story/50475038/yume-unveils-game-changing-streaming-and-music-publishing-platform','_blank')">
            </div>

            <!-- News Image 2 -->
            <div class="text-center">
                <img src="{{ asset('img/img-news-1.png') }}"
                     alt="YUME News"
                     class="w-full max-w-md mx-auto rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                     onclick="window.open('https://philippines-startup.biz/%e3%83%97%e3%83%ac%e3%82%b9%e3%83%aa%e3%83%aa%e3%83%bc%e3%82%b9/?t=yume-sets-the-stage-for-a-more-rewarding-music-experience-for-filipino-music-listeners&amp;rid=1547','_blank')">
            </div>
        </div>
    </div>
</section>
<section id="feature-sections" class="bg-white py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-wide">AS SEEN ON</h2>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-6">
            <!-- Brand Logos -->
            <a href="https://www.benzinga.com/pressreleases/24/02/ab37217186/yume-unveils-game-changing-streaming-and-music-publishing-platform" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ec881fff-1d06-43da-18e1-4460b8922c00/public"
                     alt="Featured on Benzinga"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.barchart.com/story/news/24209395/yume-unveils-gamechanging-streaming-and-music-publishing-platform" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/d1d24201-6f48-4c9b-6ed2-46464eac1900/public"
                     alt="Featured on BarChart"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.theglobeandmail.com/investing/markets/markets-news/GetNews/24209404/yume-unveils-gamechanging-streaming-and-music-publishing-platform" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/7acfc7a6-2b16-4ba6-01d5-96b99d462f00/public"
                     alt="Featured on The Globe And Mail"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.wicz.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/3fc4af63-e906-4112-d141-d504c6ea5c00/public"
                     alt="Featured on FOX 40"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="https://www.newschannelnebraska.com/story/50475038/yume-unveils-gamechanging-streaming-and-music-publishing-platform" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/31f90197-ad2e-4772-b420-56e60b9b4a00/public"
                     alt="Featured on NCN"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://business.starkvilledailynews.com/starkvilledailynews/markets/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/5c25786a-6267-4a1d-bcb7-3ccaa5676700/public"
                     alt="Featured on Starkville Daily News"
                     class="w-28 h-auto transition hover:scale-105">
            </a>

            <a href="http://markets.chroniclejournal.com/chroniclejournal/article/getnews-2024-2-20-yume-unveils-game-changing-streaming-and-music-publishing-platform/" target="_blank">
                <img src="https://www.brandpush.co/cdn-cgi/imagedelivery/gKm6BYVdHCj_SVQET_Msrw/ac708810-3bf8-4cd0-f934-a3f51cd64e00/public"
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
<footer id="footer" class="bg-gray-900 text-white">
    <div class="text-center py-4 border-t border-gray-700">
        <div class="container mx-auto">
            <p class="text-sm">
                2025 © Copyright
                <a href="https://www.yume.global/{{ route('index') }}" class="text-blue-400 hover:underline">YUME</a>,
                - All rights reserved. |
                <a href="contact-us.php" class="text-blue-400 hover:underline">Contact</a> |
                <a href="faq.php" class="text-blue-400 hover:underline">FAQ</a> |
                <a href="privacy-policy.php" class="text-blue-400 hover:underline">Privacy Policy</a> |
                <a href="terms-condition.php" class="text-blue-400 hover:underline">Terms & Conditions</a>
            </p>
        </div>
    </div>

    <div class="text-center py-4">
        <div class="container mx-auto flex justify-center space-x-4">
            <a href="https://facebook.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-facebook-link.png') }}" class="w-9 hover:opacity-75" alt="Facebook" title="Facebook">
            </a>
            <a href="https://twitter.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-xcom-link.png') }}" class="w-9 hover:opacity-75" alt="Twitter" title="Twitter">
            </a>
            <a href="https://www.instagram.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-instagram-link.png') }}" class="w-9 hover:opacity-75" alt="Instagram" title="Instagram">
            </a>
            <a href="https://youtube.com/@YUMEMusicGlobal?si=fYHFfZn42-jxbcSk" target="_blank">
                <img src="{{ asset('img/img-youtube-link.png') }}" class="w-9 hover:opacity-75" alt="YouTube" title="YouTube">
            </a>
        </div>
    </div>
</footer>
<script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
