<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffids extends Model
{
    protected $fillable = [
    	'staff_id',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
