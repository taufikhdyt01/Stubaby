<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TiketKonsultasi;

class TiketKonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TiketKonsultasi::create([
            'id_ahligizi' => 2,
            'judul_tiket' => 'Anak saya kurang tertarik untuk makan-makanan utama',
            'id_irt' => 3,
            'status' => 'Selesai'
        ]);

        TiketKonsultasi::create([
            'id_ahligizi' => 2,
            'judul_tiket' => 'Berat badan anak saya tiba-tiba naik setelah sakit kemarin',
            'id_irt' => 3,
            'status' => 'Pending'
        ]);
    }
}
