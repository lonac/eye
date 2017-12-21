<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityComponents extends Model
{
    protected $fillable = ['comp_name','university_id'];

    public function university()
    {
    	return $this->belongsTo('App\University');
    }

     public function university_subcomponents()
    {
    	return $this->hasMany('App\UniversitySubcomponent');
    }

} 
