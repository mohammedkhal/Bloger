<?php
use Illuminate\Support\Str;

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
            'first_name' => "mohamed",
            'second_name' => "khaled",
            'last_name' => "altamimi",
            'email' => "mohamed9797khaled@gmail.com",
            'phone' => "0791450338",
            'status' => true,
            'is_writer' => true,
            'username' => "mohamedaltamimi",
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'first_name' => "areej",
            'second_name' => "dunno",
            'last_name' => "dunno",
            'email' => "any@gmail.com",
            'phone' => "07977777777",
            'status' => true,
            'is_writer' => false,
            'username' => "areejyaseen",
            'password' => bcrypt('secret'),
        ]);
    }
}
