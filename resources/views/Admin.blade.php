<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="bg-gray-800 text-white h-screen w-16 fixed top-0 left-0 z-50">
    <div class="flex flex-col items-center justify-between h-full">
        <div class="flex items-center justify-center h-16 w-full">
            <span class="text-2xl font-semibold">S</span>
        </div>
        <ul class="flex flex-col items-center space-y-2 flex-1 justify-center"> <!-- Menggunakan 'flex-1' untuk menggeser item ke tengah -->
            <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                <a href=""> <img src="{{ asset('/img/Anak.svg') }}" alt=""></a>
            </li>
            <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                <a href=""> <img src="{{ asset('/img/Konten.svg') }}" alt=""></a>
            </li>
            <li class="w-10 h-10 p-2 rounded-lg hover:bg-gray-700 cursor-pointer">
                <a href=""> <img src="{{ asset('/img/Konsultasi.svg') }}" alt=""></a>
            </li>
        </ul>
    </div>
</div>


</body>
</html>