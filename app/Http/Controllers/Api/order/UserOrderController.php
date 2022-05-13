<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use App\Models\order\order_detail;
use App\Models\order\order_delivery;
use App\Models\order\driver_order;
use App\Models\cart;
use App\Models\User;
use App\Models\paymentmethod;
use App\Models\marketplace;
use App\Models\Driver\driver;
use App\Models\Restaurant\Restaurant;
use Validator;
use Auth;
use DB;

class UserOrderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartSummary()
    {
        // $vat_percent=marketplace::orderBy('id', 'DESC')->first();

        $getcart = cart::where('user_id',Auth::id())->with('prod')->get();

       if (is_null($getcart)) {
           return response()->json('Record not found', 404);
       }
    //    return response()->json(['AllcartSRecords' => $getcart, 'Vat' =>$vat_percent->vat ]);

       return response()->json(['AllcartSRecords' => $getcart ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$vat,$pymenttype,$lat,$lon)
    {
        $cart=cart::where('user_id',Auth::id())->first();

        if($cart){

            $allcart=cart::where('user_id',Auth::id())->get();
            $sum_price=cart::where('user_id',Auth::id())->sum('price');
            $sum_quantity=cart::where('user_id',Auth::id())->sum('quantity');
            $sub_total=$sum_price * $sum_quantity;
            $total_price=$sub_total+$vat;

            $validator = Validator::make($request->all(),[
                'sub_total' => 'required',
                'vat_value' => 'required',
                'total_price' => 'required',
                'payment_method' => 'required',
            ]);
            if($validator->fails()){
                return response()->json($validator->errors());
            }

            $success = order::create([
                'user_id' => Auth::id(),
                'restaurant_id' => $request->restaurant_id,
                'sub_total' => $sub_total,
                'vat_value' => $vat,
                'total_price' => $total_price,
                'payment_method' => $pymenttype,
                'special_instructions' => $request->special_instructions,
                'status' => '1'
            ]);

            if($success){
                $validator = Validator::make($request->all(),[
                    'address' => 'required',
                ]);
                if($validator->fails()){
                    return response()->json($validator->errors());
                }

                $restaurant = Restaurant::find($request->restaurant_id);
                $distance = $this->getDistance($lat, $lon, $restaurant->latitude, $restaurant->longitude);

                $odeliv = new order_delivery;
                $odeliv->order_id   = $success->id;
                $odeliv->address    = $request->address;
                $odeliv->latitude   = $lat;
                $odeliv->longitude  = $lon;
                $odeliv->distance   = number_format($distance, 1);
                $odeliv->save();

            }else{
                return response()->json('Order detail not Success', 404);
            }

            if($success){
                foreach ($allcart as $key => $value) {

                    $od = new order_detail;
                    $od->order_id = $success->id;
                    $od->product_id = $value->product_id;
                    $od->varient_id=$value->variant_id;
                    $od->price=$value->price;
                    $od->quantity=$value->quantity;
                    $od->total_price=$value->price * $value->quantity;
                    $od->save();
                }
            }else{
                return response()->json('Order detail not Success', 404);
            }

            if($success){
                $findcart=cart::where('user_id', Auth::id())->delete();
            }

            

            list($status,$data) = $success ? [true, order::find($success->id)] : [false, ''];
            return ['success' => $status,'data' => $data];

        }else{
            return response()->json('Cart Record not found', 404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderShow($id)
    {
         $orderShow = order::find($id);

        if (!$orderShow) {
            return response()->json([ 'message' =>  'Data not found'], 404);
        }

        return response()->json(['orderShow' => $orderShow]);
    }

    public function allOrders()
    {
         $orderShow = order::where('user_id', Auth::user()->id)
                        ->with('restaurant', 'details', 'details.menu')
                        ->orderBy('created_at', 'desc')
                        ->get();

        if (!$orderShow) {
            return response()->json([ 'message'=>  'Data not found'], 404);
        }

        return response()->json(['orders' => $orderShow]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function orderUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

            'sub_total' => 'required',
            'vat_value' => 'required',
            'total_price' => 'required',
            'payment_method' => 'required',

        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

          $success=order::find($id);
          $success->update($request->all());

        list($status,$data) = $success ? [true, order::find($success->id)] : [false, ''];
        return ['success' => $status,'data' => $data];
         }



    public function destroy($id)
    {

        $find =order::find($id);

        if($find != null)
        {
            $find->delete();
            return ['response_status' => true, 'message' => "Record has been deleted"];
        }
            return ['response_status' => false, 'message' => 'Record has not been  deleted'];
    }

    public function search($keyword)
    {
        $search = order::where('payment_method','like','%'.$keyword.'%')->get();

        if($search->isEmpty())
        {
            return ['status' => false, 'message' => 'No Record has Been Found '];
        }

            return ['status' => true, 'data' => $search];

    }

    public function getDistance($latitudeFrom,$longitudeFrom,$latitudeTo,$longitudeTo){
           $long1 = deg2rad($longitudeFrom);
           $long2 = deg2rad($longitudeTo);
           $lat1 = deg2rad($latitudeFrom);
           $lat2 = deg2rad($latitudeTo);

           //Haversine Formula
           $dlong = $long2 - $long1;
           $dlati = $lat2 - $lat1;

           $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

           $res = 2 * asin(sqrt($val));

           $radius = 3958.756;

           return ($res*$radius);
      }


       
}
