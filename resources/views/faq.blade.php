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

                        <br/>
                        <br/>
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
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What are the benefits of a Premium member?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        As a Premium member, you are entitled to Four (4) income streams.
                    </p>
                    <ol class="list-decimal list-inside space-y-3 mt-3 ml-4">
                        <li>
                            <span class="font-semibold text-gray-900">Direct Referral Commission</span>
                            <p class="text-gray-700 ml-4">
                                You will earn a US$15.00 Direct Referral Commission for each person you successfully
                                refer to the platform who becomes a Premium member by paying the US$100.00 affiliate
                                sign-up fee.
                            </p>
                            <p class="text-gray-700 ml-4 mt-2">
                                Additionally, if any of the people you enroll choose to enroll others, not only will
                                they be rewarded with a Direct Referral Commission, but you will also receive additional
                                Direct Referral Commissions up to 5 levels deep (depending on your qualified Rank).
                            </p>
                            <p class="text-gray-700 ml-4 mt-2">
                                There is no limit to the number of Premium members you can personally enroll (your first
                                level) or the number of people they can enroll personally (your second level), etc. This
                                is why the Direct Referral Commission can become so significant over time.
                            </p>
                            <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                                <table class="w-full table-auto border-collapse border border-gray-200 text-center text-center">
                                    <thead class="bg-gray-100">
                                    <tr class="bg-gray-100 text-gray-700">
                                        <th class="border border-gray-200 px-4 py-2">Level</th>
                                        <th class="border border-gray-200 px-4 py-2">Unranked</th>
                                        <th class="border border-gray-200 px-4 py-2">Silver</th>
                                        <th class="border border-gray-200 px-4 py-2">Gold</th>
                                        <th class="border border-gray-200 px-4 py-2">Diamond</th>
                                        <th class="border border-gray-200 px-4 py-2">Platinum</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">1</td>
                                        <td class="border border-gray-200 px-4 py-2">15%</td>
                                        <td class="border border-gray-200 px-4 py-2">15%</td>
                                        <td class="border border-gray-200 px-4 py-2">15%</td>
                                        <td class="border border-gray-200 px-4 py-2">15%</td>
                                        <td class="border border-gray-200 px-4 py-2">15%</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">2</td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">3</td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                        <td class="border border-gray-200 px-4 py-2">5%</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">4</td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2">3%</td>
                                        <td class="border border-gray-200 px-4 py-2">3%</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">5</td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2"></td>
                                        <td class="border border-gray-200 px-4 py-2">2%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">Binary Commission</span>
                            <p class="text-gray-700 ml-4">
                                To start earning the Binary Reward, you must personally enroll at least two (2) new
                                Premium members in your team. Your uplines (or anyone else in the placement tree) may
                                also place Premium members in your placement tree.
                            </p>
                            <p class="text-gray-700 ml-4 mt-2">
                                The Binary Commission is dependent on the number of Premium Members you have in your
                                Left Team and Right Team. Every 1 Premium member in the Left Team and the Right Team
                                constitutes a Pair. For every Pair, you earn $3.00 and the number of Pairs you are
                                entitled to in a week will depend on your Ranking.
                            </p>
                            <p class="text-gray-700 ml-4 mt-2">
                                Your Ranking is dependent on the number of directly recruited Premium Members that you
                                have. Spilled-over affiliates from your uplines do not contribute toward your Ranking.
                            </p>

                            <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                                <table class="w-full table-auto border-collapse border border-gray-200 text-center">
                                    <thead class="bg-gray-100">
                                    <tr class="bg-gray-100 text-gray-700">
                                        <th class="border border-gray-200 px-4 py-2">Rank</th>
                                        <th class="border border-gray-200 px-4 py-2">Silver</th>
                                        <th class="border border-gray-200 px-4 py-2">Gold</th>
                                        <th class="border border-gray-200 px-4 py-2">Diamond</th>
                                        <th class="border border-gray-200 px-4 py-2">Platinum</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Number of Active Direct
                                            Recruits
                                        </td>
                                        <td class="border border-gray-200 px-4 py-2">5</td>
                                        <td class="border border-gray-200 px-4 py-2">10</td>
                                        <td class="border border-gray-200 px-4 py-2">15</td>
                                        <td class="border border-gray-200 px-4 py-2">20</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                                <table class="w-full table-auto border-collapse border border-gray-200 text-center">
                                    <thead class="bg-gray-100">
                                    <tr class="bg-gray-100 text-gray-700">
                                        <th class="border border-gray-200 px-4 py-2">Rank</th>
                                        <th class="border border-gray-200 px-4 py-2">Unranked</th>
                                        <th class="border border-gray-200 px-4 py-2">Silver</th>
                                        <th class="border border-gray-200 px-4 py-2">Gold</th>
                                        <th class="border border-gray-200 px-4 py-2">Diamond</th>
                                        <th class="border border-gray-200 px-4 py-2">Platinum</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Weekly Max Pairs</td>
                                        <td class="border border-gray-200 px-4 py-2">30</td>
                                        <td class="border border-gray-200 px-4 py-2">100</td>
                                        <td class="border border-gray-200 px-4 py-2">200</td>
                                        <td class="border border-gray-200 px-4 py-2">300</td>
                                        <td class="border border-gray-200 px-4 py-2">500</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Weekly Max Commission
                                        </td>
                                        <td class="border border-gray-200 px-4 py-2">US$90</td>
                                        <td class="border border-gray-200 px-4 py-2">US$300</td>
                                        <td class="border border-gray-200 px-4 py-2">US$600</td>
                                        <td class="border border-gray-200 px-4 py-2">US$900</td>
                                        <td class="border border-gray-200 px-4 py-2">US$1,500</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">Mega Matching Bonus</span>
                            <p class="text-gray-700 ml-4">
                                While the Direct Referral Commissions and Binary Commissions are substantial, our Mega
                                Matching Bonuses are even more generous!
                            </p>
                            <p class="text-gray-700 ml-4 mt-3">
                                There are 2 types of Mega Matching Bonus
                            </p>
                            <ol class="list-decimal list-inside space-y-3 mt-3 ml-4">
                                <li>
                                    <span class="text-gray-700">
                                        You match 50% of the Binary Commission earned by everyone you directly enroll.
                                        Additionally, a percentage of everyone your direct recruits enroll FOUR (4)
                                        ENROLLMENT LEVELS DEEP, regardless of where they fall in your binary!
                                    </span>

                                    <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                                        <table class="w-full table-auto border-collapse border border-gray-200 text-center">
                                            <thead class="bg-gray-100">
                                            <tr class="bg-gray-100 text-gray-700">
                                                <th class="border border-gray-200 px-4 py-2">Level/Rank</th>
                                                <th class="border border-gray-200 px-4 py-2">Silver</th>
                                                <th class="border border-gray-200 px-4 py-2">Gold</th>
                                                <th class="border border-gray-200 px-4 py-2">Diamond</th>
                                                <th class="border border-gray-200 px-4 py-2">Platinum</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                                <td class="border border-gray-200 px-4 py-2">1</td>
                                                <td class="border border-gray-200 px-4 py-2">50%</td>
                                                <td class="border border-gray-200 px-4 py-2">50%</td>
                                                <td class="border border-gray-200 px-4 py-2">50%</td>
                                                <td class="border border-gray-200 px-4 py-2">50%</td>
                                            </tr>
                                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                                <td class="border border-gray-200 px-4 py-2">2</td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2">10%</td>
                                                <td class="border border-gray-200 px-4 py-2">10%</td>
                                                <td class="border border-gray-200 px-4 py-2">10%</td>
                                            </tr>
                                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                                <td class="border border-gray-200 px-4 py-2">3</td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2">5%</td>
                                                <td class="border border-gray-200 px-4 py-2">5%</td>
                                            </tr>
                                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                                <td class="border border-gray-200 px-4 py-2">4</td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2"></td>
                                                <td class="border border-gray-200 px-4 py-2">5%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                                <li>
                                    <span class="text-gray-700">
                                       Platinum members earn an additional 5% Mega Matching Bonus on the Streaming Income earned by everyone they directly enroll.
                                    </span>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <span class="font-semibold text-gray-900">Streaming Income</span>
                            <p class="text-gray-700 ml-4">
                                As a Premium member, you earn Streaming Points when you stream music and videos daily.
                                The Streaming Points you can earn on each streaming are dependent on your rank. The
                                number of Streaming Points you can earn in a day depends on the time you spend
                                streaming.
                            </p>
                            <p class="text-gray-700 ml-4 mt-3">
                                As a Premium member, you earn Streaming Points when you stream music and videos daily.
                                The Streaming Points you can earn on each streaming are dependent on your rank. The
                                number of Streaming Points you can earn in a day depends on the time you spend
                                streaming.

                                The value of each Streaming Point is determined by the allocated revenue of Yume for
                                that month divided by the overall number of Streaming Points for the same month.
                            </p>
                            <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                                <table class="w-full table-auto border-collapse border border-gray-200 text-center text-center">
                                    <thead class="bg-gray-100">
                                    <tr class="bg-gray-100 text-gray-700">
                                        <th class="border border-gray-200 px-4 py-2">Rank</th>
                                        <th class="border border-gray-200 px-4 py-2">Streaming Points per task</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Unrank</td>
                                        <td class="border border-gray-200 px-4 py-2">0.50</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Silver</td>
                                        <td class="border border-gray-200 px-4 py-2">0.80</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Gold</td>
                                        <td class="border border-gray-200 px-4 py-2">1.00</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Diamond</td>
                                        <td class="border border-gray-200 px-4 py-2">1.50</td>
                                    </tr>
                                    <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                        <td class="border border-gray-200 px-4 py-2">Platinum</td>
                                        <td class="border border-gray-200 px-4 py-2">2.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </li>
                    </ol>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Membership paid via Credit Card
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        When a member pays for their membership using a credit card, their membership will be placed on
                        "HOLD" for a period of two weeks. During this time, no commissions will be paid to the uplines
                        associated with their membership, and all commissions earned will be held in escrow within the
                        Escrow Wallet.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3 mt-3">
                        After the two-week period, on the third Sunday, the "HOLD" status expires, and commissions are
                        tabulated for the membership. Additionally, all escrowed earnings are released to the member's
                        e-wallet.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How to create an e-Code?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The value of each e-Code is US$120. To create an e-Code, you can use the balances from either
                        the E-wallet or the Cash Wallet.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What is Cash wallet?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The Cash Wallet is required when you want to create an e-Code or Upgrade. The minimum top-up
                        value is US$10. Currently, you can Top-Up through credit cards, wallets, and cryptocurrency. For
                        credit card top-up, the maximum amount is US$50. For cryptocurrency, you can only top up with
                        USDT (TRC-20) and BUSD (BEP20) and tabulate based on the company’s “buy” rate.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What are Streaming Points and how can I earn them?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Streaming Points are earned every time you stream music on our platform. These points can then
                        be converted into cash earnings
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How does the conversion of Streaming Points work?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The Company allocates 25% of the publishing income as the pool to be shared by all Streaming
                        Points. The value per Streaming Point varies each month depending on the monthly company’s
                        publishing revenue.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        Streaming Income is tabulated at the end of each period and paid out within 7 days.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What are Reward points and how can I earn them?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Reward points are earned based on 10% of your affiliate commission. These points can be redeemed
                        for various rewards such as gifts, raffle entries, or concert tickets. The percentage of reward
                        points available for redemption varies based on your Redemption Entitlement Level (REL).
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Reward Entitlement Level (REL)
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The Reward Entitlement Level (REL) is a measure determined by the number of accumulated Platinum
                        members within your team. As you gather more Platinum members in your team, your Reward
                        Entitlement Level rises, indicating your increasing success within the platform.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        Your Reward Entitlement Level plays a crucial role in determining the percentage of reward
                        points available for redemption. Essentially, the higher your Reward Entitlement Level, the
                        greater the percentage of reward points you can utilize for various rewards, such as gifts,
                        raffle entries, or concert tickets. This system incentivizes members to actively build and
                        support their teams, fostering a collaborative environment where everyone benefits from
                        collective success.
                    </p>

                    <div class="overflow-x-auto bg-white rounded-lg shadow mt-3">
                        <table class="w-full table-auto border-collapse border border-gray-200 text-center text-center">
                            <thead class="bg-gray-100">
                            <tr class="bg-gray-100 text-gray-700">
                                <th class="border border-gray-200 px-4 py-2">Status</th>
                                <th class="border border-gray-200 px-4 py-2">2 Stars Platinum</th>
                                <th class="border border-gray-200 px-4 py-2">3 Stars Platinum</th>
                                <th class="border border-gray-200 px-4 py-2">4 Stars Platinum</th>
                                <th class="border border-gray-200 px-4 py-2">Executive</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                <td class="border border-gray-200 px-4 py-2">Number of Accumulated Platinum</td>
                                <td class="border border-gray-200 px-4 py-2">2</td>
                                <td class="border border-gray-200 px-4 py-2">3</td>
                                <td class="border border-gray-200 px-4 py-2">4</td>
                                <td class="border border-gray-200 px-4 py-2">10</td>
                            </tr>
                            <tr class="border border-gray-300 text-gray-700 hover:bg-gray-50">
                                <td class="border border-gray-200 px-4 py-2">Percentage of Reward Points available for
                                    redemption
                                </td>
                                <td class="border border-gray-200 px-4 py-2">60%</td>
                                <td class="border border-gray-200 px-4 py-2">70%</td>
                                <td class="border border-gray-200 px-4 py-2">80%</td>
                                <td class="border border-gray-200 px-4 py-2">100%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            How can I withdraw the earnings?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Earnings can be withdrawn at any time and multiple times per day, with a processing time of 24
                        hours. The minimum withdrawal amount is US$100, and all payouts are through online banking or
                        cryptocurrency. For cryptocurrency we payout in USDT (TRC-20) and BUSD(BEP20), based on the
                        company's "Sell" rate.
                    </p>
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg mt-3">
                        An administrative fee of 3% with a minimum of US$1 and a 1.5 USDT/BUSD network fee (for
                        cryptocurrency) will be charged per withdrawal. Payments are made directly to your bank account
                        or USDT (TRC-20) or BUSD (BEP20) wallet, so it is important to have an updated and accurate bank
                        account and crypto wallet address in the back office to avoid any loss.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Why do I stop earning commission and streaming income?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The only reason is that you have gone Inactive. To continue earning commission and streaming
                        income, you need to remain “Active” by paying the periodic platform fee of US$4.99. If you opt
                        to pay yearly, you will enjoy a 30% discount.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Forgot password?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        To retrieve a forgotten password, click on the "Forgot Password" tab on the login page and a new
                        password will be generated and sent to the email address used during registration. Note that
                        support staff will not be able to assist with password retrieval due to encryption.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Can I edit Profile?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        Yes, you can. The administrator will NOT be responsible for the integrity and security of your
                        back office if it is compromised due to your negligence. Any financial loss will be self-borne.
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            Where is the Company located?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The Company is in Las Vegas, Nevada, USA. For all support issues, you can write to
                        customercare@yume.global
                    </p>
                </div>
            </div>
            {{--            --}}
            <div class="bg-white rounded-lg overflow-hidden transition hover:shadow-lg">
                <button
                    class="w-full text-left px-6 py-5 flex justify-between items-center focus:outline-none faq-toggle">
                        <span class="text-xl font-semibold text-gray-900 tracking-wide">
                            What time zone in the system and platform based in?
                        </span>
                    <svg class="w-6 h-6 text-gray-500 transition-transform transform duration-300 ease-in-out"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="faq-content px-6 pb-5 hidden">
                    <p class="text-gray-700 leading-relaxed text-base md:text-lg">
                        The system and platform’s time zone is Pacific Standard Time (PST) (GMT -8).
                    </p>
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
