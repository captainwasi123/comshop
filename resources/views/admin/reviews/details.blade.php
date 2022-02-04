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
                                    <h5>Restaurant Name: <span><b>MR.Cone</b></span></h5>
                                </div>                                
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-1 col-md-2 col-4">
                                    <div class="view-review-section">
                                        <img src="{{URL::to('/public/restaurant/assets')}}/images/user-icon.png" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-12">
                                    <div class="view-review-section">
                                        <h2 class="no-margin pad-bot-10">John Doe <span>5 minutes ago</span></h2>
                                        <p class="no-margin">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                                        <h3 class="no-margin pad-top-20 pad-bot-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </h3>
                                        <hr>
                                    </div>                                    
                                </div>
                                <div class="col-lg-1 col-md-2 col-4">
                                    <div class="view-review-section">
                                        <img src="{{URL::to('/public/restaurant/assets')}}/images/user-icon.png" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-12">
                                    <div class="view-review-section">
                                        <h2 class="no-margin pad-bot-10">John Doe <span>5 minutes ago</span></h2>
                                        <p class="no-margin">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                                        <h3 class="no-margin pad-top-20 pad-bot-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </h3>
                                        <hr>
                                    </div>                                    
                                </div>
                                <div class="col-lg-1 col-md-2 col-4">
                                    <div class="view-review-section">
                                        <img src="{{URL::to('/public/restaurant/assets')}}/images/user-icon.png" alt="" width="100%">
                                    </div>
                                </div>
                                <div class="col-lg-11 col-md-10 col-12">
                                    <div class="view-review-section">
                                        <h2 class="no-margin pad-bot-10">John Doe <span>5 minutes ago</span></h2>
                                        <p class="no-margin">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                                        <h3 class="no-margin pad-top-20 pad-bot-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </h3>
                                        <hr>
                                    </div>                                    
                                </div>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
        </div>
    </div>
</div>

@endsection