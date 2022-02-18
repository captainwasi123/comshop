<?php

namespace App\Http\Controllers\Api\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Restaurant\Restaurant;
use App\Models\Restaurant\menu;


class bookingController extends Controller
{
         function getRestuarant()
        {
          
            $lat='24.9867287';
            $lon='67.0625024';


            $avg=DB::table("tbl_restaurant_info")
     ->select("tbl_restaurant_info.*", DB::raw("6371 * acos(cos(radians(" . $lat . "))
     * cos(radians(tbl_restaurant_info.latitude)) 
     * cos(radians(tbl_restaurant_info.longitude) - radians(" . $lon . ")) 
     + sin(radians(" .$lat. ")) 
     * sin(radians(tbl_restaurant_info.latitude))) AS distance"))
     ->having('distance', '<', 50)
     ->where([['status','1'], ['service_status', '1']])->get();
     
         

               // get average  query
        //    $avg = DB::select('SELECT AVG(tbl_restaurant_info.service_radius) as avg, tbl_restaurant_info.*, ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) AS distance FROM `tbl_restaurant_info` WHERE ( 6371 * acos( cos( radians("'.$lat.'") ) * cos( radians(latitude ) ) * cos( radians(longitude ) - radians("'.$lon.'") ) + sin( radians("'.$lat.'") ) * sin( radians(latitude ) ) ) ) < 50');
        
        // = DB::select('SELECT AVG(tbl_restaurant_info.service_radius) as avg, tbl_restaurant_info.*, (6371 * acos( cos( radians(15) ) * cos (radians(lat)) * cos( radians(lng ) - radians(10)  ) + sin( radians(10) ) * sin( radians(15 )  ) ) )  As distance FROM `tbl_restaurant_info` WHERE (6371 * acos( cos(radians(15) ) * cos( radians(las ) ) * cos(radians() -radians(10)) +sin(radians(15) ) *  sin( radians(lat) ) )) < 30 '); 
       
      //   $avg=array($avg);
       

        if($avg->isEmpty())
      {
            

    
            
           
     
         return response()->json(['data' =>'Not Found']);
      }
      else {

          foreach ($avg as $key => $value) {
                 
         
                $ids[] = $value->id;
               
             
              
             } 
         
         $menu=menu::whereIn('restaurant_id', $ids)->get();

         return response()->json(['data' => $avg, 'menus' => $menu]);
      }

      
      
        



         
        // return ['success' => $avg,'data' => $avg];
        //  dd($avg);

        }
}