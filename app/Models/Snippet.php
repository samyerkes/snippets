<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Snippet extends Model implements AuditableContract
{

	use Auditable;
	
	protected $guarded = [];
    /*
    * Relationships
    */
   public function user()
   {
        return $this->belongsTo('App\Models\User');
    }
}
