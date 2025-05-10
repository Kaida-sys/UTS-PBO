<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')],
        );
        $user->assignRole('super_admin');

        User::firstOrCreate(
            ['email' => 'emp@admin.com'],
            ['name' => 'John Pierre Doe', 'password' => Hash::make('password')],
        )->assignRole('employee');
    }
}
