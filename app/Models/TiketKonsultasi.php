<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_tiket',
        'judul_tiket',
        'pengirim',
        'status',
        'id_ahligizi',
        'id_irt',
        'solusi',
    ];

    public function irt()
    {
        return $this->belongsTo(User::class, 'id_irt');
    }

    public function chats()
    {
        return $this->hasMany(PesanTiketKonsultasi::class, 'id_tiket_konsultasi');
    }

    public static function create(array $attributes = [])
    {
        $instance = new static($attributes);
        $instance->pengirim = $instance->irt->name ?? null;
        $instance->save();

        return $instance;
    }
}
