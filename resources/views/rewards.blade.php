<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME</title>
    <link rel="icon" href="{{ asset('img/yume-logo.png') }}" type="image/png">
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
            background-color: rgb(255,91,13);
        }

        #mobile-menu-btn {
            cursor: pointer;
        }

        /* Mobile Menu Animation */
        #mobile-menu.show {
            display: flex;
            animation: slideDown 0.3s ease-out;
        }

        /* Prevent scrolling when menu is open */
        body.menu-open {
            overflow: hidden;
            height: 100%; /* Optional, prevents height shifts */
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

        #main-header {
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        #main-header.scrolled {
            background-color: #0D0D0D; /* Adjust to match your desired color */
        }
    </style>
</head>
<body class="bg-gray-100">
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME" class="h-10">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="text-white hover:text-yume font-medium transition">Home</a>
            <a href="{{ route('publishing') }}" class="text-white hover:text-yume font-medium transition">Publishing</a>
            <a href="{{ route('affiliate') }}" class="text-white hover:text-yume font-medium transition">Affiliate</a>
            <a href="{{ route('rewards') }}" class="text-white hover:text-yume font-medium transition">Rewards</a>
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
    <nav id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="text-xl hover:text-yume font-medium">Home</a>
        <a href="{{ route('publishing') }}" class="text-xl hover:text-yume font-medium">Publishing</a>
        <a href="{{ route('affiliate') }}" class="text-xl hover:text-yume font-medium">Affiliate</a>
        <a href="{{ route('rewards') }}" class="text-xl hover:text-yume font-medium">Rewards</a>
        <a href="{{ route('faq') }}" class="text-xl hover:text-yume font-medium">FAQ</a>
        <a href="{{ route('login') }}" class="bg-yume hover:bg-yume-contrast text-white font-semibold py-3 px-6 rounded-full transition">Sign In</a>
    </nav>
</header>

<section class="relative bg-black text-white">
    <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Offset -->
        <div class="absolute inset-0 w-full h-full">
            <img src="{{ asset('img/04-Rewards.jpg') }}" alt="Background"
                class="w-full h-full object-cover object-top">
        </div>
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


<footer id="footer" class="bg-gray-900 text-white">
    <div class="text-center py-4 border-t border-gray-700">
        <div class="container mx-auto">
            <p class="text-sm">
                2025 © Copyright
                <a href="https://www.yume.global/{{ route('index') }}" class="text-blue-400 hover:underline">YUME</a>,
                - All rights reserved. |
                <a href="contact-us.php" class="text-blue-400 hover:underline">Contact</a> |
                <a href="{{ route('faq') }}" class="text-blue-400 hover:underline">FAQ</a> |
                <a href="privacy-policy.php" class="text-blue-400 hover:underline">Privacy Policy</a> |
                <a href="terms-condition.php" class="text-blue-400 hover:underline">Terms & Conditions</a>
            </p>
        </div>
    </div>

    <div class="text-center py-4">
        <div class="container mx-auto flex justify-center space-x-4">
            <a href="https://facebook.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-facebook-link.png') }}" class="w-9 hover:opacity-75" alt="Facebook"
                     title="Facebook">
            </a>
            <a href="https://twitter.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-xcom-link.png') }}" class="w-9 hover:opacity-75" alt="Twitter"
                     title="Twitter">
            </a>
            <a href="https://www.instagram.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-instagram-link.png') }}" class="w-9 hover:opacity-75" alt="Instagram"
                     title="Instagram">
            </a>
            <a href="https://youtube.com/@YUMEMusicGlobal?si=fYHFfZn42-jxbcSk" target="_blank">
                <img src="{{ asset('img/img-youtube-link.png') }}" class="w-9 hover:opacity-75" alt="YouTube"
                     title="YouTube">
            </a>
        </div>
    </div>
</footer>
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
