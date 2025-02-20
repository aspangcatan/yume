<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUME Streaming - Discover & Earn</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .yume-bg {
            background: url('{{ asset('img/bg-yume.png') }}') no-repeat center center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Hero Section -->
<section class="yume-bg h-screen flex items-center justify-center text-center text-white relative">
    <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm"></div>
    <div class="relative p-8 bg-black bg-opacity-60 rounded-lg shadow-lg max-w-2xl">
        <h1 class="text-4xl font-bold">Discover. Stream. Earn.</h1>
        <p class="mt-3 text-lg">Join a global platform where artists showcase their music and listeners get rewarded for streaming.</p>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">A Rewarding Music Discovery Platform.</h2>
                <p class="text-gray-600 text-lg">YUME is a music discovery platform where listeners stream future hit makers and are rewarded for doing so.</p>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Aspiring artists launch their careers with a captive audience eager to listen to their songs.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Listeners are rewarded for streaming music and sharing the experience with others.</li>
                </ul>
            </div>
            <div class="text-center">
                <img src="{{ asset('img/img-section-1.png') }}" alt="YUME" class="rounded-lg w-full max-w-md mx-auto">
            </div>
        </div>
    </div>
</section>

<!-- Dark Theme Feature Section -->
<section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="order-2 md:order-1 text-center">
                <img src="{{ asset('img/img-section-2.png') }}" alt="YUME" class="rounded-lg w-full max-w-md mx-auto">
            </div>
            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold mb-4">The Platform for Future Chart Toppers</h2>
                <p class="text-lg text-gray-300">YUME gives aspiring artists a platform to break into the global scene.</p>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Get streamed globally by a community of listeners.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Get a chance to headline international concerts.</li>
                    <li class="flex items-start"><img src="{{ asset('img/bullet.png') }}" class="w-8 h-8 mr-3">Publish your songs <span class="text-blue-400 font-bold">FOR FREE</span>.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

</body>
</html>
