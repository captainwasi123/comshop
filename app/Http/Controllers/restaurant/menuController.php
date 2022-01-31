<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\Restaurant\menu;

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

        return redirect()->back()->with('success', 'New item added to menu.');
    }
}
