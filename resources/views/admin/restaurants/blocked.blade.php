@extends('admin.includes.master')
@section('title', 'Blocked Restaurants')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Blocked Restaurants</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.restaurants.add')}}" class="bg-yellow">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($restaurant as $key => $val)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$val->name}}</td>
                                                <td>{{$val->phone}}</td>
                                                <td>{{$val->owner_name}}</td>
                                                <td>{{$val->email}}</td>
                                                <td><p class="cut-address" title="{{$val->address}}">{{$val->address}}</p></td>
                                                <td>
                                                    <label class="switch">
                                                    <input type="checkbox" class="restaurantStatus" value="1" data-val="{{base64_encode($val->id)}}" {{$val->status == '1' ? 'checked' : ''}}>
                                                    <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="status-icons editRestaurant" data-id="{{base64_encode($val->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                                    <a href="javascript:void(0)" class="status-icons deleteRestaurant" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if(count($restaurant) == 0)
                                            <tr>
                                                <td colspan="8">No Restaurant Found.</td>
                                            </tr>
                                        @endif                                             
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