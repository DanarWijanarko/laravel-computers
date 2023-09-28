<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Laptop;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run() : void
    {
        User::create([
            'name' => 'Danar Wijanarko',
            'username' => 'dnoobody',
            'email' => 'danarwijanarko98@gmail.com',
            'address' => 'Jl. Ahmad Yani No. 95 Trenggalek',
            'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem architecto explicabo qui illo cum. Voluptatibus.',
            'password' => bcrypt('Kowe213345')
        ]);

        User::factory(4)->create();

        $this->call([CategorySeeder::class]);

        Article::factory(100)->create();

        Message::factory(20)->create();

        Laptop::factory(100)->create();

        $this->call([SeriesSeeder::class]);

        $this->call([CompanySeeder::class]);
    }
}
