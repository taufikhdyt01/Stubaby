@props(['message' => '', 'isFromSender' => false])

<div class="rounded-lg max-w-xs break-all p-4 {{ $isFromSender ? 'bg-white text-indigo-500 ml-auto' : 'bg-indigo-500 text-white' }} rounded-tl-lg rounded-tr-lg rounded-br-lg">
    {{ $message }}
</div>
