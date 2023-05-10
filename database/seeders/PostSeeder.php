<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i< 50;$i++){
            Post::create([
            'title' => $faker->sentence(),
            'content' => $faker->paragraph()
        ]);
        }
    }
}
