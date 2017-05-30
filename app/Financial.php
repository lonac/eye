<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financial extends Model
{
    protected $fillable = [

    	'user_id',
    	'college_id',
    	'officeNo',
    	'department',
    	'title',

    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }

    public function departments()
    {
    	return $this->belongsTo('App\Departments');
    }
}
