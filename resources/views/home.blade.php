@extends('layouts.app')

@section('title', 'Track Tech Solutions - Reduce Defects, Improve OEE, Increase Factory Efficiency')

@section('content')

@php
    $products = [
        [
            'name' => 'Fabric Inventory',
            'benefit' => 'Control fabric receipt, inspection, roll allocation and consumption so teams reduce shortage surprises and excess stock.',
            'metric' => 'Less fabric variance',
        ],
        [
            'name' => 'Cutting Room Digitisation',
            'benefit' => 'Connect markers, lays, bundles and cut output so planning teams know what is ready for sewing without manual chasing.',
            'metric' => 'Faster cut-to-sew flow',
        ],
        [
            'name' => 'Production Tracking',
            'benefit' => 'Capture line output, bottlenecks and WIP movement in real time so supervisors can recover lost minutes during the shift.',
            'metric' => 'Better OEE control',
        ],
        [
            'name' => 'Quality Management',
            'benefit' => 'Record defects at source, identify repeat causes and close corrective actions before rework becomes expensive.',
            'metric' => 'Lower rework cost',
        ],
    ];

    $workflowSteps = [
        ['Fabric', 'Rolls received and inspected'],
        ['Cutting', 'Bundles created and released'],
        ['Sewing', 'Line output and WIP tracked'],
        ['Quality', 'Defects captured at source'],
        ['Packing', 'Ready goods verified for shipment'],
    ];
@endphp

<section class="relative min-h-[calc(100vh-5rem)] overflow-hidden bg-slate-950 text-white">
    <video class="absolute inset-0 h-full w-full object-cover opacity-65" autoplay muted loop playsinline preload="metadata" poster="https://images.pexels.com/videos/15459710/pictures/preview-0.jpeg">
        <source src="https://videos.pexels.com/video-files/15459710/15459710-uhd_2560_1440_30fps.mp4" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/80 to-slate-950/25"></div>
    <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-white to-transparent"></div>

    <div class="relative z-10 mx-auto flex min-h-[calc(100vh-5rem)] max-w-7xl items-center px-6 py-24 lg:px-8">
        <div class="max-w-4xl" data-aos="fade-up">
            <p class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-semibold uppercase tracking-widest text-cyan-100 backdrop-blur">
                Apparel Industry 4.0 Platform
            </p>
            <h1 class="mt-7 text-4xl font-black leading-tight tracking-tight sm:text-6xl lg:text-7xl">
                Reduce defects, improve OEE and increase production efficiency.
            </h1>
            <p class="mt-7 max-w-3xl text-lg leading-8 text-slate-100 sm:text-xl">
                Track Tech Solutions connects fabric, cutting, sewing, quality and packing teams with real-time visibility, focused workflows and decision-ready factory intelligence.
            </p>
            <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="/contact" class="inline-flex items-center justify-center rounded-lg bg-primary-500 px-7 py-4 text-base font-bold text-white shadow-xl shadow-primary-500/25 transition hover:-translate-y-0.5 hover:bg-primary-600">
                    Book a Demo
                </a>
                <a href="#workflow" class="inline-flex items-center justify-center rounded-lg border border-white/30 bg-white/10 px-7 py-4 text-base font-bold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20">
                    See How It Works
                </a>
            </div>
        </div>
    </div>
</section>

<section id="problem" class="bg-white py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:px-8">
        <div data-aos="fade-up">
            <p class="text-sm font-bold uppercase tracking-widest text-primary-600">Problem</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                Most factories lose money between departments, not only on machines.
            </h2>
        </div>
        <div class="grid gap-4 sm:grid-cols-2" data-aos="fade-up" data-aos-delay="100">
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                <h3 class="font-bold text-slate-900">Late visibility</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Manual reports reveal defects, WIP delays and line losses after the shift has already moved on.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                <h3 class="font-bold text-slate-900">Disconnected teams</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Fabric, cutting, sewing and quality teams often make decisions from different versions of the truth.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                <h3 class="font-bold text-slate-900">Hidden rework cost</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Defects become expensive when root causes are discovered only during final checking.</p>
            </div>
            <div class="rounded-lg border border-slate-200 bg-slate-50 p-6">
                <h3 class="font-bold text-slate-900">Slow escalation</h3>
                <p class="mt-3 text-sm leading-6 text-slate-600">Supervisors need live signals that show where to intervene before production targets slip.</p>
            </div>
        </div>
    </div>
</section>

<section id="solution" class="bg-slate-950 py-20 text-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <p class="text-sm font-bold uppercase tracking-widest text-cyan-300">Solution</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
                One connected operating layer for your factory floor.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-300">
                Track Tech turns operational events into simple actions: find the bottleneck, isolate the defect source, balance the line and protect shipment commitments.
            </p>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-3">
            <div class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up">
                <p class="text-3xl font-black text-cyan-300">01</p>
                <h3 class="mt-5 text-xl font-bold">Capture work as it happens</h3>
                <p class="mt-3 text-sm leading-6 text-slate-300">Operators, checkers and supervisors update the same production truth from the floor.</p>
            </div>
            <div class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up" data-aos-delay="100">
                <p class="text-3xl font-black text-cyan-300">02</p>
                <h3 class="mt-5 text-xl font-bold">Turn events into priorities</h3>
                <p class="mt-3 text-sm leading-6 text-slate-300">Losses, defect clusters and WIP delays surface as focused actions instead of crowded dashboards.</p>
            </div>
            <div class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up" data-aos-delay="200">
                <p class="text-3xl font-black text-cyan-300">03</p>
                <h3 class="mt-5 text-xl font-bold">Measure the business impact</h3>
                <p class="mt-3 text-sm leading-6 text-slate-300">Teams see how defect reduction, recovered output and admin savings affect annual payback.</p>
            </div>
        </div>
    </div>
</section>

<section id="products" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <p class="text-sm font-bold uppercase tracking-widest text-primary-600">Products</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                Four product areas, each tied to a factory outcome.
            </h2>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
            @foreach ($products as $product)
                <article class="rounded-lg border border-slate-200 bg-slate-50 p-6 transition hover:-translate-y-1 hover:border-primary-400 hover:bg-white hover:shadow-xl hover:shadow-slate-200/70" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                    <p class="text-xs font-bold uppercase tracking-widest text-accent-600">{{ $product['metric'] }}</p>
                    <h3 class="mt-4 text-2xl font-black text-slate-900">{{ $product['name'] }}</h3>
                    <p class="mt-4 text-sm leading-6 text-slate-600">{{ $product['benefit'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section id="workflow" class="bg-slate-100 py-20">
    <div class="mx-auto grid max-w-7xl gap-10 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
        <div data-aos="fade-right">
            <p class="text-sm font-bold uppercase tracking-widest text-primary-600">Technology</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                A 3D digital twin that explains the workflow, not just the data.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-600">
                The interaction follows one order across the factory. Each step highlights the next decision point so managers can understand how work moves from fabric receipt to packing.
            </p>
            <div class="mt-8 grid gap-3">
                @foreach ($workflowSteps as $step)
                    <button type="button" class="workflow-step flex items-center justify-between gap-4 rounded-lg border border-slate-300 bg-white px-5 py-4 text-left font-semibold text-slate-800 transition hover:border-primary-500 hover:text-primary-700" data-step="{{ $loop->index }}">
                        <span>{{ $loop->iteration }}. {{ $step[0] }}</span>
                        <span class="text-sm font-medium text-slate-500">{{ $step[1] }}</span>
                    </button>
                @endforeach
            </div>
        </div>

        <div class="relative overflow-hidden rounded-lg border border-slate-300 bg-white shadow-2xl" data-aos="fade-left">
            <canvas id="factory-twin" class="block h-[420px] w-full sm:h-[520px]"></canvas>
            <div class="absolute left-5 top-5 rounded-lg bg-white/90 p-4 shadow-lg backdrop-blur">
                <p class="text-xs font-bold uppercase tracking-widest text-primary-600">Live Workflow</p>
                <p id="workflow-label" class="mt-1 text-lg font-black text-slate-900">Fabric</p>
                <p id="workflow-copy" class="mt-1 max-w-xs text-sm text-slate-600">Rolls received and inspected</p>
            </div>
        </div>
    </div>
</section>

<section id="roi" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div data-aos="fade-up">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-600">ROI</p>
                <h2 class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl">
                    See how defect control and productivity recovery affect payback.
                </h2>
                <p class="mt-5 text-lg leading-8 text-slate-600">
                    The calculator uses editable assumptions and conservative improvement ranges. Developers can maintain the logic in one small JavaScript object.
                </p>
                <div class="mt-8 rounded-lg border border-amber-200 bg-amber-50 p-5 text-sm leading-6 text-amber-900">
                    Formula note: Annual savings = defect savings + recovered production contribution + admin savings. ROI = net annual gain divided by first-year investment.
                </div>
            </div>

            <div x-data="roiCalculator()" class="rounded-lg border border-slate-200 bg-slate-50 p-5 shadow-xl sm:p-8" data-aos="fade-up" data-aos-delay="100">
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
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Rework cost/piece (INR)</span>
                        <input x-model.number="reworkCost" type="number" min="1" step="1" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                    <label class="block">
                        <span class="text-sm font-bold text-slate-700">Contribution/piece (INR)</span>
                        <input x-model.number="contribution" type="number" min="1" step="1" class="mt-2 w-full rounded-lg border border-slate-300 bg-white px-4 py-3">
                    </label>
                </div>

                <div class="mt-6 grid gap-4 sm:grid-cols-2">
                    <div class="rounded-lg bg-white p-5">
                        <p class="text-sm font-bold text-slate-500">Annual savings</p>
                        <p class="mt-2 text-3xl font-black text-slate-900" x-text="money(totalSavings)"></p>
                    </div>
                    <div class="rounded-lg bg-white p-5">
                        <p class="text-sm font-bold text-slate-500">Productivity gain</p>
                        <p class="mt-2 text-3xl font-black text-slate-900" x-text="productivityGain.toFixed(1) + '%'"></p>
                    </div>
                    <div class="rounded-lg bg-white p-5">
                        <p class="text-sm font-bold text-slate-500">Payback period</p>
                        <p class="mt-2 text-3xl font-black text-slate-900" x-text="paybackMonths.toFixed(1) + ' months'"></p>
                    </div>
                    <div class="rounded-lg bg-white p-5">
                        <p class="text-sm font-bold text-slate-500">First-year ROI</p>
                        <p class="mt-2 text-3xl font-black text-slate-900" x-text="roi.toFixed(0) + '%'"></p>
                    </div>
                </div>

                <div class="mt-6 rounded-lg border border-slate-200 bg-white p-5 text-sm leading-6 text-slate-600">
                    <p><strong>Assumptions:</strong> 300 working days/year, 35% defect reduction, OEE improvement capped at 6 percentage points, 25% of recovered line output counted as contribution, INR 60K implementation cost per line and INR 6K/month platform cost per line.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="case-studies" class="bg-slate-950 py-20 text-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="max-w-3xl" data-aos="fade-up">
            <p class="text-sm font-bold uppercase tracking-widest text-cyan-300">Case Studies</p>
            <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
                Publish only verified customer proof.
            </h2>
            <p class="mt-5 text-lg leading-8 text-slate-300">
                This section is ready for measured before-and-after stories. Customer names, logos, certifications and performance numbers should be added only after written validation.
            </p>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-3">
            <article class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up">
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-300">Quality Improvement</p>
                <h3 class="mt-4 text-xl font-bold">Before: final-stage rework. After: source-level defect action.</h3>
                <p class="mt-4 text-sm leading-6 text-slate-300">Add verified defect rate, rework cost and implementation timeline after customer approval.</p>
            </article>
            <article class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up" data-aos-delay="100">
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-300">Production Visibility</p>
                <h3 class="mt-4 text-xl font-bold">Before: end-of-day reporting. After: live line recovery.</h3>
                <p class="mt-4 text-sm leading-6 text-slate-300">Add measured output gain, WIP reduction and supervisor feedback once validated.</p>
            </article>
            <article class="rounded-lg border border-white/10 bg-white/5 p-6" data-aos="fade-up" data-aos-delay="200">
                <p class="text-xs font-bold uppercase tracking-widest text-cyan-300">Cut-to-Sew Flow</p>
                <h3 class="mt-4 text-xl font-bold">Before: bundle tracking gaps. After: accountable workflow movement.</h3>
                <p class="mt-4 text-sm leading-6 text-slate-300">Add client-approved baseline, after-state and savings calculation before publishing.</p>
            </article>
        </div>
    </div>
</section>

<section class="bg-primary-600 py-20 text-white">
    <div class="mx-auto max-w-5xl px-6 text-center lg:px-8" data-aos="zoom-in">
        <p class="text-sm font-bold uppercase tracking-widest text-cyan-100">Factory Savings Assessment</p>
        <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">
            See how much your factory can save.
        </h2>
        <p class="mx-auto mt-5 max-w-3xl text-lg leading-8 text-cyan-50">
            Share your line count, output, defect rate and current OEE. We will map the highest-value improvement path for your factory.
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
        reworkCost: 18,
        contribution: 22,
        assumptions: {
            workDays: 300,
            defectReduction: 0.35,
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
            return this.annualPieces * (this.defectRate / 100) * this.reworkCost * this.assumptions.defectReduction;
        },
        get productivityGain() {
            const availableGap = Math.max(0, 85 - this.oee);
            return Math.min(this.assumptions.maxOeeLiftPoints, availableGap);
        },
        get productivitySavings() {
            return this.annualPieces * (this.productivityGain / 100) * this.contribution * this.assumptions.recoverableContribution;
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

document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('factory-twin');
    if (!canvas || typeof THREE === 'undefined') {
        return;
    }

    const steps = [
        ['Fabric', 'Rolls received and inspected', 0x00a3e0],
        ['Cutting', 'Bundles created and released', 0xa74b94],
        ['Sewing', 'Line output and WIP tracked', 0x16a34a],
        ['Quality', 'Defects captured at source', 0xf59e0b],
        ['Packing', 'Ready goods verified for shipment', 0x0f172a],
    ];

    const scene = new THREE.Scene();
    scene.background = new THREE.Color(0xf8fafc);

    const camera = new THREE.PerspectiveCamera(45, 1, 0.1, 1000);
    camera.position.set(0, 9, 14);
    camera.lookAt(0, 0, 0);

    const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: false });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.75));

    scene.add(new THREE.AmbientLight(0xffffff, 0.85));
    const light = new THREE.DirectionalLight(0xffffff, 1.1);
    light.position.set(5, 8, 6);
    scene.add(light);

    const floor = new THREE.Mesh(
        new THREE.BoxGeometry(12, 0.15, 5.2),
        new THREE.MeshStandardMaterial({ color: 0xe2e8f0, roughness: 0.8 })
    );
    floor.position.y = -0.1;
    scene.add(floor);

    const stations = [];
    const stationGroup = new THREE.Group();
    scene.add(stationGroup);

    steps.forEach((step, index) => {
        const x = -4.8 + index * 2.4;
        const station = new THREE.Group();
        station.position.set(x, 0.35, 0);

        const base = new THREE.Mesh(
            new THREE.BoxGeometry(1.45, 0.65, 1.2),
            new THREE.MeshStandardMaterial({ color: step[2], roughness: 0.45 })
        );
        station.add(base);

        const screen = new THREE.Mesh(
            new THREE.BoxGeometry(1.1, 0.8, 0.08),
            new THREE.MeshStandardMaterial({ color: 0xffffff, emissive: step[2], emissiveIntensity: 0.15 })
        );
        screen.position.set(0, 0.75, -0.35);
        station.add(screen);

        stations.push({ group: station, base: base, screen: screen });
        stationGroup.add(station);

        if (index < steps.length - 1) {
            const path = new THREE.Mesh(
                new THREE.BoxGeometry(1.35, 0.08, 0.16),
                new THREE.MeshStandardMaterial({ color: 0x94a3b8, roughness: 0.6 })
            );
            path.position.set(x + 1.2, 0.38, 0);
            stationGroup.add(path);
        }
    });

    const bundle = new THREE.Mesh(
        new THREE.SphereGeometry(0.28, 32, 32),
        new THREE.MeshStandardMaterial({ color: 0xffffff, emissive: 0x00a3e0, emissiveIntensity: 0.45 })
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
        const current = stations[activeStep].group.position;
        bundle.position.x += (current.x - bundle.position.x) * 0.08;
        bundle.position.y = 1.35 + Math.sin(time * 0.005) * 0.08;
        bundle.position.z += (0 - bundle.position.z) * 0.08;
        stations.forEach((station, index) => {
            const targetScale = index === activeStep ? 1.14 : 1;
            station.group.scale.lerp(new THREE.Vector3(targetScale, targetScale, targetScale), 0.08);
        });
        stationGroup.rotation.y = Math.sin(time * 0.00035) * 0.12;
        renderer.render(scene, camera);
    }

    resize();
    setStep(0);
    window.addEventListener('resize', resize);
    requestAnimationFrame(animate);
});
</script>
@endpush

@endsection
