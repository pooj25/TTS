@extends('layouts.app')

@section('title', 'Track Tech Solutions - Reduce Defects. Boost OEE. Increase Efficiency.')

@section('content')

<style>
/* ══ BRAND COLORS ════════════════════════════════════════════════════ */
:root {
    --navy:    #0f2552;
    --navy2:   #1a3a6b;
    --amber:   #f59e0b;
    --amber2:  #d97706;
    --orange:  #ea580c;
    --red:     #dc2626;
    --white:   #ffffff;
    --off:     #f8fafc;
    --slate:   #64748b;
    --dark:    #1e293b;
}

body { background: var(--white); color: var(--dark); }

/* ── Hero ───────────────────────────────────────────────────────────── */
#hero { position: relative; min-height: 100vh; overflow: hidden; }
#hero-video {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover; z-index: 0;
}
#hero-overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(
        135deg,
        rgba(255, 255, 255, 0.86) 0%,
        rgba(240, 249, 255, 0.76) 50%,
        rgba(0, 163, 224, 0.20) 100%
    );
    backdrop-filter: blur(2px);
}
#hero-content { position: relative; z-index: 2; }

/* ── Badge pill ─────────────────────────────────────────────────────── */
.hero-badge {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 6px 18px; border-radius: 999px;
    background: rgba(245,158,11,0.15);
    border: 1px solid rgba(245,158,11,0.5);
    backdrop-filter: blur(6px);
    color: #fbbf24; font-size: 12px; font-weight: 700;
    letter-spacing: .15em; text-transform: uppercase;
    animation: fadeDown .8s ease forwards .2s; opacity: 0;
}
.hero-badge span { width:8px;height:8px;border-radius:50%;background:#fbbf24;animation:pulse 2s infinite; }

/* ── Headline animations ────────────────────────────────────────────── */
.h-anim-1 { animation: fadeUp .9s ease forwards .5s; opacity: 0; }
.h-anim-2 { animation: fadeUp .9s ease forwards .75s; opacity: 0; }
.h-anim-3 { animation: fadeUp .9s ease forwards 1.0s; opacity: 0; }
.h-anim-4 { animation: fadeUp .9s ease forwards 1.25s; opacity: 0; }

@keyframes fadeDown { from{opacity:0;transform:translateY(-16px)} to{opacity:1;transform:translateY(0)} }
@keyframes fadeUp   { from{opacity:0;transform:translateY(24px)}  to{opacity:1;transform:translateY(0)} }

/* ── Gradient text ──────────────────────────────────────────────────── */
.grad-amber {
    background: linear-gradient(90deg,#fbbf24,#f97316);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}
.grad-brand {
    background: linear-gradient(90deg,#1e3a8a,#1d4ed8,#7c3aed);
    -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text;
}

/* ── Scroll bar ─────────────────────────────────────────────────────── */
.scroll-dot { animation: scrollPulse 2s ease-in-out infinite; }
@keyframes scrollPulse {
    0%,100%{opacity:.3;transform:translateY(0)}
    50%{opacity:1;transform:translateY(6px)}
}

/* ── Section reveal ─────────────────────────────────────────────────── */
.reveal {
    opacity:0; transform:translateY(32px);
    transition: opacity .7s ease, transform .7s ease;
}
.reveal.on { opacity:1; transform:translateY(0); }

/* ── Stats counter ──────────────────────────────────────────────────── */
.stat-card {
    background:#fff; border:1px solid #e2e8f0;
    border-radius:20px; padding:28px 24px; text-align:center;
    box-shadow:0 4px 20px rgba(0,0,0,.06);
    transition:transform .3s,box-shadow .3s;
}
.stat-card:hover { transform:translateY(-4px); box-shadow:0 12px 40px rgba(15,37,82,.12); }
.stat-card .num { font-size:42px;font-weight:900;color:var(--navy);line-height:1; }
.stat-card .label { font-size:13px;color:var(--slate);margin-top:6px;font-weight:600; }

/* ── Problem cards ──────────────────────────────────────────────────── */
.prob-card {
    background:#fff; border-radius:24px;
    border:1px solid #e2e8f0;
    padding:32px; position:relative; overflow:hidden;
    transition:transform .4s, box-shadow .4s, border-color .4s;
    box-shadow:0 2px 12px rgba(0,0,0,.05);
}
.prob-card::before {
    content:''; position:absolute; top:0; left:0; right:0; height:3px;
}
.prob-card.red::before  { background:linear-gradient(90deg,#dc2626,#ef4444); }
.prob-card.amb::before  { background:linear-gradient(90deg,#f59e0b,#f97316); }
.prob-card.navy::before { background:linear-gradient(90deg,#1e3a8a,#3b82f6); }
.prob-card:hover { transform:translateY(-6px); box-shadow:0 20px 50px rgba(0,0,0,.1); }

/* ── Flow step ──────────────────────────────────────────────────────── */
.flow-step {
    display:flex; flex-direction:column; align-items:center; text-align:center;
    cursor:default;
}
.flow-icon {
    width:96px; height:96px; border-radius:28px;
    display:flex; align-items:center; justify-content:center; font-size:36px;
    margin-bottom:16px;
    box-shadow:0 8px 24px rgba(0,0,0,.1);
    transition:transform .4s cubic-bezier(.175,.885,.32,1.275), box-shadow .4s;
}
.flow-step:hover .flow-icon { transform:translateY(-8px) scale(1.08); box-shadow:0 20px 40px rgba(0,0,0,.15); }

/* ── Product cards ──────────────────────────────────────────────────── */
.prod-card {
    background:#fff; border-radius:28px; padding:36px;
    border:2px solid #f1f5f9;
    transition:transform .4s, box-shadow .4s, border-color .4s;
    box-shadow:0 4px 20px rgba(0,0,0,.05);
    position:relative; overflow:hidden;
    transform-style:preserve-3d;
}
.prod-card:hover { transform:translateY(-6px); box-shadow:0 24px 60px rgba(15,37,82,.12); }
.prod-card .prod-badge {
    display:inline-block; font-size:11px; font-weight:800;
    text-transform:uppercase; letter-spacing:.12em;
    padding:4px 12px; border-radius:999px; margin-bottom:20px;
}

/* ── Dashboard section ──────────────────────────────────────────────── */
.db-card {
    background:#fff; border-radius:28px; overflow:hidden;
    box-shadow:0 24px 80px rgba(15,37,82,.15);
    border:1px solid #e2e8f0; position:relative;
}
.callout {
    position:absolute; backdrop-filter:blur(10px);
    background:rgba(255,255,255,0.92);
    border-radius:14px; padding:10px 16px;
    box-shadow:0 4px 20px rgba(0,0,0,.12);
    display:flex; align-items:center; gap:8px;
    font-size:13px; font-weight:700;
    opacity:0; transform:translateY(8px);
    transition:opacity .6s ease, transform .6s ease;
}
.callout.on { opacity:1; transform:translateY(0); }
.callout .dot { width:8px;height:8px;border-radius:50%;flex-shrink:0; }

/* ── ROI Slider ─────────────────────────────────────────────────────── */
.roi-range { -webkit-appearance:none; appearance:none; width:100%; height:6px; border-radius:999px; outline:none; cursor:pointer; }
.roi-range::-webkit-slider-thumb {
    -webkit-appearance:none; width:22px; height:22px;
    background:#fff; border:3px solid var(--amber); border-radius:50%;
    box-shadow:0 0 0 4px rgba(245,158,11,.2); cursor:pointer;
    transition:box-shadow .2s;
}
.roi-range::-webkit-slider-thumb:hover { box-shadow:0 0 0 8px rgba(245,158,11,.2); }
.roi-range::-moz-range-thumb {
    width:22px; height:22px; background:#fff;
    border:3px solid var(--amber); border-radius:50%; cursor:pointer;
}

/* ── ROI result cards ───────────────────────────────────────────────── */
.roi-result {
    background:#fff; border-radius:20px; padding:24px;
    border:1px solid #e2e8f0; text-align:center;
    box-shadow:0 4px 16px rgba(0,0,0,.05);
    transition:transform .3s, box-shadow .3s;
}
.roi-result:hover { transform:translateY(-4px); box-shadow:0 12px 32px rgba(0,0,0,.1); }
.roi-result .val { font-size:30px; font-weight:900; line-height:1; margin-bottom:6px; }
.roi-result .lbl { font-size:12px; color:var(--slate); font-weight:600; text-transform:uppercase; letter-spacing:.08em; }

/* ── Case study cards ───────────────────────────────────────────────── */
.cs-card {
    background:#fff; border-radius:24px; padding:32px;
    border:1px solid #e2e8f0;
    box-shadow:0 4px 20px rgba(0,0,0,.05);
    transition:transform .4s, box-shadow .4s;
    position:relative; overflow:hidden;
}
.cs-card:hover { transform:translateY(-6px); box-shadow:0 24px 60px rgba(15,37,82,.12); }
.cs-card .accent-bar { position:absolute; top:0; left:0; right:0; height:4px; border-radius:24px 24px 0 0; }

/* ── CTA section ────────────────────────────────────────────────────── */
.cta-section {
    background:linear-gradient(135deg,var(--navy) 0%,#1d4ed8 60%,var(--navy2) 100%);
    position:relative; overflow:hidden;
}
.cta-ring {
    position:absolute; border-radius:50%;
    border:1px solid rgba(255,255,255,.07);
    top:50%; left:50%; transform:translate(-50%,-50%);
    animation:ringPulse 4s ease-in-out infinite;
}
@keyframes ringPulse {
    0%,100%{opacity:.3;transform:translate(-50%,-50%) scale(1)}
    50%{opacity:.6;transform:translate(-50%,-50%) scale(1.04)}
}

/* ── Marquee ────────────────────────────────────────────────────────── */
@keyframes marqueeRun {
    from{transform:translateX(0)} to{transform:translateX(-50%)}
}
.marquee-run { animation:marqueeRun 28s linear infinite; display:flex; gap:64px; white-space:nowrap; }

/* ── Number counter animation ───────────────────────────────────────── */
@keyframes countUp { from{opacity:0;transform:scale(.8)} to{opacity:1;transform:scale(1)} }
.counted { animation:countUp .5s ease forwards; }

/* ── Floating video badge ───────────────────────────────────────────── */
.video-badge {
    position:absolute; bottom:32px; left:32px; z-index:3;
    background:rgba(255,255,255,0.12); backdrop-filter:blur(12px);
    border:1px solid rgba(255,255,255,0.2);
    border-radius:16px; padding:14px 20px;
    animation:fadeUp .8s ease forwards 1.5s; opacity:0;
    display:flex; align-items:center; gap:12px;
}
</style>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 1: HERO — Apparel Manufacturing Video Background
     ══════════════════════════════════════════════════════════════════ --}}
<section id="hero">

    {{-- Background Video: Apparel manufacturing --}}
    <video id="hero-video" autoplay muted loop playsinline preload="auto"
           poster="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1920&q=60">
        <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
        <source src="https://videos.pexels.com/video-files/3295499/3295499-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>

    <div id="hero-overlay"></div>

    {{-- Animated grid overlay --}}
    <div id="hero-content" class="min-h-screen flex flex-col justify-center items-center text-center px-6 pt-28 pb-20">

        <div class="hero-badge mb-8 bg-sky-500/10 border-sky-500/40 text-sky-700">
            <span class="bg-sky-500"></span>
            Industry 4.0 · Apparel &amp; Textile Manufacturing
        </div>

        <h1 class="max-w-5xl mx-auto leading-[1.05] tracking-tight text-slate-900" style="font-size:clamp(2.5rem,6vw,5.5rem);font-weight:900;">
            <span class="h-anim-1 block">Reduce Defects</span>
            <span class="h-anim-2 block text-sky-600">by 40%.</span>
            <span class="h-anim-3 block">Boost OEE</span>
            <span class="h-anim-4 block text-teal-600">by 25%.</span>
        </h1>

        <p class="h-anim-2 mt-8 text-lg sm:text-xl max-w-3xl mx-auto leading-relaxed font-semibold text-slate-700">
            Track Tech Solutions gives apparel manufacturers real-time visibility across
            fabric, cutting, production, and quality — so you make smarter decisions, faster.
        </p>

        <div class="h-anim-3 mt-10 flex flex-col sm:flex-row items-center justify-center gap-4 w-full">
            <a href="/contact"
               class="group flex items-center gap-3 px-10 py-4 rounded-full text-white font-bold text-lg shadow-xl transition-all hover:scale-105 bg-gradient-to-r from-sky-500 to-teal-600 hover:from-sky-600 hover:to-teal-700">
                Book a Demo
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <button onclick="document.getElementById('open-apparel-video-modal').click()"
               class="flex items-center gap-2 px-10 py-4 rounded-full font-bold text-slate-800 text-lg transition-all bg-white/80 hover:bg-white border-2 border-slate-300 shadow-md backdrop-blur-md">
                <svg class="w-5 h-5 text-sky-500" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                Watch Apparel Videos 🎬
            </button>
        </div>

        {{-- Scroll indicator --}}
        <div class="h-anim-4 mt-16 flex flex-col items-center gap-2" style="opacity:.6">
            <span style="font-size:10px;color:#334155;letter-spacing:.2em;text-transform:uppercase;font-weight:700;">Scroll</span>
            <div class="scroll-dot w-1 h-10 rounded-full" style="background:linear-gradient(to bottom,rgba(15,23,42,0.8),transparent);"></div>
        </div>
    </div>

    {{-- Floating badge --}}
    <div class="video-badge hidden md:flex bg-white/90 border border-slate-200 shadow-lg text-slate-800">
        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 bg-emerald-100">
            <div class="w-3 h-3 rounded-full animate-pulse bg-emerald-500"></div>
        </div>
        <div>
            <div class="font-bold text-xs text-slate-900">Live Factory Motion</div>
            <div class="text-[11px] text-slate-600">Garment line tracking</div>
        </div>
    </div>

</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 2: STATS BAR
     ══════════════════════════════════════════════════════════════════ --}}
<section class="py-14" style="background:#f8fafc;border-top:1px solid #e2e8f0;border-bottom:1px solid #e2e8f0;">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['250+', 'Active Production Lines'],
                ['40%',  'Avg Defect Reduction'],
                ['25%',  'OEE Improvement'],
                ['90',   'Days to Full ROI'],
            ] as $s)
            <div class="stat-card reveal">
                <div class="num">{{ $s[0] }}</div>
                <div class="label">{{ $s[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 3: TRUST BAR
     ══════════════════════════════════════════════════════════════════ --}}
<section class="py-10 bg-white overflow-hidden" style="border-bottom:1px solid #f1f5f9;">
    <p class="text-center mb-6" style="font-size:11px;font-weight:700;color:#94a3b8;letter-spacing:.25em;text-transform:uppercase;">Trusted by Leading Manufacturers</p>
    <div class="flex overflow-hidden" style="mask-image:linear-gradient(to right,transparent,black 8%,black 92%,transparent);">
        <div class="marquee-run">
            @foreach(['Arvind Ltd', 'Shahi Exports', 'PDS Group', 'Modelama Exports', 'Armstrong Intl', 'Pearl Global', 'Gokaldas Exports', 'KPR Mill Ltd', 'Arvind Ltd', 'Shahi Exports', 'PDS Group', 'Modelama Exports', 'Armstrong Intl', 'Pearl Global', 'Gokaldas Exports', 'KPR Mill Ltd'] as $c)
            <span style="font-weight:800;font-size:18px;color:#1e293b;letter-spacing:-.01em;flex-shrink:0;">{{ $c }}</span>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 4: PROBLEM
     ══════════════════════════════════════════════════════════════════ --}}
<section id="problem" class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                  style="background:#fff1f2;color:#dc2626;border:1px solid #fecaca;">The Challenge</span>
            <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:900;color:var(--navy);line-height:1.15;">
                Your Factory Is Losing Money —<br>
                <span style="color:#dc2626;">And You Don't Know Where</span>
            </h2>
            <p class="mt-5 text-lg max-w-2xl mx-auto" style="color:var(--slate);">Every day without real-time visibility, manufacturers face the same silent losses.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="prob-card red reveal">
                <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:#fff1f2;">
                    <svg class="w-7 h-7" style="color:#dc2626" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"/></svg>
                </div>
                <h3 class="text-xl font-black mb-3" style="color:var(--navy)">3–5% Fabric Wasted Per Order</h3>
                <p class="leading-relaxed mb-5" style="color:var(--slate)">Manual spreading and poor inventory tracking silently drain fabric budgets — adding up to lakhs per month with no visibility on where it went.</p>
                <div class="inline-block px-3 py-1 rounded-full text-sm font-black" style="background:#fff1f2;color:#dc2626;">₹5–15L wasted / month</div>
            </div>

            <div class="prob-card amb reveal" style="transition-delay:.1s">
                <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:#fffbeb;">
                    <svg class="w-7 h-7" style="color:#f59e0b" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="text-xl font-black mb-3" style="color:var(--navy)">2–3 Hours Lost to Manual Reporting</h3>
                <p class="leading-relaxed mb-5" style="color:var(--slate)">Supervisors filling tally sheets, managers waiting for end-of-day reports — decisions are made on yesterday's data while production suffers today.</p>
                <div class="inline-block px-3 py-1 rounded-full text-sm font-black" style="background:#fffbeb;color:#d97706;">15+ hrs/week per supervisor</div>
            </div>

            <div class="prob-card navy reveal" style="transition-delay:.2s">
                <div class="w-14 h-14 rounded-2xl flex items-center justify-center mb-6" style="background:#eff6ff;">
                    <svg class="w-7 h-7" style="color:#1d4ed8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
                <h3 class="text-xl font-black mb-3" style="color:var(--navy)">Defects Caught Too Late</h3>
                <p class="leading-relaxed mb-5" style="color:var(--slate)">End-of-line quality checks mean defects cascade through the entire batch — rework, buyer rejections, and chargebacks destroy margins every season.</p>
                <div class="inline-block px-3 py-1 rounded-full text-sm font-black" style="background:#eff6ff;color:#1d4ed8;">8–12% industry defect rate</div>
            </div>

        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 5: SOLUTION FLOW
     ══════════════════════════════════════════════════════════════════ --}}
<section id="how-it-works" class="py-28" style="background:var(--off);">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-20 reveal">
            <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                  style="background:#eff6ff;color:#1d4ed8;border:1px solid #bfdbfe;">One Platform</span>
            <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:900;color:var(--navy);line-height:1.15;">
                Complete Visibility.<br>
                <span class="grad-brand">Fabric to Finish.</span>
            </h2>
            <p class="mt-5 text-lg max-w-3xl mx-auto" style="color:var(--slate)">Track Tech connects every stage of your production floor into one intelligent platform — giving supervisors, managers, and leadership real-time insights that drive action.</p>
        </div>

        {{-- Flow --}}
        <div class="relative">
            {{-- Connector --}}
            <div class="hidden lg:block absolute" style="top:48px;left:calc(10% + 48px);right:calc(10% + 48px);height:2px;background:linear-gradient(90deg,#f59e0b,#f97316,#1d4ed8,#7c3aed,#10b981);opacity:0.4;"></div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach([
                    ['🧵', 'Fabric',     'Intake & store tracking',    '#f59e0b', '#fffbeb'],
                    ['✂️', 'Cutting',    'Spreading & cut plans',       '#f97316', '#fff7ed'],
                    ['🏭', 'Production', 'Line & operator output',      '#1d4ed8', '#eff6ff'],
                    ['🔍', 'Quality',    'Defect capture at source',    '#7c3aed', '#f5f3ff'],
                    ['📦', 'Delivery',   'Order fulfilment tracking',   '#059669', '#ecfdf5'],
                ] as $i => $fl)
                <div class="flow-step reveal" style="transition-delay:{{ $i * 0.1 }}s">
                    <div class="flow-icon" style="background:{{ $fl[4] }};border:2px solid {{ $fl[3] }}22;">
                        <span>{{ $fl[0] }}</span>
                    </div>
                    <h4 class="font-black text-lg mb-1" style="color:var(--navy)">{{ $fl[1] }}</h4>
                    <p class="text-sm" style="color:var(--slate)">{{ $fl[2] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ══════════════════════════════════════════════════════════════════
     INTERACTIVE ANIMATED APPAREL MANUFACTURING FLOOR
     ══════════════════════════════════════════════════════════════════ --}}
<section class="py-24 bg-gradient-to-b from-slate-50 to-white relative overflow-hidden border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold bg-sky-100 text-sky-700 border border-sky-200 mb-4">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Live Factory Simulator
            </span>
            <h2 class="text-3xl md:text-5xl font-black text-slate-900 tracking-tight">
                Apparel Manufacturing <span class="text-sky-600">In Real-Time Motion</span>
            </h2>
            <p class="mt-4 text-slate-600 text-lg font-medium">
                Experience how Track Tech digitizes fabric cutting, sewing lines, quality inspection, and dispatch with zero blind spots.
            </p>
        </div>

        <!-- Interactive Animated Apparel Stage Tabs -->
        <div class="grid lg:grid-cols-12 gap-8 items-center bg-white rounded-3xl p-6 lg:p-8 shadow-xl border border-slate-200">
            <!-- Left Controls & Live Metrics -->
            <div class="lg:col-span-5 space-y-4">
                <div class="p-4 rounded-2xl bg-sky-50 border border-sky-100 cursor-pointer transition-all hover:shadow-md border-l-4 border-l-sky-500" id="sim-tab-1" onclick="switchSimStage('cutting')">
                    <div class="flex justify-between items-center mb-1">
                        <span class="font-bold text-slate-900 flex items-center gap-2">✂️ 1. Automatic Fabric Cutting</span>
                        <span class="text-xs font-bold text-sky-600 bg-white px-2 py-0.5 rounded-md border border-sky-200">Laser Precision</span>
                    </div>
                    <p class="text-xs text-slate-600">Computerized nesting reduces fabric wastage by 3-5% per lay.</p>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 cursor-pointer transition-all hover:shadow-md" id="sim-tab-2" onclick="switchSimStage('sewing')">
                    <div class="flex justify-between items-center mb-1">
                        <span class="font-bold text-slate-900 flex items-center gap-2">🪡 2. High-Speed Sewing Assembly</span>
                        <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md border border-emerald-200">SMV Optimized</span>
                    </div>
                    <p class="text-xs text-slate-600">Real-time piece tracking on every machine operator workstation.</p>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 cursor-pointer transition-all hover:shadow-md" id="sim-tab-3" onclick="switchSimStage('qc')">
                    <div class="flex justify-between items-center mb-1">
                        <span class="font-bold text-slate-900 flex items-center gap-2">🔍 3. In-Line Quality Inspection</span>
                        <span class="text-xs font-bold text-purple-600 bg-purple-50 px-2 py-0.5 rounded-md border border-purple-200">Instant DHU</span>
                    </div>
                    <p class="text-xs text-slate-600">Immediate defect logging prevents bad garments from cascading.</p>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 cursor-pointer transition-all hover:shadow-md" id="sim-tab-4" onclick="switchSimStage('packing')">
                    <div class="flex justify-between items-center mb-1">
                        <span class="font-bold text-slate-900 flex items-center gap-2">📦 4. RFID Bundle Packing & Dispatch</span>
                        <span class="text-xs font-bold text-amber-600 bg-amber-50 px-2 py-0.5 rounded-md border border-amber-200">100% Accuracy</span>
                    </div>
                    <p class="text-xs text-slate-600">Automated carton validation and buyer audit readiness.</p>
                </div>
            </div>

            <!-- Right Interactive Canvas / Video Stage -->
            <div class="lg:col-span-7 relative rounded-2xl overflow-hidden bg-slate-900 border border-slate-200 shadow-inner group min-h-[380px] flex items-center justify-center">
                <!-- Video Display -->
                <video id="sim-interactive-video" class="w-full h-full object-cover absolute inset-0" autoplay loop muted playsinline>
                    <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
                </video>

                <!-- Dynamic Overlay Canvas with Interactive Apparel Graphics -->
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-slate-950/20 p-6 flex flex-col justify-between pointer-events-none">
                    <div class="flex justify-between items-start">
                        <span id="sim-stage-badge" class="px-3 py-1 rounded-full text-xs font-extrabold bg-sky-500 text-white shadow-md">
                            ✂️ FABRIC CUTTING STAGE
                        </span>
                        <span class="px-3 py-1 rounded-full text-xs font-bold bg-white/90 backdrop-blur-md text-slate-800 border border-white/40">
                            LIVE LINE 04 · SEWING BAY A
                        </span>
                    </div>

                    <!-- Live KPI Ticker -->
                    <div class="grid grid-cols-3 gap-3 bg-white/90 backdrop-blur-md p-4 rounded-xl border border-slate-200 shadow-xl pointer-events-auto">
                        <div>
                            <div class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">Line Speed</div>
                            <div class="text-lg font-black text-slate-900" id="kpi-speed">142 pcs/hr</div>
                        </div>
                        <div>
                            <div class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">Defect Rate</div>
                            <div class="text-lg font-black text-emerald-600" id="kpi-defects">0.8%</div>
                        </div>
                        <div>
                            <div class="text-[10px] uppercase tracking-wider text-slate-500 font-bold">SMV Efficiency</div>
                            <div class="text-lg font-black text-sky-600" id="kpi-efficiency">94.2%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function switchSimStage(stage) {
    var video = document.getElementById('sim-interactive-video');
    var badge = document.getElementById('sim-stage-badge');
    var speed = document.getElementById('kpi-speed');
    var defects = document.getElementById('kpi-defects');
    var efficiency = document.getElementById('kpi-efficiency');

    var tabs = ['sim-tab-1', 'sim-tab-2', 'sim-tab-3', 'sim-tab-4'];
    tabs.forEach(function(t) {
        var el = document.getElementById(t);
        if (el) {
            el.className = "p-4 rounded-2xl bg-slate-50 border border-slate-200 cursor-pointer transition-all hover:shadow-md";
        }
    });

    if (stage === 'cutting') {
        document.getElementById('sim-tab-1').className = "p-4 rounded-2xl bg-sky-50 border border-sky-100 cursor-pointer transition-all hover:shadow-md border-l-4 border-l-sky-500";
        if (video) video.src = "https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4";
        if (badge) badge.textContent = "✂️ FABRIC CUTTING STAGE";
        if (speed) speed.textContent = "185 pcs/hr";
        if (defects) defects.textContent = "0.4%";
        if (efficiency) efficiency.textContent = "96.8%";
    } else if (stage === 'sewing') {
        document.getElementById('sim-tab-2').className = "p-4 rounded-2xl bg-emerald-50 border border-emerald-100 cursor-pointer transition-all hover:shadow-md border-l-4 border-l-emerald-500";
        if (video) video.src = "https://videos.pexels.com/video-files/3295499/3295499-hd_1920_1080_30fps.mp4";
        if (badge) badge.textContent = "🪡 SEWING & ASSEMBLY STAGE";
        if (speed) speed.textContent = "142 pcs/hr";
        if (defects) defects.textContent = "1.2%";
        if (efficiency) efficiency.textContent = "92.4%";
    } else if (stage === 'qc') {
        document.getElementById('sim-tab-3').className = "p-4 rounded-2xl bg-purple-50 border border-purple-100 cursor-pointer transition-all hover:shadow-md border-l-4 border-l-purple-500";
        if (video) video.src = "https://videos.pexels.com/video-files/5532766/5532766-hd_1920_1080_25fps.mp4";
        if (badge) badge.textContent = "🔍 QUALITY CONTROL STAGE";
        if (speed) speed.textContent = "210 pcs/hr";
        if (defects) defects.textContent = "0.2%";
        if (efficiency) efficiency.textContent = "98.1%";
    } else if (stage === 'packing') {
        document.getElementById('sim-tab-4').className = "p-4 rounded-2xl bg-amber-50 border border-amber-100 cursor-pointer transition-all hover:shadow-md border-l-4 border-l-amber-500";
        if (video) video.src = "https://videos.pexels.com/video-files/4487373/4487373-hd_1920_1080_25fps.mp4";
        if (badge) badge.textContent = "📦 PACKING & DISPATCH STAGE";
        if (speed) speed.textContent = "320 pcs/hr";
        if (defects) defects.textContent = "0.0%";
        if (efficiency) efficiency.textContent = "99.5%";
    }
    if (video) video.play();
}
</script>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 6: PRODUCTS — 4 Business-Benefit Cards
     ══════════════════════════════════════════════════════════════════ --}}
<section id="products" class="py-28 bg-white">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                  style="background:#fffbeb;color:#d97706;border:1px solid #fde68a;">Our Products</span>
            <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:900;color:var(--navy);line-height:1.15;">
                Built for Every Stage<br><span class="grad-amber">of Your Factory</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach([
                ['🧵', 'Fabric Management',    'Save 1.5–3% fabric per order',               'Track every roll from warehouse to spreading table. Smart laying plans minimise waste and flag overconsumption in real time.',
                 ['Roll-level tracking','Relaxation & shrinkage records','AI spreading optimisation','Auto budget alerts'], '#f59e0b', '#fffbeb', '#fef3c7'],
                ['✂️', 'Cutting Management',   'Reduce spreading waste by 40%',              'Digital cut plans, marker efficiency tracking, and barcode-based bundle tagging give complete traceability from cutting table to line.',
                 ['Digital cut plans','Marker efficiency KPIs','Bundle barcode tagging','Cutting loss reports'], '#f97316', '#fff7ed', '#fed7aa'],
                ['🏭', 'Production Tracking',  'Real-time output per line, per operator',    'Replace tally sheets with Android terminals. Supervisors see live output per line, section, and operator — with shift reports and bottleneck alerts.',
                 ['Live dashboard per line','Operator-level KPIs','Auto shift reports','Bottleneck alerts'], '#1d4ed8', '#eff6ff', '#bfdbfe'],
                ['🔍', 'Quality Management',   'Catch defects at source, not end-of-line',   'Digital inline QC checkpoints capture defects by type, operator, and garment part. Root cause analysis slashes rework and buyer rejections.',
                 ['Inline defect capture','Root cause analysis','Defect trend reports','Buyer report exports'], '#7c3aed', '#f5f3ff', '#ddd6fe'],
            ] as $i => $p)
            <div class="prod-card reveal" style="transition-delay:{{ $i * 0.1 }}s">
                <div class="absolute top-0 left-0 right-0 h-1 rounded-t-3xl" style="background:{{ $p[5] }};"></div>
                <div class="prod-badge" style="background:{{ $p[7] }};color:{{ $p[5] }};">{{ $p[2] }}</div>

                <div class="flex items-start gap-5 mb-5">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl flex-shrink-0" style="background:{{ $p[6] }};">{{ $p[0] }}</div>
                    <div>
                        <h3 class="text-2xl font-black mb-2" style="color:var(--navy)">{{ $p[1] }}</h3>
                        <p class="leading-relaxed" style="color:var(--slate);font-size:15px">{{ $p[3] }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 mb-6">
                    @foreach($p[4] as $f)
                    <div class="flex items-center gap-2 text-sm font-medium" style="color:#1e293b">
                        <svg class="w-4 h-4 flex-shrink-0" style="color:{{ $p[5] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        {{ $f }}
                    </div>
                    @endforeach
                </div>

                <a href="/products" class="inline-flex items-center gap-2 font-black text-sm hover:gap-3 transition-all" style="color:{{ $p[5] }}">
                    Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 7: TECHNOLOGY — Dashboard + Video
     ══════════════════════════════════════════════════════════════════ --}}
<section id="technology" class="py-28" style="background:var(--off);">
    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- Left --}}
            <div class="reveal">
                <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                      style="background:#ecfdf5;color:#059669;border:1px solid #a7f3d0;">Live Intelligence</span>
                <h2 style="font-size:clamp(2rem,4vw,3rem);font-weight:900;color:var(--navy);line-height:1.15;margin-bottom:20px;">
                    See Your Factory.<br><span class="grad-amber">In Real Time.</span>
                </h2>
                <p class="text-lg leading-relaxed mb-8" style="color:var(--slate)">A single dashboard connects every line, machine, and operator. Spot bottlenecks before they cascade. Act in minutes, not days.</p>

                <div class="space-y-4">
                    @foreach([
                        ['📊', '#fffbeb', '#f59e0b', 'Live OEE Per Machine',       'Know exactly which machines are underperforming — right now, not tomorrow morning.'],
                        ['⚡', '#eff6ff', '#1d4ed8', 'Instant Bottleneck Alerts',   'Get notified before delays impact your delivery date.'],
                        ['📱', '#f5f3ff', '#7c3aed', 'Access from Anywhere',        'Factory floor, office, or anywhere in the world — on any device.'],
                    ] as $f)
                    <div class="flex gap-4 p-4 rounded-2xl bg-white border hover:shadow-md transition-all group" style="border-color:#e2e8f0;">
                        <div class="w-12 h-12 rounded-xl flex items-center justify-center text-xl flex-shrink-0 group-hover:scale-110 transition-transform" style="background:{{ $f[1] }};">{{ $f[0] }}</div>
                        <div>
                            <div class="font-black text-base mb-1" style="color:var(--navy)">{{ $f[2] }}</div>
                            <div class="text-sm" style="color:var(--slate)">{{ $f[3] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="/contact"
                   class="inline-flex items-center gap-2 mt-8 px-8 py-4 rounded-full font-black text-white text-base transition-all hover:scale-105 hover:shadow-xl"
                   style="background:linear-gradient(135deg,#f59e0b,#ea580c);box-shadow:0 6px 24px rgba(245,158,11,0.35);">
                    See Live Dashboard
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            {{-- Right: Dashboard mockup with video --}}
            <div class="reveal db-card" style="transition-delay:.2s">
                <div class="relative overflow-hidden" style="border-radius:28px;">

                    {{-- Mini video or image --}}
                    <video autoplay muted loop playsinline class="w-full object-cover" style="height:360px;filter:saturate(0.7) brightness(0.85);"
                           poster="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80">
                        <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
                    </video>
                    <div class="absolute inset-0" style="background:linear-gradient(180deg,rgba(15,37,82,0.3) 0%,rgba(15,37,82,0.6) 100%);"></div>

                    {{-- KPI overlay bar --}}
                    <div class="absolute top-4 left-4 right-4 flex gap-2">
                        @foreach([['#f59e0b','Line 3','OEE: 92%'],['#22c55e','Order 4521','85% done'],['#ef4444','Line 7','Alert!']] as $k)
                        <div class="flex-1 rounded-xl px-3 py-2 text-center" style="background:rgba(255,255,255,0.12);backdrop-filter:blur(8px);border:1px solid {{ $k[0] }}44;">
                            <div class="text-xs font-bold" style="color:{{ $k[0] }}">{{ $k[1] }}</div>
                            <div class="text-xs text-white font-black">{{ $k[2] }}</div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Callout bubbles --}}
                    <div class="callout" id="cb1" style="top:80px;right:16px;border:1px solid #f59e0b44;">
                        <span class="dot" style="background:#f59e0b;"></span>
                        <span style="color:#92400e;font-size:13px;">Line 3: 92% Efficiency ↑</span>
                    </div>
                    <div class="callout" id="cb2" style="top:130px;left:16px;border:1px solid #ef444444;">
                        <span class="dot" style="background:#ef4444;"></span>
                        <span style="color:#991b1b;font-size:13px;">Machine 7: Maintenance Due</span>
                    </div>
                    <div class="callout" id="cb3" style="bottom:60px;right:16px;border:1px solid #22c55e44;">
                        <span class="dot" style="background:#22c55e;"></span>
                        <span style="color:#14532d;font-size:13px;">Defect Rate: 2.1% ↓</span>
                    </div>
                    <div class="callout" id="cb4" style="bottom:16px;left:16px;border:1px solid #3b82f644;">
                        <span class="dot" style="background:#3b82f6;"></span>
                        <span style="color:#1e3a8a;font-size:13px;">Order #4521: On Track ✓</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 8: ROI CALCULATOR
     ══════════════════════════════════════════════════════════════════ --}}
<section id="roi-calculator" class="py-28 bg-white">
    <div class="max-w-6xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                  style="background:#fffbeb;color:#d97706;border:1px solid #fde68a;">ROI Calculator</span>
            <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:900;color:var(--navy);line-height:1.15;">
                Calculate Your <span class="grad-amber">Factory's Savings</span>
            </h2>
            <p class="mt-5 text-lg max-w-2xl mx-auto" style="color:var(--slate)">Adjust the sliders. See your projected savings instantly with fully transparent formulas.</p>
        </div>

        <div class="reveal"
             x-data="{
                lines:10, operators:40, dailyOutput:800,
                FC:500000, FS:0.02, OC:15000, EG:0.15, EF:0.10, IC:200000,
                get mFab(){ return this.lines*this.FC*this.FS },
                get mLab(){ return this.lines*this.operators*this.OC*this.EG*this.EF },
                get mTotal(){ return this.mFab+this.mLab },
                get annual(){ return this.mTotal*12 },
                get implCost(){ return this.lines*this.IC },
                get payback(){ return Math.round(this.implCost/this.mTotal) },
                get roi(){ return Math.round(((this.annual-this.implCost)/this.implCost)*100) },
                fmt(v){
                    if(v>=10000000) return '₹'+(v/10000000).toFixed(1)+'Cr';
                    if(v>=100000) return '₹'+(v/100000).toFixed(1)+'L';
                    return '₹'+Math.round(v).toLocaleString('en-IN');
                }
             }">

            <div class="grid lg:grid-cols-2 gap-8">

                {{-- Sliders --}}
                <div class="rounded-3xl p-8 border" style="background:#f8fafc;border-color:#e2e8f0;">
                    <h3 class="font-black text-xl mb-8" style="color:var(--navy)">Your Factory Details</h3>

                    @foreach([
                        ['lines', 'Production Lines', 1, 50, 1, 18],
                        ['operators', 'Operators Per Line', 10, 80, 1, 43],
                        ['dailyOutput', 'Daily Output / Line (pieces)', 200, 2000, 50, 33],
                    ] as $slider)
                    <div class="mb-8">
                        <div class="flex justify-between items-center mb-3">
                            <label class="font-semibold" style="color:#1e293b">{{ $slider[1] }}</label>
                            <span class="text-xl font-black" style="color:var(--amber)" x-text="{{ $slider[0] }}"></span>
                        </div>
                        <input type="range" min="{{ $slider[2] }}" max="{{ $slider[3] }}" step="{{ $slider[4] }}"
                               x-model="{{ $slider[0] }}"
                               class="roi-range"
                               style="background:linear-gradient(to right,#f59e0b 0%,#f59e0b {{ $slider[5] }}%,#e2e8f0 {{ $slider[5] }}%)"
                               x-on:input="$el.style.background='linear-gradient(to right,#f59e0b 0%,#f59e0b '+(($event.target.value-{{ $slider[2] }})/({{ $slider[3] }}-{{ $slider[2] }})*100)+'%,#e2e8f0 '+(($event.target.value-{{ $slider[2] }})/({{ $slider[3] }}-{{ $slider[2] }})*100)+'%)'">
                        <div class="flex justify-between text-xs mt-2" style="color:#94a3b8"><span>{{ $slider[2] }}</span><span>{{ $slider[3] }}</span></div>
                    </div>
                    @endforeach

                    <details class="mt-2">
                        <summary class="text-xs cursor-pointer hover:underline" style="color:#94a3b8">View calculation assumptions ▾</summary>
                        <div class="mt-3 text-xs space-y-1 pl-3" style="color:#94a3b8;border-left:2px solid #e2e8f0">
                            <p>• Fabric cost per line/month: ₹5,00,000</p>
                            <p>• Fabric savings achieved: 2%</p>
                            <p>• Operator cost/month: ₹15,000</p>
                            <p>• Efficiency gain: 15% (10% labour-attributable)</p>
                            <p>• Implementation cost: ₹2,00,000 per line</p>
                        </div>
                    </details>
                </div>

                {{-- Results --}}
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="roi-result">
                            <div class="val" style="color:#059669" x-text="fmt(annual)"></div>
                            <div class="lbl">Annual Savings</div>
                        </div>
                        <div class="roi-result">
                            <div class="val" style="color:#1d4ed8">15<span style="font-size:18px">%</span></div>
                            <div class="lbl">Productivity Gain</div>
                        </div>
                        <div class="roi-result">
                            <div class="val" style="color:#7c3aed" x-text="payback+' mo'"></div>
                            <div class="lbl">Payback Period</div>
                        </div>
                        <div class="roi-result">
                            <div class="val" style="color:var(--amber)" x-text="roi+'%'"></div>
                            <div class="lbl">First Year ROI</div>
                        </div>
                    </div>

                    <div class="rounded-2xl p-6 border" style="background:#f8fafc;border-color:#e2e8f0;">
                        @foreach([
                            ['Monthly Fabric Savings','mFab','#059669'],
                            ['Monthly Labour Savings','mLab','#059669'],
                            ['Implementation Cost','implCost','#64748b'],
                        ] as $row)
                        <div class="flex justify-between text-sm py-2" style="border-bottom:1px solid #f1f5f9">
                            <span style="color:var(--slate)">{{ $row[0] }}</span>
                            <span class="font-black" style="color:{{ $row[2] }}" x-text="fmt({{ $row[1] }})"></span>
                        </div>
                        @endforeach
                        <div class="flex justify-between pt-3 text-base font-black">
                            <span style="color:var(--navy)">Total Monthly Savings</span>
                            <span style="color:#059669" x-text="fmt(mTotal)"></span>
                        </div>
                    </div>

                    <a href="/contact"
                       class="block w-full text-center py-4 rounded-2xl font-black text-white text-lg transition-all hover:scale-[1.02] hover:shadow-xl"
                       style="background:linear-gradient(135deg,#f59e0b,#ea580c);box-shadow:0 6px 24px rgba(245,158,11,0.3);">
                        Get Your Personalised ROI Report →
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 9: CASE STUDIES
     ══════════════════════════════════════════════════════════════════ --}}
<section id="case-studies" class="py-28" style="background:var(--off);">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-16 reveal">
            <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-5"
                  style="background:#fffbeb;color:#d97706;border:1px solid #fde68a;">Case Studies</span>
            <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:900;color:var(--navy);line-height:1.15;">Real Results from Real Factories</h2>
            <p class="mt-5 text-lg max-w-2xl mx-auto" style="color:var(--slate)">Measurable before-and-after results from manufacturers across South Asia.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['Shahi Exports',  'Quality Management',    '8.2% → 2.1%',  'Defect Rate',       '"We reduced buyer chargebacks by 70% within 3 months of deploying Track Tech\'s quality module."', '— VP Operations, Shahi Exports',        '#dc2626'],
                ['Arvind Ltd',     'Fabric Management',     '4.1% → 1.6%',  'Fabric Wastage',    '"Fabric savings alone paid for the entire implementation within 6 weeks. The ROI was immediate."', '— Head of Manufacturing, Arvind Ltd',   '#f59e0b'],
                ['PDS Group',      'Production Tracking',   '67% → 89%',    'Line Efficiency',   '"Supervisors now spend time on improvements, not paperwork. Decision-making speed has transformed."', '— Factory Manager, PDS Group',        '#1d4ed8'],
            ] as $i => $cs)
            <div class="cs-card reveal" style="transition-delay:{{ $i * 0.15 }}s">
                <div class="accent-bar" style="background:{{ $cs[6] }};"></div>
                <div class="flex items-start justify-between mb-6 pt-2">
                    <div>
                        <div class="font-black text-lg" style="color:var(--navy)">{{ $cs[0] }}</div>
                        <div class="text-sm" style="color:var(--slate)">{{ $cs[1] }}</div>
                    </div>
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center font-black text-lg border-2" style="color:{{ $cs[6] }};border-color:{{ $cs[6] }}44;background:{{ $cs[6] }}11;">✓</div>
                </div>
                <div class="mb-2">
                    <span class="text-3xl font-black" style="color:{{ $cs[6] }}">{{ $cs[2] }}</span>
                </div>
                <div class="text-sm font-bold mb-6" style="color:var(--slate)">{{ $cs[3] }}</div>
                <blockquote class="text-sm leading-relaxed italic mb-3 pl-4" style="color:var(--slate);border-left:3px solid {{ $cs[6] }}44;">{{ $cs[4] }}</blockquote>
                <div class="text-xs font-bold" style="color:#94a3b8">{{ $cs[5] }}</div>
                <a href="/contact" class="inline-flex items-center gap-1 mt-5 text-sm font-black hover:gap-2 transition-all" style="color:{{ $cs[6] }}">Read Full Story →</a>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══════════════════════════════════════════════════════════════════
     SECTION 10: FINAL CTA
     ══════════════════════════════════════════════════════════════════ --}}
<section class="cta-section py-32 relative overflow-hidden">
    <div class="cta-ring" style="width:300px;height:300px;animation-delay:0s;"></div>
    <div class="cta-ring" style="width:500px;height:500px;animation-delay:1s;"></div>
    <div class="cta-ring" style="width:700px;height:700px;animation-delay:2s;"></div>
    <div class="cta-ring" style="width:900px;height:900px;animation-delay:3s;"></div>

    {{-- Video texture in background --}}
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-10 z-0"
           style="mix-blend-mode:screen;">
        <source src="https://videos.pexels.com/video-files/3295499/3295499-hd_1920_1080_30fps.mp4" type="video/mp4">
    </video>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center reveal">
        <span class="inline-block px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest mb-8"
              style="background:rgba(245,158,11,0.2);color:#fbbf24;border:1px solid rgba(245,158,11,0.4);">Start Today</span>
        <h2 style="font-size:clamp(2.2rem,5vw,4rem);font-weight:900;color:#fff;line-height:1.1;margin-bottom:20px;">
            See How Much Your<br>
            <span class="grad-amber">Factory Can Save</span>
        </h2>
        <p style="color:rgba(255,255,255,0.7);font-size:1.15rem;max-width:540px;margin:0 auto 48px;line-height:1.7;">
            Book a free 30-minute assessment. We'll show you exactly where your factory is losing money and how much Track Tech can save you.
        </p>
        <a href="/contact"
           class="inline-flex items-center gap-3 px-12 py-5 rounded-full font-black text-white text-xl transition-all hover:scale-105"
           style="background:linear-gradient(135deg,#f59e0b,#ea580c);box-shadow:0 12px 48px rgba(245,158,11,0.5);">
            Book Your Free Assessment
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
        <p class="mt-6 text-sm" style="color:rgba(255,255,255,0.4)">No commitment. No credit card. Just a conversation about your factory.</p>
    </div>
</section>


@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Scroll reveal ─────────────────────────────────────────────────
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (e.isIntersecting) {
                var delay = parseFloat(e.target.style.transitionDelay || '0') * 1000;
                setTimeout(function() { e.target.classList.add('on'); }, delay);
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal').forEach(function(el) { observer.observe(el); });

    // ── Dashboard callout bubbles ─────────────────────────────────────
    var tech = document.getElementById('technology');
    if (tech) {
        var techObs = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                [['cb1',200],['cb2',500],['cb3',800],['cb4',1100]].forEach(function(p) {
                    var el = document.getElementById(p[0]);
                    if (el) setTimeout(function() { el.classList.add('on'); }, p[1]);
                });
                techObs.unobserve(tech);
            }
        }, { threshold: 0.3 });
        techObs.observe(tech);
    }

    // ── 3D tilt on product cards ──────────────────────────────────────
    document.querySelectorAll('.prod-card').forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
            var r = card.getBoundingClientRect();
            var x = (e.clientX - r.left - r.width/2) / (r.width/2);
            var y = (e.clientY - r.top  - r.height/2) / (r.height/2);
            card.style.transform = 'translateY(-6px) rotateX('+(-y*4)+'deg) rotateY('+(x*4)+'deg)';
            card.style.transition = 'transform .1s ease';
        });
        card.addEventListener('mouseleave', function() {
            card.style.transform = '';
            card.style.transition = 'transform .5s ease';
        });
    });

    // ── Smooth anchor scroll ──────────────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(function(a) {
        a.addEventListener('click', function(e) {
            var t = document.querySelector(this.getAttribute('href'));
            if (t) { e.preventDefault(); t.scrollIntoView({ behavior:'smooth', block:'start' }); }
        });
    });

    // ── Stat number count-up ──────────────────────────────────────────
    var statObs = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
            if (!e.isIntersecting) return;
            var el = e.target;
            var raw = el.innerText;
            var num = parseFloat(raw.replace(/[^0-9.]/g,''));
            var suffix = raw.replace(/[0-9.]/g,'');
            if (isNaN(num)) return;
            var start = 0; var dur = 1500; var startTime = null;
            function step(ts) {
                if (!startTime) startTime = ts;
                var prog = Math.min((ts - startTime)/dur, 1);
                var ease = 1 - Math.pow(1 - prog, 3);
                el.innerText = (num < 10 ? (start + ease * num).toFixed(0) : Math.round(start + ease * num)) + suffix;
                if (prog < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
            statObs.unobserve(el);
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-card .num').forEach(function(el) { statObs.observe(el); });
});
</script>
@endpush

@endsection
