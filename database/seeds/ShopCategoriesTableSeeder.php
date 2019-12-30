<?php

use Illuminate\Database\Seeder;

class ShopCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $title = 'None title';
       $category = [
           [
              'slug' => 'none-title',
               'title' =>$title,

           ]
       ];

       foreach (range( 0, 10) as $value){
           $category[] =
               [
                   'title' => $title.$value,
                   'slug' => 'none-title-'.$value
               ];
       }
       DB::table('shop_categories')->insert($category);
    }
}
