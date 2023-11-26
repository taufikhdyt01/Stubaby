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
    @include('components.headerirt', ["activeLink" => "dashboard"])

    <!-- section -->
    <div class="justify-between align-middle lg:mx-32 md:mx-16">
        <br>
        <p class="font-bold lg:text-3xl md:text-2xl text-xl">
            Hari ini, <span>28 November 2023</span>
        </p>
        <div class="lg:flex lg:flex-auto md:flex md:flex-auto justify-between align-middle lg:space-x-5 md:space-x-3">
            <!-- kiri -->
            <div class="basis-1/2">
                <!-- 1 -->
                <div class="bg-white p-4 shadow-md rounded-lg my-5">
                    <div class="flex flex-auto align-text-bottom items-end justify-between">
                        <h2 class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-700">
                            Baca Artikel Terbaru
                        </h2>
                        <a href="irt/artikel" class="text-primary font-semibold hover:underline lg:text-base text-xs md:text-sm">
                            Lihat Semua
                        </a>
                    </div>
                    <hr class="h-px my-2 bg-gray-200 border-0">
                    <!-- Artikel 2.1 -->
                    <div class="space-y-5 overflow-y-auto h-[450px] card-container">
                        @include('components.artikelhome')
                        @include('components.artikelhome')
                        @include('components.artikelhome')
                        @include('components.artikelhome')
                        @include('components.artikelhome')
                        @include('components.artikelhome')
                    </div>
                </div>
            </div>
            <!-- kiri -->
            <div class="basis-1/2">
                <div class="bg-white p-4 shadow-md rounded-lg my-5">
                    <div class="flex flex-auto align-text-bottom items-end justify-between">
                        <h2 class="lg:text-2xl md:text-xl text-lg font-semibold text-gray-700">
                            Tiket Konsultasi
                        </h2>
                        <a href="irt/artikel" class="text-primary font-semibold hover:underline lg:text-base text-xs md:text-sm">
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