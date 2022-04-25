<?php

namespace App\Models\order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\menu;

class order_detail extends Model
{
    use HasFactory;

    protected $table = 'tbl_order_detail_info';
    protected $guarded =[]; 

    public $timestamps = false;


    public function menu(){
        return $this->belongsTo(menu::class, 'product_id');
    }
}
