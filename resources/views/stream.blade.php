@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="container mx-auto p-4">
            <div class="grid grid-cols-12 gap-4">
                <!-- Main Player Section -->
                <div class="col-span-8">
                    <div class="bg-gray-900 p-4 rounded-lg">
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
                        <p id="artistName" class="text-gray-400">Artist Name</p>
                        <div class="flex gap-2 mt-2">
                            <button class="px-4 py-2 bg-blue-600 text-white rounded">Like</button>
                            <button class="px-4 py-2 bg-green-600 text-white rounded">Share</button>
                            <button class="px-4 py-2 bg-gray-600 text-white rounded">Add to Playlist</button>
                        </div>
                    </div>
                </div>

                <!-- Recommendation Sidebar -->
                <div class="col-span-4">
                    <h3 class="text-lg font-semibold">Recommended for You</h3>
                    <ul class="space-y-3">
                        @foreach ($recommendedSongs as $song)
                            <li class="flex items-center gap-2 p-2 border-b">
                                <img src="{{ asset('img/' . $song->thumbnail) }}" class="w-16 h-16 rounded"
                                     alt="Thumbnail">
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
    </div>
    <script>
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('musicPlayer', {
                events: {
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerStateChange(event) {
            if (event.data === YT.PlayerState.ENDED) {
                Swal.fire({
                    title: "Congratulations, you've earned 10pts",
                    icon: "success",
                    draggable: true
                });
            }
        }

        // Load the YouTube IFrame API dynamically
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".load-song").forEach(function (element) {
                element.addEventListener("click", function () {
                    var songId = this.getAttribute("data-id");

                    fetch(`/get-song/${songId}`)
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
        });
    </script>
@endsection
