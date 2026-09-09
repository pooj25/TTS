<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Product | Admin | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen">

    <!-- Top Bar -->
    <header class="bg-slate-950 text-white">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

            <div>
                <h1 class="text-xl font-bold">
                    Track Tech Solutions
                </h1>

                <p class="text-sm text-slate-400">
                    Admin Panel
                </p>
            </div>

            <div class="flex items-center gap-5">

                <span class="text-sm text-slate-300">
                    {{ session('admin_name') }}
                </span>

                <a href="/admin/dashboard"
                   class="text-sm text-slate-300 hover:text-white">
                    Dashboard
                </a>

                <a href="/admin/products"
                   class="text-sm text-white font-semibold">
                    Products
                </a>

                <a href="/admin/services"
                   class="text-sm text-slate-300 hover:text-white">
                    Services
                </a>

                <a href="/admin/login"
                   class="text-sm text-red-400 hover:text-red-300">
                    Logout
                </a>

            </div>

        </div>
    </header>


    <!-- Main -->
    <main class="max-w-4xl mx-auto px-6 py-10">

        <a
            href="{{ route('admin.products') }}"
            class="text-sm text-slate-500 hover:text-slate-900"
        >
            ← Back to Products
        </a>


        <div class="mt-4 mb-8">

            <h2 class="text-3xl font-bold text-slate-900">
                Edit Product
            </h2>

            <p class="text-slate-500 mt-2">
                Update the product information below.
            </p>

        </div>


        <!-- Errors -->
        @if ($errors->any())

            <div class="mb-6 rounded-xl border border-red-200
                        bg-red-50 p-5">

                <p class="font-semibold text-red-700 mb-2">
                    Please fix the following errors:
                </p>

                <ul class="text-sm text-red-600 space-y-1">

                    @foreach ($errors->all() as $error)

                        <li>
                            • {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- Form -->
        <form
            action="{{ route('admin.products.update', $product->id) }}"
            method="POST"
            class="bg-white rounded-2xl border border-slate-200
                   shadow-sm p-8"
        >

            @csrf

            @method('PUT')


            <!-- Product Name -->
            <div class="mb-6">

                <label
                    for="name"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Product Name *
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name', $product->name) }}"
                    required
                    class="w-full px-4 py-3 rounded-lg
                           border border-slate-300
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-900
                           focus:border-transparent"
                >

            </div>


            <!-- Slug -->
            <div class="mb-6">

                <label
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Slug
                </label>

                <div class="w-full px-4 py-3 rounded-lg
                            bg-slate-100 border border-slate-200
                            text-slate-500 text-sm">
                    {{ $product->slug }}
                </div>

                <p class="text-xs text-slate-500 mt-2">
                    Slug will automatically update when the product name changes.
                </p>

            </div>


            <!-- Category -->
            <div class="mb-6">

                <label
                    for="category"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Category
                </label>

                <input
                    type="text"
                    id="category"
                    name="category"
                    value="{{ old('category', $product->category) }}"
                    class="w-full px-4 py-3 rounded-lg
                           border border-slate-300
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-900
                           focus:border-transparent"
                >

            </div>


            <!-- Short Description -->
            <div class="mb-6">

                <label
                    for="short_description"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Short Description
                </label>

                <textarea
                    id="short_description"
                    name="short_description"
                    rows="3"
                    class="w-full px-4 py-3 rounded-lg
                           border border-slate-300
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-900
                           focus:border-transparent"
                >{{ old('short_description', $product->short_description) }}</textarea>

            </div>


            <!-- Description -->
            <div class="mb-6">

                <label
                    for="description"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Full Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="6"
                    class="w-full px-4 py-3 rounded-lg
                           border border-slate-300
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-900
                           focus:border-transparent"
                >{{ old('description', $product->description) }}</textarea>

            </div>


            <!-- Icon -->
            <div class="mb-6">

                <label
                    for="icon"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
                >
                    Icon / Emoji
                </label>

                <input
                    type="text"
                    id="icon"
                    name="icon"
                    value="{{ old('icon', $product->icon) }}"
                    placeholder="Example: 📦"
                    class="w-full px-4 py-3 rounded-lg
                           border border-slate-300
                           focus:outline-none
                           focus:ring-2 focus:ring-slate-900
                           focus:border-transparent"
                >

            </div>


            <!-- Status -->
            <div class="mb-8">

                <label
                    for="status"
                    class="block text-sm font-semibold
                           text-slate-700 mb-2"
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
                        {{ old('status', $product->status) === 'active' ? 'selected' : '' }}
                    >
                        Active
                    </option>

                    <option
                        value="inactive"
                        {{ old('status', $product->status) === 'inactive' ? 'selected' : '' }}
                    >
                        Inactive
                    </option>

                </select>

            </div>


            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">

                <button
                    type="submit"
                    class="flex-1 bg-slate-900
                           text-white py-3 px-6
                           rounded-lg font-semibold
                           hover:bg-slate-800 transition"
                >
                    Update Product
                </button>

                <a
                    href="{{ route('admin.products') }}"
                    class="flex-1 text-center
                           bg-slate-100 text-slate-700
                           py-3 px-6 rounded-lg font-semibold
                           hover:bg-slate-200 transition"
                >
                    Cancel
                </a>

            </div>

        </form>

    </main>


    <!-- Footer -->
    <footer class="max-w-7xl mx-auto px-6 py-8">

        <p class="text-center text-sm text-slate-500">
            © {{ date('Y') }} Track Tech Solutions. Admin Panel.
        </p>

    </footer>

</body>
</html>