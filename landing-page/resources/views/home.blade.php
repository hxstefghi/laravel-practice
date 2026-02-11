<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body class="bg-gray-100">

    <x-navbar />
    @auth
        @foreach ($posts as $post)
            <section class="py-6">
                <div class="mx-auto max-w-xl">
                    <div class="flex flex-col">
                        <div class="bg-white p-6 rounded-2xl">
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
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    @else
        <x-guest-home />
    @endauth
</body>

</html>
