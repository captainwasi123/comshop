<?php

namespace App\Http\Controllers\Api\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\userAddress;
use Validator;
class profileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile_save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'required',
       
          
        ]);

        if($validator->fails()){
            return  ['success' => false, 'error' =>  $validator->errors()];
          }


          $data = array(

            'user_id' => Auth::user()->id,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        );


        $success= userAddress::create($data);

     
        // return response()->json(['success' => $success]);
        
        list($status,$data) = $success ? [true, userAddress::find($success->id)] : [false, ''];
        return ['success' => $status,'data' => $data];
        
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
