<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
      <!-- scripts here -->
      <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm text-center">
        <h2 class="text-2xl font-bold text-gray-800">Enter Authentication Code</h2>
        <p class="text-gray-600 mt-2">We've sent a 6-digit code to your email.</p>

        <!-- 6-digit PIN input fields -->
        <div class="flex justify-center gap-2 mt-4">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 1)">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 2)">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 3)">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 4)">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 5)">
            <input type="text" maxlength="1" class="w-12 h-12 text-xl text-center border rounded-md focus:ring-2 focus:ring-orange-400 outline-none" oninput="moveFocus(this, 6)">
        </div>

        <a href="{{ route('powerline') }}"
           class="w-full mt-6 bg-orange-500 text-white py-2 rounded-md hover:bg-orange-600 transition text-center block cursor-pointer">
            Verify
        </a>

        <p class="text-gray-600 text-sm mt-4">
            Didn't receive the code? <a id="resendAuthBtn" href="#" class="text-orange-500 hover:underline">Resend</a>
        </p>
    </div>

    <!-- //scripts -->
    <script src="{{ asset('javascripts/myjs.js') }}?v={{ time() }}"></script>
</body>
</html>
