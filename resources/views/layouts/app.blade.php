<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Optional: Show loading indicator */
        #loading {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 5px;
        }

        a.active{
            background: rgb(229,231,235);
        }
    </style>
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
    @include('layouts.sidebar')

    <div class="flex-1 md:ml-64 transition-all">
        <!-- Navbar -->
        <nav class="bg-white shadow-md py-4 px-6 flex">
            <button class="md:hidden text-gray-600 mr-3" onclick="toggleSidebar()">☰</button>
            <div class="text-xl font-bold text-gray-700">
                <img src="{{ asset('img/yumeglobal-logo.png') }}" class="h-12 w-auto" alt="YumeGlobal Logo" />
            </div>
        </nav>

        <!-- Main Content -->
        <div class="p-6">

            <div id="loading">Loading...</div>
            <div id="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("a").on("click", function (e) {
            e.preventDefault();
            $("a").removeClass("active");
            $(this).addClass("active");
            var url = $(this).attr("href");
            toggleSidebar();
            $("#loading").show(); // Show loading indicator

            $.ajax({
                url: url,
                type: "GET",
                success: function (data) {
                    $("#content").html($(data).find("#content").html()); // Load only #content
                    history.pushState(null, "", url); // Update URL without reloading

                },
                error: function () {
                    alert("Failed to load content.");
                },
                complete: function () {
                    $("#loading").hide();
                }
            });
        });

        // Handle back/forward navigation
        window.onpopstate = function () {
            $.get(location.href, function (data) {
                $("#content").html($(data).find("#content").html());
            });
        };
    });
</script>
</body>
</html>
