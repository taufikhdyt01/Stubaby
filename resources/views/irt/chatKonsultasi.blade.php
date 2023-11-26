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
    <!-- Content -->
    <main class="h-full overflow-y-auto">
      <div class="bg-white shadow-md flex justify-between items-center p-4">
          <div class="ml-20">
              <div class="text-indigo-500 text-xl font-semibold">#Tiket{{ $tiket->id }}</div>
              <div class="text-black text-lg">{{ $tiket->judul_tiket }}</div>
              <div class="text-gray-500 text-sm">{{ $tiket->penerima }}</div>
          </div>
          <div class="mr-20">
              <div id="tanggal" class="text-gray-700"></div>
              <div class="text-gray-700 text-right mt-2">
                  @if ($tiket->status === 'Selesai')
                      <span
                          class="bg-green-500 text-white py-1 px-2 rounded-full text-sm">{{ $tiket->status }}</span>
                  @else
                      <span
                          class="bg-yellow-500 text-white py-1 px-2 rounded-full text-sm">{{ $tiket->status }}</span>
                  @endif
              </div>
          </div>
      </div>
      <div class="w-full">
          <div id="chat-container" class="mt-2 space-y-2">
              @foreach ($chats as $chat)
                  @include('components.chat-item', [
                      'message' => $chat->pesan,
                      'isFromSender' => $chat->pengirim_id === auth()->user()->id,
                  ])
              @endforeach
          </div>
      </div>
  </main>
  <!-- Form untuk mengirim pesan -->
  <form id="pesanForm" action="{{ route('kirim.pesan.irt', ['id' => $tiket->id]) }}" method="POST"
    class="fixed bottom-0 w-full bg-white border-t border-gray-200">
      @csrf
      <input type="hidden" name="id_tiket_konsultasi" value="{{ $tiket->id }}">
      <input type="hidden" name="penerima_id" value="{{ $tiket->id_irt }}">
      <div class="flex items-center justify-start p-4">
          <input id="pesanInput" type="text" name="pesan"
              class="w-full py-2 px-4 border border-gray-300 rounded-l-lg" placeholder="Ketik pesan...">
          <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-tr-lg rounded-br-lg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                  <path
                      d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
              </svg>
          </button>
      </div>
  </form>

    <!-- footer -->
    {{-- @include('components.footer') --}}
</body>

</html>