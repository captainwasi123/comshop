<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\generalSettings;

class settingsController extends Controller
{
    //
    function catagories()
    {
        $data['categories'] = categories::paginate(15);
        return view('admin.settings.categories.index')->with($data);
    }
    function catagoriesAdd(Request $request){
        $data = $request->all();
        $id = categories::addCategory($data);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/category/'), $filename);

            categories::updateImage($id, $filename);
        }

        return redirect()->back()->with('success', 'New Category Added.');
    }


    function catagoriesUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['cid']);
        categories::updateCategory($id, $data['name']);
        if ($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/category/'), $filename);

            categories::updateImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Category Updated.');
    }

    function catagoriesDelete($id){
        $id = base64_decode($id);
        $c = categories::find($id);
        if(count($c->menu) > 0){
            return redirect()->back()->with('error', 'This category has '.count($c->menu).' product.');
        }else{
            categories::destroy($id);
            return redirect()->back()->with('success', 'Category Successfully Deleted.');
        }
    }
    function catagoriesEdit($id){
        $id = base64_decode($id);
        $data = categories::find($id);

        return view('admin.response.editCategory', ['data' => $data]);
    }



    function general()
    {
        $data = generalSettings::first();
        return view('admin.settings.general', ['data' => $data]);
    }  
    function generalUpdate(Request $request){
        $data = $request->all();

        $g = generalSettings::first();
        $g->commission = $data['commission'];
        $g->save();

        return redirect()->back()->with('success', 'General Settings Updated.');
    } 
}
