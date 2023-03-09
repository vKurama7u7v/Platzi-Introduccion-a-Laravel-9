@extends('template')
    @section('content')
    <div class="bg-gray-800 rounded-lg px-6 py-4 mb-8 relative">
        <!-- Destacado -->
        <span class="text-xs uppercase text-white bg-gray-500 rounded-full px-4 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4 font-semibold">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de Desarrollo Web en Laravel</p>
    </div>

    <div class="px-">
        <h1 class="mb-6 mt-6 text-gray-900 text-3xl uppercase font-semibold">Contenido Técnico</h1>

        <div class="grid grid-cols-4 gap-4 mb-4">
            @foreach($posts as $post)
            <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">

                <div class="flex items-center gap-5 text-xs">
                    <span class="uppercase text-white bg-gray-500 rounded-full px-3 py-1">Tutorial</span>
                    <span class="text-gray-900 ml-2">{{ $post->created_at->format('d/m/Y') }}</span>
                </div>
                <h2 class="mt-2 text-gray-600">{{  $post->title }}</h2>
            </a>
            @endforeach
        </div>

        {{ $posts->links() }}
    </div>
    @endsection