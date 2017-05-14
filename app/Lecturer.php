<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [

    'user_id',
    'college_id',
    'officeNo',
    'department',
    'employ_id',

    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
