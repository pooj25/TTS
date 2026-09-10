@extends('layouts.app')

@section('title', 'Track Tech Solutions - The Operating System for Garment Manufacturing')

@section('content')

<!-- Unique Hero Section (Transparent to show the custom 3D Canvas) -->
<section class="relative min-h-[90vh] flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 bg-transparent">
    <div class="max-w-5xl mx-auto w-full flex flex-col items-center text-center space-y-10 relative z-10">
        
        <div data-aos="zoom-in" class="px-5 py-2 rounded-full bg-white/80 border border-slate-200 shadow-sm backdrop-blur-md">
            <span class="text-sm font-semibold text-primary-600 uppercase tracking-widest">Next-Gen Factory Intelligence</span>
        </div>

        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-5xl sm:text-7xl lg:text-8xl font-black tracking-tighter text-slate-900 leading-[1.05] max-w-5xl">
            The Operating System <br class="hidden sm:inline" />
            for <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-accent-500">Modern Apparel</span>
        </h1>
        
        <p data-aos="fade-up" data-aos-delay="200" class="text-xl sm:text-3xl text-slate-600 font-medium leading-relaxed max-w-3xl">
            Unify your cutting room, sewing lines, and quality control into a single, perfectly orchestrated digital ecosystem.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="pt-8 flex flex-col sm:flex-row items-center justify-center gap-6 w-full sm:w-auto">
            <a href="/contact" class="w-full sm:w-auto flex items-center justify-center gap-3 bg-slate-900 hover:bg-primary-600 text-white font-bold text-lg px-12 py-5 rounded-xl shadow-2xl shadow-slate-900/20 hover:shadow-primary-600/40 hover:-translate-y-1 transition-all group">
                <span>Start Transforming</span>
                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
            <a href="#platform" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-900 font-bold text-lg px-12 py-5 rounded-xl border-2 border-slate-200 hover:border-primary-600 shadow-sm transition-all">
                <span>Discover Features</span>
            </a>
        </div>
    </div>
</section>

<!-- Scale & Impact Section -->
<section class="relative py-20 px-4 sm:px-6 lg:px-8 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 divide-x divide-slate-200 border border-slate-200 rounded-3xl shadow-sm bg-white overflow-hidden" data-aos="fade-up">
            <div class="p-10 text-center hover:bg-slate-50 transition-colors">
                <div class="text-5xl font-black text-slate-900 mb-2">500<span class="text-primary-600">+</span></div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Live Production Lines</p>
            </div>
            <div class="p-10 text-center hover:bg-slate-50 transition-colors">
                <div class="text-5xl font-black text-slate-900 mb-2">10<span class="text-accent-500">M</span></div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Pieces Tracked Daily</p>
            </div>
            <div class="p-10 text-center hover:bg-slate-50 transition-colors">
                <div class="text-5xl font-black text-slate-900 mb-2">99<span class="text-primary-600">%</span></div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Defect Reduction</p>
            </div>
            <div class="p-10 text-center hover:bg-slate-50 transition-colors">
                <div class="text-5xl font-black text-slate-900 mb-2">25<span class="text-accent-500">+</span></div>
                <p class="text-sm font-bold text-slate-500 uppercase tracking-wider">Global Countries</p>
            </div>
        </div>
    </div>
</section>

<!-- Distinct Alternating Feature Layout -->
<section id="platform" class="relative py-32 px-4 sm:px-6 lg:px-8 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-40">
        
        <!-- Feature 1: Image Left, Text Right -->
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <div class="w-full lg:w-1/2 relative" data-aos="fade-right">
                <div class="absolute inset-0 bg-gradient-to-tr from-primary-200 to-accent-200 rounded-[3rem] transform -rotate-3 scale-105 z-0"></div>
                <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1000&q=80" alt="Vision AI Quality" class="relative z-10 rounded-[2.5rem] shadow-2xl object-cover aspect-[4/3] w-full border border-white/50">
                <div class="absolute -bottom-8 -right-8 bg-white p-6 rounded-3xl shadow-xl z-20 border border-slate-100 hidden md:block">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-accent-100 flex items-center justify-center text-accent-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-slate-500 uppercase">Accuracy</p>
                            <p class="text-2xl font-black text-slate-900">99.8%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-100 text-primary-700 font-bold text-sm">
                    <span class="w-2 h-2 rounded-full bg-primary-600 animate-pulse"></span>
                    Vision Intelligence
                </div>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-900 leading-tight">Flawless Quality, <br/><span class="text-primary-600">Automated.</span></h2>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Replace manual error-prone inspections with our cutting-edge Vision AI. Instantly detect stitching flaws, fabric defects, and measurement variances inline, stopping quality issues before they reach the packaging department.
                </p>
                <ul class="space-y-4 pt-4">
                    <li class="flex items-center gap-3 text-slate-700 font-semibold"><svg class="w-6 h-6 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Real-time AQL scoring</li>
                    <li class="flex items-center gap-3 text-slate-700 font-semibold"><svg class="w-6 h-6 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Automated fabric roll inspection</li>
                    <li class="flex items-center gap-3 text-slate-700 font-semibold"><svg class="w-6 h-6 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Instant defect analytics dashboards</li>
                </ul>
            </div>
        </div>

        <!-- Feature 2: Text Left, Image Right -->
        <div class="flex flex-col-reverse lg:flex-row items-center gap-16 lg:gap-24">
            <div class="w-full lg:w-1/2 space-y-8" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent-100 text-accent-700 font-bold text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Live Telemetry
                </div>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-900 leading-tight">Total Visibility, <br/><span class="text-accent-600">Zero Guesswork.</span></h2>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Track every single bundle moving across your sewing lines in real-time. Our RFID and barcode integration provides 100% transparent Work-In-Progress (WIP) tracking from the cutting room to final dispatch.
                </p>
                <div class="pt-6">
                    <a href="/solutions" class="text-primary-600 font-bold text-lg flex items-center gap-2 hover:text-primary-700 group">
                        Explore Production Tracking 
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
            <div class="w-full lg:w-1/2 relative" data-aos="fade-left">
                <div class="absolute inset-0 bg-gradient-to-bl from-slate-200 to-slate-300 rounded-[3rem] transform rotate-3 scale-105 z-0"></div>
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1000&q=80" alt="Production Tracking" class="relative z-10 rounded-[2.5rem] shadow-2xl object-cover aspect-[4/3] w-full border border-white/50">
            </div>
        </div>

    </div>
</section>

<!-- Don Norman Inspired Philosophy Section (Unique Dark Contrast) -->
<section class="py-32 px-4 sm:px-6 lg:px-8 bg-slate-950 text-white relative overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-primary-600/20 rounded-full blur-[100px] pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto space-y-20 relative z-10">
        <div class="text-center space-y-6 max-w-4xl mx-auto" data-aos="fade-up">
            <h2 class="text-4xl sm:text-6xl font-black tracking-tight text-white leading-tight">
                Designed for the <span class="text-primary-400">Humans</span> <br/> Behind the Machines.
            </h2>
            <p class="text-slate-400 text-lg sm:text-2xl font-medium leading-relaxed max-w-3xl mx-auto">
                Meaningful, sustainable, and humanity-centered design. We don't just optimize factories; we elevate the people working in them.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div data-aos="slide-up" data-aos-delay="100" class="p-10 rounded-[2rem] bg-slate-900 border border-slate-800 hover:border-primary-500/50 transition-colors group">
                <div class="text-primary-400 mb-6 group-hover:scale-110 transition-transform origin-left">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Meaningful Efficiency</h3>
                <p class="text-slate-400 leading-relaxed text-lg">By eliminating wasted effort, we empower factory teams to focus on true craftsmanship rather than endless firefighting.</p>
            </div>
            
            <div data-aos="slide-up" data-aos-delay="200" class="p-10 rounded-[2rem] bg-slate-900 border border-slate-800 hover:border-accent-500/50 transition-colors group">
                <div class="text-accent-400 mb-6 group-hover:scale-110 transition-transform origin-left">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Sustainable Impact</h3>
                <p class="text-slate-400 leading-relaxed text-lg">Our smart spreading modules drastically reduce textile waste, actively lowering your factory's environmental footprint.</p>
            </div>
            
            <div data-aos="slide-up" data-aos-delay="300" class="p-10 rounded-[2rem] bg-slate-900 border border-slate-800 hover:border-primary-500/50 transition-colors group">
                <div class="text-primary-400 mb-6 group-hover:scale-110 transition-transform origin-left">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Empowering Tools</h3>
                <p class="text-slate-400 leading-relaxed text-lg">Interfaces built to remove friction. We design software that your floor managers and operators will actually love using.</p>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners Marquee -->
<section class="py-16 bg-white border-y border-slate-200 overflow-hidden">
    <div class="relative flex overflow-x-hidden opacity-60 grayscale hover:grayscale-0 transition-all duration-700">
        <div class="py-4 animate-marquee whitespace-nowrap flex items-center gap-16 px-8">
            <h4 class="text-3xl font-black text-slate-300">ARVIND LTD</h4>
            <h4 class="text-3xl font-black text-slate-300">SHAHI EXPORTS</h4>
            <h4 class="text-3xl font-black text-slate-300">PDS MULTINATIONAL</h4>
            <h4 class="text-3xl font-black text-slate-300">MODELAMA</h4>
            <h4 class="text-3xl font-black text-slate-300">ARMSTRONG</h4>
        </div>
        <div class="py-4 animate-marquee whitespace-nowrap flex items-center gap-16 px-8 absolute top-0" aria-hidden="true" style="margin-left: 100%;">
            <h4 class="text-3xl font-black text-slate-300">ARVIND LTD</h4>
            <h4 class="text-3xl font-black text-slate-300">SHAHI EXPORTS</h4>
            <h4 class="text-3xl font-black text-slate-300">PDS MULTINATIONAL</h4>
            <h4 class="text-3xl font-black text-slate-300">MODELAMA</h4>
            <h4 class="text-3xl font-black text-slate-300">ARMSTRONG</h4>
        </div>
    </div>
</section>

<!-- Clean Modern CTA -->
<section class="py-32 px-4 sm:px-6 lg:px-8 bg-slate-50 relative overflow-hidden">
    <div class="max-w-5xl mx-auto text-center space-y-10 relative z-10">
        <h2 data-aos="zoom-in" class="text-5xl sm:text-7xl font-black text-slate-900 tracking-tight">Step Into The Future.</h2>
        <p data-aos="fade-up" data-aos-delay="100" class="text-2xl text-slate-600 max-w-3xl mx-auto font-medium">Join the intelligent manufacturing revolution. Optimize your factory with Track Tech Solutions today.</p>
        <div data-aos="fade-up" data-aos-delay="200" class="pt-8 flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="/contact" class="bg-primary-600 hover:bg-primary-700 text-white font-bold text-xl px-12 py-5 rounded-xl shadow-2xl hover:-translate-y-1 transition-all">Request Demo</a>
            <a href="/roi-calculator" class="bg-white hover:bg-slate-100 text-slate-900 border-2 border-slate-200 font-bold text-xl px-12 py-5 rounded-xl shadow-sm transition-all">Calculate Your ROI</a>
        </div>
    </div>
</section>

@endsection
