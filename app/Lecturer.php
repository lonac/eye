<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $fillable = [
    'user_id',
    'college_id',
    'statuses_id',
    'officeNo',
    'department',
    'phoneno',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }

    public function department()
    {
        return $this->belongsTo('App\Departments');
    }

    public function instructor()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function state()
    {
        return $this->hasOne('App\State','statuses_id');
    }
}
