<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UniversityAdministration extends Model
{
    protected $fillable = ['university_id','name'];

    public function university()
    {
    	return $this->belongsTo('App\University');
    }
}
