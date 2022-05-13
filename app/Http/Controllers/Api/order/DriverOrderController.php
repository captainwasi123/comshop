<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver\driver;
use App\Models\order\driver_order;
use App\Models\order\order;
use App\Models\Driver\driverWallet;




use Auth;



class DriverOrderController extends Controller
{


    public function pending_orderlist()
    {
        $pending_order=driver_order::where(['status' => '0'],['driver_id' => Auth::guard('driver-api')->user()->id])->get();

        if(count($pending_order)==0)
        {
            return response()->json(['error' => 'Record not found' ], 404);
        }
        else{
               
             return response()->json(['data' => $pending_order], 200);                
        }
    }

    public function active_orderlist()
    {
        $active_order=driver_order::where(['status' => '1'],['driver_id' => Auth::guard('driver-api')->user()->id])->get();

        if(count($active_order)==0)
        {
            return response()->json(['error' => 'Record not found' ], 404);
        }
        else{
               
             return response()->json(['data' => $active_order], 200);                
        }
    }


   public function orderDetail()
   {
     
            $data=driver_order::where(['driver_id' => Auth::guard('driver-api')->user()->id]
                             )->with('order','order.restaurant','order.buyer')->get();
            if(count($data)!=0)
            {            
                    return response()->json(['data' => $data], 200);                
            }
            else{
                    return response()->json(['data' => 'Record Not Found'], 404);                            
            }
    
       
   }
    

    public function driver_orderAccept($id)
    {

        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();
        

        if(!$driver)
        {
            return response()->json(['error' => 'Record not found' ], 404);
        }
        else{
                $orderapprove=driver_order::where(['driver_id'=> $driver->id], ['id' => $id])
                                ->update([ 
                                        'status' => '1', 
                                        ]);
        
             return response()->json(['status' => true, 'DriverOrder' =>$orderapprove , 'message' => 'Driver Order Status Updated'], 200);                
        }
        
    }

    public function orderComplete($id)
    {
        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();
        $orderId=driver_order::where('driver_id', $driver->id)->first();
        // dd($orderId->order_id);
        $orderDetail=order::where('id',$orderId->order_id)->get();
        // dd($orderDetail[0]->sub_total);
        $driverWallet=driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)->first();
        // dd($driverWallet->receivable);   



        if(!$driver)
        {
            return response()->json(['error' => 'Record not found' ], 404);
        }
        else{
                $orderComplete=driver_order::where(['driver_id'=> $driver->id], ['id' => $id])
                                ->update([ 
                                        'status' => '3', 
                                        ]);
                $orderComplete = driver_order::find($orderComplete);

                    if($orderComplete){

                        $walletUpdate=driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)
                                    ->update([ 
                                        'payable' => $orderDetail[0]->total_price, 
                                        ]);  
                                    
                        $walletUpdate = driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)->first();
                        
                    }

                
                
        
             return response()->json(['status' => true, 'DriverOrder' =>$orderComplete , 'Wallet' => $walletUpdate, 'message' => 'Driver Order Status Updated'], 200);                
        }
    }
}
