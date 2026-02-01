<x-layouts::app :title="__('Blog Posts')">
    <div class="mx-auto max-w-4xl">
        <div class="mb-8 flex items-center justify-between">
            <div>
                <flux:heading size="xl">Blog Posts</flux:heading>
                <flux:subheading>Explore our latest articles and updates</flux:subheading>
            </div>
            @auth
                <flux:button href="{{ route('posts.create') }}" icon="plus">
                    New Post
                </flux:button>
            @endauth
        </div>

        @if($posts->isEmpty())
            <div class="rounded-xl border border-neutral-200 bg-white p-12 text-center dark:border-neutral-700 dark:bg-neutral-800">
                <flux:subheading>No posts yet</flux:subheading>
                <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
                    Be the first to create a post!
                </p>
            </div>
        @else
            <div class="space-y-6">
                @foreach($posts as $post)
                    <article class="rounded-xl border border-neutral-200 bg-white p-6 transition hover:border-neutral-300 dark:border-neutral-700 dark:bg-neutral-800 dark:hover:border-neutral-600">
                        <div class="mb-4 flex items-start justify-between">
                            <div class="flex-1">
                                <a href="{{ route('posts.show', $post) }}" class="group">
                                    <flux:heading size="lg" class="group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                        {{ $post->title }}
                                    </flux:heading>
                                </a>
                                <div class="mt-2 flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-400">
                                    <span>{{ $post->user?->name ?? 'Unknown Author' }}</span>
                                    <span>•</span>
                                    <time datetime="{{ $post->published_at }}">
                                        {{ $post->published_at->format('M d, Y') }}
                                    </time>
                                </div>
                            </div>
                        </div>
                        
                        @if($post->excerpt)
                            <p class="mb-4 text-neutral-700 dark:text-neutral-300">
                                {{ $post->excerpt }}
                            </p>
                        @endif

                        <flux:button href="{{ route('posts.show', $post) }}" variant="ghost" size="sm">
                            Read more →
                        </flux:button>
                    </article>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-layouts::app>
