<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate([
            'nama' => 'Budi Santoso',
            'jenis_kelamin' => 'Laki-laki',
            'no_sim' => 'SIM1234567890',
        ]);

        Category::firstOrCreate([
            'nama' => 'Siti Rahma',
            'jenis_kelamin' => 'Perempuan',
            'no_sim' => 'SIM0987654321',
        ]);
        Category::firstOrCreate([
            'nama' => 'Agus Prabowo',
            'jenis_kelamin' => 'Laki-laki',
            'no_sim' => 'SIM1122334455',
        ]);
    }
}