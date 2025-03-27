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
        <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 w-full h-full">
                <img src="{{ asset('img/02-Publishing.png') }}"
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
                    <select class="bg-transparent outline-none mr-2">
                        <option>🇺🇸 +1</option>
                        <option>🇬🇧 +44</option>
                        <option>🇨🇦 +1</option>
                        <option>🇦🇺 +61</option>
                        <option>🇵🇭 +63</option>
                        <option>🇮🇳 +91</option>
                        <option>🇨🇳 +86</option>
                        <option>🇯🇵 +81</option>
                        <option>🇩🇪 +49</option>
                        <option>🇫🇷 +33</option>
                        <option>🇪🇸 +34</option>
                        <option>🇮🇹 +39</option>
                        <option>🇧🇷 +55</option>
                        <option>🇷🇺 +7</option>
                        <option>🇰🇷 +82</option>
                        <option>🇲🇽 +52</option>
                        <option>🇿🇦 +27</option>
                        <option>🇸🇦 +966</option>
                        <option>🇦🇪 +971</option>
                        <option>🇹🇷 +90</option>
                        <option>🇮🇩 +62</option>
                        <option>🇸🇬 +65</option>
                        <option>🇲🇾 +60</option>
                        <option>🇹🇭 +66</option>
                        <option>🇻🇳 +84</option>
                        <option>🇳🇿 +64</option>
                        <option>🇦🇷 +54</option>
                        <option>🇨🇱 +56</option>
                        <option>🇨🇴 +57</option>
                        <option>🇵🇰 +92</option>
                        <option>🇧🇩 +880</option>
                        <option>🇳🇬 +234</option>
                        <option>🇪🇬 +20</option>
                        <option>🇵🇱 +48</option>
                        <option>🇳🇴 +47</option>
                        <option>🇸🇪 +46</option>
                        <option>🇩🇰 +45</option>
                        <option>🇫🇮 +358</option>
                        <option>🇧🇪 +32</option>
                    </select>
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
