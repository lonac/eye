<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [

    'col_name',
    ];

    public function staffids()
    {
    	return $this->hasMany('App\Staffids');
    }

    public function user()
    {
    	return $this->hasMany('App\User');
    }

    public function category()
    {
        return $this->hasMany('App\Category');
    }

    public function departments()
    {
        return $this->hasMany('App\Departments');
    }

    public function lecturers()
    {
        return $this->hasMany('App\Lecturer');
    }

    public function  otherstuffs()
    {
        return $this->hasMany('App\Otherstuffs');
    }
}
