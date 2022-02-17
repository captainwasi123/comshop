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
        $data['user'] = User::find($id);
       
        return view('admin.users.edit')->with($data);
    }


    function editSubmit(Request $request){
        $data = $request->all();
        $id = base64_decode($data['user_id']);
        User::updateUser($id, $data);

      
        return redirect()->back()->with('success', 'User Updated.');
    }
    function blocked()
    {
        $data = array(
            'users' => User::where('status', '2')->get()
        );
        return view('admin.users.blocked')->with($data);
    }

    function statusBlock($id, $status){
        $id = base64_decode($id);
        $u = User::find($id);
        $u->status = $status;
        $u->save();

        return redirect()->back()->with('success', 'User Block Updated.');
    }


    function userDeleted($id, $status){
        $id = base64_decode($id);
        $u = User::find($id);
        $u->status = $status;
        $u->save();

        return redirect()->back()->with('success', 'User Deleted.');
    }


   
    function trashed()
    {
        $data = array(
            'users' => User::where('status', '4')->get()
        );
    
        return view('admin.users.trashed')->with($data);
    }   

    function restore($id){
        $id = base64_decode($id);
        $u = User::find($id);
        $u->status = '1';
        $u->save();

        return redirect()->back()->with('success', 'User is Activated.');
    }
}
