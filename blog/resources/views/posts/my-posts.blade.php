@php
    use Illuminate\Support\Str;
@endphp

<x-layouts::app :title="__('My Posts')">
    <div class="mx-auto max-w-4xl">
        <div class="mb-8 flex items-center justify-between">
            <div>
                <flux:heading size="xl">My Posts</flux:heading>
                <flux:subheading>Manage your blog posts</flux:subheading>
            </div>
            <flux:button href="{{ route('posts.create') }}" icon="plus">
                New Post
            </flux:button>
        </div>

        @if (session('success'))
            <div
                class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-800 dark:border-green-900 dark:bg-green-950 dark:text-green-200">
                {{ session('success') }}
            </div>
        @endif

        @if ($posts->isEmpty())
            <div
                class="rounded-xl border border-neutral-200 bg-white p-12 text-center dark:border-neutral-700 dark:bg-neutral-800">
                <flux:subheading>No posts yet</flux:subheading>
                <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
                    Create your first post to get started
                </p>
                <flux:button href="{{ route('posts.create') }}" class="mt-4">
                    Create Post
                </flux:button>
            </div>
        @else
            <div class="space-y-4">
                @foreach ($posts as $post)
                    <article
                        class="rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-neutral-800">
                        <div class="flex items-start justify-between gap-4">
                            <div class="flex-1">
                                <a href="{{ route('posts.show', $post) }}" class="group">
                                    <flux:heading size="lg"
                                        class="group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                        {{ $post->title }}
                                    </flux:heading>
                                </a>
                                <div
                                    class="mt-2 flex items-center gap-3 text-sm text-neutral-600 dark:text-neutral-400">
                                    @if ($post->published_at)
                                        <flux:badge color="green">Published</flux:badge>
                                        <span>{{ $post->published_at->format('M d, Y') }}</span>
                                    @else
                                        <flux:badge color="neutral">Draft</flux:badge>
                                        <span>{{ $post->updated_at->format('M d, Y') }}</span>
                                    @endif
                                </div>
                                @if ($post->excerpt)
                                    <p class="mt-3 text-sm text-neutral-700 dark:text-neutral-300">
                                        {{ Str::limit($post->excerpt, 150) }}
                                    </p>
                                @endif
                            </div>
                            <div class="flex gap-2">
                                <flux:button href="{{ route('posts.edit', $post) }}" variant="ghost" size="sm"
                                    icon="pencil">
                                    Edit
                                </flux:button>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
</x-layouts::app>
