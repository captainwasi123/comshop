@extends('restaurant.includes.master')
@section('title', 'Dashboard')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
             	<div class="col-lg-8 col-md-12 col-12">
               		<div class="row sec-26 bg-white bor-radius">
	                  	<div class="col-lg-4 col-md-4 col-6 sec-23">
	                     	<div class="single_quick_activity">
	                        	<div class="count_content sec-22">
	                            	<p class="no-margin">Total Income</p>
	                            	<h3 class="no-margin pad-top-10">$<span class="counter">12,890,00</span> </h3>
	                        	</div>                                                                                  
	                    	</div>  
	                  	</div>
	                  	<div class="col-lg-1 col-md-1 col-1 no-pad"></div>
		                <div class="col-lg-2 col-md-2 col-5 no-pad">
		                	<div class="single_quick_activity sec-24">
		                        <div class="count_content">
		                            <p class="no-margin">Income</p>
		                            <h3 class="no-margin pad-bot-10">$<span class="counter">4345,00</span> </h3>
		                            <i class="fas fa-arrow-circle-up"> <span> +15% </span></i>
		                        </div>  
		                    </div> 
		                </div>
		                <div class="col-lg-2 col-md-2 col-6">
		                    <div class="single_quick_activity sec-25">
		                        <div class="count_content">
		                            <p class="no-margin">Expense</p>
		                            <h3 class="no-margin pad-bot-10">$<span class="counter">2890,00</span> </h3>
		                            <i class="fas fa-arrow-circle-down"> <span> -10%</span></i>
		                        </div> 
		                    </div> 
		                </div>
	                  	<div class="col-lg-3 col-md-3 col-6 no-pad">
	                      	<div class="sec-27">
	                        	<button class="bg-yellow" style="font-size:24px">Withdraw &nbsp; <img src="{{URL::to('/public/restaurant/assets')}}/images/widthdraw-icon.png"></button>
	                      	</div>
	                  	</div>
               		</div> 
	                <div class="row pad-top-30">
	                  	<div class="col-lg-6 col-md-12 col-12 sec-30">                    
	                        <div class="white_box sec-29">
	                        	<div class="bhai">
	                        		<!-- <div id="apex_2"></div> -->
	                        		  <div id="bar-chart"></div>
	                        	</div>
	                        	
	                       	</div>                    
	                  	</div>
		                <div class="col-lg-6 col-md-12 col-12 sec-38">                    
		                    <div class="row pad-top-30 padding-all">
		               			<div class="col-lg-12 col-md-12 col-12">
		               				<div class="sec-37">
		                        		<h4 class="no-margin">Performance</h4>
		                    		</div>
		                    	</div>

		                    	</style>
		                        <div class="col-lg-8 col-md-12 col-12 no-pad">
									<svg viewbox="0 0 110 70">
									  <circle cx="50" cy="50" r="45" fill="#fff"/>
									  <path fill="none" stroke-linecap="box" stroke-width="10" stroke="#f8b602"
									        stroke-dasharray="70,112"
									        d="M50 10
									           a 40 40 0 0 1 0 80
									           a 40 40 0 0 1 0 -80"/>
									  <text x="50" y="40" text-anchor="middle" dy="7" font-size="20" fill="red"></text>
									</svg>
									<div class="circle-class">
										<i class="fas fa-arrow-circle-up"></i>+15%
									</div>
		                        </div>
		                        <div class="col-lg-4 col-md-12 col-12">
		                           <div class="sec-39">
		                              	<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor</p>
		                           </div>
		                        </div>
		                    </div>            
		                </div>
	                </div> 
               		<div class="row pad-top-30">
	                  	<div class="col-lg-12 col-md-12 col-12 sec-45">
	                    	<div class="white_box">
	                      		<div class="row">
	                         		<div class="col-lg-6 col-md-6 col-6">
			                           	<div class="sec-33">
			                             	<h4 class="no-margin">Order Rate</h4>
			                           	</div>
	                         		</div>
	                         		<div class="col-lg-6 col-md-6 col-6">                 
				                        <div class="white_card_body sec-31">
				                            <div class="dropdown">
				                                <button class="btn sec-32 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                                  Month</button>
				                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				                                  	<a class="dropdown-item" href="#">Action</a>
				                                  	<a class="dropdown-item" href="#">Another action</a>
				                                  	<a class="dropdown-item" href="#">Something else here</a>
				                                </div>
				                            </div>
				                        </div>                             
	                         		</div>
	                      		</div>
	                      		<div class="row pad-top-20">
			                        <div class="col-lg-1 col-md-2 col-2 sec-34">                            
			                            <img src="{{URL::to('/public/restaurant/assets')}}/images/image13.png">
			                        </div>
		                         	<div class="col-lg-2 col-md-4 col-4 sec-35">
		                            	<h2 class="no-margin">Order Total <span> 25.307</span></h2> 
		                         	</div>
		                         	<div class="col-lg-3 col-md-5 col-5 no-margin sec-36 no-pad">
		                            	<h5 class="no-margin pad-bot-10">Target &nbsp; &nbsp; &nbsp; &nbsp;<span> 3.982 </span></h5>
		                            	<div id="bar1" class="barfiller">                               
		                               		<span class="fill" data-percentage="75"></span>
		                            	</div>
		                         	</div>
		                         	<div class="col-lg-12 col-md-12 col-12">		                         		
		                         		<canvas id="myChart" style="width:100%;max-width:100% ; height: 233px !important;"></canvas>
		                         	</div>
	                      		</div>	                    		
	                    	</div>
	                  	</div>
               		</div>        
             	</div>
             	<div class="col-lg-4 col-md-4 col-12 no-pad-mobile">
	                <div class="sec-41 bg-white padding-all">
	                 	<div class="row pad-top-10 pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image14.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
			                    <div class="sec-40">
			                        <p>Total Order Complete</p>
			                        <h4 class="no-margin">2.678</h4>
			                    </div>
		                    </div>
	                 	</div>
		                <div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                	    <div class="sec-42">
		                    	    <img src="{{URL::to('/public/restaurant/assets')}}/images/image15.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                        	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">1.234</h4>
		                      	</div>
		                    </div>
		                </div>
	                 	<div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image16.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">123</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                 	<div class="row pad-bot-10">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image17.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">432</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                </div> 
                	<div class="row">
                   		<div class="col-lg-12 col-md-12 col-12">
                      		<div class="sec-44">
                          		<div class="white_box">
                            		<div class="box_header">
                              			<div class="main-title">
                                			<h3 class="no-margin">Popular Food</h3>
                              			</div>
                            		</div>
                            		<div id="piechart"></div>
                          		</div>
                      		</div>
                  		</div>
                	</div>
             	</div>
          	</div>
          	<div class="row pad-top-30 m-r-10">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                    <div class="row">
	                    	<div class="col-lg-12 col-md-6 col-6">
			                   	<div class="sec-33">
			                      	<h4 class="no-margin">Order Rate</h4>
			                   	</div>
	                    	</div>
	                 	</div>
	                    <div class="row pad-top-20">
			      			<div class="col-lg-12 col-md-12 col-12 ">
		                        <div id="apex_2"></div>
		                    </div>
	                     </div>	                    		
	                </div>
	            </div>
            </div> 
        </div>
    </div>

@endsection