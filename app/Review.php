<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function customer()
    {
    	$this->belongsTo('App\Customer');
    }
}