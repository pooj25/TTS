<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-950 flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <!-- Logo / Brand -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white">
                Track Tech Solutions
            </h1>

            <p class="text-slate-400 mt-2">
                Admin Panel
            </p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-2xl shadow-2xl p-8">

            <h2 class="text-2xl font-bold text-slate-900">
                Admin Login
            </h2>

            <p class="text-slate-500 mt-2 mb-6">
                Sign in to access the admin dashboard.
            </p>

            <!-- Validation Errors -->
            @if ($errors->any())
                <div class="mb-5 rounded-lg bg-red-50 border border-red-200 p-4">
                    <ul class="text-sm text-red-600 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ route('admin.login') }}" method="POST" class="space-y-5">

                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Email Address
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="admin@tracktech.com"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-slate-300
                               focus:outline-none focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                        class="w-full px-4 py-3 rounded-lg border border-slate-300
                               focus:outline-none focus:ring-2 focus:ring-slate-900
                               focus:border-transparent"
                    >
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full bg-slate-900 text-white py-3 rounded-lg
                           font-semibold hover:bg-slate-800 transition"
                >
                    Login to Admin Panel
                </button>

            </form>

            <!-- Back to Website -->
            <div class="text-center mt-6">
                <a
                    href="/"
                    class="text-sm text-slate-500 hover:text-slate-900"
                >
                    ← Back to Website
                </a>
            </div>

        </div>

        <p class="text-center text-slate-500 text-sm mt-6">
            © {{ date('Y') }} Track Tech Solutions
        </p>

    </div>

</body>
</html>