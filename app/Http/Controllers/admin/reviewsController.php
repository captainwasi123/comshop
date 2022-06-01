<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;
use App\Models\order\reviews;

class reviewsController extends Controller
{
    //
    function index(){
        $data['restaurant'] = Restaurant::where('status', '1')->paginate(10);

        return view('admin.reviews.index')->with($data);
    }
    function details($id){
        $id = base64_decode($id);
        $data['restaurant'] = Restaurant::find($id);

        return view('admin.reviews.details')->with($data);
    }
}
