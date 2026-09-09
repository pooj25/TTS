<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Track Tech Solution - The Missing Piece in Your Production Puzzle')</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        sky: {
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
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

    <style>
        body {
            margin: 0;
            background-color: #030712;
            color: #ffffff;
            overflow-x: hidden;
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

        /* Glassmorphism Utilities */
        .glass-panel {
            background: rgba(17, 24, 39, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        
        .glass-nav {
            background: rgba(3, 7, 18, 0.7);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .glass-card {
            background: linear-gradient(145deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.01) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
            transition: all 0.4s ease;
        }

        .glass-card:hover {
            border-color: rgba(14, 165, 233, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px -10px rgba(14, 165, 233, 0.3);
            background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%);
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(to right, #38bdf8, #818cf8, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .text-gradient-blue {
            background: linear-gradient(to right, #38bdf8, #2563eb);
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
                    <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-10 h-10 object-contain transition-transform group-hover:scale-105 bg-white rounded-full p-1">
                    <div>
                        <span class="text-xl font-bold tracking-tight text-white">Track Tech <span class="text-sky-400">Solution</span></span>
                    </div>
                </a>
                
                <nav class="hidden md:flex gap-8 items-center text-sm font-medium">
                    <a href="/products" class="text-gray-300 hover:text-white transition-colors">Products</a>
                    <a href="/industries" class="text-gray-300 hover:text-white transition-colors">Business Stories</a>
                    <a href="/about" class="text-gray-300 hover:text-white transition-colors">Company</a>
                    <a href="/resources" class="text-gray-300 hover:text-white transition-colors">Resources</a>
                    <a href="/contact" class="text-gray-300 hover:text-white transition-colors">Contact Us</a>
                </nav>

                <div class="hidden md:block">
                    <a href="/contact" class="bg-sky-500 hover:bg-sky-400 text-white px-6 py-2.5 rounded-full font-medium transition-all shadow-lg shadow-sky-500/20 hover:shadow-sky-500/40 text-sm">
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
        <footer class="bg-[#030712]/90 backdrop-blur-sm border-t border-white/10 pt-20 pb-10 mt-20">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-4 gap-12 mb-16">
                    <div class="md:col-span-1">
                        <div class="flex items-center gap-3 mb-6">
                            <img src="{{ asset('images/logo.png') }}" alt="Track Tech Solution Logo" class="w-8 h-8 object-contain bg-white rounded-full p-1">
                            <span class="font-bold text-lg">Track Tech <span class="text-sky-400">Solution</span></span>
                        </div>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6">
                            From planning to production, data to decisions, seamlessly connect your entire operation. Boost efficiency, reduce waste, and achieve sustainability.
                        </p>
                        <div class="flex flex-col gap-2 text-sm text-gray-400">
                            <a href="mailto:sales@tracktechsolutions.com" class="hover:text-white">sales@tracktechsolutions.com</a>
                            <a href="tel:+919650613666" class="hover:text-white">+91 96506 13666</a>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="font-semibold mb-6">Company</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="/about" class="hover:text-sky-400">About Us</a></li>
                            <li><a href="/contact" class="hover:text-sky-400">Contact Us</a></li>
                            <li><a href="#" class="hover:text-sky-400">Careers</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-6">Products</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="/solutions" class="hover:text-sky-400">Quality Control</a></li>
                            <li><a href="/solutions" class="hover:text-sky-400">Production Tracking</a></li>
                            <li><a href="/solutions" class="hover:text-sky-400">Machine Maintenance</a></li>
                            <li><a href="/solutions" class="hover:text-sky-400">Production Planning</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-6">Resources</h4>
                        <ul class="space-y-3 text-sm text-gray-400">
                            <li><a href="/resources" class="hover:text-sky-400">Success Stories</a></li>
                            <li><a href="/resources" class="hover:text-sky-400">FAQ</a></li>
                            <li><a href="/resources" class="hover:text-sky-400">Blog</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                    <p>&copy; {{ date('Y') }} Track Tech Solution. All rights reserved.</p>
                    <div class="flex gap-6">
                        <a href="#" class="hover:text-white">Privacy Policy</a>
                        <a href="#" class="hover:text-white">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- 3D Logic -->
    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Scene Setup
        const container = document.getElementById('webgl-container');
        const scene = new THREE.Scene();
        scene.fog = new THREE.FogExp2(0x030712, 0.025);

        // Camera
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 30;
        camera.position.y = 10;
        camera.position.x = 0;

        // Renderer
        const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        container.appendChild(renderer.domElement);

        // Main Group
        const factoryGroup = new THREE.Group();
        scene.add(factoryGroup);

        // 1. Core Grid Floor
        const gridHelper = new THREE.GridHelper(150, 75, 0x0ea5e9, 0x1e293b);
        gridHelper.position.y = -10;
        gridHelper.material.opacity = 0.2;
        gridHelper.material.transparent = true;
        scene.add(gridHelper);

        // 2. Data Nodes (Particles)
        const particlesCount = 2000;
        const positions = new Float32Array(particlesCount * 3);
        const colors = new Float32Array(particlesCount * 3);

        const colorPalette = [
            new THREE.Color(0x38bdf8), // Sky
            new THREE.Color(0x818cf8), // Indigo
            new THREE.Color(0xc084fc), // Purple
            new THREE.Color(0xffffff)  // White
        ];

        for(let i = 0; i < particlesCount * 3; i+=3) {
            positions[i] = (Math.random() - 0.5) * 100;
            positions[i+1] = (Math.random() - 0.5) * 60 + 10;
            positions[i+2] = (Math.random() - 0.5) * 80;

            const color = colorPalette[Math.floor(Math.random() * colorPalette.length)];
            colors[i] = color.r;
            colors[i+1] = color.g;
            colors[i+2] = color.b;
        }

        const particleGeo = new THREE.BufferGeometry();
        particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        particleGeo.setAttribute('color', new THREE.BufferAttribute(colors, 3));

        // Create a glow texture for particles
        const canvas = document.createElement('canvas');
        canvas.width = 16;
        canvas.height = 16;
        const context = canvas.getContext('2d');
        const gradient = context.createRadialGradient(8, 8, 0, 8, 8, 8);
        gradient.addColorStop(0, 'rgba(255,255,255,1)');
        gradient.addColorStop(1, 'rgba(255,255,255,0)');
        context.fillStyle = gradient;
        context.fillRect(0, 0, 16, 16);
        const texture = new THREE.CanvasTexture(canvas);

        const particleMat = new THREE.PointsMaterial({
            size: 0.8,
            vertexColors: true,
            map: texture,
            transparent: true,
            opacity: 0.8,
            blending: THREE.AdditiveBlending,
            depthWrite: false
        });

        const particles = new THREE.Points(particleGeo, particleMat);
        factoryGroup.add(particles);

        // 3. Connective Lines (Network)
        const lineGeo = new THREE.BufferGeometry();
        const linePos = [];
        for(let i=0; i<300; i++) {
            const idx1 = Math.floor(Math.random() * particlesCount) * 3;
            const idx2 = Math.floor(Math.random() * particlesCount) * 3;
            
            // Only connect if they are relatively close
            const dist = Math.sqrt(
                Math.pow(positions[idx1] - positions[idx2], 2) +
                Math.pow(positions[idx1+1] - positions[idx2+1], 2) +
                Math.pow(positions[idx1+2] - positions[idx2+2], 2)
            );

            if(dist < 20) {
                linePos.push(
                    positions[idx1], positions[idx1+1], positions[idx1+2],
                    positions[idx2], positions[idx2+1], positions[idx2+2]
                );
            }
        }
        lineGeo.setAttribute('position', new THREE.Float32BufferAttribute(linePos, 3));
        const lineMat = new THREE.LineBasicMaterial({
            color: 0x38bdf8,
            transparent: true,
            opacity: 0.15,
            blending: THREE.AdditiveBlending
        });
        const lines = new THREE.LineSegments(lineGeo, lineMat);
        factoryGroup.add(lines);

        // 4. Floating geometric shapes (Machines/Servers)
        const shapes = [];
        const shapeGeo = new THREE.IcosahedronGeometry(1.5, 0);
        const shapeMat = new THREE.MeshBasicMaterial({
            color: 0x0ea5e9,
            wireframe: true,
            transparent: true,
            opacity: 0.3
        });

        for(let i=0; i<15; i++) {
            const mesh = new THREE.Mesh(shapeGeo, shapeMat);
            mesh.position.set(
                (Math.random() - 0.5) * 60,
                (Math.random() - 0.5) * 30 + 5,
                (Math.random() - 0.5) * 40
            );
            mesh.userData = {
                rotSpeedX: (Math.random() - 0.5) * 0.02,
                rotSpeedY: (Math.random() - 0.5) * 0.02,
                floatOffset: Math.random() * Math.PI * 2
            };
            factoryGroup.add(mesh);
            shapes.push(mesh);
        }

        // Scroll Animations using GSAP
        // We will move the camera and rotate the group based on scroll position
        
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1
            }
        });

        // Rotate scene globally as we scroll
        tl.to(factoryGroup.rotation, {
            y: Math.PI * 1.5,
            x: Math.PI * 0.1,
            ease: "none"
        }, 0);

        // Move camera closer and down
        tl.to(camera.position, {
            z: 15,
            y: 5,
            ease: "power1.inOut"
        }, 0);


        // Mouse Interaction
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;
        const windowHalfX = window.innerWidth / 2;
        const windowHalfY = window.innerHeight / 2;

        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX - windowHalfX);
            mouseY = (event.clientY - windowHalfY);
        });

        // Animation Loop
        const clock = new THREE.Clock();

        function animate() {
            requestAnimationFrame(animate);
            const time = clock.getElapsedTime();

            // Smooth mouse follow
            targetX = mouseX * 0.001;
            targetY = mouseY * 0.001;
            
            // Add subtle sway to the whole group based on mouse
            factoryGroup.rotation.y += 0.001; // Constant slow spin
            camera.position.x += (mouseX * 0.02 - camera.position.x) * 0.05;
            camera.position.y += (-mouseY * 0.02 - (camera.position.y - 10)) * 0.05;
            camera.lookAt(scene.position);

            // Animate floating shapes
            shapes.forEach(shape => {
                shape.rotation.x += shape.userData.rotSpeedX;
                shape.rotation.y += shape.userData.rotSpeedY;
                shape.position.y += Math.sin(time * 2 + shape.userData.floatOffset) * 0.01;
            });

            // Wavy particles
            const positions = particles.geometry.attributes.position.array;
            for(let i = 0; i < particlesCount; i++) {
                const i3 = i * 3;
                positions[i3 + 1] += Math.sin(time + positions[i3]*0.1) * 0.02;
            }
            particles.geometry.attributes.position.needsUpdate = true;

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
