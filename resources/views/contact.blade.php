<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="h-20 flex items-center justify-between">

                <!-- LOGO -->
                <a href="/" class="flex items-center gap-3">

                    <div class="w-11 h-11 rounded-xl bg-black text-white flex items-center justify-center font-bold text-xl">
                        T
                    </div>

                    <div>
                        <div class="font-bold text-lg leading-none">
                            TRACK TECH
                        </div>

                        <div class="text-xs text-gray-500 tracking-widest">
                            SOLUTIONS
                        </div>
                    </div>

                </a>

                <!-- MENU -->
                <div class="hidden md:flex items-center gap-8 text-sm font-medium">

                    <a href="/" class="hover:text-gray-500 transition">Home</a>

                    <a href="/about" class="hover:text-gray-500 transition">About</a>

                    <a href="/solutions" class="hover:text-gray-500 transition">Solutions</a>

                    <a href="/products" class="hover:text-gray-500 transition">Products</a>

                    <a href="/industries" class="hover:text-gray-500 transition">Industries</a>

                    <a href="/resources" class="hover:text-gray-500 transition">Resources</a>

                </div>

                <!-- CTA -->
                <a href="/contact"
                   class="hidden md:inline-flex bg-black text-white px-6 py-3 rounded-full text-sm font-semibold">
                    Contact Us
                </a>

            </div>

        </div>

    </nav>


    <!-- HERO -->
    <section class="pt-36 pb-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="max-w-4xl">

                <p class="text-sm font-semibold uppercase tracking-widest text-gray-500">
                    Contact Us
                </p>

                <h1 class="text-5xl lg:text-7xl font-bold mt-5 leading-tight">
                    Let's build a
                    <span class="text-gray-400">
                        smarter factory.
                    </span>
                </h1>

                <p class="mt-7 text-lg lg:text-xl text-gray-600 leading-8 max-w-3xl">
                    Have a question about our solutions? Want to explore
                    digital transformation for your manufacturing operations?
                    Our team would love to hear from you.
                </p>

            </div>

        </div>

    </section>


    <!-- CONTACT SECTION -->
    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-2 gap-16">

                <!-- CONTACT INFO -->
                <div>

                    <h2 class="text-4xl font-bold">
                        Talk to our team.
                    </h2>

                    <p class="mt-5 text-gray-600 leading-8">
                        Tell us a little about your business and your
                        manufacturing challenges. We'll help you understand
                        how Track Tech Solutions can support your digital journey.
                    </p>


                    <div class="mt-10 space-y-7">

                        <div class="flex gap-5">

                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-xl">
                                📧
                            </div>

                            <div>
                                <h3 class="font-bold">Email Us</h3>

                                <p class="text-gray-600 mt-1">
                                    info@tracktechsolutions.com
                                </p>
                            </div>

                        </div>


                        <div class="flex gap-5">

                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-xl">
                                📍
                            </div>

                            <div>
                                <h3 class="font-bold">Location</h3>

                                <p class="text-gray-600 mt-1">
                                    Coimbatore, Tamil Nadu, India
                                </p>
                            </div>

                        </div>


                        <div class="flex gap-5">

                            <div class="w-12 h-12 rounded-xl bg-gray-100 flex items-center justify-center text-xl">
                                📞
                            </div>

                            <div>
                                <h3 class="font-bold">Call Us</h3>

                                <p class="text-gray-600 mt-1">
                                    Let's connect and discuss your requirements.
                                </p>
                            </div>

                        </div>

                    </div>


                    <!-- SMALL CTA -->
                    <div class="mt-12 p-8 rounded-3xl bg-black text-white">

                        <p class="text-gray-400 text-sm font-semibold uppercase tracking-widest">
                            Digital Transformation
                        </p>

                        <h3 class="text-2xl font-bold mt-3">
                            Start your smart factory journey today.
                        </h3>

                        <p class="text-gray-400 mt-4 leading-7">
                            Discover how connected technology can improve
                            visibility, productivity and decision making.
                        </p>

                    </div>

                </div>


                <!-- CONTACT FORM -->
                <div class="bg-gray-50 rounded-3xl p-8 lg:p-10">

                    <h2 class="text-3xl font-bold">
                        Send us a message
                    </h2>

                    <p class="text-gray-600 mt-3">
                        Fill out the form and our team will get back to you.
                    </p>


                    <!-- SUCCESS MESSAGE -->
                    @if(session('success'))
                        <div class="mt-6 p-4 bg-green-100 text-green-800 rounded-xl">
                            {{ session('success') }}
                        </div>
                    @endif


                    <!-- VALIDATION ERRORS -->
                    @if($errors->any())
                        <div class="mt-6 p-4 bg-red-100 text-red-800 rounded-xl">
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

                                <label class="block text-sm font-semibold mb-2">
                                    First Name
                                </label>

                                <input
                                    type="text"
                                    name="first_name"
                                    value="{{ old('first_name') }}"
                                    placeholder="Enter your first name"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black"
                                    required>

                            </div>


                            <div>

                                <label class="block text-sm font-semibold mb-2">
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    name="last_name"
                                    value="{{ old('last_name') }}"
                                    placeholder="Enter your last name"
                                    class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black">

                            </div>

                        </div>


                        <!-- EMAIL -->
                        <div>

                            <label class="block text-sm font-semibold mb-2">
                                Work Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black"
                                required>

                        </div>


                        <!-- COMPANY -->
                        <div>

                            <label class="block text-sm font-semibold mb-2">
                                Company Name
                            </label>

                            <input
                                type="text"
                                name="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="Enter your company name"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black">

                        </div>


                        <!-- SOLUTION -->
                        <div>

                            <label class="block text-sm font-semibold mb-2">
                                Interested In
                            </label>

                            <select
                                name="interested_in"
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 bg-white focus:outline-none focus:ring-2 focus:ring-black">

                                <option value="">
                                    Select a solution
                                </option>

                                <option value="Fabric Management">
                                    Fabric Management
                                </option>

                                <option value="Cutting Management">
                                    Cutting Management
                                </option>

                                <option value="Production Tracking">
                                    Production Tracking
                                </option>

                                <option value="Quality Management">
                                    Quality Management
                                </option>

                                <option value="IoT & Smart Factory">
                                    IoT & Smart Factory
                                </option>

                            </select>

                        </div>


                        <!-- MESSAGE -->
                        <div>

                            <label class="block text-sm font-semibold mb-2">
                                Message
                            </label>

                            <textarea
                                name="message"
                                rows="5"
                                placeholder="Tell us about your requirements..."
                                class="w-full px-5 py-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-black"
                                required>{{ old('message') }}</textarea>

                        </div>


                        <!-- SUBMIT -->
                        <button
                            type="submit"
                            class="w-full bg-black text-white py-4 rounded-xl font-semibold hover:bg-gray-800 transition">

                            Send Message →

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer class="bg-black text-white py-14">

        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid md:grid-cols-3 gap-12">

                <div>

                    <div class="text-xl font-bold">
                        TRACK TECH
                    </div>

                    <div class="text-xs text-gray-500 tracking-widest mt-1">
                        SOLUTIONS
                    </div>

                    <p class="text-gray-400 mt-5 leading-7">
                        Digital solutions for smarter manufacturing.
                    </p>

                </div>


                <div>

                    <h4 class="font-semibold">
                        Quick Links
                    </h4>

                    <div class="mt-5 space-y-3 text-gray-400">

                        <a href="/" class="block hover:text-white">
                            Home
                        </a>

                        <a href="/about" class="block hover:text-white">
                            About
                        </a>

                        <a href="/solutions" class="block hover:text-white">
                            Solutions
                        </a>

                        <a href="/products" class="block hover:text-white">
                            Products
                        </a>

                        <a href="/industries" class="block hover:text-white">
                            Industries
                        </a>

                        <a href="/resources" class="block hover:text-white">
                            Resources
                        </a>

                    </div>

                </div>


                <div>

                    <h4 class="font-semibold">
                        Contact
                    </h4>

                    <p class="mt-5 text-gray-400">
                        Coimbatore, Tamil Nadu
                    </p>

                    <p class="mt-2 text-gray-400">
                        info@tracktechsolutions.com
                    </p>

                </div>

            </div>


            <div class="border-t border-white/10 mt-12 pt-7 text-sm text-gray-500">

                © {{ date('Y') }} Track Tech Solutions.
                All rights reserved.

            </div>

        </div>

    </footer>

</body>
</html>