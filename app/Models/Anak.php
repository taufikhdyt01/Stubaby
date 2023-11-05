<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'Anak'; // Gantilah 'nama_tabel' dengan nama tabel yang sesuai jika perlu
    protected $primaryKey = 'ID_Anak'; // Atur kunci utama sesuai dengan atribut ID_Anak

    public $timestamps = true; // Jika Anda tidak memerlukan kolom timestamp created_at dan updated_at

    protected $fillable = [
        'ID_Anak',
        'nama_anak',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan',
        'catatan',
    ];
}
