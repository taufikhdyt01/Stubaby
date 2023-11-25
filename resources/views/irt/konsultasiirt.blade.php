<!DOCTYPE html>
<html lang="en" x-data="data()">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F8F8] items-center align-middle">
    <!-- Header -->
    @include('components.headerirt', ["activeLink" => "konsultasi"])


    <!-- Section -->
    <!-- Tabel Tiket -->
    <div class="bg-white p-4 shadow-md rounded-lg my-5 lg:mx-20 md:mx-10 items-center align-middle">
        <div class="flex flex-auto justify-between">
            <h2 class="lg:text-xl md:text-lg text-base font-semibold text-gray-700 mb-4">Daftar Tiket Konsultasi</h2>
            <a href="/irt/addTiket" class="items-center align-middle">
                <button class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-[5.5px] text-sm md:text-lg ld:text-xl ">
                    Buat Tiket Baru
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-left">Waktu</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-left">ID Tiket</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-left">Judul Tiket</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-left">Pengirim</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Status</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- taufik ocit, tolong isih -->
                </tbody>
            </table>
        </div>
    </div>


    <!-- Footer -->
    @include('components.footer')
</body>



</html>