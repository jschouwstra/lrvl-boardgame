<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    protected $fillable = [
    	'name',
        'category_id',
    	'user_id',

    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');

    }	
    public function gamegroup(){
        return $this->belongsTo('App\Gamegroup');
	}
}
