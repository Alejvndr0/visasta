<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'espinozaale928@gmail.com',
            'password' => Hash::make('visas1234#*'), // La contraseña será 'admin123'
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}