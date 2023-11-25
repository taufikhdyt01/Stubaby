<div class="container">
    <h1>Edit Data Anak</h1>

    <form method="post" action="{{ route('admin.update', ['id' => $anak->id]) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="nama_anak">Nama Anak</label>
            <input type="text" name="nama_anak" class="form-control" value="{{ $anak->nama_anak }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $anak->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="tinggi_badan">Tinggi Badan</label>
            <input type="number" name="tinggi_badan" class="form-control" value="{{ $anak->tinggi_badan }}" required>
        </div>
        <div class="form-group">
            <label for="berat_badan">Berat Badan</label>
            <input type="number" name="berat_badan" class="form-control" value="{{ $anak->berat_badan }}" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea name="catatan" class="form-control">{{ $anak->catatan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>
