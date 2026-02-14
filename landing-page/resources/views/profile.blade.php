<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-navbar />

    <section class="py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold mb-6">User Profile</h1>

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf

                <div class="flex flex-col space-y-2">
                    <p>Name</p>
                    <p class="bg-gray-200 rounded-lg py-2 px-3">{{ $user->name }}</p>

                    <p class="mt-2">Email</p>
                    <p class="bg-gray-200 rounded-lg py-2 px-3">{{ $user->email }}</p>

                    <button type="submit"
                        class="py-2 px-3 rounded-lg text-white bg-gray-800 hover:bg-gray-700 mt-3 cursor-pointer">Edit
                        Profile</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
