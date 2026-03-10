<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                {{ $heading }}
            </h1>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6">
            {{ $slot }}
        </div>
    </main>

</body>
</html>