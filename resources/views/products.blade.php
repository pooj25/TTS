@extends('layouts.app')

@section('title', 'Products | Track Tech Solutions')

@section('content')

    <!-- ===============================
         HERO
    ================================ -->

    <section class="pt-32 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl">

                <div class="inline-flex items-center gap-2
                            px-4 py-2
                            glass-panel
                            rounded-full text-sm font-medium mb-7">

                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>

                    Our Products

                </div>


                <h1 class="text-5xl lg:text-7xl
                           font-bold leading-tight tracking-tight text-white">

                    Digital products built for

                    <span class="text-gradient">
                        modern factories.
                    </span>

                </h1>


                <p class="mt-7 text-lg lg:text-xl
                          text-gray-300 leading-8 max-w-3xl">

                    Powerful software products designed to simplify
                    apparel manufacturing, improve productivity and
                    provide real-time visibility across your factory.

                </p>

            </div>

        </div>

    </section>


    <!-- ===============================
         PRODUCTS
    ================================ -->

    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <!-- SECTION HEADING -->

            <div class="text-center max-w-3xl mx-auto">

                <p class="text-sm font-semibold uppercase
                          tracking-widest text-sky-400">

                    Product Ecosystem

                </p>


                <h2 class="text-4xl lg:text-5xl
                           font-bold mt-4 text-white">

                    One platform.
                    Multiple possibilities.

                </h2>


                <p class="mt-6 text-gray-400 text-lg leading-8">

                    Connect your factory operations through
                    purpose-built digital products.

                </p>

            </div>


            <!-- ===============================
                 DYNAMIC PRODUCT GRID
            ================================ -->

            <div class="grid md:grid-cols-2 gap-7 mt-16">


                @forelse($products as $index => $product)


                    @if($index === 5)

                        <!-- ===============================
                             DARK PRODUCT CARD
                        ================================ -->

                        <div class="group border border-white/20
                                    rounded-3xl overflow-hidden
                                    glass-panel
                                    hover:-translate-y-1
                                    transition duration-300">


                            <!-- PRODUCT ICON -->

                            <div class="h-64 bg-white/5
                                        flex items-center justify-center border-b border-white/10">

                                <div class="w-28 h-28 rounded-3xl
                                            glass-card
                                            flex items-center justify-center
                                            text-5xl border border-white/20 shadow-xl shadow-sky-500/20 group-hover:scale-110 transition">

                                    {{ $product->icon ?? '📊' }}

                                </div>

                            </div>


                            <!-- PRODUCT CONTENT -->

                            <div class="p-8">

                                <p class="text-sm text-sky-400
                                          font-semibold">

                                    PRODUCT
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </p>


                                <h3 class="text-3xl font-bold mt-3 text-white">

                                    {{ $product->name }}

                                </h3>


                                <p class="mt-5 text-gray-300 leading-7">

                                    {{ $product->short_description
                                        ?? $product->description
                                        ?? 'Digital product for smarter manufacturing.' }}

                                </p>


                                <!-- CATEGORY -->

                                @if($product->category)

                                    <div class="mt-7 flex flex-wrap gap-2">

                                        <span class="px-3 py-2
                                                     bg-sky-500/20 border border-sky-500/30 text-sky-400
                                                     rounded-full
                                                     text-xs
                                                     font-medium">

                                            {{ $product->category }}

                                        </span>

                                    </div>

                                @endif


                                <!-- VIEW PRODUCT -->

                                <a href="{{ route('products.show', $product->slug) }}"
                                   class="inline-block mt-8
                                          font-semibold text-sky-400
                                          hover:text-white transition">

                                    View Product →

                                </a>

                            </div>

                        </div>


                    @else

                        <!-- ===============================
                             NORMAL PRODUCT CARD
                        ================================ -->

                        <div class="group border border-white/10
                                    rounded-3xl overflow-hidden
                                    glass-card
                                    transition duration-300">


                            <!-- PRODUCT ICON -->

                            <div class="h-64 bg-white/5
                                        flex items-center justify-center border-b border-white/10">

                                <div class="w-28 h-28 rounded-3xl
                                            glass-panel
                                            flex items-center justify-center
                                            text-5xl border border-white/20 shadow-lg group-hover:scale-110 transition">

                                    {{ $product->icon ?? '📦' }}

                                </div>

                            </div>


                            <!-- PRODUCT CONTENT -->

                            <div class="p-8">

                                <p class="text-sm text-sky-400
                                          font-semibold">

                                    PRODUCT
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </p>


                                <h3 class="text-3xl font-bold mt-3 text-white">

                                    {{ $product->name }}

                                </h3>


                                <p class="mt-5 text-gray-300 leading-7">

                                    {{ $product->short_description
                                        ?? $product->description
                                        ?? 'Digital product for smarter manufacturing.' }}

                                </p>


                                <!-- CATEGORY -->

                                @if($product->category)

                                    <div class="mt-7 flex flex-wrap gap-2">

                                        <span class="px-3 py-2
                                                     bg-white/10 border border-white/10 text-gray-300
                                                     rounded-full
                                                     text-xs
                                                     font-medium">

                                            {{ $product->category }}

                                        </span>

                                    </div>

                                @endif


                                <!-- VIEW PRODUCT -->

                                <a href="{{ route('products.show', $product->slug) }}"
                                   class="inline-block mt-8
                                          font-semibold text-sky-400 hover:text-white transition">

                                    View Product →

                                </a>

                            </div>

                        </div>

                    @endif


                @empty

                    <!-- ===============================
                         EMPTY STATE
                    ================================ -->

                    <div class="md:col-span-2
                                border border-white/10 glass-panel
                                rounded-3xl
                                p-12
                                text-center">

                        <div class="text-5xl mb-5 opacity-50">
                            📦
                        </div>


                        <h3 class="text-2xl font-bold text-white">

                            No products available

                        </h3>


                        <p class="mt-3 text-gray-400">

                            Products will appear here once they
                            are added from the admin panel.

                        </p>

                    </div>

                @endforelse


            </div>

        </div>

    </section>


    <!-- ===============================
         PRODUCT BENEFITS
    ================================ -->

    <section class="py-24 relative border-t border-white/10 bg-black/20">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center">


                <!-- LEFT CONTENT -->

                <div>

                    <p class="text-sm font-semibold uppercase
                              tracking-widest text-sky-400">

                        Built for Manufacturing

                    </p>


                    <h2 class="text-4xl lg:text-5xl
                               font-bold mt-4 leading-tight text-white">

                        Technology that works
                        on the factory floor.

                    </h2>


                    <p class="mt-6 text-gray-400 text-lg leading-8">

                        Our products are designed around real
                        manufacturing workflows, making digital
                        transformation practical and easy to adopt.

                    </p>

                </div>


                <!-- BENEFITS -->

                <div class="grid sm:grid-cols-2 gap-5">


                    <!-- BENEFIT 1 -->

                    <div class="glass-panel p-7 rounded-2xl">

                        <div class="text-2xl mb-4 bg-sky-500/20 w-12 h-12 flex items-center justify-center rounded-xl border border-sky-500/30 shadow-lg shadow-sky-500/10">
                            ⚡
                        </div>

                        <h3 class="font-bold text-lg mt-5 text-white">
                            Real-time
                        </h3>

                        <p class="text-gray-400 mt-2
                                  text-sm leading-6">

                            Access operational information instantly.

                        </p>

                    </div>


                    <!-- BENEFIT 2 -->

                    <div class="glass-panel p-7 rounded-2xl md:translate-y-8">

                        <div class="text-2xl mb-4 bg-purple-500/20 w-12 h-12 flex items-center justify-center rounded-xl border border-purple-500/30 shadow-lg shadow-purple-500/10">
                            📱
                        </div>

                        <h3 class="font-bold text-lg mt-5 text-white">
                            Mobile Ready
                        </h3>

                        <p class="text-gray-400 mt-2
                                  text-sm leading-6">

                            Access factory information from anywhere.

                        </p>

                    </div>


                    <!-- BENEFIT 3 -->

                    <div class="glass-panel p-7 rounded-2xl">

                        <div class="text-2xl mb-4 bg-indigo-500/20 w-12 h-12 flex items-center justify-center rounded-xl border border-indigo-500/30 shadow-lg shadow-indigo-500/10">
                            🔒
                        </div>

                        <h3 class="font-bold text-lg mt-5 text-white">
                            Secure
                        </h3>

                        <p class="text-gray-400 mt-2
                                  text-sm leading-6">

                            Keep your business data protected.

                        </p>

                    </div>


                    <!-- BENEFIT 4 -->

                    <div class="glass-panel p-7 rounded-2xl md:translate-y-8">

                        <div class="text-2xl mb-4 bg-green-500/20 w-12 h-12 flex items-center justify-center rounded-xl border border-green-500/30 shadow-lg shadow-green-500/10">
                            📈
                        </div>

                        <h3 class="font-bold text-lg mt-5 text-white">
                            Scalable
                        </h3>

                        <p class="text-gray-400 mt-2
                                  text-sm leading-6">

                            Grow your digital ecosystem as you grow.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ===============================
         CTA
    ================================ -->

    <section class="py-24 relative border-t border-white/5">
        
        <!-- Background glow -->
        <div class="absolute inset-0 flex justify-center items-center pointer-events-none">
            <div class="w-[500px] h-[500px] bg-sky-500/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">

            <p class="text-sky-400 uppercase
                      tracking-widest text-sm font-semibold">

                Find the Right Solution

            </p>


            <h2 class="text-4xl lg:text-6xl
                       font-bold mt-5 text-white">

                Let's build your
                digital factory.

            </h2>


            <p class="mt-6 text-gray-400
                      text-lg leading-8">

                Talk to our team and discover which Track Tech
                Solutions products fit your manufacturing needs.

            </p>


            <a href="/contact"
               class="inline-flex mt-9
                      bg-gradient-to-r from-sky-500 to-blue-600 text-white
                      px-8 py-4 rounded-full
                      font-semibold shadow-lg shadow-sky-500/30 hover:shadow-sky-500/50
                      hover:-translate-y-1 transition-all">

                Book a Demo →

            </a>

        </div>

    </section>

@endsection