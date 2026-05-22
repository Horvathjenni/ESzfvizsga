<?php

namespace Database\Seeders;

use App\Models\kategoriak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         kategoriak::factory()->create([
            'id' => '1',
            'kategoria_nev' => 'Szinhaz',
        ]);
          kategoriak::factory()->create([
            'id' => '2',
            'kategoria_nev' => 'Kiállitás',
        ]);
    }
}
