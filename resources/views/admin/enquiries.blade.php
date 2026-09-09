<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enquiries | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen">

    <!-- Header -->
    <header class="bg-slate-950 text-white">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">

            <div>
                <h1 class="text-xl font-bold">
                    Track Tech Solutions
                </h1>

                <p class="text-sm text-slate-400">
                    Admin Panel
                </p>
            </div>

            <div class="flex items-center gap-4">

                <span class="hidden sm:block text-sm text-slate-300">
                    {{ session('admin_name') }}
                </span>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2 bg-white text-slate-900
                               rounded-lg text-sm font-semibold
                               hover:bg-slate-200 transition"
                    >
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </header>


    <!-- Main -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        <!-- Back -->
        <a
            href="{{ route('admin.dashboard') }}"
            class="inline-flex items-center text-sm text-slate-600
                   hover:text-slate-950 mb-6"
        >
            ← Back to Dashboard
        </a>


        <!-- Heading -->
        <div class="mb-8">

            <h2 class="text-3xl font-bold text-slate-900">
                Contact Enquiries
            </h2>

            <p class="text-slate-500 mt-2">
                Manage all enquiries submitted through your website.
            </p>

        </div>


        <!-- Success Message -->
        @if(session('success'))

            <div class="mb-6 rounded-lg border border-green-200
                        bg-green-50 px-5 py-4 text-green-700">

                {{ session('success') }}

            </div>

        @endif


        <!-- Enquiry Count -->
        <div class="mb-6">

            <div class="inline-flex items-center gap-2
                        bg-white border border-slate-200
                        rounded-lg px-4 py-3">

                <span class="text-sm text-slate-500">
                    Total Enquiries:
                </span>

                <span class="font-bold text-slate-900">
                    {{ $enquiries->count() }}
                </span>

            </div>

        </div>


        <!-- Table -->
        <div class="bg-white border border-slate-200
                    rounded-2xl overflow-hidden shadow-sm">

            @if($enquiries->count() > 0)

                <div class="overflow-x-auto">

                    <table class="w-full min-w-[1000px]">

                        <thead class="bg-slate-50 border-b border-slate-200">

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

                                <th class="px-6 py-4 text-center text-xs
                                           font-semibold text-slate-500 uppercase">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody class="divide-y divide-slate-200">

                            @foreach($enquiries as $enquiry)

                                <tr class="hover:bg-slate-50 transition">

                                    <!-- Name -->
                                    <td class="px-6 py-5">

                                        <p class="font-semibold text-slate-900">
                                            {{ $enquiry->first_name }}
                                            {{ $enquiry->last_name }}
                                        </p>

                                    </td>


                                    <!-- Email -->
                                    <td class="px-6 py-5 text-sm text-slate-600">
                                        {{ $enquiry->email }}
                                    </td>


                                    <!-- Company -->
                                    <td class="px-6 py-5 text-sm text-slate-600">
                                        {{ $enquiry->company_name ?? '-' }}
                                    </td>


                                    <!-- Solution -->
                                    <td class="px-6 py-5">

                                        <span class="inline-flex px-3 py-1
                                                     rounded-full
                                                     bg-slate-100
                                                     text-slate-700
                                                     text-xs font-medium">

                                            {{ $enquiry->interested_in ?? '-' }}

                                        </span>

                                    </td>


                                    <!-- Date -->
                                    <td class="px-6 py-5 text-sm text-slate-500">

                                        {{ $enquiry->created_at->format('d M Y') }}

                                    </td>


                                    <!-- Actions -->
                                    <td class="px-6 py-5">

                                        <div class="flex items-center
                                                    justify-center gap-2">

                                            <!-- View -->
                                            <a
                                                href="{{ route('admin.enquiries.show', $enquiry->id) }}"
                                                class="px-3 py-2 rounded-lg
                                                       bg-slate-900 text-white
                                                       text-xs font-semibold
                                                       hover:bg-slate-800"
                                            >
                                                View
                                            </a>


                                            <!-- Delete -->
                                            <form
                                                action="{{ route('admin.enquiries.destroy', $enquiry->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this enquiry?');"
                                            >

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="px-3 py-2 rounded-lg
                                                           bg-red-50 text-red-600
                                                           text-xs font-semibold
                                                           hover:bg-red-100"
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
                <div class="p-12 text-center">

                    <div class="text-5xl mb-4">
                        📩
                    </div>

                    <h3 class="text-lg font-bold text-slate-900">
                        No enquiries found
                    </h3>

                    <p class="text-sm text-slate-500 mt-2">
                        Website contact submissions will appear here.
                    </p>

                </div>

            @endif

        </div>

    </main>

</body>
</html>