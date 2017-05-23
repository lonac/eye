<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegestaffids extends Model
{
    protected $fillable = [

    'college_id',
    'staffids',
    'role',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
