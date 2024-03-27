<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Get course and department instances
        $computerScience = Course::where('courseName', 'Computer Science')->first();
        $engineering = Course::where('courseName', 'Computer Engineering')->first();
        $laws = Course::where('courseName', 'Laws and Regulations')->first();
        $account = Course::where('courseName', 'Account')->first();
        $bankingFinance = Course::where('courseName', 'Banking and fincance')->first();
        $literature = Course::where('courseName', 'Literature')->first();
        $history = Course::where('courseName', 'History')->first();

        $computerScienceDepartment = Department::where('departmentName', 'Computer Science')->first();
        $engineeringDepartment = Department::where('departmentName', 'Engineering')->first();
        $lawDepartment = Department::where('departmentName', 'Law')->first();
        $financeDepartment = Department::where('departmentName', 'Finance')->first();
        $literatureDepartment = Department::where('departmentName', 'Literature')->first();

        // Attach courses to departments
        $computerScience->departments()->attach($computerScienceDepartment->id);
        $engineering->departments()->attach($engineeringDepartment->id);
        $laws->departments()->attach($lawDepartment->id);
        $account->departments()->attach($financeDepartment->id);
        $bankingFinance->departments()->attach($financeDepartment->id);
        $literature->departments()->attach($literatureDepartment->id);
        $history->departments()->attach($literatureDepartment->id);
    }
}
