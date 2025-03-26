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

        <!-- Main Banner Content -->
        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight tracking-wide uppercase">
                Welcome to YUME
            </h1>
            <p class="mt-4 text-lg md:text-2xl font-light tracking-wide">
                Have questions? We're here to help.
            </p>
            <p class="mt-2 text-sm md:text-lg tracking-wide text-gray-300">
                Reach out and we'll get back to you as soon as possible.
            </p>
        </div>
    </div>
</section>
<section id="contact" class="relative bg-white text-black">
    <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Gradient and Subtle Waves -->
        <div class="absolute inset-0 bg-gradient-to-r from-white via-gray-100 to-white opacity-90"></div>

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
            <svg class="w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="wave-pattern" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M0 50 Q25 0 50 50 T100 50" fill="none" stroke="rgba(0,0,0,0.1)" stroke-width="2"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#wave-pattern)"/>
            </svg>
        </div>

        <!-- Contact Form Content -->
        <div class="relative z-10 text-center px-6 w-full max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-wide uppercase mb-8">
                Contact Us
            </h1>

            <form action="#" method="POST" class="space-y-4">
                @csrf

                <input type="text" name="full_name" placeholder="Full Name" required
                       class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume">

                <input type="email" name="email" placeholder="Email" required
                       class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume">

                <input type="text" name="username" placeholder="Username (optional)"
                       class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume">
                <p class="text-sm text-gray-600">*Please provide your Username if you are a Yume member</p>

                <input type="tel" name="phone" placeholder="Phone Number" required
                       class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume">

                <input type="text" name="subject" placeholder="Subject" required
                       class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume">

                <textarea name="message" placeholder="Message" rows="4" required
                          class="w-full px-4 py-3 bg-gray-200 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yume"></textarea>

                <button type="submit"
                        class="w-full bg-yume hover:bg-yume-contrast text-white font-semibold py-3 rounded-full transition shadow-md">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
@include('layouts.footer')

<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const faqToggles = document.querySelectorAll('.faq-toggle');

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
        mobileMenu.classList.toggle('hidden');
        document.body.classList.toggle('menu-open');  // Disable or enable scrolling
    });
</script>
</body>
</html>
