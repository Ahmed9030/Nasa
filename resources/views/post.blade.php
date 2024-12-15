@extends('layout.tailwindPage')

@section('title', $post->title)

@section('content')

    <!-- strat landing -->
    <div class="flex flex-row justify-center items-center h-96 px-3"
        style="background-image: url({{ Voyager::image($post->image) }}); background-size: cover;"
        >
        <div class="container mx-auto text-center">
            <div class="backdrop-blur-xl bg-white/30 rounded-md py-4 px-2 ">

                <h1 class="text-5xl text-gray-950 mb-2">{{ $post->title }}</h1>

                <p class="text-md text-black-50 mb-5 ">{{ $post->excerpt }}</p>
                <a href="{{ route('category.show', $category->id) }}">
                    <p class="fw-bold">📂 {{ $category->name }}</p>
                </a>
                <a href="#go" class="mt-4">Let's see the danger 👇</a>
            </div>

        </div>
    </div>
    <!-- end landing -->

    {{-- start content --}}
    <div class="container mx-auto pt-5 pb-5" id="go">
        {!! $post->body !!}
    </div>
    {{-- end content --}}
@endsection

{{--
<div class="landing-page flex justify-center items-center" style="

    background-image: url({{Voyager::image($post->image)}});
    background-size: cover;
    min-height: calc(100vh - 10px);"> --}}
