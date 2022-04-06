<?php

namespace App\Http\Controllers\Api\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\cart;
use App\Models\marketplace;
use Auth;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addtocart(Request $request)
    {   
        $data = $request->all();
        $validator = Validator::make($request->all(), [
           
            'product_id' => 'required',
            'restaurant_id' => 'required',
            'variant_id' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            
        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }

      
        $id=cart::newCart($data);
  
      

        list($status,$data) = $id ? [ true , cart::find($id->id) ] : [ false , ''];
        return ['success' => $status,'data' => $data ];

        
    }



   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ShowAllCart()
    {
       $vat_percent=marketplace::orderBy('id', 'DESC')->first();
       
        $getcart = cart::where('user_id',Auth::id())->get();
    
       if (is_null($getcart)) {
           return response()->json('Record not found', 404); 
       }      
       return response()->json(['AllcartSRecords' => $getcart, 'Vat' =>$vat_percent->vat ]);

    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCart(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
           
            'quantity' => 'required',
            
        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }

      
        $id=cart::updateCart($id, $data);

        list($status,$data) = $id ? [ true , cart::find($id) ] : [ false , ''];
        return ['success' => $status,'data' => $data ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCart($id)
    {
   
       $find =cart::find($id);
     
       if($find != null) 
       {
           $find->delete();
           return ['response_status' => true, 'message' => "Record has been deleted"];
       }
           return ['response_status' => false, 'message' => 'Record has not been  deleted'];
            
    }
}
 