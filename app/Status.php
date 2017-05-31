<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['user_id','status','comment',];

    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
