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

    public static function addRestaurant(array $data){
        $r = new Restaurant;
        $r->name = $data['name'];
        $r->phone = $data['phone'];
        $r->email = $data['email'];
        $r->owner_name = $data['owner_name'];
        $r->password = bcrypt($data['password']);
        $r->address = $data['address'];
        $r->latitude = $data['latitude'];
        $r->longitude = $data['longitude'];
        $r->service_radius = $data['service_radius'];
        $r->service_status = '1';
        $r->status = '1';
        $r->save();

        return $r->id;
    }


    public static function updateRestaurant($id, array $data){
        $r = Restaurant::find($id);
        $r->name = $data['name'];
        $r->phone = $data['phone'];
        $r->owner_name = $data['owner_name'];
        $r->address = $data['address'];
        $r->latitude = $data['latitude'];
        $r->longitude = $data['longitude'];
        $r->service_radius = $data['service_radius'];
        $r->save();

        return $r->id;
    }

    public static function updateRestProfile(array $data){
        $r = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $r->name = $data['resturant_name'];
        $r->phone = $data['phone'];
        $r->owner_name = $data['owner_name'];
        $r->save();

    }

    public static function updateLogo($id, $filename){
        $r = Restaurant::find($id);
        $r->logo_img = $filename;
        $r->save();
    }
}
