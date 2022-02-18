<?php

namespace App\Http\Controllers\api\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Driver\driver;
use Hash;


class driverAuthController extends BaseController
{
   
    public function login(Request $request)
    {



        // $validator = Validator::make($request->all(), [
        //     'email_address' => 'required|email',
        //     'password' => 'required|min:6',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json(['error'=>$validator->errors()], 401);
        // }

        // $credentials = $request->only('email_address', 'password');
        
        // if(Auth::guard('driver')->attempt($credentials)){
        //     $user = Auth::guard('driver');
        //     $success['token'] =  $user->createToken('MyApp')->accessToken;
        //     return response()->json(['success' => $success], $this->successStatus);
        // }
        // else{
        //     return response()->json(['error'=>'Email or password incorrect'], 401);
        // }
      

        $validator = Validator::make($request->all(), [
            'email_address' => 'required',
            'password' => 'required',
       
          
        ]);
  
        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }
   
        if(Auth::guard('driver')->attempt(['email_address' => $request->email_address, 'password' => $request->password, 'status'=>1])){ 
            $user = Auth::guard('driver')->user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['first_name'] =  $user->first_name;
   
            return $this->sendResponse($success, 'Driver login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    } 

  
    public function logout(){

         return Auth::guard('driver')->user();
         $user = request()->user(); //or Auth::user()
         // Revoke current user token
         $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        return response()->json([
            'logout' => true,
            'message' => 'logout successfully'
            ]);
    }

    
    
    
}
