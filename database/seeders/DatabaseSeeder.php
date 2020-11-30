<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(20)->create();
         Category::factory(50)->create();
         Tag::factory(100)->create();
         Post::factory(2000)->create();
         Image::factory(rand(2025,2050))->create();
//        (new PostTagSeeder())->run();
//        (new CategoryPostSeeder())->run();
    }
}
