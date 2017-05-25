<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegecafteria extends Model
{
    protected $fillable = [

    'college_id',
    'cafe_name',

    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
