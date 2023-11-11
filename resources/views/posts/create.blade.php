@extends('layouts.default')

@section('title', 'Create Post')

@section('content')
    <section class="w-full relative flex justify-center items-center">
        <img src="https://switzerland-tour.com/storage/media/4-ForArticles/swiss-mountains.jpg" alt=""
            class="w-full max-h-80 object-cover brightness-75">
        <div class="absolute text-white text-center">
            <h1 class="text-5xl font-black font-serif mb-4">Create Post</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </section>
    <main class="max-w-screen-sm m-auto py-8">
        <form action="">
            <div class="mb-3">
                <label for="" class="block">Título</label>
                <input type="text" class="py-2 px-4 border focus:outline-cyan-500 w-full">
            </div>
            <div class="mb-3">
                <label for="" class="block">Subtitulo</label>
                <input type="text" class="py-2 px-4 border focus:outline-cyan-500 w-full">
            </div>
            <div class="mb-3">
                <label for="" class="block">Body</label>
                <textarea id="editor" class="py-2 px-4 border focus:outline-cyan-500 w-full"></textarea>
            </div>
            <button class="bg-cyan-600 text-white py-2 px-4">Guardar</button>
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
