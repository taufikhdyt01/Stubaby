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
            <div class="bg-white shadow-md flex justify-between items-center p-4">
                <div class="text-xl font-semibold text-gray-700 ml-20">Artikel</div>
                <div id="tanggal" class="text-gray-700 mr-20"></div>
            </div>
            
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
  <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Artikel</h2>
  <form method="post" action="{{ route('Admin-konten.store') }}?success" enctype="multipart/form-data" onsubmit="showSuccessPopup()">
    @csrf
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label for="judul_artikel" class="block text-gray-700">Judul Artikel:</label>
        <input type="text" id="judul_artikel" name="judul_artikel" class="w-full border border-gray-300 rounded-md p-2" required>
      </div>
      <div>
        <label for="attachment" class="block text-gray-700">Attachment (Link):</label>
        <input type="text" id="attachment" name="attachment" class="w-full border border-gray-300 rounded-md p-2">
      </div>
    </div>

    <div class="mt-4">
      <label for="isi_artikel" class="block text-gray-700">Isi Artikel:</label>
      <textarea id="isi_artikel" name="isi_artikel" rows="4" class="w-full border border-gray-300 rounded-md p-2" required></textarea>
    </div>

    <div class="mt-4">
      <label for="upload_foto" class="block text-gray-700">Upload Foto:</label>
      <input type="file" id="image" name="image" class="border border-gray-300 rounded-md p-2">
    </div>

    <div class="mt-4">
      <button type="submit" @click.prevent="showNotification" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">Tambah Artikel</button>
    </div>
    <div x-show="isNotificationVisible" x-cloak class="fixed top-0 right-0 m-4 bg-green-500 text-white p-2 rounded">
  Artikel berhasil ditambahkan!
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

  function data() {
    return {
      isNotificationVisible: false,
      showNotification() {
        this.isNotificationVisible = true;
        setTimeout(() => {
          this.isNotificationVisible = false;
        }, 3000); // Adjust the timeout as needed (in milliseconds)
      },
    };
  }

  // Show success pop-up and redirect to the content page
  function showSuccessPopup() {
        alert('Artikel berhasil ditambahkan!');
        window.location.href = "{{ route('konten.index') }}";
    }

    // Check if the URL contains the success parameter
    let urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        showSuccessPopup();
    }
  </script>
  </body>
</html>
