@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <section class="relative flex items-center justify-center w-full">
        <div class="w-full h-80">
            <img src="{{ $post->image }}" alt="" class="object-cover w-full h-full brightness-75">
        </div>
        <div class="absolute text-center text-white">
            <h1 class="mb-4 font-serif text-5xl font-black">{{ $post->title }}</h1>
            <p>{{ $post->subtitle }} <span class="font-bold">{{ $post->user->name }}</span></p>
        </div>
    </section>
    <main class="max-w-screen-sm py-8 m-auto">
        {!! $post->body !!}
    </main>

    {{-- @php
        var_dump($post);
    @endphp --}}
@endsection
