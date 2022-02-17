<?php

namespace App\Http\Controllers\Api\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Restaurant\Restaurant;

class bookingController extends Controller
{
         function getRestuarant()
        {
          
            $lat='24.9481';
            $lon='67.  ';

            
                
            // $data = DB::table("tbl_restaurant_info")
            //     ->select("tbl_restaurant_info.service_radius", 'tbl_restaurant_info.name'
            //         ,DB::raw("6371 * acos(cos(radians(" . $lat . ")) 
            //         * cos(radians(tbl_restaurant_info.latitude)) 
            //         * cos(radians(tbl_restaurant_info.longitude) - radians(" . $lon . ")) 
            //         + sin(radians(" .$lat. ")) 
            //         * sin(radians(tbl_restaurant_info.latitude))) AS distance"))
            //         ->groupBy("tbl_restaurant_info.id")
            //         ->get('name');
     
         

               // get average  query
           $avg = DB::select('SELECT AVG(tbl_restaurant_info.service_radius) as avg, tbl_restaurant_info.*, ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) AS distance FROM `tbl_restaurant_info` WHERE ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) < 50');
        
        // $avg = DB::select('SELECT AVG(tbl_restaurant_info.service_radius) as avg, tbl_restaurant_info.*, (6371 * acos( cos( radians(15) ) * cos (radians(lat)) * cos( radians(lng ) - radians(10)  ) + sin( radians(10) ) * sin( radians(15 )  ) ) )  As distance FROM `tbl_restaurant_info` WHERE (6371 * acos( cos(radians(15) ) * cos( radians(las ) ) * cos(radians() -radians(10)) +sin(radians(15) ) *  sin( radians(lat) ) )) < 30 '); 
        
        $users_ids = DB::select('SELECT tbl_user_address_info.*, ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) AS distance FROM `tbl_user_address_info` WHERE ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) <= "'.$avg[0]->avg.'"');

        $userArr = \Arr::pluck($users_ids,'user_id');


        #Please notice that (lat,lng) values mustn't be negatives to perform all calculations

        // set @my_lat=34.6087674878572;  
        // set @my_lng=58.3783670308302;
        // set @dist=10; #10 miles radius

        // SELECT dest.id, dest.lat, dest.lng,  3956 * 2 * ASIN(SQRT(POWER(SIN((@my_lat -abs(dest.lat)) * pi()/180 / 2),2) + COS(@my_lat * pi()/180 ) * COS(abs(dest.lat) *  pi()/180) * POWER(SIN((@my_lng - abs(dest.lng)) *  pi()/180 / 2), 2))
        // ) as distance
        // FROM hotel as dest
        // having distance < @dist
        // ORDER BY distance limit 10;

        #Also notice that distance are expressed in terms of radius.
        // list($status,$data) = $avg ? [true, Restaurant::find($avg->id)] : [false, ''];
         return response()->json(['success' => $avg]);
        // return ['success' => $avg,'data' => $avg];
        //  dd($avg);

        }
}
