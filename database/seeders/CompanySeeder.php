<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Acer',
            'slug' => 'acer'
        ]);

        Company::create([
            'name' => 'Asus Inc.',
            'slug' => 'asus-inc'
        ]);
    }
}
