@forelse ($tiketKonsultasis as $tiket)
<div>
    
    <!-- id tiket -->
    <p class="text-primary font-semibold">#Tiket{{ $tiket->id }}</p>
    <!-- judul -->
    <p class="lg:line-clamp-1 font-semibold lg:text-lg md:text-base text-sm">{{ $tiket->judul_tiket }}</p>
    <div class="flex flex-auto justify-between">
        <!-- tanggal dan waktu tiket -->
        <p class="text-gray-600">
            <!-- tanggal -->
            <span class="lg:text-base md:text-sm text-xs">{{ $tiket->created_at->format('d F Y, H:i') }}</span>
        </p>
        <!-- detail status -->
        <span class="py-1 px-2 rounded-full {{ $tiket->status === 'Selesai' ? 'bg-green-500 text-white' : 'bg-yellow-500 text-white' }} text-xs">{{ $tiket->status }}</span>
    </div>
</div>
<hr class="h-px my-2 bg-gray-200 border-0">

@empty
        <p>Tidak Ada Tiket Konsultasi</p>
    @endforelse

<!-- samakan dengan id tiket dkk di page tiket/konsultasi -->