<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Service | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="min-h-screen">

    <!-- HEADER -->
    <header class="bg-slate-950 text-white">

        <div class="max-w-5xl mx-auto px-6 py-5 flex items-center justify-between">

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

            </div>

        </div>

    </header>


    <!-- MAIN -->
    <main class="max-w-5xl mx-auto px-6 py-8">

        <!-- BACK -->
        <a
            href="{{ route('admin.services') }}"
            class="text-sm text-slate-500 hover:text-slate-900"
        >
            ← Back to Services
        </a>


        <div class="mt-5 mb-8">

            <h2 class="text-3xl font-bold text-slate-900">
                Add New Service
            </h2>

            <p class="text-slate-500 mt-1">
                Create a new service for Track Tech Solutions.
            </p>

        </div>


        <!-- VALIDATION ERRORS -->
        @if($errors->any())

            <div class="mb-6 rounded-xl border border-red-200
                        bg-red-50 px-5 py-4">

                <p class="font-semibold text-red-700 mb-2">
                    Please fix the following errors:
                </p>

                <ul class="text-sm text-red-600 space-y-1">

                    @foreach($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- FORM -->
        <form
            action="{{ route('admin.services.store') }}"
            method="POST"
            class="bg-white rounded-2xl border border-slate-200
                   shadow-sm overflow-hidden"
        >

            @csrf


            <!-- FORM CONTENT -->
            <div class="p-6 sm:p-8 space-y-7">


                <!-- TITLE -->
                <div>

                    <label
                        for="title"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Service Title *
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Example: Fabric Inventory Management"
                        required
                        class="w-full px-4 py-3 rounded-lg
                               border border-slate-300
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >

                </div>


                <!-- SHORT DESCRIPTION -->
                <div>

                    <label
                        for="short_description"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Short Description
                    </label>

                    <textarea
                        id="short_description"
                        name="short_description"
                        rows="3"
                        placeholder="Brief description of the service..."
                        class="w-full px-4 py-3 rounded-lg
                               border border-slate-300
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >{{ old('short_description') }}</textarea>

                    <p class="text-xs text-slate-400 mt-2">
                        Keep this short. It will be used for service cards.
                    </p>

                </div>


                <!-- DESCRIPTION -->
                <div>

                    <label
                        for="description"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Full Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="6"
                        placeholder="Enter the complete service description..."
                        class="w-full px-4 py-3 rounded-lg
                               border border-slate-300
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >{{ old('description') }}</textarea>

                </div>


                <!-- ICON -->
                <div>

                    <label
                        for="icon"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Icon
                    </label>

                    <input
                        type="text"
                        id="icon"
                        name="icon"
                        value="{{ old('icon') }}"
                        placeholder="Example: 🧵"
                        class="w-full px-4 py-3 rounded-lg
                               border border-slate-300
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >

                    <p class="text-xs text-slate-400 mt-2">
                        You can use an emoji such as 🧵, ✂️, 📊, ✓ or ⚙️.
                    </p>

                </div>


                <!-- STATUS -->
                <div>

                    <label
                        for="status"
                        class="block text-sm font-semibold text-slate-700 mb-2"
                    >
                        Status *
                    </label>

                    <select
                        id="status"
                        name="status"
                        required
                        class="w-full px-4 py-3 rounded-lg
                               border border-slate-300
                               bg-white
                               focus:outline-none
                               focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >

                        <option
                            value="active"
                            {{ old('status', 'active') === 'active' ? 'selected' : '' }}
                        >
                            Active
                        </option>

                        <option
                            value="inactive"
                            {{ old('status') === 'inactive' ? 'selected' : '' }}
                        >
                            Inactive
                        </option>

                    </select>

                </div>


            </div>


            <!-- FOOTER -->
            <div class="px-6 sm:px-8 py-5 bg-slate-50
                        border-t border-slate-200
                        flex flex-col sm:flex-row
                        justify-end gap-3">

                <a
                    href="{{ route('admin.services') }}"
                    class="inline-flex items-center justify-center
                           px-5 py-3 rounded-lg
                           border border-slate-300
                           bg-white text-slate-700
                           font-semibold
                           hover:bg-slate-100 transition"
                >
                    Cancel
                </a>


                <button
                    type="submit"
                    class="inline-flex items-center justify-center
                           px-5 py-3 rounded-lg
                           bg-slate-900 text-white
                           font-semibold
                           hover:bg-slate-800 transition"
                >
                    Create Service
                </button>

            </div>

        </form>

    </main>

</div>

</body>
</html>