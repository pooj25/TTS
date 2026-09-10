@extends('layouts.app')

@section('title', 'Track Tech Solutions - Digital Intelligence for Apparel Manufacturing')

@section('content')

<!-- Unique Custom Hero Section -->
<section class="relative min-h-[95vh] flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 bg-white/60">
    <div class="max-w-6xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">
        
        <div data-aos="fade-down" class="px-6 py-2 rounded-full border-2 border-dashed border-accent-400 bg-white shadow-sm">
            <span class="text-xs font-black text-primary-600 uppercase tracking-[0.2em]">Apparel & Textile Manufacturing Operations</span>
        </div>

        <h1 data-aos="zoom-in" data-aos-duration="1000" class="text-5xl sm:text-7xl lg:text-8xl font-black tracking-tighter text-slate-900 leading-[1.1] max-w-5xl">
            Dynamic Digital <br class="hidden sm:inline" />
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-500 to-accent-500">Intelligence</span> Platform
        </h1>
        
        <p data-aos="fade-up" data-aos-delay="200" class="text-xl sm:text-2xl text-slate-600 font-medium leading-relaxed max-w-3xl">
            Empower your factory floor with our Interactive WebGL 3D Engine, Real-Time Production Tracking, and Alpine.js ROI Calculator.
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="pt-10 flex flex-col sm:flex-row items-center justify-center gap-6 w-full sm:w-auto">
            <a href="/contact" class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-br from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white font-bold text-lg px-12 py-5 rounded-tl-[30px] rounded-br-[30px] shadow-xl hover:-translate-y-1 transition-all group border-2 border-transparent hover:border-white">
                <span>Book a Live Demo</span>
                <svg class="w-6 h-6 group-hover:rotate-45 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="#calculator" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-white text-slate-900 font-bold text-lg px-12 py-5 rounded-tr-[30px] rounded-bl-[30px] border-2 border-dashed border-slate-300 hover:border-accent-500 shadow-sm hover:shadow-lg transition-all group">
                <span class="group-hover:text-accent-600 transition-colors">Estimate Your ROI</span>
            </a>
        </div>
    </div>
</section>

<!-- Curved Stitching Separator -->
<div class="w-full overflow-hidden leading-none border-t-2 border-dashed border-slate-200">
    <svg class="relative block w-full h-[50px] text-slate-50" fill="currentColor" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C63.2,16,128.8,26.5,191.7,39.61,235.2,48.5,279.1,52.8,321.39,56.44Z"></path>
    </svg>
</div>

<!-- Custom Shaped Product Modules -->
<section class="relative py-24 px-4 sm:px-6 lg:px-8 bg-slate-50">
    <div class="max-w-7xl mx-auto space-y-28">
        
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-black text-slate-900">End-to-End <span class="text-primary-500">Fabrication</span> Control</h2>
            <div class="mt-4 w-24 h-1 bg-accent-500 mx-auto rounded-full"></div>
        </div>

        <!-- Module 1 -->
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-1/2 relative group" data-aos="fade-right">
                <div class="absolute inset-0 bg-primary-100 rounded-tr-[80px] rounded-bl-[80px] transform rotate-3 scale-105 z-0 transition-transform group-hover:rotate-6"></div>
                <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1000&q=80" alt="3D Engine" class="relative z-10 rounded-tr-[70px] rounded-bl-[70px] shadow-2xl object-cover aspect-[4/3] w-full border-4 border-white">
                <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-full shadow-xl z-20 border-2 border-dashed border-accent-400 animate-spin-slow hidden md:block">
                    <div class="w-16 h-16 rounded-full bg-accent-50 flex items-center justify-center text-accent-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path></svg>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 space-y-6" data-aos="fade-left">
                <div class="text-accent-500 font-bold uppercase tracking-widest text-sm flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-accent-500"></span> 01 / Visualization
                </div>
                <h3 class="text-4xl font-black text-slate-900 leading-tight">Interactive Three.js <br/><span class="text-primary-600">WebGL 3D Engine</span></h3>
                <p class="text-lg text-slate-600 leading-relaxed border-l-4 border-primary-500 pl-6">
                    Rotate and monitor real-time 3D factory models. Gain spatial intelligence over your entire shop floor, identifying bottlenecks visually before they impact production targets.
                </p>
                <button class="mt-4 px-8 py-3 bg-slate-900 text-white font-bold rounded-tl-[20px] rounded-br-[20px] hover:bg-primary-600 transition-colors">Experience 3D Viewer</button>
            </div>
        </div>

        <!-- Module 2 -->
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-1/2 space-y-6" data-aos="fade-right">
                <div class="text-primary-500 font-bold uppercase tracking-widest text-sm flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-primary-500"></span> 02 / Analytics
                </div>
                <h3 class="text-4xl font-black text-slate-900 leading-tight">Alpine.js Dynamic <br/><span class="text-accent-600">ROI Calculator</span></h3>
                <p class="text-lg text-slate-600 leading-relaxed border-l-4 border-accent-500 pl-6">
                    Instantly estimate your cost-savings and efficiency gains. Our lightning-fast Alpine.js calculator dynamically adapts to your factory's specific line setup and daily output volumes.
                </p>
                <button class="mt-4 px-8 py-3 bg-white border-2 border-slate-900 text-slate-900 font-bold rounded-tr-[20px] rounded-bl-[20px] hover:bg-slate-900 hover:text-white transition-colors">Calculate Savings</button>
            </div>
            <div class="w-full lg:w-1/2 relative group" data-aos="fade-left">
                <div class="absolute inset-0 bg-accent-100 rounded-tl-[80px] rounded-br-[80px] transform -rotate-3 scale-105 z-0 transition-transform group-hover:-rotate-6"></div>
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=80" alt="ROI Calculator" class="relative z-10 rounded-tl-[70px] rounded-br-[70px] shadow-2xl object-cover aspect-[4/3] w-full border-4 border-white">
            </div>
        </div>

    </div>
</section>

<!-- Continuous Partner Marquee (Dashed styling) -->
<section class="py-16 bg-white border-y-2 border-dashed border-slate-300 overflow-hidden relative">
    <div class="absolute left-0 inset-y-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
    <div class="absolute right-0 inset-y-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
    
    <div class="text-center mb-10" data-aos="fade-up">
        <h4 class="text-sm font-bold text-slate-400 uppercase tracking-widest">Integrating with 9 Industry Leaders</h4>
    </div>
    <div class="relative flex overflow-x-hidden">
        <div class="py-4 animate-marquee whitespace-nowrap flex items-center gap-16 px-8">
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">ARVIND LTD</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-accent-500 pb-1">SHAHI EXPORTS</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">PDS</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-accent-500 pb-1">MODELAMA</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">ARMSTRONG</h4>
        </div>
        <div class="py-4 animate-marquee whitespace-nowrap flex items-center gap-16 px-8 absolute top-0" aria-hidden="true" style="margin-left: 100%;">
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">ARVIND LTD</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-accent-500 pb-1">SHAHI EXPORTS</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">PDS</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-accent-500 pb-1">MODELAMA</h4>
            <h4 class="text-2xl font-black text-slate-800 border-b-4 border-primary-500 pb-1">ARMSTRONG</h4>
        </div>
    </div>
</section>

<!-- Don Norman Inspired Philosophy Section -->
<section class="py-24 px-4 sm:px-6 lg:px-8 bg-slate-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto space-y-16 relative z-10">
        <div class="text-center space-y-4 max-w-3xl mx-auto" data-aos="fade-up">
            <h2 class="text-4xl sm:text-5xl font-bold tracking-tight text-white leading-tight">Meaningful, Sustainable, <br/><span class="text-accent-400 italic">Humanity Centered</span></h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">We build digital tools that elevate the people working in factories and protect the world around them.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div data-aos="fade-up" data-aos-delay="100" class="p-8 rounded-tl-[40px] rounded-br-[40px] bg-slate-800 border-2 border-dashed border-slate-600 hover:border-primary-400 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-primary-500/20 text-primary-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Meaningful Efficiency</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Reducing defects allows factory teams to focus on craftsmanship rather than firefighting.</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="200" class="p-8 rounded-tr-[40px] rounded-bl-[40px] bg-slate-800 border-2 border-dashed border-slate-600 hover:border-accent-400 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-accent-500/20 text-accent-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Sustainable Production</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Zero-loss fabric modules drastically reduce textile waste and lower your carbon footprint.</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="300" class="p-8 rounded-tl-[40px] rounded-br-[40px] bg-slate-800 border-2 border-dashed border-slate-600 hover:border-primary-400 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-primary-500/20 text-primary-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Humanity Centered</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Intuitive, empowering interfaces that remove friction and reduce stress on the factory floor.</p>
            </div>
        </div>
    </div>
</section>

@endsection
