<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worshipinfos extends Model{
	public function worshipverses(){
		return $this->belongsTo(Worshipverses::class);
	}

	//fillable mass assignment
	protected $fillable = ['winfotime'];
}