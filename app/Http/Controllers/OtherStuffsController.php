<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;

use Auth;

use App\Otherstaffs;


class OtherStuffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $col = College::findOrFail($id);
        $staf = $col->otherstaffs;

            return view('otherstaffs.index',compact('col','staf'));
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

        return view('otherstaffs.create',compact('col','dep'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $col = College::findOrFail($id);

        $staffs = new Otherstaffs();

        $staffs->college_id = $col->id;
        $staffs->department = $request->input('department');
        $staffs->officeNo = $request->input('officeNo');
        $staffs->blockNo = $request->input('blockNo');
        $staffs->employee_id = $request->input('employee_id');
        $staffs->user_id = Auth::user()->id;

        $staffs->save();

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
        $col =College::findOrFail($id);
        $staf = $col->otherstaffs;

        return view('otherstaffs.show',compact('col','staf'));
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
