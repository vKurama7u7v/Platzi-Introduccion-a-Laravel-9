@extends('template')
@section('content')
    <h1>{{ $post->title }}</h1>
    <span>{{ $post->slug }}</span>
    <hr>
    <p>{{ $post->body }}</p>
@endsection