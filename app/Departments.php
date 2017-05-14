<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $fillable = [

    'college_id',
    'depart_name',

    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
