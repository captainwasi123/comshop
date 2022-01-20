<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class Restaurant extends Authenticatable
{
    use HasFactory;
    protected $table ='tbl_restaurant_info';


    public static function updateRestProfile(array $data){
        $r = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $r->name = $data['resturant_name'];
        $r->phone = $data['phone'];
        $r->email = $data['email'];
        $r->owner_name = $data['owner_name'];
        $r->save();

    }

    public static function updateLogo($filename){
        $u = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $u->logo_img = $filename;
        $u->save();
    }
}
