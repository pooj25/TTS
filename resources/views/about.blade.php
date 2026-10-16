@extends('layouts.app')

@section('title', 'About Us | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-32 pb-24 relative overflow-hidden min-h-[500px] flex items-center border-b border-slate-200">
        <!-- Background: 3D Apparel Image (replaces external video to avoid timeout) -->
        <div class="absolute inset-0 z-0 scale-105" style="background-image:url('{{ asset('images/apparel-3d-scene-3.png') }}'); background-size:cover; background-position:center; opacity:0.50;"></div>
        <div class="absolute inset-0 z-1 bg-gradient-to-r from-white/70 via-white/50 to-sky-50/30 backdrop-blur-[1px]"></div>

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

                <!-- Right Live Image Card -->
                <div class="relative group rounded-3xl overflow-hidden border border-slate-300 shadow-2xl bg-slate-900 aspect-video">
                    <div class="w-full h-full" style="background-image:url('{{ asset('images/apparel-3d-scene-4.png') }}'); background-size:cover; background-position:center;"></div>
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
                        Track Tech Solutions <span class="text-slate-400">/ EST. 2019</span>
                    </p>
                    <h2 class="text-4xl lg:text-5xl font-bold mt-4 leading-tight text-slate-800">
                        Digital clarity for the people who make apparel
                    </h2>
                    <a href="https://www.linkedin.com/company/track-tech-solution/about/" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 mt-8 text-sky-600 font-semibold hover:text-sky-700 transition">
                        Company profile on LinkedIn <span aria-hidden="true">↗</span>
                    </a>
                </div>
                <div class="text-slate-700 text-lg leading-8 space-y-6">
                    <p>
                        Track Tech Solutions builds practical digital tools for apparel manufacturing. The platform connects production, quality, planning, materials and factory-floor teams, helping people see what is happening and act while there is still time to improve the outcome.
                    </p>
                    <p>
                        Since 2019, the team has focused on bringing useful technology closer to everyday factory work, supporting implementation across more than <strong>74 factories in two countries.</strong>
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
                    <div class="text-4xl font-bold text-slate-800">2019</div>
                    <p class="mt-2 text-sky-400">Established</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-slate-800">74+</div>
                    <p class="mt-2 text-sky-400">Factories Supported</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-slate-800">02</div>
                    <p class="mt-2 text-sky-400">Countries</p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-slate-800">36</div>
                    <p class="mt-2 text-sky-400">Professionals</p>
                </div>
            </div>
        </div>
    </section>


    <!-- LEADERSHIP -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="max-w-2xl mb-14">
                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">Our leadership team</p>
                <h2 class="text-4xl lg:text-5xl font-bold mt-4 text-slate-800">Built around manufacturing, operations and technology</h2>
                <p class="mt-5 text-slate-600 text-lg leading-8">Three perspectives working together to make factory software practical, dependable and useful on the floor.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Gopinath -->
                <div class="glass-card p-8 rounded-3xl border border-slate-200">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-sky-500 to-blue-600 flex items-center justify-center text-white text-xl font-black mb-5">GM</div>
                    <p class="text-xs font-black uppercase tracking-widest text-sky-500 mb-2">Chief Executive Officer</p>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Gopinath M. (Muniraj)</h3>
                    <p class="text-slate-600 leading-7 text-sm">Gopinath's career spans apparel manufacturing and digital solutions, including regional sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track Tech, he leads the company's direction and its focus on bringing technology into everyday factory operations.</p>
                    <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener" class="inline-flex items-center gap-1 mt-5 text-sm text-sky-600 font-semibold hover:text-sky-700 transition">Professional profile ↗</a>
                </div>

                <!-- Lebinesh -->
                <div class="glass-card p-8 rounded-3xl border border-slate-200">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500 to-purple-600 flex items-center justify-center text-white text-xl font-black mb-5">LB</div>
                    <p class="text-xs font-black uppercase tracking-widest text-sky-500 mb-2">Chief Operating Officer</p>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Lebinesh Balan</h3>
                    <p class="text-slate-600 leading-7 text-sm">Lebinesh focuses on turning strategy into consistent delivery: aligning customer implementation, teams and day-to-day operations. His work as COO supports smooth adoption of Track Tech across factory environments and keeps customer needs connected to execution.</p>
                    <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener" class="inline-flex items-center gap-1 mt-5 text-sm text-sky-600 font-semibold hover:text-sky-700 transition">LinkedIn profile ↗</a>
                </div>

                <!-- Deepak -->
                <div class="glass-card p-8 rounded-3xl border border-slate-200">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white text-xl font-black mb-5">DR</div>
                    <p class="text-xs font-black uppercase tracking-widest text-sky-500 mb-2">Chief Technology Officer</p>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Deepak Rajkumar</h3>
                    <p class="text-slate-600 leading-7 text-sm">Deepak guides the technology behind the platform, with a focus on reliable product engineering, useful integrations and clear information for factory teams. As CTO, he helps turn complex manufacturing workflows into software people can use with confidence.</p>
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
            <h2 class="text-4xl lg:text-5xl font-bold text-slate-800">Want a clearer view of your factory?</h2>
            <p class="mt-6 text-lg text-slate-600">Tell us how your lines work today. We will show you where Track Tech can remove the manual follow-up and make the next step easier.</p>
            <div class="mt-9 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="mailto:sales@tracktechsolutions.com"
                   class="inline-flex bg-gradient-to-r from-sky-500 to-blue-600 text-white px-8 py-4 rounded-full font-semibold shadow-lg shadow-sky-500/30 hover:shadow-sky-500/50 transition hover:-translate-y-1">
                    Talk to sales
                </a>
                <a href="tel:+919650613666"
                   class="inline-flex border-2 border-slate-300 text-slate-800 px-8 py-4 rounded-full font-semibold hover:bg-slate-50 transition hover:-translate-y-1">
                    Call +91 96506 13666
                </a>
            </div>
        </div>
    </section>

    <!-- Interactive Next Page Continuous Journey Teaser -->
    <section class="py-16 bg-gradient-to-r from-slate-900 via-sky-950 to-indigo-950 text-white relative overflow-hidden border-t border-sky-400/20 shadow-2xl">
        <div class="absolute inset-0 opacity-20" style="background-image:url('{{ asset('images/apparel-3d-scene-5.png') }}'); background-size:cover; background-position:center;"></div>
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