<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aksaraJawaLetter = [
            'ꦲ' => 'Ha',
            'ꦤ' => 'Na',
            'ꦕ' => 'Ca',
            'ꦫ' => 'Ra',
            'ꦏ' => 'Ka',
            'ꦢ' => 'Da',
            'ꦠ' => 'Ta',
            'ꦱ' => 'Sa',
            'ꦮ' => 'Wa',
            'ꦭ' => 'La',
            'ꦥ' => 'Pa',
            'ꦣ' => 'Dha',
            'ꦗ' => 'Ja',
            'ꦪ' => 'Ya',
            'ꦚ' => 'Nya',
            'ꦩ' => 'Ma',
            'ꦒ' => 'Ga',
            'ꦧ' => 'Ba',
            'ꦛ' => 'Tha',
            'ꦔ' => 'Nga',
        ];

        foreach ($aksaraJawaLetter as $character => $latin) {
            Letter::create([
                'script_id' => 1,
                'character' => $character,
                'latin' => $latin,
            ]);
        }
    }
}
