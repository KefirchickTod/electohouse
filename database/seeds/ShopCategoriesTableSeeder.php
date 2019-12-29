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
        $title = "No category";
        $category = [
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'parent_id' => 0
        ];

        foreach (range(1, 10) as $value){
            $title = "Category $value";
            $parentId = $value > 4 ? rand(1, 4) : 1;
            $category[] =
                [
                    'title' => $title,
                    'slug' => \Illuminate\Support\Str::slug($title),
                    'parent_id' => $parentId
                ];

            \DB::table('shop_categories')->insert($category);
        }
    }
}
