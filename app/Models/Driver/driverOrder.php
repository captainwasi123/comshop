<?php

namespace App\Models\Driver;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driverOrder extends Model
{
    protected $table = 'tbl_driver_order_info';
    protected $guarded =[]; 
    use HasFactory;
}
