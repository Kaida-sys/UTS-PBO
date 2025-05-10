<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Employee::count() == 0){
            Employee::create([
                'fname' => 'John',
                'mname' => 'Pierre',
                'lname' => 'Doe',
                'birthdate' => '2000-01-01',
                'email' => 'emp@admin.com',
                'department_id' => 1,
            ]);
        }
    }
}
