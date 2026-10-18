@extends('layouts.app')

@section('title', 'Track Tech Solution — Digital Intelligence for Garment Manufacturing')

@section('content')

<div x-data="{ 
    demoModalOpen: false, 
    activeTab: 'trakwel',
    scrollDashboard(id) {
        this.activeTab = id;
        const el = document.getElementById('dashboard-' + id);
        if (el) {
            el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
}">

{{-- ════════════════════════════════════════════════════════════════════════
     1. HERO SECTION (OFFICIAL VIDEO & HIGH-TECH AMBIENT OVERLAY)
     Matches original aesthetic with centered typography and glowing badges
════════════════════════════════════════════════════════════════════════ --}}
<section class="relative min-h-[90vh] lg:min-h-screen flex flex-col justify-center items-center pt-28 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden bg-slate-950 text-white">
    
    {{-- High-Tech Garment Manufacturing Video Background --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <video autoplay loop muted playsinline preload="auto" class="w-full h-full object-cover opacity-60 scale-105 filter contrast-105 saturate-110" poster="{{ asset('images/factory-aerial.jpg') }}">
            <source src="{{ asset('videos/factory-loop.mp4') }}" type="video/mp4">
        </video>

        {{-- Creative Radial Vignette Overlay --}}
        <div class="absolute inset-0" style="background:radial-gradient(circle at center, transparent 0%, transparent 25%, rgba(3, 7, 18, 0.45) 55%, rgba(3, 7, 18, 0.85) 85%, rgba(3, 7, 18, 0.98) 100%)"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/85 via-slate-950/40 to-slate-950/95"></div>

        {{-- Glowing Ambient Orbs --}}
        <div class="absolute inset-0">
            <div class="absolute top-[20%] right-[10%] w-32 h-32 bg-sky-400/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-[25%] left-[12%] w-48 h-48 bg-blue-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-[15%] left-[8%] w-16 h-16 bg-sky-300/30 rounded-full blur-xl"></div>
        </div>
    </div>

    {{-- Hero Content Container --}}
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">

        {{-- Eyebrow Pill --}}
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full text-xs font-semibold tracking-wider uppercase bg-slate-900/80 border border-sky-400/40 text-sky-300 backdrop-blur-md shadow-lg shadow-sky-500/10">
            <span class="w-2 h-2 rounded-full bg-sky-400 animate-ping"></span>
            Built for the Way Garment Factories Work
        </div>

        {{-- Centered Main Title --}}
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-white font-heading max-w-4xl drop-shadow-xl">
            Revolutionizing <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-400 via-sky-300 to-blue-400">Garment Manufacturing</span> <br class="hidden sm:inline" />
            With Real-Time Digital Intelligence
        </h1>

        {{-- Subtitle --}}
        <p class="text-lg sm:text-2xl text-slate-200 font-sans leading-relaxed max-w-3xl drop-shadow-md">
            From Factory Floor to Executive Dashboard. <br class="hidden sm:inline" />
            <span class="text-sky-400 font-heading text-sm sm:text-base tracking-widest uppercase font-semibold">Track. Optimize. Transform.</span>
        </p>

        {{-- Action Buttons --}}
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-500 hover:from-sky-400 hover:to-blue-600 text-white font-bold text-base px-10 py-4 rounded-full shadow-2xl shadow-sky-500/40 hover:scale-105 transition-all cursor-pointer">
                <svg class="w-5 h-5 text-sky-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                <span>Book Live Demo</span>
            </button>

            <a href="#dashboards-section"
               class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900/80 hover:bg-slate-800 text-white font-medium text-base px-9 py-4 rounded-full border border-white/20 hover:border-sky-400 backdrop-blur-md shadow-lg transition-all hover:scale-105">
                <span>Explore Live Dashboards</span>
                <svg class="w-5 h-5 text-sky-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
        </div>

        {{-- Feature Badges --}}
        <div class="pt-8 border-t border-white/15 flex flex-wrap items-center justify-center gap-3 text-xs font-semibold text-slate-200 w-full">
            <span class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Quality Control AI
            </span>
            <span class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Live Telemetry Tracking
            </span>
            <span class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Machine OEE & IoT
            </span>
            <span class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-sky-400"></span> Smart Gantt Scheduling
            </span>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     2. IMPACT METRICS & COMPANY PROFILE STATS
     Preserves both the 500+ / 10M+ / 50M+ / 25 countries and 2019 / 74+ / 02 / 36
════════════════════════════════════════════════════════════════════════ --}}
<section id="impact" class="relative py-20 lg:py-24 px-4 sm:px-6 lg:px-8 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-14">
        <div class="text-center space-y-3 max-w-3xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block">
                Our Global Impact
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-slate-900 font-heading tracking-tight">
                Beyond borders, <span class="text-gradient">beyond limits</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
                Empowering apparel manufacturers worldwide with cutting-edge technology and shopfloor intelligence.
            </p>
        </div>

        {{-- Primary Impact Metrics Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="p-7 rounded-3xl bg-slate-50 border border-sky-100 hover:border-sky-300 shadow-sm hover:shadow-xl hover:scale-[1.02] transition-all text-center group">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-3 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading tracking-tight mb-1">500+</div>
                <p class="text-sm font-bold text-slate-800">Active Lines</p>
                <p class="text-xs text-slate-500 mt-1">Across 74+ factories</p>
            </div>

            <div class="p-7 rounded-3xl bg-slate-50 border border-sky-100 hover:border-sky-300 shadow-sm hover:shadow-xl hover:scale-[1.02] transition-all text-center group">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-3 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading tracking-tight mb-1">10M+</div>
                <p class="text-sm font-bold text-slate-800">Operators & Users</p>
                <p class="text-xs text-slate-500 mt-1">Daily platform logins</p>
            </div>

            <div class="p-7 rounded-3xl bg-slate-50 border border-sky-100 hover:border-sky-300 shadow-sm hover:shadow-xl hover:scale-[1.02] transition-all text-center group">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-3 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading tracking-tight mb-1">50M+</div>
                <p class="text-sm font-bold text-slate-800">Pieces Checked / Mo</p>
                <p class="text-xs text-slate-500 mt-1">Real-time quality checks</p>
            </div>

            <div class="p-7 rounded-3xl bg-slate-50 border border-sky-100 hover:border-sky-300 shadow-sm hover:shadow-xl hover:scale-[1.02] transition-all text-center group">
                <div class="p-3.5 rounded-2xl bg-sky-100 text-sky-600 inline-flex mb-3 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V11a2 2 0 012-2h1.055M11 20.055V18a2 2 0 00-2-2h-1a2 2 0 00-2 2v2.055"></path></svg>
                </div>
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading tracking-tight mb-1">25</div>
                <p class="text-sm font-bold text-slate-800">Global Regions</p>
                <p class="text-xs text-slate-500 mt-1">Active customer bases</p>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     3. SEQUENTIAL DASHBOARDS EXPERIENCE
     "first dashboard la irundhu start panitu scroll panna panna next dashboard 
      pogura maari venum orey page la dha scroll ahganum but ovour dashboard 
      mduiya mudiya poite irukanu next and dashboard clcik pannalum adhuku ponum"
════════════════════════════════════════════════════════════════════════ --}}
<section id="dashboards-section" class="relative bg-slate-100/70 border-b border-slate-200 pt-16 pb-28">

    {{-- Sticky Dashboard Switcher Navigation Bar --}}
    <div class="sticky top-16 z-40 bg-white/95 backdrop-blur-md border-y border-slate-200 py-3 shadow-md mb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between gap-4 overflow-x-auto no-scrollbar">
            <div class="flex items-center gap-2 text-xs font-black uppercase tracking-wider text-slate-500 shrink-0">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Live Factory Suites:</span>
            </div>

            {{-- Clickable Dashboard Switcher Tabs --}}
            <div class="flex items-center gap-2 sm:gap-3 shrink-0">
                <button @click="scrollDashboard('trakwel')"
                        :class="activeTab === 'trakwel' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25 scale-105' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-sky-600'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all flex items-center gap-2 cursor-pointer">
                    <span class="w-5 h-5 rounded-lg bg-white/20 flex items-center justify-center text-[10px]">01</span>
                    <span>TrakWel MES</span>
                </button>

                <button @click="scrollDashboard('planwel')"
                        :class="activeTab === 'planwel' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25 scale-105' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-sky-600'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all flex items-center gap-2 cursor-pointer">
                    <span class="w-5 h-5 rounded-lg bg-white/20 flex items-center justify-center text-[10px]">02</span>
                    <span>PlanWel Gantt</span>
                </button>

                <button @click="scrollDashboard('mtrak')"
                        :class="activeTab === 'mtrak' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25 scale-105' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-sky-600'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all flex items-center gap-2 cursor-pointer">
                    <span class="w-5 h-5 rounded-lg bg-white/20 flex items-center justify-center text-[10px]">03</span>
                    <span>mTrak OEE</span>
                </button>

                <button @click="scrollDashboard('sewiot')"
                        :class="activeTab === 'sewiot' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25 scale-105' : 'bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-sky-600'"
                        class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all flex items-center gap-2 cursor-pointer">
                    <span class="w-5 h-5 rounded-lg bg-white/20 flex items-center justify-center text-[10px]">04</span>
                    <span>SewIoT Lines</span>
                </button>

                <a href="#roi-calculator"
                   class="px-4 py-2 rounded-xl text-xs sm:text-sm font-bold bg-amber-50 text-amber-700 hover:bg-amber-100 border border-amber-200 transition-all flex items-center gap-1.5 shrink-0">
                    <span>🧮 ROI Calculator</span>
                </a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

        {{-- ─────────────────────────────────────────────────────────────
             DASHBOARD 1: TRAKWEL (MES & SHOPFLOOR TELEMETRY)
        ───────────────────────────────────────────────────────────── --}}
        <div id="dashboard-trakwel" class="scroll-mt-36" x-intersect="activeTab = 'trakwel'">
            <div class="bg-white rounded-3xl border border-sky-100 shadow-2xl overflow-hidden">
                
                {{-- Dashboard Header --}}
                <div class="bg-slate-900 text-white p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-sky-400 mb-1">
                            <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 border border-sky-400/30">Dashboard 01</span>
                            <span>Manufacturing Execution System (MES)</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading text-white">TrakWel Shopfloor Live Telemetry</h3>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">Real-time bundle tracking, cutting-to-packing pipeline, and automated AQL inspection.</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-bold">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span>LIVE FEED: LINE 04 ACTIVE</span>
                        </div>
                        <button @click="demoModalOpen = true" class="hidden sm:inline-flex px-4 py-2 rounded-full bg-sky-500 hover:bg-sky-400 text-white font-bold text-xs shadow-md transition cursor-pointer">
                            Request TrakWel Demo
                        </button>
                    </div>
                </div>

                {{-- Dashboard Main Body --}}
                <div class="p-6 sm:p-8 space-y-8 bg-slate-50/50">

                    {{-- Top Live Telemetry KPI Cards --}}
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Today's Output</span>
                            <div class="flex items-baseline gap-2 mt-2">
                                <span class="text-3xl font-black text-slate-900 font-heading">1,690</span>
                                <span class="text-xs font-bold text-slate-400">/ 1,840 pcs</span>
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs font-semibold">
                                <span class="text-emerald-600">91.8% of Target</span>
                                <span class="text-slate-400">Pace: 212 pcs/hr</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-1.5 mt-2 overflow-hidden">
                                <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 91.8%"></div>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Active Lines</span>
                            <div class="flex items-baseline gap-2 mt-2">
                                <span class="text-3xl font-black text-sky-600 font-heading">18 <span class="text-slate-400 text-lg">/ 20</span></span>
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs font-semibold">
                                <span class="text-sky-700">90% Operational</span>
                                <span class="text-amber-600">2 In Changeover</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-1.5 mt-2 overflow-hidden">
                                <div class="bg-sky-500 h-1.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Inline Defect Rate</span>
                            <div class="flex items-baseline gap-2 mt-2">
                                <span class="text-3xl font-black text-emerald-600 font-heading">1.8%</span>
                                <span class="text-xs font-bold text-slate-400">Target &lt; 2.5%</span>
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs font-semibold">
                                <span class="text-emerald-600">✓ AQL 1.5 Compliant</span>
                                <span class="text-slate-400">Scrap: 0.4%</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-1.5 mt-2 overflow-hidden">
                                <div class="bg-emerald-500 h-1.5 rounded-full" style="width: 72%"></div>
                            </div>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Floor WIP Bundles</span>
                            <div class="flex items-baseline gap-2 mt-2">
                                <span class="text-3xl font-black text-slate-900 font-heading">342</span>
                                <span class="text-xs font-bold text-slate-400">Bundles</span>
                            </div>
                            <div class="mt-3 flex items-center justify-between text-xs font-semibold">
                                <span class="text-slate-700">Avg Cycle: 4.2 mins</span>
                                <span class="text-sky-600">Zero Bottleneck</span>
                            </div>
                            <div class="w-full bg-slate-100 rounded-full h-1.5 mt-2 overflow-hidden">
                                <div class="bg-blue-500 h-1.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    {{-- Production Pipeline Station Progression --}}
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-2">
                            <div>
                                <h4 class="text-base font-bold text-slate-900">Garment Production Pipeline Progress</h4>
                                <p class="text-xs text-slate-500">Real-time status across active order style #TTS-8842 (Classic Crewneck)</p>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-sky-100 text-sky-800 self-start sm:self-auto">Order Target: 5,000 pcs</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-5 gap-3 pt-5">
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-emerald-200">
                                <div class="flex items-center justify-between text-xs font-bold mb-1">
                                    <span class="text-slate-700">1. Spreading</span>
                                    <span class="text-emerald-600">100%</span>
                                </div>
                                <div class="text-sm font-black text-slate-900">5,000 pcs</div>
                                <div class="text-[10px] text-slate-500 mt-1">42 Fabric Rolls Cut</div>
                            </div>

                            <div class="p-3.5 rounded-xl bg-slate-50 border border-emerald-200">
                                <div class="flex items-center justify-between text-xs font-bold mb-1">
                                    <span class="text-slate-700">2. Auto Cutting</span>
                                    <span class="text-emerald-600">96%</span>
                                </div>
                                <div class="text-sm font-black text-slate-900">4,800 pcs</div>
                                <div class="text-[10px] text-slate-500 mt-1">240 Bundles Tagged</div>
                            </div>

                            <div class="p-3.5 rounded-xl bg-slate-50 border border-sky-300 ring-2 ring-sky-200">
                                <div class="flex items-center justify-between text-xs font-bold mb-1">
                                    <span class="text-sky-800">3. Sewing Line</span>
                                    <span class="text-sky-600 animate-pulse">89%</span>
                                </div>
                                <div class="text-sm font-black text-sky-900">4,450 pcs</div>
                                <div class="text-[10px] text-sky-600 mt-1">Active on Lines 3, 4, 7</div>
                            </div>

                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex items-center justify-between text-xs font-bold mb-1">
                                    <span class="text-slate-700">4. Inline QC</span>
                                    <span class="text-slate-700">86%</span>
                                </div>
                                <div class="text-sm font-black text-slate-900">4,300 pcs</div>
                                <div class="text-[10px] text-slate-500 mt-1">Defects Repaired: 18</div>
                            </div>

                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex items-center justify-between text-xs font-bold mb-1">
                                    <span class="text-slate-700">5. Packing</span>
                                    <span class="text-slate-700">78%</span>
                                </div>
                                <div class="text-sm font-black text-slate-900">3,900 pcs</div>
                                <div class="text-[10px] text-slate-500 mt-1">Ready for Dispatch</div>
                            </div>
                        </div>
                    </div>

                    {{-- Hourly Bar Chart & Bundle Feed Split --}}
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                        
                        {{-- Hourly Bar Chart --}}
                        <div class="lg:col-span-7 p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <h4 class="text-base font-bold text-slate-900">Hourly Production Rhythm</h4>
                                    <p class="text-xs text-slate-500">Target: 230 pcs/hour across all active sections</p>
                                </div>
                                <span class="text-xs font-bold px-2.5 py-1 rounded bg-emerald-50 text-emerald-700 border border-emerald-200">Steady Pace</span>
                            </div>

                            <div class="space-y-3">
                                @php
                                    $hours = [
                                        ['hour' => '09:00 - 10:00', 'target' => 230, 'actual' => 218, 'pct' => 95],
                                        ['hour' => '10:00 - 11:00', 'target' => 230, 'actual' => 242, 'pct' => 105],
                                        ['hour' => '11:00 - 12:00', 'target' => 230, 'actual' => 248, 'pct' => 108],
                                        ['hour' => '12:00 - 13:00', 'target' => 230, 'actual' => 234, 'pct' => 102],
                                        ['hour' => '14:00 - 15:00', 'target' => 230, 'actual' => 240, 'pct' => 104],
                                        ['hour' => '15:00 - 16:00', 'target' => 230, 'actual' => 255, 'pct' => 110],
                                        ['hour' => '16:00 - 17:00', 'target' => 230, 'actual' => 253, 'pct' => 110],
                                    ];
                                @endphp

                                @foreach($hours as $h)
                                <div class="flex items-center gap-3 text-xs">
                                    <span class="w-24 text-slate-600 font-medium shrink-0">{{ $h['hour'] }}</span>
                                    <div class="flex-grow bg-slate-100 rounded-full h-3 overflow-hidden flex">
                                        <div class="{{ $h['pct'] >= 100 ? 'bg-emerald-500' : 'bg-sky-500' }} h-3 rounded-full transition-all" style="width: {{ min(100, $h['pct']) }}%"></div>
                                    </div>
                                    <span class="w-20 text-right font-black {{ $h['pct'] >= 100 ? 'text-emerald-600' : 'text-slate-800' }} shrink-0">
                                        {{ $h['actual'] }} pcs ({{ $h['pct'] }}%)
                                    </span>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        {{-- Live RFID/Barcode Bundle Feed --}}
                        <div class="lg:col-span-5 p-6 rounded-2xl bg-white border border-slate-200 shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <h4 class="text-base font-bold text-slate-900">Live RFID Bundle Scans</h4>
                                    <span class="text-[10px] font-bold px-2 py-0.5 rounded bg-sky-100 text-sky-800 animate-pulse">Auto-refreshing</span>
                                </div>
                                
                                <div class="space-y-2.5 text-xs">
                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                                        <div>
                                            <div class="font-bold text-slate-900">Bundle #B-4082 • Polo Navy (M)</div>
                                            <div class="text-[11px] text-slate-500 mt-0.5">Station 14 • Inspector Priya</div>
                                        </div>
                                        <span class="px-2 py-1 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px]">PASS (0 Defect)</span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                                        <div>
                                            <div class="font-bold text-slate-900">Bundle #B-4081 • Polo Navy (L)</div>
                                            <div class="text-[11px] text-slate-500 mt-0.5">Station 12 • Cuff Attach</div>
                                        </div>
                                        <span class="px-2 py-1 rounded bg-sky-100 text-sky-800 font-bold text-[10px]">IN PROGRESS</span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                                        <div>
                                            <div class="font-bold text-slate-900">Bundle #B-4079 • Polo Navy (XL)</div>
                                            <div class="text-[11px] text-slate-500 mt-0.5">Station 08 • Collar Setting</div>
                                        </div>
                                        <span class="px-2 py-1 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px]">PASS (0 Defect)</span>
                                    </div>

                                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between">
                                        <div>
                                            <div class="font-bold text-slate-900">Bundle #B-4078 • Polo White (S)</div>
                                            <div class="text-[11px] text-slate-500 mt-0.5">Station 15 • Final Inspection</div>
                                        </div>
                                        <span class="px-2 py-1 rounded bg-emerald-100 text-emerald-800 font-bold text-[10px]">PASS (0 Defect)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 mt-4 border-t border-slate-100 text-center">
                                <a href="/products#trakwel" class="text-xs font-bold text-sky-600 hover:text-sky-800 transition">
                                    Explore Full TrakWel MES Specifications →
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- Next Dashboard Lead Button --}}
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-xs font-semibold text-slate-500 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            TrakWel connects seamlessly with PlanWel capacity planning.
                        </div>
                        <button @click="scrollDashboard('planwel')"
                                class="w-full sm:w-auto px-6 py-3 rounded-full bg-sky-50 hover:bg-sky-100 text-sky-700 font-bold text-xs border border-sky-200 transition-all flex items-center justify-center gap-2 cursor-pointer">
                            <span>Scroll To Dashboard 02: PlanWel Gantt</span>
                            <svg class="w-4 h-4 text-sky-600 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>


        {{-- ─────────────────────────────────────────────────────────────
             DASHBOARD 2: PLANWEL (CAPACITY PLANNING & GANTT SCHEDULER)
        ───────────────────────────────────────────────────────────── --}}
        <div id="dashboard-planwel" class="scroll-mt-36" x-intersect="activeTab = 'planwel'">
            <div class="bg-white rounded-3xl border border-sky-100 shadow-2xl overflow-hidden">
                
                {{-- Dashboard Header --}}
                <div class="bg-slate-900 text-white p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-sky-400 mb-1">
                            <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 border border-sky-400/30">Dashboard 02</span>
                            <span>Advanced Planning & Scheduling (APS)</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading text-white">PlanWel Capacity & Dynamic Gantt</h3>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">Live sewing line allocation, SAM balancing, and delivery date milestone simulation.</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/20 border border-blue-500/40 text-blue-300 text-xs font-bold">
                            <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                            <span>MONTHLY CAPACITY: 94.2%</span>
                        </div>
                        <button @click="demoModalOpen = true" class="hidden sm:inline-flex px-4 py-2 rounded-full bg-sky-500 hover:bg-sky-400 text-white font-bold text-xs shadow-md transition cursor-pointer">
                            Request PlanWel Demo
                        </button>
                    </div>
                </div>

                {{-- Dashboard Main Body --}}
                <div class="p-6 sm:p-8 space-y-8 bg-slate-50/50">

                    {{-- Top KPIs --}}
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Capacity Utilization</span>
                            <div class="text-3xl font-black text-sky-600 font-heading mt-2">94.2%</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">Balanced across 20 sewing lines</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Active Scheduled Orders</span>
                            <div class="text-3xl font-black text-slate-900 font-heading mt-2">14 Styles</div>
                            <p class="text-xs text-emerald-600 mt-2 font-semibold">12 on track, 2 running ahead</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">On-Time Delivery Rate</span>
                            <div class="text-3xl font-black text-emerald-600 font-heading mt-2">99.1%</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">Zero critical late shipments</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">SAM Variance</span>
                            <div class="text-3xl font-black text-slate-900 font-heading mt-2">0.88 min</div>
                            <p class="text-xs text-sky-700 mt-2 font-semibold">High pitch balance index</p>
                        </div>
                    </div>

                    {{-- Interactive Visual Gantt Board --}}
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-2">
                            <div>
                                <h4 class="text-base font-bold text-slate-900">Line Scheduling Gantt Matrix</h4>
                                <p class="text-xs text-slate-500">Dynamic order loading across 6 primary factory lines</p>
                            </div>
                            <div class="flex items-center gap-3 text-xs font-semibold text-slate-600">
                                <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>On Schedule</span>
                                <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-sky-500"></span>Loading</span>
                                <span class="flex items-center gap-1.5"><span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>Tight Deadline</span>
                            </div>
                        </div>

                        <div class="space-y-4 pt-5">
                            @php
                                $gantt = [
                                    ['line' => 'Line 01', 'buyer' => 'Shahi Exports', 'style' => 'Polo Jersey #P-401', 'qty' => '12,000 pcs', 'pct' => 88, 'color' => 'bg-emerald-500', 'status' => '88% Completed'],
                                    ['line' => 'Line 02', 'buyer' => 'Arvind Ltd', 'style' => 'Stretch Denim #D-109', 'qty' => '8,500 pcs', 'pct' => 65, 'color' => 'bg-sky-500', 'status' => '65% In Sewing'],
                                    ['line' => 'Line 03', 'buyer' => 'PDS Global', 'style' => 'Sport Crew #SP-77', 'qty' => '15,000 pcs', 'pct' => 92, 'color' => 'bg-emerald-500', 'status' => '92% On Target'],
                                    ['line' => 'Line 04', 'buyer' => 'Modelama', 'style' => 'Woven Blouse #WB-99', 'qty' => '6,000 pcs', 'pct' => 45, 'color' => 'bg-indigo-500', 'status' => '45% Line Balancing'],
                                    ['line' => 'Line 05', 'buyer' => 'Armstrong', 'style' => 'Organic Tee #OT-20', 'qty' => '20,000 pcs', 'pct' => 74, 'color' => 'bg-emerald-500', 'status' => '74% Running Fast'],
                                    ['line' => 'Line 06', 'buyer' => 'Penguin Apparels', 'style' => 'Casual Chino #CC-31', 'qty' => '9,500 pcs', 'pct' => 82, 'color' => 'bg-amber-500', 'status' => '82% Tight Milestones'],
                                ];
                            @endphp

                            @foreach($gantt as $g)
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between text-xs font-bold text-slate-800 gap-1 mb-2">
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 rounded bg-slate-200 text-slate-800 text-[11px]">{{ $g['line'] }}</span>
                                        <span class="text-sky-600 font-black">{{ $g['buyer'] }}</span>
                                        <span class="text-slate-500">• {{ $g['style'] }}</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-slate-600">
                                        <span>{{ $g['qty'] }}</span>
                                        <span class="text-slate-800 font-black">{{ $g['status'] }}</span>
                                    </div>
                                </div>

                                <div class="w-full bg-slate-200 rounded-full h-3 overflow-hidden flex">
                                    <div class="{{ $g['color'] }} h-3 rounded-full transition-all" style="width: {{ $g['pct'] }}%"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Next Dashboard Lead Button --}}
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-xs font-semibold text-slate-500 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            PlanWel feeds order targets directly into mTrak machine maintenance schedules.
                        </div>
                        <button @click="scrollDashboard('mtrak')"
                                class="w-full sm:w-auto px-6 py-3 rounded-full bg-sky-50 hover:bg-sky-100 text-sky-700 font-bold text-xs border border-sky-200 transition-all flex items-center justify-center gap-2 cursor-pointer">
                            <span>Scroll To Dashboard 03: mTrak OEE</span>
                            <svg class="w-4 h-4 text-sky-600 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>


        {{-- ─────────────────────────────────────────────────────────────
             DASHBOARD 3: MTRAK (PREDICTIVE MACHINE MAINTENANCE & OEE)
        ───────────────────────────────────────────────────────────── --}}
        <div id="dashboard-mtrak" class="scroll-mt-36" x-intersect="activeTab = 'mtrak'">
            <div class="bg-white rounded-3xl border border-sky-100 shadow-2xl overflow-hidden">
                
                {{-- Dashboard Header --}}
                <div class="bg-slate-900 text-white p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-sky-400 mb-1">
                            <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 border border-sky-400/30">Dashboard 03</span>
                            <span>Predictive Machine Maintenance & IoT (OEE)</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading text-white">mTrak Equipment Health & Downtime Radar</h3>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">IoT machine run hours, QR breakdown dispatching, and predictive motor servicing.</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-bold">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span>241 / 248 MACHINES ACTIVE</span>
                        </div>
                        <button @click="demoModalOpen = true" class="hidden sm:inline-flex px-4 py-2 rounded-full bg-sky-500 hover:bg-sky-400 text-white font-bold text-xs shadow-md transition cursor-pointer">
                            Request mTrak Demo
                        </button>
                    </div>
                </div>

                {{-- Dashboard Main Body --}}
                <div class="p-6 sm:p-8 space-y-8 bg-slate-50/50">

                    {{-- Top KPIs --}}
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Overall Equipment OEE</span>
                            <div class="text-3xl font-black text-sky-600 font-heading mt-2">88.6%</div>
                            <p class="text-xs text-emerald-600 mt-2 font-semibold">+6.6% above apparel benchmark</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Connected Sewing Assets</span>
                            <div class="text-3xl font-black text-slate-900 font-heading mt-2">248 Machines</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">100% wireless IoT telemetry</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Mean Time to Repair</span>
                            <div class="text-3xl font-black text-emerald-600 font-heading mt-2">14.2 Mins</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">-42% reduction with QR dispatch</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Preventive Compliance</span>
                            <div class="text-3xl font-black text-slate-900 font-heading mt-2">98.0%</div>
                            <p class="text-xs text-sky-700 mt-2 font-semibold">Automated maintenance alarms</p>
                        </div>
                    </div>

                    {{-- Machine Floor Telemetry Matrix Cards --}}
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <div>
                                <h4 class="text-base font-bold text-slate-900">Connected Shopfloor Asset Telemetry</h4>
                                <p class="text-xs text-slate-500">Real-time vibration, temperature & RPM sensor feeds</p>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-200">4 Monitored Stations</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pt-5">
                            
                            {{-- Machine 1 --}}
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-black text-slate-800">Unit #SN-102</span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                </div>
                                <div class="text-sm font-bold text-slate-900">Juki DDL-9000C</div>
                                <div class="text-xs text-slate-500 mb-3">Line 01 • Lockstitch</div>
                                <div class="space-y-1 text-xs">
                                    <div class="flex justify-between text-slate-600"><span>Motor RPM</span><span class="font-bold text-slate-900">4,850 RPM</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Temperature</span><span class="font-bold text-slate-900">39.2°C (Normal)</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Vibration</span><span class="font-bold text-emerald-600">0.4 mm/s (Low)</span></div>
                                </div>
                                <div class="mt-3 pt-2 border-t border-slate-200 text-[11px] font-bold text-emerald-700">Status: Running Optimal</div>
                            </div>

                            {{-- Machine 2 --}}
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-black text-slate-800">Unit #SN-108</span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                </div>
                                <div class="text-sm font-bold text-slate-900">Brother S-7300A</div>
                                <div class="text-xs text-slate-500 mb-3">Line 02 • Direct Drive</div>
                                <div class="space-y-1 text-xs">
                                    <div class="flex justify-between text-slate-600"><span>Motor RPM</span><span class="font-bold text-slate-900">4,600 RPM</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Temperature</span><span class="font-bold text-slate-900">41.5°C (Normal)</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Vibration</span><span class="font-bold text-emerald-600">0.5 mm/s (Low)</span></div>
                                </div>
                                <div class="mt-3 pt-2 border-t border-slate-200 text-[11px] font-bold text-emerald-700">Status: Running Optimal</div>
                            </div>

                            {{-- Machine 3 (Warning) --}}
                            <div class="p-4 rounded-xl bg-amber-50/50 border border-amber-300">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-black text-amber-900">Unit #SN-214</span>
                                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-ping"></span>
                                </div>
                                <div class="text-sm font-bold text-slate-900">Pegasus M900 Overlock</div>
                                <div class="text-xs text-slate-500 mb-3">Line 04 • 4-Thread</div>
                                <div class="space-y-1 text-xs">
                                    <div class="flex justify-between text-slate-600"><span>Motor RPM</span><span class="font-bold text-slate-900">4,200 RPM</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Temperature</span><span class="font-bold text-amber-700 font-black">47.1°C (Warm)</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Vibration</span><span class="font-bold text-amber-700 font-black">1.4 mm/s (+12%)</span></div>
                                </div>
                                <div class="mt-3 pt-2 border-t border-amber-200 text-[11px] font-bold text-amber-700">Preventive Alert: Service in 3h</div>
                            </div>

                            {{-- Machine 4 --}}
                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-black text-slate-800">Unit #SP-301</span>
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                </div>
                                <div class="text-sm font-bold text-slate-900">Eastman Auto Cutter</div>
                                <div class="text-xs text-slate-500 mb-3">Cutting Room • Spreader</div>
                                <div class="space-y-1 text-xs">
                                    <div class="flex justify-between text-slate-600"><span>Speed</span><span class="font-bold text-slate-900">180 m/min</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Pressure</span><span class="font-bold text-slate-900">6.2 Bar</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Blade Sharpness</span><span class="font-bold text-emerald-600">92%</span></div>
                                </div>
                                <div class="mt-3 pt-2 border-t border-slate-200 text-[11px] font-bold text-emerald-700">Status: Running Optimal</div>
                            </div>
                        </div>
                    </div>

                    {{-- Next Dashboard Lead Button --}}
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-xs font-semibold text-slate-500 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            mTrak machine health links with SewIoT line pacing terminals.
                        </div>
                        <button @click="scrollDashboard('sewiot')"
                                class="w-full sm:w-auto px-6 py-3 rounded-full bg-sky-50 hover:bg-sky-100 text-sky-700 font-bold text-xs border border-sky-200 transition-all flex items-center justify-center gap-2 cursor-pointer">
                            <span>Scroll To Dashboard 04: SewIoT Lines</span>
                            <svg class="w-4 h-4 text-sky-600 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>

                </div>
            </div>
        </div>


        {{-- ─────────────────────────────────────────────────────────────
             DASHBOARD 4: SEWIOT (SMART SEWING LINE & OPERATOR TERMINALS)
        ───────────────────────────────────────────────────────────── --}}
        <div id="dashboard-sewiot" class="scroll-mt-36" x-intersect="activeTab = 'sewiot'">
            <div class="bg-white rounded-3xl border border-sky-100 shadow-2xl overflow-hidden">
                
                {{-- Dashboard Header --}}
                <div class="bg-slate-900 text-white p-6 sm:p-8 flex flex-col md:flex-row md:items-center justify-between gap-4 border-b border-slate-800">
                    <div>
                        <div class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-sky-400 mb-1">
                            <span class="px-2.5 py-0.5 rounded-full bg-sky-500/20 border border-sky-400/30">Dashboard 04</span>
                            <span>Sewing Line IoT & Workstation Terminals</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black font-heading text-white">SewIoT Operator Terminals & Line Balancing</h3>
                        <p class="text-xs sm:text-sm text-slate-400 mt-1">Needle run-time monitoring, live stitches-per-minute, and real-time operator efficiency scorecards.</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-purple-500/20 border border-purple-500/40 text-purple-300 text-xs font-bold">
                            <span class="w-2 h-2 rounded-full bg-purple-400 animate-pulse"></span>
                            <span>STITCH RATE: 1.48M STITCHES</span>
                        </div>
                        <button @click="demoModalOpen = true" class="hidden sm:inline-flex px-4 py-2 rounded-full bg-sky-500 hover:bg-sky-400 text-white font-bold text-xs shadow-md transition cursor-pointer">
                            Request SewIoT Demo
                        </button>
                    </div>
                </div>

                {{-- Dashboard Main Body --}}
                <div class="p-6 sm:p-8 space-y-8 bg-slate-50/50">

                    {{-- Top KPIs --}}
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Needle Running Time</span>
                            <div class="text-3xl font-black text-sky-600 font-heading mt-2">92.4%</div>
                            <p class="text-xs text-emerald-600 mt-2 font-semibold">Only 7.6% handling downtime</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Stitches Counted Today</span>
                            <div class="text-3xl font-black text-slate-900 font-heading mt-2">1,482,910</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">Logged via optical needle sensor</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Average Pitch Time</span>
                            <div class="text-3xl font-black text-emerald-600 font-heading mt-2">18.4s</div>
                            <p class="text-xs text-slate-600 mt-2 font-semibold">Per seam across Line 03</p>
                        </div>

                        <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm">
                            <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Line Pace Adherence</span>
                            <div class="text-3xl font-black text-purple-600 font-heading mt-2">104.2%</div>
                            <p class="text-xs text-purple-700 mt-2 font-semibold">+4.2% ahead of hourly schedule</p>
                        </div>
                    </div>

                    {{-- Live Operator Workstation Screen --}}
                    <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between pb-4 border-b border-slate-100 gap-2">
                            <div>
                                <h4 class="text-base font-bold text-slate-900">Workstation Terminal — Line 03, Station 09</h4>
                                <p class="text-xs text-slate-500">Live operator performance tracking with real-time feedback</p>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 self-start sm:self-auto">Status: Optimal Performance</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-5">
                            
                            {{-- Operator Card --}}
                            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 space-y-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-12 h-12 rounded-full bg-sky-100 text-sky-700 flex items-center justify-center font-black text-base border border-sky-200">
                                        LP
                                    </div>
                                    <div>
                                        <div class="text-sm font-bold text-slate-900">Lakshmi Priya</div>
                                        <div class="text-xs text-slate-500">Badge ID: #OP-9942</div>
                                    </div>
                                </div>
                                <div class="space-y-1.5 text-xs pt-2 border-t border-slate-200">
                                    <div class="flex justify-between text-slate-600"><span>Operation</span><span class="font-bold text-slate-900">Sleeve Cuff Attach</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Standard SAM</span><span class="font-bold text-slate-900">0.42 Min</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Hourly Target</span><span class="font-bold text-slate-900">130 pcs/hr</span></div>
                                    <div class="flex justify-between text-slate-600"><span>Actual Achieved</span><span class="font-bold text-emerald-600">138 pcs/hr (106%)</span></div>
                                </div>
                            </div>

                            {{-- Needle Sensor Signal Waveform --}}
                            <div class="p-5 rounded-2xl bg-slate-900 text-white space-y-3 flex flex-col justify-between">
                                <div>
                                    <div class="flex items-center justify-between text-xs font-bold text-slate-400 mb-2">
                                        <span>OPTICAL NEEDLE SENSOR FEED</span>
                                        <span class="text-emerald-400 animate-pulse">● LIVE</span>
                                    </div>
                                    <div class="text-xl font-black font-heading text-sky-400">4,280 Stitches / Min</div>
                                </div>

                                {{-- Animated Stitches Waveform --}}
                                <div class="h-16 flex items-end gap-1 px-1">
                                    @for($i = 0; $i < 20; $i++)
                                        @php $h = rand(25, 95); @endphp
                                        <div class="w-full bg-gradient-to-t from-sky-500 to-sky-300 rounded-t" style="height: {{ $h }}%"></div>
                                    @endfor
                                </div>

                                <div class="text-[11px] text-slate-400 text-center">Zero skipped stitches detected across last 40 garments.</div>
                            </div>

                            {{-- Line Balancing Radar --}}
                            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 flex flex-col justify-between">
                                <div>
                                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Line 03 Balancing Index</span>
                                    <div class="text-2xl font-black text-slate-900 font-heading mt-2">91.8% Balanced</div>
                                    <p class="text-xs text-slate-600 mt-2">12 of 12 stations synced within 2.5s tolerance.</p>
                                </div>

                                <div class="pt-4 border-t border-slate-200">
                                    <button @click="demoModalOpen = true" class="w-full py-2.5 rounded-xl bg-sky-500 hover:bg-sky-400 text-white font-bold text-xs shadow transition cursor-pointer">
                                        Test SewIoT in Your Plant
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Link to ROI Calculator --}}
                    <div class="pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="text-xs font-semibold text-slate-500 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            Complete digital suite delivers immediate measurable ROI.
                        </div>
                        <a href="#roi-calculator"
                           class="w-full sm:w-auto px-6 py-3 rounded-full bg-amber-50 hover:bg-amber-100 text-amber-800 font-bold text-xs border border-amber-200 transition-all flex items-center justify-center gap-2">
                            <span>Calculate Your Factory Savings with Interactive ROI Tool</span>
                            <svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     4. INTERACTIVE FACTORY ROI & COST SAVINGS CALCULATOR
     Replicated identically from original tts-page-html.html with Alpine.js
════════════════════════════════════════════════════════════════════════ --}}
<section id="roi-calculator" class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16" x-data="{
        lines: 15,
        pcsPerLine: 1200,
        reworkRate: 5,
        get monthlySavings() {
            return (this.lines * this.pcsPerLine * 25 * (this.reworkRate * 0.01) * 38).toLocaleString('en-IN');
        },
        get garmentsSaved() {
            return Math.round(this.lines * this.pcsPerLine * 25 * (this.reworkRate * 0.01) * 0.48).toLocaleString();
        }
    }">
        <div class="text-center space-y-3 max-w-3xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block">
                Interactive Factory Intelligence
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-slate-900 font-heading tracking-tight">
                Calculate Your Factory's <span class="text-gradient">Cost Savings</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Adjust your factory capacity below to see instant cost reduction and productivity gains.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-stretch">
            
            {{-- Slider Controls Panel --}}
            <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-white border border-sky-200 shadow-xl space-y-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-2xl font-black text-slate-900 font-heading mb-6">Factory Parameters</h3>

                    {{-- Slider 1: Active Sewing Lines --}}
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center text-slate-900 text-sm">
                            <span class="font-bold">Active Sewing Lines</span>
                            <span class="text-sky-600 font-black text-lg font-heading" x-text="lines + ' Lines'"></span>
                        </div>
                        <input type="range" min="5" max="100" step="5" x-model="lines" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500">
                            <span>5 Lines</span>
                            <span>50 Lines</span>
                            <span>100 Lines</span>
                        </div>
                    </div>

                    {{-- Slider 2: Daily Pieces per Line --}}
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center text-slate-900 text-sm">
                            <span class="font-bold">Daily Garments per Line</span>
                            <span class="text-sky-600 font-black text-lg font-heading" x-text="pcsPerLine + ' pcs/day'"></span>
                        </div>
                        <input type="range" min="500" max="3000" step="100" x-model="pcsPerLine" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500">
                            <span>500 pcs</span>
                            <span>1,500 pcs</span>
                            <span>3,000 pcs</span>
                        </div>
                    </div>

                    {{-- Slider 3: Rework Rate --}}
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-slate-900 text-sm">
                            <span class="font-bold">Current Defect / Re-work Rate</span>
                            <span class="text-sky-600 font-black text-lg font-heading" x-text="reworkRate + '%'"></span>
                        </div>
                        <input type="range" min="2" max="12" step="1" x-model="reworkRate" class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-sky-500">
                        <div class="flex justify-between text-xs text-slate-500">
                            <span>2% (Low)</span>
                            <span>6% (Average)</span>
                            <span>12% (High)</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 flex items-center gap-3 text-xs text-slate-500">
                    <svg class="w-4 h-4 text-sky-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>Based on real shopfloor benchmarks across 500+ active apparel manufacturing lines.</span>
                </div>
            </div>

            {{-- Savings Display Output Panel --}}
            <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-sky-600 via-blue-700 to-sky-800 text-white shadow-2xl space-y-8 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

                <div class="space-y-6 relative z-10">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/20 border border-white/30 text-white text-xs font-semibold uppercase tracking-wider">
                        Estimated ROI Results
                    </div>

                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wider text-sky-200 mb-1">Projected Monthly Savings</div>
                        <div class="text-4xl sm:text-5xl font-black font-heading tracking-tight text-white">
                            ₹ <span x-text="monthlySavings"></span>
                        </div>
                        <p class="text-xs text-sky-100 mt-1">Saved from fabric scrap, inline re-works, and downtime</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/20">
                        <div>
                            <div class="text-3xl font-black font-heading text-white" x-text="garmentsSaved"></div>
                            <div class="text-xs text-sky-100 mt-0.5">Garments Saved / Month</div>
                        </div>

                        <div>
                            <div class="text-3xl font-black font-heading text-white">+37%</div>
                            <div class="text-xs text-sky-100 mt-0.5">Overall Line OEE Boost</div>
                        </div>
                    </div>
                </div>

                <div class="pt-6 relative z-10">
                    <button @click="demoModalOpen = true" class="w-full bg-white hover:bg-sky-50 text-sky-700 font-bold text-base py-4 rounded-full shadow-xl transition-all hover:scale-[1.02] flex items-center justify-center gap-3 cursor-pointer">
                        <svg class="w-5 h-5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>Claim Your Custom Factory ROI Audit</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     5. GARMENT INDUSTRY MODULES GRID (FROM ORIGINAL THEME)
════════════════════════════════════════════════════════════════════════ --}}
<section class="py-20 lg:py-24 px-4 sm:px-6 lg:px-8 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="text-center space-y-3 max-w-2xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block">
                Garment Industry Modules
            </span>
            <h3 class="text-3xl sm:text-4xl font-black text-slate-900 font-heading">
                End-to-End Digitalization for Apparel Factories
            </h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {{-- Module 1: Quality Management System --}}
            <div class="bg-slate-50 rounded-2xl border border-sky-100 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/quality-control.jpg') }}" alt="Quality Management System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-bold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">QMS AI</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Quality Management System</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Inline fabric inspection, stitch defect tagging, and AQL automated scoring dashboards.
                    </p>
                </div>
            </div>

            {{-- Module 2: Production Tracking System --}}
            <div class="bg-slate-50 rounded-2xl border border-sky-100 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/production-tracking.jpg') }}" alt="Production Tracking System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-bold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">RFID & Barcode</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Production Tracking System</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Real-time bundle tracking across sewing lines with real-time WIP updates and operator efficiency metrics.
                    </p>
                </div>
            </div>

            {{-- Module 3: Cutting Room Digitisation --}}
            <div class="bg-slate-50 rounded-2xl border border-sky-100 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/production-planning.jpg') }}" alt="Cutting Room Digitisation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-bold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Smart Spreading</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Cutting Room Digitisation</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Digital marker planning, fabric roll optimization, and automated ply-count tracking.
                    </p>
                </div>
            </div>

            {{-- Module 4: Fabric Inventory Management --}}
            <div class="bg-slate-50 rounded-2xl border border-sky-100 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-100">
                    <img src="{{ asset('images/machine-maintenance.jpg') }}" alt="Fabric Inventory Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-bold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Warehouse IoT</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Fabric Inventory Management</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">
                        Barcode-driven roll allocation, shade grouping, shrinkage matching, and zero-loss fabric storage.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     6. STRATEGIC PARTNERS (CONTINUOUS MARQUEE)
     Exactly replicated from original tts-page-html.html
════════════════════════════════════════════════════════════════════════ --}}
<section id="clients" class="relative py-20 lg:py-24 px-4 sm:px-6 lg:px-8 bg-slate-50 border-b border-slate-200 overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="text-center space-y-3 max-w-3xl mx-auto">
            <span class="text-xs font-bold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block">
                Global Network
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-slate-900 font-heading tracking-tight">
                Trusted by <span class="text-gradient">Industry Leaders</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg">
                Partnering with world-class textile & garment manufacturing pioneers
            </p>
        </div>

        {{-- Continuous Rotating / Moving Marquee Container --}}
        <div class="relative w-full overflow-hidden py-4">
            <div class="absolute left-0 top-0 bottom-0 w-24 bg-gradient-to-r from-slate-50 to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-24 bg-gradient-to-l from-slate-50 to-transparent z-10 pointer-events-none"></div>

            <div class="flex space-x-6 animate-marquee">
                {{-- Partner Cards Block 1 --}}
                <div class="flex space-x-6 shrink-0">
                    @php
                        $partners = [
                            ['name' => 'Shahi Exports', 'sub' => 'Leading Apparel Exporter'],
                            ['name' => 'Arvind Ltd', 'sub' => 'Fashioning Possibilities'],
                            ['name' => 'PDS', 'sub' => 'Global Manufacturing Platform'],
                            ['name' => 'Modelama Exports', 'sub' => 'Quality Garment Export'],
                            ['name' => 'Armstrong', 'sub' => 'The Name for Quality'],
                            ['name' => 'Penguin Apparels', 'sub' => 'Specialist Apparel Makers'],
                            ['name' => 'Sahana', 'sub' => 'Apparel Manufacturing'],
                            ['name' => 'Trendy Fits', 'sub' => 'Comfort Fashion Fit'],
                            ['name' => 'Mehala', 'sub' => 'Customer Delight in Garments'],
                        ];
                    @endphp

                    @foreach($partners as $p)
                    <div class="w-64 h-32 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-sm hover:shadow-xl hover:scale-105 transition-all text-center flex flex-col items-center justify-center space-y-1.5 shrink-0">
                        <div class="text-lg font-black text-slate-900 font-heading">{{ $p['name'] }}</div>
                        <div class="text-xs font-bold text-sky-600">{{ $p['sub'] }}</div>
                    </div>
                    @endforeach
                </div>

                {{-- Partner Cards Block 2 (Duplicate for Seamless Loop) --}}
                <div class="flex space-x-6 shrink-0" aria-hidden="true">
                    @foreach($partners as $p)
                    <div class="w-64 h-32 p-5 rounded-3xl bg-white border border-sky-200 hover:border-sky-400 shadow-sm hover:shadow-xl hover:scale-105 transition-all text-center flex flex-col items-center justify-center space-y-1.5 shrink-0">
                        <div class="text-lg font-black text-slate-900 font-heading">{{ $p['name'] }}</div>
                        <div class="text-xs font-bold text-sky-600">{{ $p['sub'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     7. COMPANY LEADERSHIP (FROM VERIFIED CREDENTIALS)
════════════════════════════════════════════════════════════════════════ --}}
<section id="leadership" class="py-20 lg:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block mb-3">
                Our Leadership Team
            </span>
            <h2 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight font-heading">
                Built Around Manufacturing, Operations and Technology
            </h2>
            <p class="mt-4 text-slate-600 text-base sm:text-lg">
                Three perspectives working together to make factory software practical, dependable and useful on the floor.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Gopinath M. --}}
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        GM
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Executive Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Gopinath M. (Muniraj)</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Gopinath's career spans apparel manufacturing and digital solutions, including regional sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track Tech, he leads the company's direction and its focus on bringing technology into everyday factory operations.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-200">
                    <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener noreferrer"
                       class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Professional profile ↗
                    </a>
                </div>
            </div>

            {{-- Lebinesh Balan --}}
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        LB
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Operating Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Lebinesh Balan</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Lebinesh focuses on turning strategy into consistent delivery: aligning customer implementation, teams and day-to-day operations. His work as COO supports smooth adoption of Track Tech across factory environments and keeps customer needs connected to execution.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-200">
                    <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener noreferrer"
                       class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        LinkedIn profile ↗
                    </a>
                </div>
            </div>

            {{-- Deepak Rajkumar --}}
            <div class="p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        DR
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Technology Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Deepak Rajkumar</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Deepak guides the technology behind the platform, with a focus on reliable product engineering, useful integrations and clear information for factory teams. As CTO, he helps turn complex manufacturing workflows into software people can use with confidence.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-200">
                    <span class="text-xs font-bold text-slate-500">Technology Architecture</span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     8. FINAL CALL TO ACTION
════════════════════════════════════════════════════════════════════════ --}}
<section class="py-20 lg:py-24 bg-gradient-to-b from-slate-50 to-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest bg-sky-100 text-sky-800 border border-sky-200 mb-4">
            Get Started
        </span>
        <h2 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight font-heading">
            Want a Clearer View of Your Factory?
        </h2>
        <p class="mt-4 text-slate-600 text-base sm:text-lg max-w-xl mx-auto leading-relaxed">
            Tell us how your lines work today. We will show you where Track Tech can remove manual follow-up and make every order on time.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
            <button @click="demoModalOpen = true"
                    class="w-full sm:w-auto px-10 py-4 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-base rounded-full shadow-lg shadow-sky-500/25 transition-all hover:scale-105 cursor-pointer">
                Schedule Live Walkthrough
            </button>
            <a href="tel:+917868925566"
               class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-slate-50 text-slate-800 font-bold text-base rounded-full border border-slate-300 shadow-sm transition-all hover:scale-105">
                Call +91 78689 25566
            </a>
        </div>
    </div>
</section>


{{-- ════════════════════════════════════════════════════════════════════════
     9. BOOK DEMO MODAL (POPUP DIALOG)
     Replicated cleanly from tts-page-html.html
════════════════════════════════════════════════════════════════════════ --}}
<div x-show="demoModalOpen" x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-md"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-data="{
        submitted: false,
        loading: false,
        form: { name: '', email: '', phone: '', company: '', solution: 'Quality Control' },
        submitForm() {
            this.loading = true;
            fetch('{{ route('contact.store') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
                },
                body: JSON.stringify({
                    name: this.form.name,
                    email: this.form.email,
                    phone: this.form.phone,
                    company: this.form.company,
                    message: 'Requested Demo for ' + this.form.solution
                })
            })
            .then(res => res.json())
            .then(data => {
                this.loading = false;
                this.submitted = true;
                setTimeout(() => {
                    this.submitted = false;
                    demoModalOpen = false;
                }, 2500);
            })
            .catch(err => {
                this.loading = false;
                this.submitted = true;
                setTimeout(() => {
                    this.submitted = false;
                    demoModalOpen = false;
                }, 2000);
            });
        }
     }">
    <div class="relative w-full max-w-lg bg-white border border-sky-100 rounded-3xl p-6 md:p-8 shadow-2xl shadow-sky-500/15"
         @click.outside="demoModalOpen = false">
        
        <button @click="demoModalOpen = false" class="absolute top-5 right-5 p-2 rounded-full bg-slate-100 text-slate-500 hover:text-slate-900 cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <template x-if="submitted">
            <div class="py-12 flex flex-col items-center justify-center text-center space-y-4">
                <div class="w-16 h-16 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center animate-bounce">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 font-heading">Demo Request Received!</h3>
                <p class="text-sm text-slate-600 max-w-xs">
                    Thank you! Our technical specialist will reach out to you shortly.
                </p>
            </div>
        </template>

        <template x-if="!submitted">
            <div>
                <div class="flex items-center gap-2 text-sky-600 font-semibold text-xs uppercase tracking-wider mb-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <span>Schedule Personal Walkthrough</span>
                </div>
                <h3 class="text-2xl font-black text-slate-900 mb-2 font-heading">Book a Live Platform Demo</h3>
                <p class="text-sm text-slate-600 mb-6">
                    Discover how Track Tech Solution can optimize your garment manufacturing facility in real time.
                </p>

                <form @submit.prevent="submitForm()" class="space-y-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name</label>
                        <input type="text" x-model="form.name" required placeholder="e.g. Rahul Sharma"
                               class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Phone Number</label>
                            <input type="tel" x-model="form.phone" required placeholder="+91 98765 43210"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Work Email</label>
                            <input type="email" x-model="form.email" required placeholder="name@company.com"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Factory Name</label>
                        <input type="text" x-model="form.company" placeholder="e.g. Apex Apparels Ltd"
                               class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Primary Interest</label>
                        <select x-model="form.solution" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:border-sky-500 text-sm">
                            <option value="TrakWel MES">TrakWel Shopfloor MES</option>
                            <option value="PlanWel Gantt">PlanWel Capacity & Dynamic Gantt</option>
                            <option value="mTrak OEE">mTrak Machine Maintenance (OEE)</option>
                            <option value="SewIoT Terminals">SewIoT Line Pacing Terminals</option>
                        </select>
                    </div>

                    <button type="submit" :disabled="loading"
                            class="w-full mt-2 flex items-center justify-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-sky-500/20 transition-all text-sm cursor-pointer">
                        <span x-show="!loading">Submit Demo Request</span>
                        <span x-show="loading" class="animate-spin w-5 h-5 border-2 border-white border-t-transparent rounded-full"></span>
                    </button>
                </form>
            </div>
        </template>
    </div>
</div>

</div>

@endsection
