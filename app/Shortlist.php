<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    public function vendor()
    {
    	return $this->belongsTo('App\Vendor');
    }

    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }
}
