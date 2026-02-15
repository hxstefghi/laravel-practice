<!DOCTYPE html>
<html lang="en">
<x-head />

<body>
    <x-navbar />

    <section class="py-8">
        <div class="max-w-2xl mx-auto">
            <a href="{{ route('user.show', $user->id) }}" class="text-gray-500 text-sm">
                < Back</a>
                    <h1 class="text-2xl font-bold mb-6">Edit Profile</h1>

                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col space-y-2">
                            <x-input-field type="text" label="Full Name" name="name" :value="old('name', $user->name)" />

                            <x-input-field type="email" label="Email" name="email" :value="old('email', $user->email)" />

                            <x-input-field type="password" label="Password" name="password" />

                            <x-input-field type="password" label="Confirm Password" name="password_confirmation" />

                            <button type="submit"
                                class="py-2 px-3 rounded-lg bg-gray-900 hover:bg-gray-800 text-white mt-2 cursor-pointer">Update
                                Profile</button>
                        </div>
                    </form>
        </div>
    </section>
</body>

</html>
