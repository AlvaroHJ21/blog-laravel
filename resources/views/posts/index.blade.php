<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Posts') }}
            </h2>
            <a href="{{route("posts.create")}}" class="btn btn-primary">Crear</a>
        </div>
    </x-slot>
    <x-card>
        <table class="w-full">
            <thead>
                <tr class="text-left border-b border-b-gray-400">
                    <th class="py-2">Post</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="border-b">
                        <td class="py-1">
                            <div class="text-xl">
                                {{ $post->title }}
                            </div>
                            <div class="text-sm text-gray-500">
                                {{ $post->subtitle }}
                            </div>
                        </td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <div class="flex gap-2">
                                <a href="{{route("posts.edit", $post)}}" class="btn">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-error" onclick="return confirm('Desea eliminar: {{$post->title}}?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </x-card>
</x-app-layout>
