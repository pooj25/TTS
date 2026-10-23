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
      <div class="hidden md:flex items-center gap-1 xl:gap-2 text-sm md:text-[17px] font-semibold text-stone-700">
        <a href="#about" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition">About</a>

        <!-- Products Dropdown Menu -->
        <div class="relative group">
          <a href="#products" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-600 hover:bg-orange-50 transition flex items-center gap-1.5 cursor-pointer">
            <span>Products</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-orange-600 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <!-- Dropdown Popup -->
          <div class="absolute left-0 top-full pt-2 w-80 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">
            <div class="bg-white/95 backdrop-blur-md rounded-2xl border border-stone-200 shadow-2xl p-3 space-y-1">
              <div class="text-[11px] font-bold uppercase tracking-wider text-teal-700 px-3 py-1 bg-teal-50 rounded-lg">TrakWel Suite</div>
              <a href="#products" onclick="navigateToProduct('trakwel')" class="block px-3 py-2 rounded-xl text-sm font-bold text-stone-800 hover:bg-teal-50 hover:text-teal-700 transition">TrakWel (MES)</a>
              <a href="#products" onclick="navigateToProduct('fabric-inventory')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Fabric Inventory Management</a>
              <a href="#products" onclick="navigateToProduct('cutting-room')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Cutting Room Digitization</a>
              <a href="#products" onclick="navigateToProduct('production-tracking')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Real-Time Production Tracking</a>
              <a href="#products" onclick="navigateToProduct('quality-management')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Quality Management System</a>
              <div class="pt-2 border-t border-stone-100">
                <a href="#products" onclick="navigateToProduct('planwel')" class="block px-3 py-2 rounded-xl text-sm font-bold text-stone-800 hover:bg-teal-50 hover:text-teal-700 transition">PlanWel</a>
                <a href="#products" onclick="navigateToProduct('mtrak')" class="block px-3 py-2 rounded-xl text-sm font-bold text-stone-800 hover:bg-teal-50 hover:text-teal-700 transition">mTrak</a>
                <a href="#products" onclick="navigateToProduct('sewiot')" class="block px-3 py-2 rounded-xl text-sm font-bold text-stone-800 hover:bg-teal-50 hover:text-teal-700 transition">SewIoT</a>
              </div>
              <div class="pt-2 border-t border-stone-100">
                <div class="text-[11px] font-bold uppercase tracking-wider text-teal-700 px-3 py-1 bg-teal-50 rounded-lg">Industry Solutions</div>
                <a href="#products" onclick="navigateToProduct('laundry')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Laundry Management</a>
                <a href="#products" onclick="navigateToProduct('jig')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Jig Management</a>
                <a href="#products" onclick="navigateToProduct('shrinkage')" class="block px-3 py-1.5 rounded-xl text-xs font-semibold text-stone-600 hover:bg-teal-50 hover:text-teal-700 transition pl-5">Shrinkage Testing App</a>
              </div>
            </div>
          </div>
        </div>

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

        <p class="text-lg sm:text-2xl text-stone-600 leading-relaxed max-w-2xl mx-auto">
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

          <p class="text-stone-600 text-base sm:text-lg leading-relaxed">
            Track Tech Solutions builds practical digital tools for apparel manufacturing. The platform connects production, quality, planning, materials and factory-floor teams, helping people see what is happening and act while there is still time to improve the outcome.
          </p>
          <p class="text-stone-600 text-base sm:text-lg leading-relaxed">
            Since 2019, the team has focused on bringing useful technology closer to everyday factory work, supporting implementation across more than 74 factories in two countries.
          </p>

          <div class="pt-2 flex items-center gap-6 text-xs font-semibold text-stone-500">
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-orange-400"></span> 2 Global Countries
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-emerald-400"></span> 36 Tech Specialists
            </div>
            <div class="flex items-center gap-2">
              <span class="w-2 h-2 rounded-full bg-indigo-400"></span> 74+ Factories
            </div>
          </div>
        </div>

        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">01. Floor MES</div>
            <p class="text-sm text-stone-500 leading-relaxed">Bundle RFID tracking, cutting-to-pack pipelines, and live operator scorecards.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">02. Dynamic Gantt</div>
            <p class="text-sm text-stone-500 leading-relaxed">Fast-react multi-line scheduling, SAM variance management, and milestone forecasting.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">03. Machine IoT</div>
            <p class="text-sm text-stone-500 leading-relaxed">RPM telemetry, vibration sensors, predictive motor alerts, and QR mechanic dispatch.</p>
          </div>

          <div class="p-5 rounded-2xl bg-white/80 border border-stone-100 space-y-2 hover:border-orange-500/40 transition">
            <div class="text-orange-400 font-heading font-bold text-lg">04. Quality AI</div>
            <p class="text-sm text-stone-500 leading-relaxed">Inline stitch defect heatmaps, zero-scrap fabric markers, and automated AQL 1.5 audits.</p>
          </div>
        </div>

      </div>
    </div>
  </section>


    <!-- ═══════════════════════════════════════════════════════════════════
       5. COMPREHENSIVE SOFTWARE SUITE (From website-tts.vercel.app)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="products" class="relative py-20 px-4 sm:px-6 lg:px-8 z-10">
    <span id="products-studio" class="absolute -top-10"></span>
    <div class="max-w-7xl mx-auto space-y-10">

      <!-- Section Header -->
      <div class="text-center space-y-4 max-w-3xl mx-auto">
        <span class="text-xs font-semibold uppercase tracking-widest text-orange-600 px-4 py-1.5 rounded-full bg-orange-50 border border-orange-200 inline-block font-sans shadow-sm">
          Comprehensive Software Suite
        </span>
        <h2 class="text-3xl sm:text-5xl font-bold text-stone-900 font-heading tracking-tight leading-tight">
          Designed for <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-500 italic">Smart Garment Factories</span>
        </h2>
      </div>

      <!-- Products: Sidebar Accordion + Detail Panel -->
      <div class="flex flex-col lg:flex-row gap-6 lg:gap-8 items-start">

        <!-- LEFT: Accordion Sidebar -->
        <div class="w-full lg:w-72 xl:w-80 flex-shrink-0 bg-white/95 glass-card rounded-2xl border border-stone-200 overflow-hidden shadow-sm" id="prod-sidebar">

          <!-- TrakWel group: Single unified row with chevron (Expanded by default) -->
          <div>
            <button onclick="handleGroupClick('trakwel')" id="btn-trakwel" class="prod-item w-full flex items-center justify-between px-5 py-4 font-bold text-base transition border-b border-stone-200 active-prod">
              <span>TrakWel</span>
              <svg id="grp-trakwel-icon" class="w-4 h-4 transition-transform duration-200 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <!-- Dropdown sub-items (visible by default) -->
            <div id="grp-trakwel" class="divide-y divide-stone-100 bg-white">
              <button onclick="selectProduct('fabric-inventory')" id="btn-fabric-inventory" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Fabric Inventory Management</button>
              <button onclick="selectProduct('cutting-room')" id="btn-cutting-room" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Cutting Room Digitization</button>
              <button onclick="selectProduct('production-tracking')" id="btn-production-tracking" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Real-Time Production Tracking</button>
              <button onclick="selectProduct('quality-management')" id="btn-quality-management" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Quality Management System</button>
            </div>
          </div>

          <!-- PlanWel -->
          <div class="border-t border-stone-200">
            <button onclick="selectProduct('planwel')" id="btn-planwel" class="prod-item w-full flex items-center justify-between px-5 py-4 font-bold text-base text-stone-700 hover:bg-teal-50 hover:text-teal-700 transition">
              <span>PlanWel</span>
            </button>
          </div>

          <!-- mTrak -->
          <div class="border-t border-stone-200">
            <button onclick="selectProduct('mtrak')" id="btn-mtrak" class="prod-item w-full flex items-center justify-between px-5 py-4 font-bold text-base text-stone-700 hover:bg-teal-50 hover:text-teal-700 transition">
              <span>mTrak</span>
            </button>
          </div>

          <!-- SewIoT -->
          <div class="border-t border-stone-200">
            <button onclick="selectProduct('sewiot')" id="btn-sewiot" class="prod-item w-full flex items-center justify-between px-5 py-4 font-bold text-base text-stone-700 hover:bg-teal-50 hover:text-teal-700 transition">
              <span>SewIoT</span>
            </button>
          </div>

          <!-- Industry Solutions group -->
          <div class="border-t border-stone-200">
            <button onclick="handleGroupClick('industry')" id="btn-industry" class="prod-item w-full flex items-center justify-between px-5 py-4 font-bold text-base text-stone-800 hover:bg-teal-50 hover:text-teal-700 transition">
              <span>Industry Solutions</span>
              <svg id="grp-industry-icon" class="w-4 h-4 transition-transform duration-200 rotate-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <!-- Dropdown sub-items (hidden by default) -->
            <div id="grp-industry" class="divide-y divide-stone-100 hidden bg-white">
              <button onclick="selectProduct('laundry')" id="btn-laundry" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Laundry Management</button>
              <button onclick="selectProduct('jig')" id="btn-jig" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Jig Management</button>
              <button onclick="selectProduct('shrinkage')" id="btn-shrinkage" class="prod-item w-full text-left px-7 py-3.5 text-sm font-semibold text-stone-700 hover:bg-teal-50/70 hover:text-teal-700 transition">Shrinkage Testing App</button>
            </div>
          </div>

        </div>
        <!-- RIGHT: Product Detail Panel -->
        <div class="flex-1 glass-card rounded-2xl border border-stone-200 overflow-hidden shadow-sm min-h-[380px]" id="prod-detail">

          <!-- trakwel (default visible) -->
          <div id="panel-trakwel" class="prod-panel flex flex-col md:flex-row">
            <!-- Left: text -->
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">TrakWel</h2>
              <p class="text-base text-stone-700 leading-relaxed">Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <!-- Center: image -->
            <div class="md:w-2/5 h-56 md:h-auto overflow-hidden">
              <img src="{{ asset('images/sew-IoT.png') }}" alt="TrakWel IoT Device" class="w-full h-full object-cover">
            </div>
            <!-- Right: dark dashboard -->
            <div class="md:w-64 bg-[#0f2033] text-white flex flex-col justify-center p-6 space-y-5">
              <div class="grid grid-cols-2 gap-3">
                <div class="bg-white/10 rounded-xl p-3 space-y-1">
                  <div class="text-[10px] font-bold uppercase tracking-widest text-teal-400">Output</div>
                  <div class="text-3xl font-extrabold text-white">842</div>
                  <div class="text-xs text-stone-400">pieces today</div>
                </div>
                <div class="bg-white/10 rounded-xl p-3 space-y-1">
                  <div class="text-[10px] font-bold uppercase tracking-widest text-teal-400">Efficiency</div>
                  <div class="text-3xl font-extrabold text-white">92%</div>
                  <div class="text-xs text-stone-400">on target</div>
                </div>
              </div>
              <div class="space-y-2">
                <div class="flex justify-between text-xs font-semibold">
                  <span class="text-stone-400">ORDER 4821</span>
                  <span class="text-teal-400">78%</span>
                </div>
                <div class="w-full bg-white/10 rounded-full h-2">
                  <div class="bg-teal-400 h-2 rounded-full" style="width:78%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- fabric-inventory -->
          <div id="panel-fabric-inventory" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Fabric Inventory<br>Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">Digitise fabric inspection and inventory management with Inspection 4.0 and automatic grouping by shade, width and shrinkage. Gain real-time visibility into stock levels and material consumption, improve fabric traceability and ensure better inventory control.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/fabric-inventory-management.png') }}" alt="Fabric Inventory Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- cutting-room -->
          <div id="panel-cutting-room" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Cutting Room<br>Digitization</h2>
              <p class="text-base text-stone-700 leading-relaxed">Digitise cut planning, optimize end-bit utilization and streamline fabric reconciliation. Improve cutting-room efficiency, reduce fabric wastage and gain better visibility and control over material usage and cutting operations.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/cutting-room-digitalization.png') }}" alt="Cutting Room Digitization" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- production-tracking -->
          <div id="panel-production-tracking" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Real-Time Production<br>Tracking</h2>
              <p class="text-base text-stone-700 leading-relaxed">Track real time production, monitor efficiency and performance in real time, and compare planned versus actual output. Gain actionable insights into production progress, identify bottlenecks early and improve operational control.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/product-tracking.png') }}" alt="Real-Time Production Tracking" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- quality-management -->
          <div id="panel-quality-management" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Quality Management<br>System</h2>
              <p class="text-base text-stone-700 leading-relaxed">Monitor defect rates, track rework levels and identify recurring quality issues in real time. Gain actionable insights into defect trends, improve quality control and drive continuous improvement across production.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/quality-control.png') }}" alt="Quality Management System" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- planwel -->
          <div id="panel-planwel" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">PlanWel</h2>
              <p class="text-base text-stone-700 leading-relaxed">Intelligent production planning and scheduling for apparel factories. Schedule customer orders against exact line capacities, section skills, and delivery deadlines with an intuitive digital planner and smart Gantt views.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/planwel.png') }}" alt="PlanWel" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- mtrak -->
          <div id="panel-mtrak" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">mTrak</h2>
              <p class="text-base text-stone-700 leading-relaxed">Mobile-first tracking solution for real-time shop-floor data collection. Enable operators and supervisors to update production, quality and attendance data from any device on the factory floor.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/mTrak.png') }}" alt="mTrak" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- sewiot -->
          <div id="panel-sewiot" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">SewIoT</h2>
              <p class="text-base text-stone-700 leading-relaxed">Industrial IoT solution connecting sewing machines to the digital factory. Monitor RPM, stitch count, downtime and machine health in real time to maximise overall equipment effectiveness (OEE) and prevent unplanned breakdowns.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/sew-IoT.png') }}" alt="SewIoT" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- laundry -->
          <div id="panel-laundry" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Laundry<br>Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">End-to-end digital laundry management for garment factories. Track lot-wise processing, monitor recipe compliance, record chemical usage and ensure on-time delivery with full traceability across wash cycles.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/laundry-management.png') }}" alt="Laundry Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- jig -->
          <div id="panel-jig" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Jig<br>Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">Digitise jig tracking and management across your factory. Monitor jig allocation, usage, condition and maintenance schedules to reduce downtime, prevent losses and ensure production continuity.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/Jig-management.png') }}" alt="Jig Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- shrinkage -->
          <div id="panel-shrinkage" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-stone-900 font-heading leading-tight">Shrinkage<br>Testing App</h2>
              <p class="text-base text-stone-700 leading-relaxed">Automate fabric shrinkage testing and recording. Capture pre- and post-wash measurements, calculate shrinkage percentages and maintain a digital log of test results to ensure fabric compliance and reduce rejection rates.</p>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/shrinkage-testing-app.png') }}" alt="Shrinkage Testing App" class="w-full h-full object-cover">
            </div>

          <!-- industry solutions overview panel -->
          <div id="panel-industry" class="prod-panel hidden flex-col md:flex-row">
            <div class="flex-1 p-8 md:p-10 flex flex-col justify-center space-y-5 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Industry Solutions</h2>
              <p class="text-base text-stone-700 leading-relaxed">Specialized shop-floor applications tailored for apparel manufacturers. From Laundry Management to Jig tracking and Shrinkage testing, digitise every specialised corner of your manufacturing workflow.</p>
              <div class="flex flex-wrap gap-2 pt-2">
                <button onclick="selectProduct('laundry')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Laundry Management →</button>
                <button onclick="selectProduct('jig')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Jig Management →</button>
                <button onclick="selectProduct('shrinkage')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Shrinkage Testing App →</button>
              </div>
              <a href="mailto:sales@tracktechsolutions.com" class="inline-block w-fit px-7 py-3 rounded-lg bg-teal-500 hover:bg-teal-600 text-white font-bold text-sm transition shadow mt-3">Talk to our team</a>
            </div>
            <div class="md:w-1/2 h-56 md:h-auto">
              <img src="{{ asset('images/laundry-management.png') }}" alt="Industry Solutions" class="w-full h-full object-cover">
            </div>
          </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <script>
    function handleGroupClick(group) {
      var el = document.getElementById('grp-' + group);
      var icon = document.getElementById('grp-' + group + '-icon');
      
      if (el) {
        if (el.classList.contains('hidden')) {
          el.classList.remove('hidden');
          if (icon) {
            icon.classList.add('rotate-180');
            icon.classList.remove('rotate-0');
          }
        } else {
          el.classList.add('hidden');
          if (icon) {
            icon.classList.remove('rotate-180');
            icon.classList.add('rotate-0');
          }
        }
      }
      selectProduct(group);
    }

    function selectProduct(key) {
      // Hide all panels
      document.querySelectorAll('.prod-panel').forEach(function(p) { 
        p.classList.add('hidden'); 
        p.classList.remove('flex'); 
      });

      // Remove active classes from all buttons
      document.querySelectorAll('.prod-item').forEach(function(b) {
        b.classList.remove('active-prod', 'active-subprod');
      });

      // Auto-open parent group if subproduct is clicked
      var trakwelSubs = ['fabric-inventory', 'cutting-room', 'production-tracking', 'quality-management'];
      var industrySubs = ['laundry', 'jig', 'shrinkage'];

      if (trakwelSubs.indexOf(key) !== -1) {
        var trakwelEl = document.getElementById('grp-trakwel');
        var trakwelIcon = document.getElementById('grp-trakwel-icon');
        if (trakwelEl && trakwelEl.classList.contains('hidden')) {
          trakwelEl.classList.remove('hidden');
          if (trakwelIcon) {
            trakwelIcon.classList.add('rotate-180');
            trakwelIcon.classList.remove('rotate-0');
          }
        }
      }

      if (industrySubs.indexOf(key) !== -1) {
        var indEl = document.getElementById('grp-industry');
        var indIcon = document.getElementById('grp-industry-icon');
        if (indEl && indEl.classList.contains('hidden')) {
          indEl.classList.remove('hidden');
          if (indIcon) {
            indIcon.classList.add('rotate-180');
            indIcon.classList.remove('rotate-0');
          }
        }
      }

      // Show selected panel
      var panel = document.getElementById('panel-' + key);
      if (panel) { 
        panel.classList.remove('hidden'); 
        panel.classList.add('flex'); 
      }

      // Highlight active button
      var btn = document.getElementById('btn-' + key);
      if (btn) {
        if (trakwelSubs.indexOf(key) !== -1 || industrySubs.indexOf(key) !== -1) {
          btn.classList.add('active-subprod');
        } else {
          btn.classList.add('active-prod');
        }
      }
    }

    function navigateToProduct(key) {
      selectProduct(key);
      var sec = document.getElementById('products');
      if (sec) {
        sec.scrollIntoView({ behavior: 'smooth' });
      }
    }
  </script>
  <style>
    .active-prod { 
      background-color: #d9fbf1 !important; 
      color: #0d8070 !important; 
      font-weight: 700 !important; 
    }
    .active-subprod { 
      background-color: #e6faf5 !important; 
      color: #0d8070 !important; 
      font-weight: 700 !important; 
      border-left: 4px solid #0d9488 !important; 
    }
  </style>




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
          <text x="100" y="72" fill="#17191c" font-family="Arial,sans-serif" font-size="11" font-weight="700" text-anchor="middle">MODELAMA EXPORTS</text>
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

      <!-- Stable Company Facts & Metrics Bar -->
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
        <div class="glass-card p-8 flex flex-col justify-between space-y-5">
          <div class="space-y-5">
            <img src="{{ asset('images/gopinath.png') }}" alt="Gopinath Muniraj" class="w-24 h-28 rounded-2xl object-cover object-top shadow-md border-2 border-orange-100">
            <div>
              <span class="text-xs font-bold uppercase tracking-widest text-orange-500 block mb-1">Founder &amp; Chief Executive Officer (CEO)</span>
              <h3 class="text-3xl font-extrabold font-heading text-stone-900 leading-tight">Gopinath Muniraj</h3>
            </div>
            <p class="text-base text-stone-700 leading-relaxed">
              Gopinath Muniraj is a technology entrepreneur and innovator with over two decades of experience addressing challenges in apparel manufacturing. Having worked closely with factories across South India, he brings deep industry understanding and a vision for technology-driven transformation.
            </p>
            <p class="text-base text-stone-700 leading-relaxed">
              As Founder and CEO of Track Tech Solution, he leads the development of intelligent digital solutions that help apparel manufacturers streamline operations, leverage data and improve productivity through automation, AI and Industrial IoT. His vision is to empower factory teams, enable data-driven decisions and build smarter, more efficient and connected manufacturing environments.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener" class="text-sm font-bold text-orange-500 hover:text-orange-700 transition flex items-center gap-1.5">
              <span>Professional Profile</span>
              <span>&#8599;</span>
            </a>
          </div>
        </div>

        <!-- Lebinesh Balan -->
        <div class="glass-card p-8 flex flex-col justify-between space-y-5">
          <div class="space-y-5">
            <img src="{{ asset('images/lebinesh.png') }}" alt="Lebinesh Balan" class="w-24 h-28 rounded-2xl object-cover object-top shadow-md border-2 border-amber-100">
            <div>
              <span class="text-xs font-bold uppercase tracking-widest text-orange-500 block mb-1">Co-Founder &amp; Chief Operating Officer (COO)</span>
              <h3 class="text-3xl font-extrabold font-heading text-stone-900 leading-tight">Lebinesh Balan</h3>
            </div>
            <p class="text-base text-stone-700 leading-relaxed">
              With close to two decades of experience in digital transformation, particularly in apparel manufacturing, Lebinesh Balan leads business strategy, sales, operations, and commercial growth. He helps apparel manufacturers embrace digital technologies to digitise shop-floor operations, optimise production planning, and enhance productivity and operational visibility.
            </p>
            <p class="text-base text-stone-700 leading-relaxed">
              Combining deep industry understanding with strategic leadership, he bridges the gap between manufacturing challenges and technology innovation to deliver measurable business outcomes, build lasting customer partnerships, and drive sustainable growth.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener" class="text-sm font-bold text-orange-500 hover:text-orange-700 transition flex items-center gap-1.5">
              <span>LinkedIn Profile</span>
              <span>&#8599;</span>
            </a>
          </div>
        </div>

        <!-- Deepak Rajkumar -->
        <div class="glass-card p-8 flex flex-col justify-between space-y-5">
          <div class="space-y-5">
            <img src="{{ asset('images/deepak.png') }}" alt="Deepak Rajkumar" class="w-24 h-28 rounded-2xl object-cover object-top shadow-md border-2 border-red-100">
            <div>
              <span class="text-xs font-bold uppercase tracking-widest text-orange-500 block mb-1">Co-Founder &amp; Chief Technology Officer (CTO)</span>
              <h3 class="text-3xl font-extrabold font-heading text-stone-900 leading-tight">Deepak Rajkumar</h3>
            </div>
            <p class="text-base text-stone-700 leading-relaxed">
              Deepak is a technology leader with extensive experience in apparel manufacturing and software development. At Track Tech Solution, he leads technology strategy, product engineering and digital transformation, building scalable solutions that address complex manufacturing challenges.
            </p>
            <p class="text-base text-stone-700 leading-relaxed">
              His expertise spans software architecture, production tracking, fabric inventory management, cutting-room digitisation, AI and Industrial IoT. Passionate about innovation, he focuses on connecting traditional manufacturing processes with intelligent, data-driven factory ecosystems to improve operational efficiency, visibility and business performance.
            </p>
          </div>
          <div class="pt-4 border-t border-stone-200">
            <span class="text-sm font-semibold text-stone-500">Software Architecture &amp; IoT</span>
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
          <span class="text-xs font-bold uppercase tracking-widest text-orange-400">Let's Talk</span>
          <h2 class="text-3xl sm:text-5xl font-bold font-heading text-stone-900 tracking-tight">
            Make Your Factory Smarter with Track Tech Solution
          </h2>
          <p class="text-stone-600 text-base sm:text-lg leading-relaxed">
            Discover how our integrated digital solutions for shop-floor monitoring, cutting room management, production planning, Time and Action (T&A) and machine maintenance can help you improve efficiency, enhance visibility, and drive operational excellence.<br><br>
            Let's discuss your challenges and find the right solution for your factory.
          </p>

          <div class="pt-2 flex flex-col sm:flex-row gap-4">
            <a href="mailto:sales@tracktechsolutions.com"
              class="px-8 py-3.5 rounded-full bg-gradient-to-r from-orange-500 to-red-600 text-white font-bold text-sm shadow-lg shadow-orange-500/25 hover:scale-105 transition text-center">
              Talk to Sales
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
              <a href="mailto:Lebinesh@tracktechsolutions.com" class="hover:text-orange-400 transition">Lebinesh@tracktechsolutions.com</a>
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
