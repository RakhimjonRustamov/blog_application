<?php

namespace App;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function category(){

		return $this->belongsTo('App\Category'); 

	}									
	public function tags(){

		return $this->belongsToMany('App\Tag');
	}	

	public function comments(){
		return $this->hasMany('App\Comment');
	}
}
