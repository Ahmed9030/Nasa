@props(['post', 'classes' => 'w-full', 'alt' => null])

@php
    $placeholder = asset('imags/placeholder.svg');
    $src = $post->image_url ?? $placeholder;
@endphp

<img
    src="{{ $src }}"
    alt="{{ $alt ?? $post->title }}"
    class="{{ $classes }}"
    loading="lazy"
    onerror="this.onerror = null; this.src = '{{ $placeholder }}';"
>
