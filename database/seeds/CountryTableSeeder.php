<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country_name' => "jordan",
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "iraq",
        ]);

        DB::table('countries')->insert([
            'country_name' => "egypt",
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "palastine",
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "america",
        ]);

        DB::table('countries')->insert([
            'country_name' => "australia",
        ]);
    }
}
