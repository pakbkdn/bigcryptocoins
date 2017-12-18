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
            ['name'=> 'Analysis', 'alias'=> 'analysis'],
            ['name'=> 'Ico', 'alias'=> 'Ico'],
            ['name'=> 'bitcoin', 'alias'=> 'bitcoin'],
            ['name'=> 'ethereum', 'alias'=> 'ethereum'],
            ['name'=> 'altcoins', 'alias'=> 'altcoins'],
            ['name'=> 'mining', 'alias'=> 'mining']
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
            ['title'=> 'ICO Analysis: Experty1', 'alias'=> 'ico-analysis-experty1',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'1'],
            ['title'=> 'ICO Analysis: Experty2', 'alias'=> 'ico-analysis-experty2',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'2'],
            ['title'=> 'ICO Analysis: Experty3', 'alias'=> 'ico-analysis-experty3',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'3'],
            ['title'=> 'ICO Analysis: Experty4', 'alias'=> 'ico-analysis-experty4',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'4'],
            ['title'=> 'ICO Analysis: Experty5', 'alias'=> 'ico-analysis-experty5',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'5'],
            ['title'=> 'ICO Analysis: Experty6', 'alias'=> 'ico-analysis-experty6',	'description'=> 'SFaf',	'content'=> 'dfhxh', 'hot'=> '1', 'view' => '0', 'thumbnail'=>	'1512720051_u5duevtx1cdknqndxqdsb2knqekzknj_1680x8400-15-11-2017-21-01-17.jpg',	'hot'=> '1', 'category_id'=>'6']
        ]);
    }
}
