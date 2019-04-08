<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'first_name' => "mohamed",
            'second_name' => "khaled",
            'last_name' => "altamimi",
            'email' => "mohamed9797khaled@gmail.com",
            'phone' => "0791450338",
            'type' => "general_manger",
            'status' => true,
            'username' => "mohamedaltamimi",
            'password' => bcrypt('secret'),
        ]);

        DB::table('admins')->insert([
            'first_name' => "nibras",
            'second_name' => "blabla",
            'last_name' => "blabla",
            'email' => "blabla@yahoo.com",
            'phone' => "079000000",
            'type' => "supervisor",
            'status' => true,
            'username' => "nibrassuperme",
            'password' => bcrypt('secret'),
        ]);
    }
}
