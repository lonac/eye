<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturerstate extends Model
{
    protected $fillable = ['lecturer_id','state','comment',];

    public function state()
    {
    	return $this->belongsTo('App\Lecture','lecturer_id');
    }
}
