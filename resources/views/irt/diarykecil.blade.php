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
      
        <hr class="h-px my-2 bg-gray-200 border-0">
        <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 bg-purple-200 text-left">Tanggal</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Nama Anak</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Berat Badan</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Tinggi Badan</th>
                    <th class="py-2 px-4 bg-purple-200 text-left">Aksi</th>
                </tr>
            </thead>
           <tbody>
    @forelse ($anak as $anakItem)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->tanggal_lahir }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->nama_anak }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->berat_badan }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->tinggi_badan }}</td>
        <!-- <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->catatan }}</td> -->
        <td class="px-6 py-4 whitespace-nowrap flex justify-start">
        <a href="{{ route('irt.editDiary', $anakItem->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                  <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                </svg>
              </a>
        </td>
    </tr>
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