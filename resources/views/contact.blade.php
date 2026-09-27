@extends('layouts.app')

@section('title', 'Contact | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-36 pb-24 relative overflow-hidden min-h-[460px] flex items-center border-b border-slate-200">
        <!-- Background Apparel Video -->
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="https://videos.pexels.com/video-files/3295499/3295499-hd_1920_1080_30fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 z-1 bg-gradient-to-r from-white/65 via-white/55 to-sky-100/45 backdrop-blur-[1px]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 w-full">
            <div class="max-w-4xl">
                <div class="flex flex-wrap items-center gap-3 mb-6">
                    <span class="px-4 py-2 glass-panel border border-slate-300 rounded-full text-sm font-bold text-slate-900 shadow-sm">
                        Contact Track Tech Team
                    </span>
                </div>

                <h1 class="text-5xl lg:text-7xl font-black leading-tight text-slate-900">
                    Let's build a
                    <span class="text-gradient">smarter apparel factory.</span>
                </h1>

                <p class="mt-6 text-lg lg:text-xl text-slate-700 leading-relaxed max-w-3xl font-semibold">
                    Schedule a 30-minute factory audit or explore custom IoT/software integrations with our apparel manufacturing specialists.
                </p>

                <div class="flex flex-wrap gap-3 mt-8">
                    <span class="px-3.5 py-1.5 rounded-xl bg-white/90 border border-slate-200 shadow-sm text-xs font-extrabold text-slate-800">
                        ⚡ Free 30-Min Demo
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white/90 border border-slate-200 shadow-sm text-xs font-extrabold text-slate-800">
                        📍 On-Site Factory Audits
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white/90 border border-slate-200 shadow-sm text-xs font-extrabold text-slate-800">
                        🤝 24/7 Expert Support
                    </span>
                </div>
            </div>
        </div>
    </section>


    <!-- CONTACT SECTION -->
    <section class="py-24 relative">
        <div class="absolute inset-0 bg-slate-50 border-t border-b border-slate-200"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-16">

                <!-- CONTACT INFO -->
                <div>

                    <h2 class="text-4xl font-bold text-slate-800">
                        Talk to our team.
                    </h2>

                    <p class="mt-5 text-slate-700 leading-8">
                        Tell us a little about your business and your
                        manufacturing challenges. We'll help you understand
                        how Track Tech Solutions can support your digital journey.
                    </p>


                    <div class="mt-10 space-y-7">

                        <a href="mailto:info@tracktechsolutions.com" class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white border border-slate-300 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition shadow-sm">
                                📧
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-800 group-hover:text-sky-500 transition">Email Us</h3>

                                <p class="text-slate-600 mt-1">
                                    info@tracktechsolutions.com
                                </p>
                            </div>

                        </a>


                        <a href="https://maps.google.com/?q=Coimbatore,Tamil+Nadu,India" target="_blank" class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white border border-slate-300 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition shadow-sm">
                                📍
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-800 group-hover:text-sky-500 transition">Location</h3>

                                <p class="text-slate-600 mt-1">
                                    Coimbatore, Tamil Nadu, India
                                </p>
                            </div>

                        </a>


                        <a href="tel:+919650613666" class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white border border-slate-300 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition shadow-sm">
                                📞
                            </div>

                            <div>
                                <h3 class="font-bold text-slate-800 group-hover:text-sky-500 transition">Call Us</h3>

                                <p class="text-slate-600 mt-1">
                                    +91 96506 13666
                                </p>
                            </div>

                        </a>

                    </div>


                    <!-- SMALL CTA -->
                    <div class="mt-12 p-8 rounded-3xl bg-white relative overflow-hidden group border border-slate-200 shadow-sm">
                        <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-10 transition duration-1000"></div>

                        <div class="relative z-10">
                            <p class="text-sky-500 text-sm font-semibold uppercase tracking-widest">
                                Digital Transformation
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-slate-800">
                                Start your smart factory journey today.
                            </h3>

                            <p class="text-slate-600 mt-4 leading-7">
                                Discover how connected technology can improve
                                visibility, productivity and decision making.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- CONTACT FORM -->
                <div class="bg-white rounded-3xl p-8 lg:p-10 border border-slate-200 shadow-lg">

                    <h2 class="text-3xl font-bold text-slate-800">
                        Send us a message
                    </h2>

                    <p class="text-slate-600 mt-3">
                        Fill out the form and our team will get back to you within 24 hours.
                    </p>


                    <form id="contact-form"
                          action="{{ route('contact.store') }}"
                          method="POST"
                          class="mt-8 space-y-6">

                        @csrf

                        <!-- FIRST + LAST NAME -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <div>
                                <label for="first_name" class="block text-sm font-semibold mb-2 text-slate-700">
                                    First Name *
                                </label>
                                <input
                                    type="text"
                                    name="first_name"
                                    id="first_name"
                                    value="{{ old('first_name') }}"
                                    placeholder="Enter your first name"
                                    class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition"
                                    required>
                            </div>

                            <div>
                                <label for="last_name" class="block text-sm font-semibold mb-2 text-slate-700">
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    name="last_name"
                                    id="last_name"
                                    value="{{ old('last_name') }}"
                                    placeholder="Enter your last name"
                                    class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition">
                            </div>

                        </div>

                        <!-- EMAIL -->
                        <div>
                            <label for="email" class="block text-sm font-semibold mb-2 text-slate-700">
                                Work Email *
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition"
                                required>
                        </div>

                        <!-- COMPANY -->
                        <div>
                            <label for="company_name" class="block text-sm font-semibold mb-2 text-slate-700">
                                Company Name
                            </label>
                            <input
                                type="text"
                                name="company_name"
                                id="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="Enter your company name"
                                class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition">
                        </div>

                        <!-- SOLUTION -->
                        <div>
                            <label for="interested_in" class="block text-sm font-semibold mb-2 text-slate-700">
                                Interested In
                            </label>
                            <select
                                name="interested_in"
                                id="interested_in"
                                class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition appearance-none"
                                style="background-image: url('data:image/svg+xml;utf8,<svg fill=&quot;%23475569&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 24 24&quot;><path d=&quot;M7 10l5 5 5-5z&quot;/></svg>'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em;">
                                <option value="">Select a solution</option>
                                <option value="Fabric Management" {{ old('interested_in') == 'Fabric Management' ? 'selected' : '' }}>Fabric Management</option>
                                <option value="Cutting Management" {{ old('interested_in') == 'Cutting Management' ? 'selected' : '' }}>Cutting Management</option>
                                <option value="Production Tracking" {{ old('interested_in') == 'Production Tracking' ? 'selected' : '' }}>Production Tracking</option>
                                <option value="Quality Management" {{ old('interested_in') == 'Quality Management' ? 'selected' : '' }}>Quality Management</option>
                                <option value="IoT &amp; Smart Factory" {{ old('interested_in') == 'IoT & Smart Factory' ? 'selected' : '' }}>IoT &amp; Smart Factory</option>
                            </select>
                        </div>

                        <!-- MESSAGE -->
                        <div>
                            <label for="message" class="block text-sm font-semibold mb-2 text-slate-700">
                                Message *
                            </label>
                            <textarea
                                name="message"
                                id="message"
                                rows="5"
                                placeholder="Tell us about your requirements..."
                                class="w-full px-5 py-4 rounded-xl border border-slate-300 bg-white text-slate-800 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition resize-none"
                                required>{{ old('message') }}</textarea>
                        </div>

                        <!-- SUBMIT -->
                        <button
                            type="submit"
                            id="contact-submit-btn"
                            class="w-full bg-gradient-to-r from-sky-500 to-blue-600 text-white py-4 rounded-xl font-semibold shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:-translate-y-1 transition-all flex items-center justify-center gap-2">
                            <span id="btn-text">Send Message →</span>
                            <span id="btn-spinner" class="hidden flex items-center gap-2">
                                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

    <!-- Interactive Next Page Continuous Journey Teaser -->
    <section class="py-16 bg-gradient-to-r from-slate-900 via-sky-950 to-indigo-950 text-white relative overflow-hidden border-t border-sky-400/20 shadow-2xl">
        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-30">
            <source src="https://videos.pexels.com/video-files/3205981/3205981-hd_1920_1080_25fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-slate-950/65 backdrop-blur-[2px]"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-8">
            <div>
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full text-xs font-bold bg-sky-500/20 text-sky-300 border border-sky-400/30 mb-3">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    Continuous Route Loop
                </span>
                <h3 class="text-2xl md:text-4xl font-black text-white">
                    Explore Product Ecosystem Again
                </h3>
                <p class="text-slate-300 text-sm md:text-base mt-2 max-w-xl font-medium">
                    Re-explore our apparel RFID tracking hardware, cutting room software, and live line productivity modules.
                </p>
            </div>

            <a href="/products" class="group inline-flex items-center gap-4 bg-gradient-to-r from-cyan-400 via-sky-500 to-emerald-400 text-slate-950 font-black text-lg px-8 py-4 rounded-full shadow-lg shadow-cyan-500/30 hover:shadow-cyan-400/60 hover:scale-105 transition-all duration-300 whitespace-nowrap">
                <span>Return to Products Ecosystem</span>
                <span class="w-9 h-9 rounded-full bg-slate-950/20 flex items-center justify-center group-hover:translate-x-1.5 transition-transform">➔</span>
            </a>
        </div>
    </section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var contactForm = document.getElementById('contact-form');
    var btn = document.getElementById('contact-submit-btn');
    var btnText = document.getElementById('btn-text');
    var btnSpinner = document.getElementById('btn-spinner');

    if (contactForm && btn) {
        contactForm.addEventListener('submit', function () {
            btn.disabled = true;
            btn.classList.add('opacity-70');
            if (btnText) btnText.classList.add('hidden');
            if (btnSpinner) btnSpinner.classList.remove('hidden');
        });
    }
});
</script>
@endpush

@endsection