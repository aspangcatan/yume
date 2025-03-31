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

            <form id="contactForm" action="{{ route('sendContactEmail') }}" method="POST" class="space-y-4">
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

<!-- Loading Overlay -->
<div id="loadingOverlay" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="flex flex-col items-center">
        <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-white"></div>
        <p class="text-white mt-2">Sending...</p>
    </div>
</div>

<!-- Success Modal (Ensuring It Stays in Front) -->
<div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
        <h2 class="text-lg font-semibold text-green-600">Message Sent Successfully!</h2>
        <p class="text-gray-600 mt-2">Thank you for reaching out. We will get back to you soon.</p>
        <button id="closeModal" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
            OK
        </button>
    </div>
</div>


@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        const $mobileMenuBtn = $('#mobile-menu-btn');
        const $mobileMenu = $('#mobile-menu');
        const $faqToggles = $('.faq-toggle');
        const $header = $('#main-header');
        const $hero = $('#hero');
        const $contactForm = $('#contactForm');
        const $successModal = $('#successModal');
        const $loadingOverlay = $('#loadingOverlay');

        // ✅ Navbar background change on scroll
        function toggleNavbarBackground() {
            let heroBottom = $hero.offset().top + $hero.outerHeight();
            if ($(window).scrollTop() > heroBottom - 60) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        }
        $(window).on('scroll', toggleNavbarBackground);

        // ✅ FAQ Toggle
        $faqToggles.on('click', function () {
            let $content = $(this).next();
            let $icon = $(this).find('svg');

            $content.toggleClass('hidden');
            $icon.toggleClass('rotate-180');

            // Close other FAQ items
            $faqToggles.not(this).next().addClass('hidden');
            $faqToggles.not(this).find('svg').removeClass('rotate-180');
        });

        // ✅ Mobile menu toggle
        $mobileMenuBtn.on('click', function () {
            $mobileMenu.toggleClass('hidden');
            $('body').toggleClass('menu-open'); // Toggle scrolling restriction
        });

        // ✅ AJAX Contact Form Submission (Fetch API + Loading Indicator)
        $contactForm.on('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            let formData = new FormData(this);

            // Show loading overlay
            $loadingOverlay.removeClass('hidden');

            fetch("{{ url('/contact') }}", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').val()
                }
            })
                .then(response => response.json())
                .then(data => {
                    $loadingOverlay.addClass('hidden'); // Hide loading
                    if (data.success) {
                        $successModal.removeClass('hidden'); // Show success modal
                        $successModal.css('z-index', '9999'); // Ensure modal is in front
                        $contactForm[0].reset(); // Clear form fields
                    } else {
                        alert("Error sending message. Please try again.");
                    }
                })
                .catch(error => {
                    console.error("Error:", error);
                    $loadingOverlay.addClass('hidden'); // Hide loading
                    alert("An error occurred. Please try again later.");
                });
        });

        // ✅ Close Success Modal
        $('#closeModal').on('click', function () {
            $successModal.addClass('hidden');
        });
    });
</script>

</body>
</html>
