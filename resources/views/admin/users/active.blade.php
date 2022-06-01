@extends('admin.includes.master')
@section('title', 'Active Users')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Active Users</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.users.add')}}" class="bg-yellow">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active">
                                
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                    
                                        @forelse ($users as $key => $val)                                                                             
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$val->name}}</td>
                                            <td>{{$val->phone}}</td>
                                            <td>{{$val->email}}</td>
                                            <td>{{@$val->user_address->address}}</td>
                                            <td>  
                                                <label class="badge badge-success">Active</label>
                                            </td>
                                            <td>
                                            
                                                <a href="javascript:void(0)" class="status-icons editUser" data-id="{{base64_encode($val->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                            	<a href="javascript:void(0)" class="status-icons blocktUser" data-id="{{base64_encode($val->id)}}"><i class="fa fa-ban"></i></a>
                                                <a href="javascript:void(0)" class="status-icons userDeleted" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>  
                                         @empty
                                         <tr>
                                                <td colspan="7">No User Record Found</td>
                                        </tr>
                                        @endforelse                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
            {{$users->links()}}
        </div>
    </div>
</div>

@endsection