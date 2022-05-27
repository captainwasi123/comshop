<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use App\Models\Restaurant\Restaurant;
use Auth;
use DB;
use App\Models\Driver\driver;
use App\Models\order\driver_order;


class orderController extends Controller
{
    //
    function index(){
        $data['order_in'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '1')->orderBy('created_at', 'desc')->get();
        $data['order_prepared'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '2')->orderBy('created_at', 'desc')->get();
        $data['order_delivered'] = order::where('restaurant_id', Auth::guard('restaurant')->id())->where('status', '3')->orderBy('created_at', 'desc')->get();

        return view('restaurant.orders.index')->with($data);
    }

    function details($id){
        $id = base64_decode($id);
        $data['order'] = order::find($id);

        return view('restaurant.orders.response.detail')->with($data);
    }

    function approve($id){
        $id = base64_decode($id);
        $o = order::find($id);
        $o->status = '2';
        $o->save();

        $oid=$o->id;
        $driver_id=$this->getDriver($oid);
  
        if($driver_id){

            $dro = new driver_order;
            $dro->driver_id   = $driver_id;
            $dro->order_id    = $id;
            $dro->status      = '0';
            $dro->save();
        }

        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['title' => 'New Order Received', 'orderId' => $id, 'driverId' => $driver_id];
        $pusher->trigger('notify_channel_'.$driver_id, 'getNotify', $data);

        return redirect()->back()->with('success', 'Status Updated. | Order#: '.$id);
    }


    // public function abc()
    // {
       
    //     $o = order::find(4);
    //     // dd($o);
    //     $o->status = '2';
    //     $o->save();

    //         $id=$o->id;
    //         // dd($id);

    //         $driver_id=$this->getDriver($id);

    //         // dd($driver_id); 
    //         if($driver_id){

    //             $dro = new driver_order;
    //             $dro->driver_id   = $driver_id;
    //             $dro->order_id    = $id;
    //             $dro->status      = '1';
    //             $dro->save();
    //         }

    //         list($status,$data) = $dro ? [true, driver_order::find($dro->id)] : [false, ''];
    //         return ['success' => $status,'data' => $data];

        
    // }


     // Api get  nearest  Driver

     public function getDriver($id){

        $getorder=order::where('id',$id)->get();
        $Rest_id=$getorder[0]->restaurant_id;
        
        $getRest=Restaurant::where('id',$Rest_id)->get();
        
        $lat=$getRest[0]->latitude;
        $lon=$getRest[0]->longitude;

        // dd($lat,$lon);

        $avg=DB::table("tbl_driver_info")
        ->select("tbl_driver_info.*", DB::raw("6371 * acos(cos(radians(" . $lat . "))
        * cos(radians(tbl_driver_info.latitude)) 
        * cos(radians(tbl_driver_info.longitude) - radians(" . $lon . ")) 
        + sin(radians(" .$lat. ")) 
        * sin(radians(tbl_driver_info.latitude))) AS distance"))
        ->having('distance', '<', 5000)
        ->where([['status','1'], ['working_status', '1']])
        ->limit(1)
        ->get();
        
        // dd($avg[0]->id);
        
        if($avg->isEmpty())
        {               
            return response()->json(['data' =>'Not Found']);
        }else{
          foreach ($avg as $key => $value) { 
                                                  
              $ids[] = $value->id; 
                        
          } 
          $driver = driver::whereIn('id', $ids)->get();
      
          return  $driver[0]->id;
        }

    }
}
