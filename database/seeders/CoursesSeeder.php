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
            ['courseName' => 'Computer Science', 'description' => 'Introduction to computer science principles and programming.', 'duration' => 4, 'fees' => 1500000.00],
            ['courseName' => 'Computer Engineering', 'description' => 'Introduction to enginnering  principles and programming.', 'duration' => 4, 'fees' => 1500000.00],
            ['courseName' => 'Laws and Regulations', 'description' => 'Fundamental concepts of laws.', 'duration' => 3, 'fees' => 1200000.00],
            ['courseName' => 'Account', 'description' => 'Basic principles of Account.', 'duration' => 3, 'fees' => 1300000.00],
            ['courseName' => 'Banking and fincance', 'description' => 'Knows Banking and finance on how it works due to increase awareness of bank.', 'duration' => 3, 'fees' => 1300000.00],
            ['courseName' => 'Literature', 'description' => 'Study of literature including novels, poetry, and drama.', 'duration' => 3, 'fees' => 1100000.00],
            ['courseName' => 'History', 'description' => 'Exploration of historical events and their impact on society.', 'duration' => 3, 'fees' => 1000000.00]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
