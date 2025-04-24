<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
        <!-- Logo -->
        <a href="{{ route('index') }}" class="flex items-center space-x-3">
            <img src="{{ asset('img/yumeglobal-logo.png') }}" alt="YUME" class="h-10">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center space-x-6">
            <a href="{{ route('index') }}" class="text-white hover:text-yume font-bold transition">Home</a>
            <a href="{{ route('publishing') }}" class="text-white hover:text-yume font-bold transition">Artist</a>
            <a href="{{ route('affiliate') }}" class="text-white hover:text-yume font-bold transition">Listener</a>
            <a href="{{ route('rewards') }}" class="text-white hover:text-yume font-bold transition">Rewards</a>
            <a href="{{ route('faq') }}" class="text-white hover:text-yume font-bold transition">FAQ</a>

            <!-- Wrapping Sign In button in a flex container to align properly -->
            <div class="flex items-center">
                <a href="{{ route('login') }}"
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
        <a href="{{ route('publishing') }}" class="text-xl hover:text-yume font-medium">Artist</a>
        <a href="{{ route('affiliate') }}" class="text-xl hover:text-yume font-medium">Listener</a>
        <a href="{{ route('rewards') }}" class="text-xl hover:text-yume font-medium">Rewards</a>
        <a href="{{ route('faq') }}" class="text-xl hover:text-yume font-medium">FAQ</a>
        <a href="{{ route('login') }}" class="bg-yume hover:bg-yume-contrast text-white font-semibold py-3 px-6 rounded-full transition">Sign In</a>
    </nav>
</header>
