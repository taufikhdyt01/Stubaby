<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rosyid',
            'email' => 'rosyid@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'Taufik',
            'email' => 'taufik@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'ahliGizi',
        ]);

        DB::table('users')->insert([
            'name' => 'Delisya',
            'email' => 'delisya@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'irt',
        ]);
        
    }
}
