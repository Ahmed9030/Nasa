@extends('layout.tailwindPage')

@section('title', $category->name)

@section('content')
    <div class="mx-auto max-w-7xl px-6 pt-24 pb-4">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div>
                <h3 class="text-3xl md:text-5xl font-extrabold text-gray-900">{{ $category->name }}</h3>
                <p class="mt-2 text-gray-600">{{ $category->posts->count() }} climate reports in this category.</p>
            </div>
        </div>
    </div>

    {{-- start show posts --}}
    <div class="mx-auto max-w-7xl px-6 pt-6 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($category->posts as $post)
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
    {{-- end show posts --}}

    {{-- map section --}}
    <div class="mx-auto max-w-7xl px-6 pb-14">
        <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
            <div class="absolute left-4 top-4 z-[1000] rounded-lg bg-slate-900/85 px-4 py-2 text-white shadow-md">
                <h2 class="text-sm font-semibold tracking-wide">Find In Map</h2>
                <p class="text-xs text-slate-300">{{ $category->name }} hotspots</p>
            </div>
            <div id="map" class="map h-[400px] w-full"></div>
        </div>
    </div>
    <!-- end map section -->

    @if ($category->posts->whereNotNull('location')->isNotEmpty())
        @php $firstLocated = $category->posts->whereNotNull('location')->first(); @endphp
        <script>
            var location_map = "{{ $firstLocated->location }}";
            var locationArray = location_map.split(",")
            const map = L.map('map').setView([parseFloat(locationArray[1]), parseFloat(locationArray[0])], 2);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        </script>

        @foreach ($category->posts as $key => $post)
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
