<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;
use Auth;
use Hash;


class authRestaurantController extends Controller
{
    function login(){

        return view('Restaurantlogin');
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
        
       
      
          $request->validate([
            'current_password' => ['required','string'],
            'new_password' => ['required','string', 'min:8'],
        ]);

        
        $restauran = Restaurant::find($request->id);

        $hashedPassword = Hash::check($request->current_password, $restauran->password);

        if(!Hash::check($request->new_password, $restauran->password)){
            if ($hashedPassword) {
                $restauran->password = Hash::make($request->new_password);
                $restauran->save();
                return redirect()->back()->with('success','Password Update Successfully');
            }else{
                $data = array(
                    'old_password' => $request->current_password,
                    'new_password' => $request->new_password,
                    'confirm_password' => $request->confirm_password,
                    'error' => 'old password doesnt matched'
                );
                return redirect()->back()->with($data);
            }
        }else{
            $data = array(
                'old_password' => $request->current_password,
                'error' => 'new password can not be the old password!'
            );
            // return redirect()->back()->with($data);
            return response()->json(['success'=>'Successfully']);
        }
    }


}

