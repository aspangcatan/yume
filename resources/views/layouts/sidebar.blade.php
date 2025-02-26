<div id="sidebar"
     class="fixed top-0 left-0 bg-white shadow-md py-6 px-6 w-64 h-screen overflow-y-auto transform -translate-x-full transition-transform md:translate-x-0 md:fixed md:w-64">

    <a href="#" class="noChildren flex items-center text-gray-600 hover:text-gray-900 py-2 px-2 rounded active">
        <i class="fas fa-tachometer-alt mr-3"></i>Dashboard
    </a>
    <a href="{{ route('powerline') }}"
       class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-sitemap mr-3"></i>My Powerline
    </a>
    <a href="{{ route('profile') }}"
       class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-user mr-3"></i>Profile
    </a>
    <a href="{{ route('stream') }}"
       class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-music mr-3"></i>Stream Music
    </a>

    <div class="relative">
            <button id="submenu-button" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fas fa-award mr-3"></i>Rewards Report
                <i id="submenu-icon" class="submenu-icon fas {{ request()->routeIs('directrefferal') || request()->routeIs('binarycommision') || request()->routeIs('megamatchingcommision') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> 
            </button>
            <div id="submenu" class="submenu {{ request()->routeIs('directrefferal') || request()->routeIs('binarycommision') || request()->routeIs('megamatchingcommision') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md"> 
                <a href="{{ route('directrefferal') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Direct Referral</a>
                <a href="{{ route('binarycommision') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Binary Commission</a>
                <a href="{{ route('megamatchingcommision') }}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Mega Matching Commission</a>
            </div>
    </div>

	<div class="relative">
            <button id="submenu-button-ewallet" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-wallet mr-3"></i>e-wallet
                <i id="submenu-icon-ewallet" class="submenu-icon fas {{ request()->routeIs('ewalletreport') || request()->routeIs('ewallettransfer') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenuewallet" class="submenu {{ request()->routeIs('ewalletreport') || request()->routeIs('ewallettransfer') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('ewalletreport')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">e-Wallet Report</a>
                <a href="{{ route('ewallettransfer')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">e-Wallet Transfer</a>
            </div>
    </div>
    <div class="relative">
            <button id="submenu-button-cashwallet" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-wallet mr-3"></i>Cash Wallet
                <i id="submenu-icon-cashwallet" class="submenu-icon fas {{ request()->routeIs('cashwalletreport') || request()->routeIs('cashwallettransfer') || request()->routeIs('cashwallettopuprequest') || request()->routeIs('pendingtopup') || request()->routeIs('approvetopup') || request()->routeIs('canceledtopup') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenucashwallet" class="submenu {{ request()->routeIs('cashwalletreport') || request()->routeIs('cashwallettransfer') || request()->routeIs('cashwallettopuprequest') || request()->routeIs('pendingtopup') || request()->routeIs('approvetopup') || request()->routeIs('canceledtopup') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('cashwalletreport')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Cash Wallet Report</a>
                <a href="{{ route('cashwallettransfer')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Cash Wallet Transfer</a>
                <a href="{{ route('cashwallettopuprequest')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Cash Wallet Top Up Request</a>
                <a href="{{ route('pendingtopup')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Pending Top Up</a>
                <a href="{{ route('approvetopup')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Approved / Completed Top Up</a>
                <a href="{{ route('canceledtopup')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Cancelled / Timed Out Top Up</a>
            </div>
    </div>
    <div class="relative">
            <button id="submenu-button-streamingpoint" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
            <i class="nav-icon fas fa-braille mr-3"></i>Streaming Point
                <i id="submenu-icon-streamingpoint" class="submenu-icon fas {{ request()->routeIs('streamingpointreport') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenustreamingpoint" class="submenu {{ request()->routeIs('streamingpointreport') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('streamingpointreport')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Streaming Point Report</a>
            </div>
    </div>
    <div class="relative">
            <button id="submenu-button-rewardpoint" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
            <i class="nav-icon fas fa-braille mr-3"></i>Reward Points
                <i id="submenu-icon-rewardpoint" class="submenu-icon fas {{ request()->routeIs('rewardpointsreport') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenurewardpoint" class="submenu {{ request()->routeIs('rewardpointsreport') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('rewardpointsreport')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Reward Points Report</a>
            </div>
    </div>
    <div class="relative">
            <button id="submenu-button-ecodemanagement" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-key mr-3"></i>e-Code Mgmt.
                <i id="submenu-icon-ecodemanagement" class="submenu-icon fas {{ request()->routeIs('ecodecreation') || request()->routeIs('activeecode') || request()->routeIs('activatedecode') || request()->routeIs('deactivatedecode') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenuecodemanagement" class="submenu {{ request()->routeIs('ecodecreation') || request()->routeIs('activeecode') || request()->routeIs('activatedecode') || request()->routeIs('deactivatedecode') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('ecodecreation')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">e-Code Creation</a>
                <a href="{{ route('activeecode')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Active e-Code</a>
                <a href="{{ route('activatedecode')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Activated e-Code</a>
                <a href="{{ route('deactivatedecode')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Deactivated e-Code</a>
            </div>
    </div>
    <div class="relative">
            <button id="submenu-button-withdrawal" class="submenu-button flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded w-full">
                <i class="fas fa-hand-holding-usd mr-3"></i>Withdrawal
                <i id="submenu-icon-withdrawal" class="submenu-icon fas {{ request()->routeIs('withdrawalrequest') || request()->routeIs('pendingwithdrawal') || request()->routeIs('approvedwithdrawal') || request()->routeIs('rejectedwithdrawal') ? 'fa-chevron-down' : 'fa-chevron-right' }} ml-auto"></i> <!-- Default right (>) -->
            </button>
            <div id="submenuwithdrawal" class="submenu {{ request()->routeIs('withdrawalrequest') || request()->routeIs('pendingwithdrawal') || request()->routeIs('approvedwithdrawal') || request()->routeIs('rejectedwithdrawal') ? 'block' : 'hidden' }} ml-8 mt-2 bg-gray-100 rounded-md shadow-md">
                <a href="{{ route('withdrawalrequest')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Withdrawal Request</a>
                <a href="{{ route('pendingwithdrawal')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Pending Withdrawal</a>
                <a href="{{ route('approvedwithdrawal')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Approved Withdrawal</a>
                <a href="{{ route('rejectedwithdrawal')}}" class="block py-2 px-4 text-gray-600 hover:bg-gray-200">Rejected Withdrawal</a>
            </div>
    </div>
    <a href="#" id="networkViewer" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-network-wired mr-3"></i>Network Viewer
    </a>
    <a href="#" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-bullhorn mr-3"></i>Marketing
    </a>
    <a href="#" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-book mr-3"></i>Guides & Tutorials
    </a>
    <a href="#" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-life-ring mr-3"></i>Support
    </a>
    <a href="#" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-question-circle mr-3"></i>FAQ
    </a>
    <a href="#" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-bullhorn mr-3"></i>Announcements
    </a>
    <a href="{{ route('login') }}" onclick="window.location.href=this.href; return false;" class="noChildren flex items-center text-gray-600 hover:bg-gray-200 hover:text-gray-900 py-2 px-2 rounded">
        <i class="fas fa-sign-out-alt mr-3"></i>Logout
    </a>
</div>
