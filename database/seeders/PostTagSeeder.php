<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker\Factory::create();
        for ($i = 0; $i < 2000; $i++) {
            DB::table('post_tag')->insert([
                    'post_id' => rand(1, 2000),
                    'tag_id' => rand(1, 100),
                ]
            );
        }
    }
}
