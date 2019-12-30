<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => '"Admin"',
                'email' => '"rootfsdfsdf@root.com"',
                'password' => "'".md5(\Illuminate\Support\Str::random())."'"
            ],
            [
                'name' => '"Admin2"',
                'email' => '"rootsdfsdfsfaaaserew2@rosdot.com"',
                'password' =>"'".md5(\Illuminate\Support\Str::random())."12'"
            ]
        ];
        DB::table('users')->insert($data);
    }
}
