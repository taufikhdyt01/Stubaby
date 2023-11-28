<!DOCTYPE html>
<html  :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database Anak</title>
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

    <!-- Sidebar -->
    @include('components-admin.sidebar')
    <div class="flex flex-col flex-1 w-full ml-16"> 
    <!--header-->
    @include('components.header')
    <!-- Konten Utama -->
    <main class="h-full overflow-y-auto">
            <div class="bg-white shadow-md flex justify-between items-center p-4">
                <div class="text-xl font-semibold text-gray-700 ml-20">Database Anak</div>
                <div id="tanggal" class="text-gray-700 mr-20"></div>
            </div>
            <!-- Haeder Tabel Data Anak-->
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
  <div class="flex justify-between mb-4">
    <h2 class="text-xl font-semibold text-gray-700">Daftar Data Anak</h2>
    <a href="{{  route('admin.create') }}" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">
        Tambah Data Anak +
    </a>
  </div>
    
<!-- Konten utama di sini -->
<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr>
        <th class="px-2 py-4 text-center bg-gray-200">Nama Ibu</th>
            <th class="px-2 py-4 text-center bg-gray-200">Nama Anak</th>
            <th class="px-2 py-4 text-center bg-gray-200">Tanggal Lahir</th>
            <th class="px-2 py-4 text-center bg-gray-200">Tinggi Badan</th>
            <th class="px-2 py-4 text-center bg-gray-200">Berat Badan</th>
            <!-- <th class="px-2 py-4 text-left font-medium text-gray-500">Catatan</th> -->
            <th class="px-2 py-4 text-center bg-gray-200">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($anak as $anakItem)
    <tr>
    <td class="px-6 py-4 whitespace-nowrap">
    {{ $anakItem->user->name }}
    </td>
        <td class="px-6 py-4 text-center whitespace-nowrap">{{ $anakItem->nama_anak }}</td>
        <td class="px-6 py-4 text-center whitespace-nowrap">{{ $anakItem->tanggal_lahir }}</td>
        <td class="px-6 py-4 text-center whitespace-nowrap">{{ $anakItem->tinggi_badan }} cm </td>
        <td class="px-6 py-4 text-center whitespace-nowrap">{{ $anakItem->berat_badan }} kg</td>
        <!-- <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->catatan }}</td> -->
        <td class="px-6 py-4 text-center whitespace-nowrap flex justify-center">
        <a href="{{ route('admin.edit', $anakItem->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                  <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                </svg>
              </a>
            <form action="{{ route('admin.delete', ['id' => $anakItem->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="ml-4" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data anak ini?')" ><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>
            </form>
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
