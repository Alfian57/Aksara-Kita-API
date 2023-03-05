<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubMenu::create([
            'script_id' => 1,
            'title' => 'Aksara Jawa',
            'description' => 'Belajar Aksara Jawa',
            'status' => 'verified',
        ]);
    }
}
