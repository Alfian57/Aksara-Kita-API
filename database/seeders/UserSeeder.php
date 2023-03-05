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
        User::create([
            'username' => "maruf",
            'email' => "marufilyasa13@gmail.com",
            'password' => Hash::make('password'),
            'role' => 'staff'
        ]);

        User::create([
            'username' => "alfian",
            'email' => "alfiangadingsaputra@gmail.com",
            'password' => Hash::make('password'),
            'role' => 'staff'
        ]);

        User::create([
            'username' => "dewa",
            'email' => "dewawahyu@gmail.com",
            'password' => Hash::make('password'),
            'role' => 'staff'
        ]);
    }
}
