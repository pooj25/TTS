<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Services | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="min-h-screen">

    <!-- ================= HEADER ================= -->
    <header class="bg-slate-950 text-white">

        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

            <div>
                <h1 class="text-xl font-bold">
                    Track Tech Solutions
                </h1>

                <p class="text-xs text-slate-400 mt-1">
                    Services Management
                </p>
            </div>

            <div class="flex items-center gap-4">

                <div class="hidden sm:block text-right">
                    <p class="text-sm font-semibold">
                        {{ session('admin_name') }}
                    </p>

                    <p class="text-xs text-slate-400">
                        Administrator
                    </p>
                </div>

                <div class="w-10 h-10 rounded-full bg-white text-slate-900
                            flex items-center justify-center font-bold">

                    {{ strtoupper(substr(session('admin_name'), 0, 1)) }}

                </div>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2 rounded-lg bg-red-600
                               hover:bg-red-700 text-sm font-semibold transition"
                    >
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </header>


    <!-- ================= MAIN ================= -->
    <main class="max-w-7xl mx-auto px-6 py-8">

        <!-- TOP -->
        <div class="flex flex-col sm:flex-row sm:items-center
                    sm:justify-between gap-4 mb-8">

            <div>

                <a
                    href="{{ route('admin.dashboard') }}"
                    class="text-sm text-slate-500 hover:text-slate-900"
                >
                    ← Back to Dashboard
                </a>

                <h2 class="text-3xl font-bold text-slate-900 mt-3">
                    Services
                </h2>

                <p class="text-slate-500 mt-1">
                    Manage Track Tech Solutions services.
                </p>

            </div>


            <a
                href="{{ route('admin.services.create') }}"
                class="inline-flex items-center justify-center
                       px-5 py-3 rounded-lg bg-slate-900
                       text-white font-semibold
                       hover:bg-slate-800 transition"
            >
                + Add Service
            </a>

        </div>


        <!-- SUCCESS MESSAGE -->
        @if(session('success'))

            <div class="mb-6 rounded-xl border border-green-200
                        bg-green-50 px-5 py-4">

                <p class="text-sm font-medium text-green-700">
                    {{ session('success') }}
                </p>

            </div>

        @endif


        <!-- VALIDATION ERRORS -->
        @if($errors->any())

            <div class="mb-6 rounded-xl border border-red-200
                        bg-red-50 px-5 py-4">

                <ul class="text-sm text-red-600 space-y-1">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- ================= STATS ================= -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">

            <div class="bg-white rounded-2xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Total Services
                </p>

                <h3 class="text-3xl font-bold text-slate-900 mt-2">
                    {{ $services->count() }}
                </h3>

            </div>


            <div class="bg-white rounded-2xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Active Services
                </p>

                <h3 class="text-3xl font-bold text-green-600 mt-2">
                    {{ $services->where('status', 'active')->count() }}
                </h3>

            </div>


            <div class="bg-white rounded-2xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Inactive Services
                </p>

                <h3 class="text-3xl font-bold text-red-600 mt-2">
                    {{ $services->where('status', 'inactive')->count() }}
                </h3>

            </div>

        </div>


        <!-- ================= SERVICES TABLE ================= -->
        <div class="bg-white rounded-2xl border border-slate-200
                    overflow-hidden">

            <div class="px-6 py-5 border-b border-slate-200">

                <h3 class="text-xl font-bold text-slate-900">
                    All Services
                </h3>

                <p class="text-sm text-slate-500 mt-1">
                    Add, edit or remove services from the admin panel.
                </p>

            </div>


            @if($services->count() > 0)

                <div class="overflow-x-auto">

                    <table class="w-full min-w-[900px]">

                        <thead class="bg-slate-50">

                            <tr>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Service
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Slug
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Description
                                </th>

                                <th class="px-6 py-4 text-left text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Status
                                </th>

                                <th class="px-6 py-4 text-right text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-200">

                            @foreach($services as $service)

                                <tr class="hover:bg-slate-50 transition">


                                    <!-- SERVICE -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-4">

                                            <div class="w-11 h-11 rounded-xl
                                                        bg-slate-100
                                                        flex items-center
                                                        justify-center
                                                        text-xl">

                                                {{ $service->icon ?? '⚙️' }}

                                            </div>

                                            <div>

                                                <p class="font-semibold text-slate-900">
                                                    {{ $service->title }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- SLUG -->
                                    <td class="px-6 py-5">

                                        <span class="text-sm text-slate-500">
                                            {{ $service->slug }}
                                        </span>

                                    </td>


                                    <!-- DESCRIPTION -->
                                    <td class="px-6 py-5 max-w-xs">

                                        <p class="text-sm text-slate-600 truncate">

                                            {{ $service->short_description ?? '-' }}

                                        </p>

                                    </td>


                                    <!-- STATUS -->
                                    <td class="px-6 py-5">

                                        @if($service->status === 'active')

                                            <span class="inline-flex px-3 py-1
                                                         rounded-full
                                                         bg-green-100
                                                         text-green-700
                                                         text-xs font-semibold">

                                                Active

                                            </span>

                                        @else

                                            <span class="inline-flex px-3 py-1
                                                         rounded-full
                                                         bg-red-100
                                                         text-red-700
                                                         text-xs font-semibold">

                                                Inactive

                                            </span>

                                        @endif

                                    </td>


                                    <!-- ACTIONS -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center
                                                    justify-end gap-2">

                                            <!-- EDIT -->
                                            <a
                                                href="{{ route('admin.services.edit', $service->id) }}"
                                                class="px-3 py-2 rounded-lg
                                                       bg-slate-100
                                                       text-slate-700
                                                       text-sm font-medium
                                                       hover:bg-slate-200 transition"
                                            >
                                                Edit
                                            </a>


                                            <!-- DELETE -->
                                            <form
                                                action="{{ route('admin.services.destroy', $service->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this service?');"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="px-3 py-2 rounded-lg
                                                           bg-red-50
                                                           text-red-600
                                                           text-sm font-medium
                                                           hover:bg-red-100 transition"
                                                >
                                                    Delete
                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <!-- EMPTY STATE -->
                <div class="p-16 text-center">

                    <div class="text-5xl mb-5">
                        ⚙️
                    </div>

                    <h4 class="text-xl font-semibold text-slate-900">
                        No services yet
                    </h4>

                    <p class="text-sm text-slate-500 mt-2 mb-6">
                        Start by adding your first Track Tech service.
                    </p>

                    <a
                        href="{{ route('admin.services.create') }}"
                        class="inline-flex items-center
                               px-5 py-3 rounded-lg
                               bg-slate-900 text-white
                               font-semibold hover:bg-slate-800 transition"
                    >
                        + Add First Service
                    </a>

                </div>

            @endif

        </div>

    </main>

</div>

</body>
</html>