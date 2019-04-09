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
            'third_name' => "altamimi",
            'email' => "mohamed9797khaled@gmail.com",
            'phone_number' => "0791450338",
            'status' => 'active',
            'type' =>'general_manger',
            'username' => "mohamedaltamimi",
            'password' => bcrypt('secret'),
        ]);

        DB::table('admins')->insert([
            'first_name' => "nibras",
            'second_name' => "blabla",
            'third_name' => "blabla",
            'email' => "blabla@yahoo.com",
            'phone_number' => "0790000000",
            'status' => 'inactive',
            'type' =>'supervisor',
            'username' => "nibrassuperme",
            'password' => bcrypt('secret'),
        ]);
    }
}
