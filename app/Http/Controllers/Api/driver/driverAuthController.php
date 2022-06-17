<?php

namespace App\Http\Controllers\api\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\Driver\driver;
use Hash;
use Mail;


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
            $success['user_id'] =  $user->id;  
            $success['first_name'] =  $user->first_name; 
   
            return $this->sendResponse($success, 'Driver login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    } 


     // forget password



     function driverforgetPassword(Request $request){


        $validator = Validator::make($request->all(), [
            'email_address' => 'required|email|exists:tbl_driver_info',
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $reqEmail = driver::where([ 'email_address' => $request->email_address])->first();

        $otp = random_int(100000, 999999);
        if($otp!=0) {
            
            driver::where('email_address', $reqEmail->email_address)
                 ->update(['otp_byemail' => $otp]);
        }

        Mail::send('mail.driverforgetPassword', ['OTP' => $otp], function($message) use($request){
            $message->to($request->email_address);
            $message->subject('Reset Password');
        });

        return response()->json([ 'success' =>  'We have e-mailed your password reset Code!'], 200);

    }


    // otp

    public function dirverOtp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'otp' => 'required'
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $reqCode = driver::where([ 'otp_byemail' => $request->otp])->first();
     
        if(!$reqCode){
    
            return response()->json([ 'error' =>  'Invalid Code!'], 404);
        }
        else{

            return response()->json([ 'success' =>  'Your code has been matched! '], 200);
        }

    }

    public function driverResetPasswordForm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => '|required_with:confirmation_password|same:confirmation_password',
            'confirmation_password' => 'required',
            'otp' => 'required'
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $reqCode = driver::where([ 'otp_byemail' => $request->otp])->first();

      

        if(!$reqCode){
            
            return response()->json([ 'error' =>  'Invalid Code!'], 404);

        }
        $user = driver::where('email_address', $reqCode->email_address)
                    ->update([
                        'password' => Hash::make($request->password),
                        'otp_byemail' => null
                    ]);
                   
        return response()->json([ 'success' =>  'Your password has been changed!'], 200);


    }



  
   


    public function logout(){     
        $user = driver::find(Auth::guard('driver-api')->user()->id);
        $user->working_status = '0';
        $user->save();
        Auth::guard('driver-api')->user()->tokens->each(function($token, $key) {
            $token->delete();
             });

        return response()->json([ 'logout' => true, 'message' => 'logout successfully']);
    }
  
    
}
