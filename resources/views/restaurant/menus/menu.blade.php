@extends('restaurant.includes.master')
@section('title', 'Menu')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css" />

	<div class="main_content_iner ">
        <div class="container-fluid p-0">
	        <div class="row">
		        <div class="col-lg-6 col-md-4 col-4">                      
		        </div> 
	        </div>
	        <div class="row pad-top-30 pad-bot-20">
	            <div class="col-lg-6 col-md-6 col-6">
	               	<div class="sec-7">
	                	<h2 class="no-margin">Category</h2>
	               	</div>
	            </div>
		        <div class="col-lg-6 col-md-8 col-8">
		        	<div class="sec-6">
		            	<a href="#" class="btn bg-yellow" data-toggle="modal" data-target="#addMenuModal">Add New Menu</a>
		            </div>
		        </div> 
	        </div>
	        <div class="section-4">
	        	<div class="carousel"> 
	        		@foreach($categories as $val)
				      	<div>				        
				          	<div class="sec-9 bg-white text-center">
		             			<img src="{{URL::to('/public/storage/category/'.$val->image)}}" width="50%"> 
		             			<h2 class="no-margin pad-top-10">{{$val->name}}</h2>  
		          			</div>				
				      	</div> 
			      	@endforeach
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

      	@foreach($categories as $val)
      		@if(count($val->menu) > 0)
		      	<div class="row pad-top-30 pad-bot-20">
			        <div class="col-lg-6 col-md-6 col-6">
			          	<div class="sec-7">
			              	<h2 class="no-margin">{{$val->name}}</h2>
			           	</div>
			        </div>
			        <div class="col-lg-6 col-md-6 col-6">
			          	<div class="sec-8">
			           	</div>
			        </div>
			    </div>
		        <div class="row">
		        	<div class="col-lg-12 col-md-12 col-12">
		           		<div class="carousel1"> 
			    			@foreach($val->menuRes as $menu)
						      	<div>				        
						          	<div class="sec-12 bg-white">
			                 			<img src="{{URL::to('/public/storage/restaurant/menu/'.$menu->image)}}">
			                 			<h2 class="no-margin pad-top-20 pad-bot-10"> {{$menu->title}} </h2>
			                 			<h3 class="no-margin"><span class="col-yellow">$</span>{{number_format($menu->price, 1)}}</h3>
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
			        		@endforeach
		        		</div>			              	
			        </div>
		        </div>
	        @endif
        @endforeach
    </div>
   
    <!-- menu popup -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered sec-47" role="document">
            <div class="modal-content">
                
            </div>
        </div>
    </div>

	<div class="modal fade" id="addMenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;" role="document">
            <div class="modal-content">
		        <form data-validation="true" action="{{route('restaurant.menu.add')}}" method="post" enctype="multipart/form-data">
		        	@csrf
	                <div class="modal-header sec-46">
	                    <h5 class="modal-title" id="exampleModalLongTitle">Add Menu</h5>
	                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                        <span aria-hidden="true">&times;</span>
	                    </button>
	                </div>
	                <div class="sec-51">

	                  	<div class="item-wrapper one">
						    <div class="item">
					            <div class="item-inner">
					                <div class="item-content">

						                <div class="file-upload image-upload">

						                   	<div class="image-upload-wrap">
						                     	<input class="file-upload-input" name="image_name" type='file' onchange="readURL(this);" accept="image/*"/>
							                    <div class="drag-text">
							                    	<h3>
							                    		<i class="fas fa-cloud-download-alt"></i>
							                    		<br> Upload Image
							                    	</h3>
							                     </div>
						                    </div>
						                    <div class="file-upload-content sec-53" style="display: none;">
						                    	<button type="button" onclick="removeUpload()" class="remove-image">
						                    		<span> x Remove</span>
						                    	</button>
						                    	<img class="file-upload-image" src="#" alt="your image" width="100%" />
												  
						                    </div> 
<style type="text/css">
	button.remove-image {
    display: contents;
    background: red !important;
}
.remove-image span {
    font-size: 16px;
    color: red;
    font-weight: 500;
}
</style>
						                </div>

					                </div>
					            </div>
						    </div>
						</div>                
	                </div>
	                <div class="sec-50">
	                    <div class="row pop-up-form">
	                        <div class="col-md-12">
	                                <div class="form-group pad-bot-30 no-margin">
	                                    <label for="inputAddress">Title</label>
	                                    <input type="text" class="form-control" id="inputAddress" name="title" placeholder="" required>
	                                </div>
	                                <div class="form-row">
	                                    <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
	                                        <label for="inputCity">Category</label>
	                                        <select class="form-control" name="category" required>
	                                        	<option value="">Select</option>
	                                        	@foreach($categories as $val)
	                                        		<option value="{{$val->id}}">{{$val->name}}</option>
	                                        	@endforeach
	                                        </select>
	                                    </div>
	                                    <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
	                                        <label for="inputState">Prepration Time <span>(min)</span></label>
	                                        <input type="number" class="form-control" id="inputZip" name="prepration_time" required>
	                                    </div>
	                                    <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
	                                        <label for="inputZip">Price</label>
	                                        <input type="number" class="form-control" id="inputZip" name="price" value="10">
	                                    </div>
	                                </div>                                
	                                <div class="form-group">
	                                    <label for="inputAddress">Description</label>
	                                    <textarea class="form-control" rows="5" name="description" required></textarea>
	                                </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="modal-footer pad-top-30">
	                    <button type="button" class="btn sec-49" data-dismiss="modal">Cancel</button>
	                    <button type="submit" class="btn sec-48">Save</button>
	                </div>
                </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
  });
  $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
@endsection