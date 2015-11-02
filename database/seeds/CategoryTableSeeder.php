<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->truncate();

    	$items = [
	    	[
		    	'name' => 'Dice game',
		    	'game_id' => mt_rand(1,4),
	    	],	  	        
	    	[
		    	'name' => 'Card game',
		    	'game_id' => mt_rand(1,4),
	    	],		        
	    	[
		    	'name' => 'Boardgame',
		    	'game_id' => mt_rand(1,4),
	    	],
	    	[
		    	'name' => str_random(12),
		    	'game_id' => mt_rand(1,4),
	    	],	  	        
	    	[
		    	'name' => str_random(12),
		    	'game_id' => mt_rand(1,4),
	    	],		        
	    	[
		    	'name' => str_random(12),
		    	'game_id' => mt_rand(1,4),
	    	],	   	        
    	];

    	DB::table('categories')->insert($items);
    }
}
