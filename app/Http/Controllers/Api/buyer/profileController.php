<?php

namespace App\Http\Controllers\Api\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\userAddress;
use Validator;
use Hash;
use bcrypt;

class profileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function buyerLocationsupdate(Request $request,$id, $lat, $lon )
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
       
          
        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }

          $success=userAddress::find($id);
          $success->update($request->all());
    
        
        list($status,$data) = $success ? [true, userAddress::find($success->id)] : [false, ''];
        return ['success' => $status,'data' => $data];
        
    }

    
  
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //changePassword again:


    public function changePassword(Request $request) {

         $validator = Validator::make($request->all(), [
         'current-password' => 'required',
            'password' => ['required','string', 'min:6'],
            'confirm_password' => 'required|same:password',
           
        ]);
   
        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
         return response()->json(['status' => false ,
                                 "error" => "Your current password does not matches with the password."]);
        }
        if(strcmp($request->get('current-password'), $request->get('password')) == 0){
            // Current password and new password same
        return response()->json(['status' => false ,"error" => "New Password cannot be same as your current password."]);
        
        }
    
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();

            return response()->json(['status' => true ,"error" => "Password successfully changed!"]);
    }


    // function changePassword(Request $request){


    //     $validator = Validator::make($request->all(), [
    //         'old_password' => ['required','string'],
    //         'password' => ['required','string', 'min:8'],
    //         'confirm_password' => 'required|same:password',
             
    //     ]);
   
    //     if($validator->fails()){
    //         return  ['success' => false, 'error' =>  $validator->errors()];
    //       }
    //     $old_password = $request->input('old_password');
    //     $password =  $request->input('password');
    //     $confirm_password = $request->input('confirm_password');

        
        
    //     $user = User::find(Auth::id());

    //     if (!Hash::check($old_password, $user->password)) {

           
    //         return response()->json(['status' => false, 'error' =>'Current password is incorrect.']);
    //     }else{

    //         if($password == $confirm_password ){

    //             $user->password = bcrypt($request->password);
    //             $user->save();

    //             return response()->json(['status' => True, 'success' => 'Password updated.']);
               
    //         }else{
    //             return response()->json(['status' => false, 'error' => 'Password does not match.']);
              
    //         }
    //     }
    // }

    public function logout(Request $request)
    {
        dd('logout');
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

}
