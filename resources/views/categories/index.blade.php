@extends('layout.tailwindPage')

@section('title', 'Categories')

@section('content')
    <div class="container mx-auto mt-20 mb-3">

        <div class="flex justify-between flex-col items-start gap-0 b-border md:flex-row">

            <div class="mb-3">

                <h3 class="text-uppercase fw-bold text-2xl text-gray-900 md:text-5xl">All Categories</h3>
            </div>
            <div class="mb-4 mt-3 md:mt-0">
                <a href="" id="link-posts" name="link-category"
                    class="activ-category pl-3 pr-3 text-black link-category">Categories</a>
                <a href="" id="link-map" name="link-category" class="pl-3 pr-3 text-black link-category">Fin In
                    map</a>
            </div>
        </div>
    </div>



    @foreach ($categories as $cat)
        <div class="container mx-auto pt-5 pb-5" id="posts" name="posts">
            <h2 class=" b-border pb-3 text-2xl font-bold text-gray-950">{{ $cat->name }}</h2>
            <div class="grid grid-cols-1  md:grid-cols-3 lg:grid-cols-4 gap-4 ">
                {{-- print the post of this category --}}
                @foreach ($cat->posts as $post)
                    <div class="flex flex-col h-full pb-4 mb-3 mt-3 drop-shadow-xl">
                        <div class="s6 h-48 ">
                            <img class="rounded-t-lg w-full h-full object-cover" src="{{ Voyager::image($post->image) }}"
                                alt="{{ Voyager::image($post->image) }}">
                        </div>
                        <div class="s6 bg-gray-50 flex-grow p-3 flex flex-col justify-between rounded-b-lg">
                            <div class="min-h-24">
                                <h5 class="text-2xl text-gray-900 font-bold mb-2">{{ $post->title }}</h5>
                                <p class="line-clamp-3 text-gray-700">{{ $post->excerpt }}</p>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('post.show', $post->id) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md">
                                    Open Post
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach


    {{-- map section --}}
    <div class="container mx-auto pt-5 pb-5 " id="map-content">
        <div class="row w-full">

            <h1 class="text-center mb-5 text-5xl text-gray-950">Find In Map</h1>
            <div id='map' class="map w-full h-[400px] rounded-md"></div>
        </div>
    </div>
    <!-- end map section -->

    <script>
        var location_map = "{{ $categories->first()->posts->first()->location }}"
        var locationArray = location_map.split(",")
        const map = L.map('map').setView([parseFloat(locationArray[1]), parseFloat(locationArray[0])], 1);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);
    </script>

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

@endsection