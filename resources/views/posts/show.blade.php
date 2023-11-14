@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <main class="max-w-screen-sm py-8 m-auto">
        <h1 class="mb-2 font-serif text-3xl font-bold">{{ $post->title }}</h1>
        <hr class="mb-4">
        <img src="{{ $post->image }}" alt="" class="object-cover w-full mb-4 h-60">
        <p class="mb-4">
            By <span class="font-bold text-cyan-700">{{ $post->user->name }}</span>
            on
            <span>{{ $post->created_at->format('F d, Y') }}</span>
        </p>
        <h2 class="mb-2 text-2xl">{{ $post->subtitle }}</h2>
        <div class="content">
            {!! $post->body !!}
        </div>
    </main>
@endsection
