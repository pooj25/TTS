<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="min-h-screen flex">

    <!-- ================= SIDEBAR ================= -->
    <aside class="w-64 bg-slate-950 text-white hidden md:flex flex-col">

        <!-- Logo -->
        <div class="px-6 py-6 border-b border-slate-800">
            <h1 class="text-xl font-bold">
                Track Tech
            </h1>

            <p class="text-xs text-slate-400 mt-1">
                Solutions Admin
            </p>
        </div>


        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-2">

            <!-- Dashboard -->
            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg bg-slate-800 text-white"
            >
                <span>📊</span>
                <span>Dashboard</span>
            </a>


            <!-- Enquiries -->
            <a
                href="{{ route('admin.enquiries') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📩</span>
                <span>Enquiries</span>
            </a>


            <!-- Services -->
            <a
                href="{{ route('admin.services') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>⚙️</span>
                <span>Services</span>
            </a>


            <!-- Products -->
            <a
                href="{{ route('admin.products') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📦</span>
                <span>Products</span>
            </a>


            <!-- Resources -->
            <a
                href="{{ route('admin.resources') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📝</span>
                <span>Resources</span>
            </a>

        </nav>


        <!-- Bottom -->
        <div class="px-4 py-5 border-t border-slate-800">

            <form action="{{ route('admin.logout') }}" method="POST">

                @csrf

                <button
                    type="submit"
                    class="w-full flex items-center gap-3 px-4 py-3 rounded-lg
                           text-slate-300 hover:bg-red-600 hover:text-white transition"
                >
                    <span>🚪</span>
                    <span>Logout</span>
                </button>

            </form>

        </div>

    </aside>


    <!-- ================= MAIN CONTENT ================= -->

    <div class="flex-1 min-w-0">


        <!-- TOP BAR -->
        <header class="bg-white border-b border-slate-200">

            <div class="px-6 py-5 flex items-center justify-between">

                <div>
                    <h2 class="text-2xl font-bold text-slate-900">
                        Dashboard
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Welcome back to Track Tech Solutions Admin Panel.
                    </p>
                </div>


                <!-- Admin -->
                <div class="flex items-center gap-3">

                    <div class="hidden sm:block text-right">

                        <p class="text-sm font-semibold text-slate-900">
                            {{ session('admin_name') }}
                        </p>

                        <p class="text-xs text-slate-500">
                            Administrator
                        </p>

                    </div>


                    <div class="w-10 h-10 rounded-full bg-slate-900 text-white
                                flex items-center justify-center font-bold">

                        {{ strtoupper(substr(session('admin_name'), 0, 1)) }}

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <main class="p-6">


            <!-- ================= STATS ================= -->

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">


                <!-- Total Enquiries -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Total Enquiries
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalEnquiries }}
                            </h3>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            📩
                        </div>

                    </div>

                </div>


                <!-- Website Leads -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Website Leads
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalEnquiries }}
                            </h3>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            👥
                        </div>

                    </div>

                </div>


                <!-- Services -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Services
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalServices }}
                            </h3>

                            <p class="text-xs text-green-600 mt-1">
                                {{ $activeServices }} active
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            ⚙️
                        </div>

                    </div>

                </div>


                <!-- System Status -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                System Status
                            </p>

                            <h3 class="text-lg font-bold text-green-600 mt-3">
                                Online
                            </h3>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-green-50
                                    flex items-center justify-center text-xl">
                            ✓
                        </div>

                    </div>

                </div>

            </div>


            <!-- ================= MANAGEMENT SUMMARY ================= -->

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">


                <!-- Products -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Products
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalProducts }}
                            </h3>

                            <p class="text-xs text-green-600 mt-1">
                                {{ $activeProducts }} active
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            📦
                        </div>

                    </div>

                    <a
                        href="{{ route('admin.products') }}"
                        class="inline-block mt-4 text-sm font-semibold text-slate-900 hover:underline"
                    >
                        Manage Products →
                    </a>

                </div>


                <!-- Resources -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Resources
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $totalResources }}
                            </h3>

                            <p class="text-xs text-green-600 mt-1">
                                {{ $activeResources }} active
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            📝
                        </div>

                    </div>

                    <a
                        href="{{ route('admin.resources') }}"
                        class="inline-block mt-4 text-sm font-semibold text-slate-900 hover:underline"
                    >
                        Manage Resources →
                    </a>

                </div>


                <!-- Active Services -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">

                        <div>

                            <p class="text-sm text-slate-500">
                                Active Services
                            </p>

                            <h3 class="text-3xl font-bold text-slate-900 mt-2">
                                {{ $activeServices }}
                            </h3>

                            <p class="text-xs text-slate-500 mt-1">
                                of {{ $totalServices }} total services
                            </p>

                        </div>

                        <div class="w-12 h-12 rounded-xl bg-slate-100
                                    flex items-center justify-center text-xl">
                            ⚙️
                        </div>

                    </div>

                    <a
                        href="{{ route('admin.services') }}"
                        class="inline-block mt-4 text-sm font-semibold text-slate-900 hover:underline"
                    >
                        Manage Services →
                    </a>

                </div>

            </div>


            <!-- ================= ENQUIRIES ================= -->

            <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">


                <!-- Heading -->
                <div class="px-6 py-5 border-b border-slate-200
                            flex flex-col sm:flex-row sm:items-center
                            sm:justify-between gap-4">

                    <div>

                        <h3 class="text-xl font-bold text-slate-900">
                            Recent Contact Enquiries
                        </h3>

                        <p class="text-sm text-slate-500 mt-1">
                            Latest messages received from your website.
                        </p>

                    </div>


                    <!-- View All -->
                    <a
                        href="{{ route('admin.enquiries') }}"
                        class="inline-flex items-center justify-center
                               px-4 py-2 rounded-lg bg-slate-900
                               text-white text-sm font-semibold
                               hover:bg-slate-800 transition"
                    >
                        View All
                    </a>

                </div>


                <!-- Table -->

                @if($contactMessages->count() > 0)

                    <div class="overflow-x-auto">

                        <table class="w-full min-w-[900px]">

                            <thead class="bg-slate-50">

                                <tr>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Name
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Email
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Company
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Solution
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Date
                                    </th>

                                </tr>

                            </thead>


                            <tbody class="divide-y divide-slate-200">

                                @foreach($contactMessages->take(10) as $message)

                                    <tr class="hover:bg-slate-50 transition">

                                        <!-- Name -->
                                        <td class="px-6 py-5">

                                            <div class="flex items-center gap-3">

                                                <div class="w-9 h-9 rounded-full
                                                            bg-slate-100
                                                            flex items-center
                                                            justify-center
                                                            font-semibold
                                                            text-slate-700">

                                                    {{ strtoupper(substr($message->first_name, 0, 1)) }}

                                                </div>

                                                <div>

                                                    <p class="font-semibold text-slate-900">

                                                        {{ $message->first_name }}

                                                        {{ $message->last_name }}

                                                    </p>

                                                </div>

                                            </div>

                                        </td>


                                        <!-- Email -->
                                        <td class="px-6 py-5 text-sm text-slate-600">

                                            {{ $message->email }}

                                        </td>


                                        <!-- Company -->
                                        <td class="px-6 py-5 text-sm text-slate-600">

                                            {{ $message->company_name ?? '-' }}

                                        </td>


                                        <!-- Solution -->
                                        <td class="px-6 py-5">

                                            <span class="inline-flex px-3 py-1
                                                         rounded-full
                                                         bg-slate-100
                                                         text-slate-700
                                                         text-xs font-medium">

                                                {{ $message->interested_in ?? '-' }}

                                            </span>

                                        </td>


                                        <!-- Date -->
                                        <td class="px-6 py-5 text-sm text-slate-500">

                                            {{ $message->created_at->format('d M Y') }}

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="p-12 text-center">

                        <div class="text-4xl mb-4">
                            📩
                        </div>

                        <h4 class="font-semibold text-slate-900">
                            No enquiries yet
                        </h4>

                        <p class="text-sm text-slate-500 mt-1">
                            Contact form submissions will appear here.
                        </p>

                    </div>

                @endif

            </div>


            <!-- ================= QUICK ACTIONS ================= -->

            <div class="mt-8">

                <h3 class="text-lg font-bold text-slate-900 mb-4">
                    Quick Actions
                </h3>


                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">


                    <!-- View Website -->
                    <a
                        href="/"
                        target="_blank"
                        class="bg-white border border-slate-200 rounded-xl p-5
                               hover:shadow-md transition"
                    >

                        <div class="text-2xl mb-3">
                            🌐
                        </div>

                        <h4 class="font-semibold text-slate-900">
                            View Website
                        </h4>

                        <p class="text-sm text-slate-500 mt-1">
                            Open the public website.
                        </p>

                    </a>


                    <!-- Contact Enquiries -->
                    <a
                        href="{{ route('admin.enquiries') }}"
                        class="bg-white border border-slate-200 rounded-xl p-5
                               hover:shadow-md transition"
                    >

                        <div class="text-2xl mb-3">
                            📩
                        </div>

                        <h4 class="font-semibold text-slate-900">
                            Contact Enquiries
                        </h4>

                        <p class="text-sm text-slate-500 mt-1">
                            Review customer enquiries.
                        </p>

                    </a>


                    <!-- Manage Services -->
                    <a
                        href="{{ route('admin.services') }}"
                        class="bg-white border border-slate-200 rounded-xl p-5
                               hover:shadow-md transition"
                    >

                        <div class="text-2xl mb-3">
                            ⚙️
                        </div>

                        <h4 class="font-semibold text-slate-900">
                            Manage Services
                        </h4>

                        <p class="text-sm text-slate-500 mt-1">
                            Update your solutions.
                        </p>

                    </a>


                    <!-- Manage Products -->
                    <a
                        href="{{ route('admin.products') }}"
                        class="bg-white border border-slate-200 rounded-xl p-5
                               hover:shadow-md transition"
                    >

                        <div class="text-2xl mb-3">
                            📦
                        </div>

                        <h4 class="font-semibold text-slate-900">
                            Manage Products
                        </h4>

                        <p class="text-sm text-slate-500 mt-1">
                            Add, edit and manage products.
                        </p>

                    </a>

                </div>

            </div>


        </main>

    </div>

</div>

</body>
</html>