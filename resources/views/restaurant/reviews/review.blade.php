@extends('restaurant.includes.master')
@section('title', 'Customer Reviews')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                	<div class="positive-review">
                		<div class="row">
	                        <div class="col-lg-5 col-md-12 col-12">
	                            <h1 class="pos-head no-margin pad-bot-10">Positive Review</h1>
	                            <p class="pos-date">June 1, 2020, 08:22 AM</p>
	                            <h3 class="pos-month pad-top-30 no-margin">This Month</h3>
	                            <h2 class="pos-rating no-margin">3.678<span>Reviews</span></h2>
	                            <p class="pos-icon pad-top-10"><i class="fas fa-arrow-circle-up"></i>  + 15%</p>
	                        </div>
	                        <div class="col-lg-7 col-md-11 col-12 no-pad">
	                            <div id="bar-chart"></div>
	                        </div>
                    	</div>
                	</div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                	<div class="negative-review">
                		<div class="row">
	                        <div class="col-lg-5 col-md-12 col-12">
	                            <h1 class="pos-head no-margin pad-bot-10">Negative Review</h1>
	                            <p class="pos-date">June 1, 2020, 08:22 AM</p>
	                            <h3 class="pos-month pad-top-30 no-margin">This Month</h3>
	                            <h2 class="pos-rating no-margin">1.678<span>Reviews</span></h2>
	                            <p class="pos-icon-neg pad-top-10"><i class="fas fa-arrow-circle-down"></i> + 15%</p>
	                        </div>
	                        <div class="col-lg-7 col-md-11 col-12 no-pad">
	                            <canvas id="myChart" style="width:100%;max-width:100% ; height: 205px !important;"></canvas>
	                        </div>
                    	</div>
                	</div>
                </div>
            </div>
                  
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                	<div class="rec-rev pad-top-40 pad-bot-30">
                		<h2 class="no-margin">Recent Reviews</h2>
                	</div>                            
                </div>

                <div class="col-lg-6 col-md-8 col-7">
                    <div class="serach_field-area">
                        <div class="search_inner">
                            <form action="#">
                            	<input type="text" placeholder="Search here...">
                                <button type="submit"> <i class="fas fa-search"></i> </button>
                            </form>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-5">
                    <div class="row">
                        <div class="col-lg-10 col-md-8 col-6 no-pad">
                            <button type="button" class="list-btn"><img src="{{URL::to('/public/restaurant/assets')}}/images/recent-review-1.png"></button>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                          	<button type="button" class="list-btn"><img src="{{URL::to('/public/restaurant/assets')}}/images/recent-review-2.png" width="90%"></button>
                        </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <div class="col-lg-3 col-md-2 col-2 no-pad">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="order-img">
                            </div>
                            <div class="col-lg-9 col-md-10 col-10">
                                <h2 class="order-name no-margin pad-top-10">Fish Burger</h2>
                                <p class="order-date">
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                	<i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                            </div>
                            <div class="col-lg-12 col-md-10 col-10 no-pad">
                            	<p class="order-des pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                            	<p class="order-date-1 pad-top-20">Ordered June 21, 2020</p>
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

@endsection