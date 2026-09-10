@extends('layouts.app')

@section('title', 'Solutions | Track Tech Solutions')

@section('content')

    <!-- ================= HERO ================= -->
    <section class="pt-32 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl relative z-10">

                <div class="inline-flex items-center gap-2
                            px-4 py-2 glass-panel
                            rounded-full text-sm font-medium mb-7 border border-slate-300">

                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>

                    Digital Manufacturing Solutions

                </div>

                <h1 class="text-5xl lg:text-7xl font-bold leading-tight tracking-tight text-slate-800">

                    Digitise your factory
                    <span class="text-gradient">
                        from fabric to ship.
                    </span>

                </h1>


                <p class="mt-7 text-lg lg:text-xl text-slate-700 leading-8 max-w-3xl">

                    Connect every stage of apparel manufacturing with
                    intelligent software, real-time tracking and
                    data-driven insights.

                </p>

            </div>

        </div>

    </section>



    <!-- ================= SOLUTIONS ================= -->
    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- SECTION HEADER -->
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 relative z-10">

                <div>

                    <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                        Our Solutions
                    </p>

                    <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                        Everything your factory needs.
                    </h2>

                </div>

                <p class="text-slate-700 max-w-md leading-7">

                    From inventory management to IoT-enabled production,
                    our solutions help create a connected digital factory.

                </p>

            </div>


            <!-- ================= DYNAMIC SOLUTION CARDS ================= -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14 relative z-10">

                @forelse($services as $index => $service)

                    <div class="glass-card
                                rounded-3xl p-8 group
                                hover:-translate-y-2
                                transition duration-300 border border-slate-300">

                        <!-- ICON -->
                        <div class="w-14 h-14 rounded-2xl
                                    bg-white/5 border border-slate-300
                                    flex items-center justify-center
                                    text-2xl group-hover:bg-sky-500/20 transition">

                            {{ $service->icon ?? '⚙️' }}

                        </div>


                        <!-- NUMBER -->
                        <p class="text-sm text-sky-400 font-semibold mt-8">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </p>


                        <!-- TITLE -->
                        <h3 class="text-2xl font-bold mt-2 text-slate-800">
                            {{ $service->title }}
                        </h3>


                        <!-- DESCRIPTION -->
                        <p class="mt-5 text-slate-600 leading-7">

                            {{ $service->short_description
                                ?? $service->description
                                ?? 'Digital solution for smarter manufacturing.' }}

                        </p>


                        <!-- ACTION -->
                        <div class="mt-7 text-sm font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Explore Solution →
                        </div>

                    </div>

                @empty

                    <!-- EMPTY STATE -->
                    <div class="col-span-full text-center py-16 glass-panel rounded-3xl border border-slate-300">

                        <div class="text-5xl mb-5 opacity-50">
                            ⚙️
                        </div>

                        <h3 class="text-xl font-bold text-slate-800">
                            No solutions available
                        </h3>

                        <p class="text-slate-600 mt-2">
                            Solutions will appear here once they are
                            added from the admin panel.
                        </p>

                    </div>

                @endforelse

            </div>

        </div>

    </section>



    <!-- ================= WORKFLOW ================= -->
    <section class="py-24 relative bg-black/20 border-t border-b border-slate-200">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto relative z-10">

                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Connected Workflow
                </p>

                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">
                    One connected manufacturing journey.
                </h2>

                <p class="mt-6 text-slate-600 text-lg leading-8">
                    Connect every process and get real-time visibility
                    across your entire factory.
                </p>

            </div>


            <!-- WORKFLOW ITEMS -->
            <div class="grid grid-cols-2 md:grid-cols-6 gap-4 mt-16 relative z-10">

                <div class="glass-panel rounded-2xl p-6 text-center group hover:-translate-y-2 transition border border-slate-300">
                    <div class="text-2xl group-hover:scale-110 transition">🧵</div>
                    <p class="font-semibold mt-3 text-slate-800">Fabric</p>
                </div>

                <div class="glass-panel rounded-2xl p-6 text-center group hover:-translate-y-2 transition border border-slate-300">
                    <div class="text-2xl group-hover:scale-110 transition">✂️</div>
                    <p class="font-semibold mt-3 text-slate-800">Cutting</p>
                </div>

                <div class="glass-panel rounded-2xl p-6 text-center group hover:-translate-y-2 transition border border-slate-300">
                    <div class="text-2xl group-hover:scale-110 transition">⚙️</div>
                    <p class="font-semibold mt-3 text-slate-800">Production</p>
                </div>

                <div class="glass-panel rounded-2xl p-6 text-center group hover:-translate-y-2 transition border border-slate-300">
                    <div class="text-2xl group-hover:scale-110 transition">✓</div>
                    <p class="font-semibold mt-3 text-slate-800">Quality</p>
                </div>

                <div class="glass-panel rounded-2xl p-6 text-center group hover:-translate-y-2 transition border border-slate-300">
                    <div class="text-2xl group-hover:scale-110 transition">📦</div>
                    <p class="font-semibold mt-3 text-slate-800">Packing</p>
                </div>

                <div class="bg-gradient-to-br from-sky-500 to-blue-600 text-slate-800 rounded-2xl p-6 text-center group hover:-translate-y-2 transition shadow-lg shadow-sky-500/20">
                    <div class="text-2xl group-hover:scale-110 transition">🚚</div>
                    <p class="font-semibold mt-3">Dispatch</p>
                </div>

            </div>

        </div>

    </section>



    <!-- ================= BENEFITS ================= -->
    <section class="py-24 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16 items-center relative z-10">

                <!-- LEFT -->
                <div>
                    <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                        Why Digitise?
                    </p>

                    <h2 class="text-4xl lg:text-5xl font-bold mt-4 leading-tight text-slate-800">
                        Turn factory data into
                        better decisions.
                    </h2>

                    <p class="mt-6 text-slate-700 text-lg leading-8">
                        Replace disconnected processes with a single
                        digital ecosystem that gives your teams the
                        information they need, when they need it.
                    </p>
                </div>


                <!-- RIGHT -->
                <div class="space-y-5">

                    <!-- BENEFIT 1 -->
                    <div class="flex gap-5 p-6 rounded-2xl glass-panel border border-slate-300 group">
                        <div class="w-10 h-10 rounded-full bg-white/5 border border-slate-300 flex items-center justify-center text-sky-400 group-hover:bg-sky-500/20 transition">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">Real-time Visibility</h3>
                            <p class="text-slate-600 mt-2">
                                Know what is happening across your factory
                                without waiting for manual reports.
                            </p>
                        </div>
                    </div>

                    <!-- BENEFIT 2 -->
                    <div class="flex gap-5 p-6 rounded-2xl glass-panel border border-slate-300 group">
                        <div class="w-10 h-10 rounded-full bg-white/5 border border-slate-300 flex items-center justify-center text-sky-400 group-hover:bg-sky-500/20 transition">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">Paperless Operations</h3>
                            <p class="text-slate-600 mt-2">
                                Reduce manual paperwork and simplify
                                information flow between departments.
                            </p>
                        </div>
                    </div>

                    <!-- BENEFIT 3 -->
                    <div class="flex gap-5 p-6 rounded-2xl glass-panel border border-slate-300 group">
                        <div class="w-10 h-10 rounded-full bg-white/5 border border-slate-300 flex items-center justify-center text-sky-400 group-hover:bg-sky-500/20 transition">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">Better Productivity</h3>
                            <p class="text-slate-600 mt-2">
                                Identify bottlenecks and improve operational
                                efficiency using meaningful data.
                            </p>
                        </div>
                    </div>

                    <!-- BENEFIT 4 -->
                    <div class="flex gap-5 p-6 rounded-2xl glass-panel border border-slate-300 group">
                        <div class="w-10 h-10 rounded-full bg-white/5 border border-slate-300 flex items-center justify-center text-sky-400 group-hover:bg-sky-500/20 transition">
                            ✓
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-slate-800">Scalable Technology</h3>
                            <p class="text-slate-600 mt-2">
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
    <section class="py-24 relative border-t border-slate-200">

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none -z-10">
            <div class="w-[500px] h-[500px] bg-sky-500/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">

            <p class="text-sky-400 uppercase tracking-widest text-sm font-semibold">
                Transform Your Operations
            </p>

            <h2 class="text-4xl lg:text-6xl font-bold mt-5 text-slate-800">
                Ready to build a
                smarter factory?
            </h2>

            <p class="mt-6 text-slate-600 text-lg leading-8">
                Let's explore how digital technology can improve
                your manufacturing operations.
            </p>

            <a href="/contact"
               class="inline-flex mt-9 bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800
                      px-8 py-4 rounded-full font-semibold shadow-lg shadow-sky-500/30
                      hover:shadow-sky-500/50 hover:-translate-y-1 transition-all">
                Book a Demo →
            </a>

        </div>

    </section>

@endsection