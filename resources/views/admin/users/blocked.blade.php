@extends('admin.includes.master')
@section('title', 'Blocked Users')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
        <div class="order-section-chart ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 sec-45">
                    <div class="white_box">
                       <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Blocked Users</h3>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
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
                                        @foreach($users as $key => $val)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$val->name}}</td>
                                                <td>{{$val->phone}}</td>
                                                <td>{{$val->email}}</td>
                                                <td>{{@$val->user_address->address}}</td>
                                                <td>  
                                                    <label class="badge badge-warning">Blocked</label>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="status-icons restoreUser" data-id="{{base64_encode($val->id)}}"><i class="fa fa-refresh"></i></a>
                                                    <a href="javascript:void(0)" class="status-icons userDeleted" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if(count($users) == 0)                                            
                                            <tr>
                                                <td colspan="7">No user record found</td>
                                            </tr>
                                        @endif
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