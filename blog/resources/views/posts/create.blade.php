<x-layouts::app :title="__('Create Post')">
    <div class="mx-auto max-w-3xl">
        <div class="mb-8">
            <flux:heading size="xl">Create New Post</flux:heading>
            <flux:subheading>Share your thoughts with the world</flux:subheading>
        </div>

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 dark:border-red-900 dark:bg-red-950">
                <div class="text-sm font-medium text-red-800 dark:text-red-200">
                    There were some errors with your submission:
                </div>
                <ul class="mt-2 list-disc list-inside text-sm text-red-700 dark:text-red-300">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
            @csrf

            <flux:card>
                <div class="space-y-6">
                    <!-- Title -->
                    <flux:field>
                        <flux:label>Title</flux:label>
                        <flux:input name="title" placeholder="Enter post title" value="{{ old('title') }}"
                            required />
                        <flux:error name="title" />
                    </flux:field>

                    <!-- Excerpt -->
                    <flux:field>
                        <flux:label>Excerpt</flux:label>
                        <flux:description>A short summary that will appear in the post listing</flux:description>
                        <flux:textarea name="excerpt" placeholder="Enter a brief summary (optional)" rows="2">
                            {{ old('excerpt') }}</flux:textarea>
                        <flux:error name="excerpt" />
                    </flux:field>

                    <!-- Content -->
                    <flux:field>
                        <flux:label>Content</flux:label>
                        <flux:textarea name="content" placeholder="Write your post content here..." rows="12"
                            required>{{ old('content') }}</flux:textarea>
                        <flux:error name="content" />
                    </flux:field>

                    <!-- Publish Toggle -->
                    <flux:field>
                        <div class="flex items-center gap-2">
                            <flux:checkbox name="published" value="1" :checked="old('published', true)" />
                            <flux:label>Publish immediately</flux:label>
                        </div>
                        <flux:description>Uncheck to save as draft</flux:description>
                    </flux:field>
                </div>
            </flux:card>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                <flux:button href="{{ route('posts.index') }}" variant="ghost">
                    Cancel
                </flux:button>
                <flux:button type="submit" variant="primary">
                    Create Post
                </flux:button>
            </div>
        </form>
    </div>
</x-layouts::app>
