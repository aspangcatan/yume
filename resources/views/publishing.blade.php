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

<section id="hero" class="relative bg-black text-white">
    <div class="relative w-full h-[100vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Offset -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('img/02-Publishing.jpg') }}'); background-position: center top 70px;">
        </div>
    </div>
</section>

<section id="feature-sections" class="bg-white py-20">
    <div class="container mx-auto px-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold leading-tight">What is Music Publishing?</h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto my-4"></div>
        </div>

        <p class="text-gray-700 text-lg mb-4">Music publishing is a crucial aspect of the music industry that involves the management of musical compositions and their associated rights. Contrary to what the term might suggest, it extends far beyond the act of printing sheet music.</p>

        <p class="text-gray-700 text-lg mb-4">At its core, music publishing encompasses various activities, such as licensing, royalty collection, and the protection of intellectual property. Here's a breakdown of key components:</p>

        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li><strong>Licensing:</strong> Music publishers secure licenses for compositions in various mediums such as recordings, films, and advertisements.</li>
            <li><strong>Royalty Collection:</strong> Ensuring songwriters and composers receive compensation for their work.</li>
            <li><strong>Rights Management:</strong> Safeguarding composition rights, including copyright protection.</li>
            <li><strong>Exploitation of Intellectual Property:</strong> Generating revenue from compositions through placements and covers.</li>
            <li><strong>Administration:</strong> Handling contracts, licenses, and royalty distribution.</li>
            <li><strong>Promotion and A&amp;R:</strong> Some publishers scout talent and support artists.</li>
        </ul>

        <p class="text-gray-700 text-lg mt-6">Music publishing serves as the bridge between the creative side and the commercial side, ensuring that artists' work is protected and monetized effectively.</p>

        <h3 class="text-2xl font-semibold text-center mt-10">Global Music Publishing Market Overview</h3>

        <p class="text-gray-700 text-lg mt-4">Music Publishing Market size was valued at <span class="text-red-600 font-bold">USD 5.96 Billion</span> in 2020 and is projected to reach <span class="text-red-600 font-bold">USD 9.35 Billion by 2028</span>, growing at a <span class="text-red-600 font-bold">CAGR of 5.90% from 2021 to 2028.</span></p>

        <p class="text-gray-700 text-lg mt-4">Over the last 5 years, the music industry has gone through a revolution. The rise in popularity of music streaming services like Spotify and Pandora has led to a fall in sales of physical music. As the increasing number of artists and musicians require the personal service provided by music publishers to help them manage their music, copyrights, and other things; the demand for music publishers is high. Furthermore, the media industry has also done well in recent years owing to consumers shifting towards digital platforms.</p>

        <p class="text-gray-700 text-lg mt-4">Additionally, consumers have started avoiding pirated music and started paying for it and this spending has led to increased revenue streams for the entertainment industry. </p>

        <h3 class="text-2xl font-semibold text-center mt-10">Why publish your music with YUME?</h3>

        <p class="text-gray-700 text-lg mt-4">When you publish a song with YUME, you are getting your music in front of a global audience. On top of getting your work published on over a hundred music streaming, download, and social platforms like Spotify, Apple Music, and TikTok, we are also allowing you to be heard by thousands of ready listeners on our platform and get all the tools that you need to promote and showcase your music.</p>

        <p class="text-gray-700 text-lg mt-4">Discover how we ensure every YUME artist achieves worldwide success through YUME’s music ecosystem.</p>

        <div class="text-center my-6">
            <button onclick="window.open('#interest','_self')" class="bg-blue-600 text-white text-lg font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-700">Get Started</button>
        </div>

        <h3 class="text-2xl font-semibold mt-10">Traditional Publishing: A Quick Overview</h3>

        <p class="text-gray-700 text-lg mt-4">Music publishing is essentially the structure of ownership of a song - along with this is how a song is protected, distributed, licensed, commercialized, and in the simplest terms, sold.</p>

        <p class="text-gray-700 text-lg mt-4">When you create a song, you generate two copyrights:</p>
        <ul class="list-disc list-inside space-y-2 text-gray-700">
            <li>One for the composition and lyrics.</li>
            <li>One for the recording, known as the “master” copy.</li>
        </ul>

        <p class="text-gray-700 text-lg mt-4">Artists that publish a song in the traditional way (via a publisher and a record label) tend to create deals that will “split” their shares with the copyright that they create to be able to sell their music. Publishing companies will have shared ownership with the copyright to composition in exchange for the service they provide, which includes promoting, licensing music so they can be used commercially, monitoring where songs are performed, and collecting royalties. Record labels, on the other hand, tend to own the recording copyright, because they finance the recording and do major legwork on making sure that artists gain enough exposure and build a robust fanbase.</p>

        <p class="text-gray-700 text-lg mt-4">In short, traditional publishing takes most of the strain off the artist’s back when it comes to making their songs heard, but with a huge cost. With publishers and labels having ownership of an artist’s copyright, they will want to squeeze as much profit to get a return out of their investment. Some artists experience having to fulfill lengthy contracts, receive remarkably low royalty rates, and even go through loans that they will never be able to repay.</p>

        <p class="text-gray-700 text-lg mt-4">Is it possible for you to release your music as an independent artist and get more control over your music? Yes, but with a caveat - it will take double or triple the effort to get your music out there, compared to having access to resources that publishers and labels provide.</p>

        <p class="text-gray-700 text-lg mt-4">This is what YUME aims to disrupt, by introducing a model that will finally make the industry rewarding for both musicians and listeners.</p>
        <div class="my-10">
            <img class="w-full rounded-lg shadow-md" src="{{ asset('img/mid-banner.jpg') }}" alt="Music Publishing Banner">
        </div>

        <div class="text-center my-6">
            <button onclick="window.open('#interest','_self')" class="bg-blue-600 text-white text-lg font-semibold px-6 py-3 rounded-lg shadow-md hover:bg-blue-700">Get Started</button>
        </div>

        <h3 class="text-2xl font-semibold text-center mt-10">How YUME Changes the Music Publishing Landscape</h3>

        <p class="text-gray-700 text-lg mt-4">YUME understands that the music industry is a venture in which fans and listeners are its major stakeholders. This is why fans and listeners deserve to get a more rewarding experience - a share in the billion-dollar music streaming industry.</p>

        <p class="text-gray-700 text-lg mt-4">YUME empowers fans and listeners by rewarding every task fulfilled on our streaming platform - each time they listen to music published on YUME or watch a video, they get points that they can convert into raffle tickets or other prizes. YUME has also built a robust affiliate program that allows its members to enjoy multiple revenue streams. This effectively makes listening to music, a previously paid experience, a source of income.</p>

        <p class="text-gray-700 text-lg mt-4">This will be a game-changer for independent artists - not only do they get an instant boost for their streams, but they also get to publish their music in an instant fan-generating platform that rewards their listeners for every engagement. On top of its streaming platform, YUME also publishes artist tracks on hundreds of other streaming platforms, including major players such as Spotify, Deezer, YouTube Music, and TikTok, maximizing the presence of every release.</p>
        <h3 class="text-2xl font-semibold text-center mt-10">Beyond Streaming</h3>

        <p class="text-gray-700 text-lg mt-4">YUME is also not just a streaming platform designed for your latest track to be organically discovered - it is a complete ecosystem that provides all the tools a music artist needs to succeed. Get the chance to be part of YUME’s global campaigns, build up your artist profiles with dedicated branding managers, and get insights on how your tracks perform so you can plan your career better.</p>

        <p class="text-gray-700 text-lg mt-4">Ready to go live? </p>

        <p class="text-gray-700 text-lg mt-4">We will amplify your presence with expert marketing campaigns - get ready to be the front act of an international sensation or be the main act of your major first concert, with world-class event organizers and providers supporting your shows.</p>
        <p class="text-gray-700 text-lg mt-4">Welcome to your dream, now made a reality.</p>
    </div>
</section>

<section class="bg-gray-100 flex items-center justify-center min-h-screen px-6">
        <div class="max-w-3xl bg-white shadow-lg rounded-lg p-8 my-10">
            <h2 class="text-center text-xl font-bold uppercase tracking-wider mb-4">
                Embark on a Musical Odyssey!
            </h2>
            <hr class="border-t-2 border-gray-300 w-16 mx-auto mb-6">

            <p class="text-gray-700 text-center mb-4">
                Ready to take your musical journey to unprecedented heights? Yume eagerly extends an invitation for you to express your interest in becoming part of our dynamic community, entrusting us with the meticulous management of your music.
            </p>
            <p class="text-gray-700 text-center mb-4">
                Whether you're a visionary artist, a skilled songwriter, or an impassioned music enthusiast, Yume opens its doors to a world where your passion isn't just acknowledged; it's celebrated.
            </p>
            <p class="text-gray-700 text-center mb-6">
                Take the leap and join Yume, where every note, every melody, and every beat contributes to something extraordinary!
            </p>

            <form class="space-y-4">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-400" placeholder="Name*" required>
                <input type="email" class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-400" placeholder="Email Address*" required>

                <div class="flex items-center border border-gray-300 rounded-md p-3">
                    <span class="mr-2">🇺🇸 +1</span>
                    <input type="tel" class="w-full outline-none" placeholder="Phone*" required>
                </div>

                <select class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-400" required>
                    <option selected disabled>Please select country*</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>United Kingdom</option>
                    <option>Australia</option>
                </select>

                <textarea class="w-full p-3 border border-gray-300 rounded-md focus:ring focus:ring-gray-400 h-32" placeholder="Message*" required></textarea>

                <button type="submit" class="w-full bg-black text-white py-3 rounded-md hover:bg-gray-800 transition">
                    Submit
                </button>
            </form>
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
