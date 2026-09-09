@extends('layouts.app')

@section('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle')

@section('content')
        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center relative -mt-20" id="section-hero">
            <div class="max-w-5xl mx-auto px-6 text-center pt-32">
                <div class="inline-block mb-6 px-4 py-1.5 rounded-full border border-sky-500/30 bg-sky-500/10 text-sky-400 text-sm font-medium tracking-wide">
                    Digital Factory Engine
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight tracking-tight">
                    Revolutionizing <br>
                    <span class="text-gradient">Garment Manufacturing</span><br>
                    With Real-Time Intelligence
                </h1>
                <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                    From Factory Floor to Executive Dashboard.<br>
                    Track. Optimize. Transform.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="bg-gradient-to-r from-sky-500 to-blue-600 text-white px-8 py-4 rounded-full font-medium hover:shadow-lg hover:shadow-sky-500/30 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        GET DEMO
                    </a>
                    <a href="#section-solutions" class="glass-panel text-white px-8 py-4 rounded-full font-medium hover:bg-white/10 transition-all">
                        Learn More
                    </a>
                </div>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-60">
                <span class="text-xs uppercase tracking-widest text-gray-400">Scroll to Explore</span>
                <div class="w-6 h-10 border-2 border-gray-500 rounded-full flex justify-center p-1">
                    <div class="w-1.5 h-1.5 bg-sky-400 rounded-full animate-bounce"></div>
                </div>
            </div>
        </section>

        <!-- Industry Solutions (Transforming) -->
        <section class="py-32 relative" id="section-solutions">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-sky-400 font-semibold tracking-wider uppercase text-sm mb-4 block">Industry Solutions</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gradient-blue">Transforming the Fashion Industry</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-sky-400 to-blue-600 mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="glass-panel p-10 rounded-3xl relative overflow-hidden">
                        <!-- Decorative glow -->
                        <div class="absolute -top-20 -right-20 w-64 h-64 bg-sky-500/20 rounded-full blur-3xl"></div>
                        
                        <h3 class="text-3xl font-bold mb-6">Fashion Manufacturers &<br>Innovative Brands</h3>
                        <p class="text-gray-300 leading-relaxed mb-8">
                            From planning to production, data to decisions, Track Tech Solution seamlessly connects your entire operation. Our AI-powered platform helps you boost efficiency, reduce waste, and achieve sustainable excellence in today's competitive fashion industry.
                        </p>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3 text-gray-300">
                                <svg class="w-6 h-6 text-sky-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Real-time production tracking across all facilities</span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-300">
                                <svg class="w-6 h-6 text-sky-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>AI-powered quality control reducing defects by up to 35%</span>
                            </li>
                            <li class="flex items-start gap-3 text-gray-300">
                                <svg class="w-6 h-6 text-sky-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Predictive maintenance to maximize equipment uptime</span>
                            </li>
                        </ul>
                        
                        <a href="/solutions" class="inline-flex items-center text-sky-400 hover:text-sky-300 font-medium group">
                            Explore Solutions 
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="glass-card p-8 rounded-2xl flex flex-col justify-center items-center text-center">
                            <div class="text-5xl font-bold text-sky-400 mb-2">28%</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Waste Reduction</div>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col justify-center items-center text-center mt-0 sm:mt-12">
                            <div class="text-5xl font-bold text-blue-500 mb-2">37%</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Efficiency Boost</div>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col justify-center items-center text-center">
                            <div class="text-5xl font-bold text-purple-400 mb-2">99.2%</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Quality Score</div>
                        </div>
                        <div class="glass-card p-8 rounded-2xl flex flex-col justify-center items-center text-center mt-0 sm:mt-12">
                            <div class="text-5xl font-bold text-indigo-400 mb-2">24/7</div>
                            <div class="text-sm text-gray-400 uppercase tracking-wider">Live Tracking</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Products -->
        <section class="py-32 relative" id="section-products">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <span class="text-sky-400 font-semibold tracking-wider uppercase text-sm mb-4 block">Our Solutions</span>
                    <h2 class="text-4xl md:text-5xl font-bold">Industry Leading <span class="text-sky-500">Expertise</span></h2>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Product 1 -->
                    <div class="glass-card p-8 rounded-2xl group">
                        <div class="w-14 h-14 bg-sky-500/20 rounded-xl flex items-center justify-center mb-6 border border-sky-500/30 text-sky-400">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-sky-400 transition-colors">Quality Control</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Flawless Quality: Predict and prevent defects, automate checks, and ensure consistent excellence with our AI-powered Quality Control system.
                        </p>
                        <a href="/solutions" class="text-sm font-semibold text-sky-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="glass-card p-8 rounded-2xl group md:translate-y-12">
                        <div class="w-14 h-14 bg-blue-500/20 rounded-xl flex items-center justify-center mb-6 border border-blue-500/30 text-blue-400">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-blue-400 transition-colors">Production Tracking</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Gain complete visibility of your production line with detailed tracking, from materials to finished products with real-time monitoring.
                        </p>
                        <a href="/solutions" class="text-sm font-semibold text-blue-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
                    </div>

                    <!-- Product 3 -->
                    <div class="glass-card p-8 rounded-2xl group">
                        <div class="w-14 h-14 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6 border border-purple-500/30 text-purple-400">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-purple-400 transition-colors">Machine Maintenance</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Maximized Uptime: Unlock the full potential of your machines and track Overall Equipment Effectiveness (OEE) with predictive maintenance.
                        </p>
                        <a href="/solutions" class="text-sm font-semibold text-purple-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
                    </div>

                    <!-- Product 4 -->
                    <div class="glass-card p-8 rounded-2xl group md:translate-y-12">
                        <div class="w-14 h-14 bg-indigo-500/20 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/30 text-indigo-400">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 group-hover:text-indigo-400 transition-colors">Production Planning</h3>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Optimized Planning: Schedule orders against lines, sections, and locations with ease using our intuitive Production Planning module.
                        </p>
                        <a href="/solutions" class="text-sm font-semibold text-indigo-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impact Section -->
        <section class="py-32 relative" id="section-impact">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <span class="text-purple-400 font-semibold tracking-wider uppercase text-sm mb-4 block">Our Impact</span>
                <h2 class="text-4xl md:text-6xl font-bold mb-6 text-gradient-blue">Beyond borders, beyond limits</h2>
                <p class="text-xl text-gray-400 mb-16 max-w-2xl mx-auto">
                    Empowering manufacturers worldwide with cutting-edge technology and innovative solutions.
                </p>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="glass-card p-8 rounded-2xl">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">250+</div>
                        <div class="text-gray-400">Active lines</div>
                    </div>
                    <div class="glass-card p-8 rounded-2xl">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">1M+</div>
                        <div class="text-gray-400">Users</div>
                    </div>
                    <div class="glass-card p-8 rounded-2xl">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">50M+</div>
                        <div class="text-gray-400">Pieces checked/month</div>
                    </div>
                    <div class="glass-card p-8 rounded-2xl">
                        <div class="text-4xl md:text-5xl font-bold text-white mb-2">12</div>
                        <div class="text-gray-400">Countries</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Marquee -->
        <section class="py-20 border-t border-white/5 bg-black/40 backdrop-blur-md">
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-gray-300">Trusted by Industry Leaders</h3>
            </div>
            
            <div class="marquee-container w-full max-w-7xl mx-auto py-4">
                <!-- First set -->
                <div class="marquee-content">
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Arvind Ltd</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Shahi Exports</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Matrix</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Pearl Global</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Gokaldas</div>
                </div>
                <!-- Duplicate for seamless scroll -->
                <div class="marquee-content" aria-hidden="true">
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Arvind Ltd</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Shahi Exports</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Matrix</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Pearl Global</div>
                    <div class="glass-panel px-8 py-4 rounded-xl flex items-center justify-center font-bold text-xl text-gray-400 min-w-[200px]">Gokaldas</div>
                </div>
            </div>
        </section>
@endsection