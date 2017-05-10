<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffIDs extends Model
{
    protected $fillable = [
    	'staff_id',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
