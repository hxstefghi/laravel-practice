<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body class="bg-gray-200">

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
        </div>
    </section>
</body>

</html>
