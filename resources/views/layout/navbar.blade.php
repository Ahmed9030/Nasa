@php
    use App\Models\Category;
@endphp
{{-- start navbar --}}
<div class="fixed top-[52px] left-0 right-0 z-50">
    <nav class="bg-gradient-to-r from-slate-900 via-gray-900 to-black shadow-lg" data-aos="fade-down">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse brand-animate">
                <img src="{{ Voyager::image(setting('site.logo')) }}" class="h-10 rounded-md" alt="Nasa logo" />
                <span class="self-center text-2xl font-bold whitespace-nowrap text-white">Nasa</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm  rounded-lg md:hidden  focus:outline-none focus:ring-2  text-gray-400 hover:bg-gray-700 focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="false" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 bg-transparent md:bg-transparent">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white rounded md:p-0 md:text-blue-400 hover:text-blue-300"
                            aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 rounded md:border-0 md:p-0 md:w-auto text-white hover:text-blue-300 focus:outline-none">
                            Categories
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="absolute z-20 hidden font-normal divide-y rounded-lg shadow-lg w-48 bg-gray-800 divide-gray-700 mt-2">
                            <ul class="py-2 text-sm  text-gray-400" aria-labelledby="dropdownLargeButton">
                                @foreach (Category::all() as $cate)
                                    <li>
                                        <a href="{{route('category.show', $cate->id)}}"
                                            class="block px-4 py-2 hover:bg-gray-700 hover:text-white">{{$cate->name}}</a>
                                    </li>
                                @endforeach
                                <li>
                                    <a href="{{ route('categories') }}"
                                        class="block px-4 py-2 hover:bg-gray-700 hover:text-white">All Categories</a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li>
                        <a href="{{route('maps')}}"
                            class="block py-2 px-3 rounded md:border-0 md:p-0 text-white hover:text-blue-300">Map</a>
                    </li>
                    <li>
                        <a href="/admin"
                            class="block py-2 px-3 rounded md:border-0 md:p-0 text-white hover:bg-white/5">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



{{-- end navbar --}}