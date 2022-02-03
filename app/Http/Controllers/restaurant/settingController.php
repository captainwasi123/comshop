<?php

namespace App\Http\Controllers\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant\Restaurant;
use Auth;

class settingController extends Controller
{
    //

    function profile(){

        return view('restaurant.setting.profile');
    }

    function restProfilesetting(Request $request){

        $data =$request->all();
        Restaurant::updateRestProfile($data);

        if($request->hasFile('logo_img')) {
            $file = $request->file('logo_img');
            $filename = Auth::guard('restaurant')->user()->id.'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/restaurant/logo/'), $filename);
            Restaurant::updateLogo(Auth::guard('restaurant')->user()->id, $filename);
        }
        
        return redirect()->back()->with('success', 'Profile Updated Successfully.');
    }




    function changePassword(Request $request) {
     
      
        $restauran = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $hashedPassword = Hash::check($request->current_password, $restauran->password);

        if($hashedPassword){
            if ($request->new_password == $request->confirm_password) {
                $restauran->password = bcrypt($request->new_password);
                $restauran->save();
                return json_encode(['status' => '200', 'message' => 'Password Successfully Updated.']);
            }else{
                return json_encode(['status' => '100', 'message' => 'New Password does not match.']);
            }
        }else{
            return json_encode(['status' => '100', 'message' => 'Current Password is incorrect.']);
        }
    }

    function locationSubmit(Request $request){
        $data = $request->all();
        $r = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $r->address = $data['address'];
        $r->latitude = $data['latitude'];
        $r->longitude = $data['longitude'];
        $r->service_radius = $data['radius'];
        $r->save();

        return redirect()->back()->with('success', 'Location Updated Successfully.');
    }

    function statusChange($status){
        $u = Restaurant::find(Auth::guard('restaurant')->user()->id);
        $u->service_status = $status;
        $u->save();

        return json_encode(array('status' => '100'));
    }

}
