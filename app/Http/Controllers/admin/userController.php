<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    //
     
    function add()
    {
        
        return view('admin.users.add');
    } 

    function active()
    {
       
        $data['users'] = User::where('status', '1')->latest()->get();
 
        return view('admin.users.active')->with($data);
    }

    public function buyerRegister(Request $request){
        $data = $request->all();
        // dd($data);
        if($data['password'] == $data['confirmation_password']){
            $u = User::where('email', $data['email'])->count();
            if($u == '0'){
                $user = User::newUser($data);
               
                $data['token'] =  $user->createToken('MyApp')->plainTextToken;
                $data['name'] =  $user->name;
                
               
                return redirect()->back()->with('success', 'User has been add successfully ');
            }else{

                return redirect()->back()->with('error', 'Sorry, This User already have an account registered with that email address.');
            }
        }else{

            return redirect()->back()->with('error', 'Passwords do not match.');
        }
    }

    function edit($id)
    {
        $id = base64_decode($id);
        $data['User'] = User::find($id);
        dd($data['User']);
        return view('admin.restaurants.edit')->with($data);
    }

    function blocked()
    {
        return view('admin.users.blocked');
    }
    function trashed()
    {
        return view('admin.users.trashed');
    }   
}
