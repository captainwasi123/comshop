<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order\order;
use App\Models\Restaurant\withdraw;
use Auth;

class walletController extends Controller
{
    //
    function index(){
        $data['month_earning'] = order::where('restaurant_id', Auth::guard('restaurant')->user()->id)
                                        ->where('created_at', '>=', date('Y-m-1 00:00:01'))
                                        ->where('created_at', '<=', date('Y-m-31 23:59:59'))
                                        ->sum('sub_total');

        $data['total_earning'] = order::where('restaurant_id', Auth::guard('restaurant')->user()->id)
                                        ->sum('sub_total');

        $data['withdraw_history'] = withdraw::where('restaurant_id', Auth::guard('restaurant')->user()->id)
                                        ->orderBy('status')
                                        ->get();

        return view('restaurant.wallet.index')->with($data);
    }

    function makeRequest(Request $request){
        $data = $request->all();
        $curr = empty(Auth::guard('restaurant')->user()->wallet) ? 0 : Auth::guard('restaurant')->user()->wallet->amount;
        if($curr < $data['amount']){
            return redirect()->back()->with('error', 'Insufficient balance');
        }else{
            withdraw::makeRequest($data['amount']);

            return redirect()->back()->with('success', 'Withdraw request successfully generated.');
        }
    }
}
