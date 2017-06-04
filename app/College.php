<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [

    'college',
    
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

    public function  otherstaffs()
    {
        return $this->hasMany('App\Otherstaffs');
    }

    public function collegestaffids()
    {
        return $this->hasMany('App\Collegestaffids');
    }

    public function collegecafterias()
    {
        return $this->hasMany('App\Collegecafteria');
    }

    public function Collegehostels()
    {
        return $this->hasMany('App\Collegehostels');
    }

    public function collegehospitals()
    {
         return $this->hasMany('App\Collegehospital');
    }

    public function financials()
    {
        return $this->hasMany('App\Financial');
    }

}
