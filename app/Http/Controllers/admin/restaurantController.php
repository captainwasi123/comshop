<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class restaurantController extends Controller
{
    //
    function add()
    {
        return view('admin.restaurants.add');
    }
    function active()
    {
        return view('admin.restaurants.active');
    }
    function trashed()
    {
        return view('admin.restaurants.trashed');
    }
    function blocked()
    {
        return view('admin.restaurants.blocked');
    }
}
