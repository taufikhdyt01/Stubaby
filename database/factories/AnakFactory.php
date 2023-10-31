<?php

namespace Database\Factories;

use App\Models\Anak;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class AnakFactory extends Factory
{
    protected $model = Anak::class;

    public function definition()
    {
        return [
            'nama_anak' => $this->faker->name,
            'tanggal_lahir' => $this->faker->date,
            'tinggi_badan' => $this->faker->numberBetween(50, 150),
            'berat_badan' => $this->faker->numberBetween(2, 30),
            'catatan' => $this->faker->text,
        ];
    }
}
