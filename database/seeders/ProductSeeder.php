<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG Mobile',
                'price' => '200',
                'description' => 'A smart phone with 4gb ram and much more',
                'category' => 'mobile',
                'gallery' => 'https://images.unsplash.com/photo-1546054454-aa26e2b734c7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80'
            ],
            [
                'name' => 'iphone 13',
                'price' => '500',
                'description' => 'A smart phone with 8gb ram and much more',
                'category' => 'mobile',
                'gallery' => 'https://cdn.webshopapp.com/shops/326934/files/380423129/image.jpg'
            ],
            [
                'name' => 'Samsung TV',
                'price' => '300',
                'description' => 'A Samsung television with much more',
                'category' => 'tv',
                'gallery' => 'https://images.samsung.com/is/image/samsung/levant-uhd-tu8000-ua55tu8000uxtw-frontblack-229856496?$684_547_PNG$'
            ],
            [
                'name' => 'Sony Tv',
                'price' => '350',
                'description' => 'A Sony television with much more',
                'category' => 'mobile',
                'gallery' => 'https://miro.medium.com/max/1400/1*xjGs6ZfOyN2NkAlNp00eHg.jpeg'
            ],
            [
                'name' => 'Samsung Refrigerator',
                'price' => '200',
                'description' => 'A samsung refrigerator with much more',
                'category' => 'mobile',
                'gallery' => 'https://www.ikea.com/au/en/images/products/genomkyld-french-door-fridge-freezer-stainless-steel__0755782_pe748591_s5.jpg?f=xxs'
            ],
        ]);
    }
}
