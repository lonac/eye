<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;

class collegController extends Controller
{
    public function colleg()
    {
    	$col = College::all();

    	return view('colleg.choose',compact('col'));
    }

}
