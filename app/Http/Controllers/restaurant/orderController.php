<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use Auth;

class orderController extends Controller
{
    //
    function index(){
        $data['order_in'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '1')->orderBy('created_at', 'desc')->get();
        $data['order_prepared'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '2')->orderBy('created_at', 'desc')->get();
        $data['order_delivered'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '3')->orderBy('created_at', 'desc')->get();

        return view('restaurant.orders.index')->with($data);
    }

    function details($id){
        $id = base64_decode($id);
        $data['order'] = order::find($id);

        return view('restaurant.orders.response.detail')->with($data);
    }

    function approve($id){
        $id = base64_decode($id);
        $o = order::find($id);
        $o->status = '2';
        $o->save();

        return redirect()->back()->with('success', 'Status Updated. | Order#: '.$id);
    }
}
