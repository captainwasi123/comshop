@extends('restaurant.includes.master')
@section('title', 'Customer Reviews')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                	<div class="positive-review">
                		<h1 class="pos-head no-margin pad-bot-10">Average Rating</h1>
                        <h2 class="pos-rating no-margin"><i class="fas fa-star"></i> {{number_format(Auth::guard('restaurant')->user()->avgRating[0]->avgRating, 1)}} <span>({{number_format(count(Auth::guard('restaurant')->user()->reviews))}} reviews)</span></h2>
                	</div>
                </div>
            </div>
                  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                	<div class="rec-rev pad-top-60">
                		<h2 class="no-margin">Recent Reviews</h2>
                	</div>                            
                </div>
            </div>

            <div class="row"> 
                <div class="col-lg-12">
                    <hr>
                </div>
                @foreach(Auth::guard('restaurant')->user()->reviews as $val)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="order-det">
                            <div class="row">
                                <div class="col-lg-3 col-md-2 col-2 no-pad">
                                    <img src="{{URL::to('/public/restaurant/assets')}}/images/user-placeholder.jpg" class="order-img">
                                </div>
                                <div class="col-lg-9 col-md-10 col-10">
                                    <h2 class="order-name no-margin pad-top-10">{{@$val->user->name}}</h2>
                                    <p class="order-date">{{$val->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                            <hr class="hori-row">
                            <div class="row">
                                <div class="col-lg-12 col-md-10 col-10 no-pad">
                                    <p class="order-date">
                                        @for($i=1; $i<=5; $i++)
                                            @if($i>$val->rating)
                                                <i class="fa fa-star disable"></i>
                                            @else
                                                <i class="fas fa-star"></i>
                                            @endif
                                        @endfor
                                    </p>
                                    <p class="order-des pad-top-10">
                                        {{$val->reviews}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(count(Auth::guard('restaurant')->user()->reviews) == 0)
                    <div class="col-lg-12">
                        <h5>No Reviews.</h5>
                    </div>
                @endif
            </div>
	    </div>
    </div>

@endsection