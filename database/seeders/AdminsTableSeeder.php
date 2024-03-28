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
            'firstname' => 'Kelvin',
            'middlename' => 'Aron',
            'lastname' => 'Msindai',
            'email' => 'kelvin@example.com',
            'username' => 'admin',
            'role' => 'admin',
            'password' => Hash::make('password'), // password
        ]);
    }
}
