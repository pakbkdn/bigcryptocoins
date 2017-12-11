<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}

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
            ['name'=> 'Analysis'],
            ['name'=> 'Ico'],
            ['name'=> 'bitcoin'],
            ['name'=> 'ethereum']
        ]);
    }
}
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['title'=> 'ICO Analysis: Experty', 'alias'=> 'ico-analysis-experty',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'1'],
            ['title'=> 'ICO Analysis: Experty', 'alias'=> 'ico-analysis-experty',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'1']
        ]);
    }
}
