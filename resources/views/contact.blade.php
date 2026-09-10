@extends('layouts.app')

@section('title', 'Contact | Track Tech Solutions')

@section('content')

    <!-- HERO -->
    <section class="pt-36 pb-20 relative">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl relative z-10">

                <p class="text-sm font-semibold uppercase tracking-widest text-sky-400">
                    Contact Us
                </p>

                <h1 class="text-5xl lg:text-7xl font-bold mt-5 leading-tight text-white">
                    Let's build a
                    <span class="text-gradient">
                        smarter factory.
                    </span>
                </h1>

                <p class="mt-7 text-lg lg:text-xl text-gray-300 leading-8 max-w-3xl">
                    Have a question about our solutions? Want to explore
                    digital transformation for your manufacturing operations?
                    Our team would love to hear from you.
                </p>

            </div>

        </div>

    </section>


    <!-- CONTACT SECTION -->
    <section class="py-24 relative">
        <div class="absolute inset-0 bg-black/20 border-t border-b border-white/5 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-16">

                <!-- CONTACT INFO -->
                <div>

                    <h2 class="text-4xl font-bold text-white">
                        Talk to our team.
                    </h2>

                    <p class="mt-5 text-gray-300 leading-8">
                        Tell us a little about your business and your
                        manufacturing challenges. We'll help you understand
                        how Track Tech Solutions can support your digital journey.
                    </p>


                    <div class="mt-10 space-y-7">

                        <div class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition">
                                📧
                            </div>

                            <div>
                                <h3 class="font-bold text-white group-hover:text-sky-400 transition">Email Us</h3>

                                <p class="text-gray-400 mt-1">
                                    info@tracktechsolutions.com
                                </p>
                            </div>

                        </div>


                        <div class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition">
                                📍
                            </div>

                            <div>
                                <h3 class="font-bold text-white group-hover:text-sky-400 transition">Location</h3>

                                <p class="text-gray-400 mt-1">
                                    Coimbatore, Tamil Nadu, India
                                </p>
                            </div>

                        </div>


                        <div class="flex gap-5 group">

                            <div class="w-12 h-12 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-xl group-hover:scale-110 group-hover:bg-sky-500/20 group-hover:border-sky-500/30 transition">
                                📞
                            </div>

                            <div>
                                <h3 class="font-bold text-white group-hover:text-sky-400 transition">Call Us</h3>

                                <p class="text-gray-400 mt-1">
                                    Let's connect and discuss your requirements.
                                </p>
                            </div>

                        </div>

                    </div>


                    <!-- SMALL CTA -->
                    <div class="mt-12 p-8 rounded-3xl glass-panel relative overflow-hidden group border border-white/10">
                        <div class="absolute -inset-2 bg-gradient-to-r from-sky-500 to-blue-600 rounded-[2rem] blur opacity-0 group-hover:opacity-20 transition duration-1000"></div>

                        <div class="relative z-10">
                            <p class="text-sky-400 text-sm font-semibold uppercase tracking-widest">
                                Digital Transformation
                            </p>

                            <h3 class="text-2xl font-bold mt-3 text-white">
                                Start your smart factory journey today.
                            </h3>

                            <p class="text-gray-400 mt-4 leading-7">
                                Discover how connected technology can improve
                                visibility, productivity and decision making.
                            </p>
                        </div>
                    </div>

                </div>


                <!-- CONTACT FORM -->
                <div class="glass-card rounded-3xl p-8 lg:p-10 border border-white/10">

                    <h2 class="text-3xl font-bold text-white">
                        Send us a message
                    </h2>

                    <p class="text-gray-400 mt-3">
                        Fill out the form and our team will get back to you.
                    </p>


                    <!-- SUCCESS MESSAGE -->
                    @if(session('success'))
                        <div class="mt-6 p-4 bg-green-500/20 text-green-300 border border-green-500/30 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif


                    <!-- VALIDATION ERRORS -->
                    @if($errors->any())
                        <div class="mt-6 p-4 bg-red-500/20 text-red-300 border border-red-500/30 rounded-xl">
                            <ul class="list-disc pl-5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{ route('contact.store') }}"
                          method="POST"
                          class="mt-8 space-y-6">

                        @csrf

                        <!-- FIRST + LAST NAME -->
                        <div class="grid md:grid-cols-2 gap-6">

                            <div>
                                <label class="block text-sm font-semibold mb-2 text-gray-300">
                                    First Name
                                </label>
                                <input
                                    type="text"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    placeholder="Enter your first name"
                                    class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition"
                                    required>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold mb-2 text-gray-300">
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    placeholder="Enter your last name"
                                    class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition">
                            </div>

                        </div>

                        <!-- EMAIL -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-300">
                                Work Email
                            </label>
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition"
                                required>
                        </div>

                        <!-- COMPANY -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-300">
                                Company Name
                            </label>
                            <input
                                type="text"
                                name="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="Enter your company name"
                                class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition">
                        </div>

                        <!-- SOLUTION -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-300">
                                Interested In
                            </label>
                            <select
                                name="interested_in"
                                class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition [&>option]:bg-gray-900">
                                <option value="" class="text-gray-500">Select a solution</option>
                                <option value="Fabric Management">Fabric Management</option>
                                <option value="Cutting Management">Cutting Management</option>
                                <option value="Production Tracking">Production Tracking</option>
                                <option value="Quality Management">Quality Management</option>
                                <option value="IoT & Smart Factory">IoT & Smart Factory</option>
                            </select>
                        </div>

                        <!-- MESSAGE -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-300">
                                Message
                            </label>
                            <textarea
                                name="message"
                                rows="5"
                                placeholder="Tell us about your requirements..."
                                class="w-full px-5 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:border-transparent transition"
                                required>{{ old('message') }}</textarea>
                        </div>

                        <!-- SUBMIT -->
                        <button
                            type="submit"
                            class="w-full bg-gradient-to-r from-sky-500 to-blue-600 text-white py-4 rounded-xl font-semibold shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 hover:-translate-y-1 transition-all">
                            Send Message →
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

@endsection