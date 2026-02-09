<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-navbar />

    <section class="py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">Create Post</h1>

            <form action="{{ route('create-post.store') }}" method="POST">
                @csrf

                <div class="flex flex-col space-y-2">
                    <x-input-field label="Title" name="title" type="text" />

                    <x-textarea-field label="Body" name="body" />

                    <button type="submit"
                        class="py-2 px-3 rounded-lg text-white bg-gray-800 hover:bg-gray-700 mt-2 cursor-pointer">Create
                        Post</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
