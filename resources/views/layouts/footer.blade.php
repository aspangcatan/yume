<footer id="footer" class="bg-gray-900 text-white">
    <div class="text-center py-4 border-t border-gray-700">
        <div class="container mx-auto">
            <p class="text-sm">
                2025 © Copyright
                <a href="https://www.yume.global/{{ route('index') }}" class="text-blue-400 hover:underline">YUME</a>,
                - All rights reserved. |
                <a href="{{ route('contact') }}" class="text-blue-400 hover:underline">Contact</a> |
                <a href="{{ route('faq') }}" class="text-blue-400 hover:underline">FAQ</a> |
                <a href="#" class="text-blue-400 hover:underline">Privacy Policy</a> |
                <a href="#" class="text-blue-400 hover:underline">Terms & Conditions</a>
            </p>
        </div>
    </div>

    <div class="text-center py-4">
        <div class="container mx-auto flex justify-center space-x-4">
            <a href="https://facebook.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-facebook-link.png') }}" class="w-9 hover:opacity-75" alt="Facebook"
                     title="Facebook">
            </a>
            <a href="https://twitter.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-xcom-link.png') }}" class="w-9 hover:opacity-75" alt="Twitter"
                     title="Twitter">
            </a>
            <a href="https://www.instagram.com/yumemusicglobal" target="_blank">
                <img src="{{ asset('img/img-instagram-link.png') }}" class="w-9 hover:opacity-75" alt="Instagram"
                     title="Instagram">
            </a>
            <a href="https://youtube.com/@YUMEMusicGlobal?si=fYHFfZn42-jxbcSk" target="_blank">
                <img src="{{ asset('img/img-youtube-link.png') }}" class="w-9 hover:opacity-75" alt="YouTube"
                     title="YouTube">
            </a>
        </div>
    </div>
</footer>
