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


    <!-- Featured Article -->
    <section class="py-24 relative border-t border-slate-200 bg-black/20">
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="grid lg:grid-cols-2 gap-12 items-center">

                <div class="rounded-3xl overflow-hidden glass-card border border-slate-300 group">
                    <img
                        src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1200&q=80"
                        class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-700 opacity-80 group-hover:opacity-100"
                        alt="Smart Factory">
                </div>

                <div>
                    <span class="text-sm font-semibold text-sky-400">
                        FEATURED INSIGHT
                    </span>

                    <h3 class="text-4xl font-bold mt-4 leading-tight text-slate-800">
                        How Digital Technology is Transforming Apparel Manufacturing
                    </h3>

                    <p class="mt-6 text-slate-600 leading-7">
                        Discover how connected systems, real-time production
                        tracking and intelligent factory solutions are helping
                        apparel manufacturers improve visibility and efficiency.
                    </p>

                    <div class="flex items-center gap-4 mt-8">
                        <span class="text-sm text-gray-500">
                            Manufacturing
                        </span>

                        <span class="text-gray-600">•</span>

                        <span class="text-sm text-gray-500">
                            8 min read
                        </span>
                    </div>

                    <button class="mt-8 px-6 py-3 bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800 rounded-full font-semibold shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:-translate-y-1 transition">
                        Read Article →
                    </button>
                </div>

            </div>

        </div>
    </section>


    <!-- Resources Grid -->
    <section class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 relative z-10">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-sm font-semibold text-sky-400">
                        LATEST RESOURCES
                    </span>

                    <h3 class="text-4xl font-bold mt-3 text-slate-800">
                        Learn. Explore. Transform.
                    </h3>
                </div>

                <p class="text-slate-600 mt-4 md:mt-0">
                    Latest insights from Track Tech Solution
                </p>
            </div>


            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="Digital Transformation">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            Digital Transformation
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            Why Apparel Factories Need Digital Transformation
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            Understand the importance of digitisation in modern
                            apparel manufacturing.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>


                <!-- Card 2 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="Production Tracking">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            Production
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            The Importance of Real-Time Production Tracking
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            Learn how real-time data can improve production
                            visibility and decision making.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>


                <!-- Card 3 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="IoT Factory">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            IoT
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            Building a Smarter and Connected Factory
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            Explore how IoT and connected machines can create
                            smarter manufacturing environments.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>


                <!-- Card 4 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1586528116493-da8b9b5c6f68?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="Inventory Management">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            Inventory
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            Improving Fabric Inventory Visibility
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            See how digital inventory systems can reduce errors
                            and improve material control.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>


                <!-- Card 5 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1516321318427-8b5a2b7b3e5c?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="Data Analytics">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            Analytics
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            Using Factory Data to Make Better Decisions
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            Learn how manufacturing analytics can turn factory
                            data into actionable insights.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>


                <!-- Card 6 -->
                <article class="glass-card rounded-3xl overflow-hidden border border-slate-300 group hover:-translate-y-2 transition duration-300">

                    <div class="overflow-hidden">
                        <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=900&q=80"
                            class="w-full h-56 object-cover opacity-80 group-hover:scale-110 group-hover:opacity-100 transition duration-700"
                            alt="Factory Management">
                    </div>

                    <div class="p-7">

                        <span class="text-xs font-semibold text-sky-400 uppercase">
                            Smart Factory
                        </span>

                        <h4 class="text-2xl font-bold mt-3 text-slate-800">
                            From Manual Processes to Smart Manufacturing
                        </h4>

                        <p class="text-slate-600 mt-4 leading-6">
                            A practical look at moving traditional factory
                            processes into a connected digital environment.
                        </p>

                        <a href="#" class="inline-block mt-6 font-semibold text-sky-400 group-hover:text-slate-800 transition">
                            Read More →
                        </a>

                    </div>
                </article>

            </div>
        </div>
    </section>


    <!-- Newsletter -->
    <section class="py-24 relative border-t border-slate-200 bg-black/20">
        <div class="max-w-5xl mx-auto px-6 relative z-10">

            <div class="glass-panel rounded-3xl p-10 md:p-16 text-center border border-slate-300 relative overflow-hidden group">
                <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-20 transition duration-1000"></div>

                <div class="relative z-10">
                    <span class="text-sky-400 text-sm font-semibold">
                        STAY UPDATED
                    </span>

                    <h3 class="text-4xl font-bold mt-4 text-slate-800">
                        Get the latest manufacturing insights
                    </h3>

                    <p class="text-slate-700 mt-4 max-w-xl mx-auto">
                        Stay informed about digital manufacturing,
                        smart factories and industry technology.
                    </p>

                    <div class="max-w-lg mx-auto mt-8 flex flex-col sm:flex-row gap-3">

                        <input
                            type="email"
                            placeholder="Enter your email"
                            class="flex-1 px-5 py-4 rounded-full text-slate-800 bg-white/5 border border-slate-300 outline-none focus:ring-2 focus:ring-sky-500 placeholder-gray-500">

                        <button class="px-7 py-4 bg-gradient-to-r from-sky-500 to-blue-600 text-slate-800 rounded-full font-semibold hover:-translate-y-1 transition shadow-lg shadow-sky-500/20">
                            Subscribe
                        </button>

                    </div>
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

            <h3 class="text-4xl md:text-5xl font-bold text-slate-800">
                Ready to digitize your factory?
            </h3>

            <p class="mt-5 text-slate-600 max-w-2xl mx-auto">
                Let's build a smarter, more connected and efficient
                manufacturing operation together.
            </p>

            <a href="/contact"
               class="inline-block mt-8 px-8 py-4 bg-white text-black rounded-full font-semibold hover:-translate-y-1 transition">
                Talk to Our Experts →
            </a>

        </div>
    </section>

@endsection