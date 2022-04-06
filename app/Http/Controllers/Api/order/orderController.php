<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use App\Models\cart;
use App\Models\User;
use App\Models\paymentmethod;
use App\Models\marketplace;
use Validator;
use Auth;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cartSummary()
    {
        // $vat_percent=marketplace::orderBy('id', 'DESC')->first();
       
        $getcart = cart::where('user_id',Auth::id())->get();
    
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
    public function store(Request $request,$vat,$pymenttype)
    {

        $cart=cart::where('user_id',Auth::id())->first();
        if($cart){
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
                 $findcart=cart::where('user_id', Auth::id())->delete();
            }

        list($status,$data) = $success ? [true, order::find($success->id)] : [false, ''];
        return ['success' => $status,'data' => $data];

        }
        else{

            return response()->json('Record not found', 404);
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

        if (is_null($orderShow)) {
            return response()->json('Data not found', 404);
        }

        return response()->json(['orderShow' => $orderShow]);
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

}
