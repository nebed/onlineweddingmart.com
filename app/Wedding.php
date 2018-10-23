<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    public function customer()
    {
    	return $this->belongsTo('App\Customer');
    }

    public function checklist()
    {
    	return $this->hasOne('App\Checklist');
    }
}
