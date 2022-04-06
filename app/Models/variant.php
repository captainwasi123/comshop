<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class variant extends Model
{
    use HasFactory;

    protected $table="tbl_product_varient_info";
    public $timestamps = false;
}
