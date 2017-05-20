<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\College;

use App\Collegestaffids;

class CollegeStaffIDsController extends Controller
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
        
            return view('collegestaffIDs.create',compact('col'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'staffids' => 'required|string|staffids|max:255|unique:collegestaffids',
        ]);
    }

    public function store(Request $request,$id)
    {
        $col = College::findOrFail($id);

        $staffid = new Collegestaffids;

        $staffid->college_id = $col->id;
        $staffid->staffids = $request->input('staffids');

        $staffid->save();

        return redirect('home');
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
