<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\userAddress;


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
            $success['name'] =  $user->name;
   
            return $this->sendResponse($success, 'User login successfully.');
        } 
        else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        } 
    } 

    public function googleLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $loginUser = User::where('email', $request->get('email'))->first();
        if(empty($loginUser->id)){ 
            $user = User::newGoogleUser($request->all());
            $authUser = Auth::login($user);
            $success['token'] =  $authUser->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $authUser->name;
            return $this->sendResponse($success, 'User login successfully.');
        }else{
            if($loginUser->status == '1'){
                $authUser = Auth::login($loginUser);
                $success['token'] =  $authUser->createToken('MyApp')->plainTextToken; 
                $success['name'] =  $authUser->name;
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

    
   
    public function store(Request $request)
    {
        //
    }


  
    // public function destroy($id)
    // {
    //     $find = User::find($id);
    //     return $find->delete() ? [ 'response_status' => true, 'message' => 'Record has been deleted' ] : [ 'response_status' => false, 'message' => 'Record cannot delete' ];
    // }
}
