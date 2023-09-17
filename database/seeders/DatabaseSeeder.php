<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Danar Wijanarko',
            'username' => 'dnoobody',
            'email' => 'danarwijanarko98@gmail.com',
            'password' => bcrypt('Kowe213345')
        ]);

        User::factory(4)->create();

        $this->call([CategorySeeder::class]);

        Article::factory(100)->create();

        Message::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
