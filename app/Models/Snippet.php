<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
	protected $guarded = [];
    /*
    * Relationships
    */
   public function user()
   {
        return $this->belongsTo('App\Models\User');
    }
}
