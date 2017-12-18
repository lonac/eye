<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

use App\UniversityComponents;

class UniversityComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $university = University::findOrFail($id);

        return view('university_comp.add',compact('university'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $university = University::findOrFail($id);

        $component = new UniversityComponents;

        $all_comp = implode(",", $request->get('comp_name'));

        $arr = serialize($all_comp);

        dd($arr);

       

        $component->university_id = $university->id;
        $component->comp_name = $all_comp;

       // $component->save();

        dd('Components saved');


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

        return view('university_comp.show',compact('university','uni_comp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , $comp_id)
    {
          $university = University::findOrFail($id);

          $comp = UniversityComponents::findOrFail($comp_id);

           return view('university_comp.edit',compact('university','comp'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
         $university = University::findOrFail($id);

         $uni_comp = $university->university_components;

          return view('university_comp.update',compact('university','uni_comp'));
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

    public function newcomp(Request $request, $id)
    {

        $university = University::findOrFail($id);

        $component = new UniversityComponents;

        $component->university_id = $university->id;
        $component->comp_name = $request->input('comp_name');
        $component->save();

        dd('Components saved');
    }
}
