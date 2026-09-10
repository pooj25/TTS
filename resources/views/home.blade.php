@extends('layouts.app')

@section('title', 'Track Tech Solution - Digital Intelligence for Garment Manufacturing')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex flex-col justify-center items-center pt-32 pb-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-slate-950 text-white">
    <!-- Custom High-Tech Garment Manufacturing Video Background -->
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <video autoplay loop muted playsinline preload="auto" class="w-full h-full object-cover opacity-75 scale-105 filter contrast-105 saturate-110">
            <source src="https://tts-page.onrender.com/videos/garment-bg.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/80 via-transparent to-slate-950/90"></div>
        <div class="absolute inset-0">
            <div class="absolute top-[20%] right-[10%] w-24 h-24 bg-sky-400/20 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-[30%] left-[15%] w-32 h-32 bg-sky-500/20 rounded-full blur-3xl animate-pulse-slow"></div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto w-full flex flex-col items-center text-center space-y-8 relative z-10">
        <h1 data-aos="zoom-out-up" data-aos-duration="1000" class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-white font-sans max-w-4xl drop-shadow-lg">
            Revolutionizing <span class="text-sky-400 italic font-sans drop-shadow-lg">Garment Manufacturing</span> <br class="hidden sm:inline" />
            With Real-Time Digital Intelligence
        </h1>
        <p data-aos="fade-up" data-aos-delay="200" class="text-lg sm:text-2xl text-slate-100 font-sans leading-relaxed max-w-2xl drop-shadow-md">
            From Factory Floor to Executive Dashboard. <br />
            <span class="text-sky-400 font-sans text-xs sm:text-sm tracking-widest uppercase font-semibold">Track. Optimize. Transform.</span>
        </p>

        <div data-aos="fade-up" data-aos-delay="400" class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-5 w-full sm:w-auto">
            <a href="/contact" class="w-full sm:w-auto flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-500 hover:from-sky-400 hover:to-blue-600 text-white font-semibold text-base px-10 py-4 rounded-full shadow-2xl shadow-sky-500/50 hover:scale-105 transition-all group">
                <span>Book Live Demo</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="#impact" class="w-full sm:w-auto flex items-center justify-center gap-2 bg-slate-900/80 hover:bg-slate-800 text-white font-sans font-medium text-base px-9 py-4 rounded-full border border-white/30 hover:border-sky-400 backdrop-blur-md shadow-lg transition-all group">
                <span>Explore Platform</span>
            </a>
        </div>
        
        <div data-aos="fade-in" data-aos-delay="600" class="pt-8 border-t border-white/20 flex flex-wrap items-center justify-center gap-4 text-xs font-sans font-medium text-white w-full mt-8">
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Quality Control AI</div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Live Tracking</div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Machine OEE</div>
            <div class="px-4 py-2 rounded-full bg-slate-900/80 border border-sky-400/30 backdrop-blur-md shadow-md flex items-center gap-2"><span class="w-2 h-2 rounded-full bg-sky-400 animate-pulse"></span> Smart Gantt</div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section id="impact" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto space-y-16">
        <div class="text-center space-y-4 max-w-3xl mx-auto" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-50 border border-sky-200 inline-block">Our Impact</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-sky-600 tracking-tight leading-tight">Beyond borders, beyond limits</h2>
            <p class="text-slate-700 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">Empowering manufacturers worldwide with cutting-edge technology and innovative solutions</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div data-aos="fade-up" data-aos-delay="100" class="relative p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group text-center">
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 tracking-tight mb-2">500+</div>
                <p class="text-sm font-semibold text-slate-800">Active lines</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="relative p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group text-center">
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 tracking-tight mb-2">10M+</div>
                <p class="text-sm font-semibold text-slate-800">Users</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="relative p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group text-center">
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 tracking-tight mb-2">50M+</div>
                <p class="text-sm font-semibold text-slate-800">Pieces checked/mo</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" class="relative p-8 rounded-3xl bg-slate-50 border border-slate-200 hover:border-sky-300 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all group text-center">
                <div class="text-4xl sm:text-5xl font-bold text-sky-600 tracking-tight mb-2">25</div>
                <p class="text-sm font-semibold text-slate-800">Countries</p>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability & Humanity-Centered Design Section -->
<section class="py-24 px-4 sm:px-6 lg:px-8 bg-slate-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=1200&q=80')] opacity-5 bg-cover bg-center mix-blend-overlay"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-sky-500/10 rounded-full blur-3xl translate-x-1/3 -translate-y-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto space-y-16 relative z-10">
        <div class="text-center space-y-4 max-w-3xl mx-auto" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-400 px-4 py-1.5 rounded-full border border-sky-400/30 inline-block bg-sky-900/30">Our Philosophy</span>
            <h2 class="text-4xl sm:text-5xl font-bold tracking-tight text-white leading-tight">Meaningful, Sustainable, <br/><span class="text-sky-400 italic">Humanity Centered</span></h2>
            <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">We believe in building digital tools that don't just optimize factories, but elevate the people working in them and protect the world around them.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div data-aos="fade-up" data-aos-delay="100" class="p-8 rounded-3xl bg-slate-800/50 border border-slate-700 backdrop-blur-sm hover:border-sky-400/50 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-sky-500/20 text-sky-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Meaningful Efficiency</h3>
                <p class="text-sm text-slate-400 leading-relaxed">By reducing defects and streamlining workflows, we eliminate wasted effort, allowing factory teams to focus on craftsmanship rather than constant firefighting.</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="200" class="p-8 rounded-3xl bg-slate-800/50 border border-slate-700 backdrop-blur-sm hover:border-sky-400/50 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Sustainable Production</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Our smart spreading and zero-loss fabric modules drastically reduce textile waste, actively lowering the carbon footprint of global garment manufacturing.</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="300" class="p-8 rounded-3xl bg-slate-800/50 border border-slate-700 backdrop-blur-sm hover:border-sky-400/50 transition-all">
                <div class="w-14 h-14 mx-auto rounded-full bg-rose-500/20 text-rose-400 flex items-center justify-center mb-6">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Humanity Centered</h3>
                <p class="text-sm text-slate-400 leading-relaxed">We design for the humans behind the machines. Our interfaces are intuitive and empowering, removing friction and reducing stress on the factory floor.</p>
            </div>
        </div>
    </div>
</section>

<!-- Products / Benefits -->
<section id="products" class="relative py-28 px-4 sm:px-6 lg:px-8 bg-slate-50">
    <div class="max-w-7xl mx-auto space-y-20">
        <div class="text-center space-y-4 max-w-3xl mx-auto" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block">Comprehensive Software Suite</span>
            <h2 class="text-4xl sm:text-5xl font-bold text-slate-900 tracking-tight">Designed for <span class="text-sky-600 italic">Smart Garment Factories</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div data-aos="fade-right" class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-50 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200">AI Powered</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Quality Control AI</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1">Predict & Prevent Defects Inline</p>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">Flawless quality assurance powered by vision AI. Automate fabric roll inspection, stitching flaw detection, and inline quality logging to reduce defects by up to 35%.</p>
                </div>
            </div>

            <div data-aos="fade-left" class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-50 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200">Live Telemetry</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Production Tracking</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1">End-to-End Real Time Visibility</p>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">Gain 100% transparent tracking across all production stages—from cutting room and sewing lines to finishing and final dispatch.</p>
                </div>
            </div>

            <div data-aos="fade-right" class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-50 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200">IoT Connected</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Machine Maintenance (OEE)</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1">Equipment Health & Downtime Prevention</p>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">Maximize overall equipment effectiveness (OEE). Monitor machine run hours, predict motor failures, and schedule servicing automatically.</p>
                </div>
            </div>

            <div data-aos="fade-left" class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200 hover:border-sky-300 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <div class="p-3.5 rounded-2xl bg-sky-50 text-sky-600 group-hover:bg-sky-500 group-hover:text-white transition-colors">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-xs font-semibold text-sky-700 px-3 py-1 rounded-full bg-sky-50 border border-sky-200">Smart Gantt</span>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Production Planning</h3>
                        <p class="text-xs font-medium text-slate-500 mt-1">Intelligent Scheduling & Line Optimization</p>
                    </div>
                    <p class="text-sm text-slate-600 leading-relaxed">Schedule customer orders against exact line capacities, section skills, and delivery deadlines with an intuitive digital planner.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modules Showcase -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white border-t border-slate-200">
    <div class="max-w-7xl mx-auto space-y-12">
        <div class="text-center space-y-3 max-w-2xl mx-auto" data-aos="fade-up">
            <span class="text-xs font-semibold uppercase tracking-widest text-sky-700 px-4 py-1.5 rounded-full bg-sky-50 border border-sky-200 inline-block">Garment Industry Modules</span>
            <h3 class="text-3xl font-bold text-slate-900">End-to-End Digitalization for Apparel Factories</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div data-aos="flip-left" data-aos-delay="100" class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80" alt="QMS" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-semibold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">QMS AI</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Quality Management</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Inline fabric inspection, stitch defect tagging, and AQL automated scoring dashboards.</p>
                </div>
            </div>
            
            <div data-aos="flip-left" data-aos-delay="200" class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80" alt="Tracking" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-semibold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">RFID & Barcode</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Production Tracking</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Real-time bundle tracking across sewing lines with real-time WIP updates.</p>
                </div>
            </div>
            
            <div data-aos="flip-left" data-aos-delay="300" class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?auto=format&fit=crop&w=600&q=80" alt="Cutting" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-semibold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Smart Spreading</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Cutting Room</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Digital marker planning, fabric roll optimization, and automated ply-count tracking.</p>
                </div>
            </div>
            
            <div data-aos="flip-left" data-aos-delay="400" class="bg-slate-50 rounded-2xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all group">
                <div class="h-44 relative overflow-hidden bg-slate-200">
                    <img src="https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?auto=format&fit=crop&w=600&q=80" alt="Inventory" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                    <span class="absolute bottom-3 left-3 text-xs font-semibold text-white bg-sky-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md">Warehouse IoT</span>
                </div>
                <div class="p-5 space-y-2">
                    <h4 class="text-lg font-bold text-slate-900 group-hover:text-sky-600 transition-colors">Inventory Management</h4>
                    <p class="text-xs text-slate-600 leading-relaxed">Barcode-driven roll allocation, shade grouping, and zero-loss fabric storage.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners -->
<section class="py-16 bg-slate-50 border-t border-slate-200 overflow-hidden">
    <div class="text-center mb-10" data-aos="fade-up">
        <h3 class="text-2xl font-bold text-slate-700">Trusted by Industry Leaders</h3>
    </div>
    <div class="relative flex overflow-x-hidden">
        <div class="py-4 animate-marquee whitespace-nowrap flex items-center gap-8 px-4">
            <div class="px-8 py-4 rounded-xl bg-white border border-slate-200 shadow-sm font-bold text-xl text-slate-700 min-w-[200px] text-center hover:scale-105 transition-transform">Arvind Ltd</div>
            <div class="px-8 py-4 rounded-xl bg-white border border-slate-200 shadow-sm font-bold text-xl text-slate-700 min-w-[200px] text-center hover:scale-105 transition-transform">Shahi Exports</div>
            <div class="px-8 py-4 rounded-xl bg-white border border-slate-200 shadow-sm font-bold text-xl text-slate-700 min-w-[200px] text-center hover:scale-105 transition-transform">PDS</div>
            <div class="px-8 py-4 rounded-xl bg-white border border-slate-200 shadow-sm font-bold text-xl text-slate-700 min-w-[200px] text-center hover:scale-105 transition-transform">Modelama</div>
            <div class="px-8 py-4 rounded-xl bg-white border border-slate-200 shadow-sm font-bold text-xl text-slate-700 min-w-[200px] text-center hover:scale-105 transition-transform">Armstrong</div>
        </div>
    </div>
</section>

<!-- ROI Banner -->
<section class="py-24 px-4 sm:px-6 lg:px-8 bg-sky-600 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=1200&q=80')] opacity-10 bg-cover bg-center mix-blend-overlay"></div>
    <div class="max-w-4xl mx-auto text-center space-y-8 relative z-10">
        <h2 data-aos="zoom-in" class="text-4xl sm:text-5xl font-bold tracking-tight">Ready to Digitize Your Factory?</h2>
        <p data-aos="fade-up" data-aos-delay="100" class="text-xl text-sky-100 max-w-2xl mx-auto">Join the 500+ production lines already using Track Tech Solutions to optimize their manufacturing.</p>
        <div data-aos="fade-up" data-aos-delay="200" class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/contact" class="bg-white text-sky-600 font-bold text-lg px-8 py-4 rounded-full shadow-xl hover:bg-slate-50 hover:scale-105 transition-all">Get a Custom Demo</a>
            <a href="/roi-calculator" class="bg-sky-700/50 hover:bg-sky-700 text-white border border-sky-400/50 font-bold text-lg px-8 py-4 rounded-full shadow-xl hover:scale-105 transition-all">Calculate ROI</a>
        </div>
    </div>
</section>

@endsection
