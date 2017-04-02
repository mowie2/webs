<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category([
            'genre' => 'Fantasy'
        ]);
        $category->save();
        $category = new \App\Category([
            'genre' => 'Sci-fi'
        ]);
        $category->save();
        $category = new \App\Category([
            'genre' => 'Adventure'
        ]);
        $category->save();
        $category = new \App\Category([
            'genre' => 'Drama'
        ]);
        $category->save();
    }
}
