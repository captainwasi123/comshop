<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class wallet extends Model
{
    use HasFactory;
    protected $table = 'tbl_restaurant_wallet_info';
    public $timestamps = false;

    public static function amountDeduct($amount){
        $w = wallet::where('restaurant_id', Auth::guard('restaurant')->user()->id)->first();
        $w->amount = $w->amount-$amount;
        $w->save();
    }

    public static function amountAddition($id, $amount){
        $w = wallet::where('restaurant_id', $id)->first();
        $w->amount = $w->amount+$amount;
        $w->save();
    }
}
