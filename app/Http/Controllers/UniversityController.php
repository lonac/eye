<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

use App\UniversityComponents;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universities = University::all();

        return view('universities.index',compact('universities'));

   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('universities.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //veriry data
       $this->validate($request,[
            'university_name'=>'required|max:100',
            'city'=>'required|max:50',
            'institution_type'=>'required',
            'ownership_status'=>'required',
            ]);

       //store data
       $university = new University;

       $university->name = $request->input('university_name');
       $university->code = $request->input('code');
       $university->city = $request->input('city');
       $university->institution_type = $request->input('institution_type');
       $university->ownership_status = $request->input('ownership_status');

       $university->save();

       return redirect('universities')->with('message','University was Successfully Registered');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $university = University::findOrFail($id);

        $uni_comp = $university->university_components;

        return view('universities.show',compact('university','uni_comp'));
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

    public function LoginForm($id)
    {
         $university = University::findOrFail($id);

        return view('universities.login',compact('university'));
    }
}
