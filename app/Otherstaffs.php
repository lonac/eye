<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otherstaffs extends Model
{
    protected $fillable =[

    'user_id',
    'college_id',
    'officeNo',
    'blockNo',
    'department',
    'employee_id',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }

    public function staff()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
