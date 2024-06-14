<?php

use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'f_name' => "Praise",
            'l_name' => "Ebuka",
            'image' => "user.png",
            'email' => 'praise.njoga@gmail.com',
            'password' => bcrypt('@praise.com'),
        ]);


    }
}
