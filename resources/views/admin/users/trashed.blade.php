@extends('admin.includes.master')
@section('title', 'Trashed Users')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
        <div class="order-section-chart ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 sec-45">
                    <div class="white_box">
                       <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Trashed Users</h3>
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
                                            <th scope="col">Role</th>
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
                                        <td>Admin</td>
                                        <td>  
                                            @switch($val->status)
                                        @case('1')
                                            <a href="#" class="status_btn">Active</a>
                                            @break

                                        @case('4')
                                            <a href="#" class="status_btn  bg-red">Deleted</a>
                                                @break

                                        @endswitch</td>
                                            <td>
                                                <a href="javascript:void(0)" class="status-icons editUser" data-id="{{base64_encode($val->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                                <a href="javascript:void(0)" class="status-icons restoreUser" data-id="{{base64_encode($val->id)}}"><i class="fa fa-refresh"></i></a>
                                                
                                            </td>
                                        </tr>  
                                         @empty
                                    
                                            <h3>No user record found</h3>
                                        
                                        @endforelse                                  
                                    </tbody>
                                </table>
                            </div>
                        </div>                          
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 page-shows-col">
                    <div class="page-shows">
                        <p>Showing <strong style="color: black;">1-5</strong> from <strong  style="color: black;">100</strong> data</p>
                    </div>                  
                </div>
                <div class="col-lg-6 col-md-6 col-12 page-shows-nav">
                    <nav aria-label="Page navigation example" class="Paginate">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link left-arrow" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link-nav " href="#">1</a></li>
                            <li class="page-item"><a class="page-link-nav" href="#">2</a></li>
                            <li class="page-item"><a class="page-link-nav" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rigt-arrow" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection