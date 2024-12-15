@extends('layout.tailwindPage')
@section('title', setting('site.title'))

@section('content')


    <!-- strat landing -->

    <div class="bg-gray-50 py-24 sm:py-32 bg-gradient-to-r">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8 ">
            <h2 class="text-center text-base/7 font-semibold text-indigo-600">Nasa International Space Apps </h2>
            <p
                class="mx-auto mt-2 max-w-lg text-pretty text-center text-4xl font-medium tracking-tight text-gray-950 sm:text-5xl">
                Climate Change Around The World</p>
            <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                        <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                {{ $posts->first()->title }}</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                                {{ $posts->first()->excerpt }}</p>
                        </div>
                        <div
                            class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                            <div
                                class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                <img class="size-full object-cover object-top"
                                    src="{{ Voyager::image($posts->first()->image) }}" alt="{{ $posts->first()->title }}">
                            </div>
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]">
                    </div>
                </div>
                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                {{ $posts->skip(1)->first()->title }}</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                                {{ $posts->skip(1)->first()->excerpt }}</p>
                        </div>
                        <div
                            class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                            <img class="w-full max-lg:max-w-xs rounded-md" src="{{ Voyager::image($posts->skip(1)->first()->image) }}"
                                alt="{{ $posts->skip(1)->first()->title }}">
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                    </div>
                </div>
                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute inset-px rounded-lg bg-white"></div>

                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                        <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                {{ $posts->skip(2)->first()->title }}</p>
                            <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">
                                {{ $posts->skip(2)->first()->excerpt }}</p>
                        </div>
                        <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                            <img class="h-[min(152px,40cqw)] object-cover object-center w-full relative bottom-[-25px] md:bottom-[-40px]"
                                src="{{ Voyager::image($posts->skip(2)->first()->image) }}" alt="{{ $posts->skip(2)->first()->title }}">
                        </div>
                    </div>

                    <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
                </div>
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]"></div>
                    <div
                        class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                        <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                            <img class="h-full w-full object-cover object-center" src="{{ asset('imags/ng.jpg') }}"
                                alt="{{ asset('imags/ng.jpg') }}">
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end landing -->

    {{-- start map section --}}
    <div class="container mx-auto pt-5 pb-5 flex justify-content-center">
        <div class="row w-full">
            <h1 class="text-center mb-5 text-5xl text-gray-950">Our planet is sending us a distress call. Are we listening?
            </h1>
            <div id='map' class="map w-full h-[400px] rounded-md"></div>
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

    {{-- start show the posts of categories --}}
    <div class="container mx-auto pt-5 pb-5">
        {{-- start the first category --}}
        <h2 class=" b-border pb-3 text-5xl font-bold text-gray-950">{{ $categories->first()->name }}</h2>
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 gap-4 ">
            @foreach ($categories->first()->posts as $post)
                <div class="flex flex-col h-full  pb-4 mb-3 mt-3 drop-shadow-xl">
                    <div class="s6 h-48 ">
                        <img class="rounded-t-lg w-full h-full object-cover" src="{{ Voyager::image($post->image) }}"
                            alt="{{ Voyager::image($post->image) }}">
                    </div>
                    <div class="s6 bg-gray-50 flex-grow p-3">
                        <div class="h-10">

                            <h5 class="text-2xl text-gray-900 font-bold">{{ $post->title }}</h5>
                            <p class="line-clamp-2 text-gray-700">{{ $post->excerpt }}</p>
                        </div>

                        <div class="relative bottom-[-30px]">
                            <a href="{{ route('post.show', $post->id) }}"
                                class="inline-flex items-center px-3 py-2 mt-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md">
                                Read More
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- end the first category --}}

        {{-- start the sceond category --}}
        <h2 class=" b-border pb-3 mt-8 text-5xl font-bold text-gray-950">{{ $categories->skip(1)->first()->name }}</h2>
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 gap-4 ">
            @foreach ($categories->skip(1)->first()->posts as $post)
                <div class="flex flex-col h-full  pb-4 mb-3 mt-3 drop-shadow-xl">
                    <div class="s6 h-48 ">
                        <img class="rounded-t-lg w-full h-full object-cover" src="{{ Voyager::image($post->image) }}"
                            alt="{{ Voyager::image($post->image) }}">
                    </div>
                    <div class="s6 bg-gray-50 flex-grow p-3">
                        <div class="h-10">

                            <h5 class="text-2xl text-gray-900 font-bold">{{ $post->title }}</h5>
                            <p class="line-clamp-1 text-gray-700">{{ $post->excerpt }}</p>
                        </div>

                        <div class="relative bottom-[-30px]">
                            <a href="{{ route('post.show', $post->id) }}"
                                class="inline-flex items-center px-3 py-2 mt-3 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-md">
                                Read More
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- end the sceond category --}}

        <div class="flex justify-center">
            <a href="{{ route('categories') }}" class="px-3 py-2 mt-8 mb-6 text-sm font-medium text-center text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-md">More Categories</a>
        </div>
    </div>
    {{-- end show the posts of categories --}}




@endsection
