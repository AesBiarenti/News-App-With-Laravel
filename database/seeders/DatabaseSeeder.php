<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\News;
use App\Models\NewsImage;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ImageSeeder::class,
            MainCategorySeeder::class,
            CategorySeeder::class,
            NewsSeeder::class,
        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
