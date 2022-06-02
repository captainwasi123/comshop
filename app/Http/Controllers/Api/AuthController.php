<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\userAddress;
use Mail;
use Hash;

class AuthController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function UserRegister(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'unique:tbl_users_info,email',
            'phone' => 'required',
            'password' => 'required',
            'confirmation_password' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['status'] = '1';
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');

   
        
    }

    public function userUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
           
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $user=User::find(Auth::user()->id);
        $user->update($request->all());

        return response()->json(['success' => $user]);
      

    }

    public function userShow()
    {   
        $user = User::find(Auth::user()->id);

        if (is_null($user)) {
            return response()->json('Data not found', 404); 
        }

        return response()->json(['user' => $user]);
    }


 

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
          
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status'=>1])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['user_id'] =  $user->id;
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    } 

    public function googleLogin($name, $email)
    {
        //return response()->json(['name' => $name, 'email' => $email]);
        
        $loginUser = User::where('email', $email)->first();
        if(empty($loginUser->id)){ 
            $user = User::newGoogleUser(array('name' => $name, 'email' => $email));
            Auth::login($user);
            $userr = Auth::user(); 
            $success['token'] =  $userr->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $userr->name;
            return $this->sendResponse($success, 'User login successfully.');
        }else{
            if($loginUser->status == '1'){
                Auth::login($loginUser);
                $userr = Auth::user(); 
                $success['token'] =  $userr->createToken('MyApp')->plainTextToken; 
                $success['name'] =  $userr->name;
                return $this->sendResponse($success, 'User login successfully.');
            }else{
                return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
            }
        }
    } 


  
    public function logout(){


    
      
        $user = request()->user(); //or Auth::user()
        // Revoke current user token
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();

        
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });


        return response()->json([
            'logout' => true,
            'message' => 'logout successfully'
            ]);
    }

    

   // forget password



    function forgetPassword(Request $request){


        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:tbl_users_info',
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $reqEmail = User::where([ 'email' => $request->email])->first();

        $otp = random_int(100000, 999999);
        if($otp!=0) {
            
             User::where('email', $reqEmail->email)
                 ->update(['otp_byemail' => $otp]);
        }

        Mail::send('mail.forgetPassword', ['OTP' => $otp], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return response()->json([ 'success' =>  'We have e-mailed your password reset Code!'], 200);

    }


    // otp

    public function userOtp(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'otp' => 'required'
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $reqCode = User::where([ 'otp_byemail' => $request->otp])->first();
     
        if(!$reqCode){
    
            return response()->json([ 'error' =>  'Invalid Code!'], 404);
        }
        else{

            return response()->json([ 'success' =>  'Your code has been matched! '], 200);
        }

    }

    public function ResetPasswordForm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => '|required_with:confirmation_password|same:confirmation_password',
            'confirmation_password' => 'required',
            'otp' => 'required'
               
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $reqCode = User::where([ 'otp_byemail' => $request->otp])->first();

      

        if(!$reqCode){
            
            return response()->json([ 'error' =>  'Invalid Code!'], 404);

        }
        $user = User::where('email', $reqCode->email)
                    ->update([
                        'password' => Hash::make($request->password),
                        'otp_byemail' => null
                    ]);
                   
        return response()->json([ 'success' =>  'Your password has been changed!'], 200);


    }




  
    // public function destroy($id)
    // {
    //     $find = User::find($id);
    //     return $find->delete() ? [ 'response_status' => true, 'message' => 'Record has been deleted' ] : [ 'response_status' => false, 'message' => 'Record cannot delete' ];
    // }
}
