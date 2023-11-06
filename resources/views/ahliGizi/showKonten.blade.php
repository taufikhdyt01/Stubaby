<link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
<link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />


            
            <div class="bg-white p-4 shadow-md rounded-lg my-5 mx-20">
  <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Artikel</h2>
  <form method="post" action="{{ route('konten.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-2 gap-4">
      <div>
        <label for="judul_artikel" class="block text-gray-700">Judul Artikel:</label>
        <input type="text" id="judul_artikel" name="judul_artikel" class="w-full border border-gray-300 rounded-md p-2">
      </div>
      <div>
        <label for="attachment" class="block text-gray-700">Attachment (Link):</label>
        <input type="text" id="attachment" name="attachment" class="w-full border border-gray-300 rounded-md p-2">
      </div>
    </div>

    <div class="mt-4">
      <label for="isi_artikel" class="block text-gray-700">Isi Artikel:</label>
      <textarea id="isi_artikel" name="isi_artikel" rows="4" class="w-full border border-gray-300 rounded-md p-2"></textarea>
    </div>

    <div class="mt-4">
      <label for="upload_foto" class="block text-gray-700">Upload Foto:</label>
      <input type="file" id="upload_foto" name="upload_foto" class="border border-gray-300 rounded-md p-2">
    </div>

    <div class="mt-4">
      <button type="button" class="bg-white text-indigo-500 border border-indigo-500 py-2 px-4 rounded-lg mr-5">Batal Perubahan</button>
      <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-lg">Simpan Perubahan</button>
    </div>
  </form>
</div>