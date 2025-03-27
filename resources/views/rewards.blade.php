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
<!-- <section class="relative bg-black text-white">
    <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('img/04-Rewards.jpg') }}"
            alt="Background"
            class="w-full h-full object-contain sm:object-left md:object-center pt-20">
        </div>
    </div>
</section> -->

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
        <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ asset('img/04-Rewards.png') }}"
                alt="Background"
                class="w-full h-full object-contain sm:object-left md:object-center pt-20">
            </div>
        </div>

        <!-- Ambient Neon Blobs -->
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-blue-500 rounded-full blur-3xl opacity-30 mix-blend-screen"></div>
        <div
            class="absolute bottom-0 right-0 w-72 h-72 bg-pink-500 rounded-full blur-3xl opacity-30 mix-blend-screen"></div>
    </div>
</section>

<section id="feature-sections" class="bg-white py-20">
    <div class="container mx-auto px-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold leading-tight">Rewards</h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto my-4"></div>
        </div>

        <p class="text-gray-700 text-lg mb-4">With YUME, every stream and share brings you closer to curated rewards tailored to your unique tastes. Whether it's exclusive access to concerts, limited edition merchandise, or VIP experiences, our rewards system is designed to elevate your music journey like never before.</p>

    </div>
</section>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 pb-0">
    <div class="p-4 text-center">
        <img src="{{ asset('img/yumeecode.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="Yume E-Code Premium Upgrade">
        <p class="text-sm mt-2">Yume E-Code Premium Upgrade</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/iphon15.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="iPhone 15 Pro Max 256GB">
        <p class="text-sm mt-2">iPhone 15 Pro Max 256GB</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/ipanair.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="iPad Air 64GB">
        <p class="text-sm mt-2">iPad Air 64GB</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/macbookair.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="MacBook Air 13-inch (M2 chip)">
        <p class="text-sm mt-2">MacBook Air 13-inch (M2 chip)</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/applewatch.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="Apple Watch Series 9 Aluminum 45mm">
        <p class="text-sm mt-2">Apple Watch Series 9 Aluminum 45mm</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/yumecaps.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="YUME Cap">
        <p class="text-sm mt-2">YUME Caps</p>
    </div>
    <div class="p-4 text-center">
        <img src="{{ asset('img/yumetshirts.jpg') }}" class="w-full h-auto rounded-md shadow-md" alt="YUME T-Shirts">
        <p class="text-sm mt-2">YUME T-Shirts</p>
    </div>
</div>
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
