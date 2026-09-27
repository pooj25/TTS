@extends('layouts.app')

@section('title', 'About Us | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-32 pb-24 relative overflow-hidden min-h-[500px] flex items-center border-b border-slate-200">
        <!-- Background Apparel Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 z-1 bg-gradient-to-r from-white/65 via-white/55 to-sky-50/40 backdrop-blur-[1px]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left -->
                <div>
                    <div class="flex flex-wrap items-center gap-3 mb-6">
                        <div class="inline-flex items-center gap-2 px-4 py-2 glass-panel rounded-full text-sm font-bold text-slate-900 border border-slate-300 shadow-sm">
                            <span class="w-2.5 h-2.5 bg-emerald-500 rounded-full animate-pulse"></span>
                            About Track Tech Solutions
                        </div>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black leading-tight tracking-tight text-slate-900">
                        Technology that
                        <span class="text-gradient">transforms</span>
                        apparel manufacturing.
                    </h1>

                    <p class="mt-6 text-lg text-slate-700 leading-relaxed font-semibold max-w-xl">
                        Track Tech Solutions empowers garment manufacturers to digitize fabric cutting, sewing lines, inline QC, and inventory management with real-time IoT & AI precision.
                    </p>
                </div>

                <!-- Right Live Video Card -->
                <div class="relative group rounded-3xl overflow-hidden border border-slate-300 shadow-2xl bg-slate-900 aspect-video">
                    <video autoplay muted loop playsinline class="w-full h-full object-cover">
                        <source src="https://videos.pexels.com/video-files/3295499/3295499-hd_1920_1080_30fps.mp4" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-slate-950/40 p-6 flex flex-col justify-between">
                        <div class="flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-white/90 text-slate-900 shadow">🪡 Live Line Monitoring</span>
                            <span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-500 text-white shadow">250+ Lines Live</span>
                        </div>
                        <div class="text-white text-xs font-semibold">
                            Transforming Apparel Manufacturing Across South Asia
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- Interactive Next Page Continuous Journey Teaser -->
    <section class="py-16 bg-gradient-to-r from-slate-900 via-sky-950 to-indigo-950 text-white relative overflow-hidden border-t border-sky-400/20 shadow-2xl">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-30">
            <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-slate-950/65 backdrop-blur-[2px]"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold bg-sky-500/20 text-sky-300 border border-sky-400/30 mb-3">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    Next Chapter: Knowledge & Resources
                </span>
                <h3 class="text-2xl md:text-4xl font-black text-white">
                    Explore ROI Calculators & Apparel Whitepapers
                </h3>
                <p class="text-slate-300 text-sm md:text-base mt-2 max-w-xl font-medium">
                    Read industry reports, download whitepapers, and calculate how much fabric and time your factory can save.
                </p>
            </div>

            <a href="/resources" class="group inline-flex items-center gap-4 bg-gradient-to-r from-cyan-400 via-sky-500 to-emerald-400 text-slate-950 font-black text-lg px-8 py-4 rounded-full shadow-lg shadow-cyan-500/30 hover:shadow-cyan-400/60 hover:scale-105 transition-all duration-300 whitespace-nowrap">
                <span>View Resources</span>
                <span class="w-9 h-9 rounded-full bg-slate-950/20 flex items-center justify-center group-hover:translate-x-1.5 transition-transform">➔</span>
            </a>
        </div>
    </section>

@endsection