<!DOCTYPE html>
<html lang="en">
<x-head />

<body class="bg-gray-100">
    <x-navbar />

    <section>
        <div class="py-12 space-y-6">
            <div class="text-center mb-6">
                <h1 class="font-bold text-3xl">Login to your account</h1>
            </div>

            <div class="mx-auto max-w-md">
                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="flex flex-col space-y-2">
                        <x-input-field type="email" label="Email" name="email" />

                        <x-input-field type="password" label="Password" name="password" />

                        <button
                            class="py-2 px-3 rounded-lg bg-gray-900 hover:bg-gray-800 text-white mt-2 cursor-pointer">Login</button>
                    </div>
                </form>
            </div>

            <div class="text-center">
                <p>Don't have an account?
                    <a href="{{ route('register') }}">
                        <span class="underline">Register</span>
                    </a>
                </p>
            </div>
        </div>
    </section>
</body>

</html>
