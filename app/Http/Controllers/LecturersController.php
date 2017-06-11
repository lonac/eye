<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;

use App\Lecturer;

use App\User;

use App\Status;


use Auth;

class LecturersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $col = College::findOrFail($id);
        $lect = $col->lecturers;

        $usrid = $lect->get('user_id');

        

        return view('lecturers.index',compact('col','lect'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $col = College::findOrFail($id);
        $dep = $col->departments;

        return view('lecturers.create',compact('col','dep'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $coll = College::findOrFail($id);

        //get the status id

        $lecturer = new Lecturer();
        $lecturer->officeNo = $request->input('officeNo');
        $lecturer->department = $request->input('department');
        $lecturer->college_id = $coll->id;
        $lecturer->phoneno =$request->input('phoneno');
        $lecturer->user_id  = Auth::user()->id;

        $lecturer->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $col = College::findOrFail($id);
        $lect = $col->lecturers;

        return view('lecturers.show',compact('col','lect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
