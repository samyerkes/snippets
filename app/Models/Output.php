<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
        
    /*
    * Mutators
    */
   	public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::parse($date)->diffForHumans();
    }

	/*
	/ Relationships
	 */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
