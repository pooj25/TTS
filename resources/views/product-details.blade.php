@extends('layouts.app')

@section('title', $product->name . ' | Track Tech Solutions')

@section('content')

    <!-- ===============================
         PRODUCT HERO
    ================================ -->

    <section class="pt-32 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center relative z-10">


                <!-- LEFT -->
                <div>

                    <!-- BACK -->
                    <a href="/products"
                       class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-800 transition mb-8 group">
                        <span class="mr-2 group-hover:-translate-x-1 transition">←</span> Back to Products
                    </a>


                    <!-- CATEGORY -->
                    @if($product->category)
                        <div class="mb-6">
                            <span class="inline-flex px-4 py-2 glass-panel border border-slate-300 rounded-full text-sm font-medium text-sky-400">
                                {{ $product->category }}
                            </span>
                        </div>
                    @endif


                    <!-- TITLE -->
                    <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight text-slate-800">
                        {{ $product->name }}
                    </h1>


                    <!-- SHORT DESCRIPTION -->
                    @if($product->short_description)
                        <p class="mt-7 text-lg lg:text-xl text-slate-700 leading-8">
                            {{ $product->short_description }}
                        </p>
                    @endif


                    <!-- CTA -->
                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="/contact"
                           class="inline-flex bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800 px-7 py-4 rounded-full font-semibold shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:-translate-y-1 transition">
                            Book a Demo →
                        </a>

                        <a href="/products"
                           class="inline-flex bg-white/5 border border-slate-300 text-slate-800 px-7 py-4 rounded-full font-semibold hover:bg-slate-200 transition">
                            View All Products
                        </a>
                    </div>

                </div>


                <!-- RIGHT PRODUCT ICON -->
                <div>

                    <div class="h-96 glass-card border border-slate-300 rounded-3xl flex items-center justify-center relative overflow-hidden group">
                        
                        <div class="absolute inset-0 bg-gradient-to-br from-sky-500/10 to-blue-600/10 opacity-50"></div>
                        <div class="absolute -inset-10 bg-sky-500/20 rounded-full blur-3xl opacity-20 group-hover:opacity-40 transition duration-700"></div>

                        <div class="w-40 h-40 rounded-[2rem] glass-panel border border-white/20 text-slate-800 flex items-center justify-center text-7xl shadow-xl shadow-sky-500/10 group-hover:scale-110 group-hover:rotate-6 transition duration-500 relative z-10">
                            {{ $product->icon ?? '📦' }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- ===============================
         PRODUCT DETAILS
    ================================ -->

    <section class="py-24 relative border-t border-b border-slate-200 bg-black/20">

        <div class="max-w-5xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="max-w-3xl">

                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Product Overview
                </p>

                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    Built for smarter
                    manufacturing.
                </h2>


                @if($product->description)
                    <div class="mt-8 text-lg text-slate-700 leading-8 whitespace-pre-line">
                        {{ $product->description }}
                    </div>
                @else
                    <p class="mt-8 text-lg text-slate-700 leading-8">
                        {{ $product->short_description
                            ?? 'This Track Tech Solutions product is designed to improve factory visibility, productivity and operational efficiency.' }}
                    </p>
                @endif

            </div>

        </div>

    </section>



    <!-- ===============================
         PRODUCT FEATURES
    ================================ -->

    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">


            <div class="text-center max-w-3xl mx-auto">
                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Why Choose This Product
                </p>

                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    Designed for the
                    factory floor.
                </h2>

                <p class="mt-6 text-slate-600 text-lg leading-8">
                    Track Tech Solutions products are designed
                    around real manufacturing workflows.
                </p>
            </div>



            <div class="grid md:grid-cols-3 gap-6 mt-16">

                <!-- FEATURE 1 -->
                <div class="glass-card border border-slate-300 rounded-3xl p-8 group hover:-translate-y-2 transition duration-300">
                    <div class="text-3xl w-14 h-14 bg-white/5 border border-slate-300 flex items-center justify-center rounded-2xl group-hover:bg-sky-500/20 transition">
                        ⚡
                    </div>

                    <h3 class="text-xl font-bold mt-6 text-slate-800">
                        Real-time Visibility
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Access important operational information
                        quickly and make better decisions.
                    </p>
                </div>


                <!-- FEATURE 2 -->
                <div class="glass-card border border-slate-300 rounded-3xl p-8 group hover:-translate-y-2 transition duration-300">
                    <div class="text-3xl w-14 h-14 bg-white/5 border border-slate-300 flex items-center justify-center rounded-2xl group-hover:bg-sky-500/20 transition">
                        📊
                    </div>

                    <h3 class="text-xl font-bold mt-6 text-slate-800">
                        Better Insights
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Turn factory data into useful information
                        for monitoring and analysis.
                    </p>
                </div>


                <!-- FEATURE 3 -->
                <div class="glass-card border border-slate-300 rounded-3xl p-8 group hover:-translate-y-2 transition duration-300">
                    <div class="text-3xl w-14 h-14 bg-white/5 border border-slate-300 flex items-center justify-center rounded-2xl group-hover:bg-sky-500/20 transition">
                        🚀
                    </div>

                    <h3 class="text-xl font-bold mt-6 text-slate-800">
                        Improved Productivity
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Simplify workflows and help teams operate
                        more efficiently.
                    </p>
                </div>

            </div>

        </div>

    </section>



    <!-- ===============================
         CATEGORY INFORMATION
    ================================ -->

    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="glass-panel border border-slate-300 rounded-[2rem] p-10 lg:p-16 relative overflow-hidden group">
                
                <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-20 transition duration-1000"></div>

                <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">

                    <div>
                        <p class="text-sky-400 uppercase tracking-widest text-sm font-semibold">
                            Track Tech Solutions
                        </p>

                        <h2 class="text-4xl lg:text-5xl font-bold mt-5 leading-tight text-slate-800">
                            Transform your factory
                            with digital technology.
                        </h2>
                    </div>

                    <div>
                        <p class="text-slate-700 text-lg leading-8">
                            Discover how
                            <span class="text-slate-800 font-semibold">{{ $product->name }}</span>
                            can help your organisation
                            improve visibility, productivity
                            and manufacturing performance.
                        </p>

                        <a href="/contact"
                           class="inline-flex mt-8 bg-white text-black px-7 py-4 rounded-full font-semibold hover:bg-gray-200 transition hover:-translate-y-1">
                            Talk to Our Team →
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection