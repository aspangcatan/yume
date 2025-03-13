<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Global</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        #slider {
            cursor: grab;
        }

        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
        
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('{{ asset('img/streamingMusic.png') }}');
            
            overflow-y: hidden;
        }

    </style>

    <!-- scripts here -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>

    @include('layouts.header')

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-10 mt-16">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold text-center text-gray-800">Sign In</h2>

            <div>
                <input type="text" placeholder="Username" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>
            <div class="mt-4">
                <input type="password" placeholder="Password" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <!-- SLIDE TO VERIFY -->
            <div class="mt-4 w-full p-3 border rounded-md bg-gray-100 shadow-md">
                <div id="slider-container" class="relative w-full h-12 bg-gray-200 rounded-md flex items-center">
                    <div id="slider" class="w-12 h-12 bg-gray-500 rounded-md flex justify-center items-center shadow-md text-white font-bold select-none cursor-pointer">
                        ➠
                    </div>
                    <p id="slide-text" class="absolute w-full text-center text-gray-700 font-semibold">
                        Slide to Verify!
                    </p>
                </div>
            </div>

            <!-- SUBMIT BUTTON -->
            <a href="{{ route('authentication') }}"
               class="w-full mt-4 bg-orange-500 text-white py-2 rounded-md hover:bg-orange-600 text-center block cursor-pointer">
                Submit
            </a>

            <div class="text-center mt-3">
                <a id="openModalBtn" href="#" class="text-sm text-gray-600 hover:underline">Forgot Password?</a>
            </div>

            <p class="text-center text-xs text-gray-500 mt-6">
                Current System Time:<br>25 Feb 2025, Tue 10:25:00 PM (GMT -8)
            </p>
        </div>
    </main>


    <footer class="bg-black text-gray-400 text-center py-4 mt-10">
        <div class="container mx-auto">
            <p class="text-sm">
                2025 © COPYRIGHT <span class="text-white font-bold">YUME</span>. - ALL RIGHTS RESERVED. |
                <a href="#" class="hover:text-orange-400">CONTACT</a> |
                <a href="#" class="hover:text-orange-400">FAQ</a> |
                <a href="#" class="hover:text-orange-400">PRIVACY POLICY</a> |
                <a href="#" class="hover:text-orange-400">TERMS & CONDITIONS</a>
            </p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="p-2 border border-gray-400 rounded-lg hover:bg-gray-700">
                    <i class="fab fa-facebook-f text-white"></i>
                </a>
                <a href="#" class="p-2 border border-gray-400 rounded-lg hover:bg-gray-700">
                    <i class="fab fa-x-twitter text-white"></i>
                </a>
                <a href="#" class="p-2 border border-gray-400 rounded-lg hover:bg-gray-700">
                    <i class="fab fa-instagram text-white"></i>
                </a>
                <a href="#" class="p-2 border border-gray-400 rounded-lg hover:bg-gray-700">
                    <i class="fab fa-youtube text-white"></i>
                </a>
            </div>
        </div>
    </footer>


     <!-- Forgot Password Modal -->
     <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden" id="forgotPasswordModal">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">

            <!-- Header -->
            <div class="bg-black text-white text-center py-3 rounded-t-md text-lg font-semibold">
                Forgot Password?
            </div>

            <!-- Form -->
            <div class="p-6">
                <input type="text" placeholder="Username or Email" class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400">

                <!-- Notes Section -->
                <div class="mt-4 text-sm">
                    <p class="font-bold text-red-600">Notes:</p>
                    <ul class="list-decimal list-inside text-gray-700 mt-2">
                        <li>Please fill in your Username above and we will send you a new password to your registered email!</li>
                        <li>If you can’t locate the email in your Inbox, please check your Spam/Junk folder. If found in these folders, please mark it as ‘Safe’ so that you may continue to receive important email notifications.</li>
                    </ul>
                </div>

                <hr class="my-4">

                <!-- Buttons -->
                <div class="flex justify-center gap-4">
                    <button id="sendForgotPassword" class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-800 transition">SEND</button>
                    <button id="closeModalBtn" class="bg-black text-white px-6 py-2 rounded-md hover:bg-gray-800 transition">CLOSE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts here -->
    <script src="{{ asset('javascripts/myjs.js') }}?v={{ time() }}"></script>
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
