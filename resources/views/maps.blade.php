@extends('layout.tailwindPage')

@section('title', 'Maps')

@section('content')

    {{-- start map section --}}
    <div class="pt-5 pb-5 flex justify-content-center h-screen mb-5">
        <div class="row w-full h-full">
            <h1 class="text-center mb-5 text-5xl text-gray-950">Maps - Scroll To Find On Map
            </h1>
            <div id='map' class="map w-full h-full rounded-md"></div>
        </div>
    </div>


    <script>
        const map = L.map('map').setView([26.216533358841275, 29.338254883000417], 2);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // antarctia circle
        let content = `<h3>Antarctica</h3> <a href='{{ route('antar') }}'><button> More Info 🔭</button></a>`
        const circle0 = L.circle([-73.07740507503578, 0.23950987850670913], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500000
        }).addTo(map).bindPopup(content);
    </script>

    {{-- show the posts on map --}}
    @foreach ($posts as $key => $post)
        <script>
            var location_map = "{{ $post->location }}";
            var locationArray = location_map.split(",");

            const circle{{ $key }} = L.circle([parseFloat(locationArray[1]), parseFloat(locationArray[0])], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: {{ $post->circle_size }}
            }).addTo(map).bindPopup(
                '<h3>{{ $post->title }}</h3> <br> {{ $post->excerpt }} <a href="{{ route('post.show', $post->id) }}"><button> More Info 🔭</button></a>'
            );
        </script>
    @endforeach

    {{-- end map section --}}

@endsection
