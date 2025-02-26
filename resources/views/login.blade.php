<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Global</title>

    <!-- scripts here -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    
</head>
<body class="h-screen flex flex-col bg-[url('{{ asset('img/bgloginpage.png') }}')] bg-cover bg-center">
    <!-- Sticky Header -->
    <header class="bg-black text-white p-4 fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#">
                <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME Logo" class="h-10">
            </a>
            <nav>
                <ul class="flex space-x-6 uppercase text-sm">
                    <li><a href="#" class="hover:text-orange-400">Home</a></li>
                    <li><a href="#" class="hover:text-orange-400">Publishing</a></li>
                    <li><a href="#" class="hover:text-orange-400">Affiliate</a></li>
                    <li><a href="#" class="hover:text-orange-400">Rewards</a></li>
                    <li><a href="#" class="hover:text-orange-400">FAQ</a></li>
                    <li><a href="#" class="hover:text-orange-400">Sign In</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
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
                <div class="mt-4">
                    <label class="block text-sm text-gray-600">Slide to verify</label>
                    <div class="w-full bg-gray-300 p-3 text-center rounded-md cursor-pointer">I'm not a Robot!</div>
                </div>
                <button id="loginbtn" data-url="{{ route('powerline') }}" class="w-full mt-4 bg-orange-500 text-white py-2 rounded-md hover:bg-orange-600">Submit</button>
                <div class="text-center mt-3">
                    <a href="#" class="text-sm text-gray-600 hover:underline">Forgot Password?</a>
                </div>
            <p class="text-center text-xs text-gray-500 mt-6">Current System Time:<br>25 Feb 2025, Tue 10:25:00 PM (GMT -8)</p>
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

    <script src="{{ asset('javascripts/myjs.js') }}?v={{ time() }}"></script>
</body>
</html>
