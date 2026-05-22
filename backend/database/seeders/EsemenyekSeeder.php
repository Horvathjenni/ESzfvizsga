<?php

namespace Database\Seeders;

use App\Models\esemenyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EsemenyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        esemenyek::factory()->create([
        'kategoria_id'=> '1',
        'esemeny_nev'=> 'Hattyú halála',
        'leiras'=> 'Szabadtéri előadás',
        'datum'=> '2026-06-12',
        'ar'=> '2000',
        'resztvevok'=> '2',
        'kepUrl'=> 'kepek/1.jpg'
        ]);
        esemenyek::factory()->create([
        'kategoria_id'=> '2',
        'esemeny_nev'=> 'Edda',
        'leiras'=> 'koncert',
        'datum'=> '2026-06-12',
        'ar'=> '2000',
        'resztvevok'=> '2',
        'kepUrl'=> 'kepek/2.jpg'
        ]);
        esemenyek::factory()->create([
        'kategoria_id'=> '1',
        'esemeny_nev'=> 'kultúra',
        'leiras'=> 'belső kiállitás',
        'datum'=> '2026-06-12',
        'ar'=> '2000',
        'resztvevok'=> '2',
        'kepUrl'=> 'kepek/3.jpg'
        ]);
        esemenyek::factory()->create([
        'kategoria_id'=> '2',
        'esemeny_nev'=> 'Davinchi',
        'leiras'=> 'belső kiállitás',
        'datum'=> '2026-06-12',
        'ar'=> '2000',
        'resztvevok'=> '3',
        'kepUrl'=> 'kepek/4.jpg'
        ]);
    }
}
