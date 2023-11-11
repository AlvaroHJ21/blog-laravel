@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section class="w-full relative flex justify-center items-center">
        <img src="https://switzerland-tour.com/storage/media/4-ForArticles/swiss-mountains.jpg" alt=""
            class="w-full max-h-80 object-cover brightness-75">
        <div class="absolute text-white text-center">
            <h1 class="text-5xl font-black font-serif mb-4">Alvaro's Blog</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <main class="container max-w-screen-sm m-auto">
        @foreach ($posts as $post)
            <x-post title="{{ $post->title }}" subtitle="{{ $post->subtitle }}" />
        @endforeach ()
    </main>
@endsection
