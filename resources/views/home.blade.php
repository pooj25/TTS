@extends('layouts.app')

@section('title', 'Track Tech Solutions - 3D Smart Factory Platform')

@section('content')

@php
    $platformCards = [
        ['title' => 'Plan', 'copy' => 'Style, order and line priorities stay visible before the shift starts.', 'tone' => 'bg-cyan-50 text-primary-700'],
        ['title' => 'Move', 'copy' => 'Bundles travel from fabric to sewing with live ownership at each step.', 'tone' => 'bg-fuchsia-50 text-accent-700'],
        ['title' => 'Improve', 'copy' => 'Defects, delays and downtime become clear actions for supervisors.', 'tone' => 'bg-emerald-50 text-emerald-700'],
    ];

    $products = [
        ['name' => 'Fabric Control', 'copy' => 'Track rolls, relaxation, inspection and consumption with fewer stock surprises.', 'metric' => 'Material visibility'],
        ['name' => 'Cutting Flow', 'copy' => 'Convert lays and bundles into a clear release plan for sewing lines.', 'metric' => 'Faster handoff'],
        ['name' => 'Line Tracking', 'copy' => 'See output, WIP and bottlenecks during the shift, not after it.', 'metric' => 'Higher OEE'],
        ['name' => 'Quality Loop', 'copy' => 'Capture defects at source and close repeat issues before rework grows.', 'metric' => 'Lower defects'],
    ];

    $process = [
        ['01', 'Map the factory', 'Create the digital twin of lines, departments and production movement.'],
        ['02', 'Connect every event', 'Capture output, defects, WIP movement and downtime from the floor.'],
        ['03', 'Prioritise action', 'Show supervisors where to intervene first to protect the target.'],
        ['04', 'Measure savings', 'Translate recovered output and reduced rework into payback numbers.'],
    ];

    $workflowSteps = [
        ['Fabric', 'Rolls inspected and allocated'],
        ['Cutting', 'Bundles released to line'],
        ['Sewing', 'Output and WIP captured'],
        ['Quality', 'Defects closed at source'],
        ['Packing', 'Shipment readiness confirmed'],
    ];
@endphp

<section class="relative isolate min-h-[calc(100vh-5rem)] overflow-hidden bg-[#08111f] text-white">
    <canvas id="hero-factory-3d" class="absolute inset-0 h-full w-full"></canvas>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_72%_45%,rgba(0,163,224,0.24),transparent_32%),linear-gradient(90deg,#08111f_0%,rgba(8,17,31,0.92)_40%,rgba(8,17,31,0.35)_100%)]"></div>
    <div class="absolute inset-x-0 bottom-0 h-28 bg-gradient-to-t from-white to-transparent"></div>

    <div class="relative z-10 mx-auto grid min-h-[calc(100vh-5rem)] max-w-7xl items-center gap-12 px-6 py-24 lg:grid-cols-[0.92fr_1.08fr] lg:px-8">
        <div data-aos="fade-up">
            <p class="inline-flex rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-bold uppercase tracking-widest text-cyan-100 backdrop-blur">
                Interactive 3D Factory OS
            </p>
            <h1 class="mt-7 max-w-4xl text-4xl font-black leading-tight tracking-tight sm:text-6xl lg:text-7xl">
                A smarter way to run every apparel line.
            </h1>
            <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-200 sm:text-xl">
                Track Tech turns your factory into a live digital twin where orders, output, defects and savings are easy to see, act on and improve.
            </p>
            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="/contact" class="inline-flex items-center justify-center rounded-lg bg-primary-500 px-8 py-4 text-base font-black text-white shadow-xl shadow-primary-500/30 transition hover:-translate-y-0.5 hover:bg-primary-600">
                    Book a Demo
                </a>
                <a href="#platform" class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/10 px-8 py-4 text-base font-bold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20">
                    See the Platform
                </a>
            </div>
        </div>

        <div class="relative hidden min-h-[520px] lg:block" aria-hidden="true">
            <div class="absolute right-0 top-16 w-72 rounded-lg border border-white/15 bg-white/10 p-5 shadow-2xl backdrop-blur" data-aos="fade-left" data-aos-delay="150">
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-200">Live signal</p>
                <p class="mt-3 text-3xl font-black">Line 07</p>
                <div class="mt-4 h-2 rounded-full bg-white/15">
                    <div class="h-2 w-[78%] rounded-full bg-primary-400"></div>
                </div>
                <p class="mt-3 text-sm text-slate-200">OEE recovery tracking against the shift target.</p>
            </div>
            <div class="absolute bottom-20 left-8 w-80 rounded-lg border border-white/15 bg-white/10 p-5 shadow-2xl backdrop-blur" data-aos="fade-right" data-aos-delay="250">
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-200">Quality event</p>
                <p class="mt-3 text-xl font-black">Repeat sleeve defect detected</p>
                <p class="mt-3 text-sm text-slate-200">Root cause routed to the supervisor before final checking.</p>
            </div>
        </div>
    </div>
</section>

<section id="platform" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
            <div data-aos="fade-up">
                <p class="text-sm font-black uppercase tracking-widest text-primary-600">One Platform</p>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-5xl">
                    Built for teams that need decisions during the shift.
                </h2>
            </div>
            <p class="text-lg leading-8 text-slate-600" data-aos="fade-up" data-aos-delay="100">
                Inspired by modern work platforms, but designed specifically for apparel factories: fewer dashboards, clearer ownership and actions that protect production targets.
            </p>
        </div>

        <div class="mt-12 grid gap-5 md:grid-cols-3">
            @foreach ($platformCards as $card)
                <article class="rounded-lg border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-xl" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="inline-flex rounded-lg px-3 py-2 text-sm font-black {{ $card['tone'] }}">{{ $card['title'] }}</div>
                    <p class="mt-5 text-base leading-7 text-slate-600">{{ $card['copy'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-slate-950 py-20 text-white">
    <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[0.82fr_1.18fr] lg:px-8">
        <div data-aos="fade-right">
            <p class="text-sm font-black uppercase tracking-widest text-cyan-300">Operating Model</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
                From floor event to business outcome.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-300">
                The page now uses event animation with a purpose: every transition explains how factory work moves, where losses appear and what action comes next.
            </p>
        </div>

        <div class="grid gap-4">
            @foreach ($process as $item)
                <article class="grid gap-4 rounded-lg border border-white/10 bg-white/[0.06] p-5 backdrop-blur transition hover:border-cyan-300/50 hover:bg-white/[0.09] sm:grid-cols-[5rem_1fr]" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <p class="text-3xl font-black text-cyan-300">{{ $item[0] }}</p>
                    <div>
                        <h3 class="text-xl font-black">{{ $item[1] }}</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-300">{{ $item[2] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="products" class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <p class="text-sm font-black uppercase tracking-widest text-primary-600">Products</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-5xl">
                Clean product modules with clear business benefits.
            </h2>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($products as $product)
                <article class="group rounded-lg border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:border-primary-400 hover:shadow-xl" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <p class="text-xs font-black uppercase tracking-widest text-accent-600">{{ $product['metric'] }}</p>
                    <h3 class="mt-5 text-2xl font-black text-slate-950">{{ $product['name'] }}</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">{{ $product['copy'] }}</p>
                    <div class="mt-6 h-1.5 rounded-full bg-slate-100">
                        <div class="h-1.5 w-2/3 rounded-full bg-primary-500 transition group-hover:w-full"></div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="workflow" class="bg-white py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
        <div data-aos="fade-right">
            <p class="text-sm font-black uppercase tracking-widest text-primary-600">3D Workflow</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-5xl">
                Click a step and watch the order move through the factory.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-600">
                The digital twin focuses on one order flow at a time so the interaction stays understandable on desktop and mobile.
            </p>
            <div class="mt-8 grid gap-3">
                @foreach ($workflowSteps as $step)
                    <button type="button" class="workflow-step flex items-center justify-between gap-4 rounded-lg border border-slate-300 bg-white px-5 py-4 text-left font-bold text-slate-800 shadow-sm transition hover:border-primary-500 hover:text-primary-700" data-step="{{ $loop->index }}">
                        <span>{{ $loop->iteration }}. {{ $step[0] }}</span>
                        <span class="text-sm font-medium text-slate-500">{{ $step[1] }}</span>
                    </button>
                @endforeach
            </div>
        </div>

        <div class="relative overflow-hidden rounded-lg border border-slate-200 bg-slate-950 shadow-2xl" data-aos="fade-left">
            <canvas id="factory-twin" class="block h-[430px] w-full sm:h-[540px]"></canvas>
            <div class="absolute left-5 top-5 rounded-lg border border-white/15 bg-white/90 p-4 shadow-xl backdrop-blur">
                <p class="text-xs font-black uppercase tracking-widest text-primary-600">Current station</p>
                <p id="workflow-label" class="mt-1 text-lg font-black text-slate-950">Fabric</p>
                <p id="workflow-copy" class="mt-1 max-w-xs text-sm text-slate-600">Rolls inspected and allocated</p>
            </div>
        </div>
    </div>
</section>

<section id="roi" class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-aos="fade-up">
                <p class="text-sm font-black uppercase tracking-widest text-primary-600">ROI</p>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-5xl">
                    Make the savings story visible.
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    Transparent assumptions help factory owners understand the payback instead of seeing a black-box number.
                </p>
                <div class="mt-8 rounded-lg border border-cyan-200 bg-cyan-50 p-5 text-sm leading-6 text-slate-700">
                    Annual savings = defect savings + recovered production contribution + admin savings. ROI = net annual gain / first-year investment.
                </div>
            </div>

            <div x-data="roiCalculator()" class="rounded-lg border border-slate-200 bg-white p-5 shadow-xl sm:p-8" data-aos="fade-up" data-aos-delay="100">
                <div class="grid gap-5 sm:grid-cols-2">
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Lines</span>
                        <input x-model.number="lines" type="number" min="1" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Pieces per line/day</span>
                        <input x-model.number="piecesPerLine" type="number" min="100" step="50" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Current defect rate (%)</span>
                        <input x-model.number="defectRate" type="number" min="0" max="20" step="0.1" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Current OEE (%)</span>
                        <input x-model.number="oee" type="number" min="35" max="95" step="1" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-lg bg-slate-50 p-5">
                        <p class="text-sm font-bold text-slate-500">Annual savings</p>
                        <p class="mt-2 text-3xl font-black text-slate-950" x-text="money(totalSavings)"></p>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-5">
                        <p class="text-sm font-bold text-slate-500">Productivity gain</p>
                        <p class="mt-2 text-3xl font-black text-slate-950" x-text="productivityGain.toFixed(1) + '%'"></p>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-5">
                        <p class="text-sm font-bold text-slate-500">Payback period</p>
                        <p class="mt-2 text-3xl font-black text-slate-950" x-text="paybackMonths.toFixed(1) + ' months'"></p>
                    </div>
                    <div class="rounded-lg bg-slate-50 p-5">
                        <p class="text-sm font-bold text-slate-500">First-year ROI</p>
                        <p class="mt-2 text-3xl font-black text-slate-950" x-text="roi.toFixed(0) + '%'"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="case-studies" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <p class="text-sm font-black uppercase tracking-widest text-primary-600">Trust</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-950 sm:text-5xl">
                Proof blocks ready for verified numbers.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-600">
                I kept customer claims as validation-ready placeholders so no unverified logo, certification or statistic is published accidentally.
            </p>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-3">
            <article class="rounded-lg border border-slate-200 bg-slate-50 p-6" data-aos="fade-up">
                <p class="text-xs font-black uppercase tracking-widest text-accent-600">Before / After</p>
                <h3 class="mt-4 text-xl font-black text-slate-950">Quality rework reduction</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Add the approved baseline defect rate, after-state and saving once the customer signs off.</p>
            </article>
            <article class="rounded-lg border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="100">
                <p class="text-xs font-black uppercase tracking-widest text-accent-600">Before / After</p>
                <h3 class="mt-4 text-xl font-black text-slate-950">Line output recovery</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Add measured output lift, WIP movement and implementation timeline from a real factory.</p>
            </article>
            <article class="rounded-lg border border-slate-200 bg-slate-50 p-6" data-aos="fade-up" data-aos-delay="200">
                <p class="text-xs font-black uppercase tracking-widest text-accent-600">Before / After</p>
                <h3 class="mt-4 text-xl font-black text-slate-950">Fabric control savings</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Add verified fabric variance change, audit trail and monthly value impact.</p>
            </article>
        </div>
    </div>
</section>

<section class="bg-primary-600 py-20 text-white">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8" data-aos="zoom-in">
        <p class="text-sm font-black uppercase tracking-widest text-cyan-100">Factory Savings Assessment</p>
        <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
            See how much your factory can save.
        </h2>
        <p class="mx-auto mt-5 max-w-3xl text-lg leading-8 text-cyan-50">
            Share your line count, output, defect rate and current OEE. Track Tech will map the fastest path to measurable savings.
        </p>
        <a href="/contact" class="mt-9 inline-flex items-center justify-center rounded-lg bg-white px-8 py-4 text-base font-black text-primary-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-slate-100">
            See How Much Your Factory Can Save
        </a>
    </div>
</section>

@push('scripts')
<script>
function roiCalculator() {
    return {
        lines: 12,
        piecesPerLine: 850,
        defectRate: 5.5,
        oee: 62,
        assumptions: {
            workDays: 300,
            defectReduction: 0.35,
            reworkCost: 18,
            contribution: 22,
            maxOeeLiftPoints: 6,
            recoverableContribution: 0.25,
            implementationPerLine: 60000,
            monthlyPlatformPerLine: 6000,
            adminSavingPerLineYear: 36000
        },
        get annualPieces() {
            return this.lines * this.piecesPerLine * this.assumptions.workDays;
        },
        get defectSavings() {
            return this.annualPieces * (this.defectRate / 100) * this.assumptions.reworkCost * this.assumptions.defectReduction;
        },
        get productivityGain() {
            return Math.min(this.assumptions.maxOeeLiftPoints, Math.max(0, 85 - this.oee));
        },
        get productivitySavings() {
            return this.annualPieces * (this.productivityGain / 100) * this.assumptions.contribution * this.assumptions.recoverableContribution;
        },
        get adminSavings() {
            return this.lines * this.assumptions.adminSavingPerLineYear;
        },
        get totalSavings() {
            return this.defectSavings + this.productivitySavings + this.adminSavings;
        },
        get firstYearInvestment() {
            return (this.lines * this.assumptions.implementationPerLine) + (this.lines * this.assumptions.monthlyPlatformPerLine * 12);
        },
        get paybackMonths() {
            return Math.max(0.1, this.firstYearInvestment / Math.max(1, this.totalSavings) * 12);
        },
        get roi() {
            return ((this.totalSavings - this.firstYearInvestment) / Math.max(1, this.firstYearInvestment)) * 100;
        },
        money(value) {
            return new Intl.NumberFormat('en-IN', {
                style: 'currency',
                currency: 'INR',
                maximumFractionDigits: 0
            }).format(value);
        }
    }
}

function createRenderer(canvas, alpha) {
    const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: alpha });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.75));
    return renderer;
}

function addMachine(scene, x, z, color) {
    const group = new THREE.Group();
    group.position.set(x, 0, z);

    const body = new THREE.Mesh(
        new THREE.BoxGeometry(1.4, 0.55, 1.05),
        new THREE.MeshStandardMaterial({ color: color, roughness: 0.45, metalness: 0.08 })
    );
    body.position.y = 0.45;
    group.add(body);

    const mast = new THREE.Mesh(
        new THREE.BoxGeometry(0.16, 1.15, 0.16),
        new THREE.MeshStandardMaterial({ color: 0xe2e8f0, roughness: 0.35 })
    );
    mast.position.set(-0.42, 1.05, -0.25);
    group.add(mast);

    const screen = new THREE.Mesh(
        new THREE.BoxGeometry(0.78, 0.48, 0.08),
        new THREE.MeshStandardMaterial({ color: 0xffffff, emissive: color, emissiveIntensity: 0.12 })
    );
    screen.position.set(0.18, 1.24, -0.4);
    group.add(screen);

    scene.add(group);
    return group;
}

function initHeroFactory() {
    const canvas = document.getElementById('hero-factory-3d');
    if (!canvas || typeof THREE === 'undefined') {
        return;
    }

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(48, 1, 0.1, 1000);
    camera.position.set(6, 6, 10);

    const renderer = createRenderer(canvas, true);
    scene.add(new THREE.AmbientLight(0xffffff, 0.7));
    const keyLight = new THREE.DirectionalLight(0xffffff, 1.2);
    keyLight.position.set(4, 8, 5);
    scene.add(keyLight);

    const factory = new THREE.Group();
    scene.add(factory);

    const floor = new THREE.Mesh(
        new THREE.BoxGeometry(12, 0.12, 7),
        new THREE.MeshStandardMaterial({ color: 0x102033, roughness: 0.8, metalness: 0.15 })
    );
    floor.position.y = -0.08;
    factory.add(floor);

    const colors = [0x00a3e0, 0xa74b94, 0x16a34a, 0xf59e0b, 0xffffff];
    for (let row = 0; row < 3; row++) {
        for (let col = 0; col < 5; col++) {
            const machine = addMachine(factory, -4.6 + col * 2.25, -2 + row * 2, colors[col]);
            machine.scale.setScalar(row === 1 ? 1.05 : 0.88);
        }
    }

    const route = new THREE.CatmullRomCurve3([
        new THREE.Vector3(-4.6, 1.0, -2),
        new THREE.Vector3(-2.3, 1.1, -0.8),
        new THREE.Vector3(0, 1.15, 0),
        new THREE.Vector3(2.3, 1.1, 0.9),
        new THREE.Vector3(4.6, 1.0, 2),
    ]);
    const routeGeometry = new THREE.TubeGeometry(route, 80, 0.035, 8, false);
    factory.add(new THREE.Mesh(routeGeometry, new THREE.MeshStandardMaterial({ color: 0x67e8f9, emissive: 0x00a3e0, emissiveIntensity: 0.35 })));

    const order = new THREE.Mesh(
        new THREE.SphereGeometry(0.22, 32, 32),
        new THREE.MeshStandardMaterial({ color: 0xffffff, emissive: 0x00a3e0, emissiveIntensity: 0.8 })
    );
    factory.add(order);

    function resize() {
        const rect = canvas.getBoundingClientRect();
        renderer.setSize(rect.width, rect.height, false);
        camera.aspect = rect.width / rect.height;
        camera.updateProjectionMatrix();
    }

    function animate(time) {
        requestAnimationFrame(animate);
        const t = (time * 0.00012) % 1;
        const point = route.getPointAt(t);
        order.position.copy(point);
        order.position.y += Math.sin(time * 0.006) * 0.08;
        factory.rotation.y = -0.35 + Math.sin(time * 0.0003) * 0.16;
        camera.lookAt(0, 0.75, 0);
        renderer.render(scene, camera);
    }

    resize();
    window.addEventListener('resize', resize);
    requestAnimationFrame(animate);
}

function initWorkflowTwin() {
    const canvas = document.getElementById('factory-twin');
    if (!canvas || typeof THREE === 'undefined') {
        return;
    }

    const steps = [
        ['Fabric', 'Rolls inspected and allocated', 0x00a3e0],
        ['Cutting', 'Bundles released to line', 0xa74b94],
        ['Sewing', 'Output and WIP captured', 0x16a34a],
        ['Quality', 'Defects closed at source', 0xf59e0b],
        ['Packing', 'Shipment readiness confirmed', 0xe2e8f0],
    ];

    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0x0f172a);
    const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 1000);
    camera.position.set(0, 7.5, 13);
    camera.lookAt(0, 0, 0);

    const renderer = createRenderer(canvas, false);
    scene.add(new THREE.AmbientLight(0xffffff, 0.72));
    const light = new THREE.DirectionalLight(0xffffff, 1.25);
    light.position.set(5, 7, 6);
    scene.add(light);

    const floor = new THREE.Mesh(
        new THREE.BoxGeometry(12, 0.12, 5),
        new THREE.MeshStandardMaterial({ color: 0x1e293b, roughness: 0.75 })
    );
    floor.position.y = -0.1;
    scene.add(floor);

    const stations = [];
    steps.forEach((step, index) => {
        const station = addMachine(scene, -4.8 + index * 2.4, 0, step[2]);
        stations.push(station);
    });

    const bundle = new THREE.Mesh(
        new THREE.SphereGeometry(0.28, 32, 32),
        new THREE.MeshStandardMaterial({ color: 0xffffff, emissive: 0x00a3e0, emissiveIntensity: 0.6 })
    );
    scene.add(bundle);

    let activeStep = 0;
    const label = document.getElementById('workflow-label');
    const copy = document.getElementById('workflow-copy');
    const buttons = Array.from(document.querySelectorAll('.workflow-step'));

    function setStep(index) {
        activeStep = index;
        if (label) label.textContent = steps[index][0];
        if (copy) copy.textContent = steps[index][1];
        buttons.forEach((button, buttonIndex) => {
            button.classList.toggle('border-primary-500', buttonIndex === index);
            button.classList.toggle('bg-cyan-50', buttonIndex === index);
        });
    }

    buttons.forEach((button) => {
        button.addEventListener('click', function () {
            setStep(Number(button.dataset.step));
        });
    });

    function resize() {
        const rect = canvas.getBoundingClientRect();
        renderer.setSize(rect.width, rect.height, false);
        camera.aspect = rect.width / rect.height;
        camera.updateProjectionMatrix();
    }

    function animate(time) {
        requestAnimationFrame(animate);
        const target = stations[activeStep].position;
        bundle.position.x += (target.x - bundle.position.x) * 0.08;
        bundle.position.y = 1.55 + Math.sin(time * 0.005) * 0.08;
        bundle.position.z += (target.z - bundle.position.z) * 0.08;
        stations.forEach((station, index) => {
            const scale = index === activeStep ? 1.18 : 1;
            station.scale.lerp(new THREE.Vector3(scale, scale, scale), 0.08);
            station.rotation.y = Math.sin(time * 0.001 + index) * 0.03;
        });
        renderer.render(scene, camera);
    }

    resize();
    setStep(0);
    window.addEventListener('resize', resize);
    requestAnimationFrame(animate);
}

document.addEventListener('DOMContentLoaded', function () {
    initHeroFactory();
    initWorkflowTwin();
});
</script>
@endpush

@endsection
