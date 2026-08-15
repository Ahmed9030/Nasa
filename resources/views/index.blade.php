@extends('layout.tailwindPage')
@section('title', setting('site.title') ?? 'NASA Climate')

@section('content')

    {{-- start landing --}}
    <div class="bg-gradient-to-b from-slate-50 to-white py-20 sm:py-28">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2 class="text-center text-sm font-semibold text-emerald-600 uppercase tracking-widest" data-aos="fade-down">NASA Space Apps Challenge
            </h2>
            <p class="mx-auto mt-3 max-w-3xl text-center text-4xl md:text-5xl font-extrabold tracking-tight text-slate-900"
                data-aos="zoom-in">Climate Change Around The World</p>

            @if ($posts->isNotEmpty())
                @php $featured = $posts->first(); @endphp
                <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                            <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10" data-aos="fade-right">
                                <span class="inline-block rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-800">Featured</span>
                                <p class="mt-3 text-lg font-semibold tracking-tight text-gray-900 max-lg:text-center">
                                    {{ $featured->title }}
                                </p>
                                <p class="mt-2 max-w-lg text-sm text-gray-600 max-lg:text-center">{{ $featured->excerpt }}
                                </p>
                            </div>
                            <div class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm"
                                data-aos="zoom-in">
                                <div
                                    class="absolute inset-x-6 bottom-0 top-8 overflow-hidden rounded-xl border border-gray-200 bg-gray-50 shadow-xl">
                                    <x-post-image :post="$featured" classes="w-full h-full object-cover object-top" />
                                </div>
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]"></div>
                    </div>

                    @php $second = $posts->get(1); @endphp
                    @if ($second)
                    <div class="relative max-lg:row-start-1">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10" data-aos="fade-up">
                                <p class="mt-2 text-lg font-semibold tracking-tight text-gray-900 max-lg:text-center">
                                    {{ $second->title }}
                                </p>
                                <p class="mt-2 max-w-lg text-sm text-gray-600 max-lg:text-center">
                                    {{ $second->excerpt }}
                                </p>
                            </div>
                            <div class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                                <x-post-image :post="$second" classes="w-full max-lg:max-w-xs rounded-md" />
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]"></div>
                    </div>
                    @endif

                    @php $third = $posts->get(2); @endphp
                    @if ($third)
                    <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                        <div class="absolute inset-px rounded-lg bg-white"></div>
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10" data-aos="fade-left">
                                <p class="mt-2 text-lg font-semibold tracking-tight text-gray-900 max-lg:text-center">
                                    {{ $third->title }}
                                </p>
                                <p class="mt-2 max-w-lg text-sm text-gray-600 max-lg:text-center">
                                    {{ $third->excerpt }}
                                </p>
                            </div>
                            <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                                <x-post-image :post="$third" classes="h-[min(152px,40cqw)] object-cover object-center w-full relative bottom-[-25px] md:bottom-[-40px]" />
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
                    </div>
                    @endif

                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                            <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10" data-aos="fade-up">
                                <img class="h-full w-full object-cover object-center rounded-lg"
                                    src="{{ asset('imags/ng.jpg') }}" alt="Earth from space" />
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    {{-- end landing --}}

    {{-- start map section --}}
    <div class="bg-slate-50 py-14">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
                <div class="absolute left-4 top-4 z-[1000] rounded-lg bg-slate-900/85 px-4 py-2 text-white shadow-md">
                    <h2 class="text-sm font-semibold tracking-wide">Live Climate Hotspots</h2>
                    <p class="text-xs text-slate-300">Our planet is sending us a distress call. Are we listening?</p>
                </div>
                <div id="map" class="map h-[400px] sm:h-[480px] w-full"></div>
            </div>
        </div>
    </div>

    <script>
        const map = L.map('map').setView([26.216533358841275, 29.338254883000417], 2);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        let content = `<h3>Antarctica</h3> <a href='{{ route('antar') }}'><button> More Info</button></a>`
        const circle0 = L.circle([-73.07740507503578, 0.23950987850670913], {
            color: '#10b981',
            fillColor: '#10b981',
            fillOpacity: 0.4,
            radius: 500000
        }).addTo(map).bindPopup(content);
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

    {{-- start show the posts of categories --}}
    <div class="mx-auto max-w-7xl px-6 pt-14 pb-10">
        @foreach ($categories as $category)
            @if ($category->posts->isNotEmpty())
                <h2 class="b-border pb-3 text-3xl font-bold text-gray-950 mt-8 first:mt-0">{{ $category->name }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
                    @foreach ($category->posts->take(8) as $post)
                        <a href="{{ route('post.show', $post->id) }}"
                            class="group flex flex-col h-full bg-white rounded-2xl overflow-hidden shadow-sm ring-1 ring-slate-200 hover:shadow-xl hover:ring-emerald-300 transition-all duration-300">
                            <div class="relative h-48 overflow-hidden">
                                <x-post-image :post="$post" classes="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                @if ($post->category)
                                    <span class="absolute left-3 top-3 rounded-full bg-slate-900/80 px-3 py-1 text-xs font-semibold text-white">{{ $post->category->name }}</span>
                                @endif
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
            @endif
        @endforeach

        <div class="flex justify-center">
            <a href="{{ route('categories') }}"
                class="px-5 py-2.5 mt-10 mb-6 text-sm font-medium text-center text-white bg-slate-800 hover:bg-slate-900 rounded-lg transition-colors">More Categories</a>
        </div>
    </div>
    {{-- end show the posts of categories --}}

@endsection
