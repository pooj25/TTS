<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enquiry Details | Track Tech Solutions</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen">

    <!-- Header -->
    <header class="bg-slate-950 text-white">

        <div class="max-w-5xl mx-auto px-6 py-5 flex items-center justify-between">

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
    <main class="max-w-5xl mx-auto px-6 py-10">

        <!-- Back -->
        <a
            href="{{ route('admin.enquiries') }}"
            class="inline-flex items-center text-sm text-slate-600
                   hover:text-slate-950 mb-6"
        >
            ← Back to Enquiries
        </a>


        <!-- Heading -->
        <div class="mb-8">

            <h2 class="text-3xl font-bold text-slate-900">
                Enquiry Details
            </h2>

            <p class="text-slate-500 mt-2">
                View the complete message submitted by the customer.
            </p>

        </div>


        <!-- Enquiry Card -->
        <div class="bg-white rounded-2xl border border-slate-200
                    shadow-sm overflow-hidden">


            <!-- Card Header -->
            <div class="px-6 py-5 bg-slate-50 border-b border-slate-200
                        flex items-center justify-between">

                <div>

                    <h3 class="text-lg font-bold text-slate-900">
                        {{ $enquiry->first_name }}
                        {{ $enquiry->last_name }}
                    </h3>

                    <p class="text-sm text-slate-500 mt-1">
                        Submitted on
                        {{ $enquiry->created_at->format('d M Y, h:i A') }}
                    </p>

                </div>


                <span class="inline-flex px-3 py-1 rounded-full
                             bg-slate-200 text-slate-700
                             text-xs font-semibold">

                    {{ $enquiry->interested_in ?? 'General Enquiry' }}

                </span>

            </div>


            <!-- Details -->
            <div class="p-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">


                    <!-- First Name -->
                    <div>

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-slate-500">
                            First Name
                        </p>

                        <p class="mt-2 text-slate-900 font-medium">
                            {{ $enquiry->first_name }}
                        </p>

                    </div>


                    <!-- Last Name -->
                    <div>

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-slate-500">
                            Last Name
                        </p>

                        <p class="mt-2 text-slate-900 font-medium">
                            {{ $enquiry->last_name ?? '-' }}
                        </p>

                    </div>


                    <!-- Email -->
                    <div>

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-slate-500">
                            Email Address
                        </p>

                        <a
                            href="mailto:{{ $enquiry->email }}"
                            class="mt-2 inline-block text-slate-900
                                   font-medium hover:underline"
                        >
                            {{ $enquiry->email }}
                        </a>

                    </div>


                    <!-- Company -->
                    <div>

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-slate-500">
                            Company
                        </p>

                        <p class="mt-2 text-slate-900 font-medium">
                            {{ $enquiry->company_name ?? '-' }}
                        </p>

                    </div>


                    <!-- Interested In -->
                    <div class="md:col-span-2">

                        <p class="text-xs font-semibold uppercase
                                  tracking-wide text-slate-500">
                            Interested In
                        </p>

                        <p class="mt-2 text-slate-900 font-medium">
                            {{ $enquiry->interested_in ?? '-' }}
                        </p>

                    </div>


                </div>


                <!-- Message -->
                <div class="mt-8 pt-8 border-t border-slate-200">

                    <p class="text-xs font-semibold uppercase
                              tracking-wide text-slate-500">
                        Customer Message
                    </p>

                    <div class="mt-4 bg-slate-50 rounded-xl p-5">

                        <p class="text-slate-700 leading-7 whitespace-pre-line">
                            {{ $enquiry->message }}
                        </p>

                    </div>

                </div>


                <!-- Actions -->
                <div class="mt-8 pt-6 border-t border-slate-200
                            flex flex-col sm:flex-row gap-3">


                    <!-- Email Customer -->
                    <a
                        href="mailto:{{ $enquiry->email }}"
                        class="inline-flex items-center justify-center
                               px-5 py-3 rounded-lg
                               bg-slate-900 text-white
                               text-sm font-semibold
                               hover:bg-slate-800 transition"
                    >
                        ✉️ Reply via Email
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
                            class="w-full sm:w-auto px-5 py-3
                                   rounded-lg bg-red-50 text-red-600
                                   text-sm font-semibold
                                   hover:bg-red-100 transition"
                        >
                            🗑️ Delete Enquiry
                        </button>

                    </form>


                    <!-- Back -->
                    <a
                        href="{{ route('admin.enquiries') }}"
                        class="inline-flex items-center justify-center
                               px-5 py-3 rounded-lg
                               border border-slate-300
                               text-slate-700 text-sm font-semibold
                               hover:bg-slate-50 transition"
                    >
                        Back
                    </a>

                </div>

            </div>

        </div>

    </main>

</body>
</html>