<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $konten = [
            [
                'judul' => 'Apa Itu Stunting?',
                'content' => 'Stunting adalah kondisi gagal tumbuh pada anak yang disebabkan oleh kekurangan gizi kronis. Hal ini dapat menyebabkan keterlambatan pertumbuhan fisik dan perkembangan kognitif anak. Stunting biasanya terjadi pada masa 1000 hari pertama kehidupan, yaitu mulai dari kehamilan hingga dua tahun pertama kehidupan anak.

                Faktor-faktor yang dapat menyebabkan stunting antara lain kurangnya asupan gizi, infeksi kronis, sanitasi yang buruk, dan pelayanan kesehatan yang tidak memadai. Stunting dapat memiliki dampak jangka panjang pada kesehatan dan produktivitas anak di masa dewasa.

                Penting untuk memberikan perhatian khusus pada gizi anak sejak dini untuk mencegah stunting. Pemberian makanan bergizi, pemantauan pertumbuhan, dan akses ke layanan kesehatan yang baik dapat membantu mencegah stunting.',
                
                'user_id' => 2, 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('konten')->insert($konten);
    }
}
