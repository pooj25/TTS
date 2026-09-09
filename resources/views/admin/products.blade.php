<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products | Admin | Track Tech Solutions</title>

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

                <a
                    href="/admin/dashboard"
                    class="text-sm text-slate-300 hover:text-white"
                >
                    Dashboard
                </a>

                <a
                    href="/admin/enquiries"
                    class="text-sm text-slate-300 hover:text-white"
                >
                    Enquiries
                </a>

                <a
                    href="/admin/services"
                    class="text-sm text-slate-300 hover:text-white"
                >
                    Services
                </a>

                <a
                    href="/admin/products"
                    class="text-sm text-white font-semibold"
                >
                    Products
                </a>

                <a
                    href="/admin/login"
                    class="text-sm text-red-400 hover:text-red-300"
                >
                    Logout
                </a>

            </div>

        </div>
    </header>


    <!-- Main -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <!-- Page Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">

            <div>

                <a
                    href="/admin/dashboard"
                    class="text-sm text-slate-500 hover:text-slate-900"
                >
                    ← Back to Dashboard
                </a>

                <h2 class="text-3xl font-bold text-slate-900 mt-3">
                    Products
                </h2>

                <p class="text-slate-500 mt-1">
                    Manage Track Tech Solutions products.
                </p>

            </div>

            <a
                href="{{ route('admin.products.create') }}"
                class="inline-flex items-center justify-center
                       bg-slate-900 text-white px-5 py-3 rounded-lg
                       font-semibold hover:bg-slate-800 transition"
            >
                + Add Product
            </a>

        </div>


        <!-- Success Message -->
        @if (session('success'))

            <div class="mb-6 rounded-lg border border-green-200
                        bg-green-50 px-5 py-4 text-green-700">

                {{ session('success') }}

            </div>

        @endif


        <!-- Validation Errors -->
        @if ($errors->any())

            <div class="mb-6 rounded-lg border border-red-200
                        bg-red-50 px-5 py-4">

                <ul class="text-sm text-red-600 space-y-1">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">

            <div class="bg-white rounded-xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Total Products
                </p>

                <p class="text-3xl font-bold text-slate-900 mt-2">
                    {{ $products->count() }}
                </p>

            </div>


            <div class="bg-white rounded-xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Active Products
                </p>

                <p class="text-3xl font-bold text-green-600 mt-2">
                    {{ $products->where('status', 'active')->count() }}
                </p>

            </div>


            <div class="bg-white rounded-xl border border-slate-200 p-6">

                <p class="text-sm text-slate-500">
                    Inactive Products
                </p>

                <p class="text-3xl font-bold text-red-600 mt-2">
                    {{ $products->where('status', 'inactive')->count() }}
                </p>

            </div>

        </div>


        <!-- Products Table -->
        <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden">

            <div class="px-6 py-5 border-b border-slate-200">

                <h3 class="text-lg font-bold text-slate-900">
                    Product List
                </h3>

                <p class="text-sm text-slate-500 mt-1">
                    View, edit or delete products.
                </p>

            </div>


            @if ($products->count() > 0)

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-slate-50">

                            <tr>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-slate-500 uppercase">
                                    #
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-slate-500 uppercase">
                                    Product
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-slate-500 uppercase">
                                    Category
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-slate-500 uppercase">
                                    Status
                                </th>

                                <th class="px-6 py-4 text-left text-xs font-semibold
                                           text-slate-500 uppercase">
                                    Created
                                </th>

                                <th class="px-6 py-4 text-right text-xs font-semibold
                                           text-slate-500 uppercase">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-100">

                            @foreach ($products as $product)

                                <tr class="hover:bg-slate-50 transition">

                                    <!-- ID -->
                                    <td class="px-6 py-5 text-sm text-slate-500">
                                        {{ $product->id }}
                                    </td>


                                    <!-- Product -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center gap-4">

                                            <div class="w-11 h-11 rounded-lg
                                                        bg-slate-100 flex items-center
                                                        justify-center text-xl">

                                                {{ $product->icon ?? '📦' }}

                                            </div>

                                            <div>

                                                <p class="font-semibold text-slate-900">
                                                    {{ $product->name }}
                                                </p>

                                                <p class="text-sm text-slate-500">
                                                    {{ $product->slug }}
                                                </p>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- Category -->
                                    <td class="px-6 py-5 text-sm text-slate-600">

                                        {{ $product->category ?? '—' }}

                                    </td>


                                    <!-- Status -->
                                    <td class="px-6 py-5">

                                        @if ($product->status === 'active')

                                            <span class="inline-flex items-center
                                                         px-3 py-1 rounded-full
                                                         text-xs font-semibold
                                                         bg-green-100 text-green-700">

                                                Active

                                            </span>

                                        @else

                                            <span class="inline-flex items-center
                                                         px-3 py-1 rounded-full
                                                         text-xs font-semibold
                                                         bg-red-100 text-red-700">

                                                Inactive

                                            </span>

                                        @endif

                                    </td>


                                    <!-- Created -->
                                    <td class="px-6 py-5 text-sm text-slate-500">

                                        {{ $product->created_at->format('d M Y') }}

                                    </td>


                                    <!-- Actions -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center justify-end gap-3">

                                            <a
                                                href="{{ route('admin.products.edit', $product->id) }}"
                                                class="px-4 py-2 rounded-lg
                                                       bg-slate-100 text-slate-700
                                                       text-sm font-semibold
                                                       hover:bg-slate-200 transition"
                                            >
                                                Edit
                                            </a>


                                            <form
                                                action="{{ route('admin.products.destroy', $product->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this product?');"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="px-4 py-2 rounded-lg
                                                           bg-red-50 text-red-600
                                                           text-sm font-semibold
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

                <!-- Empty State -->
                <div class="px-6 py-16 text-center">

                    <div class="text-5xl mb-4">
                        📦
                    </div>

                    <h3 class="text-xl font-bold text-slate-900">
                        No Products Found
                    </h3>

                    <p class="text-slate-500 mt-2 mb-6">
                        Start by adding your first product.
                    </p>

                    <a
                        href="{{ route('admin.products.create') }}"
                        class="inline-flex items-center
                               bg-slate-900 text-white px-5 py-3
                               rounded-lg font-semibold
                               hover:bg-slate-800 transition"
                    >
                        + Add First Product
                    </a>

                </div>

            @endif

        </div>

    </main>


    <!-- Footer -->
    <footer class="max-w-7xl mx-auto px-6 py-8">

        <p class="text-center text-sm text-slate-500">
            © {{ date('Y') }} Track Tech Solutions. Admin Panel.
        </p>

    </footer>

</body>
</html>