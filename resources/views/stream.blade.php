@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 px-2 md:px-1 py-2 md:py-1">
        <!-- Left Side: Top 10 Artists -->
        <div class="md:col-span-9">
            <div class="bg-white shadow-md rounded-lg p-3 md:p-6">
                <div id="playerContainer">
                    <iframe id="musicPlayer"
                            src="https://www.youtube.com/embed/dAbkkTYhhDc?rel=0&enablejsapi=1"
                            class="w-full h-52 md:h-96 rounded"
                            frameborder="0"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                    </iframe>
                </div>
                <h2 id="songTitle" class="text-lg md:text-xl font-bold text-gray-800 mt-3">Now Playing: Song Title</h2>
                <p id="artistName" class="text-gray-500">Eminem</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-3 md:p-6 mt-3">
                <!-- Artist Slider -->
                <h3 class="text-lg md:text-xl font-semibold mb-3">Popular Artists</h3>
                <div class="overflow-x-auto flex space-x-3">
                    @foreach ($popularArtists as $artist)
                        <div class="w-28 md:w-40 flex-shrink-0 bg-gray-100 shadow rounded-lg p-2 md:p-4 text-center">
                            <img src="{{ asset('img/yume-artist-1.png') }}"
                                 class="w-14 md:w-24 h-14 md:h-24 mx-auto rounded-full mb-1 md:mb-2"
                                 alt="{{ $artist->name }}">
                            <p class="text-xs md:text-base font-medium">{{ $artist->name }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Right Side: Recommended Songs -->
        <div class="md:col-span-3">
            <div class="bg-white shadow-md rounded-lg p-3 md:p-6">
                <h3 class="text-lg font-semibold">Recommended for You</h3>
                <ul class="space-y-2 md:space-y-3">
                    @foreach ($recommendedSongs as $song)
                        <li class="flex items-center gap-2 p-2 border-b">
                            <img src="{{ asset('img/yume-artist-3.png') }}" class="w-10 md:w-16 h-10 md:h-16 rounded"
                                 alt="{{ $song->title }}">
                            <div>
                                <a href="javascript:void(0);" class="text-blue-600 font-medium load-song"
                                   data-id="{{ $song->id }}">{{ $song->title }}</a>
                                <p class="text-xs md:text-sm text-gray-500">{{ $song->artist }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
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
