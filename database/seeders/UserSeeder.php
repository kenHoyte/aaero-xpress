<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'contact' => '000000000',
            'role' => 'admin',
            'password' => Hash::make('admin123')
        ]);
        User::create([
            'name' => 'Ransford Boakye',
            'email' => 'rans@gmail.com',
            'contact' => '0244444444',
            'password' => Hash::make('12345678')
        ]);
    }
}
