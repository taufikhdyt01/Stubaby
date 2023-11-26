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

  </head>
  <body>
    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">
    
    <!-- Side bar -->
    @include('components-Admin.sidebar')
    
      <div class="flex flex-col flex-1 w-full ml-16"> 
      <!-- Header -->
      @include('components.header')
      
        <!-- Content -->
        <main class="h-full overflow-y-auto">
        <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
  <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Artikel</h2>
  <form method="post" action="{{ route('Admin-konten.update', $konten->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label for="judul_artikel" class="block text-gray-700">Judul Artikel:</label>
        <input type="text" id="judul_artikel" name="judul_artikel" class="w-full border border-gray-300 rounded-md p-2" value="{{ $konten->judul }}"required>
      </div>
      <div>
        <label for="attachment" class="block text-gray-700">Attachment (Link):</label>
        <input type="text" id="attachment" name="attachment" class="w-full border border-gray-300 rounded-md p-2" value="{{ $konten->attachment }}">
      </div>
    </div>

    <div class="mt-4">
      <label for="isi_artikel" class="block text-gray-700">Isi Artikel:</label>
      <textarea id="isi_artikel" name="isi_artikel" rows="4" class="w-full border border-gray-300 rounded-md p-2"required>{{ $konten->content }}</textarea>
    </div>

    <div class="mt-4">
      <label for="upload_foto" class="block text-gray-700">Upload Foto:</label>
      <input type="file" id="upload_foto" name="upload_foto" class="border border-gray-300 rounded-md p-2">
    </div>

    <div class="mt-4">
      <a href="/admin/Admin-Konten"><button type="button" class= "bg-white text-indigo-500 border border-indigo-500 py-2 px-4 rounded-lg mr-5">Batal Perubahan</button></a>
      <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">Simpan Perubahan</button>
    </div>
  </form>
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


            
