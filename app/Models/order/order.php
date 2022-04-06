<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\paymentmethod;
use App\Models\marketplace;

class order extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_info';
    protected $guarded =[]; 




    public function paymet()
    {
    	return $this->belongsTo(paymentmethod::class,'payment_method','id');
    }

    public function marketVat()
    {
    	return $this->belongsTo(marketplace::class,'vat_value','id');
    }
}
