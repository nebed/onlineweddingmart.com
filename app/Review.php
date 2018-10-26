<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function vendor()
    {
    	return $this->belongsTo('App\Vendor');
    }
}
