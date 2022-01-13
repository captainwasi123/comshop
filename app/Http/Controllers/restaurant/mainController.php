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
    function menu(){

    	return view('restaurant.menu');
    }
    function profile(){

    	return view('restaurant.profile');
    }
    function order(){

        return view('restaurant.order');
    }
    function login(){

        return view('restaurant.login');
    }
    function review(){

        return view('restaurant.review');
    }
}
