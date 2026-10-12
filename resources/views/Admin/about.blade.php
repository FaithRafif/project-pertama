<x-admin.layout>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            {{ $title }}
        </h1>

        <p class="mt-2 text-gray-600 dark:text-gray-400">
            {{ $content }}
        </p>
    </div>

    <div class="p-6 bg-white rounded-lg shadow
                dark:bg-gray-800">

        <h2 class="text-xl font-semibold text-gray-800 dark:text-white">
            {{ $nama }}
        </h2>

        <p class="mt-3 text-gray-600 dark:text-gray-300">
            {{ $detail }}
        </p>

        <p class="mt-4 text-gray-600 dark:text-gray-300">
            GitHub:
            <a href="{{ $github }}"
               target="_blank"
               class="text-blue-600 hover:underline">
                https://github.com/FaithRafif
            </a>
        </p>

    </div>

</x-admin.layout>
