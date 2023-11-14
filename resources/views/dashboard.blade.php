<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="grid grid-cols-3 gap-8">

                        <div class="col-span-2">
                            <div class="flex p-8 mb-4 border">
                                <div class="flex-1">
                                    <p class="mb-2 text-2xl font-bol">Hello {{ Auth::user()->name }}!</p>
                                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti
                                        veritatisveniam aperiamaccusamus voluptates dolorum velit officiis
                                        exercitationem at.</p>
                                    <a href="{{ route('posts.create') }}" class="btn btn-primary">Write a new post</a>
                                </div>
                                <div class="">
                                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/content-writing-3630842-3126503.png"
                                        alt="" width="280">
                                </div>
                            </div>
                            <h3 class="mb-4 text-2xl">Top articles</h3>
                            <table class="w-full">
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="p-2 text-gray-400">0{{ $loop->index + 1 }}</td>
                                            <td class="p-2"><img src="{{ $post->image }}" alt=""
                                                    width="80" height="80"></td>
                                            <td class="max-w-[200px] p-2">
                                                {{ $post->title }}
                                            </td>
                                            <td class="p-2">
                                                <i class="fa fa-eye"></i> {{ rand(1, 1000) }}
                                            </td>
                                            <td class="p-2">
                                                <i class="fa fa-thumbs-up"></i> {{ rand(1, 1000) }}
                                            </td>
                                            <td class="p-2">
                                                <i class="fa fa-message"></i> {{ rand(1, 1000) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-span-1">
                            <div class="flex items-center gap-4 p-4 mb-4 text-white bg-cyan-700">
                                <div class="grid w-10 h-10 bg-black place-content-center">
                                    <i class="fas fa-file-lines"></i>
                                </div>
                                <div class="font-serif">
                                    <p class="text-xl">{{ 20 }}</p>
                                    <p>Total posts created</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 mb-4 text-white bg-cyan-600">
                                <div class="grid w-10 h-10 bg-black place-content-center">
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                                <div class="font-serif">
                                    <p class="text-xl">{{ 13 }}</p>
                                    <p>Articles request</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 mb-4 text-white bg-cyan-500">
                                <div class="grid w-10 h-10 bg-black place-content-center">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="font-serif">
                                    <p class="text-xl">{{ 03 }}</p>
                                    <p>Pending articles</p>
                                </div>
                            </div>
                            <h3 class="mb-4 text-2xl">Today articles</h3>
                            <div>
                                <img src="https://theeventscalendar.com/knowledgebase/wp-content/uploads/2021/04/Screen-Shot-2021-04-29-at-9.42.57-AM.png"
                                    alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
