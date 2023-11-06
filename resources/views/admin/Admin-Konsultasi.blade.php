<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Konsultasi</title>
    <style>
        .frame {
            border: 2px solid #e2e2e2;
            border-radius: 8px;
            padding: 16px;
            margin: 16px;
            display: inline-block;
            width: 300px;
        }
    </style>
</head>
<body class="font-sans bg-gray-100">
    <!-- Sidebar -->
    <div class="bg-gray-800 text-white h-screen w-16 fixed top-0 left-0 z-50" id="sidebar">
        <div class="flex flex-col items-center justify-between h-full">
            <div class="flex items-center justify-center h-16 w-full">
                <span class="text-2xl font-semibold">S</span>
            </div>
            <ul class="flex flex-col items-center space-y-2 flex-1 justify-center">
                <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                    <a href="/admin/dashboard"><img src="{{ asset('/img/Anak.svg') }}" alt=""></a>
                </li>
                <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                    <a href="/Admin-Konten"><img src="{{ asset('/img/Konten.svg') }}" alt=""></a>
                </li>
                <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                    <a href="/Admin-Konsultasi"><img src="{{ asset('/img/Konsultasi.svg') }}" alt=""></a>
                </li>
            </ul>
        </div>
    </div>

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
        <h1 class="text-2xl font-semibold mb-4">Data Konsultasi</h1>
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
