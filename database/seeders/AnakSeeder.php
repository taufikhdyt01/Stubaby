<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Anak;
use Illuminate\Support\Facades\DB;

class AnakSeeder extends Seeder
{
    public function run()
    {
       
            $data = [
                    [
                        'nama_anak' => 'Anak Pertama',
                        'tanggal_lahir' => '2022-01-01',
                        'tinggi_badan' => 70,
                        'berat_badan' => 8,
                        'catatan' => 'Anak yang sehat',
                        'user_id' => '3',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ];
        
            DB::table('anak')->insert($data);
        
        
    }
}
