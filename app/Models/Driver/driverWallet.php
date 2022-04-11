<?php

namespace App\Models\Driver;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driverWallet extends Model
{
    use HasFactory;
    protected $table ='tbl_driver_wallet_info';
    public $timestamps = false;
    

}
