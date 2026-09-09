<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- ===============================
         NAVBAR
    ================================ -->

    <nav class="fixed top-0 left-0 right-0 z-50
                bg-white/95 backdrop-blur
                border-b border-gray-100">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="h-20 flex items-center justify-between">

                <!-- LOGO -->

                <a href="/" class="flex items-center gap-3">

                    <div class="w-11 h-11 rounded-xl bg-black text-white
                                flex items-center justify-center
                                font-bold text-xl">
                        T
                    </div>

                    <div>

                        <div class="font-bold text-lg leading-none">
                            TRACK TECH
                        </div>

                        <div class="text-xs text-gray-500 tracking-widest">
                            SOLUTIONS
                        </div>

                    </div>

                </a>


                <!-- MENU -->

                <div class="hidden md:flex items-center gap-8
                            text-sm font-medium">

                    <a href="/"
                       class="hover:text-gray-500 transition">
                        Home
                    </a>

                    <a href="/about"
                       class="hover:text-gray-500 transition">
                        About
                    </a>

                    <a href="/solutions"
                       class="hover:text-gray-500 transition">
                        Solutions
                    </a>

                    <a href="/products"
                       class="text-black">
                        Products
                    </a>

                    <a href="/#industries"
                       class="hover:text-gray-500 transition">
                        Industries
                    </a>

                    <a href="/#resources"
                       class="hover:text-gray-500 transition">
                        Resources
                    </a>

                </div>


                <!-- CTA -->

                <a href="/#contact"
                   class="hidden md:inline-flex
                          bg-black text-white
                          px-6 py-3 rounded-full
                          text-sm font-semibold
                          hover:bg-gray-800 transition">

                    Book a Demo

                </a>

            </div>

        </div>

    </nav>


    <!-- ===============================
         HERO
    ================================ -->

    <section class="pt-32 pb-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl">

                <div class="inline-flex items-center gap-2
                            px-4 py-2
                            bg-white border border-gray-200
                            rounded-full text-sm font-medium mb-7">

                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                    Our Products

                </div>


                <h1 class="text-5xl lg:text-7xl
                           font-bold leading-tight tracking-tight">

                    Digital products built for

                    <span class="text-gray-400">
                        modern factories.
                    </span>

                </h1>


                <p class="mt-7 text-lg lg:text-xl
                          text-gray-600 leading-8 max-w-3xl">

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

    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <!-- SECTION HEADING -->

            <div class="text-center max-w-3xl mx-auto">

                <p class="text-sm font-semibold uppercase
                          tracking-widest text-gray-500">

                    Product Ecosystem

                </p>


                <h2 class="text-4xl lg:text-5xl
                           font-bold mt-4">

                    One platform.
                    Multiple possibilities.

                </h2>


                <p class="mt-6 text-gray-600 text-lg leading-8">

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

                        <div class="group border border-gray-200
                                    rounded-3xl overflow-hidden
                                    bg-black text-white
                                    hover:-translate-y-1
                                    transition duration-300">


                            <!-- PRODUCT ICON -->

                            <div class="h-64 bg-white/10
                                        flex items-center justify-center">

                                <div class="w-28 h-28 rounded-3xl
                                            bg-white text-black
                                            flex items-center justify-center
                                            text-5xl">

                                    {{ $product->icon ?? '📊' }}

                                </div>

                            </div>


                            <!-- PRODUCT CONTENT -->

                            <div class="p-8">

                                <p class="text-sm text-gray-500
                                          font-semibold">

                                    PRODUCT
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </p>


                                <h3 class="text-3xl font-bold mt-3">

                                    {{ $product->name }}

                                </h3>


                                <p class="mt-5 text-gray-400 leading-7">

                                    {{ $product->short_description
                                        ?? $product->description
                                        ?? 'Digital product for smarter manufacturing.' }}

                                </p>


                                <!-- CATEGORY -->

                                @if($product->category)

                                    <div class="mt-7 flex flex-wrap gap-2">

                                        <span class="px-3 py-2
                                                     bg-white/10
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
                                          font-semibold
                                          hover:underline">

                                    View Product →

                                </a>

                            </div>

                        </div>


                    @else

                        <!-- ===============================
                             NORMAL PRODUCT CARD
                        ================================ -->

                        <div class="group border border-gray-200
                                    rounded-3xl overflow-hidden
                                    hover:shadow-xl
                                    transition duration-300">


                            <!-- PRODUCT ICON -->

                            <div class="h-64 bg-gray-100
                                        flex items-center justify-center">

                                <div class="w-28 h-28 rounded-3xl
                                            bg-black text-white
                                            flex items-center justify-center
                                            text-5xl">

                                    {{ $product->icon ?? '📦' }}

                                </div>

                            </div>


                            <!-- PRODUCT CONTENT -->

                            <div class="p-8">

                                <p class="text-sm text-gray-400
                                          font-semibold">

                                    PRODUCT
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </p>


                                <h3 class="text-3xl font-bold mt-3">

                                    {{ $product->name }}

                                </h3>


                                <p class="mt-5 text-gray-600 leading-7">

                                    {{ $product->short_description
                                        ?? $product->description
                                        ?? 'Digital product for smarter manufacturing.' }}

                                </p>


                                <!-- CATEGORY -->

                                @if($product->category)

                                    <div class="mt-7 flex flex-wrap gap-2">

                                        <span class="px-3 py-2
                                                     bg-gray-100
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
                                          font-semibold
                                          hover:underline">

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
                                border border-gray-200
                                rounded-3xl
                                p-12
                                text-center">

                        <div class="text-5xl mb-5">
                            📦
                        </div>


                        <h3 class="text-2xl font-bold">

                            No products available

                        </h3>


                        <p class="mt-3 text-gray-500">

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

    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center">


                <!-- LEFT CONTENT -->

                <div>

                    <p class="text-sm font-semibold uppercase
                              tracking-widest text-gray-500">

                        Built for Manufacturing

                    </p>


                    <h2 class="text-4xl lg:text-5xl
                               font-bold mt-4 leading-tight">

                        Technology that works
                        on the factory floor.

                    </h2>


                    <p class="mt-6 text-gray-600 text-lg leading-8">

                        Our products are designed around real
                        manufacturing workflows, making digital
                        transformation practical and easy to adopt.

                    </p>

                </div>


                <!-- BENEFITS -->

                <div class="grid sm:grid-cols-2 gap-5">


                    <!-- BENEFIT 1 -->

                    <div class="bg-white p-7 rounded-2xl
                                border border-gray-200">

                        <div class="text-2xl">
                            ⚡
                        </div>

                        <h3 class="font-bold text-lg mt-5">
                            Real-time
                        </h3>

                        <p class="text-gray-600 mt-2
                                  text-sm leading-6">

                            Access operational information instantly.

                        </p>

                    </div>


                    <!-- BENEFIT 2 -->

                    <div class="bg-white p-7 rounded-2xl
                                border border-gray-200">

                        <div class="text-2xl">
                            📱
                        </div>

                        <h3 class="font-bold text-lg mt-5">
                            Mobile Ready
                        </h3>

                        <p class="text-gray-600 mt-2
                                  text-sm leading-6">

                            Access factory information from anywhere.

                        </p>

                    </div>


                    <!-- BENEFIT 3 -->

                    <div class="bg-white p-7 rounded-2xl
                                border border-gray-200">

                        <div class="text-2xl">
                            🔒
                        </div>

                        <h3 class="font-bold text-lg mt-5">
                            Secure
                        </h3>

                        <p class="text-gray-600 mt-2
                                  text-sm leading-6">

                            Keep your business data protected.

                        </p>

                    </div>


                    <!-- BENEFIT 4 -->

                    <div class="bg-white p-7 rounded-2xl
                                border border-gray-200">

                        <div class="text-2xl">
                            📈
                        </div>

                        <h3 class="font-bold text-lg mt-5">
                            Scalable
                        </h3>

                        <p class="text-gray-600 mt-2
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

    <section class="py-24 bg-black text-white">

        <div class="max-w-4xl mx-auto px-6 text-center">

            <p class="text-gray-400 uppercase
                      tracking-widest text-sm font-semibold">

                Find the Right Solution

            </p>


            <h2 class="text-4xl lg:text-6xl
                       font-bold mt-5">

                Let's build your
                digital factory.

            </h2>


            <p class="mt-6 text-gray-400
                      text-lg leading-8">

                Talk to our team and discover which Track Tech
                Solutions products fit your manufacturing needs.

            </p>


            <a href="/#contact"
               class="inline-flex mt-9
                      bg-white text-black
                      px-8 py-4 rounded-full
                      font-semibold
                      hover:bg-gray-200 transition">

                Book a Demo →

            </a>

        </div>

    </section>


    <!-- ===============================
         FOOTER
    ================================ -->

    <footer class="bg-black text-white
                   border-t border-white/10 py-14">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid md:grid-cols-3 gap-12">


                <!-- COMPANY -->

                <div>

                    <div class="text-xl font-bold">
                        TRACK TECH
                    </div>

                    <div class="text-xs text-gray-500
                                tracking-widest mt-1">

                        SOLUTIONS

                    </div>


                    <p class="text-gray-400 mt-5 leading-7">

                        Digital solutions for smarter apparel manufacturing.

                    </p>

                </div>


                <!-- COMPANY LINKS -->

                <div>

                    <h4 class="font-semibold">
                        Company
                    </h4>


                    <div class="mt-5 space-y-3 text-gray-400">

                        <a href="/"
                           class="block hover:text-white">

                            Home

                        </a>


                        <a href="/about"
                           class="block hover:text-white">

                            About

                        </a>


                        <a href="/solutions"
                           class="block hover:text-white">

                            Solutions

                        </a>


                        <a href="/products"
                           class="block hover:text-white">

                            Products

                        </a>

                    </div>

                </div>


                <!-- CONTACT -->

                <div>

                    <h4 class="font-semibold">
                        Contact
                    </h4>


                    <p class="mt-5 text-gray-400">

                        Track Tech Solutions

                    </p>


                    <p class="mt-2 text-gray-400">

                        Coimbatore, Tamil Nadu

                    </p>

                </div>

            </div>


            <!-- COPYRIGHT -->

            <div class="border-t border-white/10
                        mt-12 pt-7
                        text-sm text-gray-500">

                © {{ date('Y') }} Track Tech Solutions.
                All rights reserved.

            </div>

        </div>

    </footer>


</body>
</html>