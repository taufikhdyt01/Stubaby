<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiketKonsultasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_tiket',
        'pengirim',
        'penerima',
        'status',
        'id_ahligizi',
        'id_irt',
    ];

    public function irt()
    {
        return $this->belongsTo(User::class, 'id_irt');
    }

    public function ahliGizi()
    {
        return $this->belongsTo(User::class, 'id_ahligizi');
    }

    public function chats()
    {
        return $this->hasMany(PesanTiketKonsultasi::class, 'id_tiket_konsultasi');
    }

    public static function create(array $attributes = [])
    {
        $instance = new static($attributes);
        $instance->pengirim = $instance->irt->name ?? null;
        $instance->penerima = $instance->ahliGizi->name ?? null;
        $instance->save();

        return $instance;
    }
}
