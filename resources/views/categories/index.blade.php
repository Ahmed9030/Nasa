@extends('layout.tailwindPage')

@section('title', 'Categories')

@section('content')
    <div class="mx-auto max-w-7xl px-6 pt-24 pb-4">
        <div class="flex justify-between flex-col items-start gap-4 md:flex-row md:items-center">
            <div>
                <h3 class="text-3xl md:text-5xl font-extrabold text-gray-900">All Categories</h3>
                <p class="mt-2 text-gray-600">Browse climate reports by region and theme.</p>
            </div>
        </div>
    </div>

    @foreach ($categories as $cat)
        @if ($cat->posts->isNotEmpty())
            <div class="mx-auto max-w-7xl px-6 pt-8 pb-4">
                <h2 class="b-border pb-3 text-2xl md:text-3xl font-bold text-gray-950">{{ $cat->name }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-4">
                    @foreach ($cat->posts as $post)
                        <a href="{{ route('post.show', $post->id) }}"
                            class="group flex flex-col h-full bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-slate-200 hover:shadow-xl hover:ring-emerald-300 transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <x-post-image :post="$post" classes="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                            </div>
                            <div class="flex flex-col flex-grow p-4">
                                <div class="flex-grow">
                                    <h5 class="text-lg text-gray-900 font-bold mb-2 line-clamp-2 group-hover:text-emerald-700 transition-colors">{{ $post->title }}</h5>
                                    <p class="line-clamp-3 text-sm text-gray-600">{{ $post->excerpt }}</p>
                                </div>
                                <div class="mt-4">
                                    <span class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-emerald-600 hover:bg-emerald-700 rounded-lg transition-colors">
                                        Open Post
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    @endforeach

    {{-- map section --}}
    <div class="mx-auto max-w-7xl px-6 py-12">
        <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
            <div class="absolute left-4 top-4 z-[1000] rounded-lg bg-slate-900/85 px-4 py-2 text-white shadow-md">
                <h2 class="text-sm font-semibold tracking-wide">Find In Map</h2>
                <p class="text-xs text-slate-300">All climate hotspots</p>
            </div>
            <div id="map" class="map h-[400px] w-full"></div>
        </div>
    </div>
    <!-- end map section -->

    @if ($posts->whereNotNull('location')->isNotEmpty())
        @php $firstLocated = $posts->whereNotNull('location')->first(); @endphp
        <script>
            var location_map = "{{ $firstLocated->location }}";
            var locationArray = location_map.split(",")
            const map = L.map('map').setView([parseFloat(locationArray[1]), parseFloat(locationArray[0])], 1);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        </script>

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
    @endif

@endsection
