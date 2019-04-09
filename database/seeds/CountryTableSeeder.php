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
            'code' => 'Jo',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "iraq",
            'code' => 'Irq',
        ]);

        DB::table('countries')->insert([
            'country_name' => "egypt",
            'code' => 'Egy',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "palastine",
            'code' => 'Pal',
        ]);
        
        DB::table('countries')->insert([
            'country_name' => "america",
            'code' => 'Usa',
        ]);

        DB::table('countries')->insert([
            'country_name' => "australia",
            'code' => 'Aus',
        ]);
    }
}
