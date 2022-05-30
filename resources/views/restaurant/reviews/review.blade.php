@extends('restaurant.includes.master')
@section('title', 'Customer Reviews')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                	<div class="positive-review">
                		<h1 class="pos-head no-margin pad-bot-10">Average Rating</h1>
                        <h2 class="pos-rating no-margin"><i class="fas fa-star"></i> 3.6 <span>(200 reviews)</span></h2>
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
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="order-det">
                        <div class="row">
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Ruby Roben</h2>
                                <p class="order-date">User since 2020</p>
                            </div>
                        </div>
                        <hr class="hori-row">
                        <div class="row">
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                                <p class="order-date">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                                <p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                                <p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </div>

@endsection