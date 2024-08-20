
@extends('layout.boot-bree')
@section("title", setting('site.title'))

@section('content')
 <!-- strat landing -->
 <div class="landing-home bg-dark">
    <div class="row gap-0" style="--bs-gutter-x: auto;">
        <div class="col-lg-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="imags/bg.webp" class="slider-images w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="imags/bg.jpg" class="slider-images w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="imags/img-6.png" class="slider-images w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev slider-button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next slider-button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
        </div>

        <div class="col-lg-6 p-4">
            <p class="fs-1 text-light lh-base"> We are witnessing unprecedented climate change that threatens our entire planet.
                 Rising sea levels, extreme heat waves, and devastating hurricanes are just part of the problem. It is time for decisive action.
            </p>

            <p class="text-light fs-6">Our planet is sending us a distress call. Are we listening?</p>
        </div>

    </div>
   </div>
  <!-- end landing -->

  <!-- start map section -->
   <div class="container pt-5 pb-5 d-flex justify-content-center">
    <div class="row">
        <h1 class="text-center">Our planet is sending us a distress call. Are we listening?</h1>
        <div id='map' class="map w-100"></div>
    </div>
   </div>
  <!-- end map section -->

  <script>
    const map = L.map('map').setView([26.216533358841275,29.338254883000417], 2);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        // attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

   // antarctia circle
   let content = `<h3>Antarctica</h3> <a href='{{route("antar")}}'><button> More Info 🔭</button></a>`
   const circle0 = L.circle([-73.07740507503578,0.23950987850670913], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500000
        }).addTo(map).bindPopup(content);
</script>

@foreach ($posts as $key => $post)
    <script>
        var location_map = "{{$post->location}}";
        var locationArray = location_map.split(",");

        const circle{{$key}} = L.circle([parseFloat(locationArray[1]), parseFloat(locationArray[0])], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: {{$post->circle_size}}
        }).addTo(map).bindPopup('<h3>{{$post->title}}</h3> <br> {{$post->excerpt}} <a href="{{route('post.show' , $post->id)}}"><button> More Info 🔭</button></a>');
    </script>
@endforeach


@endsection
