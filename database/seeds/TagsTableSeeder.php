<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'tag_name' => "jordan_first",
            'slug' => "jordan",
        ]);

        DB::table('tags')->insert([
            'tag_name' => "freedomPalastine",
            'slug' => "freedom",
        ]);

        
        DB::table('tags')->insert([
            'tag_name' => "dareebhtech",
            'slug' => "dareebhtech",
        ]);

        
        DB::table('tags')->insert([
            'tag_name' => "icecream",
            'slug' => "icecream",
        ]);

        
        DB::table('tags')->insert([
            'tag_name' => "helloworld",
            'slug' => "helloworld",
        ]);
    }
}
