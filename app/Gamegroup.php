<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamegroup extends Model
{
    protected $table = 'gamegroups';

    protected $fillable = [
    	'name'


    ];
	public function user(){
        return $this->belongsTo('App\User');
	}	
	public function games(){
        return $this->hasMany('App\Game');
	}
}
