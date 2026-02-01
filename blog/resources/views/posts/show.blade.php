<x-layouts::app :title="$post->title">
    <div class="mx-auto max-w-3xl">
        @if(session('success'))
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-sm text-green-800 dark:border-green-900 dark:bg-green-950 dark:text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <!-- Header -->
        <div class="mb-8">
            <flux:heading size="xl" class="mb-4">{{ $post->title }}</flux:heading>
            
            @if($post->user)
                <div class="flex items-center gap-4 text-sm text-neutral-600 dark:text-neutral-400">
                    <div class="flex items-center gap-2">
                        <flux:avatar size="xs" :name="$post->user->name" />
                        <span>{{ $post->user->name }}</span>
                    </div>
                    <span>•</span>
                    <time datetime="{{ $post->published_at }}">
                        {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
                    </time>
                </div>
            @else
                <div class="flex items-center gap-4 text-sm text-neutral-600 dark:text-neutral-400">
                    <span>Unknown Author</span>
                    <span>•</span>
                    <time datetime="{{ $post->published_at }}">
                        {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
                    </time>
                </div>
            @endif

            @can('update', $post)
                <div class="mt-4 flex gap-2">
                    <flux:button href="{{ route('posts.edit', $post) }}" variant="ghost" size="sm" icon="pencil">
                        Edit
                    </flux:button>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                        @csrf
                        @method('DELETE')
                        <flux:button type="submit" variant="ghost" size="sm" icon="trash" class="text-red-600 hover:text-red-700">
                            Delete
                        </flux:button>
                    </form>
                </div>
            @endcan
        </div>

        <!-- Content -->
        <div class="prose prose-neutral max-w-none dark:prose-invert">
            {!! nl2br(e($post->content)) !!}
        </div>

        <!-- Back Button -->
        <div class="mt-12 border-t border-neutral-200 pt-8 dark:border-neutral-700">
            <flux:button href="{{ route('posts.index') }}" variant="ghost" icon="arrow-left">
                Back to Posts
            </flux:button>
        </div>
    </div>
</x-layouts::app>
