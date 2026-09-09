<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $resource->title }} | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-slate-900">

    <!-- ================= NAVBAR ================= -->

    <nav class="border-b border-slate-200 bg-white">

        <div class="max-w-7xl mx-auto px-6 py-5
                    flex items-center justify-between">

            <a href="/" class="text-xl font-bold tracking-tight">
                Track Tech
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium">

                <a href="/" class="hover:text-slate-500 transition">
                    Home
                </a>

                <a href="/about" class="hover:text-slate-500 transition">
                    About
                </a>

                <a href="/solutions" class="hover:text-slate-500 transition">
                    Solutions
                </a>

                <a href="/products" class="hover:text-slate-500 transition">
                    Products
                </a>

                <a href="/industries" class="hover:text-slate-500 transition">
                    Industries
                </a>

                <a href="/resources"
                   class="text-slate-900 font-bold">
                    Resources
                </a>

                <a href="/contact"
                   class="bg-slate-900 text-white px-5 py-2.5
                          rounded-full hover:bg-slate-800 transition">
                    Contact
                </a>

            </div>

        </div>

    </nav>


    <!-- ================= HERO ================= -->

    <section class="bg-slate-950 text-white">

        <div class="max-w-7xl mx-auto px-6 py-24">

            <!-- Breadcrumb -->

            <div class="flex items-center gap-2
                        text-sm text-slate-400 mb-8">

                <a href="/resources"
                   class="hover:text-white transition">
                    Resources
                </a>

                <span>→</span>

                <span class="text-slate-300">
                    {{ $resource->title }}
                </span>

            </div>


            <div class="max-w-4xl">

                <!-- Type / Category -->

                <div class="flex flex-wrap items-center gap-3 mb-6">

                    @if($resource->type)

                        <span class="px-3 py-1 rounded-full
                                     bg-white/10 border border-white/10
                                     text-sm text-slate-300">

                            {{ $resource->type }}

                        </span>

                    @endif


                    @if($resource->category)

                        <span class="text-slate-500">
                            •
                        </span>

                        <span class="text-sm text-slate-400">

                            {{ $resource->category }}

                        </span>

                    @endif

                </div>


                <!-- Title -->

                <h1 class="text-4xl md:text-6xl font-bold
                           leading-tight">

                    {{ $resource->title }}

                </h1>


                <!-- Short Description -->

                @if($resource->short_description)

                    <p class="mt-7 text-xl text-slate-300
                              leading-8 max-w-3xl">

                        {{ $resource->short_description }}

                    </p>

                @endif

            </div>

        </div>

    </section>


    <!-- ================= CONTENT ================= -->

    <main class="py-20">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- ================= MAIN CONTENT ================= -->

                <article class="lg:col-span-2">

                    <!-- Resource Icon -->

                    <div class="w-24 h-24 rounded-2xl
                                bg-slate-100
                                flex items-center justify-center
                                text-5xl mb-10">

                        {{ $resource->icon ?: '📘' }}

                    </div>


                    <h2 class="text-3xl font-bold mb-6">
                        About this Resource
                    </h2>


                    @if($resource->description)

                        <div class="text-lg text-slate-600
                                    leading-9 whitespace-pre-line">

                            {{ $resource->description }}

                        </div>

                    @elseif($resource->short_description)

                        <div class="text-lg text-slate-600
                                    leading-9">

                            {{ $resource->short_description }}

                        </div>

                    @else

                        <p class="text-lg text-slate-500">
                            More information about this resource
                            will be available soon.
                        </p>

                    @endif


                    <!-- Resource Information -->

                    <div class="mt-12 pt-8
                                border-t border-slate-200">

                        <h3 class="text-xl font-bold mb-6">
                            Resource Information
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2
                                    gap-6">

                            @if($resource->type)

                                <div class="bg-slate-50 rounded-xl p-5">

                                    <p class="text-xs uppercase
                                              tracking-wider
                                              text-slate-500">
                                        Type
                                    </p>

                                    <p class="mt-2 font-semibold">
                                        {{ $resource->type }}
                                    </p>

                                </div>

                            @endif


                            @if($resource->category)

                                <div class="bg-slate-50 rounded-xl p-5">

                                    <p class="text-xs uppercase
                                              tracking-wider
                                              text-slate-500">
                                        Category
                                    </p>

                                    <p class="mt-2 font-semibold">
                                        {{ $resource->category }}
                                    </p>

                                </div>

                            @endif

                        </div>

                    </div>

                </article>


                <!-- ================= SIDEBAR ================= -->

                <aside>

                    <div class="sticky top-8
                                bg-slate-950 text-white
                                rounded-2xl p-8">

                        <div class="text-4xl mb-6">
                            {{ $resource->icon ?: '📘' }}
                        </div>

                        <h3 class="text-2xl font-bold">
                            {{ $resource->title }}
                        </h3>

                        <p class="mt-4 text-slate-400 leading-7">
                            Explore more insights and resources
                            from Track Tech Solutions.
                        </p>


                        <a
                            href="/contact"
                            class="block text-center mt-8
                                   bg-white text-slate-950
                                   px-6 py-3 rounded-full
                                   font-semibold
                                   hover:bg-slate-200 transition"
                        >
                            Talk to Our Team
                        </a>


                        <a
                            href="/resources"
                            class="block text-center mt-3
                                   border border-slate-700
                                   px-6 py-3 rounded-full
                                   font-semibold
                                   text-slate-300
                                   hover:bg-slate-800 transition"
                        >
                            ← All Resources
                        </a>

                    </div>

                </aside>

            </div>

        </div>

    </main>


    <!-- ================= CTA ================= -->

    <section class="bg-slate-100 py-20">

        <div class="max-w-5xl mx-auto px-6 text-center">

            <p class="text-sm uppercase tracking-[0.2em]
                      text-slate-500 mb-4">

                Digital Transformation

            </p>

            <h2 class="text-3xl md:text-5xl font-bold">

                Build a smarter,
                connected factory.

            </h2>

            <p class="mt-6 text-slate-600
                      max-w-2xl mx-auto leading-7">

                Discover how Track Tech Solutions can help
                transform your apparel manufacturing operations
                with intelligent technology.

            </p>

            <a
                href="/contact"
                class="inline-block mt-8
                       bg-slate-900 text-white
                       px-7 py-3.5 rounded-full
                       font-semibold
                       hover:bg-slate-800 transition"
            >
                Contact Us →
            </a>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="bg-slate-950 text-white">

        <div class="max-w-7xl mx-auto px-6 py-12">

            <div class="flex flex-col md:flex-row
                        justify-between gap-8">

                <div>

                    <h3 class="text-xl font-bold">
                        Track Tech
                    </h3>

                    <p class="text-slate-400 mt-3 max-w-md">
                        Intelligent technology solutions for
                        modern apparel manufacturing.
                    </p>

                </div>


                <div class="flex gap-8 text-sm text-slate-400">

                    <a href="/about"
                       class="hover:text-white">
                        About
                    </a>

                    <a href="/solutions"
                       class="hover:text-white">
                        Solutions
                    </a>

                    <a href="/products"
                       class="hover:text-white">
                        Products
                    </a>

                    <a href="/resources"
                       class="hover:text-white">
                        Resources
                    </a>

                    <a href="/contact"
                       class="hover:text-white">
                        Contact
                    </a>

                </div>

            </div>


            <div class="border-t border-slate-800
                        mt-10 pt-6
                        text-sm text-slate-500">

                © {{ date('Y') }} Track Tech Solutions.
                All rights reserved.

            </div>

        </div>

    </footer>

</body>

</html>