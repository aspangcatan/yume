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
            background-color: rgb(255, 91, 13);
        }

        #mobile-menu-btn {
            cursor: pointer;
        }

        /* Prevent scrolling when menu is open */
        body.menu-open {
            overflow: hidden;
            height: 100%; /* Optional, prevents height shifts */
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
    <nav id="mobile-menu"
         class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="text-xl hover:text-yume font-medium">Home</a>
        <a href="{{ route('publishing') }}" class="text-xl hover:text-yume font-medium">Publishing</a>
        <a href="{{ route('affiliate') }}" class="text-xl hover:text-yume font-medium">Affiliate</a>
        <a href="{{ route('rewards') }}" class="text-xl hover:text-yume font-medium">Rewards</a>
        <a href="{{ route('faq') }}" class="text-xl hover:text-yume font-medium">FAQ</a>
        <a href="{{ route('login') }}"
           class="bg-yume hover:bg-yume-contrast text-white font-semibold py-3 px-6 rounded-full transition">Sign In</a>
    </nav>
</header>
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
                Discover the future of music & get rewarded for listening
            </p>
            <p class="mt-2 text-sm md:text-lg tracking-wide text-gray-300">
                Create your account and start your journey
            </p>

            <!-- Scroll Down Button -->
            <div class="mt-8">
                <button id="createAccountBtn" class="px-12 py-4 text-xl font-extrabold text-white rounded-full shadow-2xl
                   bg-yume
                   transform hover:scale-105 focus:scale-105 transition-transform duration-300 ease-out
                   shadow-pink-400/50 tracking-wide
                   md:px-16 md:py-6 md:text-3xl">
                    Create an Account
                </button>
            </div>

        </div>
    </div>
</section>
<section class="bg-white text-center py-16 px-6">
    <div class="max-w-3xl mx-auto">
        <!-- Invitation Text -->
        <p class="text-yume text-2xl md:text-2xl font-bold tracking-wide">
            You are invited by John D. Doe
        </p>

        <!-- Subtitle Text -->
        <h2 class="mt-4 text-2xl md:text-4xl font-bold text-gray-900">
            Create Your Account and Start Earning Today
        </h2>

        <!-- Embedded YouTube Video -->
        <div class="mt-8 relative overflow-hidden w-full" style="padding-top: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
                    src="https://www.youtube.com/embed/0FRRlLComoY?rel=0"
                    title="Welcome to YUME"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</section>

<section id="register_section" class="bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <form id="regisForm" name="regisForm" method="post" class="space-y-6 text-gray-900"
              onsubmit="setPhonePrefix();">

            <p class="text-lg font-semibold text-yume">Welcome to YUME!</p>
            <p class="text-gray-700">To create your account, please provide the following information.</p>

            <!-- Referral Username -->
            <div>
                <input type="text" name="f_referralid" id="f_referralid"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" value="Joinyume" readonly
                       placeholder="Referral Username*">
                <p class="text-xs text-gray-500 mt-1"><strong class="text-red-500 font-semibold">Note:</strong> Please
                    input the Username of the person who introduce you to YUME.</p>
            </div>

            <!-- Full Name -->
            <div>
                <input type="text" name="f_fullname" id="f_fullname"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Full Name*">
                <p class="text-xs text-gray-500 mt-1"><strong class="text-red-500 font-semibold">Note:</strong> Please
                    fill in your Full Name as stated in your country identification documents.</p>
            </div>

            <!-- Address & Location -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <textarea name="f_address" id="f_address" class="w-full border border-gray-300 rounded-md px-3 py-2"
                          required placeholder="Address*"></textarea>
                <input type="text" name="f_postcode" id="f_postcode"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Postcode*">
                <input type="text" name="f_city" id="f_city" class="w-full border border-gray-300 rounded-md px-3 py-2"
                       required placeholder="City*">
                <input type="text" name="f_state" id="f_state"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="State*">
            </div>

            <!-- Country -->
            <div>
                <select name="f_rescountry" id="f_rescountry" class="w-full border border-gray-300 rounded-md px-3 py-2"
                        required>
                    <option value="" selected>Please Choose Your Country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                </select>
            </div>

            <!-- Tax ID -->
            <div>
                <input type="text" name="f_taxno" id="f_taxno"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" placeholder="Tax ID Number">
            </div>

            <!-- Email -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="email" name="f_email1" id="f_email1"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Email*">
                <input type="email" name="f_email2" id="f_email2"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Confirm Email*">
            </div>

            <hr class="my-4 border-dashed">

            <!-- Username -->
            <div>
                <input type="text" name="f_screenname" id="f_screenname"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Username*">
                <p class="text-xs text-gray-500 mt-1"><strong class="text-red-500 font-semibold">Note:</strong> Username
                    will be your nickname in the system and used in your Referral Link. Space, special characters, and
                    dashes are not allowed. Must be 4 to 20 characters long.</p>
            </div>

            <!-- Password -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="password" name="f_password1" id="f_password1"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required placeholder="Password*">
                <input type="password" name="f_password2" id="f_password2"
                       class="w-full border border-gray-300 rounded-md px-3 py-2" required
                       placeholder="Confirm Password*">
            </div>
            <p class="text-xs text-gray-500 mt-1"><strong class="text-red-500 font-semibold">Note:</strong> Password
                must be at least 8 characters long and only alphanumeric characters are allowed.</p>

            <hr class="my-4 border-dashed">

            <!-- Member Type -->
            <div class="space-y-2">
                <p class="font-medium">Member Type*</p>
                <div class="flex space-x-4">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="f_membertype" value="freemium" required>
                        <span>Freemium</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="f_membertype" value="premium" required>
                        <span>Premium</span>
                    </label>
                </div>
            </div>

            <hr class="my-4 border-dashed">

            <!-- Newsletter Consent -->
            <div>
                <label class="flex items-center space-x-2">
                    <input type="checkbox" name="f_consent_newsletter" value="i agree">
                    <span class="text-sm">I agree to receive newsletters or any kind of electronic communications from YUME and its affiliates, respectively.</span>
                </label>
            </div>

            <!-- Terms Agreement -->
            <div>
                <label class="flex items-start space-x-2">
                    <input type="checkbox" name="f_terms" value="i agree" required>
                    <span class="text-sm">By signing up, I agree with the <a href="privacy-policy.php"
                                                                             class="text-yume underline"
                                                                             target="_blank">Privacy Policy</a> and <a
                            href="terms-condition.php" class="text-yume underline"
                            target="_blank">Terms and Conditions</a>. I acknowledge and accept that the Company reserves the right to amend any rewards offered without prior notice in their effort to maintain the sustainability and viability of the Affiliate Program.</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="bg-yume text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90">
                    Proceed to Complete Sign Up
                </button>
                <img class="hidden" id="progress-loader" src="images/ajax-loader.gif" alt="Processing">
            </div>

        </form>

    </div>
</section>

<script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    const createAccountBtn = document.getElementById('createAccountBtn');
    const registerSection = document.getElementById('register_section');

    createAccountBtn.addEventListener('click', (e) => {
        e.preventDefault();
        registerSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });

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
