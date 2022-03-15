<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\city;
use App\Models\Driver\driver;
use App\Models\Driver\driverDocument;

class driverController extends Controller
{
    //
    function newRequest()
    {
        $data = array(
            'driver' => driver::where('status', '0')->with(['driverDoc'])->paginate(10)
        );

     
      
        return view('admin.drivers.new-request')->with($data);
    }
    function add()
    {
        $data['cities']=city::all();
        return view('admin.drivers.add')->with($data);
    }

    function addSubmit(Request $request)
    {
      
        $validated =$request->validate([
            'email_address' => 'required|unique:tbl_driver_info|max:255',
            'password' => 'required|confirmed'
        ]);

        $data = $request->all();
   
        $id=driver::addDriver($data);
        
        

        $dd = new driverDocument;
        $dd->driver_id = $id;  
        $dd->card_status = '1';
        $dd->license_status='1';
        $dd->save();
        if($request->hasFile('card_front')) {
            $file = $request->file('card_front');
            $filename = $id.'card_front'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->card_front = $filename;
            $dd->save();
        }


       

        if($request->hasFile('card_back')) {
            $file = $request->file('card_back');
            $filename = $id.'card_back'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->card_back = $filename;
            $dd->save();
        }

        if($request->hasFile('license_front')) {
            $file = $request->file('license_front');
            $filename = $id.'license_front'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->license_front = $filename;
            $dd->save();
        }

        if($request->hasFile('license_back')) {
            $file = $request->file('license_back');
            $filename = $id.'license_backImage'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->license_back = $filename;
            $dd->save();
        }

  
        return redirect()->back()->with('success', 'New Driver Added.');
       
    }


    function edit($id)
    {
        $data['cities']=city::all();
        $id = base64_decode($id);
        $data['driver'] = driver::find($id);
        
        return view('admin.drivers.edit')->with($data);
    }


    function editSubmit(Request $request){
        $data = $request->all();
        $id = base64_decode($data['driver_id']);
        
        $drupdate=driverDocument::find($id);
        $drupdate->driver_id = $id;  
        $drupdate->card_status = '1';
        $drupdate->license_status='1';
        $drupdate->save();

        if($request->hasFile('card_front')) {
            $file = $request->file('card_front');
            $filename = $id.'card_front'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->card_front = $filename;
            $dd->save();
        }

        if($request->hasFile('card_back')) {
            $file = $request->file('card_back');
            $filename = $id.'card_back'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->card_back = $filename;
            $dd->save();
        }

        if($request->hasFile('license_front')) {
            $file = $request->file('license_front');
            $filename = $id.'license_front'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->license_front = $filename;
            $dd->save();
        }

        if($request->hasFile('license_back')) {
            $file = $request->file('license_back');
            $filename = $id.'license_backImage'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/driver/imginfo/'), $filename);
            $dd = driverDocument::find($id);
            $dd->license_back = $filename;
            $dd->save();
        }

        driver::updateDriver($id, $data);
       
      
        return redirect()->back()->with('success', 'Driver Updated.');
    }


    function active()
    {
        $data = array(
            'driver' => driver::where('status', '1')->with(['driverDoc'])->get()
        );
      
        return view('admin.drivers.active')->with($data);
    }

    function blocked()
    {
        $data = array(
            'driver' => driver::where('status', '2')->with(['driverDoc'])->get()
        );

        return view('admin.drivers.blocked')->with($data);
    }

    function trashed()
    {
        $data = array(
            'driver' => driver::where('status', '3')->with(['driverDoc'])->get()
        );
        return view('admin.drivers.trashed')->with($data);
    }

    function statusActive($id, $status){
        $id = base64_decode($id);
        $d = driver::find($id);
        $d->status = $status;
        $d->save();

        return redirect()->back()->with('success', 'Driver is Activated.');
    }


    function statusBlock($id, $status){
        $id = base64_decode($id);
        $d = driver::find($id);
        $d->status = $status;
        $d->save();

        return redirect()->back()->with('success', 'Driver Block Updated.');
    }


    function driverDeleted($id, $status){
        $id = base64_decode($id);
        $d = driver::find($id);
        $d->status = $status;
        $d->save();

        return redirect()->back()->with('success', 'Driver Deleted.');
    }


    function restore($id){
        $id = base64_decode($id);
        $d = driver::find($id);
        $d->status = '1';
        $d->save();

        return redirect()->back()->with('success', 'Driver is Activated.');
    }

    function details($id){
        $id = base64_decode($id);
        $data = driver::find($id);

          
    }

}
