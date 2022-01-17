@extends('restaurant.includes.master')
@section('title', 'Menu')

@section('content')

	<div class="main_content_iner ">
        <div class="container-fluid p-0">
	        <div class="row">
		        <div class="col-lg-6 col-md-4 col-4">
		    		<!-- <div class="sec-5">
			            <form>
			                <input type="text" placeholder="Search..." >
			                <button> <img src="{{URL::to('/public/restaurant/assets')}}/images/image12.png"> </button>
			            </form>
			        </div> -->                          
		        </div>
		        <div class="col-lg-6 col-md-8 col-8">
		        	<div class="sec-6">
		            	<a href="#" class="btn bg-yellow" data-toggle="modal" data-target="#exampleModalCenter">Add New Menu</a>
		            </div>
		        </div>  
	        </div>
	        <div class="row pad-top-30 pad-bot-20">
	            <div class="col-lg-6 col-md-6 col-6">
	               	<div class="sec-7">
	                	<h2 class="no-margin">Category</h2>
	               	</div>
	            </div>
	            <div class="col-lg-6 col-md-6 col-6">
	               	<div class="sec-8">
	                	<a href="#" class="next col-yellow">View all &nbsp; ></a> 
	               	</div>
	            </div>
	        </div>
	        <div class="section-4 desktop">
				<div class="row">
				    <div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image3.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Bakery</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image4.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Burger</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image5.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Beverage</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image6.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Chicken</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image7.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Pizza</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image8.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Seafood</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image9.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Dessert</h2>  
		          		</div>
		          	</div>
		          	<div class="col">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image10.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Noodle</h2>  
		          		</div>
		          	</div>
				</div>
			</div>

			<div class="section-4 mobile">
				<div class="row">
				    <div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image3.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Bakery</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image4.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Burger</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image5.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Beverage</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image6.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Chicken</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image7.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Pizza</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image8.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Seafood</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image9.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Dessert</h2>  
		          		</div>
		          	</div>
		          	<div class="col-md-4 col-6">
				    	<div class="sec-9 bg-white text-center">
		             		<img src="{{URL::to('/public/restaurant/assets')}}/images/image10.png" width="50%"> 
		             		<h2 class="no-margin pad-top-10">Noodle</h2>  
		          		</div>
		          	</div>
				</div>
			</div>

	    </div>
      	<div class="row">
	        <div class="col-lg-12 col-md-12 col-12">
	          	<div class="sec-7 pad-top-30 pad-bot-20">
	              	<h2 class="no-margin">Popular This Week</h2>
	           	</div>
	        </div>
	        <div class="col-lg-3 col-md-6 col-12">
	        	<div class="sec-10-main bg-white">
	            	<div class="row">          
	                	<div class="col-lg-4 col-md-3 col-3 no-pad">
	                  		<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
	                	</div>
		                <div class="col-lg-7 col-md-8 col-8">
		                  	<div class="sec-10">
		                     	<h2 class="no-margin">Fish Burger</h2>
		                     	<h3 class="no-margin pad-top-10 pad-bot-10"> <span style="color:#ffc107">$ </span> 5.59</h3>
		                     	<i class="fa fa-star"> <span> 5.0 - 1k+ Reviews </span></i>
		                  	</div>   
		                </div>
		                <div class="col-lg-1 col-md-1 col-1 no-pad">
		                  	<a class="sec-11" href="#">. . .</a> 
		                </div>
		                <div class="col-lg-12 col-md-12 col-12 no-pad">
		                	<div class="sec-10-1 pad-top-10">
	                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor... </p>
	                		</div>     
	            		</div>
	            	</div>
	         	</div>
	        </div>
	        <div class="col-lg-3 col-md-6 col-12">
	        	<div class="sec-10-main bg-white">
	            	<div class="row">          
	                	<div class="col-lg-4 col-md-3 col-3 no-pad">
	                  		<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
	                	</div>
		                <div class="col-lg-7 col-md-8 col-8">
		                  	<div class="sec-10">
		                     	<h2 class="no-margin">Fish Burger</h2>
		                     	<h3 class="no-margin pad-top-10 pad-bot-10"> <span style="color:#ffc107">$ </span> 5.59</h3>
		                     	<i class="fa fa-star"> <span> 5.0 - 1k+ Reviews </span></i>
		                  	</div>   
		                </div>
		                <div class="col-lg-1 col-md-1 col-1 no-pad">
		                  	<a class="sec-11" href="#">. . .</a> 
		                </div>
		                <div class="col-lg-12 col-md-12 col-12 no-pad">
		                	<div class="sec-10-1 pad-top-10">
	                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor... </p>
	                		</div>     
	            		</div>
	            	</div>
	         	</div>
	        </div>
	        <div class="col-lg-3 col-md-6 col-12">
	        	<div class="sec-10-main bg-white">
	            	<div class="row">          
	                	<div class="col-lg-4 col-md-3 col-3 no-pad">
	                  		<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
	                	</div>
		                <div class="col-lg-7 col-md-8 col-8">
		                  	<div class="sec-10">
		                     	<h2 class="no-margin">Fish Burger</h2>
		                     	<h3 class="no-margin pad-top-10 pad-bot-10"> <span style="color:#ffc107">$ </span> 5.59</h3>
		                     	<i class="fa fa-star"> <span> 5.0 - 1k+ Reviews </span></i>
		                  	</div>   
		                </div>
		                <div class="col-lg-1 col-md-1 col-1 no-pad">
		                  	<a class="sec-11" href="#">. . .</a> 
		                </div>
		                <div class="col-lg-12 col-md-12 col-12 no-pad">
		                	<div class="sec-10-1 pad-top-10">
	                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor... </p>
	                		</div>     
	            		</div>
	            	</div>
	         	</div>
	        </div>
	        <div class="col-lg-3 col-md-6 col-12">
	        	<div class="sec-10-main bg-white">
	            	<div class="row">          
	                	<div class="col-lg-4 col-md-3 col-3 no-pad">
	                  		<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
	                	</div>
		                <div class="col-lg-7 col-md-8 col-8">
		                  	<div class="sec-10">
		                     	<h2 class="no-margin">Fish Burger</h2>
		                     	<h3 class="no-margin pad-top-10 pad-bot-10"> <span style="color:#ffc107">$ </span> 5.59</h3>
		                     	<i class="fa fa-star"> <span> 5.0 - 1k+ Reviews </span></i>
		                  	</div>   
		                </div>
		                <div class="col-lg-1 col-md-1 col-1 no-pad">
		                  	<a class="sec-11" href="#">. . .</a> 
		                </div>
		                <div class="col-lg-12 col-md-12 col-12 no-pad">
		                	<div class="sec-10-1 pad-top-10">
	                			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor... </p>
	                		</div>     
	            		</div>
	            	</div>
	         	</div>
	        </div>
      	</div>
      	<div class="row pad-top-30 pad-bot-20">
	        <div class="col-lg-6 col-md-6 col-6">
	          	<div class="sec-7">
	              	<h2 class="no-margin">Best Seller</h2>
	           	</div>
	        </div>
	        <div class="col-lg-6 col-md-6 col-6">
	          	<div class="sec-8">
	              	<a href="#" class="next col-yellow">View all &nbsp; ></a> 
	           	</div>
	        </div>
	    </div>
        <div class="row">
           	<div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              	<div class="sec-12 bg-white">
                 	<img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
                 	<h2 class="no-margin pad-top-20 pad-bot-10"> Pepperoni Pizza </h2>
                 	<h3 class="no-margin"><span class="col-yellow">$</span>5.59</h3>
	              	<div class="row pad-top-20">
	                	<div class="col-lg-6 col-md-6 col-6 no-pad" style="border-right: 1px solid #DBDBDB;">
		                    <div class="sec-13">
		                       <h2 class="no-margin">Sold 1k</h2>
		                    </div>
	                 	</div>
		                <div class="col-lg-6 col-md-6 col-6 no-pad">
		                    <div class="sec-14">
		                       <h5 class="no-margin">+ 15% <i class="fas fa-arrow-alt-circle-up"> </i></h5>
		                    </div>
		                </div>
	              	</div>   
              	</div>
            </div>
        </div>
        <div class="row pad-top-30 pad-bot-20">
	        <div class="col-lg-6 col-md-6 col-6">
	          	<div class="sec-7">
	              	<h2 class="no-margin">Promo</h2>
	           	</div>
	        </div>
	        <div class="col-lg-6 col-md-6 col-6">
	          	<div class="sec-8">
	              	<a href="#" class="next col-yellow">View all &nbsp; ></a> 
	           	</div>
	        </div>
	    </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
              	<div class="row sec-19 bg-white">
                	<div class="col-lg-7 col-md-7 col-7 no-pad"> 
	                  	<div class="sec-15">
	                     	<h5 class="no-margin col-white"> 15% Off</h5>
	                     	<h2 class="no-margin">Fish Burger</h2>
	                     	<h4 class="no-margin">
	                     		<span class="sec-17 col-yellow">$</span> 
	                     		<span class="sec-18"> 3.59 </span> <del>$5.59</del> </h4>
	                     	<h3 class="no-margin">
	                     		<i class="fa fa-star"> <span> 5.0 . 1k+  Reviews </span></i>
	                     	</h3>
	                  	</div>
                	</div>
	                <div class="col-lg-5 col-md-5 col-5 no-pad"> 
		                <div class="sec-16">
		                    <img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
		                </div>
	                </div>
              	</div>
           	</div>
           	<div class="col-lg-3 col-md-6 col-12">
              	<div class="row sec-19 bg-white">
                	<div class="col-lg-7 col-md-7 col-7 no-pad"> 
	                  	<div class="sec-15">
	                     	<h5 class="no-margin col-white"> 15% Off</h5>
	                     	<h2 class="no-margin">Fish Burger</h2>
	                     	<h4 class="no-margin">
	                     		<span class="sec-17 col-yellow">$</span> 
	                     		<span class="sec-18"> 3.59 </span> <del>$5.59</del> </h4>
	                     	<h3 class="no-margin">
	                     		<i class="fa fa-star"> <span> 5.0 . 1k+  Reviews </span></i>
	                     	</h3>
	                  	</div>
                	</div>
	                <div class="col-lg-5 col-md-5 col-5 no-pad"> 
		                <div class="sec-16">
		                    <img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
		                </div>
	                </div>
              	</div>
           	</div>
           	<div class="col-lg-3 col-md-6 col-12">
              	<div class="row sec-19 bg-white">
                	<div class="col-lg-7 col-md-7 col-7 no-pad"> 
	                  	<div class="sec-15">
	                     	<h5 class="no-margin col-white"> 15% Off</h5>
	                     	<h2 class="no-margin">Fish Burger</h2>
	                     	<h4 class="no-margin">
	                     		<span class="sec-17 col-yellow">$</span> 
	                     		<span class="sec-18"> 3.59 </span> <del>$5.59</del> </h4>
	                     	<h3 class="no-margin">
	                     		<i class="fa fa-star"> <span> 5.0 . 1k+  Reviews </span></i>
	                     	</h3>
	                  	</div>
                	</div>
	                <div class="col-lg-5 col-md-5 col-5 no-pad"> 
		                <div class="sec-16">
		                    <img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
		                </div>
	                </div>
              	</div>
           	</div>
           	<div class="col-lg-3 col-md-6 col-12">
              	<div class="row sec-19 bg-white">
                	<div class="col-lg-7 col-md-7 col-7 no-pad"> 
	                  	<div class="sec-15">
	                     	<h5 class="no-margin col-white"> 15% Off</h5>
	                     	<h2 class="no-margin">Fish Burger</h2>
	                     	<h4 class="no-margin">
	                     		<span class="sec-17 col-yellow">$</span> 
	                     		<span class="sec-18"> 3.59 </span> <del>$5.59</del> </h4>
	                     	<h3 class="no-margin">
	                     		<i class="fa fa-star"> <span> 5.0 . 1k+  Reviews </span></i>
	                     	</h3>
	                  	</div>
                	</div>
	                <div class="col-lg-5 col-md-5 col-5 no-pad"> 
		                <div class="sec-16">
		                    <img src="{{URL::to('/public/restaurant/assets')}}/images/image11.png">
		                </div>
	                </div>
              	</div>
           	</div>
        </div>
    </div>

    <!-- menu popup -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;" role="document">
            <div class="modal-content">
                <div class="modal-header sec-46">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="sec-51"> 
                  	<div class="item-wrapper one">
					    <div class="item">
					        <form data-validation="true" action="#" method="post" enctype="multipart/form-data">
					            <div class="item-inner">
					                <div class="item-content">
					                    <div class="image-upload"> 
					                    	<label style="cursor: pointer;" for="file_upload"> <img src="" alt="" class="uploaded-image">
					                            <div class="h-100">
					                                <div class="dplay-tbl">
					                                    <div class="dplay-tbl-cell">
					                                    	<img src="{{URL::to('/public/restaurant/assets')}}/images/upload-icon.png">
					                                        <h5> Image Upload</h5>
					                                    </div>
					                                </div>
					                            </div>
												<input data-required="image" type="file" name="image_name" id="file_upload" class="image-input" data-traget-resolution="image_resolution" value="">
					                        </label> 
					                    </div>
					                </div>
					            </div>
					        </form>
					    </div>
					</div>
                </div>
                <div class="sec-50">
                    <div class="row pop-up-form">
                        <div class="col-md-12">
                            <form>
                                <div class="form-group pad-bot-30 no-margin">
                                    <label for="inputAddress">Title</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-4 col-md-4 col-4 no-margin pad-bot-30">
                                        <label for="inputCity">Category</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-4 no-margin pad-bot-30">
                                        <label for="inputState">Prepration Time <span>(min)</span></label>
                                        <input type="number" class="form-control" id="inputZip">
                                      <!--   <span class='number-wrapper'>
    <input type="number" />
</span> -->
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-4 no-margin pad-bot-30">
                                        <label for="inputZip">Price</label>
                                        <input type="number" class="form-control" id="inputZip" placeholder="10">
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="inputAddress">Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pad-top-30">
                    <button type="button" class="btn sec-49" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn sec-48">Save</button>
                </div>
            </div>
        </div>
    </div>

@endsection