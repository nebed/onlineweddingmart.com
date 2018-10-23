<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'path', 'project_id',
    ];

    public function project()
	{
	    return $this->belongsTo('App\Project');
	}
}
