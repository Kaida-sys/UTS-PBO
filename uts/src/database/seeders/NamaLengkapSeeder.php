<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\NamaLengkap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NamaLengkapSeeder extends Seeder
{
    public function run(): void
    {
        NamaLengkap::create(['nama' => 'Budi Santoso']);
        NamaLengkap::create(['nama' => 'Dewi Lestari']);
        NamaLengkap::create(['nama' => 'Agus Prabowo']);
    }
}

