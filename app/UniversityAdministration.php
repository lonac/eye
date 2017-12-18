<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityAdministration extends Model
{
    protected $fillable = ['university_id','name','university_comp_id'];

    public function university()
    {
    	return $this->belongsTo('App\University');
    }
}
