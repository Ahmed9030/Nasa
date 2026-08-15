@extends('layout.tailwindPage')

@section('title', 'Maps')

@section('content')

    {{-- start map section --}}
    <div class="bg-slate-50 py-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-950">Climate Map</h1>
                <p class="mt-3 max-w-2xl mx-auto text-gray-600">Scroll to explore temperature anomalies and climate hotspots around the world.</p>
            </div>
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
                <div class="absolute left-4 top-4 z-[1000] rounded-lg bg-slate-900/85 px-4 py-2 text-white shadow-md">
                    <h2 class="text-sm font-semibold tracking-wide">Live Climate Hotspots</h2>
                    <p class="text-xs text-slate-300">Scroll to explore the map</p>
                </div>
                <div id="map" class="map h-[60vh] min-h-[400px] w-full"></div>
            </div>
        </div>
    </div>

    <script>
        const map = L.map('map').setView([26.216533358841275, 29.338254883000417], 2);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let content = `<h3>Antarctica</h3> <a href='{{ route('antar') }}'><button> More Info</button></a>`
       
        if (typeof circle0 === 'undefined') {
             var circle0 = L.circle([-73.07740507503578, 0.23950987850670913], {
            color: '#10b981',
            fillColor: '#10b981',
            fillOpacity: 0.4,
            radius: 500000
        }).addTo(map).bindPopup(content);
        }
    </script>

    {{-- show the posts on map --}}
    @foreach ($posts as $key => $post)
        @if ($post->location)
            <script>
                var location_map = "{{ $post->location }}";
                var locationArray = location_map.split(",");

                const circle{{ $key }} = L.circle([parseFloat(locationArray[1]), parseFloat(locationArray[0])], {
                    color: '#10b981',
                    fillColor: '#10b981',
                    fillOpacity: 0.4,
                    radius: {{ $post->circle_size }}
                }).addTo(map).bindPopup(
                    '<h3>{{ $post->title }}</h3> <br> {{ $post->excerpt }} <a href="{{ route('post.show', $post->id) }}"><button> More Info</button></a>'
                );
            </script>
        @endif
    @endforeach

    {{-- end map section --}}

@endsection
