<!DOCTYPE html>
<html  :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
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

    <title>Admin Anak</title>
    
</head>
<body>

    <!-- Sidebar -->
    @include('components-admin.sidebar')
    <!--header-->
    @include('components.header')
    <!-- Konten Utama -->
    <main class="h-full overflow-y-auto">
            
            <!-- Haeder Tabel Data Anak-->
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
  <div class="flex justify-between mb-4">
    <h2 class="text-xl font-semibold text-gray-700">Daftar Data Anak</h2>
    <a href="{{  route('admin.create') }}" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">
        Tambah Data
    </a>
  </div>
    
<!-- Konten utama di sini -->
<table class="w-full border-collapse border border-gray-300">
    <thead>
        <tr>
            
            <th class="px-2 py-4 text-left bg-gray-200">Nama Anak</th>
            <th class="px-2 py-4 text-left bg-gray-200">Tanggal Lahir</th>
            <th class="px-2 py-4 text-left bg-gray-200">Tinggi Badan</th>
            <th class="px-2 py-4 text-left bg-gray-200">Berat Badan</th>
            <!-- <th class="px-2 py-4 text-left font-medium text-gray-500">Catatan</th> -->
            <th class="px-2 py-4 text-left bg-gray-200">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @forelse ($anak as $anakItem)
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->nama_anak }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->tanggal_lahir }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->tinggi_badan }}</td>
        <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->berat_badan }}</td>
        <!-- <td class="px-6 py-4 whitespace-nowrap">{{ $anakItem->catatan }}</td> -->
        <td class="px-6 py-4 whitespace-nowrap">
            <form action="{{ route('admin.delete', ['id' => $anakItem->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn bg-red-500 text-white px-2 py-1 rounded hover-bg-red-700">Hapus</button>
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

</main>

 <!-- Footer -->
 @include('components.footer')

  

</body>
</html>
