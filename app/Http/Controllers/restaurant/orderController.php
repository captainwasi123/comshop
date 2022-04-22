<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    //
    function index(){

        return view('restaurant.orders.index');
    }
}
