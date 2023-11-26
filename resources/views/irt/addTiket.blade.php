<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Konsultasi - Tambah Tiket</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
  <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="{{ asset('js/init-alpine.js') }}"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8F8F8]">
  <!-- header -->
    @include('components.headerirt', ["activeLink" => "konsultasi"])

  <!-- section -->
  <div class="bg-white lg:mx-56 md:mx-32 mx-8 lg:my-32 md:my-16 my-8 space-y-2 lg:space-y-5 md:space-y-3 lg:px-20 md:px-10 px-5 lg:py-12 md:py-8 py-4">
    <h1 class="lg:font-bold md:font-bold font-bold lg:text-4xl md:text-2xl text-lg text-center">Buat Tiket Konsultasi</h1>
    <hr class="h-px my-2 bg-gray-200 border-0">
    <!-- judul tiket -->
    <div class="">
      <label for="judul_tiket" class="block text-gray-700 font-bold lg:text-xl md:text-lg text-sm">Judul Tiket:</label>
      <textarea id="judul_tiket" name="judul_tiket" rows="2" class="w-full border border-gray-300 rounded-md p-2"></textarea>
    </div>
    <!-- isi tiket -->
    <div>
      <label for="isi_tiket" class="block text-gray-700 font-bold lg:text-xl md:text-lg text-sm">Isi Tiket:</label>
      <textarea id="isi_tiket" name="isi_tiket" rows="6" class="w-full border border-gray-300 rounded-md p-2"></textarea>
    </div>
    <!-- foto -->
    <div>
      <label for="upload_foto" class="block text-gray-700 font-bold lg:text-xl md:text-lg text-sm">Upload Foto:</label>
      <input type="file" id="upload_foto" name="upload_foto" class="border border-gray-300 rounded-md p-2">
    </div>
    <!-- tombol -->
    <div class="pt-5 lg:mx-48 md:mx-32 font-bold">
      <button type="submit" @click.prevent="showNotification" class="bg-primary text-white py-2 px-4 rounded-lg w-full">Kirim Tiket</button>
    </div>
  </div>

  <!-- footer -->
  @include('components.footer')
</body>

</html>