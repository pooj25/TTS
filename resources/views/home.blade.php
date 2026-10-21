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
      <div class="hidden md:flex items-center gap-1 xl:gap-3 text-sm md:text-[15px] font-semibold text-stone-700">
        <a href="#about" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">About</a>
        <a href="#products-studio" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Products</a>
        <a href="#leadership" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Leadership</a>
        <a href="#contact" class="px-3.5 py-1.5 xl:px-4 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">Contact</a>
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
    <a href="#products-studio" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-600 border-b border-stone-100">Products Studio</a>
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
          <a href="#products-studio"
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
       5. INTERACTIVE PRODUCTS EXPERIENCE STUDIO
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="products-studio" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto space-y-12">
      
      <div class="text-center space-y-3 max-w-3xl mx-auto">
        <span class="text-xs font-bold uppercase tracking-widest text-orange-400 px-3.5 py-1 rounded-full bg-orange-500/10 border border-orange-500/30 inline-block">
          Interactive Product Studio
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
          The tools your factory team needs, in one place
        </h2>
        <p class="text-stone-500 text-sm sm:text-base">
          Click any product below to preview live software dashboards, operational stages, and factory benefits.
        </p>
      </div>

      <!-- Studio Grid: Left Tabs / Right Display -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Product Selection Pills -->
        <div class="lg:col-span-4 space-y-2" id="productTabContainer">
          <!-- Populated by JavaScript below -->
        </div>

        <!-- Right Interactive Display Card -->
        <div class="lg:col-span-8 glass-card p-6 sm:p-8 border border-stone-200 space-y-6" id="productDisplayCard">
          
          <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-4 border-b border-stone-200">
            <div>
              <span class="text-xs font-mono font-bold text-orange-400 uppercase tracking-widest" id="studioProductNumber">PRODUCT 01 / MES</span>
              <h3 class="text-2xl sm:text-3xl font-bold font-heading text-stone-900 mt-0.5" id="studioProductTitle">TrakWel</h3>
            </div>
            <a href="#contact" class="px-5 py-2 rounded-full bg-orange-500/20 hover:bg-orange-500/30 border border-orange-500/40 text-orange-600 font-bold text-xs transition flex items-center gap-2 self-start sm:self-auto">
              <span>Book Solution Walkthrough</span>
              <span>→</span>
            </a>
          </div>

          <p class="text-sm text-stone-600 leading-relaxed" id="studioProductDesc">
            Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.
          </p>

          <!-- 3 Stages Workflow -->
          <div class="grid grid-cols-3 gap-3">
            <div class="p-3 rounded-xl bg-white/90 border border-stone-100 text-center">
              <span class="text-[10px] font-mono text-slate-500 font-bold block">STAGE 01</span>
              <span class="text-xs font-bold text-stone-700 mt-1 block" id="studioStage1">Track</span>
            </div>
            <div class="p-3 rounded-xl bg-white/90 border border-stone-100 text-center">
              <span class="text-[10px] font-mono text-slate-500 font-bold block">STAGE 02</span>
              <span class="text-xs font-bold text-stone-700 mt-1 block" id="studioStage2">Monitor</span>
            </div>
            <div class="p-3 rounded-xl bg-white/90 border border-stone-100 text-center">
              <span class="text-[10px] font-mono text-slate-500 font-bold block">STAGE 03</span>
              <span class="text-xs font-bold text-stone-700 mt-1 block" id="studioStage3">Improve</span>
            </div>
          </div>

          <!-- Software Screenshot Device Preview -->
          <div class="rounded-2xl overflow-hidden border border-stone-200 bg-orange-50 shadow-2xl relative group">
            <div class="bg-white px-4 py-2 border-b border-stone-100 flex items-center justify-between text-xs">
              <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                <span class="ml-2 font-mono text-[10px] text-stone-500" id="studioUrlMock">track-tech.live/apps/trakwel</span>
              </div>
              <span class="text-[10px] font-mono text-orange-400" id="studioStatusMock">LIVE DASHBOARD</span>
            </div>
            <div class="relative max-h-96 overflow-hidden">
              <img id="studioImage" src="{{ asset('assets/img/production-tracking.jpg') }}" alt="Track Tech Software Interface" class="w-full object-cover object-top transition-transform duration-500 group-hover:scale-[1.02]">
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent pointer-events-none"></div>
            </div>
          </div>

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
          <a href="#products-studio" class="hover:text-stone-600 transition">Products</a>
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
    const productsData = {
      trakwel: {
        number: 'PRODUCT 01 / MES',
        title: 'TrakWel',
        desc: 'Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.',
        stage1: 'Track', stage2: 'Monitor', stage3: 'Improve',
        img: "{{ asset('assets/img/production-tracking.jpg') }}",
        url: 'track-tech.live/apps/trakwel'
      },
      'fabric-inventory': {
        number: 'PRODUCT 02 / WAREHOUSE',
        title: 'Fabric Inventory Management',
        desc: 'Barcode-driven roll allocation, shade grouping, shrinkage matching, and zero-loss fabric storage from receiving to spreading.',
        stage1: 'Receive', stage2: 'Inspect', stage3: 'Allocate',
        img: "{{ asset('assets/img/fabric-inventory-management.png') }}",
        url: 'track-tech.live/apps/fabric-inventory'
      },
      'cutting-digitalization': {
        number: 'PRODUCT 03 / CAD & CUT',
        title: 'Cutting Room Digitalization',
        desc: 'Digital marker planning, fabric roll optimization, and automated ply-count tracking to eliminate fabric scrap before sewing.',
        stage1: 'Plan', stage2: 'Spread', stage3: 'Cut',
        img: "{{ asset('assets/img/cutting-room-digitalization.png') }}",
        url: 'track-tech.live/apps/cutting-room'
      },
      'tracking': {
        number: 'PRODUCT 04 / WIP',
        title: 'Production Tracking',
        desc: 'Real-time bundle tracking across sewing lines with real-time WIP updates, operator efficiency metrics, and line balancing.',
        stage1: 'Bundle', stage2: 'Sew', stage3: 'Assemble',
        img: "{{ asset('assets/img/product-tracking.png') }}",
        url: 'track-tech.live/apps/production-tracking'
      },
      'quality': {
        number: 'PRODUCT 05 / QC AI',
        title: 'Quality Control',
        desc: 'Inline and end-line inspection with automated AQL reports, defect heatmaps, and repair loop tracking for zero garment rework.',
        stage1: 'Inspect', stage2: 'Score', stage3: 'Certify',
        img: "{{ asset('assets/img/quality-control.png') }}",
        url: 'track-tech.live/apps/quality-control'
      },
      'planwel': {
        number: 'PRODUCT 06 / APS',
        title: 'PlanWel',
        desc: 'Advanced Planning & Scheduling (APS) for fast-react multi-line scheduling, SAM variance management, and milestone forecasting.',
        stage1: 'Schedule', stage2: 'Balance', stage3: 'Deliver',
        img: "{{ asset('assets/img/planwel.png') }}",
        url: 'track-tech.live/apps/planwel'
      },
      'mtrak': {
        number: 'PRODUCT 07 / IOT',
        title: 'mTrak',
        desc: 'Predictive maintenance and machine uptime monitoring with vibration sensors, temperature telemetry, and QR mechanic dispatch.',
        stage1: 'Monitor', stage2: 'Alert', stage3: 'Maintain',
        img: "{{ asset('assets/img/mTrak.png') }}",
        url: 'track-tech.live/apps/mtrak'
      },
      'sewiot': {
        number: 'PRODUCT 08 / SENSORS',
        title: 'SewIoT',
        desc: 'Smart IoT sensors for sewing machines that monitor needle run-time, stitches-per-minute, and provide operator pace scorecards.',
        stage1: 'Sense', stage2: 'Pace', stage3: 'Excel',
        img: "{{ asset('assets/img/sew-IoT.png') }}",
        url: 'track-tech.live/apps/sewiot'
      },
      'laundry': {
        number: 'PRODUCT 09 / INDUSTRY',
        title: 'Laundry Management',
        desc: 'Specialized industrial garment washing, recipe management, chemical dosage monitoring, and batch process control.',
        stage1: 'Load', stage2: 'Process', stage3: 'Dispatch',
        img: "{{ asset('assets/img/laundry-management.png') }}",
        url: 'track-tech.live/apps/laundry'
      },
      'jig': {
        number: 'PRODUCT 10 / PRECISION',
        title: 'Jig Management',
        desc: 'Precision template and jig life tracking, usage limits, and maintenance calibration for complex seam stitching.',
        stage1: 'Calibrate', stage2: 'Track', stage3: 'Renew',
        img: "{{ asset('assets/img/Jig-management.png') }}",
        url: 'track-tech.live/apps/jig-management'
      },
      'shrinkage': {
        number: 'PRODUCT 11 / LAB',
        title: 'Shrinkage Testing App',
        desc: 'Digital fabric shrinkage testing, wash relaxation ratios, and shade grouping for precision pattern adjustments.',
        stage1: 'Test', stage2: 'Analyze', stage3: 'Adjust',
        img: "{{ asset('assets/img/shrinkage-testing-app.png') }}",
        url: 'track-tech.live/apps/shrinkage'
      }
    };

    const container = document.getElementById('productTabContainer');
    let activeKey = 'trakwel';

    function renderTabs() {
      container.innerHTML = '';
      Object.keys(productsData).forEach(key => {
        const item = productsData[key];
        const isActive = key === activeKey;
        const btn = document.createElement('button');
        btn.className = `w-full text-left p-3.5 rounded-2xl transition-all flex items-center justify-between text-xs font-semibold cursor-pointer ${
          isActive 
            ? 'bg-orange-500/20 border border-orange-500/50 text-stone-900 shadow-lg shadow-orange-500/15' 
            : 'bg-white/60 border border-stone-100 text-stone-500 hover:bg-orange-50/80 hover:text-stone-700'
        }`;
        btn.innerHTML = `
          <div class="flex items-center gap-3">
            <span class="w-2 h-2 rounded-full ${isActive ? 'bg-orange-400 shadow-sm shadow-sky-400' : 'bg-slate-600'}"></span>
            <span>${item.title}</span>
          </div>
          <span class="text-[10px] font-mono opacity-60">${item.number.split(' ')[0]}</span>
        `;
        btn.onclick = () => {
          activeKey = key;
          renderTabs();
          updateDisplay();
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
