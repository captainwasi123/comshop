<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;

class restaurantController extends Controller
{
    //
    function add()
    {
        return view('admin.restaurants.add');
    }
    function active()
    {
        $data = array(
            'restaurant' => Restaurant::where('status', '1')->get()
        );
        return view('admin.restaurants.active')->with($data);
    }
    function blocked()
    {
        $data = array(
            'restaurant' => Restaurant::where('status', '2')->get()
        );
        return view('admin.restaurants.blocked')->with($data);
    }
    function trashed()
    {
        return view('admin.restaurants.trashed');
    }

    function statusChange($id, $status){
        $id = base64_decode($id);
        $r = Restaurant::find($id);
        $r->status = $status;
        $r->save();

        return json_encode(array('status' => 100, 'message' => 'Status Updated.'));
    }
}
