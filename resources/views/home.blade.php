@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section class="relative flex items-center justify-center w-full">
        <img src="https://switzerland-tour.com/storage/media/4-ForArticles/swiss-mountains.jpg" alt=""
            class="object-cover w-full max-h-80 brightness-75">
        <div class="absolute text-center text-white">
            <h1 class="mb-4 font-serif text-5xl font-black">Alvaro's Blog</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <main class="container max-w-screen-sm m-auto">
        @foreach ($posts as $post)
            {{-- <x-post id="{{ $post->id }}" title="{{ $post->title }}" subtitle="{{ $post->subtitle }}" /> --}}
            @include('components.post')
            {{-- ['post' => $post] --}}
        @endforeach

        <input type="text" name="" id="">
    </main>
@endsection
