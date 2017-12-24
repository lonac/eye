<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

use App\UniversityComponents;

use App\UniversitySubcomponent;

class UniverSubCompController extends Controller
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
    public function create($id, $comp_id)
    {
        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id',$comp->id)->get();

        $uni_subcomp = $comp->university_subcomponents;

        return view('university-subcomp.create',compact('university','comp','uni_comp','uni_subcomp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $comp_id)
    {
        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_subcomp = new UniversitySubcomponent;

        $comp_names = implode(",", $request->get('subname'));

        $name = explode(',', $comp_names);

        if (!empty($name)) {
            foreach ($name as $subname) {
            $arr[] = [
                    'university_components_id'=>UniversityComponents::findOrFail($id)->id,
                    'name'=> $subname,
                     ];
        }
            if(!empty($arr)){
                \DB::table('university_subcomponents')->insert($arr);
                    
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
    public function add($id, $comp_id)
    {
        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        return view('university-subcomp.add',compact('university','uni_comp'));
    }

    public function addNew(Request $request, $id, $comp_id)
    {
         $this->validate($request,[
            'name'=>'required|max:100',
            ]);

        $university = University::findOrFail($id);
        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $uni_subcomp = new UniversitySubcomponent;
        $uni_subcomp->university_components_id = $comp->id;
        $uni_subcomp->name = $request->input('name');

        $uni_subcomp->save();

        return redirect('/universities/'.$university->id.'/university_comp/'.$comp->id.'/university-subcomp')->with('message','New Component Successfully Added');
    }


    public function show($id, $comp_id, $sub)
    {
        
        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $subcomp = UniversitySubcomponent::findOrFail($sub);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $uni_subcomp = $comp->university_subcomponents()->where('id',$subcomp->id)->get();

        //return view('university-subcomp.show',compact('university','uni_comp','uni_subcomp','subcomp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $comp_id, $sub)
    {

        $university = University::findOrFail($id);

        $unicomp = UniversityComponents::findOrFail($comp_id);

        $unisubcomp =UniversitySubcomponent::findOrFail($sub);

        $subcomp = $unicomp->university_subcomponents()->where('id', $unisubcomp->id)->get();

        return view('university-subcomp.edit',compact('university','unicomp','unisubcomp','subcomp'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $comp_id, $sub)
    {
         $this->validate($request,[
            'name'=>'required|max:100',
            ]);  
        $university = University::findOrFail($id);

        $unicomp = UniversityComponents::findOrFail($comp_id);

        $uni_subcomp =UniversitySubcomponent::findOrFail($sub);
        $uni_subcomp->university_components_id = $unicomp->id;
        $uni_subcomp->name = $request->input('name');

         $uni_subcomp->save();

        return redirect('/universities/'.$university->id.'/university_comp/'.$unicomp->id.'/university-subcomp')->with('message','Component Successfully Updated');


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

    public function showAdminComp($id, $comp_id)
    {
        
        $university = University::findOrFail($id);

        $comp = UniversityComponents::findOrFail($comp_id);

        $uni_comp = $university->university_components()->where('id', $comp->id)->get();

        $uni_subcomp = $comp->university_subcomponents()->where('university_components_id', $comp->id)->get();


        return view('university-subcomp.admin-subcomp',compact('university','uni_comp','uni_subcomp','comp'));
    }
}
