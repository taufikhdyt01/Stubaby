@props(['message' => '', 'isFromSender' => false])

<div class="rounded-lg w-1/2 max-w-[50%] break-all p-4 {{ $isFromSender ? 'bg-indigo-100 text-indigo-500 ml-auto' : 'bg-indigo-500 text-white' }} rounded-tl-lg rounded-tr-lg rounded-br-lg">
    {{ $message }}
</div>
