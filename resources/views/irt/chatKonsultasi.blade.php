<!DOCTYPE html>
<html x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi - Tiket</title>
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

<body>
    <!-- header -->
    @include('components.headerirt', ["activeLink" => "konsultasi"])

    <!-- section -->
    <!-- saya butuh bantuan disini krn ga paham samsek, dan ini blum ada path nya juga  -->
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

    <!-- footer -->
    @include('components.footer')
</body>

</html>