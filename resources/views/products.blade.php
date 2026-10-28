@extends('layouts.app')

@section('title', 'Products | Track Tech Solutions')

@section('content')

<style>
/* ── Product Experience & Dynamic Video Styles ── */
.hero-bg-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
    filter: brightness(0.65) contrast(1.1);
}

.product-experience-card {
    position: relative;
    overflow: hidden;
    border-radius: 24px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    background: rgba(10, 30, 43, 0.82);
    backdrop-filter: blur(16px);
    box-shadow: 0 24px 64px -12px rgba(3, 12, 18, 0.45);
}

.product-video-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(110deg, rgba(6, 17, 25, 0.88) 0%, rgba(10, 30, 43, 0.78) 45%, rgba(6, 17, 25, 0.70) 100%);
    pointer-events: none;
}

.product-copy-anim {
    animation: productCopyIn .4s cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes productCopyIn {
    from { opacity: 0; transform: translateY(14px); }
    to { opacity: 1; transform: translateY(0); }
}

.product-img-anim {
    animation: productImgIn .5s cubic-bezier(0.16, 1, 0.3, 1) both;
}

@keyframes productImgIn {
    from { opacity: 0; transform: scale(0.96); }
    to { opacity: 1; transform: scale(1); }
}

/* Animations for simulated widgets */
@keyframes target-pulse {
    0%, 100% { transform: scale(1); opacity: 0.8; }
    50% { transform: scale(1.25); opacity: 1; }
}

@keyframes scan-sweep {
    0% { top: 0%; opacity: 0.8; }
    50% { top: 100%; opacity: 1; }
    100% { top: 0%; opacity: 0.8; }
}

@keyframes route-travel {
    0% { left: 0%; }
    50% { left: 100%; }
    100% { left: 0%; }
}

/* Scroll reveal helper */
html.has-product-reveal .product-scroll-reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity .6s ease, transform .6s ease;
}
html.has-product-reveal .product-scroll-reveal.is-visible {
    opacity: 1;
    transform: translateY(0);
}
@media (prefers-reduced-motion: reduce) {
    html.has-product-reveal .product-scroll-reveal {
        opacity: 1;
        transform: none;
        transition: none;
    }
}
</style>

{{-- ── 1. PAGE HEADER / HERO ────────────────────────────────────────── --}}
<section class="relative pt-32 pb-12 overflow-hidden border-b border-slate-200 bg-gradient-to-b from-sky-50/50 to-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest bg-sky-100 text-sky-700 border border-sky-200 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-sky-500 animate-pulse"></span>
                Interactive Product Suite
            </span>
            <h1 class="mt-5 text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-tight">
                A clearer view of <span class="text-sky-600">every stage</span>
            </h1>
            <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed font-medium">
                Click any product below to explore live features, workflows, and output clarity — with animated factory intelligence in the background.
            </p>
        </div>
    </div>
</section>


{{-- ── 2. INTERACTIVE PRODUCT SELECTOR TABS ────────────────────────── --}}
<section class="sticky top-20 z-30 bg-white/95 backdrop-blur-md border-b border-slate-200 shadow-sm py-3 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Category Pills Row --}}
        <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none" id="productTabsBar">
            <div class="flex items-center gap-1.5 shrink-0 pr-3 border-r border-slate-200">
                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400 pl-1">Products:</span>
                <button type="button" onclick="selectProduct('trakwel')" data-choice-btn="trakwel"
                        class="product-pill px-3.5 py-1.5 rounded-full text-xs font-black transition-all bg-sky-600 text-white shadow-sm shadow-sky-500/20">
                    TrakWel
                </button>
                <button type="button" onclick="selectProduct('fabric')" data-choice-btn="fabric"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    Fabric
                </button>
                <button type="button" onclick="selectProduct('cutting')" data-choice-btn="cutting"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    Cutting
                </button>
                <button type="button" onclick="selectProduct('production')" data-choice-btn="production"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    Production
                </button>
                <button type="button" onclick="selectProduct('quality')" data-choice-btn="quality"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    Quality
                </button>
            </div>

            <div class="flex items-center gap-1.5 shrink-0 px-3 border-r border-slate-200">
                <button type="button" onclick="selectProduct('planwel')" data-choice-btn="planwel"
                        class="product-pill px-3.5 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    PlanWel
                </button>
                <button type="button" onclick="selectProduct('mtrak')" data-choice-btn="mtrak"
                        class="product-pill px-3.5 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    mTrak
                </button>
                <button type="button" onclick="selectProduct('sewiot')" data-choice-btn="sewiot"
                        class="product-pill px-3.5 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700">
                    SewIoT
                </button>
            </div>

            <div class="flex items-center gap-1.5 shrink-0 pl-3">
                <span class="text-[10px] font-black uppercase tracking-wider text-slate-400">Industry:</span>
                <button type="button" onclick="selectProduct('laundry')" data-choice-btn="laundry"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-orange-50 hover:text-orange-700">
                    Laundry
                </button>
                <button type="button" onclick="selectProduct('jig')" data-choice-btn="jig"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-orange-50 hover:text-orange-700">
                    Jig
                </button>
                <button type="button" onclick="selectProduct('shrinkage')" data-choice-btn="shrinkage"
                        class="product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-orange-50 hover:text-orange-700">
                    Shrinkage App
                </button>
            </div>
        </div>
    </div>
</section>


{{-- ── 3. DYNAMIC INTERACTIVE SHOWCASE CARD (WITH BACKGROUND VIDEO) ── --}}
<section id="product-experience" class="py-12 sm:py-16 bg-slate-900 text-white relative overflow-hidden scroll-mt-24">

    {{-- Seamless Background Video: factory-loop.mp4 --}}
    <video id="productBgVideo" autoplay muted loop playsinline class="hero-bg-video"
           poster="{{ asset('images/factory-aerial.jpg') }}">
        <source src="{{ asset('videos/factory-loop.mp4') }}" type="video/mp4">
    </video>
    <div class="product-video-overlay"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        {{-- Experience Card --}}
        <div class="product-experience-card" id="productCard">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center p-6 sm:p-10 lg:p-12 relative z-10">

                {{-- Left: Dynamic Content --}}
                <div class="lg:col-span-5 flex flex-col items-start" id="productCopyContainer">
                    <div class="flex items-center gap-3 mb-4">
                        <span id="productKicker" class="text-xs font-black tracking-widest uppercase text-sky-400 bg-sky-950/60 border border-sky-400/30 px-3 py-1 rounded-full">
                            PRODUCT 01 / TRAKWEL
                        </span>
                        <span id="productBadge" class="text-[11px] font-bold text-teal-300 bg-teal-950/50 border border-teal-500/30 px-2.5 py-0.5 rounded-full">
                            All-in-One MES
                        </span>
                    </div>

                    <h2 id="productTitle" class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
                        TrakWel
                    </h2>

                    <p id="productDescription" class="mt-5 text-slate-300 text-base sm:text-lg leading-relaxed font-normal">
                        Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.
                    </p>

                    {{-- 3 Workflow Stages --}}
                    <div class="w-full mt-8 pt-6 border-t border-white/15">
                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 mb-3">Workflow Stages</p>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                                <span class="block text-[11px] font-black text-sky-400">01</span>
                                <strong id="productStageOne" class="block text-xs sm:text-sm font-bold text-white mt-1">Track</strong>
                            </div>
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                                <span class="block text-[11px] font-black text-sky-400">02</span>
                                <strong id="productStageTwo" class="block text-xs sm:text-sm font-bold text-white mt-1">Monitor</strong>
                            </div>
                            <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                                <span class="block text-[11px] font-black text-sky-400">03</span>
                                <strong id="productStageThree" class="block text-xs sm:text-sm font-bold text-white mt-1">Improve</strong>
                            </div>
                        </div>
                    </div>

                    {{-- CTA Buttons --}}
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="/contact"
                           class="inline-flex items-center gap-2 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white rounded-full font-bold text-sm shadow-lg shadow-sky-500/25 transition-all hover:scale-105">
                            Talk to our team
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="tel:+919650613666" class="text-xs text-slate-300 font-semibold hover:text-white transition">
                            📞 Call +91 96506 13666
                        </a>
                    </div>
                </div>

                {{-- Right: Visual & Simulation Display --}}
                <div class="lg:col-span-7">
                    <div class="relative rounded-2xl overflow-hidden bg-slate-950/60 border border-white/15 p-2 shadow-2xl min-h-[380px] flex items-center justify-center">

                        {{-- Floating Status Badge --}}
                        <div id="productStatusBadge" class="absolute top-4 left-4 z-20 flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900/90 backdrop-blur-md border border-cyan-400/40 text-xs font-bold text-cyan-300 shadow-md">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span id="productVisualLabel">LIVE MES</span>
                            <span class="text-white/40">|</span>
                            <span id="productVisualValue" class="text-white">SYSTEM ACTIVE</span>
                        </div>

                        {{-- Dynamic Product Image --}}
                        <div class="w-full h-full relative overflow-hidden rounded-xl">
                            <img id="productImage"
                                 src="{{ asset('images/trakwel.png') }}?v=2"
                                 alt="Live production tracking across garment factory lines"
                                 class="w-full max-h-[460px] object-cover rounded-xl transition-all duration-500">

                            {{-- Live Simulated Overlay Widget for TrakWel --}}
                            <div id="liveSimulationOverlay" class="absolute inset-0 bg-slate-950/40 backdrop-blur-[2px] p-6 flex flex-col justify-end transition-opacity duration-300">
                                <div class="grid grid-cols-2 gap-4 bg-slate-900/80 border border-white/20 backdrop-blur-md rounded-xl p-4 shadow-xl">
                                    <div class="border-r border-white/10 pr-2">
                                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-400">
                                            <span>TODAY'S OUTPUT</span>
                                            <span class="text-emerald-400">● LIVE</span>
                                        </div>
                                        <div class="text-2xl sm:text-3xl font-black text-white mt-1">842 <span class="text-xs font-medium text-slate-400">pcs</span></div>
                                        <div class="text-[11px] text-sky-400 font-semibold mt-0.5">Line 03 • Running on target</div>
                                    </div>
                                    <div class="pl-2">
                                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-400">
                                            <span>LINE EFFICIENCY</span>
                                            <span class="text-sky-300">92%</span>
                                        </div>
                                        <div class="w-full bg-white/20 h-2.5 rounded-full mt-2 overflow-hidden">
                                            <div class="bg-gradient-to-r from-teal-400 to-sky-400 h-2.5 rounded-full" style="width: 92%"></div>
                                        </div>
                                        <div class="text-[11px] text-slate-300 font-medium mt-1">Order #4821: 78% completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


{{-- ── 4. FLAGSHIP PRODUCTS OVERVIEW SECTIONS ────────────────────────── --}}
<section class="py-20 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <p class="text-xs font-black uppercase tracking-widest text-sky-600">The Complete Platform</p>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 mt-2">
                Four Pillars of Factory Digitalisation
            </h2>
            <p class="text-slate-600 mt-3 text-sm sm:text-base">
                Use individual modules or integrate them together for total control from fabric to shipment.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            {{-- Card 1: TrakWel --}}
            <div class="rounded-2xl border border-slate-200 p-8 hover:border-sky-300 hover:shadow-xl transition-all duration-300 bg-slate-50/50">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-black uppercase tracking-wider text-sky-600 bg-sky-50 px-3 py-1 rounded-full border border-sky-200">MES 01</span>
                    <button onclick="selectProduct('trakwel')" class="text-xs font-bold text-sky-600 hover:text-sky-800">Explore in viewer ↑</button>
                </div>
                <h3 class="text-2xl font-black text-slate-900">TrakWel</h3>
                <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                    Real-time visibility and control across the shop floor to drive efficiency, quality, and performance from fabric warehouse to finished goods.
                </p>
                <div class="grid grid-cols-2 gap-2 mt-6 text-xs font-semibold text-slate-700">
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Fabric Roll Tracking</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Cutting Room Digitisation</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Production Tracking</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Inline Quality Control</div>
                </div>
            </div>

            {{-- Card 2: PlanWel --}}
            <div class="rounded-2xl border border-slate-200 p-8 hover:border-sky-300 hover:shadow-xl transition-all duration-300 bg-slate-50/50">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-black uppercase tracking-wider text-violet-600 bg-violet-50 px-3 py-1 rounded-full border border-violet-200">PLANNING 02</span>
                    <button onclick="selectProduct('planwel')" class="text-xs font-bold text-violet-600 hover:text-violet-800">Explore in viewer ↑</button>
                </div>
                <h3 class="text-2xl font-black text-slate-900">PlanWel</h3>
                <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                    Advanced planning and dynamic scheduling to balance lines, manage order commitments, and deliver on time without floor chaos.
                </p>
                <div class="grid grid-cols-2 gap-2 mt-6 text-xs font-semibold text-slate-700">
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-violet-500"></span>Dynamic Line Scheduling</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-violet-500"></span>Capacity Bottleneck Alerts</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-violet-500"></span>Order Delivery Forecasting</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-violet-500"></span>Multi-factory Planning</div>
                </div>
            </div>

            {{-- Card 3: mTrak --}}
            <div class="rounded-2xl border border-slate-200 p-8 hover:border-sky-300 hover:shadow-xl transition-all duration-300 bg-slate-50/50">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-black uppercase tracking-wider text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">MAINTENANCE 03</span>
                    <button onclick="selectProduct('mtrak')" class="text-xs font-bold text-emerald-600 hover:text-emerald-800">Explore in viewer ↑</button>
                </div>
                <h3 class="text-2xl font-black text-slate-900">mTrak</h3>
                <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                    Maximize sewing machine uptime, streamline breakdown requests with QR scanning, and maintain equipment proactively.
                </p>
                <div class="grid grid-cols-2 gap-2 mt-6 text-xs font-semibold text-slate-700">
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>QR Breakdown Calling</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Preventive Service Schedules</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Mechanic Response Times</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>Spare Parts Usage Tracking</div>
                </div>
            </div>

            {{-- Card 4: SewIoT --}}
            <div class="rounded-2xl border border-slate-200 p-8 hover:border-sky-300 hover:shadow-xl transition-all duration-300 bg-slate-50/50">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-black uppercase tracking-wider text-teal-600 bg-teal-50 px-3 py-1 rounded-full border border-teal-200">IOT 04</span>
                    <button onclick="selectProduct('sewiot')" class="text-xs font-bold text-teal-600 hover:text-teal-800">Explore in viewer ↑</button>
                </div>
                <h3 class="text-2xl font-black text-slate-900">SewIoT</h3>
                <p class="text-slate-600 text-sm mt-3 leading-relaxed">
                    Smart sensor-connected sewing terminals giving live counts, operator cycle times, and needle run-time monitoring in real time.
                </p>
                <div class="grid grid-cols-2 gap-2 mt-6 text-xs font-semibold text-slate-700">
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>Live Needle Run-time</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>Piece Rate Counter</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>Target vs Actual Boards</div>
                    <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-teal-500"></span>Plug & Play Hardware</div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ── 5. PRODUCTION DASHBOARD HIGHLIGHT ─────────────────────────────── --}}
<section class="py-16 md:py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-sky-700">Production Dashboard</p>
                <h2 class="mt-3 text-3xl md:text-4xl font-black leading-tight text-slate-900">See your factory as the work moves.</h2>
                <p class="mt-5 text-base sm:text-lg leading-relaxed text-slate-600">
                    Bring line output, order progress, and machine activity into one view. Spot bottlenecks earlier and give your floor managers time to act.
                </p>
                <ul class="mt-7 space-y-3 text-slate-700 font-semibold text-sm">
                    <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-sky-500"></span>Output across all active garment lines</li>
                    <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-sky-500"></span>Order progress from cutting floor to final pack</li>
                    <li class="flex items-center gap-3"><span class="w-2 h-2 rounded-full bg-sky-500"></span>Real-time defect Pareto charts and rework logging</li>
                </ul>
                <div class="mt-8">
                    <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-slate-900 text-white font-bold text-sm hover:bg-slate-800 transition">
                        Request Live Floor Demo →
                    </a>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/apparel-3d-scene-4.png') }}" alt="Track Tech production analytics dashboard" loading="lazy" class="w-full aspect-[4/3] object-cover rounded-2xl border border-slate-200 shadow-xl">
            </div>
        </div>
    </div>
</section>


{{-- ── 6. BOTTOM CTA ────────────────────────────────────────────────── --}}
<section class="py-20 bg-white border-t border-slate-100 text-center">
    <div class="max-w-4xl mx-auto px-6">
        <p class="text-xs font-black uppercase tracking-widest text-sky-600 mb-3">Get Started</p>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
            Want a clearer view of your factory?
        </h2>
        <p class="mt-4 text-slate-600 text-base sm:text-lg max-w-xl mx-auto">
            Tell us how your lines work today. We will demonstrate how Track Tech Solutions can reduce waste and boost on-time shipments.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
            <a href="/contact"
               class="px-8 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-bold shadow-lg shadow-sky-500/30 hover:-translate-y-0.5 transition">
                Talk to Sales Team
            </a>
            <a href="tel:+919650613666"
               class="px-8 py-4 border-2 border-slate-300 text-slate-800 rounded-full font-bold hover:bg-slate-50 hover:-translate-y-0.5 transition">
                Call +91 96506 13666
            </a>
        </div>
    </div>
</section>

@push('scripts')
<script>
(function() {
    // Product data matching website-tts.vercel.app exactly
    const productsData = {
        trakwel: {
            number: '01',
            name: 'TrakWel',
            kicker: 'PRODUCT 01 / TRAKWEL',
            badge: 'All-in-One MES',
            description: 'Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.',
            stages: ['Track', 'Monitor', 'Improve'],
            image: "{{ asset('images/trakwel.png') }}?v=2",
            alt: 'Live production tracking across garment factory lines',
            label: 'LIVE MES',
            value: 'SYSTEM ACTIVE',
            hasLiveSim: true
        },
        fabric: {
            number: '02',
            name: 'Fabric Inventory Management',
            kicker: 'PRODUCT 02 / FABRIC INVENTORY MANAGEMENT',
            badge: 'TrakWel Module',
            description: 'Track fabric receipts, roll locations and issue quantities from one place. Keep stock accurate and make the right material easy to find before a line needs it.',
            stages: ['Receive', 'Locate', 'Issue'],
            image: "{{ asset('images/fabric-inventory-management.png') }}",
            alt: 'Fabric inventory management illustration showing fabric rolls, stock scanning and inventory details',
            label: 'FABRIC STOCK',
            value: 'ROLLS IN VIEW',
            hasLiveSim: false
        },
        cutting: {
            number: '03',
            name: 'Cutting Room Digitalization',
            kicker: 'PRODUCT 03 / CUTTING ROOM DIGITALIZATION',
            badge: 'TrakWel Module',
            description: 'Digitise cutting-room planning and progress, from marker preparation through bundle handoff. Give teams a clearer view of material use and work in progress.',
            stages: ['Prepare', 'Cut', 'Handoff'],
            image: "{{ asset('images/cutting-room-digitalization.png') }}",
            alt: 'Digital cutting room with marker planning, automated cutting and finished fabric bundles',
            label: 'CUTTING ROOM',
            value: 'WORK IN VIEW',
            hasLiveSim: false
        },
        production: {
            number: '04',
            name: 'Production Tracking',
            kicker: 'PRODUCT 04 / PRODUCTION TRACKING',
            badge: 'TrakWel Module',
            description: 'Follow each order through cutting, sewing and finishing. Give supervisors a live view of output, bottlenecks and what needs attention next.',
            stages: ['Cutting', 'Sewing', 'Finishing'],
            image: "{{ asset('images/product-tracking.png') }}",
            alt: 'Production tracking dashboard showing order progress across garment factory stages',
            label: 'ORDER 4821 / LINE 03',
            value: 'IN PROGRESS',
            hasLiveSim: false
        },
        quality: {
            number: '05',
            name: 'Quality Control',
            kicker: 'PRODUCT 05 / QUALITY CONTROL',
            badge: 'TrakWel Module',
            description: 'Record inspections on the line, spot recurring issues and deal with defects before they reach packing or the warehouse.',
            stages: ['Inspect', 'Flag', 'Resolve'],
            image: "{{ asset('images/quality-control.png') }}",
            alt: 'Garment quality control inspection and defect tracking',
            label: 'QUALITY CHECK',
            value: 'INLINE PASS',
            hasLiveSim: false
        },
        planwel: {
            number: '06',
            name: 'PlanWel',
            kicker: 'PRODUCT 06 / PLANWEL',
            badge: 'Advanced Planning',
            description: 'Advanced planning and scheduling to balance capacity, manage orders and keep delivery commitments on track with dynamic schedules.',
            stages: ['Plan', 'Schedule', 'Deliver'],
            image: "{{ asset('images/planwel.png') }}",
            alt: 'PlanWel production planning and scheduling interface',
            label: 'CAPACITY PLAN',
            value: 'SCHEDULED',
            hasLiveSim: false
        },
        mtrak: {
            number: '07',
            name: 'mTrak',
            kicker: 'PRODUCT 07 / MTRAK',
            badge: 'Maintenance ERP',
            description: 'Machine maintenance management that maximizes machine uptime, reduces downtime and extends equipment life with preventive maintenance.',
            stages: ['Monitor', 'Maintain', 'Optimize'],
            image: "{{ asset('images/mTrak.png') }}",
            alt: 'mTrak machine maintenance management interface',
            label: 'MACHINE HEALTH',
            value: 'RUNNING WELL',
            hasLiveSim: false
        },
        sewiot: {
            number: '08',
            name: 'SewIoT',
            kicker: 'PRODUCT 08 / SEWIOT',
            badge: 'Smart Sewing IoT',
            description: 'IoT for sewing lines. Connect the sewing floor with technology to monitor, analyze and improve productivity in real time.',
            stages: ['Connect', 'Analyze', 'Improve'],
            image: "{{ asset('images/sew-IoT.png') }}",
            alt: 'SewIoT smart sewing line and connected factory real-time monitoring',
            label: 'SEWING LINE',
            value: 'CONNECTED',
            hasLiveSim: false
        },
        laundry: {
            number: '09',
            name: 'Laundry Management',
            kicker: 'PRODUCT 09 / LAUNDRY MANAGEMENT',
            badge: 'Industry Solution',
            description: 'Follow garment lots through washing, treatment and finishing. Track process status and quality checks to keep laundry work aligned with order requirements.',
            stages: ['Receive', 'Process', 'Inspect'],
            image: "{{ asset('images/laundry-management.png') }}",
            alt: 'Laundry management workflow for garment processing and finishing',
            label: 'LAUNDRY FLOW',
            value: 'LOT IN PROCESS',
            hasLiveSim: false
        },
        jig: {
            number: '10',
            name: 'Jig Management',
            kicker: 'PRODUCT 10 / JIG MANAGEMENT',
            badge: 'Industry Solution',
            description: 'Organize sewing aids and jigs by style, line and order. Make availability and readiness visible so teams can reduce setup delays and keep production moving.',
            stages: ['Register', 'Assign', 'Verify'],
            image: "{{ asset('images/Jig-management.png') }}",
            alt: 'Jig management illustration showing organized jig storage, tracking and maintenance',
            label: 'JIG READINESS',
            value: 'AVAILABLE',
            hasLiveSim: false
        },
        shrinkage: {
            number: '11',
            name: 'Shrinkage Testing App',
            kicker: 'PRODUCT 11 / SHRINKAGE TESTING APP',
            badge: 'Industry Solution',
            description: 'Record fabric measurements before and after washing, calculate shrinkage and keep test results linked to the material lot for consistent quality decisions.',
            stages: ['Measure', 'Calculate', 'Review'],
            image: "{{ asset('images/shrinkage-testing-app.png') }}",
            alt: 'Shrinkage testing app for recording fabric measurements and test results',
            label: 'SHRINKAGE TEST',
            value: 'RESULT RECORDED',
            hasLiveSim: false
        }
    };

    // Alias mappings
    const keyMap = {
        'fabric-inventory': 'fabric',
        'cutting-digitalization': 'cutting',
        'tracking': 'production',
        'trakwel': 'trakwel',
        'fabric': 'fabric',
        'cutting': 'cutting',
        'production': 'production',
        'quality': 'quality',
        'planwel': 'planwel',
        'mtrak': 'mtrak',
        'sewiot': 'sewiot',
        'laundry': 'laundry',
        'jig': 'jig',
        'shrinkage': 'shrinkage'
    };

    window.selectProduct = function(rawKey) {
        var key = keyMap[rawKey] || rawKey;
        var p = productsData[key];
        if (!p) return;

        // Elements
        var kicker = document.getElementById('productKicker');
        var badge = document.getElementById('productBadge');
        var title = document.getElementById('productTitle');
        var desc = document.getElementById('productDescription');
        var stage1 = document.getElementById('productStageOne');
        var stage2 = document.getElementById('productStageTwo');
        var stage3 = document.getElementById('productStageThree');
        var img = document.getElementById('productImage');
        var vLabel = document.getElementById('productVisualLabel');
        var vVal = document.getElementById('productVisualValue');
        var liveSim = document.getElementById('liveSimulationOverlay');
        var copyContainer = document.getElementById('productCopyContainer');

        // Update Text
        if (kicker) kicker.textContent = p.kicker;
        if (badge) badge.textContent = p.badge;
        if (title) title.textContent = p.name;
        if (desc) desc.textContent = p.description;
        if (stage1) stage1.textContent = p.stages[0];
        if (stage2) stage2.textContent = p.stages[1];
        if (stage3) stage3.textContent = p.stages[2];
        if (vLabel) vLabel.textContent = p.label;
        if (vVal) vVal.textContent = p.value;

        // Image & Live Simulation
        if (img) {
            img.src = p.image;
            img.alt = p.alt;
            img.classList.remove('product-img-anim');
            void img.offsetWidth;
            img.classList.add('product-img-anim');
        }

        if (liveSim) {
            liveSim.style.display = p.hasLiveSim ? 'flex' : 'none';
        }

        // Trigger text re-animation
        if (copyContainer) {
            copyContainer.classList.remove('product-copy-anim');
            void copyContainer.offsetWidth;
            copyContainer.classList.add('product-copy-anim');
        }

        // Active State on Top Tab Buttons
        document.querySelectorAll('[data-choice-btn]').forEach(function(btn) {
            var btnChoice = btn.getAttribute('data-choice-btn');
            if (btnChoice === key) {
                btn.className = "product-pill px-3.5 py-1.5 rounded-full text-xs font-black transition-all bg-sky-600 text-white shadow-sm shadow-sky-500/20";
            } else {
                btn.className = "product-pill px-3 py-1.5 rounded-full text-xs font-bold transition-all bg-slate-100 text-slate-700 hover:bg-sky-50 hover:text-sky-700";
            }
        });

        // Ensure video is playing
        var vid = document.getElementById('productBgVideo');
        if (vid && vid.paused) {
            vid.play().catch(function() {});
        }
    };

    // On page load, read URL hash e.g. #fabric or #planwel
    document.addEventListener('DOMContentLoaded', function() {
        var hash = window.location.hash ? window.location.hash.substring(1) : '';
        if (hash) {
            var normalized = keyMap[hash] || hash;
            if (productsData[normalized]) {
                window.selectProduct(normalized);
                var exp = document.getElementById('product-experience');
                if (exp) {
                    setTimeout(function() {
                        exp.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 250);
                }
            }
        }
    });

    // Listen to hashchange
    window.addEventListener('hashchange', function() {
        var hash = window.location.hash ? window.location.hash.substring(1) : '';
        if (hash) {
            var normalized = keyMap[hash] || hash;
            if (productsData[normalized]) {
                window.selectProduct(normalized);
            }
        }
    });
})();
</script>
@endpush

@endsection