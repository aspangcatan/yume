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
        <div class="absolute inset-0"></div>

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
        <div class="container mx-auto px-4 py-12 w-full text-black">
            <h1 class="text-2xl md:text-3xl font-bold leading-snug tracking-wide uppercase mb-8 text-black text-center">
                Yume Global Inc. Online Privacy & Cookies Policy
            </h1>

            <p class="text-lg leading-relaxed">
                Yume Global Inc., its affiliates and subsidiaries (collectively, “Yume Global Inc.”)
                respect your privacy concerns. This Online Privacy Notice (the “Notice”) applies to personal data we
                collect on
                YumeGlobalInc.com (the “Site”) and in relation to providing music rights management and publishing
                services (the “Services”) to our customers. The Notice describes the types of personal data we obtain,
                how we use the data, with whom we share it, and the choices available to you regarding our use
                of the information. We also describe measures we take to protect the security of the information, the
                rights you may have, and how you can contact us about our privacy practices.
            </p>

            <p class="mt-6 text-lg">
                Yume Global Inc. is the entity responsible for the collection of personal data on the Site and through
                our Services. For more information, please see the <span class="font-bold">"How to Contact Us"</span>
                section below.
            </p>

            <h2 class="mt-10 text-2xl font-semibold">Personal Data We Collect</h2>

            <p class="text-lg mt-4">The types of personal data we collect and process include:</p>

            <ul class="mt-4 text-left space-y-3">
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Identification and contact information, such as your
                    name, telephone number, postal and email
                    address, country, and government-issued ID information (if needed for verification).
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Personal characteristics, such as photo, age, and
                    gender.
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Financial information such as income and tax-related
                    information, and any payment details that you
                    may provide to us.
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Other information you choose to provide to us.
                </li>
            </ul>

            <p class="text-lg mt-4">Personal data that you provide directly to us will be apparent from the context in
                which you provide it, for example:
            </p>

            <ul class="mt-4 text-left space-y-3">
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you register for an account with us;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you fill out a form on our Site, such as the
                    “Contact Us” form;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you complete our online surveys;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you enter into transactions with us;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you apply for a position with us;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you provide us with feedback about the Site or our
                    Services;
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you correspond with us by phone, email or otherwise;
                    or
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> If you sign up to receive electronic marketing
                    communications from us.
                </li>
            </ul>

            <p class="text-lg mt-4">Please be aware that we may also obtain this information from a third party
                representative acting on your behalf.
            </p>

            <p class="text-lg mt-4">Each form on our Site varies in the information required and collected. In most
                cases, an asterisk (*) indicates the required information on a form. You may choose to provide
                additional information within fields that are not required.
            </p>

            <p class="text-lg mt-4">While the personal data you choose to provide is voluntary, certain personal data
                may be necessary to provide you with the relevant product or service. If you choose not to provide
                certain information, this may affect my ability to provide you with certain products or services.
            </p>

            <h2 class="mt-10 text-3xl font-bold text-black">How We Use Your Data</h2>
            <p class="text-lg font-bold mt-4">We use the personal data we obtain for the following purposes:</p>
            <ul class="mt-4 text-left font-bold space-y-3">
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Providing our Services and fulfilling your requests.
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Improving our Services and developing new features.
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Communicating with you about updates, offers, and
                    promotions.
                </li>
                <li class="flex items-start">
                    <span class="text-black mr-2">&#8226;</span> Ensuring compliance with legal obligations.
                </li>
            </ul>

            <h2 class="mt-10 text-3xl font-bold text-black">How to Contact Us</h2>
            <p class="text-lg font-bold mt-4">If you have any questions or concerns about this Privacy Policy or how we
                handle your data, please contact us at:</p>
            <p class="text-lg font-bold mt-4">Email: <span class="font-bold">privacy@yumeglobalinc.com</span></p>
            <p class="text-lg font-bold">Address: 1234 Yume St., Global City, CA 90000</p>
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
