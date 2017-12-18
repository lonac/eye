<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name','code','institution_type','ownership_status','city'];

    public function college()
    {
    	$this->hasMany('App\College');
    }

    public function university_components()
    {
    	return $this->hasMany('App\UniversityComponents');
    }

    public function university_administrations()
    {
    	return $this->hasMany('App\UniversityAdministration');
    }
}
