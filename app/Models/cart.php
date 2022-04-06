<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurant\menu;
use App\Models\User;
use App\Models\Restaurant\Restaurant;
use Auth;

class cart extends Model
{
    use HasFactory;
    protected $table = 'tbl_user_cart_info';
    // protected $guarded =[];



    public static function newCart(array $data){
        $c = new cart;
        $c->user_id =Auth::user()->id;
        $c->product_id = $data['product_id'];
        $c->restaurant_id = $data['restaurant_id'];
        $c->variant_id = $data['variant_id'];
        $c->price = $data['price'];
        $c->quantity = $data['quantity'];
        $c->variant_id = $data['variant_id'];
        $c->save();
        return $c;
    }

    public static function updateCart($id, array $data){
        $c = cart::find($id);
        $c->user_id =Auth::user()->id;
        $c->quantity = $data['quantity'];
      
        $c->save();
        
        return $c->id;

        
    }

    

    public function prod()
    {
    	return $this->belongsTo(menu::class,'product_id','id');
    }

    public function rest()
    {
    	return $this->belongsTo(Restaurant::class,'restaurant_id','id');
    }


}
