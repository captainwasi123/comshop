@extends('admin.includes.master')
@section('title', 'Active Drivers')

@section('content')

<style type="text/css">
.sec-46 {
    padding: 0px 10px 10px 0px;
}
</style>
<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Active Drivers</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.drivers.add')}}" class="bg-yellow">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                      <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Full Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">City</th>
                                            <th scope="col">Attachments</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @forelse ($driver as $key => $val)  
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$val->first_name.' '.$val->last_name}}</td>
                                            <td>{{$val->phone_number}}</td>
                                            <td>{{$val->email_address}}</td>
                                            <td>{{@$val->city->name}}</td>
                                            
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-sm btn-primary viewDriverDetail" data-id="{{base64_encode($val->id)}}">View</a>
                                            </td>
                                            <td>
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                            	
                                            	<a href="javascript:void(0)" class="status-icons driverEdit"  data-id="{{base64_encode($val->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                            	<a href="javascript:void(0)"  class="status-icons driverBlock" data-id="{{base64_encode($val->id)}}"><i class="fa fa-ban"></i></a>
                                            	<a href="javascript:void(0)"  class="status-icons driverDeleted" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                            @empty
                                         <tr>
                                                <td colspan="8">No Driver Record Found</td>
                                        </tr>
                                        @endforelse                                             
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
            {{$driver->links()}}
        </div>
    </div>
</div>

@endsection