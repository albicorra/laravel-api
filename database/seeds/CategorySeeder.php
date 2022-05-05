<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Biografico', 'Romanzo storico', 'Giallo', 'Thriller', 'Avventura', 'Fantascienza', 'Fantasy', 'Horror'
        ];

        foreach ($categories as $key) {
            $category = new Category();
            $category->name = $key;
            $category->slug = Str::slug($category->name, '-');
            $category->save();
        }
    }
}
