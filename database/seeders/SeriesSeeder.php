<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Series::create([
            'name' => 'Nitro 5',
            'slug' => 'nitro5'
        ]);

        Series::create([
            'name' => 'Republic Of Gamer',
            'slug' => 'rog'
        ]);

        Series::create([
            'name' => 'Predator',
            'slug' => 'predator'
        ]);
    }
}
