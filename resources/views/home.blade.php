@extends('layouts.app')

@section('title', 'Track Tech Solutions - Reduce Defects. Boost OEE. Increase Efficiency.')

@section('content')

{{-- ========================================================
     SECTION 1: HERO — Video Background + Business Headline
     ======================================================== --}}
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">

    {{-- Video Background --}}
    <video
        autoplay muted loop playsinline
        class="absolute inset-0 w-full h-full object-cover z-0"
        poster="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1920&q=60">
        <source src="https://www.pexels.com/download/video/3205981/" type="video/mp4">
    </video>

    {{-- Gradient Overlay --}}
    <div class="absolute inset-0 z-10" style="background: linear-gradient(135deg, rgba(10,15,40,0.88) 0%, rgba(0,50,80,0.75) 60%, rgba(10,15,40,0.88) 100%);"></div>

    {{-- Animated grid lines --}}
    <div class="absolute inset-0 z-10 hero-grid-lines"></div>

    {{-- Content --}}
    <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 text-center pt-24 pb-16">

        {{-- Badge --}}
        <div class="hero-badge inline-flex items-center gap-2 px-5 py-2 rounded-full border border-sky-400/40 bg-sky-500/10 backdrop-blur-sm mb-8">
            <span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span>
            <span class="text-sky-300 text-sm font-semibold tracking-widest uppercase">Industry 4.0 — Apparel & Textile Manufacturing</span>
        </div>

        {{-- Headline --}}
        <h1 class="hero-headline text-5xl sm:text-6xl lg:text-7xl xl:text-8xl font-black text-white leading-[1.05] tracking-tight max-w-5xl mx-auto">
            Reduce Defects
            <span class="block text-transparent bg-clip-text" style="background-image: linear-gradient(90deg, #38bdf8, #818cf8, #c084fc);">by 40%.</span>
            Boost OEE
            <span class="text-sky-400">by 25%.</span>
        </h1>

        {{-- Sub --}}
        <p class="hero-sub mt-8 text-lg sm:text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed font-medium">
            Track Tech Solutions gives apparel manufacturers real-time visibility across fabric, cutting, production, and quality — so you make better decisions, faster.
        </p>

        {{-- CTAs --}}
        <div class="hero-ctas mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/contact"
               class="group relative inline-flex items-center gap-3 px-10 py-4 rounded-full font-bold text-white text-lg overflow-hidden shadow-xl shadow-sky-500/30 transition-all hover:scale-105 hover:shadow-sky-500/50"
               style="background: linear-gradient(135deg, #0ea5e9, #6366f1);">
                <span class="relative z-10">Book a Demo</span>
                <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                <div class="absolute inset-0 bg-white/0 group-hover:bg-white/10 transition-colors"></div>
            </a>
            <a href="#how-it-works"
               class="inline-flex items-center gap-2 px-10 py-4 rounded-full font-bold text-white text-lg border border-white/30 hover:border-white/60 hover:bg-white/10 transition-all backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                See How It Works
            </a>
        </div>

        {{-- Scroll indicator --}}
        <div class="mt-16 flex flex-col items-center gap-2 opacity-50">
            <span class="text-xs text-white uppercase tracking-widest">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-white to-transparent scroll-line"></div>
        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 2: TRUST BAR — Clients
     ======================================================== --}}
<section class="py-10 bg-slate-900 border-y border-slate-700/50 overflow-hidden relative">
    <p class="text-center text-xs font-bold text-slate-500 uppercase tracking-[0.3em] mb-6">Trusted by Leading Manufacturers</p>
    <div class="flex overflow-hidden" style="mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);">
        <div class="flex gap-16 px-8 whitespace-nowrap animate-marquee">
            @foreach(['Arvind Ltd', 'Shahi Exports', 'PDS Group', 'Modelama Exports', 'Armstrong', 'Pearl Global', 'Gokaldas Exports', 'KPR Mill'] as $client)
            <span class="text-slate-300 font-black text-xl tracking-tight">{{ $client }}</span>
            @endforeach
            @foreach(['Arvind Ltd', 'Shahi Exports', 'PDS Group', 'Modelama Exports', 'Armstrong', 'Pearl Global', 'Gokaldas Exports', 'KPR Mill'] as $client)
            <span class="text-slate-300 font-black text-xl tracking-tight">{{ $client }}</span>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 3: PROBLEM — Pain Points
     ======================================================== --}}
<section id="problem" class="py-28 bg-slate-950 relative overflow-hidden">

    {{-- BG glow --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-red-500/5 rounded-full blur-[80px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16 reveal-up">
            <span class="inline-block text-red-400 text-sm font-bold uppercase tracking-widest mb-4">The Factory Floor Challenge</span>
            <h2 class="text-4xl md:text-5xl font-black text-white leading-tight">
                Your Factory Is Losing Money —<br>
                <span class="text-red-400">And You Don't Know Where</span>
            </h2>
            <p class="mt-5 text-slate-400 text-lg max-w-2xl mx-auto">Every day, without real-time visibility, manufacturers face the same silent losses.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="reveal-up problem-card group relative p-8 rounded-3xl border border-red-500/20 bg-slate-900/80 hover:border-red-500/50 transition-all duration-500 hover:-translate-y-2">
                <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="w-14 h-14 rounded-2xl bg-red-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">3–5% Fabric Wasted Per Order</h3>
                <p class="text-slate-400 leading-relaxed">Manual spreading and poor inventory tracking silently drain fabric budgets every single order — adding up to lakhs of rupees per month.</p>
                <div class="mt-5 text-red-400 font-bold text-sm">₹5–15L wasted / month</div>
            </div>

            <div class="reveal-up problem-card group relative p-8 rounded-3xl border border-orange-500/20 bg-slate-900/80 hover:border-orange-500/50 transition-all duration-500 hover:-translate-y-2" style="animation-delay:0.1s">
                <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-orange-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="w-14 h-14 rounded-2xl bg-orange-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">2–3 Hours Lost to Manual Reporting</h3>
                <p class="text-slate-400 leading-relaxed">Supervisors filling tally sheets, managers waiting for end-of-day reports, decisions made on yesterday's data — while production suffers today.</p>
                <div class="mt-5 text-orange-400 font-bold text-sm">15+ hours / week per supervisor</div>
            </div>

            <div class="reveal-up problem-card group relative p-8 rounded-3xl border border-yellow-500/20 bg-slate-900/80 hover:border-yellow-500/50 transition-all duration-500 hover:-translate-y-2" style="animation-delay:0.2s">
                <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="w-14 h-14 rounded-2xl bg-yellow-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <svg class="w-7 h-7 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Defects Caught Too Late</h3>
                <p class="text-slate-400 leading-relaxed">End-of-line quality checks mean defects cascade through the entire batch. Rework, buyer rejections, and chargebacks destroy margins.</p>
                <div class="mt-5 text-yellow-400 font-bold text-sm">8–12% defect rate industry average</div>
            </div>

        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 4: SOLUTION — How It Works
     ======================================================== --}}
<section id="how-it-works" class="py-28 bg-slate-900 relative overflow-hidden">

    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-sky-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-20 reveal-up">
            <span class="inline-block text-sky-400 text-sm font-bold uppercase tracking-widest mb-4">The Solution</span>
            <h2 class="text-4xl md:text-5xl font-black text-white">One Platform. Complete Visibility.<br><span class="text-sky-400">Fabric to Finish.</span></h2>
            <p class="mt-5 text-slate-400 text-lg max-w-3xl mx-auto">Track Tech connects every stage of your production floor into one intelligent dashboard — giving supervisors, managers, and leadership real-time insights that drive action.</p>
        </div>

        {{-- Flow --}}
        <div class="relative">
            {{-- Connecting line --}}
            <div class="hidden lg:block absolute top-14 left-[10%] right-[10%] h-px bg-gradient-to-r from-transparent via-sky-500/50 to-transparent"></div>

            <div class="grid grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach([
                    ['🧵', 'Fabric', 'Intake & store tracking', '#0ea5e9'],
                    ['✂️', 'Cutting', 'Spreading & cut plans', '#818cf8'],
                    ['🪡', 'Production', 'Line & operator output', '#a78bfa'],
                    ['🔍', 'Quality', 'Defect capture at source', '#f472b6'],
                    ['📦', 'Delivery', 'Order fulfilment tracking', '#34d399'],
                ] as $i => $step)
                <div class="reveal-up flex flex-col items-center text-center group" style="animation-delay:{{ $i * 0.1 }}s">
                    <div class="relative w-28 h-28 rounded-3xl flex items-center justify-center text-4xl shadow-xl mb-5 transition-all duration-500 group-hover:-translate-y-3 group-hover:shadow-2xl border border-white/10"
                         style="background: linear-gradient(135deg, {{ $step[3] }}22, {{ $step[3] }}11);">
                        <div class="absolute inset-0 rounded-3xl blur-lg opacity-0 group-hover:opacity-30 transition-opacity" style="background:{{ $step[3] }};"></div>
                        <span class="relative z-10">{{ $step[0] }}</span>
                    </div>
                    <h4 class="font-black text-white text-lg">{{ $step[1] }}</h4>
                    <p class="text-slate-500 text-sm mt-1">{{ $step[2] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="mt-16 text-center reveal-up">
            <a href="/products" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full border border-sky-500/50 text-sky-400 font-semibold hover:bg-sky-500/10 transition-all">
                Explore All Products
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 5: PRODUCTS — 4 Business-Benefit Cards
     ======================================================== --}}
<section id="products" class="py-28 bg-slate-950 relative overflow-hidden">

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-indigo-500/5 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16 reveal-up">
            <span class="inline-block text-indigo-400 text-sm font-bold uppercase tracking-widest mb-4">Our Products</span>
            <h2 class="text-4xl md:text-5xl font-black text-white">Built for Every Stage<br><span class="text-indigo-400">of Your Factory</span></h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

            @foreach([
                ['🧵', 'Fabric Management', 'Save 1.5–3% fabric per order', 'Track every roll from warehouse to spreading table. Smart laying plans powered by AI minimise waste and flag overconsumption in real time.', ['Roll-level tracking', 'Relaxation & shrinkage records', 'AI spreading optimisation', 'Auto budget alerts'], '#0ea5e9', 'from-sky-500/10 to-sky-900/30'],
                ['✂️', 'Cutting Management', 'Reduce spreading waste by 40%', 'Digital cut plans, marker efficiency tracking, and barcode-based bundle tagging give complete traceability from the cutting table to the production line.', ['Digital cut plans', 'Marker efficiency KPIs', 'Bundle barcode tagging', 'Cutting loss reports'], '#818cf8', 'from-violet-500/10 to-slate-900/30'],
                ['🏭', 'Production Tracking', 'Real-time output per line, per operator', 'Replace tally sheets with Android terminals. Supervisors see live output per line, section, and operator — with automatic shift reports and bottleneck alerts.', ['Live dashboard per line', 'Operator-level KPIs', 'Auto shift reports', 'Bottleneck alerts'], '#a78bfa', 'from-purple-500/10 to-slate-900/30'],
                ['🔍', 'Quality Management', 'Catch defects at source, not end-of-line', 'Digital inline QC checkpoints capture defects by type, operator, and garment part. Root cause analysis and trend reports slash rework and buyer rejections.', ['Inline defect capture', 'Root cause analysis', 'Defect trend reports', 'Buyer report exports'], '#f472b6', 'from-pink-500/10 to-slate-900/30'],
            ] as $i => $prod)
            <div class="reveal-up product-card group relative rounded-3xl p-8 border border-white/10 overflow-hidden transition-all duration-500 hover:-translate-y-2 bg-gradient-to-br {{ $prod[6] }}" style="animation-delay:{{ $i * 0.1 }}s">
                <div class="absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: radial-gradient(circle at top left, {{ $prod[5] }}15, transparent 60%);"></div>
                <div class="relative z-10">
                    <div class="flex items-start justify-between mb-6">
                        <span class="text-4xl">{{ $prod[0] }}</span>
                        <span class="text-xs font-black uppercase tracking-widest px-3 py-1 rounded-full border" style="color:{{ $prod[5] }}; border-color:{{ $prod[5] }}44;">{{ $prod[2] }}</span>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-3">{{ $prod[1] }}</h3>
                    <p class="text-slate-400 leading-relaxed mb-6">{{ $prod[3] }}</p>
                    <ul class="space-y-2 mb-8">
                        @foreach($prod[4] as $feature)
                        <li class="flex items-center gap-2 text-sm text-slate-300">
                            <svg class="w-4 h-4 flex-shrink-0" style="color:{{ $prod[5] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="/products" class="inline-flex items-center gap-2 text-sm font-bold hover:gap-3 transition-all" style="color:{{ $prod[5] }}">
                        Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 6: TECHNOLOGY — Dashboard Preview
     ======================================================== --}}
<section id="technology" class="py-28 bg-slate-900 relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div class="reveal-up">
                <span class="inline-block text-teal-400 text-sm font-bold uppercase tracking-widest mb-4">Live Factory Intelligence</span>
                <h2 class="text-4xl md:text-5xl font-black text-white leading-tight mb-6">See Your Factory.<br><span class="text-teal-400">In Real Time.</span></h2>
                <p class="text-slate-400 text-lg leading-relaxed mb-8">A single dashboard connects every line, machine, and operator. Spot bottlenecks before they cascade. Act in minutes, not days.</p>

                <div class="space-y-4">
                    @foreach([
                        ['📊', 'Live OEE per machine', 'Know exactly which machines are underperforming, right now'],
                        ['⚡', 'Instant bottleneck alerts', 'Get notified before delays impact your delivery date'],
                        ['📱', 'Access anywhere', 'Factory floor, office, or anywhere in the world'],
                    ] as $item)
                    <div class="flex gap-4 p-4 rounded-2xl bg-slate-800/50 border border-slate-700/50 hover:border-teal-500/30 transition-all group">
                        <div class="text-2xl flex-shrink-0">{{ $item[0] }}</div>
                        <div>
                            <div class="font-bold text-white group-hover:text-teal-400 transition-colors">{{ $item[1] }}</div>
                            <div class="text-slate-500 text-sm mt-1">{{ $item[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="/contact" class="inline-flex items-center gap-2 mt-8 px-8 py-4 rounded-full font-bold text-white bg-teal-500 hover:bg-teal-400 transition-all shadow-lg shadow-teal-500/30 hover:shadow-teal-500/50">
                    Experience the Live Dashboard
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            {{-- Dashboard mockup --}}
            <div class="reveal-up relative" style="animation-delay:0.2s">
                <div class="relative rounded-3xl overflow-hidden border border-white/10 shadow-2xl shadow-teal-500/10">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80"
                         alt="Factory Dashboard" class="w-full object-cover" style="filter: hue-rotate(180deg) saturate(0.6) brightness(0.7);">

                    {{-- Callout bubbles --}}
                    <div class="callout-bubble absolute top-6 right-6 bg-slate-900/90 backdrop-blur-sm border border-emerald-500/50 rounded-2xl px-4 py-3 shadow-xl">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                            <span class="text-emerald-400 font-bold text-sm">Line 3: 92% Efficiency ↑</span>
                        </div>
                    </div>

                    <div class="callout-bubble absolute top-24 left-4 bg-slate-900/90 backdrop-blur-sm border border-orange-500/50 rounded-2xl px-4 py-3 shadow-xl" style="animation-delay:0.3s">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></span>
                            <span class="text-orange-400 font-bold text-sm">Machine 7: Maintenance Due</span>
                        </div>
                    </div>

                    <div class="callout-bubble absolute bottom-6 right-6 bg-slate-900/90 backdrop-blur-sm border border-sky-500/50 rounded-2xl px-4 py-3 shadow-xl" style="animation-delay:0.6s">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-sky-400 rounded-full animate-pulse"></span>
                            <span class="text-sky-400 font-bold text-sm">Order #4521: 85% Complete</span>
                        </div>
                    </div>

                    <div class="callout-bubble absolute bottom-20 left-4 bg-slate-900/90 backdrop-blur-sm border border-violet-500/50 rounded-2xl px-4 py-3 shadow-xl" style="animation-delay:0.9s">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 bg-violet-400 rounded-full animate-pulse"></span>
                            <span class="text-violet-400 font-bold text-sm">Defect rate: 2.1% ↓</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 7: STATS BAR
     ======================================================== --}}
<section class="py-16 bg-slate-950 border-y border-slate-800">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            @foreach([
                ['250+', 'Active Production Lines'],
                ['40%', 'Avg Defect Reduction'],
                ['25%', 'OEE Improvement'],
                ['90', 'Days to Full ROI'],
            ] as $stat)
            <div class="reveal-up">
                <div class="text-4xl md:text-5xl font-black text-white mb-2 stat-number">{{ $stat[0] }}</div>
                <div class="text-slate-500 text-sm font-medium">{{ $stat[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 8: ROI CALCULATOR — Alpine.js, Transparent Formulas
     ======================================================== --}}
<section id="roi-calculator" class="py-28 bg-slate-900 relative overflow-hidden">

    <div class="absolute top-0 left-0 w-[400px] h-[400px] bg-emerald-500/5 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-sky-500/5 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16 reveal-up">
            <span class="inline-block text-emerald-400 text-sm font-bold uppercase tracking-widest mb-4">ROI Calculator</span>
            <h2 class="text-4xl md:text-5xl font-black text-white">Calculate Your Factory's Savings</h2>
            <p class="mt-5 text-slate-400 text-lg max-w-2xl mx-auto">Adjust the sliders to match your factory. See your projected savings instantly with fully transparent formulas.</p>
        </div>

        <div class="reveal-up"
             x-data="{
                lines: 10,
                operators: 40,
                dailyOutput: 800,

                // Constants
                FABRIC_COST_PER_LINE_MONTH: 500000,
                FABRIC_SAVINGS_PCT: 0.02,
                OPERATOR_MONTHLY_COST: 15000,
                EFFICIENCY_GAIN_PCT: 0.15,
                EFFICIENCY_LABOUR_FACTOR: 0.10,
                IMPL_COST_PER_LINE: 200000,

                get monthlyFabricSavings() {
                    return this.lines * this.FABRIC_COST_PER_LINE_MONTH * this.FABRIC_SAVINGS_PCT;
                },
                get monthlyLabourSavings() {
                    return this.lines * this.operators * this.OPERATOR_MONTHLY_COST * this.EFFICIENCY_GAIN_PCT * this.EFFICIENCY_LABOUR_FACTOR;
                },
                get totalMonthlySavings() {
                    return this.monthlyFabricSavings + this.monthlyLabourSavings;
                },
                get annualSavings() {
                    return this.totalMonthlySavings * 12;
                },
                get implementationCost() {
                    return this.lines * this.IMPL_COST_PER_LINE;
                },
                get paybackMonths() {
                    return Math.round(this.implementationCost / this.totalMonthlySavings);
                },
                get roi() {
                    return Math.round(((this.annualSavings - this.implementationCost) / this.implementationCost) * 100);
                },
                formatINR(val) {
                    if (val >= 10000000) return '₹' + (val/10000000).toFixed(1) + 'Cr';
                    if (val >= 100000) return '₹' + (val/100000).toFixed(1) + 'L';
                    return '₹' + Math.round(val).toLocaleString('en-IN');
                }
             }">

            <div class="grid lg:grid-cols-2 gap-8">

                {{-- Sliders --}}
                <div class="bg-slate-800/50 border border-slate-700/50 rounded-3xl p-8">
                    <h3 class="text-white font-bold text-xl mb-8">Your Factory Details</h3>

                    {{-- Slider 1 --}}
                    <div class="mb-8">
                        <div class="flex justify-between mb-3">
                            <label class="text-slate-300 font-semibold">Production Lines</label>
                            <span class="text-emerald-400 font-black text-lg" x-text="lines"></span>
                        </div>
                        <input type="range" min="1" max="50" x-model="lines"
                               class="roi-slider w-full h-2 rounded-full appearance-none cursor-pointer"
                               style="background: linear-gradient(to right, #10b981 0%, #10b981 var(--pct, 18%), #334155 var(--pct, 18%))"
                               @input="$el.style.setProperty('--pct', (($event.target.value - 1) / 49 * 100) + '%')">
                        <div class="flex justify-between text-xs text-slate-600 mt-2"><span>1</span><span>50</span></div>
                    </div>

                    {{-- Slider 2 --}}
                    <div class="mb-8">
                        <div class="flex justify-between mb-3">
                            <label class="text-slate-300 font-semibold">Operators Per Line</label>
                            <span class="text-emerald-400 font-black text-lg" x-text="operators"></span>
                        </div>
                        <input type="range" min="10" max="80" x-model="operators"
                               class="roi-slider w-full h-2 rounded-full appearance-none cursor-pointer"
                               style="background: linear-gradient(to right, #10b981 0%, #10b981 var(--pct2, 43%), #334155 var(--pct2, 43%))"
                               @input="$el.style.setProperty('--pct2', (($event.target.value - 10) / 70 * 100) + '%')">
                        <div class="flex justify-between text-xs text-slate-600 mt-2"><span>10</span><span>80</span></div>
                    </div>

                    {{-- Slider 3 --}}
                    <div class="mb-8">
                        <div class="flex justify-between mb-3">
                            <label class="text-slate-300 font-semibold">Daily Output / Line (pieces)</label>
                            <span class="text-emerald-400 font-black text-lg" x-text="dailyOutput"></span>
                        </div>
                        <input type="range" min="200" max="2000" step="50" x-model="dailyOutput"
                               class="roi-slider w-full h-2 rounded-full appearance-none cursor-pointer"
                               style="background: linear-gradient(to right, #10b981 0%, #10b981 var(--pct3, 33%), #334155 var(--pct3, 33%))"
                               @input="$el.style.setProperty('--pct3', (($event.target.value - 200) / 1800 * 100) + '%')">
                        <div class="flex justify-between text-xs text-slate-600 mt-2"><span>200</span><span>2,000</span></div>
                    </div>

                    {{-- Assumptions --}}
                    <details class="mt-4">
                        <summary class="text-slate-500 text-xs cursor-pointer hover:text-slate-400 transition-colors">View calculation assumptions</summary>
                        <div class="mt-3 text-xs text-slate-600 space-y-1 pl-2 border-l border-slate-700">
                            <p>• Fabric cost per line/month: ₹5,00,000</p>
                            <p>• Fabric savings rate: 2% per order</p>
                            <p>• Operator monthly cost: ₹15,000</p>
                            <p>• Efficiency gain: 15% (10% attributable to labour savings)</p>
                            <p>• Implementation cost: ₹2,00,000 per line</p>
                        </div>
                    </details>
                </div>

                {{-- Outputs --}}
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">

                        <div class="bg-gradient-to-br from-emerald-500/10 to-slate-900/50 border border-emerald-500/30 rounded-3xl p-6 text-center hover:border-emerald-500/60 transition-colors">
                            <div class="text-3xl font-black text-emerald-400 mb-2" x-text="formatINR(annualSavings)"></div>
                            <div class="text-slate-400 text-sm font-medium">Annual Savings</div>
                        </div>

                        <div class="bg-gradient-to-br from-sky-500/10 to-slate-900/50 border border-sky-500/30 rounded-3xl p-6 text-center hover:border-sky-500/60 transition-colors">
                            <div class="text-3xl font-black text-sky-400 mb-2">15<span class="text-xl">%</span></div>
                            <div class="text-slate-400 text-sm font-medium">Productivity Gain</div>
                        </div>

                        <div class="bg-gradient-to-br from-violet-500/10 to-slate-900/50 border border-violet-500/30 rounded-3xl p-6 text-center hover:border-violet-500/60 transition-colors">
                            <div class="text-3xl font-black text-violet-400 mb-2" x-text="paybackMonths + ' mo'"></div>
                            <div class="text-slate-400 text-sm font-medium">Payback Period</div>
                        </div>

                        <div class="bg-gradient-to-br from-pink-500/10 to-slate-900/50 border border-pink-500/30 rounded-3xl p-6 text-center hover:border-pink-500/60 transition-colors">
                            <div class="text-3xl font-black text-pink-400 mb-2" x-text="roi + '%'"></div>
                            <div class="text-slate-400 text-sm font-medium">First Year ROI</div>
                        </div>

                    </div>

                    <div class="bg-slate-800/50 border border-slate-700/50 rounded-3xl p-6">
                        <div class="flex justify-between text-sm mb-3">
                            <span class="text-slate-400">Monthly Fabric Savings</span>
                            <span class="text-emerald-400 font-bold" x-text="formatINR(monthlyFabricSavings)"></span>
                        </div>
                        <div class="flex justify-between text-sm mb-3">
                            <span class="text-slate-400">Monthly Labour Savings</span>
                            <span class="text-emerald-400 font-bold" x-text="formatINR(monthlyLabourSavings)"></span>
                        </div>
                        <div class="flex justify-between text-sm mb-3">
                            <span class="text-slate-400">Implementation Cost</span>
                            <span class="text-slate-400 font-bold" x-text="formatINR(implementationCost)"></span>
                        </div>
                        <div class="border-t border-slate-700 pt-3 flex justify-between text-base">
                            <span class="text-white font-bold">Total Monthly Savings</span>
                            <span class="text-emerald-400 font-black" x-text="formatINR(totalMonthlySavings)"></span>
                        </div>
                    </div>

                    <a href="/contact"
                       class="block w-full text-center py-4 rounded-2xl font-bold text-white text-lg transition-all hover:scale-[1.02]"
                       style="background: linear-gradient(135deg, #10b981, #0ea5e9);">
                        Get Your Personalised ROI Report →
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 9: CASE STUDIES
     ======================================================== --}}
<section id="case-studies" class="py-28 bg-slate-950 relative overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <div class="text-center mb-16 reveal-up">
            <span class="inline-block text-amber-400 text-sm font-bold uppercase tracking-widest mb-4">Case Studies</span>
            <h2 class="text-4xl md:text-5xl font-black text-white">Real Results from Real Factories</h2>
            <p class="mt-5 text-slate-400 text-lg max-w-2xl mx-auto">Measurable before-and-after results from manufacturers across South Asia.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            @foreach([
                ['Shahi Exports', 'Quality Management', '8.2% → 2.1%', 'Defect Rate', '"We reduced buyer chargebacks by 70% within 3 months of going live on Track Tech\'s quality module."', '— VP Operations, Shahi Exports', '#f59e0b'],
                ['Arvind Ltd', 'Fabric Management', '4.1% → 1.6%', 'Fabric Wastage', '"The fabric savings alone paid for the entire implementation within 6 weeks. The ROI was immediate."', '— Head of Manufacturing, Arvind Ltd', '#10b981'],
                ['PDS Group', 'Production Tracking', '67% → 89%', 'Line Efficiency', '"Supervisors now spend time on improvements, not paperwork. Decision-making speed has transformed."', '— Factory Manager, PDS Group', '#818cf8'],
            ] as $i => $study)
            <div class="reveal-up group relative bg-slate-900 border border-slate-800 rounded-3xl p-8 hover:border-slate-600 transition-all duration-500 hover:-translate-y-2" style="animation-delay:{{ $i * 0.15 }}s">
                <div class="absolute top-0 left-0 right-0 h-1 rounded-t-3xl" style="background:{{ $study[6] }};"></div>

                <div class="flex items-center justify-between mb-6">
                    <div>
                        <div class="font-black text-white text-lg">{{ $study[0] }}</div>
                        <div class="text-slate-500 text-sm">{{ $study[1] }}</div>
                    </div>
                    <span class="w-10 h-10 rounded-xl flex items-center justify-center text-lg font-black border" style="color:{{ $study[6] }};border-color:{{ $study[6] }}44">✓</span>
                </div>

                <div class="flex items-baseline gap-3 mb-2">
                    <span class="text-3xl font-black" style="color:{{ $study[6] }}">{{ $study[2] }}</span>
                </div>
                <div class="text-slate-500 text-sm font-medium mb-6">{{ $study[3] }}</div>

                <blockquote class="text-slate-400 text-sm leading-relaxed italic border-l-2 pl-4 mb-4" style="border-color:{{ $study[6] }}66">{{ $study[4] }}</blockquote>
                <div class="text-xs text-slate-600">{{ $study[5] }}</div>

                <a href="/contact" class="inline-flex items-center gap-1 mt-6 text-sm font-bold hover:gap-2 transition-all" style="color:{{ $study[6] }}">
                    Read Full Story →
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>


{{-- ========================================================
     SECTION 10: FINAL CTA
     ======================================================== --}}
<section class="relative py-32 overflow-hidden">

    {{-- Gradient bg --}}
    <div class="absolute inset-0" style="background: linear-gradient(135deg, #0f172a 0%, #0c1a3d 50%, #0f172a 100%);"></div>
    <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, rgba(14,165,233,0.15) 0%, transparent 70%);"></div>

    {{-- Animated rings --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] rounded-full border border-sky-500/10 animate-pulse-slow"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] rounded-full border border-sky-500/5 animate-pulse-slow" style="animation-delay:1s"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] rounded-full border border-sky-500/5 animate-pulse-slow" style="animation-delay:2s"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center reveal-up">
        <span class="inline-block text-sky-400 text-sm font-bold uppercase tracking-widest mb-6">Start Today</span>
        <h2 class="text-5xl md:text-6xl font-black text-white leading-tight mb-6">
            See How Much Your<br>
            <span class="text-transparent bg-clip-text" style="background-image: linear-gradient(90deg, #38bdf8, #818cf8, #c084fc);">Factory Can Save</span>
        </h2>
        <p class="text-slate-400 text-xl mb-12 max-w-2xl mx-auto">Book a free 30-minute assessment. Our team will show you exactly where your factory is losing money and how much you can save.</p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/contact"
               class="group inline-flex items-center gap-3 px-12 py-5 rounded-full font-black text-white text-xl shadow-2xl shadow-sky-500/30 transition-all hover:scale-105 hover:shadow-sky-500/50"
               style="background: linear-gradient(135deg, #0ea5e9, #6366f1);">
                Book Your Free Assessment
                <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

        <p class="mt-6 text-slate-600 text-sm">No commitment. No credit card. Just a conversation about your factory.</p>
    </div>
</section>


@push('scripts')
<style>
    /* Hero grid lines */
    .hero-grid-lines {
        background-image: linear-gradient(rgba(14,165,233,0.06) 1px, transparent 1px),
                          linear-gradient(90deg, rgba(14,165,233,0.06) 1px, transparent 1px);
        background-size: 60px 60px;
    }

    /* Scroll line animation */
    @keyframes scrollLine {
        0% { transform: scaleY(0); transform-origin: top; }
        50% { transform: scaleY(1); transform-origin: top; }
        51% { transform-origin: bottom; }
        100% { transform: scaleY(0); transform-origin: bottom; }
    }
    .scroll-line { animation: scrollLine 2s ease-in-out infinite; }

    /* ROI Slider styling */
    .roi-slider { -webkit-appearance: none; }
    .roi-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 20px; height: 20px;
        background: white;
        border-radius: 50%;
        border: 3px solid #10b981;
        cursor: pointer;
        box-shadow: 0 0 0 4px rgba(16,185,129,0.2);
    }
    .roi-slider::-moz-range-thumb {
        width: 20px; height: 20px;
        background: white;
        border-radius: 50%;
        border: 3px solid #10b981;
        cursor: pointer;
    }

    /* Callout bubbles animation */
    .callout-bubble {
        animation: floatIn 0.6s ease forwards;
        opacity: 0;
        transform: translateY(10px);
    }
    @keyframes floatIn {
        to { opacity: 1; transform: translateY(0); }
    }

    /* Reveal animation */
    .reveal-up {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal-up.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Hero animations */
    .hero-badge { animation: fadeSlideDown 0.8s ease forwards 0.2s; opacity: 0; }
    .hero-headline { animation: fadeSlideUp 1s ease forwards 0.4s; opacity: 0; }
    .hero-sub { animation: fadeSlideUp 1s ease forwards 0.7s; opacity: 0; }
    .hero-ctas { animation: fadeSlideUp 1s ease forwards 1s; opacity: 0; }

    @keyframes fadeSlideDown {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Marquee */
    @keyframes marqueeScroll {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
    .animate-marquee { animation: marqueeScroll 30s linear infinite; white-space: nowrap; }

    /* Pulse slow */
    @keyframes pulseSlow {
        0%, 100% { opacity: 0.3; transform: translate(-50%,-50%) scale(1); }
        50% { opacity: 0.6; transform: translate(-50%,-50%) scale(1.05); }
    }
    .animate-pulse-slow { animation: pulseSlow 4s ease-in-out infinite; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Scroll reveal ─────────────────────────────────────────
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                // Apply delay if set via inline style
                var delay = entry.target.style.animationDelay || '0s';
                setTimeout(function() {
                    entry.target.classList.add('visible');
                }, parseFloat(delay) * 1000);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal-up').forEach(function(el) {
        observer.observe(el);
    });

    // ── Callout bubbles stagger ───────────────────────────────
    const bubbleObs = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.querySelectorAll('.callout-bubble').forEach(function(b, i) {
                    b.style.animationDelay = (i * 0.3) + 's';
                });
                bubbleObs.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    var techSection = document.getElementById('technology');
    if (techSection) bubbleObs.observe(techSection);

    // ── Smooth anchor scrolling ───────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
        a.addEventListener('click', function(e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ── Product card hover tilt ───────────────────────────────
    document.querySelectorAll('.product-card').forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
            var rect = card.getBoundingClientRect();
            var x = (e.clientX - rect.left - rect.width / 2) / (rect.width / 2);
            var y = (e.clientY - rect.top - rect.height / 2) / (rect.height / 2);
            card.style.transform = 'translateY(-8px) rotateX(' + (-y * 3) + 'deg) rotateY(' + (x * 3) + 'deg)';
            card.style.transition = 'transform 0.1s ease';
        });
        card.addEventListener('mouseleave', function() {
            card.style.transform = '';
            card.style.transition = 'transform 0.5s ease';
        });
    });

    // ── GSAP ScrollTrigger for stats counter ─────────────────
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
    }
});
</script>
@endpush

@endsection
