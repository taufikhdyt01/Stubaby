@forelse ($articles as $article)
<div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
        <!-- link artikel -->
        <a href="/irt/bacaartikel">
            <!-- isi gambar disini -->
            
    <img class="h-[250px]" src="{{asset('storage/'.$article->image)}}" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <!-- judul artikel -->
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 line-clamp-2">{{ $article->judul }}</h5>
            </a>
            <!-- isi artikel -->
            <p class="mb-3 font-normal text-gray-700 line-clamp-3"> {{ Str::limit($article->content, 50) }}<br></p>
            <!-- link artikel juga -->
            <a href="{{ route('irt.bacaartikel', $article->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-primary rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 ">
                Baca lengkap
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</div>
@empty
        <p>Tidak ada artikel.</p>
    @endforelse