<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
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
        @include('components.sidebar')

        <div class="flex flex-col flex-1 w-full ml-16">
            <!-- Header -->
            @include('components.header')

            <div class="bg-white shadow-md flex justify-between items-center p-4 fixed w-full z-50">
                <div class="ml-20">
                    <div class="text-indigo-500 text-xl font-semibold">#Tiket{{ $tiket->id }}</div>
                    <div class="text-black text-lg">{{ $tiket->judul_tiket }}</div>
                    <div class="text-gray-500 text-sm">{{ $tiket->pengirim }}</div>
                </div>
                <div class="mr-20">
                    <div id="tanggal" class="text-gray-700"></div>
                    <div class="text-gray-700 text-right mt-2">
                        @if ($tiket->status === 'Selesai')
                            <span
                                class="bg-green-500 text-white py-1 px-2 rounded-full text-sm">{{ $tiket->status }}</span>
                        @else
                            <form action="{{ route('tiket.update', ['id' => $tiket->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit"
                                    class="bg-yellow-500 text-white py-1 px-2 rounded-full text-sm">Tandai
                                    Selesai</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Content -->
            <main class="h-full overflow-y-auto mt-16 mx-5">

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
            <form id="pesanForm" action="{{ route('kirim.pesan', ['id' => $tiket->id]) }}" method="POST">
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


            <!-- Footer -->
            <!-- @include('components.footer') -->
        </div>
    </div>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
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

        document.addEventListener('DOMContentLoaded', function() {
            const dateInput = document.querySelector('#date-input');
            const calendarIcon = document.querySelector('#calendar-icon');

            flatpickr(dateInput, {
                altInput: true,
                altFormat: 'd/m/Y',
                dateFormat: 'Y-m-d',
                onClose: function(selectedDates, dateStr, instance) {
                    console.log(dateStr);
                },
            });

            calendarIcon.addEventListener('click', function() {
                dateInput._flatpickr.open();
            });
        });
        // Inisialisasi Pusher
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        // Langganan channel untuk pesan pada tiket tertentu
        const channel = pusher.subscribe('ticket.{{ $tiket->id }}');

        channel.bind('newMessage', function(dataPusher) {
            let data = dataPusher.message;
            const isFromSender = data.pengirim_id === {{ auth()->user()->id }};
            const chatContainer = document.getElementById('chat-container')

            const bubbleChat = document.createElement('div');
            bubbleChat.classList.add('rounded-lg', 'p-2', 'max-w-xs', 'break-all',
                'p-4', isFromSender ? 'bg-white' : 'bg-indigo-500', isFromSender ? 'text-indigo-500' :
                'text-white', 'rounded-tl-lg',
                'rounded-tr-lg', 'rounded-br-lg');

            if (isFromSender) {
                bubbleChat.classList.add("ml-auto")
            }

            bubbleChat.textContent = data.pesan;

            chatContainer.appendChild(bubbleChat);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        });
    </script>
</body>

</html>
