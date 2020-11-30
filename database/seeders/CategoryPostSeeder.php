<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class CategoryPostSeeder extends Seeder
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
            DB::table('category_post')->insert([
                    'post_id' => rand(1, 2000),
                    'category_id' => rand(1, 50),
                ]
            );
        }
    }
}
