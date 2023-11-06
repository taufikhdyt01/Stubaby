<h1>Daftar Artikel</h1>
<a href="{{ route('articles.create') }}" class="btn btn-primary">Tambah Artikel Baru</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
