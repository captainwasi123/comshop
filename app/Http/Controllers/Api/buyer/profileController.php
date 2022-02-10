<?php

namespace App\Http\Controllers\Api\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\userAddress;

class profileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile_save(Request $request)
    {
        $user = User::where('id',Auth::id())->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        $check_address = userAddress::where('user_id',Auth::id())->first();

        if(!empty($check_address)){
            $address = $check_address;
        }else{
            $address = new userAddress();
            
        }
        $address->user_id = $request->user_id;
        $address->address = $request->address;
        $address->latitude = $request->latitude;
        $address->longitude = $request->longitude;
        $address->postcode = $request->postcode;
        $address->save();

        return $this->sendResponse($success, 'Profile Updated Successfully.');

        
    }

    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
