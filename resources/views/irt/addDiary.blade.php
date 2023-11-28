<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>create</title>
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

    <div class="flex h-screen bg-gray-50" >
    <div class="flex flex-col flex-1 w-full"> 
       

    <main class="h-full overflow-y-auto">
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah data</h2>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="post" action="{{ route('diarykecil.store') }}">
        @csrf
        <div class="mt-4">
        <label for="nama_anak">Nama Anak:</label>
        <input type="text" name="nama_anak" class="w-full border border-gray-300 rounded-md p-2"required>
        </div>

        <div class="mt-4">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mt-4">
        <label for="tinggi_badan">Tinggi Badan:</label>
        <input type="number" name="tinggi_badan"  class="w-full border border-gray-300 rounded-md p-2"  required>
        </div>

        <div class="mt-4">
        <label for="berat_badan">Berat Badan:</label>
        <input type="number" name="berat_badan" class="w-full border border-gray-300 rounded-md p-2" required>
        </div>

        <div class="mt-4">
        <label for="catatan">Catatan:</label>
        <textarea id="catatan" name="catatan" rows="4" class="w-full border border-gray-300 rounded-md p-2"></textarea>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

        <div class="mt-4">
      <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">Tambah data</button>
    </div>

    </form>
    </div>
    </div>
</body>
</html>
