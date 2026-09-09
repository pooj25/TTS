<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Tech Solutions | Apparel Manufacturing Technology</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #f7f8f6;
            color: #172018;
            font-family: Arial, Helvetica, sans-serif;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -7px;
            width: 0;
            height: 1px;
            background: #172018;
            transition: width .25s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .hero {
            min-height: 92vh;
            background:
                radial-gradient(circle at 80% 30%, rgba(202,220,202,.65), transparent 30%),
                #f7f8f6;
        }

        .hero-image {
            min-height: 600px;
            background:
                linear-gradient(
                    135deg,
                    rgba(13,31,20,.20),
                    rgba(13,31,20,.05)
                ),
                url("https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1600&q=85")
                center / cover;
        }

        .hero-overlay {
            background: linear-gradient(
                90deg,
                rgba(10,25,16,.72),
                rgba(10,25,16,.15)
            );
        }

        .green {
            color: #496b4f;
        }

        .green-bg {
            background: #496b4f;
        }

        .section-dark {
            background: #17251b;
        }

        .number {
            font-size: clamp(4rem, 8vw, 8rem);
            line-height: .8;
            font-weight: 700;
            letter-spacing: -.07em;
        }

        .service-card {
            transition: all .35s ease;
        }

        .service-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>

<body>


<!-- =====================================================
     NAVBAR
===================================================== -->

<header class="bg-[#f7f8f6] border-b border-black/10">

    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">

        <nav class="h-24 flex items-center justify-between">

            <!-- LOGO -->

            <a href="/" class="flex items-center gap-3">

                <div class="w-11 h-11 bg-[#17251b]
                            text-white flex items-center
                            justify-center font-bold text-sm">
                    TT
                </div>

                <div>
                    <div class="font-bold tracking-tight text-lg">
                        TRACK TECH
                    </div>

                    <div class="text-[9px] tracking-[.3em] text-gray-500">
                        SOLUTIONS
                    </div>
                </div>

            </a>


            <!-- DESKTOP MENU -->

            <div class="hidden lg:flex items-center gap-9
                        text-sm font-medium">

                <a href="/" class="nav-link">
                    Home
                </a>

                <a href="/about" class="nav-link">
                    About
                </a>

                <a href="/solutions" class="nav-link">
                    Solutions
                </a>

                <a href="/products" class="nav-link">
                    Products
                </a>

                <a href="/industries" class="nav-link">
                    Industries
                </a>

                <a href="/resources" class="nav-link">
                    Resources
                </a>

            </div>


            <a href="/contact"
               class="hidden md:flex items-center gap-3
                      px-6 py-3 bg-[#17251b]
                      text-white text-sm font-semibold
                      hover:bg-[#496b4f] transition">

                Let's Talk

                <span>↗</span>

            </a>

        </nav>

    </div>

</header>


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">

        <div class="grid lg:grid-cols-2 min-h-[calc(92vh-96px)]">


            <!-- LEFT -->

            <div class="flex flex-col justify-center
                        py-20 lg:py-24
                        lg:pr-16">

                <div class="flex items-center gap-3
                            text-xs uppercase tracking-[.25em]
                            font-semibold green mb-8">

                    <span class="w-10 h-[1px] bg-[#496b4f]"></span>

                    Apparel Manufacturing Technology

                </div>


                <h1 class="text-[clamp(3.2rem,6vw,6.5rem)]
                           leading-[.88]
                           font-bold
                           tracking-[-.06em]">

                    Innovate.

                    <br>

                    Transform.

                    <br>

                    <span class="green">
                        Optimise.
                    </span>

                </h1>


                <p class="mt-9 text-lg md:text-xl
                          leading-relaxed
                          text-gray-600 max-w-xl">

                    Intelligent digital solutions that connect
                    people, processes and technology across
                    the apparel manufacturing value chain.

                </p>


                <div class="flex flex-wrap gap-4 mt-10">

                    <a href="/solutions"
                       class="px-7 py-4
                              bg-[#17251b] text-white
                              text-sm font-semibold
                              hover:bg-[#496b4f]
                              transition">

                        Explore Solutions

                        <span class="ml-3">→</span>

                    </a>


                    <a href="/contact"
                       class="px-7 py-4
                              border border-black/20
                              text-sm font-semibold
                              hover:bg-white transition">

                        Book a Demo

                    </a>

                </div>


                <!-- SMALL INFO -->

                <div class="flex flex-wrap gap-10 mt-16
                            pt-7 border-t border-black/10">

                    <div>

                        <div class="font-bold text-xl">
                            25+
                        </div>

                        <div class="text-xs text-gray-500 mt-1">
                            Years of Experience
                        </div>

                    </div>


                    <div>

                        <div class="font-bold text-xl">
                            100+
                        </div>

                        <div class="text-xs text-gray-500 mt-1">
                            Factory Operations
                        </div>

                    </div>


                    <div>

                        <div class="font-bold text-xl">
                            24/7
                        </div>

                        <div class="text-xs text-gray-500 mt-1">
                            Visibility
                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT IMAGE -->

            <div class="relative py-8 lg:py-12">

                <div class="hero-image
                            relative h-full
                            overflow-hidden">

                    <div class="hero-overlay absolute inset-0">
                    </div>


                    <!-- FLOATING FACTORY DATA -->

                    <div class="absolute
                                left-7 bottom-7
                                bg-white/95
                                backdrop-blur
                                p-6 w-[270px]">

                        <div class="text-[10px]
                                    uppercase
                                    tracking-[.25em]
                                    text-gray-500">

                            Factory Intelligence

                        </div>


                        <div class="mt-5
                                    flex items-end
                                    justify-between">

                            <div>

                                <div class="text-4xl
                                            font-bold">

                                    94%

                                </div>

                                <div class="text-xs
                                            text-gray-500
                                            mt-1">

                                    Production Efficiency

                                </div>

                            </div>


                            <div class="text-green-700
                                        text-sm font-bold">

                                +12.4%

                            </div>

                        </div>


                        <div class="mt-5 h-1 bg-gray-200">

                            <div class="h-full bg-[#496b4f]"
                                 style="width:94%">
                            </div>

                        </div>

                    </div>


                    <!-- IMAGE LABEL -->

                    <div class="absolute
                                right-7 top-7
                                text-white">

                        <div class="text-[10px]
                                    uppercase
                                    tracking-[.25em]
                                    opacity-80">

                            Digital Factory

                        </div>

                        <div class="mt-2
                                    text-2xl
                                    font-semibold">

                            Connected Operations

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     INTRO
===================================================== -->

<section class="py-28 bg-white">

    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">

        <div class="grid lg:grid-cols-12 gap-12">


            <div class="lg:col-span-4">

                <div class="text-xs uppercase
                            tracking-[.25em]
                            green font-bold">

                    What We Do

                </div>

            </div>


            <div class="lg:col-span-8">

                <h2 class="text-4xl md:text-6xl
                           font-bold
                           tracking-[-.04em]
                           leading-tight">

                    We help apparel manufacturers
                    build a more
                    <span class="green">
                        connected factory.
                    </span>

                </h2>


                <p class="mt-8 text-lg
                          text-gray-500
                          leading-relaxed
                          max-w-3xl">

                    Track Tech Solutions combines manufacturing
                    knowledge with technology to digitise
                    critical factory operations, improve
                    visibility and enable better decisions.

                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     DIGITAL FACTORY
===================================================== -->

<section class="section-dark text-white py-28">

    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">


        <div class="flex flex-col lg:flex-row
                    justify-between
                    lg:items-end gap-8">

            <div>

                <div class="text-xs uppercase
                            tracking-[.25em]
                            text-gray-400">

                    Digital Factory

                </div>

                <h2 class="text-4xl md:text-6xl
                           font-bold
                           tracking-[-.04em]
                           mt-5">

                    From data
                    <span class="text-[#9fbaa2]">
                        to decisions.
                    </span>

                </h2>

            </div>


            <p class="max-w-md text-gray-400
                      leading-relaxed">

                Connect every stage of your factory
                with real-time information and
                intelligent workflows.

            </p>

        </div>


        <!-- PROCESS -->

        <div class="grid md:grid-cols-5
                    border-l border-t
                    border-white/10
                    mt-20">


            <div class="p-8 border-r border-b
                        border-white/10">

                <div class="number text-[#9fbaa2]">
                    01
                </div>

                <div class="mt-12 font-bold text-xl">
                    Fabric
                </div>

                <p class="text-sm text-gray-400 mt-3">
                    Inventory visibility and tracking.
                </p>

            </div>


            <div class="p-8 border-r border-b
                        border-white/10">

                <div class="number text-[#9fbaa2]">
                    02
                </div>

                <div class="mt-12 font-bold text-xl">
                    Cutting
                </div>

                <p class="text-sm text-gray-400 mt-3">
                    Digitised cutting room operations.
                </p>

            </div>


            <div class="p-8 border-r border-b
                        border-white/10">

                <div class="number text-[#9fbaa2]">
                    03
                </div>

                <div class="mt-12 font-bold text-xl">
                    Production
                </div>

                <p class="text-sm text-gray-400 mt-3">
                    Real-time production tracking.
                </p>

            </div>


            <div class="p-8 border-r border-b
                        border-white/10">

                <div class="number text-[#9fbaa2]">
                    04
                </div>

                <div class="mt-12 font-bold text-xl">
                    Quality
                </div>

                <p class="text-sm text-gray-400 mt-3">
                    Digital quality management.
                </p>

            </div>


            <div class="p-8 border-r border-b
                        border-white/10">

                <div class="number text-[#9fbaa2]">
                    05
                </div>

                <div class="mt-12 font-bold text-xl">
                    Delivery
                </div>

                <p class="text-sm text-gray-400 mt-3">
                    Connected order visibility.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     SOLUTIONS
===================================================== -->

<section class="py-28 bg-[#f7f8f6]">

    <div class="max-w-[1400px] mx-auto px-6 lg:px-12">


        <div class="flex justify-between
                    items-end gap-8">

            <div>

                <div class="text-xs uppercase
                            tracking-[.25em]
                            green font-bold">

                    Our Solutions

                </div>

                <h2 class="text-4xl md:text-6xl
                           font-bold
                           tracking-[-.04em]
                           mt-5">

                    Technology built
                    for the factory.

                </h2>

            </div>


            <a href="/solutions"
               class="hidden md:block
                      text-sm font-bold
                      border-b border-black
                      pb-2">

                View all solutions →

            </a>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-3
                    gap-px bg-black/10 mt-16">


            <div class="service-card bg-white p-9">

                <div class="text-sm green font-bold">
                    01
                </div>

                <div class="text-4xl mt-10">
                    🧵
                </div>

                <h3 class="text-2xl font-bold mt-7">
                    Fabric Inventory
                </h3>

                <p class="text-gray-500 mt-4 leading-relaxed">
                    Improve fabric visibility, movement and
                    inventory accuracy.
                </p>

                <a href="/solutions"
                   class="inline-block mt-8
                          text-sm font-bold">
                    Explore →
                </a>

            </div>


            <div class="service-card bg-white p-9">

                <div class="text-sm green font-bold">
                    02
                </div>

                <div class="text-4xl mt-10">
                    ✂️
                </div>

                <h3 class="text-2xl font-bold mt-7">
                    Cutting Room
                </h3>

                <p class="text-gray-500 mt-4 leading-relaxed">
                    Digitise cutting operations and improve
                    process control.
                </p>

                <a href="/solutions"
                   class="inline-block mt-8
                          text-sm font-bold">
                    Explore →
                </a>

            </div>


            <div class="service-card bg-white p-9">

                <div class="text-sm green font-bold">
                    03
                </div>

                <div class="text-4xl mt-10">
                    ⚙️
                </div>

                <h3 class="text-2xl font-bold mt-7">
                    Production Tracking
                </h3>

                <p class="text-gray-500 mt-4 leading-relaxed">
                    Get real-time visibility across production
                    lines and operations.
                </p>

                <a href="/solutions"
                   class="inline-block mt-8
                          text-sm font-bold">
                    Explore →
                </a>

            </div>


            <div class="service-card bg-white p-9">

                <div class="text-sm green font-bold">
                    04
                </div>

                <div class="text-4xl mt-10">
                    ✓
                </div>

                <h3 class="text-2xl font-bold mt-7">
                    Quality Management
                </h3>

                <p class="text-gray-500 mt-4 leading-relaxed">
                    Capture and manage quality information
                    digitally.
                </p>

                <a href="/solutions"
                   class="inline-block mt-8
                          text-sm font-bold">
                    Explore →
                </a>

            </div>


            <div class="service-card bg-white p-9">

                <div class="text-sm green font-bold">
                    05
                </div>

                <div class="text-4xl mt-10">
                    📡
                </div>

                <h3 class="text-2xl font-bold mt-7">
                    IoT Solutions
                </h3>

                <p class="text-gray-500 mt-4 leading-relaxed">
                    Connect machines and factory data for
                    smarter operations.
                </p>

                <a href="/solutions"
                   class="inline-block mt-8
                          text-sm font-bold">
                    Explore →
                </a>

            </div>


            <div class="service-card
                        bg-[#496b4f]
                        text-white p-9
                        flex flex-col justify-between">

                <div>

                    <div class="text-sm text-white/60 font-bold">
                        06
                    </div>

                    <h3 class="text-3xl font-bold mt-12">
                        Explore the complete
                        platform.
                    </h3>

                </div>

                <a href="/products"
                   class="mt-12 text-sm font-bold">
                    View Products →
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     CTA
===================================================== -->

<section class="section-dark text-white py-32">

    <div class="max-w-5xl mx-auto
                px-6 text-center">

        <div class="text-xs uppercase
                    tracking-[.3em]
                    text-[#9fbaa2]">

            Start the transformation

        </div>


        <h2 class="text-5xl md:text-7xl
                   font-bold
                   tracking-[-.05em]
                   mt-6">

            Ready to build a
            smarter factory?

        </h2>


        <p class="text-gray-400
                  text-lg
                  max-w-2xl
                  mx-auto mt-7">

            Talk to our team about your manufacturing
            challenges and discover where digital
            transformation can make the biggest impact.

        </p>


        <a href="/contact"
           class="inline-block
                  mt-10
                  bg-white text-[#17251b]
                  px-8 py-4
                  font-bold
                  hover:bg-[#dfe9df]
                  transition">

            Talk to us →

        </a>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="bg-[#101812] text-white">

    <div class="max-w-[1400px] mx-auto
                px-6 lg:px-12
                py-16">


        <div class="grid md:grid-cols-4 gap-12">


            <div class="md:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="w-11 h-11
                                bg-white text-[#17251b]
                                flex items-center
                                justify-center
                                font-bold">

                        TT

                    </div>

                    <div>

                        <div class="font-bold">
                            TRACK TECH
                        </div>

                        <div class="text-[9px]
                                    tracking-[.3em]
                                    text-gray-500">

                            SOLUTIONS

                        </div>

                    </div>

                </div>


                <p class="text-gray-500
                          max-w-md
                          mt-6
                          leading-relaxed">

                    Intelligent technology solutions
                    for the apparel manufacturing
                    industry.

                </p>

            </div>


            <div>

                <div class="font-bold mb-5">
                    Company
                </div>

                <div class="space-y-3
                            text-sm text-gray-500">

                    <a href="/about" class="block hover:text-white">
                        About
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

                <div class="font-bold mb-5">
                    Connect
                </div>

                <div class="space-y-3
                            text-sm text-gray-500">

                    <a href="/solutions" class="block hover:text-white">
                        Solutions
                    </a>

                    <a href="/products" class="block hover:text-white">
                        Products
                    </a>

                    <a href="/contact" class="block hover:text-white">
                        Contact
                    </a>

                </div>

            </div>

        </div>


        <div class="border-t
                    border-white/10
                    mt-14 pt-7
                    text-xs text-gray-600">

            © {{ date('Y') }} Track Tech Solutions.
            All rights reserved.

        </div>

    </div>

</footer>

</body>
</html>