<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-navbar />

    <section class="py-8">
        <div class="max-w-2xl mx-auto">
            <a href="{{ route('post.show', $post->id) }}" class="text-sm text-gray-500">
                < Back</a>
                    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col space-y-2">
                            <x-input-field label="Title" name="title" type="text" :value="old('title', $post->title)" />

                            <x-textarea-field label="Body" name="body" :value="old('body', $post->body)" />

                            <button type="submit"
                                class="py-2 px-3 rounded-lg text-white bg-gray-800 hover:bg-gray-700 mt-2 cursor-pointer">Edit
                                Post</button>
                        </div>
                    </form>
        </div>
    </section>
</body>

</html>
