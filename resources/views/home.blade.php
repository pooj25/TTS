<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Track Tech Solutions | Digital Manufacturing</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #020617;
            color: white;
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
        }

        #factory-canvas {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .glass {
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,0.10);
        }

        .gradient-text {
            background: linear-gradient(
                90deg,
                #ffffff,
                #93c5fd,
                #67e8f9
            );
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .grid-bg {
            background-image:
                linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        .glow {
            box-shadow:
                0 0 40px rgba(59,130,246,0.15),
                inset 0 0 30px rgba(59,130,246,0.05);
        }

        .machine-card {
            transition: transform .3s ease, border-color .3s ease;
        }

        .machine-card:hover {
            transform: translateY(-8px);
            border-color: rgba(96,165,250,.5);
        }

        .stat-number {
            font-variant-numeric: tabular-nums;
        }
    </style>
</head>

<body>

<!-- =========================================================
     NAVBAR
========================================================= -->

<nav class="fixed top-0 left-0 right-0 z-50 px-5 md:px-10 py-5">

    <div class="max-w-7xl mx-auto glass rounded-2xl px-5 md:px-7 py-4">

        <div class="flex items-center justify-between">

            <a href="/" class="flex items-center gap-3">

                <div class="w-10 h-10 rounded-xl bg-blue-600
                            flex items-center justify-center
                            font-black text-lg">
                    TT
                </div>

                <div>
                    <div class="font-bold text-lg tracking-wide">
                        TRACK TECH
                    </div>

                    <div class="text-[10px] text-slate-400 tracking-[.25em]">
                        SOLUTIONS
                    </div>
                </div>

            </a>


            <div class="hidden md:flex items-center gap-8 text-sm">

                <a href="/" class="text-white hover:text-blue-400 transition">
                    Home
                </a>

                <a href="/about" class="text-slate-300 hover:text-white transition">
                    About
                </a>

                <a href="/solutions" class="text-slate-300 hover:text-white transition">
                    Solutions
                </a>

                <a href="/products" class="text-slate-300 hover:text-white transition">
                    Products
                </a>

                <a href="/industries" class="text-slate-300 hover:text-white transition">
                    Industries
                </a>

                <a href="/resources" class="text-slate-300 hover:text-white transition">
                    Resources
                </a>

            </div>


            <a href="/contact"
               class="hidden md:block bg-white text-slate-950
                      px-5 py-2.5 rounded-xl font-semibold
                      hover:bg-blue-50 transition">
                Talk to us
            </a>

        </div>

    </div>

</nav>


<!-- =========================================================
     HERO / 3D FACTORY
========================================================= -->

<section class="relative min-h-screen overflow-hidden">

    <canvas id="factory-canvas"></canvas>

    <div class="absolute inset-0
                bg-gradient-to-r
                from-slate-950 via-slate-950/75 to-transparent
                z-[1]">
    </div>

    <div class="absolute inset-0 grid-bg opacity-30 z-[1]"></div>


    <div class="hero-content max-w-7xl mx-auto px-6
                min-h-screen flex items-center">

        <div class="max-w-2xl pt-24">

            <div class="inline-flex items-center gap-2
                        glass rounded-full px-4 py-2
                        text-sm text-blue-300 mb-7">

                <span class="w-2 h-2 bg-green-400 rounded-full
                             animate-pulse"></span>

                Digital Factory Platform
            </div>


            <h1 class="text-5xl md:text-7xl
                       font-black leading-[1.05]
                       tracking-tight">

                Transforming Apparel

                <span class="gradient-text">
                    Manufacturing
                </span>

                with Intelligent Technology

            </h1>


            <p class="mt-7 text-lg md:text-xl
                      text-slate-300 leading-relaxed max-w-xl">

                Connect your factory, people, machines and data
                through intelligent digital solutions designed
                for modern apparel manufacturing.

            </p>


            <div class="flex flex-wrap gap-4 mt-9">

                <a href="/solutions"
                   class="px-6 py-3.5 rounded-xl
                          bg-blue-600 hover:bg-blue-500
                          font-semibold transition">

                    Explore Solutions →

                </a>

                <a href="/contact"
                   class="px-6 py-3.5 rounded-xl
                          glass hover:bg-white/10
                          font-semibold transition">

                    Book a Demo

                </a>

            </div>


            <!-- LIVE STATUS -->

            <div class="mt-12 glass rounded-2xl p-5 max-w-lg glow">

                <div class="flex items-center justify-between mb-4">

                    <div>
                        <div class="text-xs text-slate-400 uppercase tracking-widest">
                            Factory Status
                        </div>

                        <div class="font-bold mt-1">
                            Live Production Network
                        </div>
                    </div>

                    <div class="flex items-center gap-2 text-green-400 text-sm">

                        <span class="w-2 h-2 rounded-full bg-green-400
                                     animate-pulse"></span>

                        Online

                    </div>

                </div>


                <div class="grid grid-cols-3 gap-3">

                    <div class="bg-white/5 rounded-xl p-3">
                        <div class="text-xs text-slate-400">
                            Lines
                        </div>

                        <div class="text-xl font-bold stat-number">
                            24
                        </div>
                    </div>


                    <div class="bg-white/5 rounded-xl p-3">
                        <div class="text-xs text-slate-400">
                            Efficiency
                        </div>

                        <div class="text-xl font-bold text-cyan-300">
                            94%
                        </div>
                    </div>


                    <div class="bg-white/5 rounded-xl p-3">
                        <div class="text-xs text-slate-400">
                            Orders
                        </div>

                        <div class="text-xl font-bold">
                            1.8K
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- SCROLL -->

    <div class="absolute bottom-7 left-1/2
                -translate-x-1/2 z-10 text-center">

        <div class="text-xs text-slate-500 uppercase tracking-[.3em]">
            Scroll to explore
        </div>

        <div class="mt-3 w-5 h-8 rounded-full border border-slate-600
                    flex justify-center">

            <div class="w-1 h-2 bg-blue-400 rounded-full mt-2
                        animate-bounce">
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     TRUST / STATS
========================================================= -->

<section class="border-y border-white/10 bg-slate-950">

    <div class="max-w-7xl mx-auto px-6 py-10">

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

            <div>
                <div class="text-4xl font-black">25+</div>
                <div class="text-slate-400 mt-1">
                    Years of Expertise
                </div>
            </div>

            <div>
                <div class="text-4xl font-black">100+</div>
                <div class="text-slate-400 mt-1">
                    Factories Connected
                </div>
            </div>

            <div>
                <div class="text-4xl font-black">24/7</div>
                <div class="text-slate-400 mt-1">
                    Visibility
                </div>
            </div>

            <div>
                <div class="text-4xl font-black">99%</div>
                <div class="text-slate-400 mt-1">
                    Data Availability
                </div>
            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     DIGITAL FACTORY
========================================================= -->

<section id="digital-factory"
         class="relative py-28 bg-slate-950 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-3xl">

            <div class="text-blue-400 font-semibold
                        uppercase tracking-[.25em] text-sm">
                Digital Factory
            </div>

            <h2 class="text-4xl md:text-6xl font-black mt-4">
                See your factory
                <span class="gradient-text">
                    differently.
                </span>
            </h2>

            <p class="text-slate-400 text-lg mt-6 leading-relaxed">
                From fabric inventory to production and quality,
                bring every stage of your manufacturing operation
                into one connected digital ecosystem.
            </p>

        </div>


        <div class="grid md:grid-cols-2 gap-6 mt-16">


            <!-- CARD 1 -->

            <div class="machine-card glass rounded-3xl p-8">

                <div class="text-4xl mb-6">🧵</div>

                <div class="text-sm text-blue-400 mb-2">
                    01
                </div>

                <h3 class="text-2xl font-bold">
                    Fabric Intelligence
                </h3>

                <p class="text-slate-400 mt-4 leading-relaxed">
                    Digitise fabric inventory, movement,
                    allocation and consumption with real-time
                    visibility.
                </p>

            </div>


            <!-- CARD 2 -->

            <div class="machine-card glass rounded-3xl p-8">

                <div class="text-4xl mb-6">✂️</div>

                <div class="text-sm text-blue-400 mb-2">
                    02
                </div>

                <h3 class="text-2xl font-bold">
                    Cutting Room Digitisation
                </h3>

                <p class="text-slate-400 mt-4 leading-relaxed">
                    Improve cutting accuracy and connect
                    planning, spreading and cutting operations.
                </p>

            </div>


            <!-- CARD 3 -->

            <div class="machine-card glass rounded-3xl p-8">

                <div class="text-4xl mb-6">🏭</div>

                <div class="text-sm text-blue-400 mb-2">
                    03
                </div>

                <h3 class="text-2xl font-bold">
                    Production Tracking
                </h3>

                <p class="text-slate-400 mt-4 leading-relaxed">
                    Monitor production progress and line
                    performance with real-time factory data.
                </p>

            </div>


            <!-- CARD 4 -->

            <div class="machine-card glass rounded-3xl p-8">

                <div class="text-4xl mb-6">✓</div>

                <div class="text-sm text-blue-400 mb-2">
                    04
                </div>

                <h3 class="text-2xl font-bold">
                    Quality Management
                </h3>

                <p class="text-slate-400 mt-4 leading-relaxed">
                    Capture quality information digitally and
                    identify production issues faster.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     JOURNEY
========================================================= -->

<section id="journey"
         class="py-28 bg-slate-900/50 border-y border-white/5">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center max-w-3xl mx-auto">

            <div class="text-cyan-400 font-semibold
                        uppercase tracking-[.25em] text-sm">
                Connected Workflow
            </div>

            <h2 class="text-4xl md:text-6xl font-black mt-4">
                One factory.
                <span class="gradient-text">
                    One connected flow.
                </span>
            </h2>

        </div>


        <div class="grid md:grid-cols-5 gap-4 mt-16">


            <div class="glass rounded-2xl p-6 text-center">

                <div class="text-3xl">🧵</div>

                <div class="font-bold mt-4">
                    Fabric
                </div>

                <div class="text-xs text-slate-500 mt-2">
                    Inventory
                </div>

            </div>


            <div class="glass rounded-2xl p-6 text-center">

                <div class="text-3xl">✂️</div>

                <div class="font-bold mt-4">
                    Cutting
                </div>

                <div class="text-xs text-slate-500 mt-2">
                    Digitisation
                </div>

            </div>


            <div class="glass rounded-2xl p-6 text-center">

                <div class="text-3xl">⚙️</div>

                <div class="font-bold mt-4">
                    Production
                </div>

                <div class="text-xs text-slate-500 mt-2">
                    Tracking
                </div>

            </div>


            <div class="glass rounded-2xl p-6 text-center">

                <div class="text-3xl">✓</div>

                <div class="font-bold mt-4">
                    Quality
                </div>

                <div class="text-xs text-slate-500 mt-2">
                    Management
                </div>

            </div>


            <div class="glass rounded-2xl p-6 text-center">

                <div class="text-3xl">📦</div>

                <div class="font-bold mt-4">
                    Delivery
                </div>

                <div class="text-xs text-slate-500 mt-2">
                    Visibility
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     VIDEO SECTION
========================================================= -->

<section class="py-28 bg-slate-950">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-14 items-center">


            <div>

                <div class="text-blue-400 uppercase
                            tracking-[.25em] text-sm font-semibold">
                    Factory in Motion
                </div>

                <h2 class="text-4xl md:text-5xl
                           font-black mt-4">
                    From operations
                    to <span class="gradient-text">
                        intelligence.
                    </span>
                </h2>

                <p class="text-slate-400 text-lg
                          leading-relaxed mt-6">
                    Connect people, processes and technology
                    to create a smarter, more visible and
                    efficient manufacturing environment.
                </p>

                <a href="/contact"
                   class="inline-block mt-8
                          bg-white text-slate-950
                          px-6 py-3 rounded-xl
                          font-semibold">
                    Explore Digital Transformation
                </a>

            </div>


            <div class="relative">

                <div class="aspect-video rounded-3xl
                            border border-white/10
                            bg-slate-900 overflow-hidden
                            flex items-center justify-center">

                    <div class="text-center px-8">

                        <div class="text-6xl mb-5">
                            ▶
                        </div>

                        <h3 class="text-xl font-bold">
                            Digital Factory Experience
                        </h3>

                        <p class="text-sm text-slate-500 mt-2">
                            Factory video can be added here
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CTA
========================================================= -->

<section class="py-28 bg-blue-600">

    <div class="max-w-5xl mx-auto px-6 text-center">

        <div class="text-blue-100 uppercase
                    tracking-[.3em] text-sm font-semibold">
            Ready for the next level?
        </div>

        <h2 class="text-4xl md:text-6xl
                   font-black mt-5">
            Build a smarter
            manufacturing future.
        </h2>

        <p class="text-blue-100 text-lg mt-6 max-w-2xl mx-auto">
            Let's connect your factory operations with
            intelligent digital solutions.
        </p>

        <a href="/contact"
           class="inline-block mt-9
                  bg-white text-blue-700
                  px-8 py-4 rounded-xl
                  font-bold hover:bg-blue-50 transition">
            Talk to Track Tech →
        </a>

    </div>

</section>


<!-- =========================================================
     FOOTER
========================================================= -->

<footer class="bg-slate-950 border-t border-white/10">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-4 gap-10">

            <div class="md:col-span-2">

                <div class="flex items-center gap-3">

                    <div class="w-10 h-10 rounded-xl
                                bg-blue-600 flex items-center
                                justify-center font-black">
                        TT
                    </div>

                    <div class="font-bold text-lg">
                        TRACK TECH SOLUTIONS
                    </div>

                </div>

                <p class="text-slate-500 mt-5 max-w-md leading-relaxed">
                    Intelligent digital solutions for apparel
                    manufacturing and connected factory operations.
                </p>

            </div>


            <div>

                <div class="font-bold mb-4">
                    Company
                </div>

                <div class="space-y-3 text-slate-500">

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

                <div class="font-bold mb-4">
                    Solutions
                </div>

                <div class="space-y-3 text-slate-500">

                    <a href="/solutions" class="block hover:text-white">
                        Digital Factory
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


        <div class="border-t border-white/10
                    mt-12 pt-7
                    text-sm text-slate-600
                    flex flex-col md:flex-row
                    justify-between gap-3">

            <div>
                © {{ date('Y') }} Track Tech Solutions.
                All rights reserved.
            </div>

            <div>
                Digital Manufacturing Technology
            </div>

        </div>

    </div>

</footer>


<!-- =========================================================
     THREE.JS
========================================================= -->

<script type="module">

import * as THREE from
    'https://cdn.jsdelivr.net/npm/three@0.180.0/build/three.module.js';


/* =========================================================
   BASIC SETUP
========================================================= */

const canvas = document.getElementById('factory-canvas');

const scene = new THREE.Scene();

scene.background = new THREE.Color(0x020617);

scene.fog = new THREE.Fog(
    0x020617,
    12,
    45
);


/* =========================================================
   CAMERA
========================================================= */

const camera = new THREE.PerspectiveCamera(
    45,
    window.innerWidth / window.innerHeight,
    0.1,
    100
);

camera.position.set(
    13,
    8,
    19
);


/* =========================================================
   RENDERER
========================================================= */

const renderer = new THREE.WebGLRenderer({
    canvas: canvas,
    antialias: true,
    alpha: false
});

renderer.setPixelRatio(
    Math.min(window.devicePixelRatio, 2)
);

renderer.setSize(
    window.innerWidth,
    window.innerHeight
);

renderer.shadowMap.enabled = true;

renderer.shadowMap.type =
    THREE.PCFSoftShadowMap;


/* =========================================================
   LIGHTS
========================================================= */

const ambientLight =
    new THREE.AmbientLight(
        0xffffff,
        1.8
    );

scene.add(ambientLight);


const directionalLight =
    new THREE.DirectionalLight(
        0xffffff,
        3
    );

directionalLight.position.set(
    10,
    15,
    10
);

directionalLight.castShadow = true;

scene.add(directionalLight);


const blueLight =
    new THREE.PointLight(
        0x3b82f6,
        80,
        30
    );

blueLight.position.set(
    0,
    6,
    5
);

scene.add(blueLight);


const cyanLight =
    new THREE.PointLight(
        0x06b6d4,
        50,
        25
    );

cyanLight.position.set(
    -10,
    4,
    -4
);

scene.add(cyanLight);


/* =========================================================
   FACTORY GROUP
========================================================= */

const factory = new THREE.Group();

scene.add(factory);


/* =========================================================
   MATERIALS
========================================================= */

const floorMaterial =
    new THREE.MeshStandardMaterial({
        color: 0x111827,
        roughness: 0.65,
        metalness: 0.25
    });


const buildingMaterial =
    new THREE.MeshStandardMaterial({
        color: 0x1e293b,
        roughness: 0.5,
        metalness: 0.35
    });


const blueMaterial =
    new THREE.MeshStandardMaterial({
        color: 0x2563eb,
        roughness: 0.35,
        metalness: 0.4
    });


const glassMaterial =
    new THREE.MeshStandardMaterial({
        color: 0x38bdf8,
        transparent: true,
        opacity: 0.3,
        roughness: 0.1,
        metalness: 0.3
    });


const machineMaterial =
    new THREE.MeshStandardMaterial({
        color: 0x334155,
        roughness: 0.45,
        metalness: 0.55
    });


/* =========================================================
   FLOOR
========================================================= */

const floorGeometry =
    new THREE.BoxGeometry(
        30,
        0.4,
        24
    );

const floor =
    new THREE.Mesh(
        floorGeometry,
        floorMaterial
    );

floor.position.y = -1;

floor.receiveShadow = true;

factory.add(floor);


/* =========================================================
   GRID
========================================================= */

const grid =
    new THREE.GridHelper(
        30,
        30,
        0x2563eb,
        0x1e293b
    );

grid.position.y = -0.78;

grid.material.transparent = true;

grid.material.opacity = 0.3;

factory.add(grid);


/* =========================================================
   FACTORY BUILDING
========================================================= */

const buildingGeometry =
    new THREE.BoxGeometry(
        20,
        7,
        12
    );

const building =
    new THREE.Mesh(
        buildingGeometry,
        buildingMaterial
    );

building.position.set(
    0,
    2.5,
    -3
);

building.castShadow = true;

building.receiveShadow = true;

factory.add(building);


/* =========================================================
   FRONT GLASS WALL
========================================================= */

const glassGeometry =
    new THREE.BoxGeometry(
        19,
        5,
        0.12
    );

const glass =
    new THREE.Mesh(
        glassGeometry,
        glassMaterial
    );

glass.position.set(
    0,
    2.5,
    3.05
);

factory.add(glass);


/* =========================================================
   ROOF
========================================================= */

const roofGeometry =
    new THREE.BoxGeometry(
        21,
        0.5,
        13
    );

const roof =
    new THREE.Mesh(
        roofGeometry,
        blueMaterial
    );

roof.position.set(
    0,
    6.2,
    -3
);

roof.castShadow = true;

factory.add(roof);


/* =========================================================
   MACHINE FUNCTION
========================================================= */

function createMachine(x, z, scale = 1)
{

    const group =
        new THREE.Group();


    /* Main body */

    const bodyGeometry =
        new THREE.BoxGeometry(
            1.5,
            1.2,
            1.2
        );

    const body =
        new THREE.Mesh(
            bodyGeometry,
            machineMaterial
        );

    body.position.y = 0.6;

    body.scale.setScalar(scale);

    body.castShadow = true;

    group.add(body);


    /* Top */

    const topGeometry =
        new THREE.BoxGeometry(
            1.8,
            0.2,
            1.4
        );

    const top =
        new THREE.Mesh(
            topGeometry,
            blueMaterial
        );

    top.position.y = 1.35;

    top.scale.setScalar(scale);

    top.castShadow = true;

    group.add(top);


    /* Indicator */

    const indicatorGeometry =
        new THREE.SphereGeometry(
            0.12,
            16,
            16
        );

    const indicatorMaterial =
        new THREE.MeshStandardMaterial({
            color: 0x22c55e,
            emissive: 0x22c55e,
            emissiveIntensity: 2
        });

    const indicator =
        new THREE.Mesh(
            indicatorGeometry,
            indicatorMaterial
        );

    indicator.position.set(
        0,
        1.5,
        0.5
    );

    indicator.scale.setScalar(scale);

    group.add(indicator);


    group.position.set(
        x,
        -0.6,
        z
    );

    factory.add(group);

    return group;
}


/* =========================================================
   MACHINES
========================================================= */

const machines = [];

machines.push(
    createMachine(-7, -1, 1.1),
    createMachine(-4, -1, 1),
    createMachine(-1, -1, 1.1),
    createMachine(2, -1, 1),
    createMachine(5, -1, 1.1),

    createMachine(-7, -5, 1),
    createMachine(-4, -5, 1.1),
    createMachine(-1, -5, 1),
    createMachine(2, -5, 1.1),
    createMachine(5, -5, 1)
);


/* =========================================================
   CONVEYOR
========================================================= */

function createConveyor(x, z)
{

    const group =
        new THREE.Group();


    const beltGeometry =
        new THREE.BoxGeometry(
            15,
            0.25,
            1.4
        );

    const belt =
        new THREE.Mesh(
            beltGeometry,
            machineMaterial
        );

    belt.position.y = -0.35;

    group.add(belt);


    for (
        let i = -6;
        i <= 6;
        i += 1.5
    )
    {

        const rollerGeometry =
            new THREE.CylinderGeometry(
                0.18,
                0.18,
                1.5,
                16
            );

        const roller =
            new THREE.Mesh(
                rollerGeometry,
                blueMaterial
            );

        roller.rotation.z =
            Math.PI / 2;

        roller.position.set(
            i,
            -0.15,
            0
        );

        group.add(roller);

    }


    group.position.set(
        x,
        0,
        z
    );

    factory.add(group);

    return group;
}


const conveyor1 =
    createConveyor(
        0,
        0.8
    );


const conveyor2 =
    createConveyor(
        0,
        -8
    );


/* =========================================================
   FLOATING DATA CUBES
========================================================= */

const cubes = [];

const cubeGeometry =
    new THREE.BoxGeometry(
        0.18,
        0.18,
        0.18
    );


for (
    let i = 0;
    i < 40;
    i++
)
{

    const material =
        new THREE.MeshStandardMaterial({
            color:
                i % 2 === 0
                    ? 0x3b82f6
                    : 0x06b6d4,
            emissive:
                i % 2 === 0
                    ? 0x1d4ed8
                    : 0x0891b2,
            emissiveIntensity: 1.5
        });


    const cube =
        new THREE.Mesh(
            cubeGeometry,
            material
        );


    cube.position.set(
        (Math.random() - 0.5) * 24,
        Math.random() * 8,
        (Math.random() - 0.5) * 18
    );


    cube.userData.speed =
        0.2 + Math.random() * 0.5;

    cube.userData.offset =
        Math.random() * Math.PI * 2;

    scene.add(cube);

    cubes.push(cube);
}


/* =========================================================
   DATA RINGS
========================================================= */

const ringGeometry =
    new THREE.TorusGeometry(
        1.2,
        0.025,
        16,
        64
    );


for (
    let i = 0;
    i < 5;
    i++
)
{

    const ringMaterial =
        new THREE.MeshBasicMaterial({
            color: 0x38bdf8,
            transparent: true,
            opacity: 0.45
        });


    const ring =
        new THREE.Mesh(
            ringGeometry,
            ringMaterial
        );


    ring.position.set(
        -8 + i * 4,
        5 + Math.sin(i) * 1.5,
        2
    );


    ring.rotation.x =
        Math.PI / 2;

    scene.add(ring);

}


/* =========================================================
   MOUSE
========================================================= */

let mouseX = 0;
let mouseY = 0;

window.addEventListener(
    'mousemove',
    (event) =>
    {

        mouseX =
            (event.clientX /
                window.innerWidth -
                0.5);

        mouseY =
            (event.clientY /
                window.innerHeight -
                0.5);

    }
);


/* =========================================================
   ANIMATION
========================================================= */

const clock =
    new THREE.Clock();


function animate()
{

    requestAnimationFrame(
        animate
    );


    const elapsed =
        clock.getElapsedTime();


    /* Factory floating movement */

    factory.rotation.y +=
        (mouseX * 0.06 -
         factory.rotation.y) * 0.02;


    factory.position.y =
        Math.sin(elapsed * 0.5) * 0.05;


    /* Machines */

    machines.forEach(
        (machine, index) =>
        {

            machine.children.forEach(
                (child) =>
                {

                    if (
                        child.geometry &&
                        child.geometry.type ===
                        'SphereGeometry'
                    )
                    {

                        child.material.emissiveIntensity =
                            1.5 +
                            Math.sin(
                                elapsed * 4 +
                                index
                            ) * 0.8;

                    }

                }
            );

        }
    );


    /* Floating cubes */

    cubes.forEach(
        (cube) =>
        {

            cube.position.y +=
                Math.sin(
                    elapsed *
                    cube.userData.speed +
                    cube.userData.offset
                ) * 0.0015;

            cube.rotation.x += 0.005;
            cube.rotation.y += 0.008;

        }
    );


    /* Camera */

    camera.position.x +=
        (13 + mouseX * 2 -
         camera.position.x) * 0.02;


    camera.position.y +=
        (8 - mouseY * 1.5 -
         camera.position.y) * 0.02;


    camera.lookAt(
        0,
        2,
        -2
    );


    renderer.render(
        scene,
        camera
    );

}


animate();


/* =========================================================
   RESIZE
========================================================= */

window.addEventListener(
    'resize',
    () =>
    {

        camera.aspect =
            window.innerWidth /
            window.innerHeight;

        camera.updateProjectionMatrix();


        renderer.setSize(
            window.innerWidth,
            window.innerHeight
        );


        renderer.setPixelRatio(
            Math.min(
                window.devicePixelRatio,
                2
            )
        );

    }
);

</script>

</body>
</html>