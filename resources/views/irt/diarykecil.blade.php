<!DOCTYPE html>
<html lang="en" x-data="data()">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DiaryKecil</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F8F8]">
    <!-- Header -->
    @include('components.headerirt', ["activeLink" => "diarykecil"])

    <!-- Section -->
    <div class="bg-white p-4 shadow-md rounded-lg my-5 lg:mx-20 md:mx-10 w-auto items-center align-middle">
        <!-- tanggal hari ini -->
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Hari ini, 28 September 2023</h2>
        <hr class="h-px my-2 bg-gray-200 border-0">
        <div class="flex flex-auto justify-between items-center align-middle text-center">
            <!-- bulan saja -->
            <h2 class="text-xl font-semibold text-gray-700 items-center align-middle text-center">September 2023</h2>
            <div class="">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>

                </button>
            </div>

        </div>
        <hr class="h-px my-2 bg-gray-200 border-0">
        <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-purple-200 text-left">Tanggal</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Status</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Nama Anak</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Berat Badan</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Tinggi Badan</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- tofik, ocit, isi data tabel disini -->
            </tbody>
        </table>
        </div>
        <hr class="h-px my-2 bg-gray-200 border-0">
        <a href="/irt/addDiary">
            <button class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-2">
                Tambah Informasi
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </a>
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>