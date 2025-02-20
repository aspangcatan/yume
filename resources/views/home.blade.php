<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
</head>
<body class="min-h-screen bg-gray-100">
<div class="flex">
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden" onclick="toggleSidebar()"></div>

    <!-- Sidebar -->
    <div id="sidebar" class="fixed top-0 left-0 bg-white shadow-md py-6 px-6 w-64 h-full transform -translate-x-full transition-transform md:translate-x-0 md:fixed md:h-full md:w-64">
        <a href="#" class="flex items-center text-gray-600 hover:text-gray-900 py-2 px-2 rounded bg-gray-200">
            <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-sitemap mr-3"></i>My Powerline
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-user mr-3"></i>User Account
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-chart-bar mr-3"></i>Rewards Report
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-wallet mr-3"></i>e-Wallet
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-money-bill mr-3"></i>Cash Wallet
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-play-circle mr-3"></i>Streaming Point
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-gift mr-3"></i>Reward Points
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-key mr-3"></i>e-Code Management
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-hand-holding-usd mr-3"></i>Withdrawal
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-network-wired mr-3"></i>Network Viewer
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-bullhorn mr-3"></i>Marketing
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-book mr-3"></i>Guides & Tutorials
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-life-ring mr-3"></i>Support
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-question-circle mr-3"></i>FAQ
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-bullhorn mr-3"></i>Announcements
        </a>
        <a href="#" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
            <i class="fas fa-sign-out-alt mr-3"></i>Logout
        </a>
    </div>

    <div class="flex-1 md:ml-64 transition-all">
        <!-- Navbar -->
        <nav class="bg-white shadow-md py-4 px-6 flex">
            <button class="md:hidden text-gray-600 mr-3" onclick="toggleSidebar()">☰</button>
            <div class="text-xl font-bold text-gray-700">YUME</div>
        </nav>

        <!-- Main Content -->
        <div class="p-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Welcome to the Homepage</h2>
                <p class="text-gray-600">This is your homepage where you can display various content for your users.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
