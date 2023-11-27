<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesanTiketKonsultasi extends Model
{
    protected $table = 'pesan_tiket_konsultasis';

    protected $fillable = [
        'id_tiket_konsultasi',
        'pengirim_id',
        'penerima_id',
        'pesan',
    ];

    public function tiketKonsultasi()
    {
        return $this->belongsTo(TiketKonsultasi::class, 'id_tiket_konsultasi');
    }

    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id');
    }

    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }
}
