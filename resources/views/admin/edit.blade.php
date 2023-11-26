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
  <h2 class="text-xl font-semibold text-gray-700 mb-4">Update Data</h2>
  <form method="post" action="{{ route('admin.update', $anak->id) }}?success" enctype="multipart/form-data" onsubmit="showSuccessPopup()">
    @csrf
    @method('PATCH')
    <div class="mt-4">
    <label for="user_id">Pilih User:</label>
    <select name="user_id" required>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    </div>
    <div class="mt-4">
      <label for="nama_anak">Nama Anak:</label>
    <input value="{{ $anak->nama_anak }}" type="text" name="nama_anak" class="w-full border border-gray-300 rounded-md p-2"required>
    </div>

    <div class="mt-4">
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input value="{{ $anak->tanggal_lahir }}" type="date" name="tanggal_lahir" class="border border-gray-300 rounded-md p-2" required>
  </div>

    <div class="mt-4">
     
    <label for="tinggi_badan">Tinggi Badan:</label>
    <input value="{{ $anak->tinggi_badan }}" type="number" name="tinggi_badan"  class="w-full border border-gray-300 rounded-md p-2"  required>
    
    </div>

    <div class="mt-4">
    <label for="berat_badan">Berat Badan:</label>
    <input value="{{ $anak->berat_badan }}" type="number" name="berat_badan" class="w-full border border-gray-300 rounded-md p-2" required>
    </div>

    <div class="mt-4">
    <label for="berat_badan">Catatan:</label>
    <textarea value="{{ $anak->catatan }}" id="catatan" name="catatan" rows="4" class="w-full border border-gray-300 rounded-md p-2"></textarea>
    </div>

    <div class="mt-4">
      <button type="submit" @click.prevent="showNotification" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">simpan data</button>
    </div>
    <div x-show="isNotificationVisible" x-cloak class="fixed top-0 right-0 m-4 bg-green-500 text-white p-2 rounded">
  data berhasil ditambahkan!
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
        alert('data berhasil diedit!');
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

