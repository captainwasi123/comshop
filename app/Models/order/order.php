<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\paymentmethod;
use App\Models\marketplace;
use App\Models\order\order_delivery;
use App\Models\order\order_detail;
use App\Models\User;

class order extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_info';
    protected $guarded =[]; 




    public function details(){
        return $this->hasMany(order_detail::class, 'order_id', 'id');
    }
    public function delivery(){
        return $this->belongsTo(order_delivery::class, 'id', 'order_id');
    }
    public function buyer(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function paymet(){
    	return $this->belongsTo(paymentmethod::class,'payment_method','id');
    }
    public function marketVat(){
    	return $this->belongsTo(marketplace::class,'vat_value','id');
    }
}
