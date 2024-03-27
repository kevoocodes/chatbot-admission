<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          // Create a single admin record
          Admin::create([
            'admin_id' => 1, // Adjust according to your requirements
            'firstName' => 'Kelvin',
            'lastName' => 'Msindai',
            'username' => 'admin',
            'password' => Hash::make('password'), // Change to your desired default password
            'role' => 'admin',
        ]);
    }
}
