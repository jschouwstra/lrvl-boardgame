<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->truncate();

        $items = [
	        [
	        	'name' => 'Descent',
	        	'category_id' => mt_rand(1,3)
	        ],	        
	        [
	        	'name' => 'Twilight Imperium',
	        	'category_id' => mt_rand(1,3)
	        ],	        
	        [
	        	'name' => str_random(10),
	        	'category_id' => mt_rand(1,3)
	        ],	        [
	        	'name' => str_random(10),
	        	'category_id' => mt_rand(1,3)
	        ],	        [
	        	'name' => str_random(10),
	        	'category_id' => mt_rand(1,3)
	        ],	        [
	        	'name' => str_random(10),
	        	'category_id' => mt_rand(1,3)
	        ],
        ];

        DB::table('games')->insert($items);

        //
    }
}
