<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['user_id','status','comment',];

    public function state()
    {
    	return $this->belongsTo('App\Lecturer');
    }
}
