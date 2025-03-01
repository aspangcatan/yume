<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Streaming - Discover & Earn</title>
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
    </style>
</head>
<body class="bg-gray-100">

<header class="absolute top-0 left-0 w-full z-50">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME" class="h-10">
        </a>

        <!-- Desktop Navigation -->
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="text-white hover:text-yume font-medium transition">Home</a>
            <a href="{{ route('publishing') }}" class="text-white hover:text-yume font-medium transition">Publishing</a>
            <a href="{{ route('affiliate') }}" class="text-white hover:text-yume font-medium transition">Affiliate</a>
            <a href="rewards.php" class="text-white hover:text-yume font-medium transition">Rewards</a>
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

<section class="relative bg-black text-white">
    <div class="relative w-full h-[100vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Offset -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('{{ asset('img/03-Affiliate.jpg') }}'); background-position: center top 70px;">
        </div>
    </div>
</section>

<section id="feature-sections" class="bg-white py-20">
    <div class="container mx-auto px-12">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold leading-tight">What is Music Publishing?</h2>
            <div class="w-16 h-1 bg-gray-800 mx-auto my-4"></div>
        </div>
        
        <p class="text-gray-700 text-lg mb-4">Indulging in your favourite tunes isn't just a leisure activity; it's a golden opportunity to turn your passion into cold hard cash. At YUME, we've flipped the script on traditional music consumption – now, you can actually earn while grooving to your favourite beats!</p>
        
        <p class="text-gray-700 text-lg mb-4">Imagine a world where your love for music isn't just an expense but an income stream. It might sound too good to be true, but we assure you, that it's legit, and we're here to guide you through the process.</p>

        <p class="text-gray-700 text-lg mt-6">No prior experience or fancy skills are required. If you have a device and an internet connection, you're all set to embark on this exciting money-making journey.</p>

        <p class="text-gray-700 text-lg mt-6">But that's not all. YUME goes beyond just paying you for your musical enjoyment. We've crafted an affiliate program that lets you boost your earnings even more. Share the platform with friends and family, and watch your spare time transform into a lucrative venture!</p>

        <p class="text-gray-700 text-lg mt-6">So, are you ready to ditch the traditional music consumption model and start earning from the comfort of your pyjamas? It's time to groove, get paid, and amplify your income with YUME. Let's turn your spare time into a money-making sensation!</p>
        
        <h3 class="text-2xl font-semibold text-center mt-10">Are you ready to experience the difference?</h3>

        <p class="text-gray-700 text-lg mt-6">Unlike the traditional approach, our POWERLINE introduces a distinctive global line that redefines the norm. Upon registration, the system promptly secures your FREE position within the dynamic POWERLINE.</p>

        <p class="text-gray-700 text-lg mt-6">Once registered, it unveils a real-time display of everyone who joins after you, strategically placing them directly beneath your position in the POWERLINE.</p>

        <p class="text-gray-700 text-lg mt-6">The POWERLINE is a vibrant showcase of individuals, much like yourself, all in pursuit of a straightforward yet powerful means to earn money from the comfort of home, without the need for substantial time or financial investment. At our company, we are committed to providing an expansive Compensation Plan designed to empower individuals from diverse backgrounds, enabling many to taste success for the very first time!</p>

        <p class="text-gray-700 text-lg mt-6">Are you ready to experience the unparalleled difference? Join us and unlock a new era of financial possibilities!</p>
    
        <h3 class="text-2xl font-semibold text-center mt-10">Benefits of a Freemium Membership (FREE).</h3>

        <p class="text-gray-700 text-lg mt-6">Welcome to the Freemium Membership, where you have exclusive access to YUME’s back office.</p>

        <p class="text-gray-700 text-lg mt-6">As a Freemium member, you have the opportunity to give the platform a try before upgrading to Premium Membership. As a Freemium member, you can view the potential streaming income that you can earn as you stream and explore our platform. If you upgrade to Premium Membership within 28 days from your date of signing, your accumulated Streaming Points will be carried forward and be monetized in the Streaming Income payout. However, if you choose to stay in the Freemium tier, your Streaming Points will be reset to zero. You will start accumulating points again, allowing you to monetize them within the 28-day threshold when you upgrade.</p>

        <p class="text-gray-700 text-lg mt-6">Additionally, take advantage of your Active Replicator Page for recruitment purposes.</p>

        <p class="text-gray-700 text-lg mt-6">However, be aware of a potential setback: if your recruited downlines decide to upgrade to a Premium membership while you remain a Freemium member, there is a risk of losing those downlines. In such a case, the system will consider the downline as orphaned and automatically assign a new direct referrer.</p>

        <p class="text-gray-700 text-lg mt-6">Take note that there's no fixed timeline for Freemium members to upgrade to a Premium membership. Therefore, you can enjoy the benefits of Freemium membership for as long as you like, while keeping the option open to explore the additional perks that come with a Premium membership when the time is right for you.</p>
    
        <h3 class="text-2xl font-semibold text-center mt-10">Benefit of a Premium Membership (PAID)</h3>
        
        <p class="text-gray-700 text-lg mt-6">To participate is a one-time membership of US$20 and an affiliate sign-up fee of US$100. As an Affiliate, you are entitled to FOUR income streams.</p>
    </div>
</section>


<section class="p-10 bg-gray-100">

    <div class="max-w-4xl mx-auto bg-white p-5 rounded-lg shadow-lg">
        <!-- Tabs -->
        <div class="flex border-b">
            <button class="tab-button px-5 py-3 text-gray-600 font-semibold hover:text-orange-500 border-b-2 border-transparent focus:border-orange-500 active"
                data-tab="ranking">Ranking</button>
            <button class="tab-button px-5 py-3 text-gray-600 font-semibold hover:text-orange-500 border-b-2 border-transparent focus:border-orange-500"
                data-tab="referral">Direct Referral Commission</button>
            <button class="tab-button px-5 py-3 text-gray-600 font-semibold hover:text-orange-500 border-b-2 border-transparent focus:border-orange-500"
                data-tab="binary">Binary Commission</button>
            <button class="tab-button px-5 py-3 text-gray-600 font-semibold hover:text-orange-500 border-b-2 border-transparent focus:border-orange-500"
                data-tab="matching">Mega Matching Commission</button>
            <button class="tab-button px-5 py-3 text-gray-600 font-semibold hover:text-orange-500 border-b-2 border-transparent focus:border-orange-500"
                data-tab="streaming">Streaming Income</button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content mt-5" id="ranking">
            <h2 class="text-xl font-bold flex items-center gap-2">
            <img src="{{ asset('img/icon1.png') }}" alt="Ranking Icon" class="w-6 h-6"> 
                RANKING
            </h2>
            <p class="mt-2 text-gray-600">In YUME, ranks signify achievement levels within the affiliate program and factor into commission calculations.</p>
            <p class="mt-2 text-gray-600">These ranks are determined by the number of Active Direct Recruited Premium members who've paid their periodic platform subscription fees. The ranking is updated weekly following the FIRST periodic cut-off.</p>
            <table class="w-full mt-4 border">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-3 border">Rank</th>
                        <th class="p-3 border">Silver</th>
                        <th class="p-3 border">Gold</th>
                        <th class="p-3 border">Diamond</th>
                        <th class="p-3 border">Platinum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="p-3 border">Number of Active Direct Recruits</td>
                        <td class="p-3 border">5</td>
                        <td class="p-3 border">10</td>
                        <td class="p-3 border">15</td>
                        <td class="p-3 border">20</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="tab-content mt-5 hidden" id="referral">
            <h2 class="text-xl font-bold flex items-center gap-2">
            <img src="{{ asset('img/icon3.png') }}" alt="Ranking Icon" class="w-6 h-6"> 
                Direct Referral Commission
            </h2>
            <p class="mt-2 text-gray-600">
        You will earn a <strong class="text-green-600">US$15.00</strong> Direct Referral Commission for each person you successfully refer to the platform who becomes a Premium Streamer by paying the one-time Membership Fee of 
        <strong class="text-blue-600">US$20</strong> and a <strong class="text-blue-600">US$100.00</strong> affiliate signup fee.
    </p>

    <p class="mt-2 text-gray-600">
        Additionally, if any of the people you enroll choose to enroll others, not only will they be rewarded with a Direct Referral Commission, but you will also receive additional Direct Referral Commissions up to 
        <strong class="text-red-600">5 levels deep</strong> (depending on your qualified Rank).
    </p>

    <div class="overflow-auto mt-5">
        <table class="w-full border border-gray-300 min-w-[900px]">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 border">Level</th>
                    <th class="p-3 border">Unranked</th>
                    <th class="p-3 border">Silver</th>
                    <th class="p-3 border">Gold</th>
                    <th class="p-3 border">Diamond</th>
                    <th class="p-3 border">Platinum</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="p-3 border">1</td>
                    <td class="p-3 border">US$15</td>
                    <td class="p-3 border">US$15</td>
                    <td class="p-3 border">US$15</td>
                    <td class="p-3 border">US$15</td>
                    <td class="p-3 border">US$15</td>
                </tr>
                <tr>
                    <td class="p-3 border">2</td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border">US$5</td>
                    <td class="p-3 border">US$5</td>
                    <td class="p-3 border">US$5</td>
                    <td class="p-3 border">US$5</td>
                </tr>
                <tr>
                    <td class="p-3 border">3</td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border">US$5</td>
                    <td class="p-3 border">US$5</td>
                    <td class="p-3 border">US$5</td>
                </tr>
                <tr>
                    <td class="p-3 border">4</td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border">US$3</td>
                    <td class="p-3 border">US$3</td>
                </tr>
                <tr>
                    <td class="p-3 border">5</td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border"></td>
                    <td class="p-3 border">US$2</td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>

        <div class="tab-content mt-5 hidden" id="binary">
            <h2 class="text-xl font-bold flex items-center gap-2">
            <img src="{{ asset('img/icon8.png') }}" alt="Ranking Icon" class="w-6 h-6"> 
                Binary Commission
            </h2>
            <p class="mt-2 text-gray-600">
        To start earning the Binary Commission, you must personally enroll at least two (2) Premium Members in your Team. Your upline (or anyone else in the placement tree) may also place Premium members in your placement tree.
    </p>
    <p class="mt-2 text-gray-600">
        Binary Commission is dependent on the number of Premium Members you have in your Left Team and Right Team. Every 1 Member in the Left Team and the Right Team constitutes a Pair. For every Pair, you earn <strong class="text-green-600">US$3.00</strong> and the number of Pairs you are entitled to in a week will depend on your Ranking.
    </p>

    <div class="overflow-auto mt-5">
        <table class="w-full border border-gray-300 min-w-[900px]">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 border">Rank</th>
                    <th class="p-3 border">Unrank</th>
                    <th class="p-3 border">Silver</th>
                    <th class="p-3 border">Gold</th>
                    <th class="p-3 border">Diamond</th>
                    <th class="p-3 border">Platinum</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="p-3 border">Weekly Max Pairs</td>
                    <td class="p-3 border">30</td>
                    <td class="p-3 border">100</td>
                    <td class="p-3 border">200</td>
                    <td class="p-3 border">300</td>
                    <td class="p-3 border">500</td>
                </tr>
                <tr>
                    <td class="p-3 border">Weekly Max Commission</td>
                    <td class="p-3 border">US$90</td>
                    <td class="p-3 border">US$300</td>
                    <td class="p-3 border">US$600</td>
                    <td class="p-3 border">US$900</td>
                    <td class="p-3 border">US$1,500</td>
                </tr>
            </tbody>
        </table>
    </div>
        </div>

        <div class="tab-content mt-5 hidden" id="matching">
            <h2 class="text-xl font-bold flex items-center gap-2">
            <img src="{{ asset('img/icon4.png') }}" alt="Ranking Icon" class="w-6 h-6"> 
                Mega Matching Commission
            </h2>
            <p class="mt-2">Mega Matching Bonuses are even more generous!</p>
            <p class="mt-2">There are 2 types of Mega Matching Bonus:</p>

            <div class="pb-5 overflow-auto">
                <ol class="list-decimal pl-5">
                    <li class="mt-2">
                        You match 50% of the Binary Commission earned by everyone you directly enroll.
                        <p class="mt-2">
                            Additionally, a percentage of everyone your direct recruits enroll FOUR (4) ENROLLMENT LEVELS DEEP, regardless of where they fall in your binary!
                        </p>
                        <div class="pb-5 overflow-auto">
                            <table class="mt-6 w-full min-w-[800px] border border-gray-300 text-center">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="border border-gray-300 px-4 py-2">Level/Rank</th>
                                        <th class="border border-gray-300 px-4 py-2">Silver</th>
                                        <th class="border border-gray-300 px-4 py-2">Gold</th>
                                        <th class="border border-gray-300 px-4 py-2">Diamond</th>
                                        <th class="border border-gray-300 px-4 py-2">Platinum</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">1</td>
                                        <td class="border border-gray-300 px-4 py-2">50%</td>
                                        <td class="border border-gray-300 px-4 py-2">50%</td>
                                        <td class="border border-gray-300 px-4 py-2">50%</td>
                                        <td class="border border-gray-300 px-4 py-2">50%</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">2</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">10%</td>
                                        <td class="border border-gray-300 px-4 py-2">10%</td>
                                        <td class="border border-gray-300 px-4 py-2">10%</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">3</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">5%</td>
                                        <td class="border border-gray-300 px-4 py-2">5%</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">4</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">&nbsp;</td>
                                        <td class="border border-gray-300 px-4 py-2">5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="mt-4">
                        Platinum members earn an additional 5% Mega Matching Bonus on the Streaming Income earned by everyone they directly enroll.
                    </li>
                </ol>
            </div>
        </div>

        <div class="tab-content mt-5 hidden" id="streaming">
            <h2 class="text-xl font-bold flex items-center gap-2">
            <img src="{{ asset('img/icon5.png') }}" alt="Ranking Icon" class="w-6 h-6"> 
                Streaming Income
            </h2>
            
            <p class="mt-2">
                On a daily basis, Premium members will have the opportunity to listen to and view 30 "assigned" music tracks and videos as part of the daily task before gaining access to stream additional content from the library. Streaming Points will be allocated exclusively upon the successful completion of each music video streaming session.
            </p>

            <div class="pb-5 overflow-auto">
                <table class="mt-6 w-full min-w-[600px] border border-gray-300 text-center">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2">Rank</th>
                            <th class="border border-gray-300 px-4 py-2">Streaming Points per Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Unrank</td>
                            <td class="border border-gray-300 px-4 py-2">0.50</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Silver</td>
                            <td class="border border-gray-300 px-4 py-2">0.80</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Gold</td>
                            <td class="border border-gray-300 px-4 py-2">1.00</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Diamond</td>
                            <td class="border border-gray-300 px-4 py-2">1.50</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Platinum</td>
                            <td class="border border-gray-300 px-4 py-2">2.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="mt-6 font-bold">Streaming Points - Value Tabulation</p>
            <p class="mt-2">
                The Company will allocate 25% of the publishing income as the pool to be shared by all Streaming Points. The value per Streaming Point will vary each month depending on the monthly company’s publishing revenue.
            </p>

            <div class="pb-5 overflow-auto">
                <table class="mt-6 w-full min-w-[600px] text-center">
                    <tbody>
                        <tr>
                            <td class="border-b border-black px-4 py-2">25% Company Publishing Income</td>
                            <td rowspan="2" class="align-middle px-4 py-2">= Value Per Streaming Point</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">Total Streaming Points Generated</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="mt-4">Streaming Income is tabulated at the end of each period and paid out 7 days after.</p>
        </div>
        </div>
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

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        document.body.classList.toggle('menu-open');  // Disable or enable scrolling
    });

    document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab-button");
    const contents = document.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
        tab.addEventListener("click", function () {
            let target = this.getAttribute("data-tab");

            // Remove active styles from all tabs
            tabs.forEach(t => t.classList.remove("text-orange-500", "border-orange-500"));
            this.classList.add("text-orange-500", "border-orange-500");

            // Hide all content sections
            contents.forEach(content => content.classList.add("hidden"));

            // Show the selected tab content
            document.getElementById(target).classList.remove("hidden");
            });
        });
    });
</script>
</body>
</html>
