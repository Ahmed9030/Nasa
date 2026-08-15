@extends('layout.tailwindPage')

@section('title', $post->title)

@section('content')

    @php
        $heroImage = $post->image_url ?? asset('imags/placeholder.svg');
    @endphp

    {{-- start landing --}}
    <div class="flex flex-row justify-center items-center min-h-[28rem] px-3"
        style="background-image: url({{ $heroImage }}); background-size: cover; background-position: center;">
        <div class="container mx-auto text-center">
            <div class="backdrop-blur-xl bg-slate-900/60 rounded-2xl py-6 px-4 shadow-xl ring-1 ring-white/10">

                <h1 class="text-4xl md:text-5xl text-white mb-2 font-extrabold">{{ $post->title }}</h1>

                <p class="text-md text-slate-200 mb-5 max-w-2xl mx-auto">{{ $post->excerpt }}</p>
                @if ($category)
                    <a href="{{ route('category.show', $category->id) }}"
                        class="inline-block rounded-full bg-emerald-600 px-4 py-1.5 text-sm font-semibold text-white hover:bg-emerald-700 transition-colors">
                        {{ $category->name }}
                    </a>
                @endif
                <div class="mt-6">
                    <a href="#go" class="text-emerald-300 hover:text-white transition-colors underline underline-offset-4">Let's see the danger &darr;</a>
                </div>
            </div>
        </div>
    </div>
    {{-- end landing --}}

    {{-- start content --}}
    <article class="container mx-auto max-w-4xl px-6 py-10 prose" id="go">
        {!! $post->body !!}
    </article>
    {{-- end content --}}
@endsection
