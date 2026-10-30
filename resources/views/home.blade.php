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
  <div class="absolute top-5 left-0 right-0 z-50 flex justify-center px-4">
    <nav class="floating-nav w-full max-w-6xl rounded-full px-4 sm:px-6 py-3 flex items-center justify-between">
      
      <!-- Brand Logo -->
      <a href="#about" class="flex items-center gap-2.5 group py-0.5">
        <img src="{{ asset('images/track-tech-full-logo.png') }}" alt="Track Tech Solution Logo" class="h-10 sm:h-12 w-auto object-contain transition-transform group-hover:scale-105">
      </a>

      <!-- Desktop Nav Items -->
      <div class="hidden md:flex items-center gap-1 xl:gap-2 text-sm md:text-[17px] font-semibold text-stone-700">
        <a href="#about" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-500 hover:bg-orange-50 transition">About</a>
        <a href="#leadership" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-500 hover:bg-orange-50 transition">Leadership Team</a>

        <!-- Products Dropdown Menu -->
        <div class="relative group">
          <a href="#products" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-500 hover:bg-orange-50 transition flex items-center gap-1.5 cursor-pointer">
            <span>Products</span>
            <svg class="w-3.5 h-3.5 text-stone-500 group-hover:text-orange-500 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <!-- Dropdown Popup (matching 2nd screenshot exactly) -->
          <div class="absolute left-0 top-full pt-2 w-72 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">
            <div class="bg-white rounded-2xl border border-stone-200 shadow-2xl overflow-hidden border-t-4 border-t-orange-500">
              
              <!-- TrakWel with expandable sub-items -->
              <div class="border-b border-stone-100 group/trak">
                <div class="flex items-center justify-between px-5 py-3.5 cursor-pointer hover:bg-orange-50 hover:text-orange-600 transition border-l-4 border-transparent hover:border-l-orange-500"
                     onclick="navigateToProduct('trakwel')">
                  <span class="text-[17px] font-bold text-stone-800 group-hover/trak:text-orange-600">TrakWel</span>
                  <button type="button" onclick="event.stopPropagation(); toggleDropdownSub('trakwelSub', 'trakwelArrow')" class="p-1 text-stone-400 hover:text-orange-600">
                    <svg id="trakwelArrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                  </button>
                </div>
                <!-- Submenu -->
                <div id="trakwelSub" class="hidden bg-stone-50/80 py-1 px-3 space-y-0.5 border-t border-stone-100">
                  <a href="#products" onclick="navigateToProduct('fabric-inventory')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Fabric Inventory Management</a>
                  <a href="#products" onclick="navigateToProduct('cutting-room')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Cutting Room Digitization</a>
                  <a href="#products" onclick="navigateToProduct('production-tracking')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Real-Time Production Tracking</a>
                  <a href="#products" onclick="navigateToProduct('quality-management')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Quality Management System</a>
                </div>
              </div>

              <!-- PlanWel -->
              <div class="border-b border-stone-100">
                <a href="#products" onclick="navigateToProduct('planwel')" 
                   class="block px-5 py-3.5 text-[17px] font-bold text-stone-800 hover:bg-orange-50 hover:text-orange-600 transition border-l-4 border-transparent hover:border-l-orange-500">
                  PlanWel
                </a>
              </div>

              <!-- mTrak -->
              <div class="border-b border-stone-100">
                <a href="#products" onclick="navigateToProduct('mtrak')" 
                   class="block px-5 py-3.5 text-[17px] font-bold text-stone-800 hover:bg-orange-50 hover:text-orange-600 transition border-l-4 border-transparent hover:border-l-orange-500">
                  mTrak
                </a>
              </div>

              <!-- SewIoT -->
              <div class="border-b border-stone-100">
                <a href="#products" onclick="navigateToProduct('sewiot')" 
                   class="block px-5 py-3.5 text-[17px] font-bold text-stone-800 hover:bg-orange-50 hover:text-orange-600 transition border-l-4 border-transparent hover:border-l-orange-500">
                  SewIoT
                </a>
              </div>

              <!-- Industry Solutions with expandable sub-items -->
              <div class="group/ind">
                <div class="flex items-center justify-between px-5 py-3.5 cursor-pointer hover:bg-orange-50 hover:text-orange-600 transition border-l-4 border-transparent hover:border-l-orange-500"
                     onclick="navigateToProduct('industry')">
                  <span class="text-[17px] font-bold text-stone-800 group-hover/ind:text-orange-600">Industry Solutions</span>
                  <button type="button" onclick="event.stopPropagation(); toggleDropdownSub('indSub', 'indArrow')" class="p-1 text-stone-400 hover:text-orange-600">
                    <svg id="indArrow" class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                  </button>
                </div>
                <!-- Submenu -->
                <div id="indSub" class="hidden bg-stone-50/80 py-1 px-3 space-y-0.5 border-t border-stone-100">
                  <a href="#products" onclick="navigateToProduct('laundry')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Laundry Management</a>
                  <a href="#products" onclick="navigateToProduct('jig')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Jig Management</a>
                  <a href="#products" onclick="navigateToProduct('shrinkage')" class="block px-3 py-2 rounded-lg text-xs font-semibold text-stone-600 hover:bg-orange-50 hover:text-orange-600 transition">Shrinkage Testing App</a>
                </div>
              </div>

            </div>
          </div>
        </div>

        <a href="#clients" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-500 hover:bg-orange-50 transition">Clients</a>
        <a href="#contact" class="px-3 py-1.5 xl:px-3.5 xl:py-2 rounded-full hover:text-orange-500 hover:bg-orange-50 transition">Contact</a>
      </div>

      <!-- Action Button -->
      <div class="flex items-center gap-2">
        <a href="#contact"
          class="bg-orange-500 hover:bg-orange-600 text-white text-sm sm:text-[15px] font-bold px-6 py-2.5 sm:py-3 rounded-2xl shadow-md shadow-orange-500/25 hover:scale-105 transition-all">
          Request for Demo
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobileNavBtn" class="md:hidden p-2 text-stone-600 hover:text-orange-500" aria-label="Toggle Navigation">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
    </nav>
  </div>

  <!-- Mobile Dropdown Drawer -->
  <div id="mobileDrawer" class="absolute inset-x-4 top-20 z-40 hidden md:hidden glass-card p-6 border border-stone-200 shadow-2xl space-y-3">
    <a href="#about" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-500 border-b border-stone-100">About</a>
    <a href="#leadership" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-500 border-b border-stone-100">Leadership Team</a>
    <a href="#products" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-500 border-b border-stone-100">Products</a>
    <a href="#clients" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-500 border-b border-stone-100">Clients</a>
    <a href="#contact" class="block py-2.5 text-base font-semibold text-stone-700 hover:text-orange-500">Contact Us</a>
  </div>


  <!-- ═══════════════════════════════════════════════════════════════════
       2. HERO SECTION (High-Tech 3D Apparel Centerpiece)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="about" class="relative flex flex-col justify-center items-center pt-32 pb-16 sm:pt-36 sm:pb-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-5xl mx-auto text-center space-y-6 flex flex-col items-center justify-center my-auto">
      
      <!-- Headline & Introduction -->
      <div class="inline-flex items-center px-6 py-2 rounded-full text-sm sm:text-base font-semibold bg-orange-50 border border-orange-200 text-orange-600 shadow-sm tracking-normal">
        Built for Garment Manufacturers
      </div>

      <h1 class="text-4xl sm:text-6xl lg:text-7xl font-bold tracking-tight leading-[1.16] text-stone-900 font-heading">
        Powering Your Factory's <br class="hidden sm:inline" />
        <span class="text-orange-500">Digital Transformation</span>
      </h1>

      <p class="text-base sm:text-xl lg:text-2xl text-stone-600 leading-relaxed max-w-3xl mx-auto">
        Connect every stage of garment manufacturing with intelligent digital solutions for planning, cutting, production, quality and machine monitoring driving higher productivity, reducing waste and enabling on-time delivery.
      </p>

    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       4. COMPANY PROFILE SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="company-profile" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-8 sm:p-10 lg:p-12 border border-stone-200">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-orange-400">
            <span>Track Tech Solution</span>
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

        <div class="lg:col-span-6">
          <div class="relative rounded-2xl overflow-hidden shadow-xl border border-stone-200/70 cyber-frame">
            <img src="{{ asset('images/production-tracking.jpg') }}" alt="Track Tech Platform — Real-Time Production Tracking Dashboard" class="w-full h-auto object-cover rounded-2xl">
            <div class="absolute inset-0 bg-gradient-to-t from-stone-900/60 via-transparent to-transparent rounded-2xl"></div>
            <div class="absolute bottom-4 left-4 right-4 flex items-center gap-3">
              <span class="px-3 py-1 rounded-full bg-orange-500/90 text-white text-xs font-bold shadow">Live Dashboard</span>
              <span class="text-white/90 text-xs font-semibold drop-shadow">Real-Time Production Tracking — TrakWel MES</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ═══════════════════════════════════════════════════════════════════
       3. LEADERSHIP TEAM (Glass Executive Profiles)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="leadership" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto">

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-stretch">

        <!-- Gopinath Muniraj -->
        <div class="bg-white/95 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-xl p-7 sm:p-8 flex flex-col justify-between h-full">
          <div>
            <img src="{{ asset('images/gopinath.jpg') }}" alt="Gopinath Muniraj" class="w-24 h-24 rounded-2xl object-cover object-top shadow-md border-2 border-orange-200 mx-auto">
            <div class="text-center mt-5 mb-4">
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-stone-900 leading-snug">Gopinath Muniraj</h3>
              <span class="text-sm font-semibold text-orange-500 block mt-1">Founder &amp; Chief Executive Officer (CEO)</span>
            </div>
            <p class="text-sm text-stone-600 leading-relaxed text-justify">
              Gopinath Muniraj is a technology entrepreneur with over 20 years of experience in apparel manufacturing. As Founder and CEO of Track Tech Solution, he drives digital transformation through automation, AI and Industrial IoT, helping manufacturers streamline operations, improve productivity, enable data-driven decisions and build smarter, more efficient and connected manufacturing environments.
            </p>
          </div>
          <div class="pt-6 text-center">
            <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-sm font-semibold text-orange-500 hover:text-orange-600 transition">
              <span>Professional profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Lebinesh Balan -->
        <div class="bg-white/95 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-xl p-7 sm:p-8 flex flex-col justify-between h-full">
          <div>
            <img src="{{ asset('images/lebinesh.jpg') }}" alt="Lebinesh Balan" class="w-24 h-24 rounded-2xl object-cover object-top shadow-md border-2 border-orange-200 mx-auto">
            <div class="text-center mt-5 mb-4">
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-stone-900 leading-snug">Lebinesh Balan</h3>
              <span class="text-sm font-semibold text-orange-500 block mt-1">Co-Founder &amp; Chief Operating Officer (COO)</span>
            </div>
            <p class="text-sm text-stone-600 leading-relaxed text-justify">
              Lebinesh Balan brings nearly 20 years of experience in digital transformation, particularly in apparel manufacturing. At Track Tech Solution, he leads business strategy, sales, operations and commercial growth, helping manufacturers digitise shop-floor processes, optimise production planning, enhance productivity, strengthen customer partnerships and achieve sustainable business growth through technology-driven innovation.
            </p>
          </div>
          <div class="pt-6 text-center">
            <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 text-sm font-semibold text-orange-500 hover:text-orange-600 transition">
              <span>LinkedIn profile</span>
              <span>↗</span>
            </a>
          </div>
        </div>

        <!-- Deepak Rajkumar -->
        <div class="bg-white/95 backdrop-blur-md rounded-2xl border border-stone-200/80 shadow-xl p-7 sm:p-8 flex flex-col justify-between h-full">
          <div>
            <img src="{{ asset('images/deepak.jpg') }}" alt="Deepak Rajkumar" class="w-24 h-24 rounded-2xl object-cover object-top shadow-md border-2 border-orange-200 mx-auto">
            <div class="text-center mt-5 mb-4">
              <h3 class="text-xl sm:text-2xl font-bold font-heading text-stone-900 leading-snug">Deepak Rajkumar</h3>
              <span class="text-sm font-semibold text-orange-500 block mt-1">Co-Founder &amp; Chief Technology Officer (CTO)</span>
            </div>
            <p class="text-sm text-stone-600 leading-relaxed text-justify">
              Deepak is a technology leader with extensive experience in apparel manufacturing and software development. At Track Tech Solution, he leads technology strategy, product engineering and digital transformation, developing scalable solutions using software architecture, AI and Industrial IoT to improve factory efficiency, operational visibility, manufacturing processes and overall business performance.
            </p>
          </div>
          <div class="pt-6 text-center">
            <span class="inline-block text-transparent text-sm select-none">&nbsp;</span>
          </div>
        </div>

      </div>
    </div>
  </section>


    <!-- ═══════════════════════════════════════════════════════════════════
       5. COMPREHENSIVE SOFTWARE SUITE (From website-tts.vercel.app)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="products" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8 z-10">
    <span id="products-studio" class="absolute -top-10"></span>
    <div class="max-w-6xl mx-auto space-y-6">

      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto">
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-stone-900 font-heading tracking-tight leading-tight">
          Designed for <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-500 italic">Smart Garment Factories</span>
        </h2>
      </div>

      <!-- Products: Full-Width Showcase -->
      <div class="space-y-4">

        <!-- Full-Width Product Detail Panel (Fixed Identical Dimensions) -->
        <div class="w-full glass-card rounded-3xl border border-stone-200 overflow-hidden shadow-xl md:h-[450px]" id="prod-detail">

          <!-- trakwel (default visible) -->
          <div id="panel-trakwel" class="prod-panel flex flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">TrakWel</h2>
              <p class="text-base text-stone-700 leading-relaxed">Manufacturing Execution System (MES) for real-time visibility and control across the shop floor, improving efficiency, quality and performance.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/trakwel.png') }}?v=2" alt="TrakWel - Smarter Manufacturing" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- fabric-inventory -->
          <div id="panel-fabric-inventory" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Fabric Inventory<br>Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">Digitise fabric inspection and inventory management with Inspection 4.0 and automatic grouping by shade, width and shrinkage. Gain real-time visibility into stock levels and material consumption, improve fabric traceability and ensure better inventory control.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/fabric-inventory-management.png') }}" alt="Fabric Inventory Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- cutting-room -->
          <div id="panel-cutting-room" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Cutting Room<br>Digitization</h2>
              <p class="text-base text-stone-700 leading-relaxed">Digitise cut planning, optimize end-bit utilization and streamline fabric reconciliation. Improve cutting-room efficiency, reduce fabric wastage and gain better visibility and control over material usage and cutting operations.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/cutting-room-digitalization.png') }}" alt="Cutting Room Digitization" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- production-tracking -->
          <div id="panel-production-tracking" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Real-Time Production<br>Tracking</h2>
              <p class="text-base text-stone-700 leading-relaxed">Track real time production, monitor efficiency and performance in real time, and compare planned versus actual output. Gain actionable insights into production progress, identify bottlenecks early and improve operational control.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/product-tracking.png') }}" alt="Real-Time Production Tracking" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- quality-management -->
          <div id="panel-quality-management" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Quality Management<br>System</h2>
              <p class="text-base text-stone-700 leading-relaxed">Monitor defect rates, track rework levels and identify recurring quality issues in real time. Gain actionable insights into defect trends, improve quality control and drive continuous improvement across production.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/quality-control.png') }}" alt="Quality Management System" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- planwel -->
          <div id="panel-planwel" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">PlanWel</h2>
              <p class="text-base text-stone-700 leading-relaxed">PlanWel is a web-based production planning solution that optimizes factory operations, order allocation, and resource utilization. It includes macro and micro planning, production timeline tracking, KPI dashboards, and real-time insights. The system improves capacity planning, monitors production performance, reduces delays, and ensures efficient operations and on-time delivery.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/planwel.png') }}" alt="PlanWel" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- mtrak -->
          <div id="panel-mtrak" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">mTrak</h2>
              <p class="text-base text-stone-700 leading-relaxed">mTrak helps maintenance teams maintain a central record of factory assets, respond to breakdowns, schedule servicing, assign tasks, and review downtime and maintenance performance through dashboards and reports.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/mTrak.png') }}" alt="mTrak" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- sewiot -->
          <div id="panel-sewiot" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">SewIoT</h2>
              <p class="text-base text-stone-700 leading-relaxed">Sewing IoT connects sewing machines to a real-time data layer, helping factory teams see production progress, understand operator performance, identify non-productive time, and respond to issues sooner.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/sew-IoT.png') }}" alt="SewIoT" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- laundry -->
          <div id="panel-laundry" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Laundry<br>Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">Laundry Management is a digital system that tracks garment washing processes, including laundry lots, quantities, shades, machine allocation, and operators. It supports QR code scanning, lot splitting and merging, WIP tracking, and machine and operator management. The system improves traceability, reduces manual errors, and ensures efficient workflow and production control.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/laundry-management.png') }}?v=2" alt="Laundry Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- jig -->
          <div id="panel-jig" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Jig Management</h2>
              <p class="text-base text-stone-700 leading-relaxed">JIG Management is a digital system for tracking denim pocket jigs, including design codes, sizes, materials, and storage locations. It supports QR code identification, jig allocation, usage, return, and availability tracking. The system reduces manual errors, prevents loss, improves inventory control, and ensures efficient production operations.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/Jig-management.png') }}?v=2" alt="Jig Management" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- shrinkage -->
          <div id="panel-shrinkage" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Shrinkage Testing App</h2>
              <p class="text-base text-stone-700 leading-relaxed">Record fabric measurements before and after washing, calculate shrinkage and keep test results linked to the material lot for consistent quality decisions.</p>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/shrinkage-testing-app.png') }}" alt="Shrinkage Testing App" class="w-full h-full object-cover">
            </div>
          </div>

          <!-- industry solutions overview panel -->
          <div id="panel-industry" class="prod-panel hidden flex-col md:flex-row w-full h-full">
            <div class="flex-1 h-full p-8 sm:p-10 lg:p-12 flex flex-col justify-center space-y-4 bg-[#e8f9f6]">
              <h2 class="text-3xl sm:text-4xl font-extrabold text-teal-700 font-heading leading-tight">Industry Solutions</h2>
              <p class="text-base text-stone-700 leading-relaxed">Specialized shop-floor applications tailored for apparel manufacturers. From Laundry Management to Jig tracking and Shrinkage testing, digitise every specialised corner of your manufacturing workflow.</p>
              <div class="flex flex-wrap gap-2 pt-2">
                <button onclick="selectProduct('laundry')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Laundry Management →</button>
                <button onclick="selectProduct('jig')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Jig Management →</button>
                <button onclick="selectProduct('shrinkage')" class="px-4 py-2 bg-white text-teal-800 text-xs font-bold rounded-lg border border-teal-200 hover:bg-teal-50 transition shadow-sm">Shrinkage Testing App →</button>
              </div>
              <a href="#contact" class="inline-block w-fit px-7 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-sm transition shadow-md shadow-orange-500/20 mt-3">Talk to our team</a>
            </div>
            <div class="md:w-3/5 h-64 md:h-full overflow-hidden flex items-center justify-center bg-stone-100">
              <img src="{{ asset('images/laundry-management.png') }}" alt="Industry Solutions" class="w-full h-full object-cover">
            </div>
          </div>

        </div>

        <!-- Sleek, Compact Controls Strip Below Card -->
        <div class="flex items-center justify-between px-2 pt-2 text-stone-600">
          <button type="button" onclick="prevProduct()" 
                  class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-white border border-stone-200 text-xs font-semibold text-stone-700 hover:text-orange-600 hover:border-orange-400 hover:bg-orange-50 shadow-sm transition active:scale-95 cursor-pointer"
                  aria-label="Previous Product">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            <span>Previous</span>
          </button>

          <div class="flex items-center gap-2.5 px-4 py-1.5 bg-white border border-stone-200 rounded-full shadow-sm text-xs">
            <span id="prod-counter" class="font-bold font-mono text-orange-600">
              01 / 11
            </span>
            <span class="text-stone-300">|</span>
            <span id="prod-current-title" class="font-semibold text-stone-700">
              TrakWel
            </span>
          </div>

          <button type="button" onclick="nextProduct()" 
                  class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-white border border-stone-200 text-xs font-semibold text-stone-700 hover:text-orange-600 hover:border-orange-400 hover:bg-orange-50 shadow-sm transition active:scale-95 cursor-pointer"
                  aria-label="Next Product">
            <span>Next</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
          </button>
        </div>

      </div>
    </div>
  </section>

  <script>
    const productList = [
      'trakwel',
      'fabric-inventory',
      'cutting-room',
      'production-tracking',
      'quality-management',
      'planwel',
      'mtrak',
      'sewiot',
      'laundry',
      'jig',
      'shrinkage'
    ];
    const productTitles = {
      'trakwel': 'TrakWel',
      'fabric-inventory': 'Fabric Inventory Management',
      'cutting-room': 'Cutting Room Digitization',
      'production-tracking': 'Real-Time Production Tracking',
      'quality-management': 'Quality Management System',
      'planwel': 'PlanWel',
      'mtrak': 'mTrak',
      'sewiot': 'SewIoT',
      'laundry': 'Laundry Management',
      'jig': 'Jig Management',
      'shrinkage': 'Shrinkage Testing App'
    };
    var currentProdIndex = 0;

    function updateProductIndicator(key) {
      var idx = productList.indexOf(key);
      if (idx !== -1) {
        currentProdIndex = idx;
        var counterEl = document.getElementById('prod-counter');
        var titleEl = document.getElementById('prod-current-title');
        if (counterEl) {
          var numStr = (currentProdIndex + 1 < 10 ? '0' : '') + (currentProdIndex + 1);
          counterEl.textContent = numStr + ' / ' + (productList.length < 10 ? '0' : '') + productList.length;
        }
        if (titleEl) {
          titleEl.textContent = productTitles[key] || '';
        }
      }
    }

    function selectProduct(key) {
      // Hide all panels
      document.querySelectorAll('.prod-panel').forEach(function(p) { 
        p.classList.add('hidden'); 
        p.classList.remove('flex'); 
      });

      // Remove active classes from all buttons
      document.querySelectorAll('.prod-item').forEach(function(b) {
        b.classList.remove('active-prod');
      });

      // Show selected panel
      var panel = document.getElementById('panel-' + key);
      if (panel) { 
        panel.classList.remove('hidden'); 
        panel.classList.add('flex'); 
      }

      // Highlight active button
      var btn = document.getElementById('btn-' + key);
      if (btn) {
        btn.classList.add('active-prod');
      }

      updateProductIndicator(key);
    }

    function prevProduct() {
      currentProdIndex = (currentProdIndex - 1 + productList.length) % productList.length;
      selectProduct(productList[currentProdIndex]);
    }

    function nextProduct() {
      currentProdIndex = (currentProdIndex + 1) % productList.length;
      selectProduct(productList[currentProdIndex]);
    }

    function navigateToProduct(key) {
      selectProduct(key);
      var sec = document.getElementById('products');
      if (sec) {
        sec.scrollIntoView({ behavior: 'smooth' });
      }
    }

    function toggleDropdownSub(id, arrowId) {
      var el = document.getElementById(id);
      var arr = document.getElementById(arrowId);
      if (el) {
        if (el.classList.contains('hidden')) {
          el.classList.remove('hidden');
          if (arr) arr.classList.add('rotate-180');
        } else {
          el.classList.add('hidden');
          if (arr) arr.classList.remove('rotate-180');
        }
      }
    }
  </script>
  <style>
    .active-prod { 
      background-color: #0d9488 !important; 
      color: #ffffff !important; 
      font-weight: 700 !important; 
      border-color: #0d9488 !important;
      box-shadow: 0 4px 14px rgba(13, 148, 136, 0.3) !important;
    }
  </style>




    <!-- ═══════════════════════════════════════════════════════════════════
       6. KEY CUSTOMERS & DIRECTORY (Stable Grid & Metrics)
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="clients" class="relative py-16 sm:py-20 px-4 sm:px-6 lg:px-8 z-10 flex flex-col justify-center">
    <div class="max-w-6xl mx-auto w-full space-y-6">
      
      <!-- Section Title -->
      <div class="text-center max-w-4xl mx-auto pb-1">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold font-heading text-[#087e8b] tracking-tight">
          Technology trusted by apparel manufacturers
        </h2>
      </div>

      <!-- SVG Symbols Definition (hidden) -->
      <svg xmlns="http://www.w3.org/2000/svg" style="display:none;" aria-hidden="true">
        <defs>
          <linearGradient id="shahiGrad" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#38bdf8"/>
            <stop offset="50%" stop-color="#818cf8"/>
            <stop offset="100%" stop-color="#c084fc"/>
          </linearGradient>
        </defs>

        <!-- 1. shahi (modern gradient lowercase matching screenshot) -->
        <symbol id="shahi" viewBox="0 0 200 80">
          <text x="100" y="52" fill="url(#shahiGrad)" font-family="Arial, Helvetica, sans-serif" font-size="44" font-weight="900" letter-spacing="1" text-anchor="middle">shahi</text>
        </symbol>

        <!-- 2. arvind -->
        <symbol id="arvind" viewBox="0 0 200 80">
          <text x="100" y="44" fill="#a11e3c" font-family="Georgia, serif" font-size="34" font-weight="700" letter-spacing="2" text-anchor="middle">ARVIND</text>
          <text x="100" y="60" fill="#a11e3c" font-family="Arial, Helvetica, sans-serif" font-size="8" font-weight="700" letter-spacing="1.5" text-anchor="middle">FASHIONING POSSIBILITIES</text>
        </symbol>

        <!-- 3. pds -->
        <symbol id="pds" viewBox="0 0 200 80">
          <circle cx="49" cy="40" r="27" fill="none" stroke="#b42b48" stroke-width="3" />
          <path d="M49 13v54M39 15v50M29 21v38M19 30v20M59 15v50M69 21v38M79 30v20" stroke="#b42b48" stroke-width="3.5" />
          <text x="127" y="52" fill="#17191c" font-family="Georgia, serif" font-size="38" font-weight="700" text-anchor="middle">PDS</text>
        </symbol>

        <!-- 4. texport overseas (ribbon emblem + text) -->
        <symbol id="texport" viewBox="0 0 200 80">
          <g transform="translate(18, 14)">
            <path d="M18 4 C8 4 1 13 1 24 C1 36 8 46 20 46 C27 46 32 42 36 36 L28 32 C26 36 23 38 20 38 C13 38 9 32 9 24 C9 17 13 12 20 12 C24 12 27 15 29 19 L37 15 C33 8 27 4 18 4 Z" fill="#2563eb" />
            <path d="M7 23 C9 15 17 9 27 9 L29 15 C23 15 17 19 15 25 Z" fill="#ef4444" />
            <path d="M19 10 L19 46 L25 46 L25 10 Z" fill="#2563eb" />
            <path d="M9 25 L33 25 L33 20 L9 20 Z" fill="#ef4444" />
          </g>
          <text x="126" y="40" fill="#1e3a8a" font-family="Arial, Helvetica, sans-serif" font-size="28" font-weight="900" text-anchor="middle">texport</text>
          <text x="126" y="56" fill="#1e3a8a" font-family="Arial, Helvetica, sans-serif" font-size="10" font-weight="700" letter-spacing="3" text-anchor="middle">OVERSEAS</text>
        </symbol>

        <!-- 5. penguin apparels -->
        <symbol id="penguin" viewBox="0 0 200 80">
          <ellipse cx="26" cy="40" rx="14" ry="24" fill="#1e293b" />
          <ellipse cx="26" cy="43" rx="8" ry="17" fill="#ffffff" />
          <circle cx="23" cy="26" r="1.8" fill="#ffffff" />
          <circle cx="29" cy="26" r="1.8" fill="#ffffff" />
          <circle cx="23" cy="26" r="1" fill="#1e293b" />
          <circle cx="29" cy="26" r="1" fill="#1e293b" />
          <polygon points="23,30 29,30 26,34" fill="#f59e0b" />
          <ellipse cx="21" cy="62" rx="4" ry="2" fill="#f59e0b" />
          <ellipse cx="31" cy="62" rx="4" ry="2" fill="#f59e0b" />
          <text x="118" y="45" fill="#1e3a8a" font-family="Arial, Helvetica, sans-serif" font-size="11" font-weight="900" text-anchor="middle" letter-spacing="0.5">PENGUIN APPARELS (P) LTD</text>
        </symbol>

        <!-- 6. modelama -->
        <symbol id="modelarna" viewBox="0 0 200 80">
          <ellipse cx="100" cy="29" rx="34" ry="20" fill="none" stroke="#27272a" stroke-width="2.5" />
          <path d="M70 29h60M100 9v40" stroke="#27272a" stroke-width="2" />
          <path d="M84 16 100 10l16 6v21l-16 11-16-11z" fill="#dc2626" stroke="#27272a" stroke-width="2" />
          <text x="100" y="68" fill="#18181b" font-family="Arial, Helvetica, sans-serif" font-size="12" font-weight="900" letter-spacing="1" text-anchor="middle">MODELAMA</text>
        </symbol>

        <!-- 7. armstrong -->
        <symbol id="armstrong" viewBox="0 0 200 80">
          <path d="M22 18h28L28 62H0z" fill="#dc2626" />
          <path d="M46 18h140l-22 44H24z" fill="#52525b" />
          <text x="108" y="42" fill="#fff" font-family="Georgia, serif" font-size="20" font-weight="700" text-anchor="middle">Armstrong</text>
          <text x="106" y="54" fill="#fff" font-family="Georgia, serif" font-size="9" font-style="italic" text-anchor="middle">The name for Quality</text>
        </symbol>

        <!-- 8. sahana (3 golden petals) -->
        <symbol id="sahana" viewBox="0 0 200 80">
          <g transform="translate(100, 24)" fill="#f59e0b">
            <path d="M0 -15 C-5 -6 -5 6 0 13 C5 6 5 -6 0 -15 Z" />
            <path d="M-3 0 C-11 -11 -21 -4 -17 7 C-13 13 -4 10 -2 2 Z" />
            <path d="M3 0 C11 -11 21 -4 17 7 C13 13 4 10 2 2 Z" />
          </g>
          <text x="100" y="66" fill="#71717a" font-family="Georgia, serif" font-size="15" letter-spacing="3" text-anchor="middle">SAHANA</text>
        </symbol>

        <!-- 9. trendyfits -->
        <symbol id="trendyfits" viewBox="0 0 200 80">
          <rect x="8" y="12" width="184" height="56" rx="4" fill="#153b73" />
          <circle cx="34" cy="40" r="13" fill="#facc15" />
          <text x="34" y="47" fill="#153b73" font-family="Arial, sans-serif" font-size="20" font-weight="900" text-anchor="middle">T</text>
          <text x="118" y="41" fill="#fff" font-family="Arial, sans-serif" font-size="18" font-weight="900" text-anchor="middle" letter-spacing="0.5">TRENDY FITS</text>
          <line x1="60" y1="46" x2="175" y2="46" stroke="#facc15" stroke-width="1.2" />
          <text x="118" y="55" fill="#facc15" font-family="Arial, sans-serif" font-size="7" font-weight="600" text-anchor="middle" letter-spacing="1">COMFORT FASHION FIT</text>
        </symbol>

        <!-- 10. mehala -->
        <symbol id="mehala" viewBox="0 0 200 80">
          <text x="100" y="42" fill="#dc2626" font-family="Times New Roman, Georgia, serif" font-size="34" font-weight="800" letter-spacing="2" text-anchor="middle">MEHALA</text>
          <text x="100" y="58" fill="#27272a" font-family="Georgia, serif" font-size="10" font-style="italic" text-anchor="middle">Committed to Customer Delight</text>
        </symbol>
      </svg>

      <!-- Customer Directory Showcase Card -->
      <div class="glass-card p-4 sm:p-5 border border-stone-200/90 shadow-md rounded-2xl">
        
        <!-- Header: Key Customers on the left in teal -->
        <div class="pb-2.5">
          <span class="text-sm sm:text-base font-bold text-[#087e8b] font-heading">Key Customers</span>
        </div>

        <!-- Logo Grid — 4, 4, 3 layout with no empty spaces -->
        <div class="border border-stone-200/90 rounded-xl overflow-hidden shadow-sm bg-stone-200/90 flex flex-col gap-[1px]">

          {{-- Row 1: Shahi · Arvind · PDS · Texport (4 clients) --}}
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-[1px]">
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/shahi.png') }}" alt="Shahi" class="max-h-12 sm:max-h-16 max-w-[150px] sm:max-w-[180px] w-auto h-auto object-contain">
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <svg class="w-full h-12 sm:h-16 max-w-[160px] sm:max-w-[190px]"><use href="#arvind" xlink:href="#arvind"></use></svg>
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/pds.png') }}" alt="PDS" class="max-h-12 sm:max-h-16 max-w-[150px] sm:max-w-[180px] w-auto h-auto object-contain">
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/texport.png') }}" alt="Texport Overseas" class="max-h-12 sm:max-h-16 max-w-[160px] sm:max-w-[190px] w-auto h-auto object-contain">
            </div>
          </div>

          {{-- Row 2: Penguin · Modelama · Armstrong · Sahana (4 clients) --}}
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-[1px]">
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/penguin.png') }}" alt="Penguin Apparels" class="max-h-11 sm:max-h-14 max-w-[160px] sm:max-w-[190px] w-auto h-auto object-contain">
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/modelama.png') }}?v=2" alt="Modelama" class="max-h-16 sm:max-h-20 max-w-[150px] sm:max-w-[180px] w-auto h-auto object-contain">
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <svg class="w-full h-12 sm:h-16 max-w-[160px] sm:max-w-[190px]"><use href="#armstrong" xlink:href="#armstrong"></use></svg>
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/sahana.png') }}" alt="Sahana" class="max-h-12 sm:max-h-16 max-w-[110px] sm:max-w-[140px] w-auto h-auto object-contain">
            </div>
          </div>

          {{-- Row 3: Trendy Fits · Mehala · Shell Apparels (3 clients — full width, no empty space) --}}
          <div class="grid grid-cols-3 gap-[1px]">
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <svg class="w-full h-12 sm:h-16 max-w-[160px] sm:max-w-[190px]"><use href="#trendyfits" xlink:href="#trendyfits"></use></svg>
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <svg class="w-full h-12 sm:h-16 max-w-[160px] sm:max-w-[190px]"><use href="#mehala" xlink:href="#mehala"></use></svg>
            </div>
            <div class="bg-white p-4 h-24 sm:h-28 flex items-center justify-center hover:bg-slate-50 transition-colors">
              <img src="{{ asset('images/clients/shell-apparels.png') }}" alt="Shell Apparels" class="max-h-16 sm:max-h-20 max-w-[130px] sm:max-w-[160px] w-auto h-auto object-contain">
            </div>
          </div>

        </div>

      </div>

      <!-- Company Facts & Metrics Bar — with orange icons -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-0 bg-white/95 glass-card border border-stone-200/90 rounded-2xl overflow-hidden shadow-sm divide-y md:divide-y-0 md:divide-x divide-stone-200/90">

        <!-- Countries -->
        <div class="py-5 px-4 sm:py-6 text-center flex flex-col items-center justify-center gap-2">
          <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center ring-1 ring-orange-200">
            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            </svg>
          </div>
          <strong class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-orange-500 font-heading">2</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 font-sans">Countries</span>
        </div>

        <!-- Factories -->
        <div class="py-5 px-4 sm:py-6 text-center flex flex-col items-center justify-center gap-2">
          <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center ring-1 ring-orange-200">
            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path d="M3 21V9l5-4v4l5-4v4l5-4v16H3z"/><path d="M9 21v-6h6v6"/>
            </svg>
          </div>
          <strong class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-orange-500 font-heading">74+</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 font-sans">Factories</span>
        </div>

        <!-- Users -->
        <div class="py-5 px-4 sm:py-6 text-center flex flex-col items-center justify-center gap-2">
          <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center ring-1 ring-orange-200">
            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <strong class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-orange-500 font-heading">6000+</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 font-sans">Users</span>
        </div>

        <!-- Professionals -->
        <div class="py-5 px-4 sm:py-6 text-center flex flex-col items-center justify-center gap-2">
          <div class="w-11 h-11 rounded-xl bg-orange-50 flex items-center justify-center ring-1 ring-orange-200">
            <svg class="w-6 h-6 text-orange-500" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
          </div>
          <strong class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-orange-500 font-heading">36</strong>
          <span class="text-xs sm:text-sm font-semibold text-stone-600 font-sans">Professionals</span>
        </div>

      </div>

    </div>
  </section>




  <!-- ═══════════════════════════════════════════════════════════════════
       8. CONTACT & FOOTER SECTION
  ═══════════════════════════════════════════════════════════════════ -->
  <section id="contact" class="relative py-8 sm:py-10 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-6xl mx-auto glass-card p-5 sm:p-7 lg:p-8 border border-stone-200 rounded-3xl shadow-xl space-y-6">
      
      <!-- Session Flash Feedback -->
      @if(session('success'))
        <div class="p-3.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-semibold flex items-center gap-2.5 shadow-sm">
          <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <span>{{ session('success') }}</span>
        </div>
      @endif

      <!-- 2-Column Layout: Left Demo Form (Orange Theme) | Right Contact Info Cards -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">

        <!-- LEFT: Request Your Demo Form (Image 1 in Orange Theme) -->
        <div class="lg:col-span-7 bg-white p-5 sm:p-6 rounded-2xl border border-stone-200/90 shadow-sm space-y-4">
          <div>
            <h3 class="text-xl sm:text-2xl font-extrabold text-stone-900 font-heading leading-tight">Request Your Demo</h3>
          </div>

          <form action="{{ route('contact.store') }}" method="POST" class="space-y-3">
            @csrf
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Full Name <span class="text-orange-500">*</span></label>
                <input type="text" name="first_name" required placeholder="John Smith"
                       class="w-full px-3 py-2 rounded-xl border border-stone-200 bg-stone-50/50 text-xs sm:text-sm text-stone-900 placeholder:text-stone-400 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 transition">
              </div>
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Work Email <span class="text-orange-500">*</span></label>
                <input type="email" name="email" required placeholder="john@company.com"
                       class="w-full px-3 py-2 rounded-xl border border-stone-200 bg-stone-50/50 text-xs sm:text-sm text-stone-900 placeholder:text-stone-400 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 transition">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Company <span class="text-orange-500">*</span></label>
                <input type="text" name="company_name" required placeholder="Your Company"
                       class="w-full px-3 py-2 rounded-xl border border-stone-200 bg-stone-50/50 text-xs sm:text-sm text-stone-900 placeholder:text-stone-400 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 transition">
              </div>
              <div>
                <label class="block text-xs font-bold text-stone-700 mb-1">Phone Number</label>
                <input type="tel" name="phone" placeholder="+1 (555) 123-4567"
                       class="w-full px-3 py-2 rounded-xl border border-stone-200 bg-stone-50/50 text-xs sm:text-sm text-stone-900 placeholder:text-stone-400 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 transition">
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-stone-700 mb-1">Your Role</label>
              <select name="role" class="w-full px-3 py-2 rounded-xl border border-stone-200 bg-stone-50/50 text-xs sm:text-sm text-stone-900 focus:outline-none focus:border-orange-500 focus:ring-2 focus:ring-orange-500/20 transition">
                <option value="" disabled selected>Select your role</option>
                <option value="Factory Owner / Executive">Factory Owner / Executive</option>
                <option value="Plant / General Manager">Plant / General Manager</option>
                <option value="Production Manager">Production Manager</option>
                <option value="Quality Head">Quality Head</option>
                <option value="Maintenance Lead">Maintenance Lead</option>
                <option value="Industrial Engineer">Industrial Engineer</option>
                <option value="IT & Digitalization">IT &amp; Digitalization</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div>
              <label class="block text-xs font-bold text-stone-700 mb-1.5">What interests you most? (Select all that apply)</label>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                
                <!-- TrakWel -->
                <label class="flex items-center gap-2.5 p-2 rounded-xl border border-stone-200 bg-stone-50/40 hover:bg-orange-50/30 hover:border-orange-300 transition cursor-pointer select-none">
                  <input type="checkbox" name="interests[]" value="TrakWel" class="w-4 h-4 rounded border-stone-300 text-orange-500 focus:ring-orange-500 accent-orange-500 shrink-0">
                  <div class="w-7 h-7 rounded-lg bg-cyan-50 flex items-center justify-center shrink-0 text-cyan-500">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zm6-4a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zm6-3a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/></svg>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="text-xs font-bold text-stone-900 leading-tight">TrakWel</span>
                    <span class="text-[10px] text-stone-500 leading-tight truncate">MES for Shop Floor</span>
                  </div>
                </label>

                <!-- CutWel -->
                <label class="flex items-center gap-2.5 p-2 rounded-xl border border-stone-200 bg-stone-50/40 hover:bg-orange-50/30 hover:border-orange-300 transition cursor-pointer select-none">
                  <input type="checkbox" name="interests[]" value="CutWel" class="w-4 h-4 rounded border-stone-300 text-orange-500 focus:ring-orange-500 accent-orange-500 shrink-0">
                  <div class="w-7 h-7 rounded-lg bg-red-50 flex items-center justify-center shrink-0 text-red-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879a3 3 0 11-4.242-4.242 3 3 0 014.242 0zM12 12l-2.879-2.879a3 3 0 10-4.242 4.242 3 3 0 004.242 0z"/></svg>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="text-xs font-bold text-stone-900 leading-tight">CutWel</span>
                    <span class="text-[10px] text-stone-500 leading-tight truncate">Cutting Room Digitisation</span>
                  </div>
                </label>

                <!-- PlanWel -->
                <label class="flex items-center gap-2.5 p-2 rounded-xl border border-stone-200 bg-stone-50/40 hover:bg-orange-50/30 hover:border-orange-300 transition cursor-pointer select-none">
                  <input type="checkbox" name="interests[]" value="PlanWel" class="w-4 h-4 rounded border-stone-300 text-orange-500 focus:ring-orange-500 accent-orange-500 shrink-0">
                  <div class="w-7 h-7 rounded-lg bg-purple-50 flex items-center justify-center shrink-0 text-purple-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="text-xs font-bold text-stone-900 leading-tight">PlanWel</span>
                    <span class="text-[10px] text-stone-500 leading-tight truncate">Planning &amp; Scheduling</span>
                  </div>
                </label>

                <!-- Sewing IoT -->
                <label class="flex items-center gap-2.5 p-2 rounded-xl border border-stone-200 bg-stone-50/40 hover:bg-orange-50/30 hover:border-orange-300 transition cursor-pointer select-none">
                  <input type="checkbox" name="interests[]" value="Sewing IoT" class="w-4 h-4 rounded border-stone-300 text-orange-500 focus:ring-orange-500 accent-orange-500 shrink-0">
                  <div class="w-7 h-7 rounded-lg bg-teal-50 flex items-center justify-center shrink-0 text-teal-600">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/></svg>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="text-xs font-bold text-stone-900 leading-tight">Sewing IoT</span>
                    <span class="text-[10px] text-stone-500 leading-tight truncate">Real-time Machine Data</span>
                  </div>
                </label>

                <!-- mTrak -->
                <label class="sm:col-span-2 flex items-center gap-2.5 p-2 rounded-xl border border-stone-200 bg-stone-50/40 hover:bg-orange-50/30 hover:border-orange-300 transition cursor-pointer select-none">
                  <input type="checkbox" name="interests[]" value="mTrak" class="w-4 h-4 rounded border-stone-300 text-orange-500 focus:ring-orange-500 accent-orange-500 shrink-0">
                  <div class="w-7 h-7 rounded-lg bg-emerald-50 flex items-center justify-center shrink-0 text-emerald-600">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/></svg>
                  </div>
                  <div class="flex flex-col min-w-0">
                    <span class="text-xs font-bold text-stone-900 leading-tight">mTrak</span>
                    <span class="text-[10px] text-stone-500 leading-tight truncate">Machine Maintenance Management</span>
                  </div>
                </label>

              </div>
            </div>

            <button type="submit"
                    class="w-full py-2.5 sm:py-3 px-5 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-bold text-xs sm:text-sm shadow-md shadow-orange-500/25 transition-all hover:scale-[1.01] active:scale-[0.99] flex items-center justify-center gap-2 cursor-pointer mt-1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
              <span>Schedule My Demo</span>
            </button>
          </form>
        </div>

        <!-- RIGHT: Contact Info Cards (Image 2 on the right side) -->
        <div class="lg:col-span-5 space-y-3.5 flex flex-col justify-between">
          <div class="space-y-1.5">
            <div class="inline-flex items-center gap-1.5 text-[11px] font-bold uppercase tracking-wider text-orange-500">
              <span>Connect with us</span>
            </div>
            <h3 class="text-xl sm:text-2xl font-extrabold text-stone-900 font-heading leading-tight">Make Your Factory Smarter</h3>
            <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
              Reach out to our shop-floor digitization specialists directly via office, mail, telephony or LinkedIn.
            </p>
          </div>

          <div class="space-y-2.5">
            <!-- Head Office -->
            <div class="p-3.5 sm:p-4 rounded-xl bg-white/90 border border-stone-200/80 shadow-sm space-y-0.5 hover:border-orange-500/40 transition">
              <div class="text-[10px] font-mono text-orange-500 font-bold uppercase tracking-wider">Head Office</div>
              <div class="text-xs sm:text-sm font-semibold text-stone-900 leading-snug">364, 10/5 Silicon Town, Electronic City Phase 2, Bangalore 560100</div>
            </div>

            <!-- Direct Mail -->
            <div class="p-3.5 sm:p-4 rounded-xl bg-white/90 border border-stone-200/80 shadow-sm space-y-0.5 hover:border-orange-500/40 transition">
              <div class="text-[10px] font-mono text-orange-500 font-bold uppercase tracking-wider">Direct Mail</div>
              <div class="text-xs sm:text-sm font-semibold text-stone-900">
                <a href="mailto:Lebinesh@tracktechsolutions.com" class="hover:text-orange-600 transition">Lebinesh@tracktechsolutions.com</a>
              </div>
            </div>

            <!-- Phone Telephony -->
            <div class="p-3.5 sm:p-4 rounded-xl bg-white/90 border border-stone-200/80 shadow-sm space-y-0.5 hover:border-orange-500/40 transition">
              <div class="text-[10px] font-mono text-orange-500 font-bold uppercase tracking-wider">Phone Telephony</div>
              <div class="text-xs sm:text-sm font-semibold text-stone-900">
                <a href="tel:+919650613666" class="hover:text-orange-600 transition">+91 96506 13666</a> / 
                <a href="tel:+919742060606" class="hover:text-orange-600 transition">+91 97420 60606</a>
              </div>
            </div>

            <!-- LinkedIn Company -->
            <div class="p-3.5 sm:p-4 rounded-xl bg-white/90 border border-stone-200/80 shadow-sm space-y-0.5 hover:border-orange-500/40 transition">
              <div class="text-[10px] font-mono text-orange-500 font-bold uppercase tracking-wider">LinkedIn Company</div>
              <div class="text-xs sm:text-sm font-semibold text-stone-900">
                <a href="https://www.linkedin.com/company/track-tech-solution/" target="_blank" rel="noopener noreferrer" class="hover:text-orange-600 transition">linkedin.com/company/track-tech-solution</a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Bottom Bar -->
      <div class="pt-5 border-t border-stone-200 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
        <div class="flex items-center gap-3">
          <img src="{{ asset('assets/img/track-tech-logo-clean.png') }}" alt="Logo" class="w-6 h-6 object-contain opacity-70">
          <span>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved. Made in India.</span>
        </div>
        <div class="flex items-center gap-6">
          <a href="#about" class="hover:text-stone-600 transition">Home</a>
          <a href="#leadership" class="hover:text-stone-600 transition">Leadership Team</a>
          <a href="#products" class="hover:text-stone-600 transition">Products</a>
          <a href="#clients" class="hover:text-stone-600 transition">Clients</a>
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
