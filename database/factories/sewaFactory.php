<?php

namespace Database\Factories;

use App\Models\Sewa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sewa>
 */
class sewaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kendaraan_id' => Buku::inRandomOrder()->value('id'),
            'tanggal_mulai' => fake()->date(),
            'lama_sewa' => fake()->boolean(70) ? fake()->date() : null,
            'total_biyaya' => fake()->date(),
        ];
    }
}
