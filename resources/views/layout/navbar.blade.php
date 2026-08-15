@php
    use App\Models\Category;

    $logo = setting('site.logo') ? Voyager::image(setting('site.logo')) : asset('imags/NASA_logo.png');
@endphp

{{-- start navbar --}}
<div class="fixed top-0 left-0 right-0 z-50">
    <nav class="bg-slate-900/95 backdrop-blur border-b border-white/10 shadow-lg" data-aos="fade-down">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse brand-animate">
                <img
                    src="{{ $logo }}"
                    class="h-10 w-10 rounded-md object-cover"
                    alt="NASA logo"
                    onerror="this.onerror = null; this.src = '{{ asset('imags/NASA_logo.png') }}';"
                />
                <span class="self-center text-2xl font-bold whitespace-nowrap text-white tracking-wide">NASA Climate</span>
            </a>

            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden focus:outline-none focus:ring-2 text-slate-300 hover:bg-white/10 focus:ring-emerald-500"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-transparent">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 rounded md:p-0 text-white hover:text-emerald-400 transition-colors"
                            aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 rounded md:border-0 md:p-0 md:w-auto text-white hover:text-emerald-400 transition-colors focus:outline-none">
                            Categories
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="absolute z-20 hidden font-normal divide-y rounded-lg shadow-lg w-48 bg-slate-800 divide-slate-700 mt-2">
                            <ul class="py-2 text-sm text-slate-200" aria-labelledby="dropdownNavbarLink">
                                @foreach (Category::all() as $cate)
                                    <li>
                                        <a href="{{ route('category.show', $cate->id) }}"
                                            class="block px-4 py-2 hover:bg-emerald-500/10 hover:text-emerald-300 transition-colors">{{ $cate->name }}</a>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="{{ route('categories') }}"
                                        class="block px-4 py-2 hover:bg-emerald-500/10 hover:text-emerald-300 transition-colors">All Categories</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('maps') }}"
                            class="block py-2 px-3 rounded md:border-0 md:p-0 text-white hover:text-emerald-400 transition-colors">Map</a>
                    </li>
                    <li>
                        <a href="{{ route('antar') }}"
                            class="block py-2 px-3 rounded md:border-0 md:p-0 text-white hover:text-emerald-400 transition-colors">Antarctica</a>
                    </li>
                    <li>
                        <a href="/admin"
                            class="block py-2 px-3 rounded md:border-0 md:p-0 text-white hover:text-emerald-400 transition-colors">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

{{-- end navbar --}}
