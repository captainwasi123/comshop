<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;
use Auth;
use Hash;


class authController extends Controller
{
    function indexCheck(){
        if(Auth::guard('restaurant')->check()){
            return redirect(route('restaurant.index'));
        }else{
            return redirect(route('restaurant.login'));
        }
    }
    function login(){

        return view('restaurant.login');
    }


    function loginSubmit(Request $req)
    {
        $data=$req->all();

        if(Auth::guard('restaurant')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 1])){

    		return redirect(route('restaurant.index'));
    	}else{
    		return redirect()->back()->with('error', 'Authentication Failed.');
    	}

    }

    function logout(){
		Auth::guard('restaurant')->logout();

		return redirect(route('restaurant.login'));
    }

  


}

