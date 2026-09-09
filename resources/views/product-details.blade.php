<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} | Track Tech Solutions</title>

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

                    <div class="w-11 h-11 rounded-xl
                                bg-black text-white
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
         PRODUCT HERO
    ================================ -->

    <section class="pt-32 pb-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2
                        gap-16 items-center">


                <!-- LEFT -->

                <div>


                    <!-- BACK -->

                    <a href="/products"
                       class="inline-flex items-center
                              text-sm font-medium
                              text-gray-500
                              hover:text-black
                              transition mb-8">

                        ← Back to Products

                    </a>


                    <!-- CATEGORY -->

                    @if($product->category)

                        <div class="mb-6">

                            <span class="inline-flex
                                         px-4 py-2
                                         bg-white
                                         border border-gray-200
                                         rounded-full
                                         text-sm font-medium">

                                {{ $product->category }}

                            </span>

                        </div>

                    @endif


                    <!-- TITLE -->

                    <h1 class="text-5xl lg:text-7xl
                               font-bold leading-tight
                               tracking-tight">

                        {{ $product->name }}

                    </h1>


                    <!-- SHORT DESCRIPTION -->

                    @if($product->short_description)

                        <p class="mt-7
                                  text-lg lg:text-xl
                                  text-gray-600
                                  leading-8">

                            {{ $product->short_description }}

                        </p>

                    @endif


                    <!-- CTA -->

                    <div class="mt-9 flex flex-wrap gap-4">

                        <a href="/#contact"
                           class="inline-flex
                                  bg-black text-white
                                  px-7 py-4
                                  rounded-full
                                  font-semibold
                                  hover:bg-gray-800
                                  transition">

                            Book a Demo →

                        </a>


                        <a href="/products"
                           class="inline-flex
                                  bg-white
                                  border border-gray-200
                                  px-7 py-4
                                  rounded-full
                                  font-semibold
                                  hover:bg-gray-100
                                  transition">

                            View All Products

                        </a>

                    </div>

                </div>



                <!-- RIGHT PRODUCT ICON -->

                <div>

                    <div class="h-96
                                bg-white
                                border border-gray-200
                                rounded-3xl
                                flex items-center justify-center
                                shadow-sm">

                        <div class="w-40 h-40
                                    rounded-[2rem]
                                    bg-black text-white
                                    flex items-center justify-center
                                    text-7xl">

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

    <section class="py-24">

        <div class="max-w-5xl mx-auto px-6 lg:px-8">


            <div class="max-w-3xl">


                <p class="text-sm font-semibold
                          uppercase tracking-widest
                          text-gray-500">

                    Product Overview

                </p>


                <h2 class="text-4xl lg:text-5xl
                           font-bold mt-4">

                    Built for smarter
                    manufacturing.

                </h2>


                @if($product->description)

                    <div class="mt-8
                                text-lg text-gray-600
                                leading-8 whitespace-pre-line">

                        {{ $product->description }}

                    </div>

                @else

                    <p class="mt-8
                              text-lg text-gray-600
                              leading-8">

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

    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <div class="text-center
                        max-w-3xl mx-auto">

                <p class="text-sm font-semibold
                          uppercase tracking-widest
                          text-gray-500">

                    Why Choose This Product

                </p>


                <h2 class="text-4xl lg:text-5xl
                           font-bold mt-4">

                    Designed for the
                    factory floor.

                </h2>


                <p class="mt-6
                          text-gray-600
                          text-lg
                          leading-8">

                    Track Tech Solutions products are designed
                    around real manufacturing workflows.

                </p>

            </div>



            <div class="grid md:grid-cols-3
                        gap-6 mt-16">


                <!-- FEATURE 1 -->

                <div class="bg-white
                            border border-gray-200
                            rounded-3xl
                            p-8">

                    <div class="text-3xl">
                        ⚡
                    </div>


                    <h3 class="text-xl
                               font-bold mt-6">

                        Real-time Visibility

                    </h3>


                    <p class="mt-4
                              text-gray-600
                              leading-7">

                        Access important operational information
                        quickly and make better decisions.

                    </p>

                </div>



                <!-- FEATURE 2 -->

                <div class="bg-white
                            border border-gray-200
                            rounded-3xl
                            p-8">

                    <div class="text-3xl">
                        📊
                    </div>


                    <h3 class="text-xl
                               font-bold mt-6">

                        Better Insights

                    </h3>


                    <p class="mt-4
                              text-gray-600
                              leading-7">

                        Turn factory data into useful information
                        for monitoring and analysis.

                    </p>

                </div>



                <!-- FEATURE 3 -->

                <div class="bg-white
                            border border-gray-200
                            rounded-3xl
                            p-8">

                    <div class="text-3xl">
                        🚀
                    </div>


                    <h3 class="text-xl
                               font-bold mt-6">

                        Improved Productivity

                    </h3>


                    <p class="mt-4
                              text-gray-600
                              leading-7">

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

    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <div class="bg-black
                        text-white
                        rounded-[2rem]
                        p-10 lg:p-16">


                <div class="grid lg:grid-cols-2
                            gap-12 items-center">


                    <div>

                        <p class="text-gray-400
                                  uppercase
                                  tracking-widest
                                  text-sm
                                  font-semibold">

                            Track Tech Solutions

                        </p>


                        <h2 class="text-4xl lg:text-5xl
                                   font-bold mt-5
                                   leading-tight">

                            Transform your factory
                            with digital technology.

                        </h2>

                    </div>


                    <div>

                        <p class="text-gray-400
                                  text-lg
                                  leading-8">

                            Discover how
                            {{ $product->name }}
                            can help your organisation
                            improve visibility, productivity
                            and manufacturing performance.

                        </p>


                        <a href="/#contact"
                           class="inline-flex
                                  mt-8
                                  bg-white
                                  text-black
                                  px-7 py-4
                                  rounded-full
                                  font-semibold
                                  hover:bg-gray-200
                                  transition">

                            Talk to Our Team →

                        </a>

                    </div>


                </div>

            </div>

        </div>

    </section>



    <!-- ===============================
         FOOTER
    ================================ -->

    <footer class="bg-black
                   text-white
                   border-t border-white/10
                   py-14">


        <div class="max-w-7xl
                    mx-auto
                    px-6 lg:px-8">


            <div class="grid md:grid-cols-3
                        gap-12">


                <!-- COMPANY -->

                <div>

                    <div class="text-xl font-bold">
                        TRACK TECH
                    </div>


                    <div class="text-xs
                                text-gray-500
                                tracking-widest mt-1">

                        SOLUTIONS

                    </div>


                    <p class="text-gray-400
                              mt-5
                              leading-7">

                        Digital solutions for smarter
                        apparel manufacturing.

                    </p>

                </div>



                <!-- LINKS -->

                <div>

                    <h4 class="font-semibold">
                        Company
                    </h4>


                    <div class="mt-5
                                space-y-3
                                text-gray-400">


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


                    <p class="mt-5
                              text-gray-400">

                        Track Tech Solutions

                    </p>


                    <p class="mt-2
                              text-gray-400">

                        Coimbatore, Tamil Nadu

                    </p>

                </div>


            </div>



            <!-- COPYRIGHT -->

            <div class="border-t
                        border-white/10
                        mt-12 pt-7
                        text-sm
                        text-gray-500">

                © {{ date('Y') }} Track Tech Solutions.
                All rights reserved.

            </div>


        </div>

    </footer>


</body>
</html>