@extends('layouts.app')

@section('title', 'About Us | Track Tech Solutions')

@section('content')

<style>
html {
    scroll-snap-type: y proximity;
    scroll-padding-top: 5rem;
}
.about-scroll-section {
    scroll-snap-align: start;
    scroll-margin-top: 5rem;
}
.about-accordion > summary {
    list-style: none;
}
.about-accordion > summary::-webkit-details-marker {
    display: none;
}
.about-accordion[open] .about-chevron {
    transform: rotate(180deg);
}
</style>

<section class="about-scroll-section pt-32 pb-10 md:pt-40 md:pb-12 relative">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <p class="text-sm font-bold uppercase tracking-widest text-sky-700">Track Tech Solutions <span class="text-slate-500">/ EST. 2019</span></p>
        <h1 class="mt-4 text-4xl md:text-5xl font-black leading-tight text-slate-900">Digital clarity for the people who make apparel</h1>

        <details class="about-accordion mt-8 border-y border-slate-300/70 bg-white/55 backdrop-blur-md">
            <summary class="flex cursor-pointer items-center justify-between gap-4 px-5 py-5 sm:px-7 text-slate-900 hover:bg-sky-50/70 transition">
                <span class="font-bold">Company overview</span>
                <svg class="about-chevron w-5 h-5 shrink-0 text-slate-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
            </summary>
            <div class="border-t border-slate-200/80 px-5 py-6 sm:px-7">
                <p class="text-base sm:text-lg leading-relaxed text-slate-700">
                    Track Tech Solutions builds practical digital tools for apparel manufacturing. The platform connects production, quality, planning, materials and factory-floor teams, helping people see what is happening and act while there is still time to improve the outcome.
                </p>
                <p class="mt-4 text-base sm:text-lg leading-relaxed text-slate-700">
                    Since 2019, the team has focused on bringing useful technology closer to everyday factory work, supporting implementation across more than 74 factories in two countries.
                </p>
                <a href="https://www.linkedin.com/company/track-tech-solution/about/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 mt-5 text-sky-700 font-semibold hover:text-sky-800 transition">
                    Company profile on LinkedIn <span aria-hidden="true">↗</span>
                </a>
            </div>
        </details>
    </div>
</section>


    <!-- STATS -->
    <section class="about-scroll-section pb-12 md:pb-16 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-y md:divide-y-0 divide-slate-300/70 border-y border-slate-300/70 bg-white/50 backdrop-blur-md">
                @foreach([
                    ['2019', 'Established'],
                    ['74+', 'Factories supported'],
                    ['02', 'Countries'],
                    ['36', 'Professionals'],
                ] as $stat)
                <div class="px-5 py-6 sm:px-7 sm:py-8">
                    <div class="text-3xl sm:text-4xl font-black text-slate-900">{{ $stat[0] }}</div>
                    <p class="mt-2 text-sm font-semibold text-slate-600">{{ $stat[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


<section class="about-scroll-section pb-16 md:pb-20 relative">
    <div class="max-w-5xl mx-auto px-6 lg:px-8">
        <div class="max-w-3xl mb-8">
            <p class="text-sm font-semibold uppercase tracking-widest text-sky-700">Our leadership team</p>
            <h2 class="text-3xl md:text-4xl font-black mt-3 text-slate-900">Built around manufacturing, operations and technology</h2>
            <p class="mt-4 text-slate-600 text-lg leading-8">Three perspectives working together to make factory software practical, dependable and useful on the floor.</p>
        </div>

        <div class="divide-y divide-slate-300/70 border-y border-slate-300/70 bg-white/55 backdrop-blur-md">
            <details class="about-accordion" open>
                <summary class="flex cursor-pointer items-center gap-4 px-5 py-5 sm:px-7 text-slate-900 hover:bg-sky-50/70 transition">
                    <img src="{{ asset('images/gopinath.jpg') }}" alt="Gopinath Muniraj" class="h-12 w-12 shrink-0 rounded-xl object-cover object-top shadow-sm border border-slate-200">
                    <span class="min-w-0 flex-1"><span class="block font-bold">Gopinath M. (Muniraj)</span><span class="mt-1 block text-xs font-semibold uppercase tracking-wide text-slate-500">Founder & Chief Executive Officer (CEO)</span></span>
                    <svg class="about-chevron w-5 h-5 shrink-0 text-slate-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
                </summary>
                <div class="border-t border-slate-200/80 px-5 py-6 sm:px-7 sm:pl-[5.5rem]">
                    <p class="text-sm sm:text-base leading-relaxed text-slate-700">Gopinath Muniraj is a technology entrepreneur and innovator with over two decades of experience addressing challenges in apparel manufacturing. Having worked closely with factories across South India, he brings deep industry understanding and a vision for technology-driven transformation.</p>
                    <a href="https://rocketreach.co/gopinath-muniraj-email_598095225" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 mt-4 text-sm text-sky-700 font-semibold hover:text-sky-800 transition">Professional profile ↗</a>
                </div>
            </details>

            <details class="about-accordion">
                <summary class="flex cursor-pointer items-center gap-4 px-5 py-5 sm:px-7 text-slate-900 hover:bg-sky-50/70 transition">
                    <img src="{{ asset('images/lebinesh.jpg') }}" alt="Lebinesh Balan" class="h-12 w-12 shrink-0 rounded-xl object-cover object-top shadow-sm border border-slate-200">
                    <span class="min-w-0 flex-1"><span class="block font-bold">Lebinesh Balan</span><span class="mt-1 block text-xs font-semibold uppercase tracking-wide text-slate-500">Co-Founder & Chief Operating Officer (COO)</span></span>
                    <svg class="about-chevron w-5 h-5 shrink-0 text-slate-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
                </summary>
                <div class="border-t border-slate-200/80 px-5 py-6 sm:px-7 sm:pl-[5.5rem]">
                    <p class="text-sm sm:text-base leading-relaxed text-slate-700">With close to two decades of experience in digital transformation, particularly in apparel manufacturing, Lebinesh Balan leads business strategy, sales, operations, and commercial growth. He helps apparel manufacturers embrace digital technologies to digitise shop-floor operations, optimise production planning, and enhance productivity and operational visibility.</p>
                    <a href="https://in.linkedin.com/in/lebinesh-balan-a2521637" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1 mt-4 text-sm text-sky-700 font-semibold hover:text-sky-800 transition">LinkedIn profile ↗</a>
                </div>
            </details>

            <details class="about-accordion">
                <summary class="flex cursor-pointer items-center gap-4 px-5 py-5 sm:px-7 text-slate-900 hover:bg-sky-50/70 transition">
                    <img src="{{ asset('images/deepak.jpg') }}" alt="Deepak Rajkumar" class="h-12 w-12 shrink-0 rounded-xl object-cover object-top shadow-sm border border-slate-200">
                    <span class="min-w-0 flex-1"><span class="block font-bold">Deepak Rajkumar</span><span class="mt-1 block text-xs font-semibold uppercase tracking-wide text-slate-500">Co-Founder & Chief Technology Officer (CTO)</span></span>
                    <svg class="about-chevron w-5 h-5 shrink-0 text-slate-600 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
                </summary>
                <div class="border-t border-slate-200/80 px-5 py-6 sm:px-7 sm:pl-[5.5rem]">
                    <p class="text-sm sm:text-base leading-relaxed text-slate-700">Deepak is a technology leader with extensive experience in apparel manufacturing and software development. At Track Tech Solution, he leads technology strategy, product engineering and digital transformation, building scalable solutions that address complex manufacturing challenges.</p>
                    <span class="inline-block mt-4 text-sm text-slate-500 font-semibold">Software Architecture &amp; IoT</span>
                </div>
            </details>
        </div>
    </div>
</section>


@endsection