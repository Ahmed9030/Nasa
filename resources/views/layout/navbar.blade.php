@php
    use App\Models\Category;
@endphp
{{-- start navbar --}}
<div>
    <nav class="bg-gray-900 border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between  mx-auto p-2">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ Voyager::image(setting('site.logo')) }}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Nasa</span>
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
                    class="flex flex-col font-medium  md:p-0 mt-4  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  bg-gray-800 md:bg-gray-900 border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white  rounded  md:p-0 md:text-blue-500 bg-blue-600 md:bg-transparent"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 px-3  rounded  md:border-0 md:p-0 md:w-auto text-white md:hover:text-blue-500 focus:text-white border-gray-700 hover:bg-gray-700 md:hover:bg-transparent">
                            Categories
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="absolute z-10 hidden font-normal divide-y  rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
                            <ul class="py-2 text-sm  text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                @foreach (Category::all() as $cate)
                                <li>
                                    <a href="{{route('category.show' , $cate->id)}}"
                                    class="block px-4 py-2  hover:bg-gray-600 hover:text-white">{{$cate->name}}</a>
                                </li>
                                @endforeach
                                <li>
                                    <a href="{{ route('categories') }}"
                                    class="block px-4 py-2  hover:bg-gray-600 hover:text-white">All Categories</a>
                                </li>
                            </ul>

                        </div>
                    </li>
                    <li>
                        <a href="{{route('maps')}}"
                            class="block py-2 px-3  rounded  md:border-0  md:p-0 text-white md:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Map</a>
                    </li>
                    <li>
                        <a href="/admin"
                            class="block py-2 px-3  rounded  md:border-0  md:p-0 text-white md:hover:text-blue-500 hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



{{-- end navbar --}}
