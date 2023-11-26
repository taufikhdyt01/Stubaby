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
    @include('components.headerirt', ['activeLink' => 'konsultasi'])


    <!-- Section -->
    <!-- Tabel Tiket -->
    <div class="bg-white p-4 shadow-md rounded-lg my-5 lg:mx-20 md:mx-10 items-center align-middle">
        <div class="flex flex-auto justify-between">
            <h2 class="lg:text-xl md:text-lg text-base font-semibold text-gray-700 mb-4">Daftar Tiket Konsultasi</h2>
            <a href="/irt/addTiket" class="items-center align-middle">
                <button
                    class="bg-primary font-semibold flex flex-auto rounded-lg text-white px-5 py-[5.5px] text-sm md:text-lg ld:text-xl ">
                    Buat Tiket Baru
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Waktu</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">ID Tiket</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Judul Tiket</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Ahli Gizi</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Status</th>
                        <th class="py-2 px-4 text-sm md:text-lg ld:text-xl bg-purple-200 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiketKonsultasis as $tiket)
                        <tr>
                            <td class="py-2 px-4 text-center">{{ $tiket->created_at->format('d F Y, H:i') }}</td>
                            <td class="py-2 px-4 text-center">#Tiket{{ $tiket->id }}</td>
                            <td class="py-2 px-4 text-center">{{ $tiket->judul_tiket }}</td>
                            <td class="py-2 px-4 text-center">{{ $tiket->penerima }}</td>
                            <td class="py-2 px-4 text-center">
                                <span
                                    class="py-1 px-2 rounded-full {{ $tiket->status === 'Selesai' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }} text-xs">{{ $tiket->status }}</span>
                            </td>
                            <td class="py-2 px-4 flex justify-center">
                                <a href="#"
                                    onclick="window.location.href='{{ route('tiket.chat.irt', ['id' => $tiket->id]) }}';">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                        <path
                                            d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Footer -->
    @include('components.footer')
</body>



</html>
