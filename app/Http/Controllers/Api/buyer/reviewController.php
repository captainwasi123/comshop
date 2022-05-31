<?php

namespace App\Http\Controllers\Api\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use App\Models\order\reviews;
use Auth;

class reviewController extends Controller
{
    public function getReview(){
        $order = order::where(['user_id' => Auth::id(), 'status' => '3'])
                        ->where('is_reviewed', null)
                        ->first();

        if(!empty($order->id)){
            return response()->json(['status' => true, 'orderId' => $order->id, 'restaurant' => @$order->restaurant->name], 200);
        }else{
            return response()->json(['status' => false], 200);
        }
    }

    public function cancelReview($id){

        $order = order::find($id);
        if(!empty($order->id)){
            $order->is_reviewed = '1';
            $order->save();
        }

        return response()->json(['status' => true], 200);
    }

    public function submitReview(Request $request){
        $data = $request->all();
        if(empty($data['orderId']) || empty($data['rating'])){
            return response()->json(['status' => false, 'message' => 'Invalid Parameters']);
        }

        $order = order::find($data['orderId']);
        if(empty($order->id)){
            return response()->json(['status' => false, 'message' => 'Invalid Order ID.']);
        }

        $order->is_reviewed = '1';
        $order->save();
        
        $r = new reviews;
        $r->user_id = Auth::id();
        $r->restaurant_id = $order->restaurant_id;
        $r->rating = $data['rating'];
        $r->reviews = empty($data['reviews']) ? null : $data['reviews'];
        $r->save();


        return response()->json(['status' => true, 'message' => 'Review successfully submitted.']);
    }
}
