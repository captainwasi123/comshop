<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver\driver;
use App\Models\order\driver_order;
use App\Models\order\order;
use App\Models\order\order_detail;
use App\Models\Driver\driverWallet;
use App\Models\Restaurant\wallet as Rest_wallet;
use App\Models\Restaurant\Restaurant;
use App\Models\marketplace as MP;
use DB;
use Auth;



class DriverOrderController extends Controller
{


    public function pending_orderlist(){
        $pending_order = driver_order::where(['status' => '0'],['driver_id' => Auth::guard('driver-api')->user()->id])                          ->get();

        if(count($pending_order) == 0){
            return response()->json(['error' => 'Record not found' ], 404);
        }else{
            return response()->json(['data' => $pending_order], 200);                
        }
    }

    public function complete_orderlist(){
        $complete_order = driver_order::where(['status' => '3'],['driver_id' => Auth::guard('driver-api')->user()->id])
            ->with('order')
            ->get();

        if(count($complete_order) == 0) {
            return response()->json(['error' => 'Record not found' ], 404);
        }else{
            return response()->json(['data' => $complete_order], 200);                
        }
    }

    public function active_orderlist(){
        $active_order = driver_order::where(['status' => '1'],['driver_id' => Auth::guard('driver-api')->user()->id])
                                    ->with('order')
                                    ->get();

        if(count($active_order) == 0){
            return response()->json(['error' => 'Record not found' ], 404);
        }else{
            return response()->json(['data' => $active_order], 200);                
        }
    }


    public function orderDetail(){
        $data = driver_order::where(['driver_id' => Auth::guard('driver-api')->user()->id])
                            ->with('order','order.restaurant','order.buyer.user_address')
                            ->where('status', '0')
                            ->get();

        if(count($data) != 0){            
            return response()->json(['data' => $data], 200);                
        }else{
            return response()->json(['data' => 'Record Not Found'], 404);                            
        }  
    }

    public function singleorder($id){
        $data = driver_order::where(['id' => $id], ['driver_id' => Auth::guard('driver-api')->user()->id])
                                ->with('order', 'order.buyer.user_address')
                                ->get();

        if(count($data) != 0){            
            return response()->json(['data' => $data], 200);                
        }else{
            return response()->json(['data' => 'Record Not Found'], 404);                            
        }        
    }
    

    public function driver_orderAccept($id){
        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();
        
        if(!$driver){
            return response()->json(['error' => 'Record not found' ], 404);
        }else{
            $orderapprove=driver_order::where(['driver_id'=> $driver->id], ['id' => $id])
                                ->update([ 
                                    'status' => '1', 
                                ]);
            return response()->json(['status' => true, 'DriverOrder' =>$orderapprove , 'message' => 'Driver Order Status Updated'], 200);                
        }
    }

    public function orderComplete($id){
        $driver = driver::where('id',Auth::guard('driver-api')->user()->id)->first();
        $orderId=driver_order::where('order_id', $id)->first();
        $orderDetail=order::where('id',$id)->first();
        $driverWallet=driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)->first();
        $compission=MP::first();
        $restAmount=($orderDetail->sub_total)-($orderDetail->sub_total * $compission->commission/100);
        $restId=Rest_wallet::where('id',$orderDetail->restaurant_id)->first();

        if($orderId->status==3){
            return response()->json(['error' => 'Order Already Completed' ], 404);
        }else{
            $orderDetail->status = '3';
            $orderDetail->save();

            $orderId->status = '3';
            $orderId->save();

            if($orderDetail->status = '3'){ 
                $walletUpdate = DB::table('tbl_driver_wallet_info')
                                    ->increment('payable', $orderDetail->total_price, ['driver_id' =>Auth::guard('driver-api')->user()->id]);
                $walletUpdate = driverWallet::where('driver_id',Auth::guard('driver-api')->user()->id)
                                    ->first();
                $restWallet = DB::table('tbl_restaurant_wallet_info')
                                    ->increment('amount', $restAmount, ['id' => $orderDetail->restaurant_id]);
                $restWallet = Rest_wallet::where('id',$orderDetail->restaurant_id)
                                    ->first();
            }

            return response()->json(['status' => true,'message' => 'Order delivered successfully.'], 200);              
        }
    }

    public function orderDetailIndividual($id){
        $orderDetail = order_detail::where('order_id',$id)->with('menu')->get();
        $od = array();
        $total_price = 0;
        foreach($orderDetail as $val){
            array_push($od, array('menu' => @$val->menu->title, 'price' => @$val->menu->price));
            $total_price += $val->menu->price;
        }
        $order = order::find($id);
        $customer = Restaurant::where('id', $order->restaurant_id)->select('name', 'phone')->first();

        return response()->json(['status' => true, 'orderId' => $id, 'total_price' => $total_price, 'customer' => $customer, 'orderDetail' =>$od,], 200);
    }

    public function getOrderLocation($id){
        $order = order::find($id);
        $data['customer'] = array(
            'name' => $order->buyer->name,
            'lat' => number_format($order->delivery->latitude, 7), 
            'lng' => number_format($order->delivery->longitude, 7)
        );
        $data['restaurant'] = array(
            'name' => $order->restaurant->name,
            'lat' => $order->restaurant->latitude, 
            'lng' => $order->restaurant->longitude
        );

        return response()->json(['status' => true, 'orderId' => $id, 'data' => $data], 200);
    }
}
