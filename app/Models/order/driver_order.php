<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\order\order;
use Auth;


class driver_order extends Model
{
    protected $table = 'tbl_driver_order_info';
    protected $guarded =[]; 
    use HasFactory;


    public function order(){
        return $this->belongsTo(order::class, 'order_id');
    }

}
