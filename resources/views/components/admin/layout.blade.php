<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- Navbar -->
    <x-admin.navbar />
    <!-- Sidebar -->
    <x-admin.sidebar />
    <!-- Main content -->
    <main class="p-4 md:ml-64 h-auto pt-20">
        <div class="min-h-screen antialiased bg-gray-50 dark:bg-gray-900">
            {{ $slot }}
        </div>
    </main>
  </div>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>
</html>
