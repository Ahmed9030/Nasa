<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link
    rel="shortcut icon"
    type="image/x-icon"
    href="{{ setting('site.logo') ? Voyager::image(setting('site.logo')) : asset('imags/NASA_logo.png') }}"
  />
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
  <link rel="stylesheet" href="{{ asset('css/Tailwind.css') }}">
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

<body class="bg-white text-slate-900">

  <!-- navbar -->
  @include('layout.navbar')
  <!-- end navbar -->

  <main class="min-h-[60vh]">
    @yield('content')
  </main>

  <!-- footer -->
  @include('layout.footer')

  <!-- AOS and small helpers -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script>
    // Small GSAP entrance for the navbar brand
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
