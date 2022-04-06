<?php

namespace App\Models\Driver;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\city;
use App\Models\Driver\driverDocument;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


use Illuminate\Contracts\Auth\MustVerifyEmail;



class driver extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;

    protected $table ='tbl_driver_info';
    protected $guarded=[];

    public static function addDriver(array $data){
        $d = new driver;
        $d->first_name = $data['first_name'];
        $d->last_name = $data['last_name'];
        $d->email_address = $data['email_address'];
        $d->phone_number = $data['phone_number'];
        $d->password = bcrypt($data['password']);
        $d->city_id = $data['city_id'];        
        $d->working_status = '0';
        $d->status = '0';
        $d->save();

        return $d->id;
    }


    
    public static function updateDriver($id, array $data){
        $d  = driver::find($id);
        $d->first_name = $data['first_name'];
        $d->last_name = $data['last_name'];
        $d->email_address = $data['email_address'];
        $d->phone_number = $data['phone_number'];
        $d->city_id = $data['city_id'];        
        $d->save();

        return $d->id;
    }

  

    public static function card_frontImage($idd, $filename){
        $r = driverDocument::find($idd);
        $r->card_front = $filename;
        $r->save();
    }

    public static function card_backImage($idd, $filename){
        $r = driverDocument::find($idd);
        $r->card_back = $filename;
        $r->save();
    }

    public static function license_frontImage($idd, $filename){
        $r = driverDocument::find($idd);
        $r->license_front = $filename;
        $r->save();
    }

    public static function license_backImage($idd, $filename){
        $r = driverDocument::find($idd);
        $r->license_back = $filename;
        $r->save();
    }

    public function city()
    {
        return $this->belongsTo(city::class, 'city_id', 'id');
    }

    public function driverDoc()
    {
         return $this->belongsTo(driverDocument::class, 'id', 'driver_id');
    }

    protected $hidden = [
        'password',
    ];
}
