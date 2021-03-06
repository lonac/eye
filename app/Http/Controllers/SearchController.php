<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\University;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)

    {
        $universities = University::where('name', 'like', '%' . $request->input('q') . '%')->paginate(12);
        
        $search_word = $request->input('q');

         return view('universities.search', compact('universities','search_word'));



    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function autocomplete(Request $request)

    {
        $data = University::select("name")->where("name", "LIKE", "%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}
