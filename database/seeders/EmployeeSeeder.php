<?php

namespace Database\Seeders;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data to avoid duplication
        DB::table('employees')->truncate();

        // Generate dummy data for employees
        $employees = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'salary' => 50000,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'salary' => 60000,
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'salary' => 55000,
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'salary' => 62000,
            ],
            [
                'name' => 'Daniel Williams',
                'email' => 'daniel@example.com',
                'salary' => 53000,
            ],
            [
                'name' => 'Olivia Taylor',
                'email' => 'olivia@example.com',
                'salary' => 58000,
            ],
            [
                'name' => 'James Anderson',
                'email' => 'james@example.com',
                'salary' => 57000,
            ],
            [
                'name' => 'Sophia Martinez',
                'email' => 'sophia@example.com',
                'salary' => 54000,
            ],
            [
                'name' => 'Ethan Garcia',
                'email' => 'ethan@example.com',
                'salary' => 56000,
            ],
            [
                'name' => 'Isabella Lopez',
                'email' => 'isabella@example.com',
                'salary' => 59000,
            ],
            // Add more employees as needed

        ];

        // Insert the data into the database
        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
