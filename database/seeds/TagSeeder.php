<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Riciclato', 'Nuovo arrivo', 'Nuova edizione', 'Copertina rigida'
        ];

        foreach ($tags as $key) {
            $tag = new Tag();
            $tag->name = $key;
            $tag->slug = Str::slug($tag->name, '-');
            $tag->save();
        }
    }
}
