<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body class="bg-gray-100">

    <x-navbar />
    @auth
        <section class="py-2">
            <div class="mx-auto max-w-xl">
                <div class="flex flex-col">
                    <div class="bg-white p-6 rounded-2xl">
                        <a href="{{ route('post.index') }}" class="text-sm text-gray-500">
                            < Back </a>
                                <div class="flex justify-between">
                                    <h1>{{ $post->user->name }}</h1>
                                    <h1>{{ $post->user->email }}</h1>
                                </div>
                                <hr class="my-4">
                                <div class="flex flex-between flex-col">
                                    <div class="mt-2 mb-6">
                                        <h1>{{ $post->title }}</h1>
                                        <p>{{ $post->body }}</p>
                                    </div>
                                    <p class="text-gray-500 text-sm">Posted {{ $post->updated_at->diffForHumans() }}</p>
                                </div>
                                <div class="flex justify-end gap-2 mt-4">
                                    <a href="{{ route('post.edit', $post->id) }}"
                                        class="py-2 px-3 rounded-lg bg-gray-800 text-white cursor-pointer">Edit</a>
                                    <a href=""
                                        class="py-2 px-3 rounded-lg bg-red-500 text-white cursor-pointer">Delete</a>
                                </div>
                    </div>
                </div>
            </div>
        </section>
    @endauth
</body>

</html>
