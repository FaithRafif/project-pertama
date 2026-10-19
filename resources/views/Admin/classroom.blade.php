<x-admin.layout>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
            {{ $title }}
        </h1>

        <p class="mt-2 text-gray-600 dark:text-gray-400">
            {{ $content }}
        </p>
    </div>

    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">No</th>
                                <th scope="col" class="px-4 py-3">Classroom</th>
                                <th scope="col" class="px-4 py-3">Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classroom as $class)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3">{{ $class->nama_kelas }}</td>
                                    <td class="px-4 py-3">{{ $class->jurusan ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>

</x-admin.layout>
