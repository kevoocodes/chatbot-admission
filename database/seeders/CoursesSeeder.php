<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $courses = [
            ['courseName' => 'Bachelor of Arts in Mass Communication', 'description' => 'Deals with Arts and mass communication.', 'duration' => 4, 'fees' => 1500000.00],
            ['courseName' => 'Bachelor of Laws', 'description' => 'Deals with laws and regulation.', 'duration' => 4, 'fees' => 1500000.00],
            ['courseName' => 'Bachelor of Arts in Library and Information Studies', 'description' => 'Deals with arts and library informtion.', 'duration' => 3, 'fees' => 1200000.00],
            ['courseName' => 'Bachelor of Business Administration', 'description' => 'Adminstration of business.', 'duration' => 3, 'fees' => 1300000.00],
            ['courseName' => 'Management of information technology.','description' => 'Adminstration of business.', 'duration' => 3, 'fees' => 1300000.00],
            ['courseName' => 'Bachelor of Arts with Education', 'description' => 'Deals with arts and education.', 'duration' => 3, 'fees' => 1100000.00],
            ['courseName' => 'Bachelor of Human Resources Management', 'description' => 'Deals with human resource management.', 'duration' => 3, 'fees' => 1000000.00],
            ['courseName' => 'Bachelor of Laws (Evening Session)', 'description' => 'Deals with law in the evening.', 'duration' => 3, 'fees' => 1000000.00],
            ['courseName' => 'Bachelor of Arts in Diaconia and Social Work', 'description' => 'Deals with Diaconia and social works.', 'duration' => 3, 'fees' => 1000000.00],
            ['courseName' => 'Bachelor of Accounting with Computing', 'description' => 'Deals with Account and computing.', 'duration' => 3, 'fees' => 1000000.00],
            ['courseName' => 'Bachelor of Accounting with Computing (Evening Session)', 'description' => 'Deals with Acoount with computing in the evening.', 'duration' => 3, 'fees' => 1000000.00],
            
            
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
