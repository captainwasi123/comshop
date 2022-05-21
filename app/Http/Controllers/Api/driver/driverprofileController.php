<?php

namespace App\Http\Controllers\api\driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver\driver;
use App\Models\Driver\driverDocument;
use App\Models\Driver\driverWallet;
use App\Models\city;
use Validator;
use Auth;
use Hash;

class driverprofileController extends Controller
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function driverRegister(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|unique:tbl_driver_info',
            'phone_number' => 'required',
            'city_id' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',

        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }

          $fields = array(
            'first_name'=>$request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'city_id' => $request->city_id,
            'password' => bcrypt($request->password),

        );

        $id = driver::create($fields);

        if($id){

                $dw = new driverWallet;
                $dw->driver_id = $id->id;
                $dw->receivable = '0';
                $dw->payable='0';
                $dw->save();


                $dd = new driverDocument;
                $dd->driver_id = $id->id;
                $dd->card_status = '1';
                $dd->license_status='1';
                $dd->save();

                // dd($request->file('card_front'));

                if($request->hasFile('card_front')) {
                    $extension = $request->file('card_front')->getClientOriginalExtension();
                    $compic =$id->id.'card_front'.date('dmyHis').'.'.$extension;
                    $path =$request->file('card_front')->move(public_path('/storage/driver/imginfo/'),$compic);
                    $dd->card_front = $compic;
                    $dd->save();
                }


                if($request->hasFile('card_back')) {
                    $extension = $request->file('card_back')->getClientOriginalExtension();
                    $compic =$id->id.'card_back'.date('dmyHis').'.'.$extension;
                    $path =$request->file('card_back')->move(public_path('/storage/driver/imginfo/'),$compic);
                    $dd->card_back = $compic;
                    $dd->save();
                }

                if($request->hasFile('license_front')) {
                    $extension = $request->file('license_front')->getClientOriginalExtension();
                    $compic =$id->id.'license_front'.date('dmyHis').'.'.$extension;
                    $path =$request->file('license_front')->move(public_path('/storage/driver/imginfo/'),$compic);
                    $dd->license_front = $compic;
                    $dd->save();
                }

                if($request->hasFile('license_back')) {
                    $extension = $request->file('license_back')->getClientOriginalExtension();
                    $compic =$id->id.'license_back'.date('dmyHis').'.'.$extension;
                    $path =$request->file('license_back')->move(public_path('/storage/driver/imginfo/'),$compic);
                    $dd->license_back = $compic;
                    $dd->save();
                }




                $success['token'] =  $id->createToken('MyApp')->plainTextToken;
                $success['first_name'] =  $id->first_name;




                list($status,$data) = $id ? [ true , driver::find($id->id) ] : [ false , ''];

                list($status_Wallet,$data_Wallet) = $dw ? [ true , driverWallet::find($dw->id) ] : [ false , ''];

                list($status_dd,$data_dd) = $dd ? [ true , driverDocument::find($dd->id) ] : [ false , ''];

                    return ['status' => $status,'data' => $data , 'success' => $success,
                    'status_dd' => $status_dd, 'data_dd.' => $data_dd,
                    'status_Wallet' => $status_Wallet, 'data_Wallet.' => $data_Wallet,
                 ];
        }else{

            return response()->json('Driver Id  not found', 404);

        }


    }


    // GET DRIVER INFO

    public function driverProfile()
    {
        $data=driver::where(['id' => Auth::guard('driver-api')->user()->id])->with('driverDoc')->get();
        

        if(count($data)!=0)
            {            
                    return response()->json(['data' => $data], 200);                
            }
            else{
                    return response()->json(['data' => 'Record Not Found'], 404);                            
            }
    }

//  change password
    function driverchangePassword(Request $request){


        $validator = Validator::make($request->all(), [
            'old_password' => ['required','string'],
            'password' => ['required','string', 'min:8'],
            'confirm_password' => 'required|same:password',

        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }
        $old_password = $request->input('old_password');
        $password =  $request->input('password');
        $confirm_password = $request->input('confirm_password');


        $id = Auth::guard('driver-api')->user()->id;
        $user = driver::find($id);

        if (!Hash::check($old_password, $user->password)) {


            return response()->json(['status' => false, 'error' =>'Current password is incorrect.']);
        }else{

            if($password == $confirm_password ){

                $user->password = bcrypt($request->password);
                $user->save();

                return response()->json(['status' => True, 'success' => 'Password updated.']);

            }else{
                return response()->json(['status' => false, 'error' => 'Password does not match.']);

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowdriverWallet()
    {
        

        $drverwallet = driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)->first();

       if (is_null($drverwallet)) {
           return response()->json('Record not found', 404);
       }
       return response()->json(['DriverWallet' => $drverwallet, ]);

    }

    // driver Altitude

    public function latlonupdate_driver($lat,$lon)
    {     
        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();

            if(!$driver)
            {
                return response()->json(['error' => 'Record not found' ], 404);
            }
            else{
                    $driverup=driver::where('email_address', $driver->email_address)
                                    ->update([ 
                                            'latitude' => $lat, 
                                            'longitude' => $lon
                                            ]);
            
                 return response()->json(['status' => true, 'message' => 'Driver Altitude Updated'], 200);                
            }
        
    }

    public function driverWorkStatus($Wstatus)
    {

        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();

        if(!$driver)
        {
            return response()->json(['error' => 'Record not found' ], 404);
        }
        else{
                $driverup=driver::where('email_address', $driver->email_address)
                                ->update([ 
                                        'working_status' => $Wstatus, 
                                        ]);
        
             return response()->json(['status' => true, 'message' => 'Driver Work Status Updated'], 200);                
        }
        
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
}
