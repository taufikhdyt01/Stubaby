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
            <a href="#" class="items-center align-middle">
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
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

    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <form action="{{ route('tiket.create') }}" method="POST">
                @csrf
                <div
                    class="bg-white lg:mx-8 md:mx-4 mx-2 lg:my-8 md:my-4 my-2 space-y-2 lg:space-y-3 md:space-y-2 lg:px-8 md:px-4 px-2 lg:py-6 md:py-4 py-2">
                    <h1 class="lg:font-bold md:font-bold font-bold lg:text-2xl md:text-xl text-lg text-center">Buat
                        Tiket Konsultasi</h1>
                    <hr class="h-px my-2 bg-gray-200 border-0">
                    <!-- judul tiket -->
                    <div>
                        <label for="judul_tiket"
                            class="block text-gray-700 font-bold lg:text-lg md:text-base text-sm">Judul Tiket:</label>
                        <textarea id="judul_tiket" name="judul_tiket" rows="2" class="w-full border border-gray-300 rounded-md p-2"></textarea>
                    </div>
                    <!-- pilih ahli gizi -->
                    <div>
                        <label for="pilih_ahli_gizi"
                            class="block text-gray-700 font-bold lg:text-lg md:text-base text-sm">Pilih ahli
                            gizi:</label>
                        <select id="pilih_ahli_gizi" name="pilih_ahli_gizi"
                            class="w-full border border-gray-300 rounded-md p-2">
                            <option selected disabled>Pilih Ahli Gizi</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tombol -->
                    <div class="pt-3 lg:mx-4 md:mx-2 font-bold">
                        <button type="submit" class="bg-primary text-white py-2 px-4 rounded-lg w-full">Buat
                            Tiket</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <!-- Footer -->
    @include('components.footer')
</body>



</html>
