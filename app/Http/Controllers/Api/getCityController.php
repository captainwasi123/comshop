<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\city;
use App\Models\categories;
use App\Models\Restaurant\menu;


class getCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCity()
    {
        $cities = city::all();
        return response()->json(['cities'=> $cities]);         
    }

    //  get Category

    
    public function getCategories()
    {
        $data = categories::all();
        return response()->json(['categories'=> $data]);         
    }

    // get menus
    public function getmenu()
    {
        $data = menu::all();
        return response()->json(['menus'=> $data]);         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = city::find($id);

        if (is_null($city)) {
            return response()->json('Data not found', 404); 
        }
        
        return response()->json(['city' => $city]);
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
