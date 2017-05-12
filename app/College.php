<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [

    'col_name',
    ];

    public function staffids()
    {
    	return $this->hasMany('App\Staffids');
    }
}
