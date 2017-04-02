<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = new \App\SubCategory([
            'group' => '0-5'
        ]);
        $subcategory->save();
        $subcategory = new \App\SubCategory([
            'group' => '5-10'
        ]);
        $subcategory->save();
        $subcategory = new \App\SubCategory([
            'group' => '10-17'
        ]);
        $subcategory->save();
        $subcategory = new \App\SubCategory([
            'group' => '18+'
        ]);
        $subcategory->save();
    }
}
