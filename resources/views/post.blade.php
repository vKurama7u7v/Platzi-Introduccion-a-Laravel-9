@extends('template')
@section('content')

<div class="max-w-3xl mx-auto">
    <h1 class="mb-8" style="font-size: 3rem/* 48px */;line-height: 1;">
        {{ $post->title }}
    </h1>
    <!-- <span>{{ $post->slug }}</span> -->
    <hr>
    <p class="leading-lose text-lg text-gray-800">{{ $post->body }}</p>
</div>

@endsection