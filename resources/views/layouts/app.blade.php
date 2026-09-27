<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            400: '#00bbf0', // Cyan light
                            500: '#00a3e0', // Cyan base
                            600: '#008bbf', // Cyan dark
                        },
                        accent: {
                            400: '#c25ea8', // Magenta light
                            500: '#a74b94', // Magenta base
                            600: '#8e3f7d', // Magenta dark
                        },
                        dark: {
                            800: '#171329', // Deep space
                            900: '#0f0e17', // Obsidian
                            950: '#07070a', // Ultra dark
                        }
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            margin: 0;
            background:
                linear-gradient(135deg, rgba(0, 163, 224, 0.08), transparent 28%),
                linear-gradient(315deg, rgba(167, 75, 148, 0.08), transparent 32%),
                #f8fafc;
            color: #020617; /* Dark text */
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }

        /* Content Overlay Layer */
        #content-layer {
            position: relative;
            z-index: 10;
        }

        #site-ambient-3d {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            opacity: 0.42;
        }

        .ambient-depth-plane {
            position: fixed;
            inset: auto 0 0 auto;
            width: min(52vw, 760px);
            height: min(52vw, 760px);
            z-index: 1;
            pointer-events: none;
            transform: translate(26%, 16%) rotateX(64deg) rotateZ(-18deg);
            transform-style: preserve-3d;
            opacity: 0.34;
        }

        .ambient-depth-plane::before {
            content: "";
            position: absolute;
            inset: 0;
            border: 1px solid rgba(0, 163, 224, 0.24);
            background-image:
                linear-gradient(rgba(0, 163, 224, 0.12) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 163, 224, 0.12) 1px, transparent 1px);
            background-size: 44px 44px;
            box-shadow: 0 32px 90px rgba(15, 23, 42, 0.12);
        }

        main > section {
            position: relative;
            isolation: isolate;
        }

        main > section::after {
            content: "";
            position: absolute;
            top: 2.5rem;
            right: max(1.5rem, calc((100vw - 80rem) / 2));
            width: 9rem;
            height: 9rem;
            z-index: -1;
            pointer-events: none;
            border: 1px solid rgba(0, 163, 224, 0.18);
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.78), rgba(0, 163, 224, 0.08)),
                linear-gradient(90deg, rgba(0, 163, 224, 0.12) 1px, transparent 1px),
                linear-gradient(rgba(167, 75, 148, 0.08) 1px, transparent 1px);
            background-size: auto, 18px 18px, 18px 18px;
            box-shadow: 18px 24px 55px rgba(15, 23, 42, 0.08);
            transform: perspective(700px) rotateX(58deg) rotateZ(-18deg);
            opacity: 0.75;
        }

        main > section:first-child::before {
            content: "";
            position: absolute;
            top: 5rem;
            right: max(2rem, calc((100vw - 78rem) / 2));
            width: min(34vw, 28rem);
            height: min(34vw, 28rem);
            z-index: -1;
            pointer-events: none;
            border-radius: 1rem;
            border: 1px solid rgba(0, 163, 224, 0.24);
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.78), rgba(0, 163, 224, 0.14) 42%, rgba(167, 75, 148, 0.12)),
                linear-gradient(90deg, rgba(0, 163, 224, 0.16) 1px, transparent 1px),
                linear-gradient(rgba(15, 23, 42, 0.08) 1px, transparent 1px);
            background-size: auto, 32px 32px, 32px 32px;
            box-shadow:
                -22px 28px 0 rgba(0, 163, 224, 0.09),
                24px -18px 0 rgba(167, 75, 148, 0.08),
                0 34px 80px rgba(15, 23, 42, 0.12);
            transform: perspective(900px) rotateX(58deg) rotateZ(-24deg);
            opacity: 0.86;
        }

        /* Premium Glassmorphism Utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        }
        
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Spotlight Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .glass-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(
                135deg,
                rgba(45, 212, 191, 0.4), /* Teal */
                rgba(139, 92, 246, 0.4) /* Violet */
            );
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .glass-card:hover {
            transform: perspective(900px) rotateX(2deg) rotateY(-2deg) translateY(-8px);
            box-shadow: 0 24px 50px -14px rgba(15, 23, 42, 0.18), 0 12px 30px -18px rgba(0, 163, 224, 0.3);
        }

        .glass-card:hover::before {
            opacity: 1;
        }

        /* Spotlight mouse effect added via JS */
        .glass-card.spotlight::after {
            content: "";
            position: absolute;
            top: var(--y);
            left: var(--x);
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0,0,0,0.03) 0%, transparent 70%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .glass-card:hover::after {
            opacity: 1;
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #2dd4bf, #8b5cf6, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-primary {
            background: linear-gradient(to right, #2dd4bf, #0d9488);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
        
        /* Utility */
        .min-h-screen-content {
            min-height: calc(100vh - 400px);
        }

        /* 3D Apparel Ken-Burns Animation Reel */
        @keyframes kb-scene-1 {
            0% { transform: scale(1.05) translate3d(0%, 0%, 0) rotate(0deg); }
            50% { transform: scale(1.15) translate3d(-1.5%, -1.2%, 0) rotate(0.4deg); }
            100% { transform: scale(1.05) translate3d(0%, 0%, 0) rotate(0deg); }
        }
        @keyframes kb-scene-2 {
            0% { transform: scale(1.12) translate3d(1%, 0.8%, 0) rotate(0deg); }
            50% { transform: scale(1.05) translate3d(-1%, -1.5%, 0) rotate(-0.5deg); }
            100% { transform: scale(1.12) translate3d(1%, 0.8%, 0) rotate(0deg); }
        }
        @keyframes kb-scene-3 {
            0% { transform: scale(1.08) translate3d(-1%, 1%, 0) rotate(-0.3deg); }
            50% { transform: scale(1.18) translate3d(1.5%, -1%, 0) rotate(0.3deg); }
            100% { transform: scale(1.08) translate3d(-1%, 1%, 0) rotate(-0.3deg); }
        }
        @keyframes kb-scene-4 {
            0% { transform: scale(1.06) translate3d(0.5%, -0.5%, 0) rotate(0deg); }
            50% { transform: scale(1.14) translate3d(-1.2%, 1%, 0) rotate(0.4deg); }
            100% { transform: scale(1.06) translate3d(0.5%, -0.5%, 0) rotate(0deg); }
        }
        @keyframes kb-scene-5 {
            0% { transform: scale(1.15) translate3d(-1%, -1%, 0) rotate(0.3deg); }
            50% { transform: scale(1.06) translate3d(1%, 0.5%, 0) rotate(-0.3deg); }
            100% { transform: scale(1.15) translate3d(-1%, -1%, 0) rotate(-0.3deg); }
        }

        .kb-active-1 { animation: kb-scene-1 20s ease-in-out infinite alternate; }
        .kb-active-2 { animation: kb-scene-2 22s ease-in-out infinite alternate; }
        .kb-active-3 { animation: kb-scene-3 24s ease-in-out infinite alternate; }
        .kb-active-4 { animation: kb-scene-4 21s ease-in-out infinite alternate; }
        .kb-active-5 { animation: kb-scene-5 23s ease-in-out infinite alternate; }

        /* 3D Infinite Scrolling Track Animation */
        @keyframes scrollTrack3D {
            0% { transform: perspective(1200px) rotateX(10deg) rotateY(-6deg) rotateZ(-2deg) translate3d(0%, 0, 0) scale(1.1); }
            50% { transform: perspective(1200px) rotateX(14deg) rotateY(-10deg) rotateZ(-4deg) translate3d(-25%, 0, 0) scale(1.15); }
            100% { transform: perspective(1200px) rotateX(10deg) rotateY(-6deg) rotateZ(-2deg) translate3d(-50%, 0, 0) scale(1.1); }
        }

        .animate-scroll-track-3d {
            animation: scrollTrack3D 35s linear infinite;
        }

        /* Laser Scan Sweep Beam */
        @keyframes laserScanSweep {
            0% { top: -5%; opacity: 0; }
            20% { opacity: 0.85; }
            80% { opacity: 0.85; }
            100% { top: 105%; opacity: 0; }
        }

        .laser-scan-beam {
            position: fixed; left: 0; right: 0; height: 3px;
            background: linear-gradient(90deg, transparent, rgba(0, 187, 240, 0.9), rgba(194, 94, 168, 0.9), transparent);
            box-shadow: 0 0 20px rgba(0, 187, 240, 0.9);
            pointer-events: none; z-index: 1;
            animation: laserScanSweep 9s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Site-Wide Dynamic 3D Card Elevation Engine */
        .glass-card, .stat-card, .prob-card, .prod-card, .cs-card, .solution-card, .resource-card, .product-card, .feature-card {
            transform-style: preserve-3d;
            perspective: 1200px;
            transition: transform 0.4s cubic-bezier(0.2, 0.8, 0.2, 1), box-shadow 0.4s ease, border-color 0.4s ease;
        }

        .glass-card:hover, .stat-card:hover, .prob-card:hover, .prod-card:hover, .cs-card:hover, .solution-card:hover, .resource-card:hover, .product-card:hover, .feature-card:hover {
            transform: perspective(1200px) rotateX(4deg) rotateY(-4deg) translateZ(16px) translateY(-8px);
            box-shadow:
                0 24px 60px -10px rgba(0, 163, 224, 0.25),
                0 14px 35px -15px rgba(167, 75, 148, 0.28),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
        }

        @media (max-width: 767px) {
            #site-ambient-3d {
                display: none;
            }

            .ambient-depth-plane {
                width: 90vw;
                height: 90vw;
                transform: translate(42%, 22%) rotateX(64deg) rotateZ(-18deg);
                opacity: 0.18;
            }

            main > section::after {
                width: 5.5rem;
                height: 5.5rem;
                right: 1rem;
                opacity: 0.32;
            }

            main > section:first-child::before {
                top: 6rem;
                right: -3rem;
                width: 14rem;
                height: 14rem;
                opacity: 0.28;
            }
        }
    </style>
</head>
<body>

    <!-- High-Tech 3D Page Transition Overlay -->
    <div id="page-transition-overlay" class="fixed inset-0 z-[9999] pointer-events-none opacity-0 transition-all duration-300 bg-slate-950/90 backdrop-blur-xl flex flex-col items-center justify-center text-white">
        <div class="relative flex flex-col items-center gap-4 transform scale-90 transition-transform duration-300" id="page-transition-box">
            <div class="relative w-16 h-16 flex items-center justify-center">
                <div class="absolute inset-0 rounded-full border-4 border-sky-400/20 border-t-sky-400 animate-spin"></div>
                <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-cyan-400 to-emerald-400 animate-pulse shadow-lg shadow-cyan-400/50"></div>
            </div>
            <div class="text-center">
                <p class="text-xs font-mono uppercase tracking-widest text-sky-400 mb-1">Track Tech 3D Routing</p>
                <h4 class="text-xl font-black text-white tracking-tight" id="page-transition-text">Navigating Module...</h4>
            </div>
        </div>
    </div>

    <canvas id="site-ambient-3d" aria-hidden="true"></canvas>
    <div class="ambient-depth-plane" aria-hidden="true"></div>

    <!-- Laser Beam Scanner Line -->
    <div class="laser-scan-beam"></div>

    <!-- Global 3D Apparel Manufacturing Video & Screenshot Reel Layer -->
    <div id="apparel-3d-bg-container" class="fixed inset-0 w-full h-full pointer-events-none z-0 overflow-hidden bg-slate-950">
        <!-- Continuous 3D Apparel Image Filmstrip Reel Track (Infinite Scroll Mode) -->
        <div id="apparel-3d-scrolling-track" class="absolute inset-0 w-[240%] h-full flex items-center gap-8 opacity-45 pointer-events-none transform-gpu animate-scroll-track-3d">
            <div class="flex items-center gap-8 shrink-0 h-[80vh]">
                <img src="{{ asset('images/apparel-3d-scene-1.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-sky-400/40 shadow-2xl shadow-sky-500/20">
                <img src="{{ asset('images/apparel-3d-scene-2.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-emerald-400/40 shadow-2xl shadow-emerald-500/20">
                <img src="{{ asset('images/apparel-3d-scene-3.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-teal-400/40 shadow-2xl shadow-teal-500/20">
                <img src="{{ asset('images/apparel-3d-scene-4.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-cyan-400/40 shadow-2xl shadow-cyan-500/20">
                <img src="{{ asset('images/apparel-3d-scene-5.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-indigo-400/40 shadow-2xl shadow-indigo-500/20">
            </div>
            <!-- Duplicated track for infinite seamless 3D loop -->
            <div class="flex items-center gap-8 shrink-0 h-[80vh]">
                <img src="{{ asset('images/apparel-3d-scene-1.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-sky-400/40 shadow-2xl shadow-sky-500/20">
                <img src="{{ asset('images/apparel-3d-scene-2.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-emerald-400/40 shadow-2xl shadow-emerald-500/20">
                <img src="{{ asset('images/apparel-3d-scene-3.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-teal-400/40 shadow-2xl shadow-teal-500/20">
                <img src="{{ asset('images/apparel-3d-scene-4.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-cyan-400/40 shadow-2xl shadow-cyan-500/20">
                <img src="{{ asset('images/apparel-3d-scene-5.png') }}" class="h-full w-auto object-cover rounded-3xl border-2 border-indigo-400/40 shadow-2xl shadow-indigo-500/20">
            </div>
        </div>

        <!-- 3D Scene Spotlight Layer 1: Smart Sewing Machine IoT Device -->
        <div class="apparel-3d-scene absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-60" data-scene="1">
            <img src="{{ asset('images/apparel-3d-scene-1.png') }}" alt="3D Sewing Machine IoT Workstation" class="w-full h-full object-cover scale-105 kb-active-1 transition-transform duration-700 ease-out transform-gpu">
        </div>
        <!-- 3D Scene Spotlight Layer 2: Smart Factory Sewing Floor Layout -->
        <div class="apparel-3d-scene absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-scene="2">
            <img src="{{ asset('images/apparel-3d-scene-2.png') }}" alt="3D Smart Factory Sewing Floor" class="w-full h-full object-cover scale-105 kb-active-2 transition-transform duration-700 ease-out transform-gpu">
        </div>
        <!-- 3D Scene Spotlight Layer 3: Apparel Manufacturing Complex Architecture -->
        <div class="apparel-3d-scene absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-scene="3">
            <img src="{{ asset('images/apparel-3d-scene-3.png') }}" alt="3D Apparel Plant Architecture" class="w-full h-full object-cover scale-105 kb-active-3 transition-transform duration-700 ease-out transform-gpu">
        </div>
        <!-- 3D Scene Spotlight Layer 4: Real-time SaaS Manufacturing Analytics Dashboard -->
        <div class="apparel-3d-scene absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-scene="4">
            <img src="{{ asset('images/apparel-3d-scene-4.png') }}" alt="3D SaaS Manufacturing Analytics" class="w-full h-full object-cover scale-105 kb-active-4 transition-transform duration-700 ease-out transform-gpu">
        </div>
        <!-- 3D Scene Spotlight Layer 5: Multi-Operator Sewing Assembly Line Fleet -->
        <div class="apparel-3d-scene absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-scene="5">
            <img src="{{ asset('images/apparel-3d-scene-5.png') }}" alt="3D Multi-Operator Assembly Fleet" class="w-full h-full object-cover scale-105 kb-active-5 transition-transform duration-700 ease-out transform-gpu">
        </div>

        <!-- Ambient Lighting Grid Overlay & Glass Mask -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(248,250,252,0.50)_100%)]"></div>
        <div id="video-overlay-mask" class="absolute inset-0 bg-gradient-to-br from-white/65 via-white/50 to-sky-100/35 backdrop-blur-[1px]"></div>
    </div>

    <!-- Main Content Layer -->
    <div id="content-layer">

        <!-- Top Scroll Reading Progress Indicator -->
        <div id="scroll-progress-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-sky-400 via-emerald-400 to-cyan-500 z-[100] transition-all duration-150 pointer-events-none" style="width: 0%"></div>

        <!-- Navigation -->
        <header class="fixed top-0 w-full glass-nav z-50 transition-all duration-300 py-4">
            <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-10 h-10 object-contain transition-transform group-hover:scale-105 bg-white rounded-full p-1 shadow-sm">
                    <div>
                        <span class="text-xl font-bold tracking-tight text-slate-800">Track Tech <span class="text-primary-500">Solution</span></span>
                    </div>
                </a>
                
                <nav class="hidden md:flex gap-3 items-center text-sm font-semibold">
                    <a href="/products" class="px-4 py-2 rounded-full transition-all duration-300 {{ request()->is('products*') ? 'bg-sky-500/15 text-sky-600 border border-sky-400/40 font-extrabold shadow-sm' : 'text-slate-800 hover:text-sky-600 hover:bg-slate-100/60' }}">Products</a>
                    <a href="/business-stories" class="px-4 py-2 rounded-full transition-all duration-300 {{ (request()->is('business-stories*') || request()->is('industries*')) ? 'bg-sky-500/15 text-sky-600 border border-sky-400/40 font-extrabold shadow-sm' : 'text-slate-800 hover:text-sky-600 hover:bg-slate-100/60' }}">Business Stories</a>
                    <a href="/about" class="px-4 py-2 rounded-full transition-all duration-300 {{ request()->is('about*') ? 'bg-sky-500/15 text-sky-600 border border-sky-400/40 font-extrabold shadow-sm' : 'text-slate-800 hover:text-sky-600 hover:bg-slate-100/60' }}">Company</a>
                    <a href="/resources" class="px-4 py-2 rounded-full transition-all duration-300 {{ request()->is('resources*') ? 'bg-sky-500/15 text-sky-600 border border-sky-400/40 font-extrabold shadow-sm' : 'text-slate-800 hover:text-sky-600 hover:bg-slate-100/60' }}">Resources</a>
                    <a href="/contact" class="px-4 py-2 rounded-full transition-all duration-300 {{ request()->is('contact*') ? 'bg-sky-500/15 text-sky-600 border border-sky-400/40 font-extrabold shadow-sm' : 'text-slate-800 hover:text-sky-600 hover:bg-slate-100/60' }}">Contact Us</a>
                </nav>

                <div class="hidden md:block">
                    <a href="/contact" class="bg-primary-500 hover:bg-primary-400 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-primary-500/20 hover:shadow-primary-500/40 text-sm">
                        Book Demo
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-lg hover:bg-slate-100 transition" aria-label="Menu">
                    <span class="block w-6 h-0.5 bg-slate-800 transition-all" id="bar1"></span>
                    <span class="block w-6 h-0.5 bg-slate-800 transition-all" id="bar2"></span>
                    <span class="block w-4 h-0.5 bg-slate-800 transition-all ml-auto" id="bar3"></span>
                </button>
            </div>

            <!-- Mobile Menu Panel -->
            <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-t border-slate-200 shadow-xl">
                <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4">
                    <a href="/products" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Products</a>
                    <a href="/industries" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Business Stories</a>
                    <a href="/about" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Company</a>
                    <a href="/resources" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Resources</a>
                    <a href="/contact" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Contact Us</a>
                    <a href="/contact" class="mt-2 bg-primary-500 text-white text-center px-6 py-3 rounded-full font-medium shadow-lg">
                        Book Demo
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="min-h-screen-content pt-20">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white/80 backdrop-blur-md border-t border-slate-200 pt-20 pb-10 mt-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-16">
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-8 h-8 object-contain bg-white rounded-full p-1 shadow-sm">
                            <span class="font-bold text-lg text-slate-800">Track Tech <span class="text-primary-500">Solution</span></span>
                        </div>
                        <p class="text-slate-800 text-sm leading-relaxed mb-6">
                            From planning to production, data to decisions, seamlessly connect your entire operation. Boost efficiency, reduce waste, and achieve sustainability.
                        </p>
                        <div class="flex flex-col gap-2 text-sm text-slate-800">
                            <a href="mailto:sales@tracktechsolutions.com" class="hover:text-primary-600">sales@tracktechsolutions.com</a>
                            <a href="tel:+919650613666" class="hover:text-primary-600">+91 96506 13666</a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Company</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/about" class="hover:text-primary-600">About Us</a></li>
                            <li><a href="/contact" class="hover:text-primary-600">Contact Us</a></li>
                            <li><a href="/contact" class="hover:text-primary-600">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Products</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/solutions" class="hover:text-primary-600">Quality Control</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Tracking</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Machine Maintenance</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Planning</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Resources</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/resources" class="hover:text-primary-600">Success Stories</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">FAQ</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-400">
                    <p>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="/about" class="hover:text-slate-900">Privacy Policy</a>
                        <a href="/about" class="hover:text-slate-900">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Floating 3D Apparel Video Telemetry & Scene Controller HUD -->
    <div id="apparel-3d-hud-control" class="fixed bottom-6 left-6 z-50 flex flex-col gap-2 transition-all duration-300">
        <div class="flex items-center gap-3 px-4 py-2.5 rounded-2xl bg-slate-900/90 backdrop-blur-xl border border-sky-400/40 shadow-2xl text-white text-xs font-mono">
            <div class="relative flex items-center justify-center w-3 h-3">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center gap-2">
                    <span class="text-sky-400 font-bold uppercase tracking-wider text-[10px]">3D Apparel Stream</span>
                    <span class="bg-sky-500/20 text-sky-300 px-1.5 py-0.5 rounded text-[9px] font-sans font-semibold">60 FPS</span>
                </div>
                <span id="hud-scene-title" class="font-sans font-semibold text-slate-200 text-xs truncate max-w-[180px] sm:max-w-[260px]">
                    Scene 1: Smart IoT Sewing Node
                </span>
            </div>

            <!-- Scene selector buttons 1..5 -->
            <div class="flex items-center gap-1.5 ml-2 pl-2 border-l border-slate-700/80">
                <button onclick="switchApparel3DScene(1)" class="hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-sky-500 text-white shadow-md shadow-sky-500/50 scale-110" data-scene-num="1" title="Scene 1: IoT Sewing Terminal">1</button>
                <button onclick="switchApparel3DScene(2)" class="hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-slate-800 text-slate-300 hover:bg-slate-700" data-scene-num="2" title="Scene 2: Factory Sewing Lines">2</button>
                <button onclick="switchApparel3DScene(3)" class="hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-slate-800 text-slate-300 hover:bg-slate-700" data-scene-num="3" title="Scene 3: Factory Architecture">3</button>
                <button onclick="switchApparel3DScene(4)" class="hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-slate-800 text-slate-300 hover:bg-slate-700" data-scene-num="4" title="Scene 4: Analytics Dashboard">4</button>
                <button onclick="switchApparel3DScene(5)" class="hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-slate-800 text-slate-300 hover:bg-slate-700" data-scene-num="5" title="Scene 5: Multi-Operator Fleet">5</button>
                
                <button id="hud-play-pause-btn" onclick="toggleApparel3DAutoPlay()" class="w-6 h-6 ml-1 rounded-lg text-[12px] bg-slate-800 text-slate-300 hover:bg-slate-700 transition flex items-center justify-center" title="Pause/Play 3D Loop">
                    ⏸
                </button>
            </div>
        </div>
    </div>

    <!-- Floating 3D Navigation & Quick Router Dock -->
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-2">
        <!-- Quick Page Router Dock -->
        <div class="hidden lg:flex items-center gap-1.5 p-2 rounded-full bg-slate-900/90 backdrop-blur-xl border border-sky-400/30 shadow-2xl text-white text-xs font-bold">
            <a href="/products" class="px-3.5 py-1.5 rounded-full hover:bg-sky-500/20 hover:text-sky-300 transition flex items-center gap-1.5 {{ request()->is('products*') ? 'bg-sky-500 text-white' : 'text-slate-300' }}">
                <span>🛍️ Products</span>
            </a>
            <a href="/business-stories" class="px-3.5 py-1.5 rounded-full hover:bg-sky-500/20 hover:text-sky-300 transition flex items-center gap-1.5 {{ (request()->is('business-stories*') || request()->is('industries*')) ? 'bg-sky-500 text-white' : 'text-slate-300' }}">
                <span>📈 Stories</span>
            </a>
            <a href="/about" class="px-3.5 py-1.5 rounded-full hover:bg-sky-500/20 hover:text-sky-300 transition flex items-center gap-1.5 {{ request()->is('about*') ? 'bg-sky-500 text-white' : 'text-slate-300' }}">
                <span>🏢 Company</span>
            </a>
            <a href="/resources" class="px-3.5 py-1.5 rounded-full hover:bg-sky-500/20 hover:text-sky-300 transition flex items-center gap-1.5 {{ request()->is('resources*') ? 'bg-sky-500 text-white' : 'text-slate-300' }}">
                <span>📚 Resources</span>
            </a>
            <a href="/contact" class="px-3.5 py-1.5 rounded-full hover:bg-sky-500/20 hover:text-sky-300 transition flex items-center gap-1.5 {{ request()->is('contact*') ? 'bg-sky-500 text-white' : 'text-slate-300' }}">
                <span>📞 Contact</span>
            </a>
        </div>

        <!-- Scroll Back To Top Button -->
        <button id="scroll-to-top-btn" class="w-11 h-11 rounded-full bg-sky-500 hover:bg-sky-400 text-white flex items-center justify-center shadow-lg shadow-sky-500/40 transition hover:scale-110" title="Back to Top">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
        </button>
    </div>

    <!-- Shared UI Setup -->
    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 700,
                once: true,
                offset: 80,
                disable: function () {
                    return window.innerWidth < 768;
                },
            });
        }

        (function() {
            var menuBtn = document.getElementById('mobile-menu-btn');
            var mobileMenu = document.getElementById('mobile-menu');
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        })();

        document.querySelectorAll('.glass-card').forEach(card => {
            card.classList.add('spotlight');
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--x', `${x}px`);
                card.style.setProperty('--y', `${y}px`);
            });
        });

        (function () {
            var canvas = document.getElementById('site-ambient-3d');
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var isSmallScreen = window.innerWidth < 768;
            if (!canvas || typeof THREE === 'undefined' || reduceMotion || isSmallScreen) {
                return;
            }

            var scene = new THREE.Scene();
            var camera = new THREE.PerspectiveCamera(42, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.set(0, 4, 13);

            var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.5));
            renderer.setSize(window.innerWidth, window.innerHeight);

            scene.add(new THREE.AmbientLight(0xffffff, 0.75));
            var light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(4, 7, 6);
            scene.add(light);

            var group = new THREE.Group();
            group.position.set(3.2, -0.25, 0);
            scene.add(group);

            var colors = [0x00a3e0, 0xa74b94, 0x22c55e, 0xf8fafc];
            for (var i = 0; i < 18; i++) {
                var geometry = i % 3 === 0
                    ? new THREE.BoxGeometry(0.7, 0.32, 0.56)
                    : new THREE.IcosahedronGeometry(0.28, 0);
                var material = new THREE.MeshStandardMaterial({
                    color: colors[i % colors.length],
                    roughness: 0.48,
                    metalness: 0.08,
                    transparent: true,
                    opacity: i % 3 === 0 ? 0.62 : 0.72
                });
                var mesh = new THREE.Mesh(geometry, material);
                mesh.position.set((i % 6) * 1.15 - 3.3, Math.floor(i / 6) * 1.05 - 1.1, (i % 2) * -1.4);
                mesh.rotation.set(i * 0.21, i * 0.17, i * 0.09);
                group.add(mesh);
            }

            var grid = new THREE.GridHelper(10, 10, 0x00a3e0, 0xcbd5e1);
            grid.position.y = -1.7;
            grid.material.transparent = true;
            grid.material.opacity = 0.22;
            group.add(grid);

            function resize() {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            }

            function animate(time) {
                requestAnimationFrame(animate);
                group.rotation.y = Math.sin(time * 0.00024) * 0.22 - 0.22;
                group.rotation.x = Math.sin(time * 0.00018) * 0.08;
                group.children.forEach(function (child, index) {
                    if (child.isMesh) {
                        child.position.y += Math.sin(time * 0.001 + index) * 0.0009;
                        child.rotation.y += 0.002;
                    }
                });
                camera.lookAt(0, 0, 0);
                renderer.render(scene, camera);
            }

            window.addEventListener('resize', resize);
        })();

        // Smooth Scroll Reading Progress Bar Tracker
        window.addEventListener('scroll', function() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (height > 0) ? (winScroll / height) * 100 : 0;
            var progressBar = document.getElementById('scroll-progress-bar');
            if (progressBar) {
                progressBar.style.width = scrolled + '%';
            }
        });

        // 3D Page Transition FX & Link Interceptor
        document.addEventListener('DOMContentLoaded', function() {
            var overlay = document.getElementById('page-transition-overlay');
            var transitionText = document.getElementById('page-transition-text');
            var transitionBox = document.getElementById('page-transition-box');

            document.querySelectorAll('a[href]').forEach(function(link) {
                var href = link.getAttribute('href');
                if (href && !href.startsWith('#') && !href.startsWith('javascript') && !href.startsWith('mailto') && !href.startsWith('tel') && link.target !== '_blank') {
                    link.addEventListener('click', function(e) {
                        if (e.metaKey || e.ctrlKey) return;
                        var targetName = href.replace('/', '').toUpperCase() || 'HOME';
                        if (overlay && transitionText && transitionBox) {
                            e.preventDefault();
                            transitionText.textContent = 'Loading ' + targetName + ' Module...';
                            overlay.classList.remove('pointer-events-none', 'opacity-0');
                            overlay.classList.add('opacity-100');
                            transitionBox.classList.remove('scale-90');
                            transitionBox.classList.add('scale-100');
                            setTimeout(function() {
                                window.location.href = href;
                            }, 240);
                        }
                    });
                }
            });

            var topBtn = document.getElementById('scroll-to-top-btn');
            if (topBtn) {
                topBtn.addEventListener('click', function() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        });
    </script>

    <!-- SweetAlert2 for beautiful form notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
            Swal.fire({
                title: '✅ Message Sent!',
                text: @json(session('success')),
                icon: 'success',
                confirmButtonText: 'Great!',
                confirmButtonColor: '#0ea5e9',
                background: '#ffffff',
                color: '#1e293b',
                iconColor: '#22c55e',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
            @endif

            @if($errors->any())
            var errorMessages = @json($errors->all());
            Swal.fire({
                title: 'Please fix these errors',
                html: errorMessages.map(function(e){ return '• ' + e; }).join('<br>'),
                icon: 'error',
                confirmButtonText: 'Try Again',
                confirmButtonColor: '#0ea5e9',
                background: '#ffffff',
                color: '#1e293b',
            });
            @endif
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openModalBtn = document.getElementById('open-apparel-video-modal');
            var closeModalBtn = document.getElementById('close-apparel-video-modal');
            var videoModal = document.getElementById('apparel-video-modal');
            var modalVideo = document.getElementById('modal-apparel-video');
            var modalTitle = document.getElementById('modal-video-title');
            var tabBtns = document.querySelectorAll('.video-tab-btn');

            if (openModalBtn && videoModal) {
                openModalBtn.addEventListener('click', function() {
                    videoModal.classList.remove('hidden');
                    if (modalVideo) modalVideo.play();
                });
            }

            if (closeModalBtn && videoModal) {
                closeModalBtn.addEventListener('click', function() {
                    videoModal.classList.add('hidden');
                    if (modalVideo) modalVideo.pause();
                });
            }

            if (videoModal) {
                videoModal.addEventListener('click', function(e) {
                    if (e.target === videoModal) {
                        videoModal.classList.add('hidden');
                        if (modalVideo) modalVideo.pause();
                    }
                });
            }

            tabBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    tabBtns.forEach(function(b) {
                        b.classList.remove('bg-sky-500', 'text-white');
                        b.classList.add('bg-slate-100', 'text-slate-700');
                    });
                    btn.classList.remove('bg-slate-100', 'text-slate-700');
                    btn.classList.add('bg-sky-500', 'text-white');

                    var videoSrc = btn.getAttribute('data-video');
                    var title = btn.getAttribute('data-title');

                    if (modalVideo && videoSrc) {
                        modalVideo.src = videoSrc;
                        modalVideo.play();
                    }
                    if (modalTitle && title) {
                        modalTitle.textContent = title;
                    }
                });
            });
        });
    </script>
    <script>
        (function() {
            var currentScene = 1;
            var autoPlay = true;
            var sceneTimer = null;
            var totalScenes = 5;

            var titles = {
                1: "Scene 1: Smart IoT Sewing Node",
                2: "Scene 2: Smart Factory Sewing Floor",
                3: "Scene 3: Apparel Complex & Docks",
                4: "Scene 4: SaaS Manufacturing Analytics",
                5: "Scene 5: Multi-Operator Assembly Fleet"
            };

            var path = window.location.pathname;
            if (path.indexOf('products') !== -1) currentScene = 1;
            else if (path.indexOf('business-stories') !== -1 || path.indexOf('industries') !== -1) currentScene = 2;
            else if (path.indexOf('about') !== -1) currentScene = 3;
            else if (path.indexOf('resources') !== -1) currentScene = 4;
            else if (path.indexOf('contact') !== -1) currentScene = 5;

            window.switchApparel3DScene = function(num) {
                currentScene = num;
                var scenes = document.querySelectorAll('.apparel-3d-scene');
                var btns = document.querySelectorAll('.hud-scene-btn');
                var titleEl = document.getElementById('hud-scene-title');

                scenes.forEach(function(s) {
                    var sNum = parseInt(s.getAttribute('data-scene'), 10);
                    if (sNum === num) {
                        s.classList.remove('opacity-0');
                        s.classList.add('opacity-100');
                    } else {
                        s.classList.remove('opacity-100');
                        s.classList.add('opacity-0');
                    }
                });

                btns.forEach(function(b) {
                    var bNum = parseInt(b.getAttribute('data-scene-num'), 10);
                    if (bNum === num) {
                        b.className = 'hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-sky-500 text-white shadow-md shadow-sky-500/50 scale-110';
                    } else {
                        b.className = 'hud-scene-btn w-6 h-6 rounded-lg text-[11px] font-bold transition flex items-center justify-center bg-slate-800 text-slate-300 hover:bg-slate-700';
                    }
                });

                if (titleEl && titles[num]) {
                    titleEl.textContent = titles[num];
                }
            };

            window.toggleApparel3DAutoPlay = function() {
                autoPlay = !autoPlay;
                var btn = document.getElementById('hud-play-pause-btn');
                if (btn) btn.textContent = autoPlay ? '⏸' : '▶';
                if (autoPlay) startAutoPlay();
                else clearInterval(sceneTimer);
            };

            function startAutoPlay() {
                clearInterval(sceneTimer);
                sceneTimer = setInterval(function() {
                    if (!autoPlay) return;
                    currentScene = (currentScene % totalScenes) + 1;
                    switchApparel3DScene(currentScene);
                }, 6000);
            }

            var bgContainer = document.getElementById('apparel-3d-bg-container');
            if (bgContainer && window.innerWidth >= 768) {
                document.addEventListener('mousemove', function(e) {
                    var xPct = (e.clientX / window.innerWidth - 0.5) * 2;
                    var yPct = (e.clientY / window.innerHeight - 0.5) * 2;
                    var activeImg = bgContainer.querySelector('.apparel-3d-scene.opacity-100 img');
                    if (activeImg) {
                        activeImg.style.transform = 'scale(1.1) translate3d(' + (xPct * 10) + 'px, ' + (yPct * 10) + 'px, 0px) rotateX(' + (-yPct * 1.5) + 'deg) rotateY(' + (xPct * 1.5) + 'deg)';
                    }
                });
            }

            switchApparel3DScene(currentScene);
            startAutoPlay();
        })();
    </script>
    @stack('scripts')
</body>
</html>
