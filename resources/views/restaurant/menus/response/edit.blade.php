<form data-validation="true" action="{{route('restaurant.menu.update')}}" method="post" enctype="multipart/form-data">
	@csrf
  <input type="hidden" name="menu_id" value="{{$data->id}}">
  <div class="modal-header sec-46">
    <h5 class="modal-title" id="exampleModalLongTitle">Edit Menu</h5>
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
             	<div class="image-upload-wrap" style="display:none">
               	<input class="file-upload-input" name="image_name" type='file' onchange="readURL(this);" accept="image/*"/>
                <div class="drag-text">
                	<h3>
                		<i class="fas fa-cloud-download-alt"></i>
                		<br> Upload Image
                	</h3>
                 </div>
              </div>
              <div class="file-upload-content sec-53">
              	<button type="button" onclick="removeUpload()" class="remove-image">
              		<span> x Remove</span>
              	</button>
              	<img class="file-upload-image" src="{{URL::to('/public/storage/restaurant/menu/'.$data->image)}}" alt="your image" width="100%" />
			  
              </div> 
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
            <input type="text" class="form-control" id="inputAddress" value="{{$data->title}}" name="title" placeholder="" required>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                <label for="inputCity">Category</label>
                <select class="form-control" name="category" required>
                	<option value="">Select</option>
                	@foreach($categories as $val)
                		<option value="{{$val->id}}"
                      {{$data->category_id == $val->id ? 'selected' : ''}}
                    >{{$val->name}}</option>
                	@endforeach
                </select>
            </div>
            <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                <label for="inputState">Prepration Time <span>(min)</span></label>
                <input type="number" class="form-control" id="inputZip" value="{{$data->preparation_time}}" name="prepration_time" required>
            </div>
            <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
                <label for="inputZip">Price</label>
                <input type="number" class="form-control" id="inputZip" value="{{$data->price}}" name="price" value="10">
            </div>
        </div>
        @foreach($data->variant as $key => $val)  
          <div class="form-row">
            <div class="form-group col-lg-4 col-md-12 col-12 no-margin pad-bot-30">
              @if($key == 0)
                <label for="inputState">Variant Name</label>
              @endif
              <input type="text" class="form-control" name="variant_name[]" value="{{$val->name}}" required>
              </select>
            </div>
            <div class="form-group col-lg-6 col-md-12 col-12 no-margin pad-bot-30">
              @if($key == 0)
                <label for="inputState">Variant Description</label>
              @endif
              <input type="text" class="form-control" name="variant_description[]" value="{{$val->description}}" required>
              </select>
            </div>
            <div class="form-group col-lg-2 col-md-12 col-12 no-margin pad-bot-30">
              <label for="inputZip"></label>
              <input type="hidden" name="variantId[]" value="{{$val->id}}">
              @if($key == 0)
                <button type="button" id="addVariant2" class="btn btn-primary" style="margin-top: 31px;">Add</button>
              @else
                <button type="button" class="btn btn-primary removeVariant">remove</button>
              @endif
            </div>
          </div> 
        @endforeach
        <div id="variant_block2">
        </div>
        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea class="form-control" rows="5" name="description" required>{{$data->description}}</textarea>
        </div>
      </div>  
		</div>
  </div>
  <div class="modal-footer pad-top-30">
      <button type="button" class="btn sec-49" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn sec-48">Update</button>
  </div>
</form>