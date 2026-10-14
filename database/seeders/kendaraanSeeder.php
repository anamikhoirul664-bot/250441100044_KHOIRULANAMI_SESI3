<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kendaraanSeeder extends Seeder

{
    public function run(): void
    {
        kendaraan::factory()->count(5)->create();
    }
}
