@extends('admin.includes.master')
@section('title', 'Reviews & Ratings')

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
                                <h3 class="inner-order-head no-margin pad-bot-10">Reviews & Ratings</h3>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:5%">S.No</th>
                                            <th scope="col" style="width:30%">Name</th>
                                            <th scope="col" style="width:40%">Address</th>
                                            <th scope="col" style="width:15%">Rating & Reviews</th>
                                            <th scope="col" style="width:10%">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($restaurant as $key => $val)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{$val->name}}</td>
                                                <td>{{$val->address}}</td>
                                                <td>
                                                    <i class="fa fa-star"></i>
                                                    {{number_format($val->avgRating[0]->avgRating, 1)}} 
                                                    <small>({{number_format(count($val->reviews))}} reviews)</small>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.review.details', base64_encode($val->id))}}" class="status_btn">View</a>
                                                </td>
                                            </tr>                         
                                        @endforeach                   
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
            {{$restaurant->links()}}
        </div>
    </div>
</div>

@endsection