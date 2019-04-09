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
            'code' => 'jo',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "iraq",
            'code' => 'iq',
        ]);

        DB::table('countries')->insert([
            'country_name' => "egypt",
            'code' => 'eg',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "palastine",
            'code' => 'ps',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "america",
            'code' => 'us',
        ]);

        DB::table('countries')->insert([
            'country_name' => "australia",
            'code' => 'au',
        ]);
    }
}
