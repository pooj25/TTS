<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Track Tech Solution — Digital Intelligence for Garment Manufacturing')</title>
    <meta name="description" content="Track materials, orders, production and quality in one clear view, from the first roll of fabric to the final shipment.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@400;500;600;700;800;900&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                        mono: ['Space Grotesk', 'monospace'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        navy: {
                            800: '#0f2552',
                            900: '#0a1e2b',
                            950: '#061119',
                        }
                    }
                }
            }
        }
    </script>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            margin: 0;
            background-color: #f8fafc;
            color: #0f172a;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -15px rgba(14, 165, 233, 0.15);
            border-color: rgba(14, 165, 233, 0.3);
        }

        .text-gradient {
            background: linear-gradient(135deg, #0ea5e9, #0284c7, #2563eb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 28s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        .min-h-screen-content {
            min-height: calc(100vh - 420px);
        }

        /* ══ 3D APPAREL ANIMATIONS & KEN-BURNS KEYFRAMES ══ */
        @keyframes kenBurns1 {
            0%   { transform: scale(1.0) translate(0%, 0%); }
            50%  { transform: scale(1.12) translate(-2%, -1.5%); }
            100% { transform: scale(1.05) translate(1.5%, 1%); }
        }
        @keyframes kenBurns2 {
            0%   { transform: scale(1.05) translate(1%, 0%); }
            50%  { transform: scale(1.15) translate(-1.5%, 2%); }
            100% { transform: scale(1.0) translate(0%, -1%); }
        }
        @keyframes kenBurns3 {
            0%   { transform: scale(1.0) translate(0%, 2%); }
            50%  { transform: scale(1.14) translate(2%, -1%); }
            100% { transform: scale(1.06) translate(-1%, 0%); }
        }
        @keyframes kenBurns4 {
            0%   { transform: scale(1.08) translate(-1.5%, -1%); }
            50%  { transform: scale(1.02) translate(1%, 1.5%); }
            100% { transform: scale(1.12) translate(0%, -2%); }
        }
        @keyframes kenBurns5 {
            0%   { transform: scale(1.0) translate(1%, 1%); }
            50%  { transform: scale(1.13) translate(-2%, -1%); }
            100% { transform: scale(1.04) translate(0%, 0%); }
        }

        .anim-kenburns-1 { animation: kenBurns1 24s ease-in-out infinite alternate; }
        .anim-kenburns-2 { animation: kenBurns2 24s ease-in-out infinite alternate; }
        .anim-kenburns-3 { animation: kenBurns3 24s ease-in-out infinite alternate; }
        .anim-kenburns-4 { animation: kenBurns4 24s ease-in-out infinite alternate; }
        .anim-kenburns-5 { animation: kenBurns5 24s ease-in-out infinite alternate; }

        @keyframes laserScan {
            0% { transform: translateY(-100%); opacity: 0; }
            15% { opacity: 0.8; }
            85% { opacity: 0.8; }
            100% { transform: translateY(1000%); opacity: 0; }
        }
        .anim-laser-scan {
            animation: laserScan 9s ease-in-out infinite;
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(0.5deg); }
        }
        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(10px) rotate(-0.5deg); }
        }
        .anim-float { animation: floatSlow 6s ease-in-out infinite; }
        .anim-float-rev { animation: floatReverse 7s ease-in-out infinite; }

        /* 3D Card Hover Depth */
        .card-3d-tilt {
            transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.4s ease;
            transform-style: preserve-3d;
        }
        .card-3d-tilt:hover {
            transform: translateY(-8px) scale(1.01) rotateX(1.5deg);
            box-shadow: 0 25px 50px -12px rgba(14, 165, 233, 0.25);
        }

        /* Glass HUD Pill */
        .glass-hud {
            background: rgba(15, 23, 42, 0.82);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(56, 189, 248, 0.25);
            box-shadow: 0 10px 35px -5px rgba(0, 0, 0, 0.5), inset 0 0 15px rgba(56, 189, 248, 0.1);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased flex flex-col min-h-screen">

    <!-- Top Reading Progress Indicator -->
    <div id="scroll-progress-bar" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-sky-400 to-blue-600 z-[100] transition-all duration-150 pointer-events-none" style="width: 0%"></div>

    <!-- ══ NAVBAR ══════════════════════════════════════════════════════════ -->
    <header class="fixed top-0 w-full glass-nav z-50 transition-all duration-300 py-3.5 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            
            <!-- Brand Logo -->
            <a href="/" class="flex items-center gap-2.5 group">
                <img src="{{ asset('images/track-tech-full-logo.png') }}" alt="Track Tech Solution Logo" class="h-10 sm:h-12 w-auto object-contain transition-transform group-hover:scale-105">
            </a>

            <!-- Desktop Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2 text-sm font-semibold text-slate-700">
                <a href="/#dashboards-section" class="px-4 py-2 rounded-full hover:text-sky-600 hover:bg-slate-100/70 transition-all">Dashboards</a>
                <a href="/#clients" class="px-4 py-2 rounded-full hover:text-sky-600 hover:bg-slate-100/70 transition-all">Clients</a>

                <!-- ── Products Dropdown ── -->
                <div class="relative" id="products-nav-group">
                    <button
                        id="products-nav-btn"
                        onclick="toggleProductsDropdown()"
                        class="flex items-center gap-1.5 px-4 py-2 rounded-full transition-all duration-200 {{ request()->is('products*') ? 'bg-sky-50 text-sky-600 font-bold border border-sky-200' : 'hover:text-sky-600 hover:bg-slate-100/70' }}"
                        aria-haspopup="true" aria-expanded="false">
                        <span>Products</span>
                        <svg id="products-chevron" class="w-3.5 h-3.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <!-- Dropdown Panel -->
                    <div
                        id="products-dropdown-panel"
                        class="absolute top-full left-0 mt-2 w-72 rounded-2xl border border-slate-200 opacity-0 invisible translate-y-2 transition-all duration-200 overflow-hidden shadow-2xl bg-white border-t-4 border-t-[#087e8b]"
                        style="pointer-events:none; z-index:99999;">

                        <div class="py-1">
                            <!-- TrakWel with expandable sub-items -->
                            <div class="border-b border-stone-100 group/trak">
                                <div class="flex items-center justify-between px-5 py-3 cursor-pointer hover:bg-[#e0f7f3] hover:text-[#087e8b] transition border-l-4 border-transparent hover:border-l-[#087e8b]">
                                    <a href="/products#trakwel" data-product-choice="trakwel" class="text-[16px] font-bold text-stone-800 hover:text-[#087e8b] flex-1">TrakWel</a>
                                    <button type="button" onclick="event.stopPropagation(); var el=document.getElementById('nav-trak-sub'); el.classList.toggle('hidden');" class="p-1 text-stone-400 hover:text-[#087e8b]">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                                    </button>
                                </div>
                                <div id="nav-trak-sub" class="hidden bg-stone-50/80 py-1 px-3 space-y-0.5 border-t border-stone-100">
                                    <a href="/products#fabric" data-product-choice="fabric" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Fabric Inventory Management</a>
                                    <a href="/products#cutting" data-product-choice="cutting" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Cutting Room Digitization</a>
                                    <a href="/products#production" data-product-choice="production" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Real-Time Production Tracking</a>
                                    <a href="/products#quality" data-product-choice="quality" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Quality Management System</a>
                                </div>
                            </div>

                            <!-- PlanWel -->
                            <div class="border-b border-stone-100">
                                <a href="/products#planwel" data-product-choice="planwel" class="block px-5 py-3 text-[16px] font-bold text-stone-800 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition border-l-4 border-transparent hover:border-l-[#087e8b]">
                                    PlanWel
                                </a>
                            </div>

                            <!-- mTrak -->
                            <div class="border-b border-stone-100">
                                <a href="/products#mtrak" data-product-choice="mtrak" class="block px-5 py-3 text-[16px] font-bold text-stone-800 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition border-l-4 border-transparent hover:border-l-[#087e8b]">
                                    mTrak
                                </a>
                            </div>

                            <!-- SewIoT -->
                            <div class="border-b border-stone-100">
                                <a href="/products#sewiot" data-product-choice="sewiot" class="block px-5 py-3 text-[16px] font-bold text-stone-800 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition border-l-4 border-transparent hover:border-l-[#087e8b]">
                                    SewIoT
                                </a>
                            </div>

                            <!-- Industry Solutions -->
                            <div class="group/ind">
                                <div class="flex items-center justify-between px-5 py-3 cursor-pointer hover:bg-[#e0f7f3] hover:text-[#087e8b] transition border-l-4 border-transparent hover:border-l-[#087e8b]">
                                    <a href="/products#laundry" data-product-choice="laundry" class="text-[16px] font-bold text-stone-800 hover:text-[#087e8b] flex-1">Industry Solutions</a>
                                    <button type="button" onclick="event.stopPropagation(); var el=document.getElementById('nav-ind-sub'); el.classList.toggle('hidden');" class="p-1 text-stone-400 hover:text-[#087e8b]">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                                    </button>
                                </div>
                                <div id="nav-ind-sub" class="hidden bg-stone-50/80 py-1 px-3 space-y-0.5 border-t border-stone-100">
                                    <a href="/products#laundry" data-product-choice="laundry" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Laundry Management</a>
                                    <a href="/products#jig" data-product-choice="jig" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Jig Management</a>
                                    <a href="/products#shrinkage" data-product-choice="shrinkage" class="block px-3 py-1.5 rounded-lg text-xs font-semibold text-stone-600 hover:bg-[#e0f7f3] hover:text-[#087e8b] transition">Shrinkage Testing App</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ── About Dropdown ── -->
                <div class="relative" id="about-nav-group">
                    <button
                        id="about-nav-btn"
                        onclick="toggleAboutDropdown()"
                        class="flex items-center gap-1.5 px-4 py-2 rounded-full transition-all duration-200 {{ (request()->is('about*') || request()->is('business-stories*') || request()->is('industries*')) ? 'bg-sky-50 text-sky-600 font-bold border border-sky-200' : 'hover:text-sky-600 hover:bg-slate-100/70' }}"
                        aria-haspopup="true" aria-expanded="false">
                        <span>About</span>
                        <svg id="about-chevron" class="w-3.5 h-3.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="about-dropdown-panel" class="absolute top-full left-0 mt-2 w-56 rounded-2xl border border-slate-200 opacity-0 invisible translate-y-2 transition-all duration-200 overflow-hidden shadow-2xl bg-white" style="pointer-events:none; z-index:99999;">
                        <div class="py-2">
                            <a href="/about#company-profile" class="block px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-sky-600 transition">Track Tech Solutions</a>
                            <a href="/about#leadership" class="block px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-sky-600 transition">Our Leadership Team</a>
                            <a href="/business-stories" class="block px-5 py-2.5 text-sm font-semibold text-slate-700 hover:bg-slate-50 hover:text-sky-600 transition">Business Stories</a>
                        </div>
                    </div>
                </div>

                <a href="/contact" class="px-4 py-2 rounded-full hover:text-sky-600 hover:bg-slate-100/70 transition-all {{ request()->is('contact*') ? 'bg-sky-50 text-sky-600 font-bold border border-sky-200' : '' }}">Contact Us</a>
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:flex items-center gap-3">
                <a href="/contact" class="bg-[#087e8b] hover:bg-[#066570] text-white px-6 py-2.5 rounded-full font-semibold transition-all shadow-md shadow-[#087e8b]/25 hover:scale-105 text-sm">
                    Request for Demo
                </a>
            </div>

            <!-- Mobile Hamburger Button -->
            <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-xl hover:bg-slate-100 transition" aria-label="Toggle Menu">
                <span class="block w-6 h-0.5 bg-slate-800"></span>
                <span class="block w-6 h-0.5 bg-slate-800"></span>
                <span class="block w-4 h-0.5 bg-slate-800 ml-auto"></span>
            </button>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white border-b border-slate-200 shadow-xl max-h-[85vh] overflow-y-auto">
            <div class="max-w-7xl mx-auto px-6 py-5 flex flex-col gap-3">
                <a href="/#dashboards-section" class="text-slate-800 font-semibold py-2 border-b border-slate-100">Live Dashboards</a>
                <a href="/#clients" class="text-slate-800 font-semibold py-2 border-b border-slate-100">Clients</a>

                <!-- Mobile Products Accordion -->
                <div>
                    <button onclick="toggleMobileProducts()" class="w-full flex items-center justify-between text-slate-800 font-semibold py-2 border-b border-slate-100">
                        <span>Products</span>
                        <svg id="mobile-products-chevron" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="mobile-products-panel" class="hidden pl-4 pb-2 space-y-1 mt-2">
                        <p class="text-[10px] font-black uppercase text-slate-400">TrakWel</p>
                        <a href="/products#trakwel" data-product-choice="trakwel" class="block py-1.5 text-sm font-bold text-slate-900">TrakWel (MES)</a>
                        <a href="/products#fabric" data-product-choice="fabric" class="block py-1 text-xs text-slate-600 pl-3">Fabric Inventory Management</a>
                        <a href="/products#cutting" data-product-choice="cutting" class="block py-1 text-xs text-slate-600 pl-3">Cutting Room Digitisation</a>
                        <a href="/products#production" data-product-choice="production" class="block py-1 text-xs text-slate-600 pl-3">Production Tracking</a>
                        <a href="/products#quality" data-product-choice="quality" class="block py-1 text-xs text-slate-600 pl-3">Quality Control</a>
                        <div class="border-t border-slate-100 my-2"></div>
                        <a href="/products#planwel" data-product-choice="planwel" class="block py-1.5 text-sm font-bold text-slate-900">PlanWel</a>
                        <a href="/products#mtrak" data-product-choice="mtrak" class="block py-1.5 text-sm font-bold text-slate-900">mTrak</a>
                        <a href="/products#sewiot" data-product-choice="sewiot" class="block py-1.5 text-sm font-bold text-slate-900">SewIoT</a>
                        <div class="border-t border-slate-100 my-2"></div>
                        <p class="text-[10px] font-black uppercase text-slate-400">Industry Solutions</p>
                        <a href="/products#laundry" data-product-choice="laundry" class="block py-1 text-xs text-slate-600 pl-3">Laundry Management</a>
                        <a href="/products#jig" data-product-choice="jig" class="block py-1 text-xs text-slate-600 pl-3">Jig Management</a>
                        <a href="/products#shrinkage" data-product-choice="shrinkage" class="block py-1 text-xs text-slate-600 pl-3">Shrinkage Testing App</a>
                    </div>
                </div>

                <!-- Mobile About Accordion -->
                <div>
                    <button onclick="toggleMobileAbout()" class="w-full flex items-center justify-between text-slate-800 font-semibold py-2 border-b border-slate-100">
                        <span>About</span>
                        <svg id="mobile-about-chevron" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div id="mobile-about-panel" class="hidden pl-4 pb-2 space-y-1 mt-2">
                        <a href="/about#company-profile" class="block py-1.5 text-sm text-slate-700">Track Tech Solutions</a>
                        <a href="/about#leadership" class="block py-1.5 text-sm text-slate-700">Our Leadership Team</a>
                        <a href="/business-stories" class="block py-1.5 text-sm text-slate-700">Business Stories</a>
                    </div>
                </div>

                <a href="/contact" class="text-slate-800 font-semibold py-2 border-b border-slate-100">Contact Us</a>
                <a href="/contact" class="mt-2 bg-[#087e8b] hover:bg-[#066570] text-white text-center px-6 py-3 rounded-full font-semibold shadow-md">
                    Request for Demo
                </a>
            </div>
        </div>
    </header>

    <!-- ══ MAIN CONTENT ════════════════════════════════════════════════════ -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- ══ FOOTER ══════════════════════════════════════════════════════════ -->
    <footer class="bg-slate-900 text-white border-t border-slate-800 pt-16 pb-12 mt-20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-5">
                        <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Track Tech Solution Logo" class="h-9 w-auto object-contain bg-white rounded-full p-1 shadow-sm">
                        <span class="font-bold text-xl text-white font-heading">Track <span class="text-[#14d5b2]">Tech</span> Solution</span>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed mb-6">
                        From the first roll of fabric to the final shipment, Track Tech helps your team see what is happening, fix issues sooner and keep every order moving.
                    </p>
                    <div class="flex flex-col gap-2 text-sm text-slate-300">
                        <a href="mailto:info@tracktechsolutions.com" class="hover:text-sky-400 transition">info@tracktechsolutions.com</a>
                        <a href="tel:+919742060606" class="hover:text-sky-400 transition">+91 97420 60606</a>
                        <a href="tel:+919650613666" class="hover:text-sky-400 transition">+91 96506 13666</a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-5 font-heading">Products</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="/products#trakwel" class="hover:text-white transition">TrakWel (MES)</a></li>
                        <li><a href="/products#fabric" class="hover:text-white transition">Fabric Inventory</a></li>
                        <li><a href="/products#cutting" class="hover:text-white transition">Cutting Room</a></li>
                        <li><a href="/products#production" class="hover:text-white transition">Production Tracking</a></li>
                        <li><a href="/products#quality" class="hover:text-white transition">Quality Control</a></li>
                        <li><a href="/products#planwel" class="hover:text-white transition">PlanWel</a></li>
                        <li><a href="/products#mtrak" class="hover:text-white transition">mTrak</a></li>
                        <li><a href="/products#sewiot" class="hover:text-white transition">SewIoT</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-5 font-heading">Company</h4>
                    <ul class="space-y-2.5 text-sm text-slate-400">
                        <li><a href="/about#company-profile" class="hover:text-white transition">About Track Tech</a></li>
                        <li><a href="/about#leadership" class="hover:text-white transition">Leadership Team</a></li>
                        <li><a href="/business-stories" class="hover:text-white transition">Business Stories</a></li>
                        <li><a href="/#clients" class="hover:text-white transition">Key Customers</a></li>
                        <li><a href="/contact" class="hover:text-white transition">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-5 font-heading">Head Office</h4>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4">
                        Bangalore, Karnataka, India
                    </p>
                    <div class="mt-6">
                        <a href="https://wa.me/919650613666" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs shadow-md transition">
                            <span>💬 WhatsApp Us</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} Track Tech Solutions. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="/privacy" class="hover:text-slate-400 transition">Privacy Policy</a>
                    <a href="/terms" class="hover:text-slate-400 transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ══ FLOATING WHATSAPP & SCROLL TOP BUTTONS ════════════════════════ -->
    <div class="fixed bottom-6 right-6 z-50 flex items-center gap-3">
        <button id="scroll-to-top-btn" class="w-10 h-10 rounded-full bg-white text-slate-800 border border-slate-200 shadow-lg flex items-center justify-center hover:bg-slate-50 transition hover:scale-105" title="Back to Top">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"/></svg>
        </button>

        <a href="https://wa.me/919650613666" target="_blank" rel="noopener"
           class="w-12 h-12 rounded-full bg-emerald-500 hover:bg-emerald-400 text-white flex items-center justify-center shadow-xl shadow-emerald-500/30 transition hover:scale-110"
           title="Chat on WhatsApp">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        </a>
    </div>

    <!-- ══ SCRIPTS ═════════════════════════════════════════════════════════ -->
    <script>
        // Init AOS animations
        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 600, once: true, offset: 50 });
        }

        // Scroll reading indicator
        window.addEventListener('scroll', function() {
            var doc = document.documentElement;
            var winScroll = doc.scrollTop || document.body.scrollTop;
            var height = doc.scrollHeight - doc.clientHeight;
            var scrolled = height > 0 ? (winScroll / height) * 100 : 0;
            var bar = document.getElementById('scroll-progress-bar');
            if (bar) bar.style.width = scrolled + '%';

            var topBtn = document.getElementById('scroll-to-top-btn');
            if (topBtn) topBtn.style.display = winScroll > 300 ? 'flex' : 'none';
        });

        // Scroll to top
        document.getElementById('scroll-to-top-btn')?.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-btn')?.addEventListener('click', function() {
            document.getElementById('mobile-menu')?.classList.toggle('hidden');
        });

        // Products Dropdown
        var _prodOpen = false;
        window.toggleProductsDropdown = function() {
            _prodOpen = !_prodOpen;
            var panel = document.getElementById('products-dropdown-panel');
            var chevron = document.getElementById('products-chevron');
            var btn = document.getElementById('products-nav-btn');
            if (!panel) return;
            panel.classList.toggle('opacity-0', !_prodOpen);
            panel.classList.toggle('invisible', !_prodOpen);
            panel.classList.toggle('translate-y-2', !_prodOpen);
            panel.classList.toggle('opacity-100', _prodOpen);
            panel.classList.toggle('visible', _prodOpen);
            panel.classList.toggle('translate-y-0', _prodOpen);
            panel.style.pointerEvents = _prodOpen ? 'auto' : 'none';
            if (chevron) chevron.style.transform = _prodOpen ? 'rotate(180deg)' : 'rotate(0deg)';
            if (btn) btn.setAttribute('aria-expanded', _prodOpen ? 'true' : 'false');
        };

        // About Dropdown
        var _aboutOpen = false;
        window.toggleAboutDropdown = function() {
            _aboutOpen = !_aboutOpen;
            var panel = document.getElementById('about-dropdown-panel');
            var chevron = document.getElementById('about-chevron');
            var btn = document.getElementById('about-nav-btn');
            if (!panel) return;
            panel.classList.toggle('opacity-0', !_aboutOpen);
            panel.classList.toggle('invisible', !_aboutOpen);
            panel.classList.toggle('translate-y-2', !_aboutOpen);
            panel.classList.toggle('opacity-100', _aboutOpen);
            panel.classList.toggle('visible', _aboutOpen);
            panel.classList.toggle('translate-y-0', _aboutOpen);
            panel.style.pointerEvents = _aboutOpen ? 'auto' : 'none';
            if (chevron) chevron.style.transform = _aboutOpen ? 'rotate(180deg)' : 'rotate(0deg)';
            if (btn) btn.setAttribute('aria-expanded', _aboutOpen ? 'true' : 'false');
        };

        // Close on outside click
        document.addEventListener('click', function(e) {
            var prodGroup = document.getElementById('products-nav-group');
            if (_prodOpen && prodGroup && !prodGroup.contains(e.target)) {
                window.toggleProductsDropdown();
            }
            var aboutGroup = document.getElementById('about-nav-group');
            if (_aboutOpen && aboutGroup && !aboutGroup.contains(e.target)) {
                window.toggleAboutDropdown();
            }
        });

        // Close on Escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (_prodOpen) window.toggleProductsDropdown();
                if (_aboutOpen) window.toggleAboutDropdown();
            }
        });

        // Mobile accordions
        window.toggleMobileProducts = function() {
            var panel = document.getElementById('mobile-products-panel');
            var chevron = document.getElementById('mobile-products-chevron');
            if (panel) {
                panel.classList.toggle('hidden');
                if (chevron) chevron.style.transform = panel.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            }
        };

        window.toggleMobileAbout = function() {
            var panel = document.getElementById('mobile-about-panel');
            var chevron = document.getElementById('mobile-about-chevron');
            if (panel) {
                panel.classList.toggle('hidden');
                if (chevron) chevron.style.transform = panel.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
            }
        };

        // When a product choice is clicked on /products, smoothly switch it
        document.addEventListener('click', function(e) {
            var target = e.target.closest('[data-product-choice]');
            if (!target) return;
            var choice = target.getAttribute('data-product-choice');
            if (window.selectProduct) {
                e.preventDefault();
                window.selectProduct(choice);
                if (_prodOpen) window.toggleProductsDropdown();
                var mob = document.getElementById('mobile-menu');
                if (mob && !mob.classList.contains('hidden')) mob.classList.add('hidden');
                var exp = document.getElementById('product-experience');
                if (exp) exp.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
