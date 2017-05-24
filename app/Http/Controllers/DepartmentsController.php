<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use App\College;

use App\Departments;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $col = College::findOrFail($id);

        return view('collegedepartments.create',compact('col'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $col = College::findOrFail($id);

        $validator = Validator::make($request->all(),[
                'depart_name'=>'required|unique:departments|max:50',
            ]);

        if($validator->fails())
            {
                return redirect('colleges/'.$col->id.'/collegedepartments/create')
                    ->withErrors($validator)
                    ->withInput();
            }

        $dep = new Departments;

        $dep->college_id = $col->id;
        $dep->depart_name = $request->input('depart_name');

        $dep->save();

          return view('collegedepartments.create',compact('col'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
