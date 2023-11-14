<div class="py-8 border-b-2">
    <a href="{{route("posts.show-by-slug", $post->slug)}}" class="block mb-4 group">
        <h3 class="mb-2 text-3xl font-black group-hover:text-cyan-600">
            {{ $post->title }}
        </h3>
        <p class="text-xl font-thin group-hover:text-cyan-600">
            {{ $post->subtitle }}
        </p>
    </a>
    <p class="font-serif text-gray-500">
        Posted by
        <span class="font-bold">{{ $post->user->name }}</span>
        on
        <span>November 06, 2023</span>
    </p>
</div>
