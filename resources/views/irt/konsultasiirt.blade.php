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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F8F8]">
    <!-- Header -->
    @include('components.headerirt', ["activeLink" => "konsultasi"])


    <!-- Section -->
    <!-- filter -->
    <form action="{{ route('tiket.filter') }}" method="GET">
        <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
            <div class="flex justify-between items-center">
                <div class="text-xl font-semibold text-gray-700">Filter</div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-500">Tanggal</span>
                    <div class="relative">
                        <input id="date-input" type="text" class="py-2 px-4 border border-gray-300 rounded-md w-48" placeholder="DD/MM/YYYY">
                        <div id="calendar-icon" class="absolute top-0 right-0 mt-2 mr-3 text-gray-400 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <span class="text-gray-500 mr-5">Status</span>
                        <select name="status" class="py-2 px-4 border border-gray-300 rounded-md">
                            <option value="selesai">Selesai</option>
                            <option value="pending">Pending</option>
                        </select>
                    </div>
                    <div class="relative mx-5">
                        <input name="search" type="text" class="py-2 px-4 border border-gray-300 rounded-md w-96" placeholder="Cari">
                        <div class="absolute top-0 right-0 mt-2 mr-3 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-white py-2 px-4 rounded-md">Terapkan</button>
                </div>
            </div>
        </div>
    </form>
    <!-- Tabel Tiket -->
    <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
        <div class="flex flex-auto justify-between">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">Daftar Tiket Konsultasi</h2>
        <a href="#"> 
            <button class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-[5.5px]">
                Buat Tiket Baru
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </button>
        </a>
        </div>
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-purple-200 text-left">Waktu</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">ID Tiket</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Judul Tiket</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Pengirim</th>
                    <th class="py-2 px-4 bg-purple-200 text-center">Status</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- taufik ocit, tolong isih -->
            </tbody>
        </table>
    </div>


    <!-- Footer -->
    @include('components.footer')
</body>

</html>