<?php

namespace App\Http\Controllers\Api\order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use Validator;

class orderController extends Controller
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
    public function store(Request $request)
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

        $success = order::create([
            'user_id' => $request->user_id,
            'restaurant_id' => $request->restaurant_id,
            'sub_total' => $request->sub_total,
            'vat_value' => $request->vat_value,
            'total_price' => $request->total_price,
            'payment_method' => $request->payment_method,
            'special_instructions' => $request->special_instructions,
            'status' => $request->status
         ]);

            list($status,$data) = $success ? [true, order::find($success->id)] : [false, ''];
        return ['success' => $status,'data' => $data];

        // // return response()->json(['Program created successfully.', new ProgramResource($program)]);
        // return response()->json(['program'=> $program]);
        // // return response()->json(['cities'=> $cities]);   
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $del=order::destroy($id);

        
    //     return response()->json(['success' => 'Record has been deleted', 'status' => $del]);
    // }

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
