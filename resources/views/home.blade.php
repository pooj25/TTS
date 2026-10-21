<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Track Tech Solution | Next-Gen Garment Manufacturing Software</title>
  <meta name="description"
    content="Track materials, orders, production and quality in one clear view, from the first roll of fabric to the final shipment.">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/track-tech-logo.png') }}">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Space Grotesk', 'sans-serif'],
          },
          colors: {
            brand: {
              orange: '#ea580c',
              red: '#dc2626',
              amber: '#d97706',
              light: '#faf7f4',
              card: 'rgba(255, 255, 255, 0.80)',
            }
          }
        }
      }
    }
  </script>

  <!-- Custom Cyber-Glass Styling -->
  <style>
    :root {
      color-scheme: light;
    }

    body {
      background: linear-gradient(135deg, #fdf8f3 0%, #faf4ee 40%, #fef9f5 100%);
      color: #1c1917;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
      margin: 0;
    }

    h1, h2, h3, h4, h5, h6, .font-heading {
      font-family: 'Space Grotesk', sans-serif;
    }

    /* Ambient Glow Backgrounds */
    .cyber-bg-glow {
      position: fixed;
      inset: 0;
      pointer-events: none;
      z-index: 0;
      background: 
        radial-gradient(circle at 15% 20%, rgba(251, 113, 33, 0.10) 0%, transparent 45%),
        radial-gradient(circle at 85% 65%, rgba(239, 68, 68, 0.07) 0%, transparent 50%),
        radial-gradient(circle at 50% 90%, rgba(249, 115, 22, 0.06) 0%, transparent 40%);
    }

    /* Continuous 3D Apparel Background Video */
    .ambient-video-canvas {
      position: fixed;
      inset: 0;
      width: 100vw;
      height: 100vh;
      object-fit: cover;
      opacity: 0.10;
      pointer-events: none;
      z-index: 0;
      filter: contrast(1.15) saturate(1.2);
    }

    /* Glassmorphic Cards */
    .glass-card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(0, 0, 0, 0.08);
      border-radius: 1.5rem;
      transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .glass-card:hover {
      border-color: rgba(234, 88, 12, 0.50);
      box-shadow: 0 20px 40px -15px rgba(234, 88, 12, 0.18);
      transform: translateY(-3px);
    }

    /* Floating Pill Navbar */
    .floating-nav {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      border: 1px solid rgba(0, 0, 0, 0.10);
      box-shadow: 0 8px 32px -8px rgba(0, 0, 0, 0.15), 0 0 20px rgba(234, 88, 12, 0.08);
    }

    /* Custom Cursor Follower Glow */
    .cursor-glow {
      position: fixed;
      width: 480px;
      height: 480px;
      background: radial-gradient(circle, rgba(234, 88, 12, 0.10), transparent 70%);
      border-radius: 50%;
      pointer-events: none;
      transform: translate(-50%, -50%);
      z-index: 1;
      transition: transform 0.12s ease-out;
    }

    /* Marquee Animation */
    @keyframes marquee {
      0% { transform: translateX(0%); }
      100% { transform: translateX(-50%); }
    }

    .marquee-track {
      display: flex;
      width: max-content;
      animation: marquee 32s linear infinite;
    }

    .marquee-track:hover {
      animation-play-state: paused;
    }

    /* Scanline effect for Hero Showcase */
    .cyber-frame {
      position: relative;
      border: 1px solid rgba(234, 88, 12, 0.30);
      box-shadow: 0 0 35px rgba(234, 88, 12, 0.12), inset 0 0 30px rgba(234, 88, 12, 0.04);
    }

    /* Smooth Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #f5f0eb;
    }
    ::-webkit-scrollbar-thumb {
      background: #d4c4b0;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #f97316;
    }
  </style>
</head>

<body class="relative min-h-screen">

  <!-- Interactive Cursor Glow -->
  <div class="cursor-glow hidden md:block" id="cursorGlow"></div>

  <!-- Ambient Video Background -->
  <video class="ambient-video-canvas" autoplay muted loop playsinline poster="{{ asset('assets/img/factory-aerial.jpg') }}">
    <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
    <source src="{{ asset('videos/apparel-3d-loop.mp4') }}" type="video/mp4">
  </video>

  <!-- Ambient Glow Gradients -->
  <div class="cyber-bg-glow"></div>

  <!-- ═══════════════════════════════════════════════════════════════════
       1. FLOATING PILL NAVBAR (Modern 2026 SaaS Aesthetic)
  ═══════════════════════════════════════════════════════════════════ -->
  <div class="fixed top-5 left-0 right-0 z-50 flex justify-center px-4">
    <nav class="floating-nav w-full max-w-6xl rounded-full px-4 sm:px-6 py-3 flex items-center justify-between">
      
      <!-- Brand Logo -->
      <a href="#about" class="flex items-center gap-2.5 group py-0.5">
        <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Track Tech Solution Logo" class="h-9 sm:h-10 w-auto object-contain transition-transform group-hover:scale-105">
        <span class="font-heading font-extrabold text-xl sm:text-2xl tracking-tight text-stone-900 group-hover:opacity-90 transition">
          Track Tech <span class="text-orange-500">Solution</span>
        </span>
      </a>

      <!-- Desktop Nav Items -->
      <div class="hidden md:flex items-center gap-1 xl:gap-2 text-sm md:text-[15px] font-semibold text-stone-700">
        <a href="#about" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">About</a>
        <a href="#products" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Products</a>
        <a href="#clients" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Clients</a>
        <a href="#leadership" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Leadership</a>
        <a href="#contact" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Contact</a>
      </div>

      <!-- Action Button -->
      <div class="flex items-center gap-2">
        <a href="#contact"
          class="bg-gradient-to-r from-orange-500 to-red-600 hover:from-orange-400 hover:to-red-500 text-white text-sm sm:text-[15px] font-bold px-6 py-2.5 sm:py-3 rounded-full shadow-lg shadow-orange-500/25 hover:shadow-orange-400/40 hover:scale-105 transition-all">
          Experience Live Demo
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobileNavBtn" class="md:hidden p-2 text-stone-600 hover:text-stone-900" aria-label="Toggle Navigation">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </nav>
  </div>

  <!-- Mobile Dropdown Drawer -->
  <div id="mobileDrawer" class="fixed inset-x-4 top-20 z-40 hidden md:hidden glass-card p-6 border border-stone-200 shadow-2xl space-y-3">
    <a href="#about" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">About</a>
    <a href="#products" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Products</a>
    <a href="#clients" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Clients</a>
    <a href="#leadership" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Leadership Team</a>
    <a href="#contact" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600">Contact Us</a>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════════
       2. HERO SECTION (High-Tech 3D Apparel Centerpiece)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="about" class="relative pt-36 pb-20 lg:pt-44 lg:pb-28 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-12">
      
      <!-- Headline & Introduction -->
      <div class="text-center space-y-6 max-w-4xl mx-auto">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-orange-50 border border-orange-400/50 text-orange-600 backdrop-blur-md shadow-lg shadow-orange-500/10">
          <span class="w-2 h-2 rounded-full bg-orange-400 animate-ping"></span>
          Next-Gen Garment Manufacturing Intelligence
        </div>

        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.12] text-stone-900 font-heading">
          A Clearer Way To <br class="hidden sm:inline" />
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-red-400 to-amber-500">Run Your Garment Factory</span>
        </h1>

        <p class="text-base sm:text-xl text-stone-600 leading-relaxed max-w-2xl mx-auto">
          From the first roll of fabric to the final shipment, Track Tech helps your team see what is happening in real time, fix bottlenecks sooner and keep every order moving.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-3">
          <a href="#contact"
            class="w-full sm:w-auto px-8 py-4 rounded-full bg-gradient-to-r from-orange-500 via-red-500 to-amber-600 hover:from-orange-400 hover:to-red-500 text-white font-bold text-sm shadow-xl shadow-orange-500/30 hover:scale-105 transition-all text-center">
            Schedule Factory Walkthrough
          </a>
          <a href="#products"
            class="w-full sm:w-auto px-7 py-4 rounded-full bg-white/80 hover:bg-orange-50 text-stone-700 hover:text-stone-900 font-semibold text-sm border border-stone-200 hover:border-orange-500 transition-all text-center flex items-center justify-center gap-2">
            <span>Explore Product Studio</span>
            <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </a>
        </div>
      </div>

      <!-- 3D Apparel Video Showcase Screen -->
      <div class="cyber-frame rounded-3xl overflow-hidden bg-white/90 backdrop-blur-2xl shadow-2xl relative group">
        <!-- Top Tech Bar -->
        <div class="bg-white/90 px-5 py-3 border-b border-stone-200 flex items-center justify-between text-xs">
          <div class="flex items-center gap-2">
            <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
            <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
            <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
            <span class="ml-2 font-mono text-[11px] text-stone-500">track-tech-os.live/telemetry/3d-apparel-simulation</span>
          </div>
          <div class="flex items-center gap-2 text-orange-400 font-mono text-[11px]">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
            <span>FEED ONLINE • 53.2s DYNAMIC LOOP</span>
          </div>
        </div>

        <!-- Video Viewport -->
        <div class="relative aspect-[16/9] sm:aspect-[21/9] max-h-[480px] overflow-hidden bg-orange-50">
          <video autoplay loop muted playsinline class="w-full h-full object-cover filter contrast-110 saturate-110">
            <source src="{{ asset('assets/video/apparel-3d-loop.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/apparel-3d-loop.mp4') }}" type="video/mp4">
          </video>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-slate-950/20 pointer-events-none"></div>

          <!-- Floating Live Telemetry Cards on Video -->
          <div class="absolute top-4 left-4 p-3 rounded-xl bg-white/85 backdrop-blur-md border border-stone-200 text-xs text-stone-600 space-y-1 hidden sm:block">
            <div class="text-[10px] font-mono text-orange-400 font-bold uppercase">Workstation Speed</div>
            <div class="font-bold text-stone-900 text-sm">4,280 Stitches / Min</div>
            <div class="text-[10px] text-emerald-400">Zero skipped stitches detected</div>
          </div>

          <div class="absolute bottom-4 right-4 p-3 rounded-xl bg-white/85 backdrop-blur-md border border-stone-200 text-xs text-stone-600 space-y-1 text-right hidden sm:block">
            <div class="text-[10px] font-mono text-amber-400 font-bold uppercase">AQL 1.5 Compliance</div>
            <div class="font-bold text-stone-900 text-sm">99.1% First-Pass Pass</div>
            <div class="text-[10px] text-orange-600">Active lines: 18 / 20 Operational</div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       4. COMPANY PROFILE SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="company-profile" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-8 sm:p-12 lg:p-16 border border-stone-200">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-orange-400">
            <span>Track Tech Solutions</span>
            <span class="text-slate-500">/</span>
            <span class="text-stone-500">EST. 2019</span>
          </div>

          <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold font-heading text-stone-900 leading-tight">
            Digital clarity for the people who make apparel
          </h2>

          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            Track Tech Solutions builds practical digital tools engineered specifically for apparel manufacturing. The platform connects production, quality, planning, materials, and factory-floor teams—helping people see what is happening and act while there is still time to improve the outcome.
          </p>

          <div class="pt-2 flex items-center gap-6 text-xs font-semibold text-stone-500">
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-orange-400"></span> 2 Global Countries
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 36 Tech Specialists
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-indigo-400"></span> 100% Customer Focused
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">01. Floor MES</div>
            <p class="text-xs text-stone-500 leading-relaxed">Bundle RFID tracking, cutting-to-pack pipelines, and live operator scorecards.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">02. Dynamic Gantt</div>
            <p class="text-xs text-stone-500 leading-relaxed">Fast-react multi-line scheduling, SAM variance management, and milestone forecasting.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">03. Machine IoT</div>
            <p class="text-xs text-stone-500 leading-relaxed">RPM telemetry, vibration sensors, predictive motor alerts, and QR mechanic dispatch.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">04. Quality AI</div>
            <p class="text-xs text-stone-500 leading-relaxed">Inline stitch defect heatmaps, zero-scrap fabric markers, and automated AQL 1.5 audits.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


    <!-- ═══════════════════════════════════════════════════════════════════
       5. COMPREHENSIVE SOFTWARE SUITE (From website-tts.vercel.app)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="products" class="relative py-24 sm:py-28 px-4 sm:px-6 lg:px-8 z-10">
    <span id="products-studio" class="absolute -top-10"></span>
    <div class="max-w-7xl mx-auto space-y-20">
      
      <!-- Section Header -->
      <div class="text-center space-y-4 max-w-3xl mx-auto">
        <span class="text-xs font-semibold uppercase tracking-widest text-orange-600 px-4 py-1.5 rounded-full bg-orange-50 border border-orange-200 inline-block font-sans shadow-sm">
          Comprehensive Software Suite
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold text-stone-900 font-heading tracking-tight leading-tight">
          Designed for <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-500 italic">Smart Garment Factories</span>
        </h2>
      </div>

      <!-- 4 Core Products Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        
        <!-- 1. Quality Control AI -->
        <div class="p-8 sm:p-10 rounded-3xl glass-card border border-stone-200/90 hover:border-orange-500/50 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="p-3.5 rounded-2xl bg-orange-100 text-orange-600 group-hover:bg-gradient-to-r group-hover:from-orange-500 group-hover:to-red-600 group-hover:text-white transition-all shadow-sm">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </div>
              <span class="text-xs font-semibold text-orange-700 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 font-sans">AI Powered</span>
            </div>
            <div>
              <h3 class="text-2xl sm:text-3xl font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Quality Control AI</h3>
              <p class="text-xs font-semibold text-orange-500 mt-1 uppercase tracking-wider font-sans">Predict & Prevent Defects Inline</p>
            </div>
            <p class="text-sm text-stone-600 font-sans leading-relaxed">
              Flawless quality assurance powered by vision AI. Automate fabric roll inspection, stitching flaw detection, and inline quality logging to reduce defects by up to 35%.
            </p>
          </div>
          <div class="pt-8 mt-8 border-t border-stone-100">
            <a href="{{ url('/products/quality-control') }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-700 transition group/link">
              <span>Explore Quality Control Module</span>
              <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
          </div>
        </div>

        <!-- 2. Production Tracking -->
        <div class="p-8 sm:p-10 rounded-3xl glass-card border border-stone-200/90 hover:border-orange-500/50 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="p-3.5 rounded-2xl bg-orange-100 text-orange-600 group-hover:bg-gradient-to-r group-hover:from-orange-500 group-hover:to-red-600 group-hover:text-white transition-all shadow-sm">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <span class="text-xs font-semibold text-orange-700 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 font-sans">Live Telemetry</span>
            </div>
            <div>
              <h3 class="text-2xl sm:text-3xl font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Production Tracking</h3>
              <p class="text-xs font-semibold text-orange-500 mt-1 uppercase tracking-wider font-sans">End-to-End Real Time Visibility</p>
            </div>
            <p class="text-sm text-stone-600 font-sans leading-relaxed">
              Gain 100% transparent tracking across all production stages—from cutting room and sewing lines to finishing and final dispatch.
            </p>
          </div>
          <div class="pt-8 mt-8 border-t border-stone-100">
            <a href="{{ url('/products/production-tracking') }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-700 transition group/link">
              <span>Explore Production Tracking</span>
              <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
          </div>
        </div>

        <!-- 3. Machine Maintenance (OEE) -->
        <div class="p-8 sm:p-10 rounded-3xl glass-card border border-stone-200/90 hover:border-orange-500/50 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="p-3.5 rounded-2xl bg-orange-100 text-orange-600 group-hover:bg-gradient-to-r group-hover:from-orange-500 group-hover:to-red-600 group-hover:text-white transition-all shadow-sm">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                </svg>
              </div>
              <span class="text-xs font-semibold text-orange-700 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 font-sans">IoT Connected</span>
            </div>
            <div>
              <h3 class="text-2xl sm:text-3xl font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Machine Maintenance (OEE)</h3>
              <p class="text-xs font-semibold text-orange-500 mt-1 uppercase tracking-wider font-sans">Equipment Health & Downtime Prevention</p>
            </div>
            <p class="text-sm text-stone-600 font-sans leading-relaxed">
              Maximize overall equipment effectiveness (OEE). Monitor machine run hours, predict motor failures, and schedule servicing automatically.
            </p>
          </div>
          <div class="pt-8 mt-8 border-t border-stone-100">
            <a href="{{ url('/products/machine-maintenance') }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-700 transition group/link">
              <span>Explore Machine Maintenance</span>
              <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
          </div>
        </div>

        <!-- 4. Production Planning -->
        <div class="p-8 sm:p-10 rounded-3xl glass-card border border-stone-200/90 hover:border-orange-500/50 shadow-md hover:shadow-xl transition-all flex flex-col justify-between group">
          <div class="space-y-6">
            <div class="flex items-center justify-between">
              <div class="p-3.5 rounded-2xl bg-orange-100 text-orange-600 group-hover:bg-gradient-to-r group-hover:from-orange-500 group-hover:to-red-600 group-hover:text-white transition-all shadow-sm">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
              </div>
              <span class="text-xs font-semibold text-orange-700 px-3 py-1 rounded-full bg-orange-50 border border-orange-200 font-sans">Smart Gantt</span>
            </div>
            <div>
              <h3 class="text-2xl sm:text-3xl font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Production Planning</h3>
              <p class="text-xs font-semibold text-orange-500 mt-1 uppercase tracking-wider font-sans">Intelligent Scheduling & Line Optimization</p>
            </div>
            <p class="text-sm text-stone-600 font-sans leading-relaxed">
              Schedule customer orders against exact line capacities, section skills, and delivery deadlines with an intuitive digital planner.
            </p>
          </div>
          <div class="pt-8 mt-8 border-t border-stone-100">
            <a href="{{ url('/products/production-planning') }}" class="inline-flex items-center gap-2 text-sm font-bold text-orange-600 hover:text-orange-700 transition group/link">
              <span>Explore Production Planning</span>
              <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
            </a>
          </div>
        </div>

      </div>

      <!-- Garment Manufacturing Industry Modules Grid -->
      <div class="mt-16 pt-16 border-t border-stone-200/80 space-y-12">
        <div class="text-center space-y-3 max-w-2xl mx-auto">
          <span class="text-xs font-semibold uppercase tracking-widest text-orange-600 px-4 py-1.5 rounded-full bg-orange-50 border border-orange-200 inline-block font-sans shadow-sm">
            Garment Industry Modules
          </span>
          <h3 class="text-2xl sm:text-4xl font-bold text-stone-900 font-heading tracking-tight">
            End-to-End Digitalization for Apparel Factories
          </h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Module 1: Quality Management System -->
          <div class="bg-white/95 rounded-2xl border border-stone-200 overflow-hidden shadow-md hover:shadow-xl hover:border-orange-500/50 transition-all group flex flex-col justify-between">
            <div>
              <div class="h-44 relative overflow-hidden bg-stone-100">
                <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=600&q=80" alt="Quality Management System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent"></div>
                <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-orange-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md shadow-sm">QMS AI</span>
              </div>
              <div class="p-5 space-y-2">
                <h4 class="text-lg font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Quality Management System</h4>
                <p class="text-xs text-stone-600 font-sans leading-relaxed">
                  Inline fabric inspection, stitch defect tagging, and AQL automated scoring dashboards.
                </p>
              </div>
            </div>
          </div>

          <!-- Module 2: Production Tracking System -->
          <div class="bg-white/95 rounded-2xl border border-stone-200 overflow-hidden shadow-md hover:shadow-xl hover:border-orange-500/50 transition-all group flex flex-col justify-between">
            <div>
              <div class="h-44 relative overflow-hidden bg-stone-100">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=600&q=80" alt="Production Tracking System" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent"></div>
                <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-orange-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md shadow-sm">RFID & Barcode</span>
              </div>
              <div class="p-5 space-y-2">
                <h4 class="text-lg font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Production Tracking System</h4>
                <p class="text-xs text-stone-600 font-sans leading-relaxed">
                  Real-time bundle tracking across sewing lines with real-time WIP updates and operator efficiency metrics.
                </p>
              </div>
            </div>
          </div>

          <!-- Module 3: Cutting Room Digitisation -->
          <div class="bg-white/95 rounded-2xl border border-stone-200 overflow-hidden shadow-md hover:shadow-xl hover:border-orange-500/50 transition-all group flex flex-col justify-between">
            <div>
              <div class="h-44 relative overflow-hidden bg-stone-100">
                <img src="https://images.unsplash.com/photo-1604014237800-1c9102c219da?auto=format&fit=crop&w=600&q=80" alt="Cutting Room Digitisation" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent"></div>
                <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-orange-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md shadow-sm">Smart Spreading</span>
              </div>
              <div class="p-5 space-y-2">
                <h4 class="text-lg font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Cutting Room Digitisation</h4>
                <p class="text-xs text-stone-600 font-sans leading-relaxed">
                  Digital marker planning, fabric roll optimization, and automated ply-count tracking.
                </p>
              </div>
            </div>
          </div>

          <!-- Module 4: Fabric Inventory Management -->
          <div class="bg-white/95 rounded-2xl border border-stone-200 overflow-hidden shadow-md hover:shadow-xl hover:border-orange-500/50 transition-all group flex flex-col justify-between">
            <div>
              <div class="h-44 relative overflow-hidden bg-stone-100">
                <img src="https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?auto=format&fit=crop&w=600&q=80" alt="Fabric Inventory Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 to-transparent"></div>
                <span class="absolute bottom-3 left-3 text-xs font-semibold font-sans text-white bg-orange-600/90 backdrop-blur-sm px-2.5 py-1 rounded-md shadow-sm">Warehouse IoT</span>
              </div>
              <div class="p-5 space-y-2">
                <h4 class="text-lg font-bold text-stone-900 font-heading group-hover:text-orange-600 transition-colors">Fabric Inventory Management</h4>
                <p class="text-xs text-stone-600 font-sans leading-relaxed">
                  Barcode-driven roll allocation, shade grouping, shrinkage matching, and zero-loss fabric storage.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>




    <!-- ═══════════════════════════════════════════════════════════════════
       6. KEY CUSTOMERS & DIRECTORY (Stable Grid & Metrics)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="clients" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-10">
      
      <div class="text-center space-y-3 max-w-2xl mx-auto">
        <span class="text-xs font-semibold uppercase tracking-widest text-orange-600 px-4 py-1.5 rounded-full bg-orange-50 border border-orange-200 inline-block font-sans shadow-sm">
          Trusted Worldwide
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
          Technology trusted by apparel makers
        </h2>
        <p class="text-stone-500 text-sm sm:text-base font-sans">
          From established manufacturing groups to specialist apparel exporters, Track Tech brings production, quality and order visibility together.
        </p>
      </div>

      <!-- SVG Symbols Definition (hidden) -->
      <svg xmlns="http://www.w3.org/2000/svg" style="display:none;" aria-hidden="true">
        <symbol id="shahi" viewBox="0 0 200 80">
          <rect x="8" y="16" width="184" height="48" fill="#26345f" />
          <text x="100" y="52" fill="#fff" font-family="Arial,sans-serif" font-size="39" font-weight="800" text-anchor="middle">SHAHI</text>
        </symbol>
        <symbol id="arvind" viewBox="0 0 200 80">
          <text x="100" y="45" fill="#a11e3c" font-family="Georgia,serif" font-size="36" text-anchor="middle">ARVIND</text>
          <text x="100" y="62" fill="#a11e3c" font-family="Arial,sans-serif" font-size="9" font-weight="700" text-anchor="middle">FASHIONING POSSIBILITIES</text>
        </symbol>
        <symbol id="pds" viewBox="0 0 200 80">
          <circle cx="49" cy="40" r="28" fill="none" stroke="#b42b48" stroke-width="3" />
          <path d="M49 12v56M39 14v52M29 20v40M19 29v22M59 14v52M69 20v40M79 29v22" stroke="#b42b48" stroke-width="4" />
          <text x="127" y="53" fill="#17191c" font-family="Georgia,serif" font-size="39" text-anchor="middle">PDS</text>
        </symbol>
        <symbol id="texport" viewBox="0 0 200 80">
          <text x="100" y="51" fill="#243c70" font-family="Arial,sans-serif" font-size="32" font-weight="800" text-anchor="middle">texport</text>
        </symbol>
        <symbol id="modelarna" viewBox="0 0 200 80">
          <ellipse cx="100" cy="31" rx="39" ry="23" fill="none" stroke="#24252a" stroke-width="3" />
          <path d="M66 31h68M100 9v44" stroke="#24252a" stroke-width="2" />
          <path d="M82 17 100 10l18 7v24l-18 12-18-12z" fill="#b32333" stroke="#202126" stroke-width="2" />
          <text x="100" y="72" fill="#17191c" font-family="Arial,sans-serif" font-size="11" font-weight="700" text-anchor="middle">MODELARNA EXPORTS</text>
        </symbol>
        <symbol id="armstrong" viewBox="0 0 200 80">
          <path d="M12 16h30L18 64H0z" fill="#c93635" />
          <path d="M38 16h150l-24 48H14z" fill="#66676b" />
          <text x="107" y="42" fill="#fff" font-family="Georgia,serif" font-size="22" font-weight="700" text-anchor="middle">Armstrong</text>
          <text x="105" y="55" fill="#fff" font-family="Georgia,serif" font-size="9" font-style="italic" text-anchor="middle">The name for Quality</text>
        </symbol>
        <symbol id="penguin" viewBox="0 0 200 80">
          <ellipse cx="36" cy="39" rx="14" ry="25" fill="#fff" stroke="#172331" stroke-width="2.5" />
          <ellipse cx="36" cy="44" rx="8" ry="13" fill="#172331" />
          <circle cx="32" cy="28" r="2" fill="#172331" />
          <circle cx="40" cy="28" r="2" fill="#172331" />
          <path d="m34 32 5 2-5 2z" fill="#d8a344" />
          <path d="M23 57h9M39 57h9" stroke="#d8a344" stroke-width="3" stroke-linecap="round" />
          <text x="119" y="37" fill="#384878" font-family="Arial,sans-serif" font-size="17" font-weight="700" text-anchor="middle">Penguin</text>
          <text x="119" y="53" fill="#384878" font-family="Arial,sans-serif" font-size="12" text-anchor="middle">Apparels (P) Ltd</text>
        </symbol>
        <symbol id="sahana" viewBox="0 0 200 80">
          <path d="M100 37C83 27 87 11 101 5c12 12 10 24-1 32ZM100 37c1-19 17-25 30-16-3 17-14 23-30 16ZM100 37c18-3 28 10 22 25-17 1-24-9-22-25ZM100 37c-3 18-18 24-30 13 4-17 16-22 30-13ZM100 37C81 40 72 27 79 13c17-1 24 9 21 24Z" fill="#d9a22d" />
          <text x="100" y="71" fill="#7c735f" font-family="Georgia,serif" font-size="17" letter-spacing="2" text-anchor="middle">SAHANA</text>
        </symbol>
        <symbol id="trendyfits" viewBox="0 0 200 80">
          <rect x="8" y="10" width="184" height="60" fill="#153b73" />
          <circle cx="34" cy="39" r="14" fill="#f4ca35" />
          <path d="M27 48V29h13v4h-8v4h7v4h-7v7z" fill="#1d5a9a" />
          <text x="117" y="41" fill="#fff" font-family="Arial,sans-serif" font-size="19" font-weight="800" text-anchor="middle">TRENDY FITS</text>
          <text x="117" y="54" fill="#f4ca35" font-family="Arial,sans-serif" font-size="7" text-anchor="middle">COMFORT FASHION FIT</text>
        </symbol>
        <symbol id="mehala" viewBox="0 0 200 80">
          <text x="100" y="42" fill="#df3b3d" font-family="Georgia,serif" font-size="36" font-weight="700" text-anchor="middle">MEHALA</text>
          <text x="100" y="59" fill="#393238" font-family="Georgia,serif" font-size="10" font-style="italic" text-anchor="middle">Committed to Customer Delight</text>
        </symbol>
      </svg>

      <!-- Customer Directory Stable Showcase Card (Screenshot 1) -->
      <div class="glass-card p-6 sm:p-8 border border-stone-200/90 shadow-lg">
        
        <!-- Header: Customer Directory / Key customers -->
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
          <span class="text-xs font-bold uppercase tracking-wider text-stone-500 font-sans">CUSTOMER DIRECTORY</span>
          <span class="text-sm font-bold text-stone-900 font-heading">Key customers</span>
        </div>

        <!-- 5x2 Stable Logo Grid with clean cell borders -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-[1px] bg-stone-200/90 border border-stone-200/90 rounded-2xl overflow-hidden mt-6 shadow-sm">
          
          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#shahi" xlink:href="#shahi"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#arvind" xlink:href="#arvind"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#pds" xlink:href="#pds"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#texport" xlink:href="#texport"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#penguin" xlink:href="#penguin"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#modelarna" xlink:href="#modelarna"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#armstrong" xlink:href="#armstrong"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#sahana" xlink:href="#sahana"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#trendyfits" xlink:href="#trendyfits"></use></svg>
          </div>

          <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-orange-50/40 transition-colors">
            <svg class="w-full h-12 max-w-[140px]"><use href="#mehala" xlink:href="#mehala"></use></svg>
          </div>

        </div>

      </div>

      <!-- Stable Company Facts & Metrics Bar (Screenshot 2) -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-0 bg-white/95 glass-card border border-stone-200/90 rounded-2xl overflow-hidden shadow-sm divide-y md:divide-y-0 md:divide-x divide-stone-200/90">
        
        <div class="p-5 sm:p-6 text-center flex flex-col items-center justify-center">
          <strong class="text-3xl sm:text-4xl font-extrabold text-orange-500 font-heading">2</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 mt-1 font-sans">Countries</span>
        </div>

        <div class="p-5 sm:p-6 text-center flex flex-col items-center justify-center">
          <strong class="text-3xl sm:text-4xl font-extrabold text-orange-500 font-heading">74+</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 mt-1 font-sans">Factories</span>
        </div>

        <div class="p-5 sm:p-6 text-center flex flex-col items-center justify-center">
          <strong class="text-3xl sm:text-4xl font-extrabold text-orange-500 font-heading">6000+</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 mt-1 font-sans">Users</span>
        </div>

        <div class="p-5 sm:p-6 text-center flex flex-col items-center justify-center">
          <strong class="text-3xl sm:text-4xl font-extrabold text-orange-500 font-heading">36</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 mt-1 font-sans">Professionals</span>
        </div>

      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════════
       7. LEADERSHIP TEAM (Glass Executive Profiles)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="leadership" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-12">
      
      <div class="text-center space-y-3 max-w-2xl mx-auto">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400 px-3.5 py-1 rounded-full bg-orange-500/10 border border-orange-500/30 inline-block">
          Our Leadership Team
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
          Built around manufacturing, operations & tech
        </h2>
        <p class="text-stone-500 text-sm sm:text-base">
          Three perspectives working together to make factory software practical, dependable and useful on the floor.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Gopinath M. -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500 to-red-600 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-orange-500/20">
              GM
            </div>
            <div>
              <span class="text-[11px] font-mono text-orange-400 font-bold uppercase">CHIEF EXECUTIVE OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Gopinath M. (Muniraj)</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Gopinath's career spans apparel manufacturing and digital solutions, including regional sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track Tech, he leads the company's direction and factory digital transformation.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener" class="text-xs font-bold text-orange-400 hover:text-orange-600 transition flex items-center gap-1.5">
              <span>Professional Profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Lebinesh Balan -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-amber-500/20">
              LB
            </div>
            <div>
              <span class="text-[11px] font-mono text-amber-400 font-bold uppercase">CHIEF OPERATING OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Lebinesh Balan</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Lebinesh focuses on turning strategy into consistent delivery: aligning customer implementation, teams, and day-to-day operations. His work as COO supports smooth adoption of Track Tech across factory environments and keeps customer needs connected to execution.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener" class="text-xs font-bold text-amber-400 hover:text-amber-300 transition flex items-center gap-1.5">
              <span>LinkedIn Profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Deepak Rajkumar -->
        <div class="glass-card p-7 flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-600 to-rose-700 text-white font-heading font-bold text-xl flex items-center justify-center shadow-lg shadow-red-500/20">
              DR
            </div>
            <div>
              <span class="text-[11px] font-mono text-red-400 font-bold uppercase">CHIEF TECHNOLOGY OFFICER</span>
              <h3 class="text-xl font-bold font-heading text-stone-900 mt-0.5">Deepak Rajkumar</h3>
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
              Deepak guides the technology behind the platform, with a focus on reliable product engineering, useful integrations, and clear information for factory teams. As CTO, he helps turn complex manufacturing workflows into software people can use with confidence.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <span class="text-xs font-mono text-stone-500">Software Architecture & IoT</span>
          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       8. CONTACT & FOOTER SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="contact" class="relative py-24 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-8 sm:p-12 lg:p-16 border border-stone-200 space-y-12">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
        
        <div class="lg:col-span-6 space-y-6">
          <span class="text-xs font-bold uppercase tracking-widest text-orange-400">Let's Connect</span>
          <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
            Want a clearer view of your factory?
          </h2>
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            Tell us how your lines work today. We will show you where Track Tech can remove manual follow-up, optimize floor WIP, and keep every shipment on time.
          </p>

          <div class="pt-2 flex flex-col sm:flex-row gap-4">
            <a href="mailto:sales@tracktechsolutions.com"
              class="px-8 py-3.5 rounded-full bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold text-sm shadow-lg shadow-orange-500/25 hover:scale-105 transition text-center">
              Email Sales Team
            </a>
            <a href="tel:+919650613666"
              class="px-7 py-3.5 rounded-full bg-white border border-stone-200 hover:border-orange-500 text-stone-700 hover:text-stone-900 font-bold text-sm transition text-center">
              Call +91 96506 13666
            </a>
          </div>
        </div>

        <div class="lg:col-span-6 space-y-4">
          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Head Office</div>
            <div class="text-sm font-semibold text-stone-900">364, 10/5 Silicon Town, Electronic City Phase 2, Bangalore 560100</div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Direct Mail</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="mailto:Lebinesh@tracktechsolutions.com" class="hover:text-orange-400 transition">Lebinesh@tracktechsolutions.com</a> • 
              <a href="mailto:sales@tracktechsolutions.com" class="hover:text-orange-400 transition">sales@tracktechsolutions.com</a>
            </div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">Phone Telephony</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="tel:+919650613666" class="hover:text-orange-400 transition">+91 96506 13666</a> / 
              <a href="tel:+919742060606" class="hover:text-orange-400 transition">+91 97420 60606</a>
            </div>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-1">
            <div class="text-[11px] font-mono text-orange-400 font-bold uppercase">LinkedIn Company</div>
            <div class="text-sm font-semibold text-stone-900">
              <a href="https://www.linkedin.com/company/track-tech-solution/" target="_blank" rel="noopener" class="hover:text-orange-400 transition">linkedin.com/company/track-tech-solution</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom Bar -->
      <div class="pt-8 border-t border-stone-200 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
        <div class="flex items-center gap-3">
          <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Logo" class="w-6 h-6 object-contain opacity-70">
          <span>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved. Made in India.</span>
        </div>
        <div class="flex items-center gap-6">
          <a href="#about" class="hover:text-stone-600 transition">Home</a>
          <a href="#products" class="hover:text-stone-600 transition">Products</a>
          <a href="#clients" class="hover:text-stone-600 transition">Clients</a>
          <a href="#leadership" class="hover:text-stone-600 transition">Leadership</a>
          <a href="#contact" class="hover:text-stone-600 transition">Contact</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Floating WhatsApp Quick Button -->
  <a class="fixed bottom-6 right-6 z-50 p-3.5 rounded-full bg-emerald-500 hover:bg-emerald-400 text-stone-900 shadow-xl shadow-emerald-500/30 hover:scale-110 transition-transform flex items-center justify-center"
    href="https://wa.me/919650613666?text=Hello%20Track%20Tech%20Solution%2C%20I%27d%20like%20to%20know%20more%20about%20your%20solutions."
    target="_blank" rel="noopener" aria-label="Chat with Track Tech Solution on WhatsApp">
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M20 4.1A9.9 9.9 0 0 0 12.9 2C7.4 1.5 2.5 5.5 2 11a9.9 9.9 0 0 0 1.4 5.9L2 22l5.2-1.4A10 10 0 1 0 20 4.1Z" />
      <path d="M8.2 7.5c.2-.4.5-.4.8-.4h.6c.2 0 .4.1.5.4l.8 1.8c.1.2.1.4-.1.6l-.6.7c.7 1.3 1.7 2.3 3 3l.7-.6c.2-.2.4-.2.6-.1l1.8.8c.3.1.4.3.4.5v.6c0 .3 0 .6-.4.8-.4.2-1.1.4-1.7.3-1.5-.2-3.1-1-4.5-2.4-1.4-1.4-2.2-3-2.4-4.5-.1-.6.1-1.3.3-1.7Z" fill="#fff" />
    </svg>
  </a>


  <!-- ═══════════════════════════════════════════════════════════════════
       JAVASCRIPT FOR INTERACTIVE STUDIO & MOBILE NAV
  ═══════════════════════════════════════════════════════════════════ -->
  <script>
    // Products suite loaded dynamically
        };
        container.appendChild(btn);
      });
    }

    function updateDisplay() {
      const data = productsData[activeKey];
      if (!data) return;
      document.getElementById('studioProductNumber').innerText = data.number;
      document.getElementById('studioProductTitle').innerText = data.title;
      document.getElementById('studioProductDesc').innerText = data.desc;
      document.getElementById('studioStage1').innerText = data.stage1;
      document.getElementById('studioStage2').innerText = data.stage2;
      document.getElementById('studioStage3').innerText = data.stage3;
      document.getElementById('studioImage').src = data.img;
      document.getElementById('studioUrlMock').innerText = data.url;
    }

    renderTabs();
    updateDisplay();

    // Mobile Drawer Toggle
    const mobileBtn = document.getElementById('mobileNavBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    if (mobileBtn && mobileDrawer) {
      mobileBtn.onclick = () => {
        mobileDrawer.classList.toggle('hidden');
      };
      mobileDrawer.querySelectorAll('a').forEach(a => {
        a.onclick = () => mobileDrawer.classList.add('hidden');
      });
    }

    // Cursor Follower Movement
    const cursor = document.getElementById('cursorGlow');
    if (cursor) {
      window.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
      });
    }
  </script>

</body>

</html>
