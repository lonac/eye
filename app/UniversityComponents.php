<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityComponents extends Model
{
    protected $fillable = ['comp_name','university_id'];

    public function university_components()
    {
    	return $this->belongsTo('App\UniversityAdministration');
    }
}
