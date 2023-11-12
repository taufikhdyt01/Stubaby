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
            'id_tiket' => '#Tiket10200',
            'judul_tiket' => 'Anak saya kurang tertarik untuk makan-makanan utama',
            'id_irt' => 3,
            'status' => 'Selesai',
            'deskripsi' => 'Halo, bu. Aku agak bingung nih, anakku kok kayaknya kurang tertarik makan makanan utama ya. Udah dicoba masakin yang enak-enak, tapi tetep aja kayaknya ga doyan. Ada saran atau tips dari bu ahli gizi nggak, ya? Biar aku bisa bantu anakku makan dengan baik.',
            'solusi' => 'Halo Bu, tentu saya bisa membantu Anda. Pertama-tama, ada beberapa hal yang bisa dicoba untuk meningkatkan nafsu makan anak Anda. Pertama, pastikan variasi makanan yang diberikan, agar tidak monoton. Kedua, libatkan anak dalam proses memasak atau memilih menu agar lebih antusias. Ketiga, perhatikan waktu makan, usahakan tetap rutin dan nyaman. Jangan lupa juga untuk memberikan porsi yang sesuai dengan kebutuhannya. Selain itu, perhatikan apakah ada masalah kesehatan atau alergi yang mungkin memengaruhi selera makannya. Jika permasalahan ini berlanjut, sebaiknya Anda berkonsultasi dengan dokter atau ahli gizi untuk evaluasi lebih lanjut. Semoga beberapa saran ini bisa membantu meningkatkan nafsu makan anak Anda.'
        ]);

        TiketKonsultasi::create([
            'id_ahligizi' => 2,
            'id_tiket' => '#Tiket10199',
            'judul_tiket' => 'Berat badan anak saya tiba-tiba naik setelah sakit kemarin',
            'id_irt' => 3,
            'status' => 'Pending',
            'deskripsi' => 'Bu, aku agak khawatir nih. Baru-baru ini anakku sakit, dan setelah sembuh, berat badannya tiba-tiba naik. Padahal sebelum sakit, berat badannya biasanya stabil. Ada yang salah nggak, ya? Atau ini wajar aja?'
        ]);
    }
}
