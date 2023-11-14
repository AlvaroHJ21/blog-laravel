<div class="mb-3">
    <label for="" class="block">Título</label>
    <input name="title" type="text"
        class="w-full px-4 py-2 border border-gray-300 focus:border-cyan-500 focus:ring-cyan-500"
        value="{{ old('title', isset($post) ? $post->title : '') }}">
    @error('title')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="block">Subtitulo</label>
    <input name="subtitle" type="text"
        class="w-full px-4 py-2 border border-gray-300 focus:border-cyan-500 focus:ring-cyan-500"
        value="{{ isset($post) ? $post->subtitle : '' }}">
    @error('subtitle')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="block">Image (URL)</label>
    <input name="image" type="text"
        class="w-full px-4 py-2 border border-gray-300 focus:border-cyan-500 focus:ring-cyan-500"
        value="{{ isset($post) ? $post->image : '' }}">
    @error('image')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="block">Contenido</label>
    <textarea id="editor" name="body"
        class="w-full px-4 py-2 border border-gray-300 focus:border-cyan-500 focus:ring-cyan-500">
        {{ isset($post) ? $post->body : '' }}
    </textarea>
    @error('body')
        <span class="text-sm text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="flex gap-2">
    <a href="{{ route('posts.index') }}" class="px-4 py-2">Volver</a>
    <button class="px-4 py-2 text-white bg-cyan-600"> {{ isset($post) ? 'Actualizar' : 'Guardar' }}</button>
</div>

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
