@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-12 gap-4">
        <!-- Left Side: Top 10 Artists -->
        <div class="col-span-9">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div id="playerContainer">
                    <iframe id="musicPlayer"
                            src="https://www.youtube.com/embed/dAbkkTYhhDc?rel=0&enablejsapi=1"
                            class="w-full rounded"
                            height="400"
                            frameborder="0"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
                <h2 id="songTitle" class="text-xl font-bold text-white mt-4">Now Playing: Song Title</h2>
                <p id="artistName" class="text-gray-400">Eminem</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 mt-6">
                <!-- Artist Slider -->
                <h3 class="text-xl font-semibold mb-4">Popular Artists</h3>
                <div class="overflow-x-auto">
                    <div class="flex space-x-4">
                        @foreach ($popularArtists as $artist)
                            <div class="w-40 flex-shrink-0 bg-gray-100 shadow rounded-lg p-4 text-center">
                                <img src="{{ asset('img/yume-artist-1.png') }}"
                                     class="w-24 h-24 mx-auto rounded-full mb-2"
                                     alt="{{ $artist->name }}">
                                <p class="font-medium">{{ $artist->name }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Most Listened Songs -->
            <div class="bg-white shadow-md rounded-lg p-6 mt-6">
                <h3 class="text-xl font-semibold mb-4">Most Listened Songs</h3>
                <div class="overflow-x-auto">
                    <div class="flex space-x-4">
                        @foreach ($mostListenedSongs as $song)
                            <div class="w-40 flex-shrink-0 bg-gray-100 shadow rounded-lg p-4 text-center">
                                <img src="{{ asset('img/yume-artist-5.png') }}" class="w-24 h-24 mx-auto rounded mb-2"
                                     alt="{{ $song->title }}">
                                <p class="font-medium">{{ $song->title }}</p>
                                <p class="text-sm text-gray-500">{{ $song->artist }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Recommended Songs -->
        <div class="col-span-3">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-lg font-semibold">Recommended for You</h3>
                <ul class="space-y-3">
                    @foreach ($recommendedSongs as $song)
                        <li class="flex items-center gap-2 p-2 border-b">
                            <img src="{{ asset('img/yume-artist-3.png') }}" class="w-16 h-16 rounded"
                                 alt="{{ $song->title }}">
                            <div>
                                <a href="javascript:void(0);" class="text-blue-600 font-medium load-song"
                                   data-id="{{ $song->id }}">{{ $song->title }}</a>
                                <p class="text-sm text-gray-500">{{ $song->artist }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="videoModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
        <div class="bg-white rounded-lg p-6 max-w-lg w-full">
            <h3 class="text-lg font-semibold mb-4">Watch the Video</h3>
            <div class="relative" id="video-container">
                <iframe id="musicPlayer"
                        src="https://www.youtube.com/embed/dAbkkTYhhDc?rel=0&enablejsapi=1"
                        class="w-full rounded"
                        height="700"
                        frameborder="0"
                        allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
            <button id="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var player;
        var apiLoaded = false; // Track if API is loaded

        function loadYouTubeAPI() {
            if (!apiLoaded) {
                var tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
                apiLoaded = true; // Mark API as loaded
            }
        }

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('musicPlayer', {
                events: {
                    'onStateChange': function (event) {
                        if (event.data === YT.PlayerState.ENDED) {
                            Swal.fire({
                                title: "Congratulations, you've earned 10pts",
                                icon: "success",
                                draggable: true
                            });
                        }
                    },
                    'onError': function (event) {
                        console.warn("YouTube Player Error:", event);
                    }
                }
            });
        }

        $(document).ready(function () {
            loadYouTubeAPI(); // Ensure API loads

            $(document).on("click", ".load-song", function () {
                var getSongUrl = "{{ url('get-song') }}";
                var songId = $(this).data("id");
                var songUrl = `${getSongUrl}/${songId}`;

                fetch(songUrl)
                    .then(response => response.json())
                    .then(data => {
                        if (player && player.loadVideoById) {
                            player.loadVideoById(data.youtube_id);
                        } else {
                            document.getElementById("musicPlayer").src = `https://www.youtube.com/embed/${data.youtube_id}?rel=0&enablejsapi=1`;
                        }

                        document.getElementById("songTitle").textContent = `Now Playing: ${data.title}`;
                        document.getElementById("artistName").textContent = data.artist;
                    })
                    .catch(error => console.error('Error fetching song:', error));
            });
        });
    </script>

@endsection
