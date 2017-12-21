<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

use App\UniversityComponents;

use App\UniversityAdministration;

//use Illuminate\Support\Facades\Validator;

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

        $comp_names = implode(",", $request->get('comp_name'));

        $comp_name = explode(',', $comp_names);

        if (!empty($comp_name)) {
            foreach ($comp_name as $name) {
            $arr[] = [
                    'university_id'=>University::findOrFail($id)->id,
                    'comp_name'=> $name,
                     ];
        }
            if(!empty($arr)){
                \DB::table('university_components')->insert($arr);
                    
                    return redirect('universities/'.$university->id.'/university_comp/add')
                    ->with('message','The Component was Successfully Added!');
            }

        }
        

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $comp_id)
    {
         $comp = UniversityComponents::where('id', $comp_id)
            ->orWhere('comp_name', $comp_id)
            ->firstOrFail();

        $university = University::findOrFail($id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $uni_subcomp = $comp->university_subcomponents;

        return view('university_comp.show',compact('university','uni_comp','uni_subcomp'));
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
    public function newcomp(Request $request, $id)
    {
        $this->validate($request,[
            'comp_name'=>'required|max:100'
            ]);

        $university = University::findOrFail($id);

        $component = new UniversityComponents;

        $component->university_id = $university->id;
        $component->comp_name = $request->input('comp_name');
       // $component->save();

        dd('Components saved');
    }

    public function showAdminComp($id)
    {
         $university = University::findOrFail($id);

         $uni_comp = $university->university_components;

        return view('university_comp.admin_comp',compact('university','uni_comp'));
    }
}
