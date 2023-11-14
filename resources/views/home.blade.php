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
    <div class="max-w-screen-lg py-4 m-auto w-[90%]">
        <div class="flex justify-end">
            <form action="{{ route('home') }}" method="GET">
                <input type="text" name="search" value="{{ request('search') }}"
                    class="w-full px-4 py-2 border border-gray-300 focus:border-cyan-500 focus:ring-cyan-500"
                    placeholder="Buscar...">
            </form>
        </div>
    </div>
    <main class="container max-w-screen-sm py-4 m-auto">
        @foreach ($posts as $post)
            {{-- <x-post id="{{ $post->id }}" title="{{ $post->title }}" subtitle="{{ $post->subtitle }}" /> --}}
            @include('components.post')
            {{-- ['post' => $post] --}}
        @endforeach
    </main>
@endsection
