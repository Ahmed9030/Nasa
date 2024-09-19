@extends('layout.boot-bree')

@section('title' , $category->name)

@section('content')
<div class="container mt-5 mb-3">

    <div class="row gap-0 b-border">

        <div class="col-lg-6">

            <h3 class="text-uppercase fw-bold ">{{$category->name}}</h3>
        </div>
        <div class="col-lg-6">
            <a href="" id="link-posts" name="link-category" class="activ-category pl-3 pr-3 text-black link-category" >Posts</a>
            <a href="" id="link-map" name="link-category" class="pl-3 pr-3 text-black link-category" >Fin In map</a>
        </div>
    </div>
</div>


<div class="container pt-5 pb-5" id="posts">
    <div class="row gap-0">
@foreach ($category->posts as $post)
        <div class="col-lg-3">

            <article class="no-padding round">
                <img class="responsive small top-round" src="{{Voyager::image($post->image)}}">
                <div class="padding">
                <h5>{{$post->title}}</h5>
                <p name="excerpt">{{$post->excerpt}}</p>
                <nav>
                    <a href="{{route('post.show' , $post->id)}}"><button>More</button></a>
                </nav>
            </div>
            </article>
        </div>
    @endforeach
    </div>
</div>

{{-- map section --}}
<div  class="container pt-5 pb-5 " id="map-content">
    <div class="row">

        <h1 class="text-center">Find In Map</h1>
        <div id='map' class="map w-100"></div>
    </div>
</div>
<!-- end map section -->

<script>
    var location_map  = "{{$category->posts->first()->location}}"
    var locationArray = location_map.split(",")
const map = L.map('map').setView([parseFloat(locationArray[1]),parseFloat(locationArray[0])], 2);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
}).addTo(map);


</script>

@foreach ($category->posts as $key => $post)
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

