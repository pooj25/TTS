<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Resource | Track Tech Solutions</title>

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
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📊</span>
                <span>Dashboard</span>
            </a>


            <!-- Enquiries -->
            <a
                href="{{ route('admin.enquiries') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📩</span>
                <span>Enquiries</span>
            </a>


            <!-- Services -->
            <a
                href="{{ route('admin.services') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>⚙️</span>
                <span>Services</span>
            </a>


            <!-- Products -->
            <a
                href="{{ route('admin.products') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       text-slate-300 hover:bg-slate-800 hover:text-white transition"
            >
                <span>📦</span>
                <span>Products</span>
            </a>


            <!-- Resources -->
            <a
                href="{{ route('admin.resources') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       bg-slate-800 text-white"
            >
                <span>📝</span>
                <span>Resources</span>
            </a>


            <!-- Testimonials -->
            <a
                href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-lg
                       text-slate-300 hover:bg-slate-800 hover:text-white transition"
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


    <!-- ================= MAIN CONTENT ================= -->

    <div class="flex-1 min-w-0">

        <!-- TOP BAR -->
        <header class="bg-white border-b border-slate-200">

            <div class="px-6 py-5 flex items-center justify-between">

                <div>

                    <h2 class="text-2xl font-bold text-slate-900">
                        Edit Resource
                    </h2>

                    <p class="text-sm text-slate-500 mt-1">
                        Update resource information.
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


                    <div class="w-10 h-10 rounded-full bg-slate-900
                                text-white flex items-center justify-center
                                font-bold">

                        {{ strtoupper(substr(session('admin_name'), 0, 1)) }}

                    </div>

                </div>

            </div>

        </header>


        <!-- CONTENT -->
        <main class="p-6">

            <!-- Validation Errors -->
            @if($errors->any())

                <div class="mb-6 bg-red-50 border border-red-200
                            text-red-700 px-5 py-4 rounded-xl">

                    <ul class="list-disc ml-5 space-y-1">

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- Form Card -->
            <div class="max-w-4xl bg-white rounded-2xl
                        border border-slate-200 p-6 md:p-8">

                <form
                    action="{{ route('admin.resources.update', $resource->id) }}"
                    method="POST"
                >

                    @csrf

                    @method('PUT')


                    <!-- Title -->
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                            Resource Title

                        </label>

                        <input
                            type="text"
                            name="title"
                            value="{{ old('title', $resource->title) }}"
                            required
                            class="w-full px-4 py-3 rounded-xl
                                   border border-slate-300
                                   focus:outline-none focus:ring-2
                                   focus:ring-slate-900"
                        >

                    </div>


                    <!-- Short Description -->
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                            Short Description

                        </label>

                        <textarea
                            name="short_description"
                            rows="3"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-slate-300
                                   focus:outline-none focus:ring-2
                                   focus:ring-slate-900"
                        >{{ old('short_description', $resource->short_description) }}</textarea>

                    </div>


                    <!-- Description -->
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                            Full Description

                        </label>

                        <textarea
                            name="description"
                            rows="7"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-slate-300
                                   focus:outline-none focus:ring-2
                                   focus:ring-slate-900"
                        >{{ old('description', $resource->description) }}</textarea>

                    </div>


                    <!-- Type + Category -->
                    <div class="grid grid-cols-1 md:grid-cols-2
                                gap-6 mb-6">

                        <!-- Type -->
                        <div>

                            <label class="block text-sm font-semibold
                                          text-slate-700 mb-2">

                                Resource Type

                            </label>

                            <select
                                name="type"
                                class="w-full px-4 py-3 rounded-xl
                                       border border-slate-300
                                       bg-white
                                       focus:outline-none focus:ring-2
                                       focus:ring-slate-900"
                            >

                                <option value="">
                                    Select Type
                                </option>

                                <option value="Article"
                                    {{ old('type', $resource->type) == 'Article' ? 'selected' : '' }}>
                                    Article
                                </option>

                                <option value="Case Study"
                                    {{ old('type', $resource->type) == 'Case Study' ? 'selected' : '' }}>
                                    Case Study
                                </option>

                                <option value="Whitepaper"
                                    {{ old('type', $resource->type) == 'Whitepaper' ? 'selected' : '' }}>
                                    Whitepaper
                                </option>

                                <option value="Guide"
                                    {{ old('type', $resource->type) == 'Guide' ? 'selected' : '' }}>
                                    Guide
                                </option>

                                <option value="Report"
                                    {{ old('type', $resource->type) == 'Report' ? 'selected' : '' }}>
                                    Report
                                </option>

                            </select>

                        </div>


                        <!-- Category -->
                        <div>

                            <label class="block text-sm font-semibold
                                          text-slate-700 mb-2">

                                Category

                            </label>

                            <input
                                type="text"
                                name="category"
                                value="{{ old('category', $resource->category) }}"
                                placeholder="Example: Apparel Manufacturing"
                                class="w-full px-4 py-3 rounded-xl
                                       border border-slate-300
                                       focus:outline-none focus:ring-2
                                       focus:ring-slate-900"
                            >

                        </div>

                    </div>


                    <!-- Icon -->
                    <div class="mb-6">

                        <label class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                            Icon

                        </label>

                        <input
                            type="text"
                            name="icon"
                            value="{{ old('icon', $resource->icon) }}"
                            placeholder="Example: 📘"
                            class="w-full px-4 py-3 rounded-xl
                                   border border-slate-300
                                   focus:outline-none focus:ring-2
                                   focus:ring-slate-900"
                        >

                        <p class="text-xs text-slate-500 mt-2">
                            You can use an emoji such as 📘, 📊, 📝 or 💡.
                        </p>

                    </div>


                    <!-- Status -->
                    <div class="mb-8">

                        <label class="block text-sm font-semibold
                                      text-slate-700 mb-2">

                            Status

                        </label>

                        <select
                            name="status"
                            required
                            class="w-full px-4 py-3 rounded-xl
                                   border border-slate-300
                                   bg-white
                                   focus:outline-none focus:ring-2
                                   focus:ring-slate-900"
                        >

                            <option value="active"
                                {{ old('status', $resource->status) == 'active' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="inactive"
                                {{ old('status', $resource->status) == 'inactive' ? 'selected' : '' }}>
                                Inactive
                            </option>

                        </select>

                    </div>


                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3">

                        <button
                            type="submit"
                            class="px-6 py-3 rounded-xl bg-slate-900
                                   text-white font-semibold
                                   hover:bg-slate-800 transition"
                        >
                            Update Resource
                        </button>


                        <a
                            href="{{ route('admin.resources') }}"
                            class="px-6 py-3 rounded-xl bg-slate-100
                                   text-slate-700 font-semibold
                                   text-center
                                   hover:bg-slate-200 transition"
                        >
                            Cancel
                        </a>

                    </div>

                </form>

            </div>

        </main>

    </div>

</div>

</body>
</html>