<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            400: '#00bbf0', // Cyan light
                            500: '#00a3e0', // Cyan base
                            600: '#008bbf', // Cyan dark
                        },
                        accent: {
                            400: '#c25ea8', // Magenta light
                            500: '#a74b94', // Magenta base
                            600: '#8e3f7d', // Magenta dark
                        },
                        dark: {
                            800: '#171329', // Deep space
                            900: '#0f0e17', // Obsidian
                            950: '#07070a', // Ultra dark
                        }
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Three.js & GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            margin: 0;
            background:
                linear-gradient(135deg, rgba(0, 163, 224, 0.08), transparent 28%),
                linear-gradient(315deg, rgba(167, 75, 148, 0.08), transparent 32%),
                #f8fafc;
            color: #020617; /* Dark text */
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }

        /* Content Overlay Layer */
        #content-layer {
            position: relative;
            z-index: 10;
        }

        #site-ambient-3d {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            opacity: 0.42;
        }

        .ambient-depth-plane {
            position: fixed;
            inset: auto 0 0 auto;
            width: min(52vw, 760px);
            height: min(52vw, 760px);
            z-index: 1;
            pointer-events: none;
            transform: translate(26%, 16%) rotateX(64deg) rotateZ(-18deg);
            transform-style: preserve-3d;
            opacity: 0.34;
        }

        .ambient-depth-plane::before {
            content: "";
            position: absolute;
            inset: 0;
            border: 1px solid rgba(0, 163, 224, 0.24);
            background-image:
                linear-gradient(rgba(0, 163, 224, 0.12) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 163, 224, 0.12) 1px, transparent 1px);
            background-size: 44px 44px;
            box-shadow: 0 32px 90px rgba(15, 23, 42, 0.12);
        }

        main > section {
            position: relative;
            isolation: isolate;
        }

        main > section::after {
            content: "";
            position: absolute;
            top: 2.5rem;
            right: max(1.5rem, calc((100vw - 80rem) / 2));
            width: 9rem;
            height: 9rem;
            z-index: -1;
            pointer-events: none;
            border: 1px solid rgba(0, 163, 224, 0.18);
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.78), rgba(0, 163, 224, 0.08)),
                linear-gradient(90deg, rgba(0, 163, 224, 0.12) 1px, transparent 1px),
                linear-gradient(rgba(167, 75, 148, 0.08) 1px, transparent 1px);
            background-size: auto, 18px 18px, 18px 18px;
            box-shadow: 18px 24px 55px rgba(15, 23, 42, 0.08);
            transform: perspective(700px) rotateX(58deg) rotateZ(-18deg);
            opacity: 0.75;
        }

        main > section:first-child::before {
            content: "";
            position: absolute;
            top: 5rem;
            right: max(2rem, calc((100vw - 78rem) / 2));
            width: min(34vw, 28rem);
            height: min(34vw, 28rem);
            z-index: -1;
            pointer-events: none;
            border-radius: 1rem;
            border: 1px solid rgba(0, 163, 224, 0.24);
            background:
                linear-gradient(135deg, rgba(255, 255, 255, 0.78), rgba(0, 163, 224, 0.14) 42%, rgba(167, 75, 148, 0.12)),
                linear-gradient(90deg, rgba(0, 163, 224, 0.16) 1px, transparent 1px),
                linear-gradient(rgba(15, 23, 42, 0.08) 1px, transparent 1px);
            background-size: auto, 32px 32px, 32px 32px;
            box-shadow:
                -22px 28px 0 rgba(0, 163, 224, 0.09),
                24px -18px 0 rgba(167, 75, 148, 0.08),
                0 34px 80px rgba(15, 23, 42, 0.12);
            transform: perspective(900px) rotateX(58deg) rotateZ(-24deg);
            opacity: 0.86;
        }

        /* Premium Glassmorphism Utilities */
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.1);
        }
        
        .glass-nav {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Spotlight Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 1rem;
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .glass-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: inherit;
            padding: 2px;
            background: linear-gradient(
                135deg,
                rgba(45, 212, 191, 0.4), /* Teal */
                rgba(139, 92, 246, 0.4) /* Violet */
            );
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .glass-card:hover {
            transform: perspective(900px) rotateX(2deg) rotateY(-2deg) translateY(-8px);
            box-shadow: 0 24px 50px -14px rgba(15, 23, 42, 0.18), 0 12px 30px -18px rgba(0, 163, 224, 0.3);
        }

        .glass-card:hover::before {
            opacity: 1;
        }

        /* Spotlight mouse effect added via JS */
        .glass-card.spotlight::after {
            content: "";
            position: absolute;
            top: var(--y);
            left: var(--x);
            transform: translate(-50%, -50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0,0,0,0.03) 0%, transparent 70%);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .glass-card:hover::after {
            opacity: 1;
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(135deg, #2dd4bf, #8b5cf6, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-primary {
            background: linear-gradient(to right, #2dd4bf, #0d9488);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Marquee */
        .marquee-container {
            display: flex;
            overflow: hidden;
            user-select: none;
            mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
        }
        .marquee-content {
            display: flex;
            flex-shrink: 0;
            justify-content: space-around;
            min-width: 100%;
            gap: 3rem;
            animation: scroll 25s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
        
        /* Utility */
        .min-h-screen-content {
            min-height: calc(100vh - 400px);
        }

        @media (max-width: 767px) {
            #site-ambient-3d {
                display: none;
            }

            .ambient-depth-plane {
                width: 90vw;
                height: 90vw;
                transform: translate(42%, 22%) rotateX(64deg) rotateZ(-18deg);
                opacity: 0.18;
            }

            main > section::after {
                width: 5.5rem;
                height: 5.5rem;
                right: 1rem;
                opacity: 0.32;
            }

            main > section:first-child::before {
                top: 6rem;
                right: -3rem;
                width: 14rem;
                height: 14rem;
                opacity: 0.28;
            }
        }
    </style>
</head>
<body>

    <canvas id="site-ambient-3d" aria-hidden="true"></canvas>
    <div class="ambient-depth-plane" aria-hidden="true"></div>

    <!-- Main Content Layer -->
    <div id="content-layer">

        <!-- Navigation -->
        <header class="fixed top-0 w-full glass-nav z-50 transition-all duration-300 py-4">
            <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-10 h-10 object-contain transition-transform group-hover:scale-105 bg-white rounded-full p-1 shadow-sm">
                    <div>
                        <span class="text-xl font-bold tracking-tight text-slate-800">Track Tech <span class="text-primary-500">Solution</span></span>
                    </div>
                </a>
                
                <nav class="hidden md:flex gap-8 items-center text-sm font-medium">
                    <a href="/products" class="text-slate-900 hover:text-primary-600 transition-colors">Products</a>
                    <a href="/industries" class="text-slate-900 hover:text-primary-600 transition-colors">Business Stories</a>
                    <a href="/about" class="text-slate-900 hover:text-primary-600 transition-colors">Company</a>
                    <a href="/resources" class="text-slate-900 hover:text-primary-600 transition-colors">Resources</a>
                    <a href="/contact" class="text-slate-900 hover:text-primary-600 transition-colors">Contact Us</a>
                </nav>

                <div class="hidden md:block">
                    <a href="/contact" class="bg-primary-500 hover:bg-primary-400 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-primary-500/20 hover:shadow-primary-500/40 text-sm">
                        Book Demo
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-btn" class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-lg hover:bg-slate-100 transition" aria-label="Menu">
                    <span class="block w-6 h-0.5 bg-slate-800 transition-all" id="bar1"></span>
                    <span class="block w-6 h-0.5 bg-slate-800 transition-all" id="bar2"></span>
                    <span class="block w-4 h-0.5 bg-slate-800 transition-all ml-auto" id="bar3"></span>
                </button>
            </div>

            <!-- Mobile Menu Panel -->
            <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-xl border-t border-slate-200 shadow-xl">
                <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col gap-4">
                    <a href="/products" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Products</a>
                    <a href="/industries" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Business Stories</a>
                    <a href="/about" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Company</a>
                    <a href="/resources" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Resources</a>
                    <a href="/contact" class="text-slate-800 font-medium py-3 border-b border-slate-100 hover:text-primary-500 transition">Contact Us</a>
                    <a href="/contact" class="mt-2 bg-primary-500 text-white text-center px-6 py-3 rounded-full font-medium shadow-lg">
                        Book Demo
                    </a>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="min-h-screen-content pt-20">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white/80 backdrop-blur-md border-t border-slate-200 pt-20 pb-10 mt-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-16">
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-8 h-8 object-contain bg-white rounded-full p-1 shadow-sm">
                            <span class="font-bold text-lg text-slate-800">Track Tech <span class="text-primary-500">Solution</span></span>
                        </div>
                        <p class="text-slate-800 text-sm leading-relaxed mb-6">
                            From planning to production, data to decisions, seamlessly connect your entire operation. Boost efficiency, reduce waste, and achieve sustainability.
                        </p>
                        <div class="flex flex-col gap-2 text-sm text-slate-800">
                            <a href="mailto:sales@tracktechsolutions.com" class="hover:text-primary-600">sales@tracktechsolutions.com</a>
                            <a href="tel:+919650613666" class="hover:text-primary-600">+91 96506 13666</a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Company</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/about" class="hover:text-primary-600">About Us</a></li>
                            <li><a href="/contact" class="hover:text-primary-600">Contact Us</a></li>
                            <li><a href="/contact" class="hover:text-primary-600">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Products</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/solutions" class="hover:text-primary-600">Quality Control</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Tracking</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Machine Maintenance</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Planning</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Resources</h4>
                        <ul class="space-y-3 text-sm text-slate-800">
                            <li><a href="/resources" class="hover:text-primary-600">Success Stories</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">FAQ</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-400">
                    <p>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="/about" class="hover:text-slate-900">Privacy Policy</a>
                        <a href="/about" class="hover:text-slate-900">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- Shared UI Setup -->
    <script>
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 700,
                once: true,
                offset: 80,
                disable: function () {
                    return window.innerWidth < 768;
                },
            });
        }

        (function() {
            var menuBtn = document.getElementById('mobile-menu-btn');
            var mobileMenu = document.getElementById('mobile-menu');
            if (menuBtn && mobileMenu) {
                menuBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        })();

        document.querySelectorAll('.glass-card').forEach(card => {
            card.classList.add('spotlight');
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--x', `${x}px`);
                card.style.setProperty('--y', `${y}px`);
            });
        });

        (function () {
            var canvas = document.getElementById('site-ambient-3d');
            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var isSmallScreen = window.innerWidth < 768;
            if (!canvas || typeof THREE === 'undefined' || reduceMotion || isSmallScreen) {
                return;
            }

            var scene = new THREE.Scene();
            var camera = new THREE.PerspectiveCamera(42, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.set(0, 4, 13);

            var renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.5));
            renderer.setSize(window.innerWidth, window.innerHeight);

            scene.add(new THREE.AmbientLight(0xffffff, 0.75));
            var light = new THREE.DirectionalLight(0xffffff, 1);
            light.position.set(4, 7, 6);
            scene.add(light);

            var group = new THREE.Group();
            group.position.set(3.2, -0.25, 0);
            scene.add(group);

            var colors = [0x00a3e0, 0xa74b94, 0x22c55e, 0xf8fafc];
            for (var i = 0; i < 18; i++) {
                var geometry = i % 3 === 0
                    ? new THREE.BoxGeometry(0.7, 0.32, 0.56)
                    : new THREE.IcosahedronGeometry(0.28, 0);
                var material = new THREE.MeshStandardMaterial({
                    color: colors[i % colors.length],
                    roughness: 0.48,
                    metalness: 0.08,
                    transparent: true,
                    opacity: i % 3 === 0 ? 0.62 : 0.72
                });
                var mesh = new THREE.Mesh(geometry, material);
                mesh.position.set((i % 6) * 1.15 - 3.3, Math.floor(i / 6) * 1.05 - 1.1, (i % 2) * -1.4);
                mesh.rotation.set(i * 0.21, i * 0.17, i * 0.09);
                group.add(mesh);
            }

            var grid = new THREE.GridHelper(10, 10, 0x00a3e0, 0xcbd5e1);
            grid.position.y = -1.7;
            grid.material.transparent = true;
            grid.material.opacity = 0.22;
            group.add(grid);

            function resize() {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            }

            function animate(time) {
                requestAnimationFrame(animate);
                group.rotation.y = Math.sin(time * 0.00024) * 0.22 - 0.22;
                group.rotation.x = Math.sin(time * 0.00018) * 0.08;
                group.children.forEach(function (child, index) {
                    if (child.isMesh) {
                        child.position.y += Math.sin(time * 0.001 + index) * 0.0009;
                        child.rotation.y += 0.002;
                    }
                });
                camera.lookAt(0, 0, 0);
                renderer.render(scene, camera);
            }

            window.addEventListener('resize', resize);
            requestAnimationFrame(animate);
        })();
    </script>

    <!-- SweetAlert2 for beautiful form notifications -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
            Swal.fire({
                title: '✅ Message Sent!',
                text: @json(session('success')),
                icon: 'success',
                confirmButtonText: 'Great!',
                confirmButtonColor: '#0ea5e9',
                background: '#ffffff',
                color: '#1e293b',
                iconColor: '#22c55e',
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
            @endif

            @if($errors->any())
            var errorMessages = @json($errors->all());
            Swal.fire({
                title: 'Please fix these errors',
                html: errorMessages.map(function(e){ return '• ' + e; }).join('<br>'),
                icon: 'error',
                confirmButtonText: 'Try Again',
                confirmButtonColor: '#0ea5e9',
                background: '#ffffff',
                color: '#1e293b',
            });
            @endif
        });
    </script>
    @stack('scripts')
</body>
</html>
