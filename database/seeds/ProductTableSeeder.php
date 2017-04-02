<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' =>'http://vignette4.wikia.nocookie.net/harrypotter/images/c/c8/Limitierte-Taschenbuchausgabe-Harry-Potter-und-der-Stein-der-Weisen_19_E10134_40.jpg/revision/latest?cb=20161031190502',
            'title' => 'Harry Potter',
            'description' => 'Super cool',
            'price' => 10,
            'category' => 'Fantasy',
            'subcategory' => '10-17'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' =>'https://images-na.ssl-images-amazon.com/images/I/51k6pEZ9b5L._SX324_BO1,204,203,200_.jpg',
            'title' => 'A song of ice and fire - a storm of swords',
            'description' => 'no one is going to survive',
            'price' => 20,
            'category' => 'Fantasy',
            'subcategory' => '10-17'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' =>'http://vignette3.wikia.nocookie.net/lotr/images/7/74/LOTRFOTRmovie.jpg/revision/latest?cb=20150203040819',
            'title' => 'Lord of the rings',
            'description' => 'I liked the movies better...!',
            'price' => 20,
            'category' => 'Fantasy',
            'subcategory' => '10-17'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' =>'http://vignette1.wikia.nocookie.net/iceandfire/images/b/b6/Game_of_thrones.jpeg/revision/latest?cb=20130302001049',
            'title' => 'A song of ice and fire - game of thrones',
            'description' => 'no one is going to survive',
            'price' => 10,
            'category' => 'Fantasy',
            'subcategory' => '10-17'
        ]);
        $product->save();
        $product = new \App\Product([
            'imagePath' =>'http://www.georgerrmartin.com/wp-content/uploads/2012/08/feastforcrows.jpg',
            'title' => 'A song of ice and fire - a feast for crows',
            'description' => 'Still, no one is going to survive!',
            'price' => 20,
            'category' => 'Fantasy',
            'subcategory' => '10-17'
        ]);
        $product->save();

    }
}
