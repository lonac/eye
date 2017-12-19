<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

use App\UniversityComponents;

use App\UniversityAdministration;

class UniversitySubCompController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $university = University::findOrFail($id);

        return view('university-subcomp.show',compact('university'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$comp_id)
    {
         $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $administr = $university->university_administrations()->where('id', $comp->id)->get();

        return view('university_comp.update',compact('university','uni_comp','administr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function add($id, $comp_id)
    {

        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        return view('university-subcomp.add',compact('university','uni_comp'));
    }

    public function store(Request $request, $id, $comp_id)
    {
        $this->validate($request,[
            'name'=>'required|max:100',
            ]);

        $university = University::findOrFail($id);
        $comp = UniversityComponents::findOrFail($comp_id);
        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $universt_admin = new UniversityAdministration;
        $universt_admin->university_id = $university->id;
        $universt_admin->university_comp_id = $comp->id;
        $universt_admin->name = $request->input('name');

        $universt_admin->save();

        return redirect('/universities/'.$university->id.'/university_comp/'.$comp->id.'/university_administr/show')->with('message','New Component Successfully Added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $comp_id)
    {
         $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        return view('university-subcomp.show',compact('university','uni_comp'));
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
