<!DOCTYPE html>
<html lang="en">

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

<body>
    <!-- header -->
    @include('components.headerirt')

    <!-- section -->
    <div class="flex flex-auto justify-between">
        <!-- kiri -->
        <!-- 1 -->
        <div class="bg-white p-4 shadow-md rounded-lg my-5 ml-20 w-[800px]">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Hari ini, 28 September 2023</h2>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <div class="flex flex-auto justify-between items-center align-middle text-center">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">September 2023</h2>
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
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 bg-purple-200 text-left">Tanggal</th>
                        <th class="py-2 px-4 bg-purple-200 text-left">Status</th>
                        <th class="py-2 px-4 bg-purple-200 text-left">Nama Anak</th>
                        <th class="py-2 px-4 bg-purple-200 text-left">Berat Badan</th>
                        <th class="py-2 px-4 bg-purple-200 text-left">Tinggi Badan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tofik, ocit, isi data tabel disini -->
                </tbody>
            </table>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <a href="#">
                <button class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-2">
                    Tambah Informasi
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </a>
        </div>

        <!-- kanan -->
        <div class="mr-20 ml-8 w-[560px]">
            <!-- 2 -->
            <div class="bg-white p-4 shadow-md rounded-lg my-5">
                <div class="flex flex-auto align-text-bottom items-end justify-between">
                    <h2 class="text-2xl font-semibold text-gray-700">
                        Baca Artikel Terbaru
                    </h2>
                    <a href="irt/artikel" class="text-primary font-semibold hover:underline">
                        Lihat Semua
                    </a>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0">
                <!-- Artikel 2.1 -->
                <div class="space-y-5 overflow-y-scroll">
                    <div>
                        <a href="#">
                            <div class="flex flex-auto">
                                <!-- cover artikel -->
                                <img src="{{ asset('/img/artikel1.svg') }}" class="w-[108px] rounded-md" alt="gambar cover">
                                <div class="flex flex-col justify-between mx-3">
                                    <!-- judul artikel -->
                                    <span class="font-semibold text-lg line-clamp-1">8 Cara Menjaga Kesehatan Tubuh Anak agar Tidak Mudah Sakit Jelang Masuk Sekolah</span>
                                    <!-- tanggal dan waktu -->
                                    <p class="text-gray-600">
                                        <span>28 September 2023</span>
                                        <span>12:30</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Artikel 2.2 -->
                    <div>
                        <a href="#">
                            <div class="flex flex-auto">
                                <img src="{{ asset('/img/artikel1.svg') }}" class="w-[108px] rounded-md" alt="gambar cover">
                                <div class="flex flex-col justify-between mx-3">
                                    <span class="font-semibold text-lg line-clamp-1">8 Cara Menjaga Kesehatan Tubuh Anak agar Tidak Mudah Sakit Jelang Masuk Sekolah</span>
                                    <p class="text-gray-600">
                                        <span>28 September 2023</span>
                                        <span>12:30</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Artikel 2.3 -->
                    <div>
                        <a href="#">
                            <div class="flex flex-auto">
                                <img src="{{ asset('/img/artikel1.svg') }}" class="w-[108px] rounded-md" alt="gambar cover">
                                <div class="flex flex-col justify-between mx-3">
                                    <span class="font-semibold text-lg line-clamp-1">8 Cara Menjaga Kesehatan Tubuh Anak agar Tidak Mudah Sakit Jelang Masuk Sekolah</span>
                                    <p class="text-gray-600">
                                        <span>28 September 2023</span>
                                        <span>12:30</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Artikel 2.4 -->
                    <div>
                        <a href="#">
                            <div class="flex flex-auto">
                                <img src="{{ asset('/img/artikel1.svg') }}" class="w-[108px] rounded-md" alt="gambar cover">
                                <div class="flex flex-col justify-between mx-3">
                                    <span class="font-semibold text-lg line-clamp-1">8 Cara Menjaga Kesehatan Tubuh Anak agar Tidak Mudah Sakit Jelang Masuk Sekolah</span>
                                    <p class="text-gray-600">
                                        <span>28 September 2023</span>
                                        <span>12:30</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="bg-white p-4 shadow-md rounded-lg my-5">
                <div class="flex flex-auto align-text-bottom items-end justify-between">
                    <h2 class="text-2xl font-semibold text-gray-700">
                        Tiket Konsultasi
                    </h2>
                    <a href="irt/artikel" class="text-primary font-semibold hover:underline">
                        Lihat Semua
                    </a>
                </div>
                <hr class="h-px my-2 bg-gray-200 border-0">
                <div class="overflow-y-scroll">
                    <!-- tiket 3.1 -->
                    <div>
                        <!-- id tiket -->
                        <p class="text-primary font-semibold">#12345</p>
                        <!-- judul -->
                        <p class="line-clamp-1 font-semibold">Anak saya kurang tertarik untuk makan-makanan utama</p>
                        <div class="flex flex-auto justify-between">
                            <!-- tanggal dan waktu tiket -->
                            <p class="text-gray-600">
                                <span>28 September 2023</span>
                                <span>12:30</span>
                            </p>
                            <!-- detail status -->
                            <p class="bg-green-400 rounded-xl font-semibold px-5 w-max">
                                Selesai
                            </p>
                        </div>
                    </div>
                    <hr class="h-px my-2 bg-gray-200 border-0">
                    <!-- tiket 3.2 -->
                    <div>
                        <!-- id tiket -->
                        <p class="text-primary font-semibold">#12345</p>
                        <!-- judul -->
                        <p class="line-clamp-1 font-semibold">Anak saya kurang tertarik untuk makan-makanan utama</p>
                        <div class="flex flex-auto justify-between">
                            <!-- tanggal dan waktu tiket -->
                            <p class="text-gray-600">
                                <span>28 September 2023</span>
                                <span>12:30</span>
                            </p>
                            <!-- detail status -->
                            <p class="bg-green-400 rounded-xl font-semibold px-5 w-max">
                                Selesai
                            </p>
                        </div>
                    </div>
                    <hr class="h-px my-2 bg-gray-200 border-0">
                    <!-- tiket 3.3 -->
                    <div>
                        <!-- id tiket -->
                        <p class="text-primary font-semibold">#12345</p>
                        <!-- judul -->
                        <p class="line-clamp-1 font-semibold">Anak saya kurang tertarik untuk makan-makanan utama</p>
                        <div class="flex flex-auto justify-between">
                            <!-- tanggal dan waktu tiket -->
                            <p class="text-gray-600">
                                <span>28 September 2023</span>
                                <span>12:30</span>
                            </p>
                            <!-- detail status -->
                            <p class="bg-green-400 rounded-xl font-semibold px-5 w-max">
                                Selesai
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('components.footer')
</body>

</html>