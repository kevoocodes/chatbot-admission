<?php

namespace Database\Seeders;

use App\Models\Nacte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NacteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'student_number' => 'NS.2859.0069.2014',
                'full_name' => 'Kelvin Msindai'
            ],

            [
                'student_number' => 'NS.2859.0069.2015',
                'full_name' => 'Fatuma Kondo'
            ],
        ];

        //insert the data int the nactes table
        foreach ($data as $item) {
            Nacte::create($item);
        }
    }
}
