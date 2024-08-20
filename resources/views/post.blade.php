@extends('layout.boot-bree')

@section('title' , 'post')

@section('content')

 <!-- strat landing -->
 <div class="landing-page d-flex justify-content-center align-items-center" style="

    background-image: url({{Voyager::image($post->image)}});
    background-size: cover;
    min-height: calc(100vh - 1px);">
    <div class="container text-center blur rounded p-3">
        <h1>{{$post->title}}</h1>
        <p class="fs-6 text-black-50 mb-5">{{$post->excerpt}}</p>
        <a href="#go"><button>Let's see the danger 👇</button></a>
    </div>
   </div>
  <!-- end landing -->

  {{-- start content --}}
  <div class="container pt-5 pb-5" id="go">
    {!!$post->body!!}
  </div>
  {{-- end content --}}
@endsection
