@extends('layouts.app')

@section('title', 'Industries | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-32 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl relative z-10">

                <div class="inline-flex items-center gap-2
                            px-4 py-2 glass-panel border border-slate-300
                            rounded-full text-sm font-medium mb-7 text-slate-800">

                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>

                    Industries We Serve

                </div>


                <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight text-slate-800">
                    Digital solutions for
                    <span class="text-gradient">
                        manufacturing industries.
                    </span>
                </h1>


                <p class="mt-7 text-lg lg:text-xl text-slate-700 leading-8 max-w-3xl">

                    We help manufacturing businesses connect their
                    operations, improve productivity and gain real-time
                    visibility through digital technology.

                </p>

            </div>

        </div>

    </section>


    <!-- INDUSTRIES -->
    <section class="py-24 relative border-t border-slate-200 bg-black/20">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-3xl relative z-10">

                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Our Expertise
                </p>


                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    Technology designed around
                    real factory operations.
                </h2>


                <p class="mt-6 text-lg text-slate-600 leading-8">
                    Every industry has different workflows and challenges.
                    Our solutions can be configured to match your
                    operational requirements.
                </p>

            </div>


            <!-- INDUSTRY CARDS -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14 relative z-10">

                <!-- Apparel -->
                <div class="glass-card rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-slate-300">

                    <div class="h-60 bg-white/5 border-b border-slate-300 flex items-center justify-center">
                        <div class="text-7xl group-hover:scale-110 transition">
                            👕
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-400 font-semibold">
                            INDUSTRY 01
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Apparel Manufacturing
                        </h3>

                        <p class="mt-5 text-slate-600 leading-7">
                            Digitise fabric, cutting, production,
                            quality and dispatch processes for
                            apparel factories.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Explore Industry →
                        </div>
                    </div>
                </div>

                <!-- Textile -->
                <div class="glass-card rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-slate-300">

                    <div class="h-60 bg-white/5 border-b border-slate-300 flex items-center justify-center">
                        <div class="text-7xl group-hover:scale-110 transition">
                            🧵
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-400 font-semibold">
                            INDUSTRY 02
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Textile Manufacturing
                        </h3>

                        <p class="mt-5 text-slate-600 leading-7">
                            Improve visibility across materials,
                            production workflows and operational
                            performance.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Explore Industry →
                        </div>
                    </div>
                </div>


                <!-- Garment -->
                <div class="glass-card rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-slate-300">

                    <div class="h-60 bg-white/5 border-b border-slate-300 flex items-center justify-center">
                        <div class="text-7xl group-hover:scale-110 transition">
                            🏭
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-400 font-semibold">
                            INDUSTRY 03
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Garment Production
                        </h3>

                        <p class="mt-5 text-slate-600 leading-7">
                            Track orders, production lines, operators
                            and quality performance in real time.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Explore Industry →
                        </div>
                    </div>
                </div>


                <!-- Footwear -->
                <div class="glass-card rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-slate-300">

                    <div class="h-60 bg-white/5 border-b border-slate-300 flex items-center justify-center">
                        <div class="text-7xl group-hover:scale-110 transition">
                            👟
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-400 font-semibold">
                            INDUSTRY 04
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Footwear Manufacturing
                        </h3>

                        <p class="mt-5 text-slate-600 leading-7">
                            Connect production processes and monitor
                            manufacturing performance digitally.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Explore Industry →
                        </div>
                    </div>
                </div>


                <!-- Home Textiles -->
                <div class="glass-card rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-slate-300">

                    <div class="h-60 bg-white/5 border-b border-slate-300 flex items-center justify-center">
                        <div class="text-7xl group-hover:scale-110 transition">
                            🛏️
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-400 font-semibold">
                            INDUSTRY 05
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Home Textiles
                        </h3>

                        <p class="mt-5 text-slate-600 leading-7">
                            Digitise material tracking, production
                            monitoring and quality management.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Explore Industry →
                        </div>
                    </div>
                </div>


                <!-- Manufacturing -->
                <div class="glass-panel rounded-3xl overflow-hidden group hover:-translate-y-2 transition duration-300 border border-sky-500/30">

                    <div class="h-60 bg-gradient-to-br from-sky-500/20 to-blue-600/20 flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                        <div class="text-7xl group-hover:scale-110 transition relative z-10">
                            ⚙️
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-sm text-sky-300 font-semibold">
                            INDUSTRY 06
                        </p>

                        <h3 class="text-2xl font-bold mt-3 text-slate-800">
                            Smart Manufacturing
                        </h3>

                        <p class="mt-5 text-slate-700 leading-7">
                            Build connected factories using IoT,
                            real-time data and intelligent dashboards.
                        </p>

                        <div class="mt-7 font-semibold text-sm text-sky-400 group-hover:text-slate-800 transition">
                            Talk to Us →
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- CHALLENGES -->
    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>
                    <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                        Manufacturing Challenges
                    </p>

                    <h2 class="text-4xl lg:text-5xl font-bold mt-4 leading-tight text-slate-800">
                        We solve problems
                        that slow factories down.
                    </h2>

                    <p class="mt-6 text-lg text-slate-700 leading-8">
                        Manual processes, disconnected systems and
                        limited visibility can make manufacturing
                        operations difficult to manage.
                    </p>
                </div>


                <div class="space-y-4">

                    <div class="glass-panel border border-slate-300 rounded-2xl p-6 flex gap-5 group">
                        <div class="text-2xl w-12 h-12 flex justify-center items-center bg-white/5 rounded-xl border border-slate-300 group-hover:bg-sky-500/20 transition">
                            📄
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800">Paper-based Processes</h3>
                            <p class="text-slate-600 text-sm mt-2">Replace manual records with digital workflows.</p>
                        </div>
                    </div>

                    <div class="glass-panel border border-slate-300 rounded-2xl p-6 flex gap-5 group">
                        <div class="text-2xl w-12 h-12 flex justify-center items-center bg-white/5 rounded-xl border border-slate-300 group-hover:bg-sky-500/20 transition">
                            🔗
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800">Disconnected Operations</h3>
                            <p class="text-slate-600 text-sm mt-2">Connect information across departments.</p>
                        </div>
                    </div>

                    <div class="glass-panel border border-slate-300 rounded-2xl p-6 flex gap-5 group">
                        <div class="text-2xl w-12 h-12 flex justify-center items-center bg-white/5 rounded-xl border border-slate-300 group-hover:bg-sky-500/20 transition">
                            👁️
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800">Limited Visibility</h3>
                            <p class="text-slate-600 text-sm mt-2">Get real-time visibility into factory performance.</p>
                        </div>
                    </div>

                    <div class="glass-panel border border-slate-300 rounded-2xl p-6 flex gap-5 group">
                        <div class="text-2xl w-12 h-12 flex justify-center items-center bg-white/5 rounded-xl border border-slate-300 group-hover:bg-sky-500/20 transition">
                            📉
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800">Productivity Loss</h3>
                            <p class="text-slate-600 text-sm mt-2">Identify bottlenecks and improve efficiency.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- WORKFLOW -->
    <section class="py-24 relative border-t border-slate-200 bg-black/20">

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="text-center max-w-3xl mx-auto">
                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Connected Factory
                </p>

                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    One digital ecosystem
                    for your factory.
                </h2>
            </div>


            <div class="grid grid-cols-2 md:grid-cols-6 gap-4 mt-16">

                <div class="glass-card border border-slate-300 rounded-2xl p-6 text-center group hover:-translate-y-2 transition">
                    <div class="text-3xl group-hover:scale-110 transition">🧵</div>
                    <p class="font-semibold mt-3 text-slate-800">Fabric</p>
                </div>

                <div class="glass-card border border-slate-300 rounded-2xl p-6 text-center group hover:-translate-y-2 transition">
                    <div class="text-3xl group-hover:scale-110 transition">✂️</div>
                    <p class="font-semibold mt-3 text-slate-800">Cutting</p>
                </div>

                <div class="glass-card border border-slate-300 rounded-2xl p-6 text-center group hover:-translate-y-2 transition">
                    <div class="text-3xl group-hover:scale-110 transition">⚙️</div>
                    <p class="font-semibold mt-3 text-slate-800">Production</p>
                </div>

                <div class="glass-card border border-slate-300 rounded-2xl p-6 text-center group hover:-translate-y-2 transition">
                    <div class="text-3xl group-hover:scale-110 transition">✓</div>
                    <p class="font-semibold mt-3 text-slate-800">Quality</p>
                </div>

                <div class="glass-card border border-slate-300 rounded-2xl p-6 text-center group hover:-translate-y-2 transition">
                    <div class="text-3xl group-hover:scale-110 transition">📦</div>
                    <p class="font-semibold mt-3 text-slate-800">Packing</p>
                </div>

                <div class="bg-gradient-to-br from-sky-500 to-blue-600 text-slate-800 rounded-2xl p-6 text-center group hover:-translate-y-2 transition shadow-lg shadow-sky-500/20">
                    <div class="text-3xl group-hover:scale-110 transition">🚚</div>
                    <p class="font-semibold mt-3">Dispatch</p>
                </div>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="py-24 relative">

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none -z-10">
            <div class="w-[500px] h-[500px] bg-sky-500/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">

            <p class="text-sky-400 uppercase tracking-widest text-sm font-semibold">
                Transform Your Operations
            </p>

            <h2 class="text-4xl lg:text-6xl font-bold mt-5 text-slate-800">
                Ready to build a
                smarter factory?
            </h2>

            <p class="mt-6 text-slate-700 text-lg leading-8">
                Let's explore how digital technology can improve
                your manufacturing operations.
            </p>

            <a href="/contact"
               class="inline-flex mt-9 bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800
                      px-8 py-4 rounded-full font-semibold shadow-lg shadow-sky-500/30 hover:shadow-sky-500/50 hover:-translate-y-1 transition-all">
                Book a Demo →
            </a>

        </div>

    </section>

@endsection
