<?php

use Illuminate\Database\Seeder;

class ShopImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images =
            [
                'product_id' => 1,
                'image_url' => '/img/1.png',
            ];

        foreach (range(0, 10) as $value){
            $images[] =
                [
                    'product_id' => $value,
                    'image_url' => '/img/'.$value.'.png'
                ];
        }
        DB::table('shop_images')->insert($images);
    }
}
