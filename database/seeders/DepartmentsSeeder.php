<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $departments = [
            ['departmentName' => 'Computer Science', 'description' => 'Department focusing on computer science principles and programming.'],
            ['departmentName' => 'Engineering', 'description' => 'Department focusing on engineering principles and applications.'],
            ['departmentName' => 'Law', 'description' => 'Department focusing on legal studies and regulations.'],
            ['departmentName' => 'Finance', 'description' => 'Department focusing on finance and accounting principles.'],
            ['departmentName' => 'Literature', 'description' => 'Department focusing on literary studies and analysis.']
        ];
        

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}
