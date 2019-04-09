<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => "programming",
            'slug' => "programming",
        ]);
        
        DB::table('categories')->insert([
            'category_name' => "sport",
            'slug' => "sport",
        ]);
    }
}
