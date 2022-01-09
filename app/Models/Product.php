<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//
	public function getCategory(){
		return $this->hasOne('App\Models\Category','id','k_id');
	}
}
