<?php

namespace App;
use App\Worshipinfos;

use Illuminate\Database\Eloquent\Model;

class Worshipverses extends Model{
	public function worshipinfos(){
		return $this->hasMany(Worshipinfos::class);
	}

	protected $fillable = ['chap_name','chap_number','verse_range','short_note','worshipinfo_id'];
	//protected $guarded = [];
}