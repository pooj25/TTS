<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Tech Solution - The Missing Piece in Your Production Puzzle</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        sky: {
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Three.js & GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        body {
            margin: 0;
            background-color: #030712;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* 3D Background Container */
        #webgl-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            pointer-events: none;
        }

        /* Content Overlay Layer */
        #content-layer {
            position: relative;
            z-index: 10;
        }

        /* Glassmorphism Utilities */
        .glass-panel {
            background: rgba(17, 24, 39, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        
        .glass-nav {
            background: rgba(3, 7, 18, 0.7);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.01) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.4s ease;
        }

        .glass-card:hover {
            border-color: rgba(14, 165, 233, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(14, 165, 233, 0.3);
            background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%);
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(to right, #38bdf8, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-blue {
            background: linear-gradient(to right, #38bdf8, #2563eb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Logo Symbol Animation */
        .logo-symbol {
            background: linear-gradient(135deg, #0ea5e9, #4f46e5);
            position: relative;
            overflow: hidden;
        }
        .logo-symbol::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }
        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Marquee */
        .marquee-container {
            display: flex;
            overflow: hidden;
            user-select: none;
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }
        .marquee-content {
            display: flex;
            flex-shrink: 0;
            justify-content: space-around;
            min-width: 100%;
            gap: 3rem;
            animation: scroll 25s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body>

    <!-- 3D Canvas Background -->
    <div id="webgl-container"></div>

    <!-- Main Content Layer -->
    <div id="content-layer">

        <!-- Navigation -->
        <header class="fixed top-0 w-full glass-nav z-50 transition-all duration-300 py-4">
            <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-full logo-symbol flex items-center justify-center font-bold text-white shadow-lg shadow-sky-500/30 transition-transform group-hover:scale-105">
                        TT
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-white">Track Tech <span class="text-sky-400">Solution</span></span>
                    </div>
                </a>
                
                <nav class="hidden md:flex gap-8 items-center text-sm font-medium">
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Products</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Business Stories</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Company</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Resources</a>
                    <a href="#" class="text-gray-300 hover:text-white transition-colors">Contact Us</a>
                </nav>

                <div class="hidden md:block">
                    <a href="#" class="bg-sky-500 hover:bg-sky-400 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 text-sm">
                        Book Demo
                    </a>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center justify-center pt-20 relative" id="section-hero">
            <div class="max-w-5xl mx-auto px-6 text-center">
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
                    <a href="#" class="bg-gradient-to-r from-sky-500 to-blue-600 text-white px-8 py-4 rounded-full font-medium hover:shadow-lg hover:shadow-sky-500/30 transition-all flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        GET DEMO
                    </a>
                    <a href="#" class="glass-panel text-white px-8 py-4 rounded-full font-medium hover:bg-white/10 transition-all">
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
                        
                        <a href="#" class="inline-flex items-center text-sky-400 hover:text-sky-300 font-medium group">
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
                        <a href="#" class="text-sm font-semibold text-sky-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
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
                        <a href="#" class="text-sm font-semibold text-blue-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
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
                        <a href="#" class="text-sm font-semibold text-purple-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
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
                        <a href="#" class="text-sm font-semibold text-indigo-400 uppercase tracking-wider hover:text-white transition-colors">Know More &rarr;</a>
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

        <!-- Footer -->
        <footer class="bg-[#030712] border-t border-white/10 pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-16">
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-8 h-8 rounded-full logo-symbol flex items-center justify-center font-bold text-white text-xs">TT</div>
                            <span class="font-bold text-lg">Track Tech <span class="text-sky-400">Solution</span></span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">
                            From planning to production, data to decisions, seamlessly connect your entire operation. Boost efficiency, reduce waste, and achieve sustainability.
                        </p>
                        <div class="flex flex-col gap-2 text-sm text-gray-400">
                            <a href="mailto:sales@tracktechsolutions.com" class="hover:text-white">sales@tracktechsolutions.com</a>
                            <a href="tel:+919650613666" class="hover:text-white">+91 96506 13666</a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-6">Company</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-sky-400">About Us</a></li>
                            <li><a href="#" class="hover:text-sky-400">Contact Us</a></li>
                            <li><a href="#" class="hover:text-sky-400">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-6">Products</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-sky-400">Quality Control</a></li>
                            <li><a href="#" class="hover:text-sky-400">Production Tracking</a></li>
                            <li><a href="#" class="hover:text-sky-400">Machine Maintenance</a></li>
                            <li><a href="#" class="hover:text-sky-400">Production Planning</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-6">Resources</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-sky-400">Success Stories</a></li>
                            <li><a href="#" class="hover:text-sky-400">FAQ</a></li>
                            <li><a href="#" class="hover:text-sky-400">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                    <p>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-white">Privacy Policy</a>
                        <a href="#" class="hover:text-white">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- 3D Logic -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Scene Setup
        const container = document.getElementById('webgl-container');
        const scene = new THREE.Scene();
        scene.fog = new THREE.FogExp2(0x030712, 0.025);

        // Camera
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 30;
        camera.position.y = 10;
        camera.position.x = 0;

        // Renderer
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Main Group
        const factoryGroup = new THREE.Group();
        scene.add(factoryGroup);

        // 1. Core Grid Floor
        const gridHelper = new THREE.GridHelper(150, 75, 0x0ea5e9, 0x1e293b);
        gridHelper.position.y = -10;
        gridHelper.material.opacity = 0.2;
        gridHelper.material.transparent = true;
        scene.add(gridHelper);

        // 2. Data Nodes (Particles)
        const particlesCount = 2000;
        const positions = new Float32Array(particlesCount * 3);
        const colors = new Float32Array(particlesCount * 3);

        const colorPalette = [
            new THREE.Color(0x38bdf8), // Sky
            new THREE.Color(0x818cf8), // Indigo
            new THREE.Color(0xc084fc), // Purple
            new THREE.Color(0xffffff)  // White
        ];

        for(let i = 0; i < particlesCount * 3; i+=3) {
            positions[i] = (Math.random() - 0.5) * 100;
            positions[i+1] = (Math.random() - 0.5) * 60 + 10;
            positions[i+2] = (Math.random() - 0.5) * 80;

            const color = colorPalette[Math.floor(Math.random() * colorPalette.length)];
            colors[i] = color.r;
            colors[i+1] = color.g;
            colors[i+2] = color.b;
        }

        const particleGeo = new THREE.BufferGeometry();
        particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particleGeo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

        // Create a glow texture for particles
        const canvas = document.createElement('canvas');
        canvas.width = 16;
        canvas.height = 16;
        const context = canvas.getContext('2d');
        const gradient = context.createRadialGradient(8, 8, 0, 8, 8, 8);
        gradient.addColorStop(0, 'rgba(255,255,255,1)');
        gradient.addColorStop(1, 'rgba(255,255,255,0)');
        context.fillStyle = gradient;
        context.fillRect(0, 0, 16, 16);
        const texture = new THREE.CanvasTexture(canvas);

        const particleMat = new THREE.PointsMaterial({
            size: 0.8,
            vertexColors: true,
            map: texture,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending,
            depthWrite: false
        });

        const particles = new THREE.Points(particleGeo, particleMat);
        factoryGroup.add(particles);

        // 3. Connective Lines (Network)
        const lineGeo = new THREE.BufferGeometry();
        const linePos = [];
        for(let i=0; i<300; i++) {
            const idx1 = Math.floor(Math.random() * particlesCount) * 3;
            const idx2 = Math.floor(Math.random() * particlesCount) * 3;
            
            // Only connect if they are relatively close
            const dist = Math.sqrt(
                Math.pow(positions[idx1] - positions[idx2], 2) +
                Math.pow(positions[idx1+1] - positions[idx2+1], 2) +
                Math.pow(positions[idx1+2] - positions[idx2+2], 2)
            );

            if(dist < 20) {
                linePos.push(
                    positions[idx1], positions[idx1+1], positions[idx1+2],
                    positions[idx2], positions[idx2+1], positions[idx2+2]
                );
            }
        }
        lineGeo.setAttribute('position', new THREE.Float32BufferAttribute(linePos, 3));
        const lineMat = new THREE.LineBasicMaterial({
            color: 0x38bdf8,
            transparent: true,
            opacity: 0.15,
            blending: THREE.AdditiveBlending
        });
        const lines = new THREE.LineSegments(lineGeo, lineMat);
        factoryGroup.add(lines);

        // 4. Floating geometric shapes (Machines/Servers)
        const shapes = [];
        const shapeGeo = new THREE.IcosahedronGeometry(1.5, 0);
        const shapeMat = new THREE.MeshBasicMaterial({
            color: 0x0ea5e9,
            wireframe: true,
            transparent: true,
            opacity: 0.3
        });

        for(let i=0; i<15; i++) {
            const mesh = new THREE.Mesh(shapeGeo, shapeMat);
            mesh.position.set(
                (Math.random() - 0.5) * 60,
                (Math.random() - 0.5) * 30 + 5,
                (Math.random() - 0.5) * 40
            );
            mesh.userData = {
                rotSpeedX: (Math.random() - 0.5) * 0.02,
                rotSpeedY: (Math.random() - 0.5) * 0.02,
                floatOffset: Math.random() * Math.PI * 2
            };
            factoryGroup.add(mesh);
            shapes.push(mesh);
        }

        // Scroll Animations using GSAP
        // We will move the camera and rotate the group based on scroll position
        
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1
            }
        });

        // Rotate scene globally as we scroll
        tl.to(factoryGroup.rotation, {
            y: Math.PI * 1.5,
            x: Math.PI * 0.1,
            ease: "none"
        }, 0);

        // Move camera closer and down
        tl.to(camera.position, {
            z: 15,
            y: 5,
            ease: "power1.inOut"
        }, 0);


        // Mouse Interaction
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;
        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - windowHalfX);
            mouseY = (event.clientY - windowHalfY);
        });

        // Animation Loop
        const clock = new THREE.Clock();

        function animate() {
            requestAnimationFrame(animate);
            const time = clock.getElapsedTime();

            // Smooth mouse follow
            targetX = mouseX * 0.001;
            targetY = mouseY * 0.001;
            
            // Add subtle sway to the whole group based on mouse
            factoryGroup.rotation.y += 0.001; // Constant slow spin
            camera.position.x += (mouseX * 0.02 - camera.position.x) * 0.05;
            camera.position.y += (-mouseY * 0.02 - (camera.position.y - 10)) * 0.05;
            camera.lookAt(scene.position);

            // Animate floating shapes
            shapes.forEach(shape => {
                shape.rotation.x += shape.userData.rotSpeedX;
                shape.rotation.y += shape.userData.rotSpeedY;
                shape.position.y += Math.sin(time * 2 + shape.userData.floatOffset) * 0.01;
            });

            // Wavy particles
            const positions = particles.geometry.attributes.position.array;
            for(let i = 0; i < particlesCount; i++) {
                const i3 = i * 3;
                positions[i3 + 1] += Math.sin(time + positions[i3]*0.1) * 0.02;
            }
            particles.geometry.attributes.position.needsUpdate = true;

            renderer.render(scene, camera);
        }

        animate();

        // Resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

    </script>
</body>
</html>