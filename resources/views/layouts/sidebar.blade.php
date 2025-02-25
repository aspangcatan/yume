<div id="sidebar"
     class="fixed top-0 left-0 bg-white shadow-md py-6 px-6 w-64 h-screen overflow-y-auto transform -translate-x-full transition-transform md:translate-x-0 md:fixed md:w-64">

<a href="#" class="flex items-center text-gray-600 hover:text-gray-900 py-2 px-2 rounded active">
        <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
    </a>
    <a href="{{ route('powerline') }}"
       class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-sitemap mr-3"></i>My Powerline
    </a>
    <a href="{{ route('profile') }}"
       class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-user mr-3"></i>Profile
    </a>
    <a href="{{ route('stream') }}"
       class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-music mr-3"></i>Stream Music
    </a>

    <div class="relative">
            <button id="submenu-button" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-chart-bar mr-3"></i>Rewards Report
                <i id="submenu-icon" class="fas fa-chevron-right ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenu" class="hidden ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('directrefferal') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Direct Referral</a>
                <a href="{{ route('binarycommision') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Binary Commission</a>
                <a href="{{ route('megamatchingcommision') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Mega Matching Commission</a>
            </div>
    </div>

	<div class="relative">
            <button id="submenu-button-ewallet" class="flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-chart-bar mr-3"></i>e-wallet
                <i id="submenu-icon-ewallet" class="fas fa-chevron-right ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenuewallet" class="hidden ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('ewalletreport')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">e-Wallet Report</a>
                <a href="{{ route('ewallettransfer')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">e-Wallet Transfer</a>
            </div>
    </div>
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
