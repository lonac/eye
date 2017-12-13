<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Departments;

use App\College;

use App\Financial;

use Auth;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $col = College::findOrFail($id);
        $fin = $col->financials;
            
        return view('financial.index',compact('col','fin'));
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

         return view('financial.create',compact('col','dep'));
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
     $dep = $col->departments;

     $fin = new Financial;
     $fin->user_id = Auth::user()->id;
     $fin->college_id = $col->id;
     $fin->officeNo = $request->input('officeNo');
     $fin->title = $request->input('title');
     $fin->department = $request->input('department');

     $fin->save();

     return view('financial.show',compact('col','dep'));

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
        $fin = $col->financials;

         return view('financial.show',compact('col','fin'));
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
