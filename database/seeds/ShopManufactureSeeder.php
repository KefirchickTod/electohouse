<?php

use Illuminate\Database\Seeder;

class ShopManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacture =
            [
              ['title' => 'Manufacture 1'],
            ];

        foreach(range(0, 10) as $value){
            $manufacture[] =
                [
                    'title' => "Manufacture $value"
                ];
        }
        DB::table('shop_manufactures')->insert($manufacture);
    }
}
