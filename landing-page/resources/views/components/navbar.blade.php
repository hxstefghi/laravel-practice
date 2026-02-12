<header class="py-12">
    <div class="mx-auto max-w-6xl">
        <nav class="flex items-center justify-between">
            <a href={{ route('home') }}>
                <h1 class="font-bold text-3xl">Logo</h1>
            </a>

            <div class="space-x-8">
                <a href="#">Features</a>
                <a href="#">Docs</a>
                <a href="#">Company</a>
                @auth
                    <a href="{{ route('post.create') }}">Create Post</a>
                @endauth
            </div>

            <div>
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="cursor-pointer">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login-view') }}">Log In</a>
                @endauth
            </div>
        </nav>
    </div>
</header>
