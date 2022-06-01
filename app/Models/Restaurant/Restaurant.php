<?php

namespace App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use App\Models\Restaurant\menu;
use App\Models\Restaurant\wallet;
use App\Models\Restaurant\payout;
use App\Models\Restaurant\withdraw;
use App\Models\order\reviews;

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



    public function reviews(){
        return $this->hasMany(reviews::class, 'restaurant_id', 'id')->orderBy('id', 'desc');
    }
    public function avgRating()
    {
        return $this->reviews()
          ->selectRaw('avg(rating) as avgRating');
    }

    public function payout(){
        return $this->belongsTo(payout::class, 'id', 'restaurant_id');
    }
    public function wallet(){
        return $this->belongsTo(wallet::class, 'id', 'restaurant_id');
    }
    public function withdrawHistory(){
        return $this->hasMany(withdraw::class, 'restaurant_id', 'id');
    }
    public function menus(){
    	return $this->hasMany(menu::class, 'restaurant_id', 'id')->where('status', '1');
    }
    public function menuswithCat(){
    	return $this->hasMany(menu::class, 'restaurant_id', 'id')->where('status', '1')->orderBy('category_id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
