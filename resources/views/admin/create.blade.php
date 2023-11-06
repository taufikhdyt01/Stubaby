<div class="container">
        <h1>Tambah Data Anak</h1>

        <form method="post" action="{{ route('admin.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama_anak">Nama Anak</label>
                <input type="text" name="nama_anak" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tinggi_badan">Tinggi Badan</label>
                <input type="number" name="tinggi_badan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="berat_badan">Berat Badan</label>
                <input type="number" name="berat_badan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea name="catatan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
