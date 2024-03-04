<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Adjust this according to the namespace of your User model
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void 
    {
        User::create([
            'name' => 'Patient Name',
            'email' => 'patient@mail.com',
            'password' => Hash::make('password'),
            'role'=>'pasien',
        ]);

        User::create([
            'name' => 'Doctor Name',
            'email' => 'doctor@mail.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        User::create([
            'name' => 'Admin Name',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}
