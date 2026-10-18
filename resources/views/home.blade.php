@extends('layouts.app')

@section('title', 'Track Tech Solution — Digital Intelligence for Garment Manufacturing')

@section('content')

{{-- ══ 1. HERO SECTION ═════════════════════════════════════════════════ --}}
<section class="relative min-h-[620px] lg:min-h-[720px] flex items-center overflow-hidden border-b border-slate-200">
    {{-- Local Factory Background Video --}}
    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0"
           poster="{{ asset('images/factory-aerial.jpg') }}">
        <source src="{{ asset('videos/factory-loop.mp4') }}" type="video/mp4">
    </video>

    {{-- Clean Light Glassmorphic Overlay --}}
    <div class="absolute inset-0 z-10 bg-gradient-to-r from-white/95 via-white/85 to-sky-100/40 backdrop-blur-[1px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 py-24 sm:py-32 w-full">
        <div class="max-w-3xl">
            {{-- Eyebrow --}}
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest bg-sky-100 text-sky-800 border border-sky-200 shadow-sm mb-6">
                <span class="w-2 h-2 rounded-full bg-sky-500 animate-pulse"></span>
                Built for the way garment factories work
            </div>

            {{-- Main Title --}}
            <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-slate-900 tracking-tight leading-[1.1] font-heading">
                A clearer way to <br class="hidden sm:inline" />
                <span class="text-gradient">run your factory</span>
            </h1>

            {{-- Subtitle --}}
            <p class="mt-6 text-lg sm:text-xl text-slate-700 leading-relaxed font-medium max-w-2xl">
                From the first roll of fabric to the final shipment, Track Tech helps your team see what is happening, fix issues sooner and keep every order moving.
            </p>

            {{-- Action CTAs --}}
            <div class="mt-10 flex flex-wrap items-center gap-4">
                <a href="/contact"
                   class="px-8 py-4 bg-gradient-to-r from-sky-500 via-sky-600 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-base rounded-full shadow-lg shadow-sky-500/25 transition-all hover:scale-105">
                    Experience It Live
                </a>
                <a href="/products"
                   class="px-8 py-4 bg-white/90 hover:bg-white text-slate-800 font-bold text-base rounded-full border border-slate-300 hover:border-sky-400 shadow-sm transition-all hover:scale-105">
                    Explore Products →
                </a>
            </div>

            {{-- Pill Highlights --}}
            <div class="mt-12 pt-8 border-t border-slate-200/80 flex flex-wrap gap-3">
                <span class="px-3.5 py-1.5 rounded-xl bg-white/95 border border-slate-200 text-xs font-bold text-slate-700 shadow-sm">
                    ✂️ Cutting Room Digitisation
                </span>
                <span class="px-3.5 py-1.5 rounded-xl bg-white/95 border border-slate-200 text-xs font-bold text-slate-700 shadow-sm">
                    🧵 Fabric Roll Management
                </span>
                <span class="px-3.5 py-1.5 rounded-xl bg-white/95 border border-slate-200 text-xs font-bold text-slate-700 shadow-sm">
                    🏭 Live Production Tracking
                </span>
                <span class="px-3.5 py-1.5 rounded-xl bg-white/95 border border-slate-200 text-xs font-bold text-slate-700 shadow-sm">
                    🔍 Inline Defect QC
                </span>
            </div>
        </div>
    </div>
</section>


{{-- ══ 2. FACTS / AT A GLANCE ═════════════════════════════════════════ --}}
<section class="py-12 bg-white border-b border-slate-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-sky-300 transition-all">
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading">2019</div>
                <div class="text-xs sm:text-sm font-bold text-slate-600 mt-2">Established</div>
            </div>
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-sky-300 transition-all">
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading">74+</div>
                <div class="text-xs sm:text-sm font-bold text-slate-600 mt-2">Factories Supported</div>
            </div>
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-sky-300 transition-all">
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading">02</div>
                <div class="text-xs sm:text-sm font-bold text-slate-600 mt-2">Countries</div>
            </div>
            <div class="p-6 rounded-2xl bg-slate-50 border border-slate-200 hover:border-sky-300 transition-all">
                <div class="text-4xl sm:text-5xl font-black text-sky-600 font-heading">36</div>
                <div class="text-xs sm:text-sm font-bold text-slate-600 mt-2">Professionals</div>
            </div>
        </div>
    </div>
</section>


{{-- ══ 3. ABOUT / COMPANY PROFILE ═════════════════════════════════════ --}}
<section id="company-profile" class="py-20 lg:py-28 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <div class="lg:col-span-7">
                <p class="text-xs font-black uppercase tracking-widest text-sky-600 mb-3">
                    Track Tech Solutions <span class="text-slate-400">/ EST. 2019</span>
                </p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-tight font-heading">
                    Digital clarity for the people who make apparel
                </h2>
                <div class="mt-6 space-y-4 text-slate-600 text-base sm:text-lg leading-relaxed">
                    <p>
                        Track Tech Solutions builds practical digital tools for apparel manufacturing. The platform connects production, quality, planning, materials and factory-floor teams, helping people see what is happening and act while there is still time to improve the outcome.
                    </p>
                    <p>
                        Since 2019, the team has focused on bringing useful technology closer to everyday factory work, supporting implementation across more than 74 factories in two countries.
                    </p>
                </div>
                <div class="mt-8">
                    <a href="https://www.linkedin.com/company/track-tech-solution/about/" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 font-bold text-sky-600 hover:text-sky-800 transition">
                        <span>Company profile on LinkedIn</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="relative rounded-3xl overflow-hidden border border-slate-200 shadow-xl bg-white p-3">
                    <img src="{{ asset('images/factory-aerial.jpg') }}" alt="Apparel manufacturing plant aerial view"
                         class="w-full h-80 object-cover rounded-2xl">
                    <div class="p-4 text-center">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Garment Factory Operations</span>
                        <h4 class="text-base font-black text-slate-800 mt-1">Connecting Floor to Finish</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══ 4. LEADERSHIP TEAM ═════════════════════════════════════════════ --}}
<section id="leadership" class="py-20 lg:py-28 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-xs font-black uppercase tracking-widest text-sky-600 mb-2">Our Leadership Team</p>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight font-heading">
                Built around manufacturing, operations and technology
            </h2>
            <p class="mt-4 text-slate-600 text-base sm:text-lg">
                Three perspectives working together to make factory software practical, dependable and useful on the floor.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Gopinath M. -->
            <div class="glass-card p-8 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        GM
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Executive Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Gopinath M. (Muniraj)</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Gopinath's career spans apparel manufacturing and digital solutions, including regional sales leadership at Coats Digital and roles associated with Arvind Limited and K Mohan Exports. At Track Tech, he leads the company's direction and its focus on bringing technology into everyday factory operations.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener noreferrer"
                       class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Professional profile ↗
                    </a>
                </div>
            </div>

            <!-- Lebinesh Balan -->
            <div class="glass-card p-8 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        LB
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Operating Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Lebinesh Balan</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Lebinesh focuses on turning strategy into consistent delivery: aligning customer implementation, teams and day-to-day operations. His work as COO supports smooth adoption of Track Tech across factory environments and keeps customer needs connected to execution.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener noreferrer"
                       class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        LinkedIn profile ↗
                    </a>
                </div>
            </div>

            <!-- Deepak Rajkumar -->
            <div class="glass-card p-8 flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center font-black text-lg mb-6 border border-sky-200">
                        DR
                    </div>
                    <span class="text-[11px] font-black uppercase tracking-wider text-sky-600">Chief Technology Officer</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-1 font-heading">Deepak Rajkumar</h3>
                    <p class="mt-4 text-slate-600 text-sm leading-relaxed">
                        Deepak guides the technology behind the platform, with a focus on reliable product engineering, useful integrations and clear information for factory teams. As CTO, he helps turn complex manufacturing workflows into software people can use with confidence.
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-slate-100">
                    <span class="text-xs font-bold text-slate-500">Technology Architecture</span>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══ 5. PRODUCTS OVERVIEW ═══════════════════════════════════════════ --}}
<section id="products" class="py-20 lg:py-28 bg-slate-50 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <p class="text-xs font-black uppercase tracking-widest text-sky-600 mb-2">What we help with</p>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight font-heading">
                The tools your factory team needs, in one place
            </h2>
            <p class="mt-4 text-slate-600 text-base sm:text-lg">
                Use the modules you need today, then connect the rest as your operation grows. Together, they give your team a clear view from fabric receiving to finished goods.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 01 TrakWel -->
            <div class="bg-white rounded-2xl border border-slate-200 p-7 hover:border-sky-400 hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <span class="text-xs font-black text-sky-600">01</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-2 font-heading">TrakWel</h3>
                    <p class="text-xs font-bold text-sky-700 uppercase tracking-wider mt-1">Manufacturing Execution System</p>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                        Real-time visibility and control across the shop floor to drive efficiency, quality and performance.
                    </p>
                    <div class="mt-5 space-y-1.5 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Fabric Inventory</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Cutting Room Digitisation</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Production Tracking</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Quality Control</div>
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="/products#trakwel" class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Explore TrakWel →
                    </a>
                </div>
            </div>

            <!-- 02 PlanWel -->
            <div class="bg-white rounded-2xl border border-slate-200 p-7 hover:border-sky-400 hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <span class="text-xs font-black text-sky-600">02</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-2 font-heading">PlanWel</h3>
                    <p class="text-xs font-bold text-sky-700 uppercase tracking-wider mt-1">Advanced Planning & Scheduling</p>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                        Smarter planning, accurate capacity management and on-time delivery with dynamic scheduling.
                    </p>
                    <div class="mt-5 space-y-1.5 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Dynamic Schedules</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Line Capacity Balancing</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Order Commitments</div>
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="/products#planwel" class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Explore PlanWel →
                    </a>
                </div>
            </div>

            <!-- 03 mTrak -->
            <div class="bg-white rounded-2xl border border-slate-200 p-7 hover:border-sky-400 hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <span class="text-xs font-black text-sky-600">03</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-2 font-heading">mTrak</h3>
                    <p class="text-xs font-bold text-sky-700 uppercase tracking-wider mt-1">Machine Maintenance</p>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                        Maximize machine uptime, reduce downtime and extend asset life with proactive maintenance.
                    </p>
                    <div class="mt-5 space-y-1.5 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>QR Breakdown Calling</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Preventive Schedules</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Fleet Health Gauges</div>
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="/products#mtrak" class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Explore mTrak →
                    </a>
                </div>
            </div>

            <!-- 04 SewIoT -->
            <div class="bg-white rounded-2xl border border-slate-200 p-7 hover:border-sky-400 hover:shadow-xl transition-all flex flex-col justify-between">
                <div>
                    <span class="text-xs font-black text-sky-600">04</span>
                    <h3 class="text-2xl font-black text-slate-900 mt-2 font-heading">SewIoT</h3>
                    <p class="text-xs font-bold text-sky-700 uppercase tracking-wider mt-1">IoT For Sewing Lines</p>
                    <p class="mt-4 text-sm text-slate-600 leading-relaxed">
                        Connect your sewing floor with IoT technology to monitor, analyze and improve productivity.
                    </p>
                    <div class="mt-5 space-y-1.5 text-xs font-semibold text-slate-700">
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Live Output Monitoring</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Needle Run-time Tracking</div>
                        <div class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>Station Connectivity</div>
                    </div>
                </div>
                <div class="mt-6 pt-4 border-t border-slate-100">
                    <a href="/products#sewiot" class="text-xs font-bold text-sky-600 hover:text-sky-800 transition inline-flex items-center gap-1">
                        Explore SewIoT →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- ══ 6. KEY CUSTOMERS (CLIENTS) ════════════════════════════════════ --}}
<section id="clients" class="py-20 lg:py-24 bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <p class="text-xs font-black uppercase tracking-widest text-sky-600 mb-2">Key Customers</p>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight font-heading">
                Technology trusted by apparel makers
            </h2>
            <p class="mt-3 text-slate-600 text-base sm:text-lg">
                From established manufacturing groups to specialist apparel exporters, Track Tech brings production, quality and order visibility together for teams on the factory floor.
            </p>
        </div>

        {{-- Client Cards Grid --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
            @php
                $clients = [
                    ['name' => 'SHAHI', 'sub' => 'Leading Apparel Exporter'],
                    ['name' => 'ARVIND', 'sub' => 'Fashioning Possibilities'],
                    ['name' => 'PDS', 'sub' => 'Global Manufacturing Platform'],
                    ['name' => 'Texport', 'sub' => 'Garment Exporters'],
                    ['name' => 'Penguin Apparels', 'sub' => 'Specialist Apparel Makers'],
                    ['name' => 'Modelarna Exports', 'sub' => 'Quality Garment Export'],
                    ['name' => 'Armstrong', 'sub' => 'The Name for Quality'],
                    ['name' => 'SAHANA', 'sub' => 'Apparel Manufacturing'],
                    ['name' => 'Trendy Fits', 'sub' => 'Comfort Fashion Fit'],
                    ['name' => 'Mehala', 'sub' => 'Customer Delight in Garments'],
                ];
            @endphp

            @foreach($clients as $c)
            <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-sky-300 hover:shadow-md transition text-center flex flex-col justify-center min-h-[105px]">
                <div class="font-black text-slate-900 tracking-tight text-base font-heading">{{ $c['name'] }}</div>
                <div class="text-[11px] text-slate-500 font-medium mt-1">{{ $c['sub'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ══ 7. FINAL CALL TO ACTION ════════════════════════════════════════ --}}
<section class="py-20 lg:py-24 bg-gradient-to-b from-slate-50 to-white text-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-black uppercase tracking-widest bg-sky-100 text-sky-800 border border-sky-200 mb-4">
            Get Started
        </span>
        <h2 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight font-heading">
            Want a clearer view of your factory?
        </h2>
        <p class="mt-5 text-slate-600 text-base sm:text-lg max-w-xl mx-auto leading-relaxed">
            Tell us how your lines work today. We will show you where Track Tech can remove manual follow-up and make every order on time.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-8">
            <a href="/contact"
               class="w-full sm:w-auto px-9 py-4 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-400 hover:to-blue-500 text-white font-bold text-base rounded-full shadow-lg shadow-sky-500/25 transition-all hover:scale-105">
                Talk to Sales Team
            </a>
            <a href="tel:+919650613666"
               class="w-full sm:w-auto px-8 py-4 bg-white hover:bg-slate-50 text-slate-800 font-bold text-base rounded-full border border-slate-300 shadow-sm transition-all hover:scale-105">
                Call +91 96506 13666
            </a>
        </div>
    </div>
</section>

@endsection
