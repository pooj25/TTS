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
                            400: '#2dd4bf', // Teal 400
                            500: '#14b8a6', // Teal 500
                            600: '#0d9488', // Teal 600
                        },
                        accent: {
                            400: '#a78bfa', // Violet 400
                            500: '#8b5cf6', // Violet 500
                            600: '#7c3aed', // Violet 600
                        },
                        dark: {
                            800: '#171329', // Deep space
                            900: '#0f0e17', // Obsidian
                            950: '#07070a', // Ultra dark
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

    <style>
        body {
            margin: 0;
            background-color: #f8fafc; /* Light Slate */
            color: #0f172a; /* Dark text */
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }

        /* 3D Background Container */
        #webgl-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 0;
            pointer-events: none;
        }

        /* Content Overlay Layer */
        #content-layer {
            position: relative;
            z-index: 10;
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
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -10px rgba(45, 212, 191, 0.15);
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
    </style>
</head>
<body>

    <!-- 3D Canvas Background -->
    <div id="webgl-container"></div>

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
                    <a href="/products" class="text-slate-600 hover:text-primary-600 transition-colors">Products</a>
                    <a href="/industries" class="text-slate-600 hover:text-primary-600 transition-colors">Business Stories</a>
                    <a href="/about" class="text-slate-600 hover:text-primary-600 transition-colors">Company</a>
                    <a href="/resources" class="text-slate-600 hover:text-primary-600 transition-colors">Resources</a>
                    <a href="/contact" class="text-slate-600 hover:text-primary-600 transition-colors">Contact Us</a>
                </nav>

                <div class="hidden md:block">
                    <a href="/contact" class="bg-primary-500 hover:bg-primary-400 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-primary-500/20 hover:shadow-primary-500/40 text-sm">
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
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            From planning to production, data to decisions, seamlessly connect your entire operation. Boost efficiency, reduce waste, and achieve sustainability.
                        </p>
                        <div class="flex flex-col gap-2 text-sm text-slate-500">
                            <a href="mailto:sales@tracktechsolutions.com" class="hover:text-primary-600">sales@tracktechsolutions.com</a>
                            <a href="tel:+919650613666" class="hover:text-primary-600">+91 96506 13666</a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Company</h4>
                        <ul class="space-y-3 text-sm text-slate-500">
                            <li><a href="/about" class="hover:text-primary-600">About Us</a></li>
                            <li><a href="/contact" class="hover:text-primary-600">Contact Us</a></li>
                            <li><a href="#" class="hover:text-primary-600">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Products</h4>
                        <ul class="space-y-3 text-sm text-slate-500">
                            <li><a href="/solutions" class="hover:text-primary-600">Quality Control</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Tracking</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Machine Maintenance</a></li>
                            <li><a href="/solutions" class="hover:text-primary-600">Production Planning</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold text-slate-800 mb-6">Resources</h4>
                        <ul class="space-y-3 text-sm text-slate-500">
                            <li><a href="/resources" class="hover:text-primary-600">Success Stories</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">FAQ</a></li>
                            <li><a href="/resources" class="hover:text-primary-600">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-400">
                    <p>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-slate-600">Privacy Policy</a>
                        <a href="#" class="hover:text-slate-600">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- 3D Logic & Spotlight Setup -->
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
        });

        // Initialize Spotlight Cards
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

        gsap.registerPlugin(ScrollTrigger);

        // Scene Setup
        const container = document.getElementById('webgl-container');
        const scene = new THREE.Scene();
        scene.fog = new THREE.FogExp2(0xf8fafc, 0.02); // Light fog

        // Camera
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 40;
        camera.position.y = 15;
        camera.position.x = 0;

        // Renderer
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Main Tech Group
        const techGroup = new THREE.Group();
        scene.add(techGroup);

        // 1. Digital Grid Floor
        const gridHelper = new THREE.GridHelper(200, 100, 0x14b8a6, 0xe2e8f0); // Teal and Light Slate
        gridHelper.position.y = -15;
        gridHelper.material.opacity = 0.3;
        gridHelper.material.transparent = true;
        scene.add(gridHelper);

        // 2. Data Constellation (Nodes)
        const particlesCount = 800; // Less particles but connected for premium feel
        const positions = new Float32Array(particlesCount * 3);
        const colors = new Float32Array(particlesCount * 3);
        const velocities = [];

        const colorPalette = [
            new THREE.Color(0x2dd4bf), // Teal
            new THREE.Color(0x8b5cf6), // Violet
            new THREE.Color(0xc084fc), // Light Purple
            new THREE.Color(0x0f172a)  // Slate Dark
        ];

        for(let i = 0; i < particlesCount; i++) {
            const i3 = i * 3;
            // Sphere distribution
            const radius = 60;
            const theta = Math.random() * 2 * Math.PI;
            const phi = Math.acos(2 * Math.random() - 1);
            
            positions[i3] = radius * Math.sin(phi) * Math.cos(theta);
            positions[i3+1] = radius * Math.sin(phi) * Math.sin(theta) + 5;
            positions[i3+2] = radius * Math.cos(phi) - 20;

            const color = colorPalette[Math.floor(Math.random() * colorPalette.length)];
            colors[i3] = color.r;
            colors[i3+1] = color.g;
            colors[i3+2] = color.b;

            // Slow drift velocity
            velocities.push({
                x: (Math.random() - 0.5) * 0.05,
                y: (Math.random() - 0.5) * 0.05,
                z: (Math.random() - 0.5) * 0.05
            });
        }

        const particleGeo = new THREE.BufferGeometry();
        particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particleGeo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

        // Circular soft texture
        const canvas = document.createElement('canvas');
        canvas.width = 32;
        canvas.height = 32;
        const context = canvas.getContext('2d');
        const gradient = context.createRadialGradient(16, 16, 0, 16, 16, 16);
        gradient.addColorStop(0, 'rgba(255,255,255,1)');
        gradient.addColorStop(0.2, 'rgba(255,255,255,0.8)');
        gradient.addColorStop(1, 'rgba(255,255,255,0)');
        context.fillStyle = gradient;
        context.fillRect(0, 0, 32, 32);
        const texture = new THREE.CanvasTexture(canvas);

        const particleMat = new THREE.PointsMaterial({
            size: 1.2,
            vertexColors: true,
            map: texture,
            transparent: true,
            opacity: 0.9,
            blending: THREE.AdditiveBlending,
            depthWrite: false
        });

        const particles = new THREE.Points(particleGeo, particleMat);
        techGroup.add(particles);

        // 3. Connective Lines (Data Network)
        const maxConnections = 1200;
        const lineGeo = new THREE.BufferGeometry();
        // preallocate arrays
        const linePos = new Float32Array(maxConnections * 6);
        const lineOpacities = new Float32Array(maxConnections * 2);
        
        lineGeo.setAttribute('position', new THREE.BufferAttribute(linePos, 3));
        lineGeo.setAttribute('color', new THREE.BufferAttribute(new Float32Array(maxConnections * 6).fill(1), 3)); // Will override with shader if needed, but basic line is fine

        const lineMat = new THREE.LineBasicMaterial({
            color: 0x14b8a6, // Teal lines
            transparent: true,
            opacity: 0.15,
            blending: THREE.AdditiveBlending
        });
        const linesMesh = new THREE.LineSegments(lineGeo, lineMat);
        techGroup.add(linesMesh);

        // Scroll Animations using GSAP
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1.5 // Smooth scrub
            }
        });

        // Rotate scene globally as we scroll
        tl.to(techGroup.rotation, {
            y: Math.PI * 1.2,
            x: Math.PI * 0.05,
            ease: "none"
        }, 0);

        // Move camera closer
        tl.to(camera.position, {
            z: 20,
            y: 5,
            ease: "power2.inOut"
        }, 0);

        // Mouse Interaction
        let mouseX = 0;
        let mouseY = 0;
        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - windowHalfX);
            mouseY = (event.clientY - windowHalfY);
        });

        // Animation Loop
        function animate() {
            requestAnimationFrame(animate);

            // Smooth mouse follow (Parallax)
            techGroup.rotation.y += 0.0005; // Constant slow spin
            camera.position.x += (mouseX * 0.015 - camera.position.x) * 0.05;
            camera.position.y += (-mouseY * 0.015 - (camera.position.y - 15)) * 0.05;
            camera.lookAt(scene.position);

            // Animate particles (Drift)
            const posArray = particles.geometry.attributes.position.array;
            
            // Recompute lines dynamically
            let lineIdx = 0;
            
            for(let i = 0; i < particlesCount; i++) {
                const i3 = i * 3;
                
                // Move particle
                posArray[i3] += velocities[i].x;
                posArray[i3+1] += velocities[i].y;
                posArray[i3+2] += velocities[i].z;

                // Bounce off invisible sphere boundary
                const dist = Math.sqrt(posArray[i3]**2 + posArray[i3+1]**2 + posArray[i3+2]**2);
                if (dist > 80) {
                    velocities[i].x *= -1;
                    velocities[i].y *= -1;
                    velocities[i].z *= -1;
                }

                // Connect lines to nearby particles
                for (let j = i + 1; j < particlesCount; j++) {
                    const j3 = j * 3;
                    const dx = posArray[i3] - posArray[j3];
                    const dy = posArray[i3+1] - posArray[j3+1];
                    const dz = posArray[i3+2] - posArray[j3+2];
                    const distSq = dx*dx + dy*dy + dz*dz;

                    if (distSq < 150 && lineIdx < maxConnections * 6) { // Distance threshold for connection
                        linePos[lineIdx++] = posArray[i3];
                        linePos[lineIdx++] = posArray[i3+1];
                        linePos[lineIdx++] = posArray[i3+2];
                        linePos[lineIdx++] = posArray[j3];
                        linePos[lineIdx++] = posArray[j3+1];
                        linePos[lineIdx++] = posArray[j3+2];
                    }
                }
            }
            
            // Clear remaining line positions
            while(lineIdx < maxConnections * 6) {
                linePos[lineIdx++] = 0;
            }

            particles.geometry.attributes.position.needsUpdate = true;
            linesMesh.geometry.attributes.position.needsUpdate = true;

            renderer.render(scene, camera);
        }

        animate();

        // Resize
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

    </script>
</body>
</html>
