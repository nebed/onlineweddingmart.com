<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public function photos()
	{
	    return $this->hasMany('App\Photo');
	}
	public function getFirstImageAttribute() {
  		return $this->photos()->first()->path;
	}

	public function vendor()
    {
    	return $this->belongsTo('App\Vendor');
    }
}
