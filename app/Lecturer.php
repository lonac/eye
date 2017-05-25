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
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }

    public function department()
    {
        return $this->belongsTo('App\Departments');
    }
}
