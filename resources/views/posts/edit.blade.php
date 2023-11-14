<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Post') }}
        </h2>
    </x-slot>

    <x-card>
        <main class="max-w-screen-md m-auto">
            <form action="{{ route('posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')
                @include('posts._form')
            </form>
        </main>
    </x-card>
</x-app-layout>
