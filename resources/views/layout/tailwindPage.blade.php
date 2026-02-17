<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.logo')) }}" />
  {{--
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
  {{--
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}"> --}}
  {{--
  <link rel="stylesheet" href="{{asset('css/beer.min.css')}}"> --}}
  {{--
  <link rel="stylesheet" href="{{asset('css/variables.css')}}"> --}}
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/nasa.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  {{--
  <script src="https://cdn.tailwindcss.com"></script> --}}
  <link rel="stylesheet" href="{{asset('css/Tailwind.css')}}">
  <!-- AOS (Animate On Scroll) for simple scroll animations -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script>
    document.addEventListener("DOMContentLoaded", (event) => {
      if (window.AOS) {
        AOS.init({ duration: 800, once: true });
      }
    });
  </script>

</head>

<body class="pt-20">

  {{-- start ad up bar --}}
  <div
    class="fixed top-0 left-0 right-0 z-40 isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
    <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl"
      aria-hidden="true">
      <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30"
        style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
      </div>
    </div>
    <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl"
      aria-hidden="true">
      <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30"
        style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
      </div>
    </div>
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
      <p class="text-sm leading-6 text-gray-900">
        <strong class="font-semibold">GeneriCon 2023</strong><svg viewBox="0 0 2 2"
          class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
          <circle cx="1" cy="1" r="1" />
        </svg>Join us in Denver from June 7 – 9 to see what’s coming next.
      </p>
      <a href="#"
        class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register
        now <span aria-hidden="true">&rarr;</span></a>
    </div>
    <div class="flex flex-1 justify-end">
      <button type="button" class="-m-3 p-3 focus-visible:outline-offset-[-4px]">
        <span class="sr-only">Dismiss</span>
        <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path
            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
        </svg>
      </button>
    </div>
  </div>
  {{-- end ad up bar --}}

  <!-- stert navber-->

  {{-- <nav class="navbar navbar-expand-lg bg-black sticky-top ps-5 pe-5">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Nasa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Map</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              @foreach (Category::all() as $category)

              <li><a class="dropdown-item" href="{{route('category.show' , $category->id)}}">{{$category->name}}</a>
              </li>
              @endforeach
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="{{route('categories')}}">All Categories</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Link</a>
          </li>
        </ul>

      </div>
    </div>
  </nav> --}}

  <!-- end navbar-->

  {{-- start Tailwind navBar --}}
  @include('layout.navbar')
  {{-- end Tailwind navBar --}}

  <main class="min-h-[60vh] bg-white pt-20">
    @yield('content')
  </main>

  {{-- footer --}}
  @include('layout.footer')

  <!-- AOS and small helpers -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script>
    // Example: small GSAP entrance for the navbar brand
    document.addEventListener('DOMContentLoaded', function () {
      try {
        gsap.from('.brand-animate', { y: -20, opacity: 0, duration: 0.8, ease: 'power2.out' });
      } catch (e) {
        // ignore if gsap not available
      }
    });
  </script>
</body>

</html>