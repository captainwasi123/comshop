<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Restaurant\menu;
use App\Models\variant;

class menuController extends Controller
{
    //
    function menu(){
        $data = array(
            'categories' => categories::where('status', '1')->get(), 
        );
        return view('restaurant.menus.menu')->with($data);
    }

    function addMenu(Request $request){
        $data = $request->all();
        
        $id = menu::addMenu($data);
        
        if ($request->hasFile('image_name')) {
            $file = $request->file('image_name');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/restaurant/menu/'), $filename);

            menu::updateImage($id, $filename);
        }
       
        foreach($data['variant_name'] as $key => $val){
            $v = new variant;
            $v->product_id = $id;
            $v->name = $val;
            $v->description = $data['variant_description'][$key];
            $v->save();
        }

        return redirect()->back()->with('success', 'New item added to menu.');
    }

    function menuDelete($id){
        $id = base64_decode($id);

        menu::destroy($id);
        variant::where('product_id', $id)->delete();

        return redirect()->back()->with('success', 'Menu Item Successfully Deleted.');
    }

    function menuEdit($id){
        $id = base64_decode($id);
        $data = array(
            'data' => menu::find($id),
            'categories' => categories::where('status', '1')->get(), 
        );

        return view('restaurant.menus.response.edit')->with($data);
    }

    function updateMenu(Request $request){
        $data = $request->all();
        $id = $data['menu_id'];
        //dd($data);
        menu::editMenu($id, $data);
        
        if ($request->hasFile('image_name')) {
            $file = $request->file('image_name');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/restaurant/menu/'), $filename);

            menu::updateImage($id, $filename);
        }
        $enable_variant = array();
        foreach($data['variantId'] as $key => $val){
            $v = variant::find($val);
            if(empty($v->id)){
                $va = new variant;
                $va->product_id = $id;
                $va->name = $data['variant_name'][$key];
                $va->description = $data['variant_description'][$key];
                $va->save();

                array_push($enable_variant, $va->id);
            }else{
                $v = variant::find($val);
                $v->name = $data['variant_name'][$key];
                $v->description = $data['variant_description'][$key];
                $v->save();

                array_push($enable_variant, $val);
            }

        }
        $test = variant::where('product_id', $id)->whereNotIn('id', $enable_variant)->delete();
        
        return redirect()->back()->with('success', 'Menu Item Updated.');
    }
}
