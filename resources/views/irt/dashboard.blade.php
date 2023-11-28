<!DOCTYPE html>
<html lang="en" x-data="data()">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#F8F8F8]">
    <!-- header -->
    @include('components.headerirt', ['activeLink' => 'dashboard'])

    <!-- section -->
    <div class="lg:flex lg:flex-auto md:flex md:flex-auto justify-between align-middle">
        <!-- kiri -->
        <!-- 1 -->
        <div class="bg-white p-4 shadow-md rounded-lg my-5 lg:ml-20 md:ml-10 basis-3/5">
            <!-- tanggal hari ini -->
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Hari ini,
                {{ \Carbon\Carbon::now()->translatedFormat('j F Y') }}</h2>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <div class="overflow-x-auto">

                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-purple-200 text-center">Tanggal Lahir</th>
                            <th class="py-2 px-4 bg-purple-200 text-center">Nama Anak</th>
                            <th class="py-2 px-4 bg-purple-200 text-center">Berat Badan</th>
                            <th class="py-2 px-4 bg-purple-200 text-center">Tinggi Badan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($anak as $anakItem)
                            <tr>
                                <td class="py-2 px-4 whitespace-nowrap text-center">
                                    {{ \Carbon\Carbon::parse($anakItem->tanggal_lahir)->locale('id')->isoFormat('D MMMM YYYY') }}
                                </td>
                                <td class="py-2 px-4 whitespace-nowrap text-center">{{ $anakItem->nama_anak }}</td>
                                <td class="py-2 px-4 whitespace-nowrap text-center">{{ $anakItem->berat_badan }} kg
                                </td>
                                <td class="py-2 px-4 whitespace-nowrap text-center">{{ $anakItem->tinggi_badan }} cm
                                </td>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 whitespace-nowrap">Tidak ada data anak.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <a href="/irt/addDiary">
                <button class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-2">
                    Tambah Informasi
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </a>
        </div>


        <!-- kanan -->
        <div class="lg:mr-20 md:mr-10 basis-2/5 lg:ml-5 md:ml-3">
            <!-- 2 -->
            <div class="bg-white p-4 shadow-md rounded-lg my-5">
                <div class="flex flex-auto align-text-bottom items-end justify-between">
                    <h2 class="text-2xl font-semibold text-gray-700">
                        Baca Artikel Terbaru
                    </h2>
                    <a href="/irt/artikel" class="text-primary font-semibold hover:underline">
                        Lihat Semua
                    </a>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0">
                <!-- Artikel 2.1 -->
                <div class="space-y-5 overflow-y-auto h-[300px] card-container">
                    @include('components.artikelhome')
                </div>
            </div>
            <!-- kiri -->
            <div class="basis-1/2">
                <div class="bg-white p-4 shadow-md rounded-lg my-5">
                    <div class="flex flex-auto align-text-bottom items-end justify-between">
                        <h2 class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-700">
                            Tiket Konsultasi
                        </h2>
                        <a href="irt/artikel"
                            class="text-primary font-semibold hover:underline lg:text-base text-xs md:text-sm">
                            Lihat Semua
                        </a>
                    </div>
                    <hr class="h-px my-2 bg-gray-200 border-0">
                    <div class="overflow-y-auto h-[450px] card-container">
                        @include('components.tikethome')
                        @include('components.tikethome')
                        @include('components.tikethome')
                        @include('components.tikethome')
                        @include('components.tikethome')
                        @include('components.tikethome')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('components.footer')
</body>

</html>
