<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class kendaraanFactory extends Factory
{
    protected $model = kendaraan::class;

    public function definition(): array
    {
        return [
            'kendaraan_id' => Kategori::inRandomOrder()->value('id'),
            'plat nomor' => fake()->sentence(3),
            'merek' => fake()->name(),
            'jenis' => fake()->name(),
            'tarif perhari' => fake()->numberBetween(2000, 2025),
        ];
    }
}
