<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Pensieri Confusi',
            'slug' => Str::slug('Pensieri Confusi')
        ]);
        Category::create([
            'name' => 'Idee',
            'slug' => Str::slug('Idee')
        ]);
        Category::create([
            'name' => 'Proposte',
            'slug' => Str::slug('Proposte')
        ]);

        Post::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
