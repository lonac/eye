<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversitySubcomponent extends Model
{
    protected $fillable = ['university_components_id','name',];

    public function university_component()
    {
    	return $this->belongsTo('App\UniversityComponents','university_components_id');
    }
}
