<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Solutions | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>


<body class="bg-white text-gray-900">


    <!-- ================= NAVBAR ================= -->

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

                    <a href="/" class="hover:text-gray-500 transition">
                        Home
                    </a>

                    <a href="/about" class="hover:text-gray-500 transition">
                        About
                    </a>

                    <a href="/solutions" class="text-black">
                        Solutions
                    </a>

                    <a href="/#products"
                       class="hover:text-gray-500 transition">
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



    <!-- ================= HERO ================= -->

    <section class="pt-32 pb-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl">


                <div class="inline-flex items-center gap-2
                            px-4 py-2 bg-white
                            border border-gray-200
                            rounded-full text-sm
                            font-medium mb-7">

                    <span class="w-2 h-2 bg-green-500 rounded-full"></span>

                    Digital Manufacturing Solutions

                </div>


                <h1 class="text-5xl lg:text-7xl
                           font-bold leading-tight
                           tracking-tight">

                    Digitise your factory

                    <span class="text-gray-400">
                        from fabric to ship.
                    </span>

                </h1>


                <p class="mt-7 text-lg lg:text-xl
                          text-gray-600 leading-8 max-w-3xl">

                    Connect every stage of apparel manufacturing with
                    intelligent software, real-time tracking and
                    data-driven insights.

                </p>

            </div>

        </div>

    </section>



    <!-- ================= SOLUTIONS ================= -->

    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <!-- SECTION HEADER -->

            <div class="flex flex-col md:flex-row
                        md:items-end md:justify-between
                        gap-6">

                <div>

                    <p class="text-sm font-semibold
                              uppercase tracking-widest
                              text-gray-500">

                        Our Solutions

                    </p>


                    <h2 class="text-4xl lg:text-5xl
                               font-bold mt-4">

                        Everything your factory needs.

                    </h2>

                </div>


                <p class="text-gray-600 max-w-md leading-7">

                    From inventory management to IoT-enabled production,
                    our solutions help create a connected digital factory.

                </p>

            </div>



            <!-- ================= DYNAMIC SOLUTION CARDS ================= -->

            <div class="grid md:grid-cols-2 lg:grid-cols-3
                        gap-6 mt-14">


                @forelse($services as $index => $service)


                    <div class="group
                                border border-gray-200
                                rounded-3xl p-8
                                hover:shadow-xl
                                hover:-translate-y-1
                                transition duration-300">


                        <!-- ICON -->

                        <div class="w-14 h-14 rounded-2xl
                                    bg-gray-100
                                    flex items-center
                                    justify-center
                                    text-2xl">

                            {{ $service->icon ?? '⚙️' }}

                        </div>


                        <!-- NUMBER -->

                        <p class="text-sm text-gray-400
                                  font-semibold mt-8">

                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                        </p>


                        <!-- TITLE -->

                        <h3 class="text-2xl font-bold mt-2">

                            {{ $service->title }}

                        </h3>


                        <!-- DESCRIPTION -->

                        <p class="mt-5 text-gray-600 leading-7">

                            {{ $service->short_description
                                ?? $service->description
                                ?? 'Digital solution for smarter manufacturing.' }}

                        </p>


                        <!-- ACTION -->

                        <div class="mt-7 text-sm font-semibold">

                            Explore Solution →

                        </div>


                    </div>


                @empty


                    <!-- EMPTY STATE -->

                    <div class="col-span-full
                                text-center py-16">


                        <div class="text-5xl mb-5">
                            ⚙️
                        </div>


                        <h3 class="text-xl font-bold text-gray-900">

                            No solutions available

                        </h3>


                        <p class="text-gray-500 mt-2">

                            Solutions will appear here once they are
                            added from the admin panel.

                        </p>


                    </div>


                @endforelse


            </div>

        </div>

    </section>



    <!-- ================= WORKFLOW ================= -->

    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <div class="text-center max-w-3xl mx-auto">


                <p class="text-sm font-semibold
                          uppercase tracking-widest
                          text-gray-500">

                    Connected Workflow

                </p>


                <h2 class="text-4xl lg:text-5xl
                           font-bold mt-4">

                    One connected manufacturing journey.

                </h2>


                <p class="mt-6 text-gray-600
                          text-lg leading-8">

                    Connect every process and get real-time visibility
                    across your entire factory.

                </p>

            </div>



            <!-- WORKFLOW ITEMS -->

            <div class="grid grid-cols-2
                        md:grid-cols-6
                        gap-4 mt-16">


                <div class="bg-white rounded-2xl
                            p-6 text-center
                            border border-gray-200">

                    <div class="text-2xl">
                        🧵
                    </div>

                    <p class="font-semibold mt-3">
                        Fabric
                    </p>

                </div>



                <div class="bg-white rounded-2xl
                            p-6 text-center
                            border border-gray-200">

                    <div class="text-2xl">
                        ✂️
                    </div>

                    <p class="font-semibold mt-3">
                        Cutting
                    </p>

                </div>



                <div class="bg-white rounded-2xl
                            p-6 text-center
                            border border-gray-200">

                    <div class="text-2xl">
                        ⚙️
                    </div>

                    <p class="font-semibold mt-3">
                        Production
                    </p>

                </div>



                <div class="bg-white rounded-2xl
                            p-6 text-center
                            border border-gray-200">

                    <div class="text-2xl">
                        ✓
                    </div>

                    <p class="font-semibold mt-3">
                        Quality
                    </p>

                </div>



                <div class="bg-white rounded-2xl
                            p-6 text-center
                            border border-gray-200">

                    <div class="text-2xl">
                        📦
                    </div>

                    <p class="font-semibold mt-3">
                        Packing
                    </p>

                </div>



                <div class="bg-black text-white
                            rounded-2xl p-6 text-center">

                    <div class="text-2xl">
                        🚚
                    </div>

                    <p class="font-semibold mt-3">
                        Dispatch
                    </p>

                </div>


            </div>

        </div>

    </section>



    <!-- ================= BENEFITS ================= -->

    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">


            <div class="grid lg:grid-cols-2
                        gap-16 items-center">


                <!-- LEFT -->

                <div>

                    <p class="text-sm font-semibold
                              uppercase tracking-widest
                              text-gray-500">

                        Why Digitise?

                    </p>


                    <h2 class="text-4xl lg:text-5xl
                               font-bold mt-4 leading-tight">

                        Turn factory data into
                        better decisions.

                    </h2>


                    <p class="mt-6 text-gray-600
                              text-lg leading-8">

                        Replace disconnected processes with a single
                        digital ecosystem that gives your teams the
                        information they need, when they need it.

                    </p>

                </div>



                <!-- RIGHT -->

                <div class="space-y-5">


                    <!-- BENEFIT 1 -->

                    <div class="flex gap-5 p-6
                                rounded-2xl
                                border border-gray-200">

                        <div class="w-10 h-10 rounded-full
                                    bg-gray-100
                                    flex items-center
                                    justify-center">

                            ✓

                        </div>


                        <div>

                            <h3 class="font-bold text-lg">
                                Real-time Visibility
                            </h3>

                            <p class="text-gray-600 mt-2">

                                Know what is happening across your factory
                                without waiting for manual reports.

                            </p>

                        </div>

                    </div>



                    <!-- BENEFIT 2 -->

                    <div class="flex gap-5 p-6
                                rounded-2xl
                                border border-gray-200">

                        <div class="w-10 h-10 rounded-full
                                    bg-gray-100
                                    flex items-center
                                    justify-center">

                            ✓

                        </div>


                        <div>

                            <h3 class="font-bold text-lg">
                                Paperless Operations
                            </h3>

                            <p class="text-gray-600 mt-2">

                                Reduce manual paperwork and simplify
                                information flow between departments.

                            </p>

                        </div>

                    </div>



                    <!-- BENEFIT 3 -->

                    <div class="flex gap-5 p-6
                                rounded-2xl
                                border border-gray-200">

                        <div class="w-10 h-10 rounded-full
                                    bg-gray-100
                                    flex items-center
                                    justify-center">

                            ✓

                        </div>


                        <div>

                            <h3 class="font-bold text-lg">
                                Better Productivity
                            </h3>

                            <p class="text-gray-600 mt-2">

                                Identify bottlenecks and improve operational
                                efficiency using meaningful data.

                            </p>

                        </div>

                    </div>



                    <!-- BENEFIT 4 -->

                    <div class="flex gap-5 p-6
                                rounded-2xl
                                border border-gray-200">

                        <div class="w-10 h-10 rounded-full
                                    bg-gray-100
                                    flex items-center
                                    justify-center">

                            ✓

                        </div>


                        <div>

                            <h3 class="font-bold text-lg">
                                Scalable Technology
                            </h3>

                            <p class="text-gray-600 mt-2">

                                Build a digital foundation that can grow
                                along with your manufacturing operations.

                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>



    <!-- ================= CTA ================= -->

    <section class="py-24 bg-black text-white">

        <div class="max-w-4xl mx-auto px-6 text-center">


            <p class="text-gray-400
                      uppercase tracking-widest
                      text-sm font-semibold">

                Start Your Digital Transformation

            </p>


            <h2 class="text-4xl lg:text-6xl
                       font-bold mt-5">

                Ready to digitise
                your factory?

            </h2>


            <p class="mt-6 text-gray-400
                      text-lg leading-8">

                Let's discuss how Track Tech Solutions can help
                transform your manufacturing operations.

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



    <!-- ================= FOOTER ================= -->

    <footer class="bg-black text-white
                   border-t border-white/10
                   py-14">

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