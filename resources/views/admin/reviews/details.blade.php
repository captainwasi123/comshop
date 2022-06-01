@extends('admin.includes.master')
@section('title', 'Details Reviews')

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
                                <h3 class="inner-order-head no-margin pad-bot-10">View Reviews</h3>
                                <div class="drive-sec-2">
                                    <h5>Restaurant Name: <span><b>{{$restaurant->name}}</b></span></h5>
                                </div>                                
                            </div>
                            <hr>
                            @foreach($restaurant->reviews as $val)
                                <div class="row">
                                    <div class="col-lg-1 col-md-2 col-4">
                                        <div class="view-review-section">
                                            <img src="{{URL::to('/public/restaurant/assets')}}/images/user-placeholder.jpg" alt="" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-lg-11 col-md-10 col-12">
                                        <div class="view-review-section">
                                            <h2 class="no-margin pad-bot-10">
                                                {{@$val->user->name}} <span>{{$val->created_at->diffForHumans()}}</span>
                                            </h2>
                                            <p class="no-margin">
                                                {{$val->reviews}}
                                            </p>
                                            <h3 class="no-margin pad-top-20 pad-bot-10">
                                                @for($i=1; $i<=5; $i++)
                                                    @if($i>$val->rating)
                                                        <i class="fa fa-star disable"></i>
                                                    @else
                                                        <i class="fas fa-star"></i>
                                                    @endif
                                                @endfor
                                            </h3>
                                            <hr>
                                        </div>                                    
                                    </div>
                                </div>
                            @endforeach
                            @if(count($restaurant->reviews) == 0)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h5>No Reviews</h5>
                                    </div>
                                </div>
                            @endif
                        </div>                    		
	                </div>
	            </div>
            </div>
        </div>
    </div>
</div>

@endsection