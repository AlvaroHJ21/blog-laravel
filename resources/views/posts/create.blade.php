@extends('layouts.default')

@section('title', 'Create Post')

@section('content')
    <section class="relative flex items-center justify-center w-full">
        <img src="https://switzerland-tour.com/storage/media/4-ForArticles/swiss-mountains.jpg" alt=""
            class="object-cover w-full max-h-80 brightness-75">
        <div class="absolute text-center text-white">
            <h1 class="mb-4 font-serif text-5xl font-black">Create Post</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <main class="max-w-screen-sm py-8 m-auto">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="block">Título</label>
                <input name="title" type="text" class="w-full px-4 py-2 border focus:outline-cyan-500">
            </div>
            <div class="mb-3">
                <label for="" class="block">Subtitulo</label>
                <input name="subtitle" type="text" class="w-full px-4 py-2 border focus:outline-cyan-500">
            </div>
            <div class="mb-3">
                <label for="" class="block">Image (URL)</label>
                <input name="image" type="text" class="w-full px-4 py-2 border focus:outline-cyan-500">
            </div>
            <div class="mb-3">
                <label for="" class="block">Body</label>
                <textarea id="editor" name="body" class="w-full px-4 py-2 border focus:outline-cyan-500"></textarea>
            </div>
            <button class="px-4 py-2 text-white bg-cyan-600">Guardar</button>
        </form>
    </main>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
