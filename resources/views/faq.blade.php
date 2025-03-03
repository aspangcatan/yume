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
    <nav id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-90 text-white hidden flex flex-col items-center justify-center space-y-6 z-40">
        <a href="{{ route('index') }}" class="text-xl hover:text-yume font-medium">Home</a>
        <a href="{{ route('publishing') }}" class="text-xl hover:text-yume font-medium">Publishing</a>
        <a href="{{ route('affiliate') }}" class="text-xl hover:text-yume font-medium">Affiliate</a>
        <a href="rewards.php" class="text-xl hover:text-yume font-medium">Rewards</a>
        <a href="{{ route('faq') }}" class="text-xl hover:text-yume font-medium">FAQ</a>
        <a href="{{ route('login') }}" class="bg-yume hover:bg-yume-contrast text-white font-semibold py-3 px-6 rounded-full transition">Sign In</a>
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
                Frequently Asked Questions
            </h1>
        </div>
    </div>
</section>
<section class="bg-gray-100 py-16">
    <div class="container mx-auto px-6">
        <div class="space-y-6 max-w-4xl mx-auto">
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
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
                        YUME is a music discovery platform where listeners stream future hit makers and are rewarded
                        for doing so. Listeners are rewarded for streaming music and sharing the experience with others,
                        completing the robust ecosystem where musicians and the community of music fans thrive.

                        <br />
                        <br />
                        YUME is a comprehensive music publishing and record label solution, combined with
                        a one-stop-shop platform designed to bring the artist’s narrative to a wider audience.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
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
                        You may connect with Yume through our publishing page: https://www.yume.global/publishing.php.
                        <br/>
                        Fill out the form and express your interest in joining Yume.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
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
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
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
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
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
                        First, you need to fill out the form on the publishing page expressing your interest in
                        publishing your song with us. After that, someone from Yume will connect with you for a
                        screening of your songs. If your songs pass, you will proceed with the signing of the agreement
                        and provide the necessary requirements. Once everything is done, we will publish your songs
                        right away and distribute them to streaming platforms around the world.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How can I earn from the streams of my songs?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        There is no fixed formula for how much you will earn for your streams.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        Generally, we will split all income earned 50/50. Artists/Songwriters will get 50% of the
                        royalties, and Yume get the other 50%.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How can we assure as an artist that we still retain full ownership of the songs?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Artists/bands will retain full 100% ownership of the songs. Yume will administer the rights of
                        your songs for a 5-year term. Think of YUME as the company handling all of your administration
                        and paperwork while you continue to create/play music!
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            In case we decide to be part of the record label, are we required to produce certain number of songs per year?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The minimum song requirement for you to be signed with Yume is only 3 songs. Any songs created
                        after that will still be part of the exclusive 5-year term agreement.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            As an artist, how much are we going to earn per play, share in concert shows, percentage in royalties, etc?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Artists’ earnings vary greatly depending on a number of situations and level of experience in
                        the industry. Generally, YUME will split income 50:50 for recording and music publishing
                        royalties. Other potential income streams will be determined on a case-by-case basis. For
                        example, not all artists will be able to tour or get their music in TV or film. YUME will use
                        its best efforts to maximize each artist's income stream. Remember, YUME is not a
                        one-size-fits-all model.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What will happen with our songs that are already uploaded in Spotify, Youtube, etc. if we agree to sign with Yume? Do we need to take them down?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        YUME can do a relaunch of your prior released songs or create a special "collection" of songs
                        that makes it a "new" release. For example, a song can be re-titled as "I Love You Song (YUME
                        version).\” There is no need to take them down.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            As an artist, are we going to receive a copy with the agreement so that we are protected as well?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Absolutely. The contract is needed for both parties to be a part of YUME. You will have your own
                        copy which is signed by you and Yume.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What is PowerLine?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        At YUME, we understand that exploring a new business opportunity can be overwhelming and
                        daunting. That's why we offer a risk-free way to explore our opportunity. With our
                        <strong>POWERLINE</strong>-driven marketing system, you can reserve a FREE position on our
                        platform and take the
                        time to conduct thorough due diligence before making any financial commitments
                    </p>

                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        The <strong>POWERLINE</strong>-driven marketing system provides an exclusive opportunity to
                        access our back
                        office, where you can review all the information and gain a comprehensive understanding of
                        YUME’s potential.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        We firmly believe that transparency and information are key to making an informed decision about
                        whether YUME is the right fit for you.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        Freemium members are placed on the PowerLine on a first-come-first-served basis, providing
                        everyone with an equal opportunity to benefit from the platform.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        Freemium members who upgrade to Premium members will move to the Binary, surpassing all those
                        who wait.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What are the benefits of being a Freemium member if any?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        As a Freemium member, you have the opportunity to give the platform a try before upgrading to
                        Premium Membership. As a Freemium member, you can view the potential streaming income that you
                        can earn as you stream and explore our platform. If you upgrade to Premium Membership within 28
                        days from your date of signing, your accumulated Streaming Points will be carried forward and be
                        monetized in the Streaming Income payout. However, if you choose to stay in the Freemium tier,
                        your Streaming Points will be reset to zero. You will start accumulating points again, allowing
                        you to monetize them within the 28-day threshold when you upgrade.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3 mt-3">
                        Additionally, take advantage of your Active Replicator Page for recruitment purposes.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3 mt-3">
                        However, be aware of a potential setback: if your recruited downlines decide to upgrade to a
                        Premium membership while you remain a Freemium member, there is a risk of losing those
                        downlines. In such a case, the system will consider the downline as orphaned and automatically
                        assign a new direct referrer.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3 mt-3">
                        Take note that there's no fixed timeline for Freemium members to upgrade to a Premium
                        membership. Therefore, you can enjoy the benefits of Freemium membership for as long as you
                        like, while keeping the option open to explore the additional perks that come with a Premium
                        membership when the time is right for you.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How can I upgrade to a Premium member?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        To upgrade to a Premium member, there is a one-time membership fee of US$20 and affiliate
                        sign-up fees of US$100.00. Thereafter, a periodic platform fee of US$4.99
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
        <span class="text-xl font-semibold text-gray-900 tracking-wide">
            How to pay for my Premium membership upgrade?
        </span>
                    <svg
                        class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                        fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        We offer various payment options to suit your convenience:
                    </p>
                    <ol class="list-decimal list-inside space-y-3 mt-3 ml-4">
                        <li>
                            <span class="font-semibold text-gray-900">Credit/Debit Card</span>
                            <p class="text-gray-700 ml-4">
                                We accept Visa, Master, American Express, Discovery, and UnionPay.
                            </p>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">Digital Wallets</span>
                            <p class="text-gray-700 ml-4">
                                Choose from a range of digital wallets from different countries, such as GCash for the
                                Philippines, DANA for Indonesia, and TouchNGo for Malaysia.
                            </p>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">Cryptocurrency</span>
                            <p class="text-gray-700 ml-4">
                                We are using a crypto payment gateway to collect your payment. As in any cryptocurrency
                                transaction, we will need blockchain network confirmations before we can confirm your
                                payment. Once confirmed, the system will create your account and send you a Welcome
                                Email with your login details. Depending on the blockchain network traffic (which we do
                                not have control over), the process can sometimes take 10 minutes to 30 minutes. You
                                must send the exact amount of cryptocurrency BUSD(BEP20) and USDT(TRC-20) displayed on
                                the payment page within the time stipulated to prevent the “time out” and delay.
                            </p>
                            <p class="text-gray-700 ml-4 mt-3">Until and unless you receive a Welcome email from us,
                                your registration is pending, and you are not able to log in.</p>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">e-Code</span>
                            <p class="text-gray-700 ml-4">
                                We understand that many people have limited knowledge and access to cryptocurrency, and
                                we created the e-Code. The e-Code is like a preload shopping gift card. When you input a
                                valid e-Code, your registration will be completed instantaneously, and you will receive
                                a Welcome email with the login credentials.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
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
