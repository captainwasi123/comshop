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

        
        Auth::guard('driver-api')->user()->tokens->each(function($token, $key) {
            $token->delete();
        });

        return response()->json([
            'logout' => true,
            'message' => 'logout successfully'
            ]);
    }





    
    
    
}
