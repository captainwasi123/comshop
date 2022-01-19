<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;
use Auth;
use Hash;


class authController extends Controller
{
    function login(){

        return view('restaurant.login');
    }


    function loginSubmit(Request $req)
    {
        $data=$req->all();

        if(Auth::guard('restaurant')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 1])){

    		return redirect('restaurant');
    	}else{
    		return redirect()->back()->with('error', 'Authentication Failed.');
    	}

    }

    function logout(){
    	if(Auth::guard('restaurant')->check()){
    		Auth::guard('restaurant')->logout();

    		return redirect('/');
    	}else{
    		return redirect('/');
    	}
    }


    function changePassword(Request $request) {
        $data = $request->all();
        $restauran = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $hashedPassword = Hash::check($request->current_password, $restauran->password);

        if($hashedPassword){
            if ($request->new_password == $request->confirm_password) {
                $restauran->password = bcrypt($request->new_password);
                $restauran->save();
                return json_encode(['status' => '200', 'message' => 'Password Successfully Updated.']);
            }else{
                return json_encode(['status' => '100', 'message' => 'New Password does not match.']);
            }
        }else{
            return json_encode(['status' => '100', 'message' => 'Current Password is incorrect.']);
        }
    }


}

