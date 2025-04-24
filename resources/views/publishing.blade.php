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

        <!-- <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
            {{-- Background via CSS --}}
            <div
            class="absolute inset-0 z-0 bg-center bg-cover"
            style="background-image: url('{{ asset('img/02-Publishing.png') }}');"
            ></div>

            {{-- Floating Join Now Button --}}
            <a
            href=""
            class="relative z-10 bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-6 rounded-full shadow-lg transition-transform transform hover:-translate-y-1"
            style="bottom: 3rem; right: 3rem;"
            >
            JOIN NOW
            </a>
        </div> -->

        <!--Main Banner-->
        <div class="relative w-full min-h-screen flex items-center justify-center overflow-hidden">
        {{-- Background via CSS --}}
        <div
            class="absolute inset-0 z-0 bg-center bg-cover"
            style="background-image: url('{{ asset('img/02-Publishing.png') }}');"
        ></div>

        {{-- Floating Join Now Button --}}
        <a
            href="#"
            class="absolute bottom-36 right-32 z-10 bg-orange-500 hover:bg-orange-600 text-white font-bold text-lg py-4 px-8 rounded-full shadow-lg transition-transform transform hover:-translate-y-1"
        >
            JOIN NOW
        </a>
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
            <h1 class="text-5xl font-extrabold leading-tight" style="color: #FF7F3F;">What is Music Publishing?</h1>
            <br>
            <p class="text-lg leading-relaxed">
            Music publishing is a vital component of the music industry, encompassing the management and protection of musical compositions and their associated rights.
            It extends beyond printing sheet music to include licensing, royalty collection and intellectual property protection.
            </p>
            <br>
            <div class="text-right">
                <button class="bg-[#FF7F3F] text-white font-semibold px-6 py-2 rounded-full hover:bg-orange-600 transition">
                    Learn More
                </button>
            </div>
        </div>
    </div>
</section>

<section>
<div class="bg-gray-100 rounded-lg text-gray-800 space-y-6 
            px-4 md:px-40 py-10 mx-auto max-w-screen-lg">
        <div>
            <h2 class="text-2xl font-bold mb-2">Key Components</h2>
            <ul class="list-disc list-inside space-y-2 ml-4 md:ml-10">
            <li><strong>Licensing:</strong> Securing licenses for composition use in various mediums, such as recordings, performances and commercial projects.</li>
            <li><strong>Royalty Collection:</strong> Ensuring songwriters and composers receive compensation for their work’s use, involving tracking and collecting royalties.</li>
            <li><strong>Rights Management:</strong> Safeguarding composition rights, including copyright protection to ensure creators’ acknowledgment and compensation.</li>
            <li><strong>Exploitation of Intellectual Property:</strong> Actively seeking revenue opportunities from compositions, such as placements in movies, TV shows and commercials.</li>
            <li><strong>Administration:</strong> Handling business tasks, including contract negotiation, license management and royalty distribution.</li>
            <li><strong>Promotion and A&R:</strong> Scouting talent and supporting songwriters and artists.</li>
            </ul>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-2">The Role of YUME</h2>
            <p class="ml-4 md:ml-10">
            YUME empowers artists with a comprehensive platform to share their music worldwide ensuring listener support and encouragement.
            We provide cutting-edge tools for digital promotion, showcasing talent and electrifying live performances on the global stage.
            </p>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-2">Key Benefits Include</h2>
            <ul class="list-disc list-inside space-y-2 ml-4 md:ml-10">
            <li><strong>Global Reach:</strong> Publishing music on over 100 platforms, including Yume, Spotify, Apple Music and TikTok.</li>
            <li><strong>Revenue Streams:</strong> Empowering fans through rewards for listening support and engagement.</li>
            <li><strong>Artist Support:</strong> Providing resources, branding managers and performance insights.</li>
            <li><strong>Merchandising and NFT:</strong> Unlock additional layers of income through merchandise and NFTs.</li>
            <li><strong>Marketing and Events:</strong> Amplifying artist presence through campaigns and world-class live event bookings.</li>
            </ul>
        </div>
    </div>
    <div class="my-10">
        <img class="w-full shadow-md" src="{{ asset('img/mid-banner.jpg') }}" alt="Music Publishing Banner">
    </div>

</section>

<section>
<h1 class="text-5xl font-extrabold leading-tight text-center" style="color: #FF7F3F;">Join the YUME Community</h1>
</section>
<br>
<section>
  <!-- Full‑width gradient container -->
  <div class="bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800
              flex flex-col items-center justify-center min-h-screen
              py-6
              space-y-8
              text-white
              overflow-hidden">
    
    <!-- Inner wrapper for responsive gutters & max content width -->
    <div class="w-full px-4 md:px-12 lg:px-24 xl:px-40">
      <div class="max-w-screen-lg mx-auto space-y-8">
        {{-- Hero Text --}}
        <div>
          <p class="mb-8 text-base md:text-lg leading-relaxed">
            Elevate your musical journey to new heights with YUME. We invite visionary artists, skilled songwriters and passionate music enthusiasts to join our dynamic community.
          </p>
        </div>

        {{-- Unlock Endless Opportunities --}}
        <div>
          <h2 class="text-2xl md:text-3xl text-orange-400 font-bold mb-3">
            Unlock Endless Opportunities
          </h2>
          <p class="text-base md:text-lg leading-relaxed">
            <span class="font-semibold">Celebrate Your Passion:</span> Share your music with a community that acknowledges and celebrates your creativity.
        </p>
        <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Recognize Your Talent:</span> Gain the recognition you deserve for your unique sound and style.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Contribute to Something Extraordinary:</span> Every note, melody and beat contributes to a collective symphony that resonates within our vibrant community.
      </p>
        </div>

        {{-- Take the Leap --}}
        <div>
          <h2 class="text-2xl md:text-3xl text-orange-400 font-bold mb-3">
            Take the Leap
          </h2>
          <p class="mb-8 text-base md:text-lg leading-relaxed">
            Join YUME and transform your musical aspirations into something truly exceptional. Let YUME be the stage where your music comes alive.
          </p>
        </div>

        {{-- Benefits of Joining --}}
        <div>
          <h2 class="text-2xl md:text-3xl text-orange-400 font-bold mb-3">
            Benefits of Joining
          </h2>
          <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Meticulous Music Management:</span> Trust us to handle the business side, freeing you to focus on your craft.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Global Reach:</span> Publish your music on over 100 platforms, including Yume, Spotify, Apple Music and TikTok.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Revenue Streams:</span> Empower your fans through rewards for listening support and engagement.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Maximize Your Earnings:</span> Boost revenue through royalties, merchandising, NFTs, booked live performances and referrals.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        <span class="font-semibold">Artist Support:</span> Access resources, branding managers to fuel your success.
      </p>
        </div>

        {{-- Embark on a Musical Odyssey --}}
        <div>
          <h2 class="text-2xl md:text-3xl text-orange-400 font-bold mb-3">
            Embark on a Musical Odyssey
          </h2>
          <p class="text-base md:text-lg leading-relaxed">
            YUME awaits. Take the first step toward unlocking your full musical potential.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>


<section class="bg-gray-100 flex items-center justify-center min-h-screen px-6">

    <div class="max-w-3xl bg-white shadow-lg rounded-lg p-8 my-10">
        <h1 class="text-4xl font-extrabold leading-tight text-center" style="color: #FF7F3F;">ARTIST SUBMISSION FORM</h1>
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
