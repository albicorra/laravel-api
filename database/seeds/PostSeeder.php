<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            
            $post= new Post();

            $post->title = $faker->words(7, true);
            $post->content = $faker->paragraph(10, true);
            $post->slug = Str::slug($post->title, '-');
            $post->published_at = $faker->optional()->dateTime();
            $post->save();

        }
    }
}
