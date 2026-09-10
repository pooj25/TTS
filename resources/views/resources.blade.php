@extends('layouts.app')

@section('title', 'Resources | Track Tech Solution')

@section('content')

    <!-- Hero -->
    <section class="pt-36 pb-20 relative">
        <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
            <span class="inline-block px-4 py-2 glass-panel border border-slate-300 rounded-full text-sm font-medium mb-6 text-sky-400">
                Resources
            </span>
            <h2 class="text-5xl md:text-6xl font-bold tracking-tight max-w-4xl mx-auto text-slate-800">
                Insights for the
                <span class="text-gradient">Connected Factory</span>
            </h2>
            <p class="mt-6 text-lg text-slate-700 max-w-2xl mx-auto">
                Explore industry insights, manufacturing trends and practical
                knowledge to help transform your factory with digital technology.
            </p>
        </div>
    </section>


    <!-- Dynamic DB Resources (if any exist) -->
    @if(isset($resources) && $resources->count() > 0)
    <section class="py-16 relative border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <h3 class="text-2xl font-bold text-slate-800 mb-8">Latest from Track Tech</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($resources as $resource)
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">
                    <div class="p-7">
                        <div class="text-4xl mb-4">{{ $resource->icon ?: '📘' }}</div>
                        @if($resource->type)
                        <span class="text-xs font-semibold text-sky-400 uppercase">{{ $resource->type }}</span>
                        @endif
                        <h4 class="text-xl font-bold mt-3 text-slate-800">{{ $resource->title }}</h4>
                        @if($resource->short_description)
                        <p class="text-slate-600 mt-3 leading-6 text-sm">{{ Str::limit($resource->short_description, 100) }}</p>
                        @endif
                        <a href="{{ route('resources.show', $resource->slug) }}"
                           class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif


    <!-- Static Article Cards with Modal -->
    <section class="py-24 relative border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-sm font-semibold text-sky-400">LATEST RESOURCES</span>
                    <h3 class="text-4xl font-bold mt-3 text-slate-800">Learn. Explore. Transform.</h3>
                </div>
                <p class="text-slate-600 mt-4 md:mt-0">Latest insights from Track Tech Solution</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal1')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="Digital Transformation">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">Digital Transformation</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">Why Apparel Factories Need Digital Transformation</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">Understand the importance of digitisation in modern apparel manufacturing.</p>
                        <button onclick="openModal('modal1')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal2')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="Production Tracking">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">Production</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">The Importance of Real-Time Production Tracking</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">Learn how real-time data can improve production visibility and decision making.</p>
                        <button onclick="openModal('modal2')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal3')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="IoT Factory">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">IoT</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">Building a Smarter and Connected Factory</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">Explore how IoT and connected machines can create smarter manufacturing environments.</p>
                        <button onclick="openModal('modal3')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal4')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="Inventory Management">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">Inventory</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">Improving Fabric Inventory Visibility</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">See how digital inventory systems can reduce errors and improve material control.</p>
                        <button onclick="openModal('modal4')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

                <!-- Card 5 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal5')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="Data Analytics">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">Analytics</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">Using Factory Data to Make Better Decisions</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">Learn how manufacturing analytics can turn factory data into actionable insights.</p>
                        <button onclick="openModal('modal5')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

                <!-- Card 6 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300 cursor-pointer"
                         onclick="openModal('modal6')">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80"
                             class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                             alt="Factory Management">
                    </div>
                    <div class="p-7">
                        <span class="text-xs font-semibold text-sky-400 uppercase">Smart Factory</span>
                        <h4 class="text-xl font-bold mt-3 text-slate-800">From Manual Processes to Smart Manufacturing</h4>
                        <p class="text-slate-600 mt-4 leading-6 text-sm">A practical look at moving traditional factory processes into a connected digital environment.</p>
                        <button onclick="openModal('modal6')" class="inline-flex items-center gap-2 mt-6 font-semibold text-sky-500 hover:text-sky-700 transition group-hover:gap-3">
                            Read More <span>→</span>
                        </button>
                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- ==================== MODALS ==================== -->

    <!-- Modal 1 -->
    <div id="modal1" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal1')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal1')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">Digital Transformation</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">Why Apparel Factories Need Digital Transformation</h2>
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="Digital Transformation">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>The global apparel industry is under tremendous pressure — rising labour costs, faster fashion cycles, and increasing sustainability demands. Factories that rely on manual tracking and spreadsheets simply cannot keep pace with the modern market.</p>
                <p><strong>Digital transformation</strong> means integrating connected technology — software, IoT sensors, and data analytics — directly into your production floor so every machine, every worker, and every order is tracked in real time.</p>
                <p>Track Tech Solutions helps apparel manufacturers make this transition smoothly. From fabric spreading to final quality inspection, our platform gives floor managers, production supervisors, and C-suite leaders a single, unified view of operations.</p>
                <p>Factories that digitise see an average <strong>25–40% improvement in production efficiency</strong> and a significant reduction in fabric waste and rework costs within the first 6 months.</p>
                <p><em>The question is no longer whether to digitise — it is how quickly you can get started.</em></p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">Talk to Our Team →</a>
        </div>
    </div>

    <!-- Modal 2 -->
    <div id="modal2" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal2')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal2')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">Production</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">The Importance of Real-Time Production Tracking</h2>
            <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="Production Tracking">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>In a garment factory producing thousands of pieces a day, knowing exactly where each order stands at any moment is the difference between on-time delivery and a costly delay.</p>
                <p><strong>Real-time production tracking</strong> gives supervisors a live dashboard showing output per line, per section, and per operator — so bottlenecks are spotted and resolved in minutes, not at the end of the day.</p>
                <p>Track Tech Solutions uses Android-based scanning terminals, barcode and RFID tagging, and a powerful cloud dashboard so you can monitor production from the factory floor or from your phone anywhere in the world.</p>
                <p>Key benefits include: <strong>reduced WIP (Work in Progress) pile-up</strong>, accurate delivery date commitments to buyers, and automated shift reports that save supervisors 2–3 hours every day.</p>
                <p>Real-time visibility is the foundation of a truly smart factory. Everything else — quality control, planning, machine maintenance — works better when you know exactly what is happening, right now.</p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">Book a Demo →</a>
        </div>
    </div>

    <!-- Modal 3 -->
    <div id="modal3" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal3')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal3')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">IoT</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">Building a Smarter and Connected Factory</h2>
            <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="IoT Factory">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>The Internet of Things (IoT) is transforming factories from collections of isolated machines into intelligent, connected ecosystems. Every sewing machine, cutting table, and spreading unit can now communicate performance data in real time.</p>
                <p>Track Tech Solutions' <strong>IoT integration</strong> attaches lightweight sensors to existing machines — no need to replace your equipment. These sensors capture stitch speed, idle time, downtime events, and energy consumption, feeding data directly into your factory dashboard.</p>
                <p>Machine-level data enables <strong>predictive maintenance</strong> — instead of waiting for a breakdown, your maintenance team gets an alert when a machine is showing stress patterns. This alone can reduce unplanned downtime by up to 60%.</p>
                <p>Beyond machines, connected factories use IoT for worker attendance, line balancing alerts, and even environmental monitoring (temperature and humidity for fabric-sensitive operations).</p>
                <p>Building a connected factory is a journey, not an overnight switch. Track Tech Solutions helps you start with what matters most and expand from there.</p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">Get Started →</a>
        </div>
    </div>

    <!-- Modal 4 -->
    <div id="modal4" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal4')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal4')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">Inventory</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">Improving Fabric Inventory Visibility</h2>
            <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="Inventory">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>Fabric is the single largest cost in garment manufacturing — typically 60–70% of total production cost. Yet most factories still manage fabric using paper records and spreadsheets, leading to invisible losses that quietly erode margins.</p>
                <p>Track Tech Solutions' <strong>Fabric Management module</strong> gives you end-to-end visibility from the moment rolls arrive at your warehouse to the last piece cut on the spreading table. Every roll is tagged, weighed, and tracked digitally.</p>
                <p>Smart spreading plans generated by our system use AI to minimise fabric wastage. Factories using our platform consistently report <strong>fabric savings of 1.5–3%</strong> — which translates to lakhs of rupees in savings every month.</p>
                <p>The system also handles relaxation tracking, shrinkage records, and automatic alerts when fabric consumption exceeds the allowed budget for any order.</p>
                <p>With real inventory data at your fingertips, procurement decisions become faster and more accurate — and you never face a fabric shortage that halts production unexpectedly.</p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">Learn More →</a>
        </div>
    </div>

    <!-- Modal 5 -->
    <div id="modal5" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal5')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal5')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">Analytics</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">Using Factory Data to Make Better Decisions</h2>
            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="Analytics">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>Every factory generates enormous amounts of data — output counts, defect records, machine logs, attendance sheets. But raw data sitting in spreadsheets is not insight. It is just noise.</p>
                <p>Track Tech Solutions transforms factory data into <strong>beautiful, actionable dashboards</strong> that tell you exactly what is working and what is not — in real time, without any manual report generation.</p>
                <p>Our analytics engine surfaces key KPIs: line efficiency, operator performance, defect rates by operator and defect type, order progress vs target, and daily production trends — all visible at a glance on any device.</p>
                <p>For management, weekly and monthly trend reports are automatically generated and can be shared with buyers and compliance auditors at the click of a button.</p>
                <p>Factories using data-driven management see a <strong>15–20% efficiency improvement</strong> in the first quarter, simply because problems that were previously invisible become immediately visible and actionable.</p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">See a Demo →</a>
        </div>
    </div>

    <!-- Modal 6 -->
    <div id="modal6" class="fixed inset-0 z-[999] hidden items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeModal('modal6')"></div>
        <div class="relative bg-white rounded-3xl max-w-2xl w-full max-h-[85vh] overflow-y-auto shadow-2xl p-8 md:p-12 z-10">
            <button onclick="closeModal('modal6')" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 transition text-xl font-bold">✕</button>
            <span class="text-xs font-semibold text-sky-500 uppercase tracking-wider">Smart Factory</span>
            <h2 class="text-3xl font-bold mt-3 text-slate-800">From Manual Processes to Smart Manufacturing</h2>
            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80" class="w-full h-52 object-cover rounded-2xl mt-6" alt="Smart Factory">
            <div class="mt-6 text-slate-700 leading-8 space-y-4">
                <p>Moving from clipboards and whiteboards to a fully connected smart factory can feel overwhelming. But it does not have to happen all at once. The most successful factory transformations happen in stages — starting with the biggest pain points and expanding from there.</p>
                <p><strong>Stage 1 — Production Tracking:</strong> Replace manual tally sheets with real-time digital tracking. Supervisors log output on Android terminals, and dashboards update instantly across the factory.</p>
                <p><strong>Stage 2 — Quality Control:</strong> Move quality checkpoints to digital forms. Defects are recorded by type, operator, and garment part — enabling root cause analysis that was impossible with paper records.</p>
                <p><strong>Stage 3 — Machine Intelligence:</strong> Add IoT sensors to machines for OEE tracking, predictive maintenance alerts, and energy monitoring.</p>
                <p><strong>Stage 4 — End-to-End Integration:</strong> Connect fabric, cutting, production, quality, and planning into one unified platform. This is the fully smart factory — and Track Tech Solutions can get you there.</p>
                <p>Many of our clients completed all four stages within 12–18 months and saw ROI in the very first month of going live.</p>
            </div>
            <a href="/contact" class="inline-block mt-8 px-7 py-3.5 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">Start Your Journey →</a>
        </div>
    </div>


    <!-- Newsletter Subscribe -->
    <section class="py-24 relative border-t border-slate-200 bg-black/10">
        <div class="max-w-5xl mx-auto px-6 relative z-10">

            <div class="glass-panel rounded-3xl p-10 md:p-16 text-center border border-slate-300 relative overflow-hidden group">
                <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-20 transition duration-1000"></div>

                <div class="relative z-10">
                    <span class="text-sky-500 text-sm font-semibold uppercase tracking-widest">Stay Updated</span>

                    <h3 class="text-4xl font-bold mt-4 text-slate-800">
                        Get the latest manufacturing insights
                    </h3>

                    <p class="text-slate-600 mt-4 max-w-xl mx-auto">
                        Stay informed about digital manufacturing, smart factories and industry technology.
                        No spam — just insights that matter.
                    </p>

                    <form id="newsletter-form"
                          action="{{ route('newsletter.subscribe') }}"
                          method="POST"
                          class="max-w-lg mx-auto mt-8">
                        @csrf
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input
                                type="email"
                                name="email"
                                id="newsletter-email"
                                placeholder="Enter your email address"
                                required
                                class="flex-1 px-5 py-4 rounded-full text-slate-800 bg-white border border-slate-300 outline-none focus:ring-2 focus:ring-sky-500 placeholder-gray-400 shadow-sm">

                            <button
                                type="submit"
                                id="newsletter-btn"
                                class="px-7 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg shadow-sky-500/20 flex items-center justify-center gap-2 whitespace-nowrap">
                                <span id="nl-btn-text">Subscribe →</span>
                                <span id="nl-btn-spinner" class="hidden">
                                    <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="py-24 relative border-t border-slate-200">

        <div class="absolute inset-0 flex justify-center items-center pointer-events-none -z-10">
            <div class="w-[400px] h-[400px] bg-sky-500/10 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-6 text-center relative z-10">
            <h3 class="text-4xl md:text-5xl font-bold text-slate-800">Ready to digitize your factory?</h3>
            <p class="mt-5 text-slate-600 max-w-2xl mx-auto">
                Let's build a smarter, more connected and efficient manufacturing operation together.
            </p>
            <a href="/contact" class="inline-block mt-8 px-8 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-white rounded-full font-semibold hover:-translate-y-1 transition shadow-lg">
                Talk to Our Experts →
            </a>
        </div>
    </section>


@push('scripts')
<script>
    // ── Modal open/close ──────────────────────────────
    function openModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    // Close modals with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            document.querySelectorAll('[id^="modal"]').forEach(function(m) {
                m.classList.add('hidden');
                m.classList.remove('flex');
            });
            document.body.style.overflow = '';
        }
    });

    // ── Newsletter loading spinner ────────────────────
    const nlForm = document.getElementById('newsletter-form');
    const nlBtn  = document.getElementById('newsletter-btn');
    const nlText = document.getElementById('nl-btn-text');
    const nlSpin = document.getElementById('nl-btn-spinner');

    if (nlForm) {
        nlForm.addEventListener('submit', function() {
            nlBtn.disabled = true;
            nlText.classList.add('hidden');
            nlSpin.classList.remove('hidden');
        });
    }

    // ── SweetAlert2 for newsletter session flashes ────
    @if(session('newsletter_success'))
        Swal.fire({
            title: '🎉 Subscribed!',
            text: @json(session('newsletter_success')),
            icon: 'success',
            confirmButtonText: 'Awesome!',
            confirmButtonColor: '#0ea5e9',
            background: '#ffffff',
            color: '#1e293b',
            iconColor: '#22c55e',
        });
    @endif

    @if(session('newsletter_info'))
        Swal.fire({
            title: 'Already Subscribed',
            text: @json(session('newsletter_info')),
            icon: 'info',
            confirmButtonText: 'Got it!',
            confirmButtonColor: '#0ea5e9',
            background: '#ffffff',
            color: '#1e293b',
        });
    @endif

    @if($errors->has('email'))
        Swal.fire({
            title: 'Invalid Email',
            text: 'Please enter a valid email address to subscribe.',
            icon: 'error',
            confirmButtonText: 'Try Again',
            confirmButtonColor: '#0ea5e9',
            background: '#ffffff',
            color: '#1e293b',
        });
    @endif
</script>
@endpush

@endsection