@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <section class="w-full relative flex justify-center items-center">
        <div class="w-full h-80">
            <img src="{{ $post->image }}" alt="" class="w-full h-full object-cover brightness-75">
        </div>
        <div class="absolute text-white text-center">
            <h1 class="text-5xl font-black font-serif mb-4">{{ $post->title }}</h1>
            <p>{{ $post->subtitle }}</p>
        </div>
    </section>
    <main class="max-w-screen-sm m-auto py-8">
        {{ $post->body }}
    </main>

    {{-- @php
        var_dump($post);
    @endphp --}}
@endsection
