<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
    'cat_name',
    'college_id',
    ];

    public function college()
    {
    	return $this->belongsTo('App\College');
    }
}
