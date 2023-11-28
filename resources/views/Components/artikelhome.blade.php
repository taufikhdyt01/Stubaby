
@forelse ($articles as $article)
<div>
    <a href="#">
        <div class="flex flex-auto">
            
            <div class="flex flex-col justify-between mx-3">
            <strong>{{ $article->judul }}</strong> <br>
            {{ Str::limit($article->content, 50) }}<br>
            <a href="{{ route('irt.bacaartikel', $article->id) }}">Baca Selengkapnya</a>
            <hr>

            </div>
        </div>
    </a>
</div>

@empty
        <p>Tidak ada artikel.</p>
    @endforelse

<!-- samakan saja dengan artikel utama untuk id dkk nya -->