<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentmethod extends Model
{
    protected $table = 'tbl_payment_method_info';
    public $timestamps = false;
    use HasFactory;
}
