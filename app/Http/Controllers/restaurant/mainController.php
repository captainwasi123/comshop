<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    function index(){

    	return view('restaurant.index');
    }

    function review(){

        return view('restaurant.reviews.review');
    }

    
}
