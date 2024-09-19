@extends('layout.boot-bree')

@section('title' , 'Categories')

@section('content')
<div class="container mt-5 mb-3">

    <div class="row gap-0 b-border">

        <div class="col-lg-6">

            <h3 class="text-uppercase fw-bold ">All Categories</h3>
        </div>
        <div class="col-lg-6">
            <a href="" id="link-posts" name="link-category" class="activ-category pl-3 pr-3 text-black link-category" >Categories</a>
            <a href="" id="link-map" name="link-category" class="pl-3 pr-3 text-black link-category" >Fin In map</a>
        </div>
    </div>
</div>



@foreach ($categories as $cat)
<div class="container pt-5 pb-5" id="posts" name="posts">
    <h2 class=" b-border pb-3">{{$cat->name}}</h2>
    <div class="row gap-0">
        {{-- print the post of this category --}}
        @foreach ($cat->posts as $post)
        <div class="col-lg-4 pb-4">
        <article class="no-padding">
            <div class="grid no-space">
                <div class="s6">
                <img class="responsive" src="{{Voyager::image($post->image)}}">
                <div class="absolute top left right padding top-shadow white-text">
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->category->name}}</p>
                </div>
                </div>
                <div class="s6">
                <div class="padding">
                    {{-- <h5>Title</h5> --}}
                    <p name="excerpt">{{$post->excerpt}}</p>
                    {{-- <nav> --}}
                    <a href="{{route('post.show' , $post->id)}}" class="align-self-end"><button class="border round mt-5 primary">More</button></a>
                    {{-- </nav> --}}
                </div>
                </div>
            </div>
            </article>
        </div>
            @endforeach
    </div>
</div>
@endforeach

{{-- map section --}}
<div  class="container pt-5 pb-5 " id="map-content">
    <div class="row">

        <h1 class="text-center">Find In Map</h1>
        <div id='map' class="map w-100"></div>
    </div>
</div>
<!-- end map section -->

<script>

    var location_map  = "{{$categories->first()->posts->first()->location}}"
    var locationArray = location_map.split(",")
const map = L.map('map').setView([parseFloat(locationArray[1]),parseFloat(locationArray[0])], 1);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
}).addTo(map);


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

