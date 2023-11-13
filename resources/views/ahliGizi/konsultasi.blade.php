<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  </head>
  <body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    
    <!-- Side bar -->
    @include('components.sidebar')
    
      <div class="flex flex-col flex-1 w-full ml-16"> 
      <!-- Header -->
      @include('components.header')
      
        <!-- Content -->
        <main class="h-full overflow-y-auto">
            <div class="bg-white shadow-md flex justify-between items-center p-4">
                <div class="text-xl font-semibold text-gray-700 ml-20">Tiket Konsultasi</div>
                <div id="tanggal" class="text-gray-700 mr-20"></div>
            </div>
            <!-- Filter -->
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
    <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md">Terapkan</button>
</div>
                    </div>
                </div>
            </form>
            <!-- Tabel Tiket -->
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Daftar Tiket Konsultasi</h2>
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 bg-gray-200 text-left">Waktu</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">ID Tiket</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Judul Tiket</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Pengirim</th>
                            <th class="py-2 px-4 bg-gray-200 text-center">Status</th>
                            <th class="py-2 px-4 bg-gray-200 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiketKonsultasis as $tiket)
                            <tr>
                                <td class="py-2 px-4">{{ $tiket->created_at->format('d F Y, H:i') }}</td>
                                <td class="py-2 px-4">{{ $tiket->id_tiket }}</td>
                                <td class="py-2 px-4">{{ $tiket->judul_tiket }}</td>
                                <td class="py-2 px-4">{{ $tiket->pengirim }}</td>
                                <td class="py-2 px-4 text-center">
                                    <span class="py-1 px-2 rounded-full {{ $tiket->status === 'Selesai' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }} text-xs">{{ $tiket->status }}</span>
                                </td>
                                <td class="py-2 px-4 text-center">
                                <a href="#" onclick="window.location.href='{{ route('tiket.chat', ['id' => $tiket->id]) }}';">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                            <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
        <!-- Footer -->
        @include('components.footer')
    </div>
  </div>
  <script>
  function getFormattedDate() {
    const today = new Date();
    const day = String(today.getDate());
    const monthNames = [
      "Januari", "Februari", "Maret", "April", "Mei", "Juni",
      "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];
    const month = monthNames[today.getMonth()];
    const year = today.getFullYear();
    return `${day} ${month} ${year}`;
  }

  document.getElementById('tanggal').textContent = getFormattedDate();

  document.addEventListener('DOMContentLoaded', function () {
    const dateInput = document.querySelector('#date-input'); 
    const calendarIcon = document.querySelector('#calendar-icon'); 

    flatpickr(dateInput, {
      altInput: true,
      altFormat: 'd/m/Y',
      dateFormat: 'Y-m-d',
      onClose: function (selectedDates, dateStr, instance) {
        console.log(dateStr); 
      },
    });

    calendarIcon.addEventListener('click', function () {
      dateInput._flatpickr.open();
    });
  });
  </script>
  </body>
</html>