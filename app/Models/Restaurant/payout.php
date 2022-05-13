<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class payout extends Model
{
    use HasFactory;
    protected $table = 'tbl_restaurant_payout_info';
    public $timestamps = false;

    public static function updatePayout(array $data){
        $p = payout::where('restaurant_id', Auth::guard('restaurant')->user()->id)->first();
        if(empty($p->id)){
            $p = new payout;
            $p->restaurant_id = Auth::guard('restaurant')->user()->id;
        }
        $p->bank_name = $data['bank_name'];
        $p->account_title = $data['account_title'];
        $p->account_no = $data['account_no'];
        $p->save();
    }
}
