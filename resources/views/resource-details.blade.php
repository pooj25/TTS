@extends('layouts.app')

@section('title', $resource->title . ' | Track Tech Solutions')

@section('content')

    <!-- ================= HERO ================= -->
    <section class="relative pt-32 pb-20">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm text-gray-400 mb-8">

                <a href="/resources" class="hover:text-white transition">
                    Resources
                </a>

                <span>→</span>

                <span class="text-gray-300">
                    {{ $resource->title }}
                </span>

            </div>


            <div class="max-w-4xl">

                <!-- Type / Category -->
                <div class="flex flex-wrap items-center gap-3 mb-6">

                    @if($resource->type)
                        <span class="px-3 py-1 rounded-full bg-white/10 border border-white/10 text-sm text-sky-400">
                            {{ $resource->type }}
                        </span>
                    @endif

                    @if($resource->category)
                        <span class="text-gray-500">•</span>
                        <span class="text-sm text-gray-400">
                            {{ $resource->category }}
                        </span>
                    @endif

                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-6xl font-bold leading-tight text-white">
                    {{ $resource->title }}
                </h1>

                <!-- Short Description -->
                @if($resource->short_description)
                    <p class="mt-7 text-xl text-gray-300 leading-8 max-w-3xl">
                        {{ $resource->short_description }}
                    </p>
                @endif

            </div>

        </div>

    </section>


    <!-- ================= CONTENT ================= -->
    <main class="py-20 relative border-t border-white/5 bg-black/20">

        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <!-- ================= MAIN CONTENT ================= -->
                <article class="lg:col-span-2">

                    <!-- Resource Icon -->
                    <div class="w-24 h-24 rounded-2xl glass-card border border-white/10 flex items-center justify-center text-5xl mb-10 shadow-lg shadow-sky-500/10">
                        {{ $resource->icon ?: '📘' }}
                    </div>


                    <h2 class="text-3xl font-bold mb-6 text-white">
                        About this Resource
                    </h2>


                    @if($resource->description)
                        <div class="text-lg text-gray-300 leading-9 whitespace-pre-line">
                            {{ $resource->description }}
                        </div>
                    @elseif($resource->short_description)
                        <div class="text-lg text-gray-300 leading-9">
                            {{ $resource->short_description }}
                        </div>
                    @else
                        <p class="text-lg text-gray-500">
                            More information about this resource
                            will be available soon.
                        </p>
                    @endif


                    <!-- Resource Information -->
                    <div class="mt-12 pt-8 border-t border-white/10">

                        <h3 class="text-xl font-bold mb-6 text-white">
                            Resource Information
                        </h3>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            @if($resource->type)
                                <div class="glass-panel border border-white/10 rounded-xl p-5">
                                    <p class="text-xs uppercase tracking-wider text-gray-500">
                                        Type
                                    </p>
                                    <p class="mt-2 font-semibold text-white">
                                        {{ $resource->type }}
                                    </p>
                                </div>
                            @endif

                            @if($resource->category)
                                <div class="glass-panel border border-white/10 rounded-xl p-5">
                                    <p class="text-xs uppercase tracking-wider text-gray-500">
                                        Category
                                    </p>
                                    <p class="mt-2 font-semibold text-white">
                                        {{ $resource->category }}
                                    </p>
                                </div>
                            @endif

                        </div>

                    </div>

                </article>


                <!-- ================= SIDEBAR ================= -->
                <aside>

                    <div class="sticky top-28 glass-panel border border-white/10 rounded-2xl p-8 relative overflow-hidden group">
                        
                        <div class="absolute -inset-2 bg-gradient-to-br from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-10 transition duration-1000"></div>

                        <div class="relative z-10">
                            <div class="text-4xl mb-6 group-hover:scale-110 transition origin-left">
                                {{ $resource->icon ?: '📘' }}
                            </div>

                            <h3 class="text-2xl font-bold text-white">
                                {{ $resource->title }}
                            </h3>

                            <p class="mt-4 text-gray-400 leading-7">
                                Explore more insights and resources
                                from Track Tech Solutions.
                            </p>


                            <a href="/contact"
                               class="block text-center mt-8 bg-gradient-to-r from-sky-500 to-blue-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:-translate-y-1 transition">
                                Talk to Our Team
                            </a>

                            <a href="/resources"
                               class="block text-center mt-3 border border-white/20 px-6 py-3 rounded-full font-semibold text-gray-300 hover:bg-white/10 hover:text-white transition">
                                ← All Resources
                            </a>
                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </main>


    <!-- ================= CTA ================= -->
    <section class="py-20 relative border-t border-white/5">

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none -z-10">
            <div class="w-[400px] h-[400px] bg-sky-500/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">

            <p class="text-sm uppercase tracking-[0.2em] text-sky-400 mb-4 font-semibold">
                Digital Transformation
            </p>

            <h2 class="text-3xl md:text-5xl font-bold text-white">
                Build a smarter,
                connected factory.
            </h2>

            <p class="mt-6 text-gray-400 max-w-2xl mx-auto leading-7">
                Discover how Track Tech Solutions can help
                transform your apparel manufacturing operations
                with intelligent technology.
            </p>

            <a href="/contact"
               class="inline-block mt-8 bg-white text-black px-7 py-3.5 rounded-full font-semibold hover:-translate-y-1 transition">
                Contact Us →
            </a>

        </div>

    </section>

@endsection