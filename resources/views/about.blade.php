@extends('layouts.app')

@section('title', 'About Us | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-32 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left -->
                <div>

                    <div class="inline-flex items-center gap-2 px-4 py-2 glass-panel rounded-full text-sm font-medium mb-7">
                        <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                        About Track Tech Solutions
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight tracking-tight text-slate-800">
                        Technology that
                        <span class="text-gradient">
                            transforms
                        </span>
                        manufacturing.
                    </h1>

                    <p class="mt-7 text-lg text-slate-700 leading-8 max-w-xl">
                        Track Tech Solutions helps apparel manufacturers
                        digitize their operations, improve visibility and
                        build smarter, more efficient factories.
                    </p>

                </div>

                <!-- Right -->
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-30 group-hover:opacity-50 transition duration-1000"></div>
                    <img
                        src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=80"
                        alt="Technology and manufacturing"
                        class="relative w-full h-[430px] object-cover rounded-3xl border border-slate-300"
                    >

                    <div class="absolute -bottom-7 -left-7 glass-card rounded-2xl shadow-xl p-6 border border-white/20">
                        <div class="text-3xl font-bold text-slate-800">
                            10+
                        </div>

                        <div class="text-sm text-sky-400 mt-1">
                            Years of Innovation
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT COMPANY -->
    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16">

                <div>
                    <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                        Who We Are
                    </p>

                    <h2 class="text-4xl lg:text-5xl font-bold mt-4 leading-tight text-slate-800">
                        Digitising the apparel
                        manufacturing ecosystem.
                    </h2>
                </div>

                <div class="text-slate-700 text-lg leading-8 space-y-6">

                    <p>
                        Track Tech Solutions is a technology-driven company
                        focused on solving real-world challenges in apparel
                        manufacturing.
                    </p>

                    <p>
                        We combine software, automation, IoT and real-time
                        data to help factories move away from traditional
                        paper-based processes.
                    </p>

                    <p>
                        From fabric inventory to production, quality and
                        dispatch, our solutions provide businesses with
                        better visibility and control over their operations.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- VISION / MISSION -->
    <section class="py-24 relative border-t border-b border-slate-300 bg-black/20">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid md:grid-cols-2 gap-8">

                <!-- Vision -->
                <div class="glass-panel border border-slate-300 rounded-3xl p-10 group hover:-translate-y-2 transition duration-300">

                    <div class="text-sm uppercase tracking-widest text-sky-400">
                        Our Vision
                    </div>

                    <h3 class="text-3xl font-bold mt-5 text-slate-800">
                        Build smarter factories
                        for a smarter future.
                    </h3>

                    <p class="mt-6 text-slate-600 leading-7">
                        We envision a manufacturing ecosystem where every
                        process is connected, measurable and continuously
                        improving through technology.
                    </p>

                </div>


                <!-- Mission -->
                <div class="glass-panel border border-slate-300 rounded-3xl p-10 group hover:-translate-y-2 transition duration-300">

                    <div class="text-sm uppercase tracking-widest text-sky-400">
                        Our Mission
                    </div>

                    <h3 class="text-3xl font-bold mt-5 text-slate-800">
                        Make digital transformation
                        simple and practical.
                    </h3>

                    <p class="mt-6 text-slate-600 leading-7">
                        Our mission is to provide practical digital solutions
                        that improve productivity, reduce waste and give
                        manufacturers real-time operational visibility.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- WHAT WE DO -->
    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-2xl">

                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    What We Do
                </p>

                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    From fabric to ship,
                    everything connected.
                </h2>

                <p class="mt-6 text-slate-600 text-lg leading-8">
                    Our technology solutions connect different stages of
                    apparel manufacturing into one intelligent ecosystem.
                </p>

            </div>


            <!-- Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mt-14">

                <div class="p-7 glass-card rounded-3xl group">

                    <div class="text-3xl mb-6 bg-white/5 w-14 h-14 flex justify-center items-center rounded-2xl border border-slate-300 group-hover:scale-110 transition">
                        📦
                    </div>

                    <h3 class="text-xl font-bold text-slate-800">
                        Inventory
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Track fabric and material inventory with better
                        accuracy and visibility.
                    </p>

                </div>


                <div class="p-7 glass-card rounded-3xl group md:translate-y-6">

                    <div class="text-3xl mb-6 bg-white/5 w-14 h-14 flex justify-center items-center rounded-2xl border border-slate-300 group-hover:scale-110 transition">
                        ✂️
                    </div>

                    <h3 class="text-xl font-bold text-slate-800">
                        Cutting
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Digitise cutting room operations and improve
                        material utilisation.
                    </p>

                </div>


                <div class="p-7 glass-card rounded-3xl group">

                    <div class="text-3xl mb-6 bg-white/5 w-14 h-14 flex justify-center items-center rounded-2xl border border-slate-300 group-hover:scale-110 transition">
                        ⚙️
                    </div>

                    <h3 class="text-xl font-bold text-slate-800">
                        Production
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Monitor production processes and get real-time
                        performance information.
                    </p>

                </div>


                <div class="p-7 glass-card rounded-3xl group md:translate-y-6">

                    <div class="text-3xl mb-6 bg-white/5 w-14 h-14 flex justify-center items-center rounded-2xl border border-slate-300 group-hover:scale-110 transition">
                        ✓
                    </div>

                    <h3 class="text-xl font-bold text-slate-800">
                        Quality
                    </h3>

                    <p class="mt-4 text-slate-600 leading-7">
                        Improve quality control with structured digital
                        inspection workflows.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- STATS -->
    <section class="py-20 relative bg-black/20 border-t border-b border-slate-200">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">

                <div>
                    <div class="text-4xl font-bold text-slate-800">
                        100+
                    </div>

                    <p class="mt-2 text-sky-400">
                        Digital Projects
                    </p>
                </div>


                <div>
                    <div class="text-4xl font-bold text-slate-800">
                        50+
                    </div>

                    <p class="mt-2 text-sky-400">
                        Factory Processes
                    </p>
                </div>


                <div>
                    <div class="text-4xl font-bold text-slate-800">
                        10+
                    </div>

                    <p class="mt-2 text-sky-400">
                        Years Experience
                    </p>
                </div>


                <div>
                    <div class="text-4xl font-bold text-slate-800">
                        24/7
                    </div>

                    <p class="mt-2 text-sky-400">
                        Operational Visibility
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="py-24 relative">

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            
            <div class="absolute inset-0 flex justify-center items-center pointer-events-none -z-10">
                <div class="w-96 h-96 bg-sky-500/10 rounded-full blur-[100px]"></div>
            </div>

            <h2 class="text-4xl lg:text-5xl font-bold text-slate-800">
                Ready to digitise
                your factory?
            </h2>

            <p class="mt-6 text-lg text-slate-600">
                Let's build a smarter and more connected manufacturing
                operation together.
            </p>

            <div class="mt-9">

                <a href="/contact"
                   class="inline-flex bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800 px-8 py-4 rounded-full font-semibold shadow-lg shadow-sky-500/30 hover:shadow-sky-500/50 transition hover:-translate-y-1">
                    Talk to Our Team →
                </a>

            </div>

        </div>

    </section>

@endsection