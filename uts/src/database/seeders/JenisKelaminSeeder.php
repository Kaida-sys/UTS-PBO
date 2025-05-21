<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\JenisKelamin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    public function run(): void
    {
        JenisKelamin::firstOrCreate(['nama' => 'Laki-laki']);
        JenisKelamin::firstOrCreate(['nama' => 'Perempuan']);
    }
}
