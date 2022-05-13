<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\wallet;
use App\Models\Restaurant\Restaurant;
use Auth;

class withdraw extends Model
{
    use HasFactory;
    protected $table = 'tbl_restaurant_withdraw_info';

    public static function makeRequest($amount){
        wallet::amountDeduct($amount);

        $w = new withdraw;
        $w->restaurant_id = Auth::guard('restaurant')->user()->id;
        $w->amount = $amount;
        $w->status = '1';
        $w->save();
    }

    public function rest(){
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }
}
