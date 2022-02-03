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

    function addSubmit(Request $request){
        $validated = $request->validate([
            'email' => 'required|unique:tbl_restaurant_info|max:255',
            'password' => 'required|confirmed'
        ]);
        $data = $request->all();
        $id = Restaurant::addRestaurant($data);

        if($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/restaurant/logo/'), $filename);
            Restaurant::updateLogo($filename);
        }
        return redirect()->back()->with('success', 'New Restaurant Added.');
    }

    function editSubmit(Request $request){
        $data = $request->all();
        $id = base64_decode($data['res_id']);
        Restaurant::updateRestaurant($id, $data);

        if($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = $id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/restaurant/logo/'), $filename);
            Restaurant::updateLogo($id, $filename);
        }
        return redirect()->back()->with('success', 'Restaurant Updated.');
    }

    function edit($id)
    {
        $id = base64_decode($id);
        $data['restaurant'] = Restaurant::find($id);
        return view('admin.restaurants.edit')->with($data);
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
        $data = array(
            'restaurant' => Restaurant::where('status', '4')->get()
        );
        return view('admin.restaurants.trashed')->with($data);
    }

    function statusChange($id, $status){
        $id = base64_decode($id);
        $r = Restaurant::find($id);
        $r->status = $status;
        $r->save();

        if($status == 4){
            return redirect()->back()->with('success', 'Restaurant is Deleted.');
        }else{
            return json_encode(array('status' => 100, 'message' => 'Status Updated.'));
        }
    }

    function restore($id){
        $id = base64_decode($id);
        $r = Restaurant::find($id);
        $r->status = '1';
        $r->save();

        return redirect()->back()->with('success', 'Restaurant is Activated.');
    }
}
