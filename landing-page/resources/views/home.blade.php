<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body class="bg-gray-100">

    <x-navbar />
    @auth
        @foreach ($posts as $post)
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        @endforeach
    @else
        <x-guest-home />
    @endauth
</body>

</html>
