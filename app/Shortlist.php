<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shortlist extends Model
{
    public function vendor()
    {
    	return $this->hasOne('App\Vendor');
    }
}
