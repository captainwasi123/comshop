<?php
namespace App\Http\Controllers\Api\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Restaurant\Restaurant;
use App\Models\categories;
use App\Models\Restaurant\menu;
use Auth;
use App\Models\order\order;


class bookingController extends Controller
{

    // get  nearest  Restaurant

          function getRestuarant($lat,$lon){

            $avg=DB::table("tbl_restaurant_info")
            ->select("tbl_restaurant_info.*",  DB::raw("COUNT(tbl_products_info.id) as menuItem"), DB::raw("6371 * acos(cos(radians(" . $lat . "))
            * cos(radians(tbl_restaurant_info.latitude)) 
            * cos(radians(tbl_restaurant_info.longitude) - radians(" . $lon . ")) 
            + sin(radians(" .$lat. ")) 
            * sin(radians(tbl_restaurant_info.latitude))) AS distance"))
            ->leftJoin('tbl_products_info', 'tbl_products_info.restaurant_id', '=', 'tbl_restaurant_info.id')
            ->having('distance', '<', 5)
            ->groupBy('tbl_restaurant_info.id')
            ->where([['tbl_restaurant_info.status','1'], ['tbl_restaurant_info.service_status', '1']])->get();
          //dd($avg);
          if($avg->isEmpty())
          {               
              return response()->json(['data' =>'Not Found'],404);
          }else{
            foreach ($avg as $key => $value) { 
              if($value->menuItem > 0){                                        
                $ids[] = $value->id; 
              }              
            } 
            $rest = Restaurant::whereIn('id', $ids)->get();
            $menu=menu::where('status','1')->whereIn('restaurant_id', $ids)->get();     
            return response()->json(['data' => $rest, 'menus' => $menu],200);
          }


      }



      function searchRestMenu($search){
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
                  
                  return response()->json(['data' =>'Not Found'], 404);
              }
              else
              {

                      foreach ($avg as $key => $value) {
                                            
                            $ids[] = $value->id;
                                      
                          } 
                
                     $menu=menu::where('status','1')->whereIn('restaurant_id', $ids)->get();
   
                    $data = Restaurant::whereIn('id', $ids)
                            ->with('menus')
                              ->whereHas('menus', function($q) use ($search){
                                    $q->where('title', 'LIKE', "%$search%")
                                      ->whereHas('cat', function($qq) use ($search){
                                        return $qq->orWhere('name', 'LIKE', "%$search%");
                                      });
                                })
                          ->orWhere('name','LIKE', "%$search%")
                          ->orWhere('address', 'LIKE', "%$search%")
                          ->get();

                return response()->json(['data'  => $data ],200);
              }


      }

//  get  single Restaurant with menu

      public function getsingleRest($id){
        
        $getRest = Restaurant::where([['status','1'], ['service_status', '1']])->where('id',$id)->with('menuswithCat')->get();
           
        $getCat=categories::whereHas('menu', function($q) use ($id){
                  return $q->where('restaurant_id', $id);
              })->with('menu')
              ->orderBy('id')->get();

            if (is_null($getRest) || is_null($getCat)) {
              return response()->json('Data not found', 404); 
            } 

        return response()->json(['getRest' => $getRest, 'categories' => $getCat],200);

      }

    // Menus with variant

      public function productDetail($id)
      {

        $productDetail=menu::where('status','1')->where('id', $id)->with('variant')->get();

        return response()->json(['productDetail' => $productDetail], 200);
      }


      




}
