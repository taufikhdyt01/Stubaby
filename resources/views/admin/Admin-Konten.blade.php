<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konten</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Admin Konten</title>
    
</head>
<body class="font-sans bg-gray-100">
    
    <!-- Sidebar -->
    @include('components-admin.sidebar')
    <!--header-->
    @include('components.header')
    <!-- Konten Utama -->
    <div class="ml-16 p-4">
        <!-- Tombol untuk membuka dan menutup sidebar pada perangkat seluler -->
        <button class="lg:hidden fixed top-4 left-4 text-white p-2 bg-gray-800 hover:bg-gray-700" onclick="toggleSidebar()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Konten utama di sini -->
        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">Selamat datang di Situs Kami</h1>
        <p>Ini adalah halaman utama situs kami.</p>
        <div class="container mx-auto p-8">
        <h1 class="text-2xl font-semibold mb-4">Data Konten</h1>
        <div class="frame">
            <h2 class="text-xl font-semibold">Judul</h2>
            <p class="text-gray-600">Tanggal Publish</p>
            <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-700">Detail</button>
        </div>

        <!-- Tambahkan lebih banyak frame sesuai dengan data Anda -->
    </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('w-16');
            sidebar.classList.toggle('w-0');
        }
    </script>
</body>
</html>
