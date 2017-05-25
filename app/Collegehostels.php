<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegehostels extends Model
{
    protected $fillable= [

    'college_id',
    'hostel',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
