<?php

namespace Database\Seeders;

use Database\Factories\NewsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) {
            DB::table("news")->insert([
                'title'=> fake()->sentence(rand(2, 4)),
                'content' => fake()->paragraph(rand(2, 4)),
                'author' => fake()->name(),
                'category_id' => rand(1, 10),
                'private' => fake()->boolean(10),
            ]);
        }
    }
}
