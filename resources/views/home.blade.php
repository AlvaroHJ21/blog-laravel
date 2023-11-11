@extends('layouts.default')

@section('title', 'Home')

@section('content')
    <section class="w-full relative flex justify-center items-center">
        <img src="https://switzerland-tour.com/storage/media/4-ForArticles/swiss-mountains.jpg" alt=""
            class="w-full max-h-80 object-cover brightness-75">
        <div class="absolute">
            <h1 class="text-5xl font-black font-serif text-white">Alvaro's Blog</h1>
        </div>
    </section>
    <main class="container max-w-screen-sm m-auto">
        <x-post />
        <x-post />
        <x-post />
        <x-post />
    </main>
@endsection
