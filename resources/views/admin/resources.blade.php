<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Resources | Track Tech Solutions</title>

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
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
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
                class="flex items-center gap-3 px-4 py-3 rounded-lg bg-slate-800 text-white"
            >
                <span>📝</span>
                <span>Resources</span>
            </a>

            <!-- Testimonials -->
            <a
                href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>⭐</span>
                <span>Testimonials</span>
            </a>

        </nav>

        <!-- Logout -->
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


    <!-- ================= MAIN ================= -->

    <div class="flex-1 min-w-0">

        <!-- TOP BAR -->
        <header class="bg-white border-b border-slate-200">

            <div class="px-6 py-5 flex items-center justify-between">

                <div>

                    <h2 class="text-2xl font-bold text-slate-900">
                        Resources
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Manage website resources.
                    </p>

                </div>

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

            <!-- Success Message -->
            @if(session('success'))

                <div class="mb-6 bg-green-50 border border-green-200
                            text-green-700 px-5 py-4 rounded-xl">

                    {{ session('success') }}

                </div>

            @endif


            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-center
                        sm:justify-between gap-4 mb-6">

                <div>

                    <h3 class="text-xl font-bold text-slate-900">
                        All Resources
                    </h3>

                    <p class="text-sm text-slate-500 mt-1">
                        Create and manage your website resources.
                    </p>

                </div>

                <a
                    href="{{ route('admin.resources.create') }}"
                    class="inline-flex items-center justify-center
                           px-5 py-3 rounded-lg bg-slate-900
                           text-white text-sm font-semibold
                           hover:bg-slate-800 transition"
                >
                    + Add Resource
                </a>

            </div>


            <!-- Resources Table -->
            <div class="bg-white rounded-2xl border border-slate-200
                        overflow-hidden">

                @if($resources->count() > 0)

                    <div class="overflow-x-auto">

                        <table class="w-full min-w-[900px]">

                            <thead class="bg-slate-50">

                                <tr>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Resource
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Type
                                    </th>

                                    <th class="px-6 py-4 text-left text-xs
                                               font-semibold text-slate-500 uppercase">
                                        Category
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

                                @foreach($resources as $resource)

                                    <tr class="hover:bg-slate-50 transition">

                                        <!-- Resource -->
                                        <td class="px-6 py-5">

                                            <div class="flex items-center gap-3">

                                                <div class="w-10 h-10 rounded-xl
                                                            bg-slate-100
                                                            flex items-center
                                                            justify-center
                                                            text-lg">

                                                    {{ $resource->icon ?? '📝' }}

                                                </div>

                                                <div>

                                                    <p class="font-semibold text-slate-900">
                                                        {{ $resource->title }}
                                                    </p>

                                                    <p class="text-xs text-slate-500 mt-1">
                                                        {{ $resource->short_description ?? 'No description' }}
                                                    </p>

                                                </div>

                                            </div>

                                        </td>


                                        <!-- Type -->
                                        <td class="px-6 py-5 text-sm text-slate-600">

                                            {{ $resource->type ?? '-' }}

                                        </td>


                                        <!-- Category -->
                                        <td class="px-6 py-5 text-sm text-slate-600">

                                            {{ $resource->category ?? '-' }}

                                        </td>


                                        <!-- Status -->
                                        <td class="px-6 py-5">

                                            @if($resource->status === 'active')

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


                                        <!-- Actions -->
                                        <td class="px-6 py-5">

                                            <div class="flex items-center
                                                        justify-end gap-2">

                                                <!-- Edit -->
                                                <a
                                                    href="{{ route('admin.resources.edit', $resource->id) }}"
                                                    class="px-3 py-2 rounded-lg
                                                           bg-slate-100
                                                           text-slate-700
                                                           text-sm font-medium
                                                           hover:bg-slate-200 transition"
                                                >
                                                    Edit
                                                </a>


                                                <!-- Delete -->
                                                <form
                                                    action="{{ route('admin.resources.destroy', $resource->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this resource?');"
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

                    <div class="p-16 text-center">

                        <div class="text-5xl mb-4">
                            📝
                        </div>

                        <h4 class="text-lg font-semibold text-slate-900">
                            No resources yet
                        </h4>

                        <p class="text-sm text-slate-500 mt-1 mb-6">
                            Start by adding your first resource.
                        </p>

                        <a
                            href="{{ route('admin.resources.create') }}"
                            class="inline-flex items-center
                                   px-5 py-3 rounded-lg
                                   bg-slate-900 text-white
                                   text-sm font-semibold
                                   hover:bg-slate-800 transition"
                        >
                            + Add Resource
                        </a>

                    </div>

                @endif

            </div>

        </main>

    </div>

</div>

</body>
</html>