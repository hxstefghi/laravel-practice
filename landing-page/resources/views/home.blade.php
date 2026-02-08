<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body class="bg-gray-100">

    <x-navbar />

    <section class="py-8">
        <div class="mx-auto max-w-6xl gap-y-32">
            <div class="text-center">
                <h1 class="font-light text-7xl mb-6">Monetize your software</h1>
                <p class="text-2xl text-gray-500 font-light mb-6 font-light">Turn your software into a business with 6
                    lines of
                    code</p>

                <div class="flex text-center justify-center gap-6">
                    <button class="bg-gray-800 text-white py-4 px-4 rounded-full">
                        Get Started >
                    </button>

                    <button class="bg-gray-200 py-4 px-4 rounded-full">
                        Why Polar
                    </button>
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white py-4 px-4 rounded-full ml-4">Logout</button>
                        </form>
                    @endauth
                </div>
            </div>

            <div class="py-16">
                <div class="flex gap-6">
                    <div class="bg-white p-4 rounded-xl flex-1">
                        <div class="text-start flex flex-col justify-between h-full min-h-[220px]">
                            <div>
                                <h2 class="text-3xl font-light mb-3">Payments, Usage & Billing</h2>
                                <p class="mb-3">
                                    Create digital products and SaaS billing with flexible pricing models and seamless
                                    payment processing.
                                </p>
                            </div>
                            <button class="bg-gray-800 text-white py-4 px-4 rounded-full mt-4">
                                Get Started &gt;
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-xl flex-1">
                        <div class="text-start flex flex-col justify-between h-full min-h-[220px]">
                            <div>
                                <h2 class="text-3xl font-light mb-3">Customer Management</h2>
                                <p class="mb-3">
                                    Streamlined customer lifecycle management with detailed profiles and analytics.
                                </p>
                            </div>
                            <button class="bg-gray-800 text-white py-4 px-4 rounded-full mt-4">
                                Get Started &gt;
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded-xl flex-1">
                        <div class="text-start flex flex-col justify-between h-full min-h-[220px]">
                            <div>
                                <h2 class="text-3xl font-light mb-3">Payments, Usage & Billing</h2>
                                <p class="mb-3">
                                    Focus on your passion while we handle all headaches & tax compliance.
                                </p>
                            </div>
                            <button class="bg-gray-800 text-white py-4 px-4 rounded-full mt-4">
                                Get Started &gt;
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-6">
                <p class="text-2xl">Powering billing for thousands of startups</p>
            </div>
            <div class="flex justify-center gap-12">
                <h1 class="font-bold text-2xl">Company</h1>
                <h1 class="font-bold text-2xl">Company</h1>
                <h1 class="font-bold text-2xl">Company</h1>
                <h1 class="font-bold text-2xl">Company</h1>
            </div>

            <div class="py-12 p-3">
                <div class="flex gap-6">
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mb-6">
                <p class="font-light mb-3">Framework Adapters</p>
                <p class="text-5xl font-bold">Integrate in under a minute</p>
            </div>

            <div class="flex">
                <div class="flex flex-col bg-white p-12 rounded-s-2xl space-y-6">
                    <h1 class="font-bold text-3xl">Next.js Adapter</h1>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat atque architecto
                        placeat
                        distinctio? Porro, magnam.</p>
                    <ul>
                        <li>Secure & Simple Checkouts</li>
                        <li>Integrated Customer Portal</li>
                        <li>Granular & Reliable Webhook Handler</li>
                    </ul>

                    <button class="p-3 rounded-full bg-gray-800 text-white cursor-pointer w-30">Learn
                        More</button>
                </div>

                <div class="flex flex-col bg-gray-900 text-white p-12 rounded-e-2xl space-y-6">
                    <h1 class="font-bold text-3xl">Next.js Adapter</h1>
                    <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat atque architecto
                        placeat
                        distinctio? Porro, magnam.</p>
                    <ul>
                        <li>Secure & Simple Checkouts</li>
                        <li>Integrated Customer Portal</li>
                        <li>Granular & Reliable Webhook Handler</li>
                    </ul>

                    <button class="p-3 rounded-full bg-white text-black cursor-pointer w-30">Learn
                        More</button>
                </div>
            </div>

            <div class="py-12">
                <div class="text-center mb-12">
                    <p class="font-light">Testimonials</p>
                    <h1 class="text-5xl font-bold">Why people love polar</h1>
                </div>

                <div class="grid grid-cols-3 gap-6">
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                    labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                    labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-6 rounded-xl flex-1">
                        <div class="flex flex-col justify-between">
                            <div class="mb-12">
                                <h1 class="font-bold text-2xl mb-2">Logo</h1>
                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                    labore
                                    voluptas sit nisi
                                    animi itaque aliquid, inventore incidunt quis illo. Harum perspiciatis quo error ea?
                                </p>
                                <p class="mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et!</p>
                            </div>

                            <p class="font-bold">Founder Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
