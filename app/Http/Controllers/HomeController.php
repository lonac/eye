<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;

use App\Status;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $col = College::all();
        $user = Auth::user();
        $status = $user->statuses;
        dd($status);
        
        //return view('home',compact('col'));
    }

    public function welcome()
    {
        $col = College::all();
        return view('/',compact('col'));
    }

}
