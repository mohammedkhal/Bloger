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
            'third_name' => "altamimi",
            'email' => "mohamed9797khaled@gmail.com",
            'status'=>'active',
            'type' => 'user',
            'username' => "mohamedaltamimi",
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'first_name' => "areej",
            'second_name' => "dunno",
            'third_name' => "dunno",
            'email' => "any@gmail.com",
            'status'=>'inactive',
            'type' => 'writer',
            'username' => "areejyaseen",
            'password' => bcrypt('secret'),
        ]);
    }
}
