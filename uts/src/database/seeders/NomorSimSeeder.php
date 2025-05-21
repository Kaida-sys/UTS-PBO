<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\NomorSim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NomorSimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NomorSim::firstOrCreate([
            'nomor_sim' => 'SIM1234567890', // perbaiki di sini
        ], [
            'jenis_sim' => 'A',
            'tanggal_berlaku' => now()->addYear(),
        ]);

        NomorSim::firstOrCreate([
            'nomor_sim' => 'SIM9876543210',
        ], [
            'jenis_sim' => 'B',
            'tanggal_berlaku' => now()->addYear(),
        ]);
    }
}
