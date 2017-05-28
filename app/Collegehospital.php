<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collegehospital extends Model
{
    protected $fillable = [

    'college_id',
    'hospital',

    ];

    public function college()
    {
    	$this->belongsTo('App\College');
    }
}
