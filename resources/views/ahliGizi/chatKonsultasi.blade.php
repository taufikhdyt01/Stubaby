<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

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
          <div class="ml-20">
            <div class="text-indigo-500 text-xl font-semibold">{{ $tiket->id_tiket }}</div>
            <div class="text-black text-lg">{{ $tiket->judul_tiket }}</div>
            <div class="text-gray-500 text-sm">{{ $tiket->pengirim }}</div>
          </div>
          <div class="mr-20">
            <div id="tanggal" class="text-gray-700"></div>
            <div class="text-gray-700 text-right mt-2">
              @if ($tiket->status === 'Selesai')
              <span class="bg-green-500 text-white py-1 px-2 rounded-full text-sm">{{ $tiket->status }}</span>
              @else
              <span class="bg-yellow-500 text-white py-1 px-2 rounded-full text-sm">{{ $tiket->status }}</span>
              @endif
            </div>
          </div>
        </div>

        <!-- Bubble Chat -->
        <div class="mx-20">
          <div class="flex justify-start mt-5">
            <div class="w-1/2 p-4 bg-indigo-500 text-white rounded-tl-lg rounded-tr-lg rounded-br-lg">
              {{ $tiket->deskripsi }}
            </div>
          </div>

          <div class="flex justify-end mt-5">
            @if ($tiket->solusi !== null)
            <div class="w-1/2 p-4 bg-white text-indigo-500 rounded-tl-lg rounded-tr-lg rounded-br-lg">
              {{ $tiket->solusi }}
            </div>
            @endif
          </div>



      </main>
      <form id="solusiForm" action="{{ route('tiket.update', ['id' => $tiket->id]) }}" method="POST">
        @csrf
        <div class="flex items-center justify-start p-4">
          <input id="solusiInput" type="text" name="solusi" class="w-full py-2 px-4 border border-gray-300 rounded-l-lg" placeholder="Ketik pesan...">
          <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-tr-lg rounded-br-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
            </svg>
          </button>
        </div>
      </form>

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

    document.addEventListener('DOMContentLoaded', function() {
      const dateInput = document.querySelector('#date-input');
      const calendarIcon = document.querySelector('#calendar-icon');

      flatpickr(dateInput, {
        altInput: true,
        altFormat: 'd/m/Y',
        dateFormat: 'Y-m-d',
        onClose: function(selectedDates, dateStr, instance) {
          console.log(dateStr);
        },
      });

      calendarIcon.addEventListener('click', function() {
        dateInput._flatpickr.open();
      });
    });
  </script>
</body>

</html>