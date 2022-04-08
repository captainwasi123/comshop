<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_delivery extends Model
{
    use HasFactory;
    protected $table = 'tbl_order_delivery_address';
    protected $guarded =[]; 
    public $timestamps = false;
}
