@extends('admin.includes.master')
@section('title', 'Edit Restaurants')

@section('content')


<style type="text/css">
    .img-thumbnail {
    height: 150px;
    width: 80%;
}
.browseProfilePhoto {
    margin-top: 50px;
}
</style>


<div class="main_content_iner">
    <div class="container-fluid">
        <div class="order-section-chart">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 sec-45">
                    <div class="white_box">
                        <div class="row">
                            <div class="drive-sec">
                                <h4 class="no-margin">Edit Restaurants</h4>
                            </div>
                            <form class="profile-form pad-top-40 pad-bot-20" id="resetPasswordForm" method="post" enctype="multipart/form-data" action="{{route('admin.restaurants.update')}}">
                                @csrf
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <input type="hidden" name="res_id" value="{{base64_encode($restaurant->id)}}">
                                <input type="hidden" name="latitude" id="lat" value="{{$restaurant->latitude}}">
                                <input type="hidden" name="longitude" id="long" value="{{$restaurant->longitude}}">
                                <div class="form-row">                                    
                                    <div class="col-lg-12 col-md-4 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-5 col-5">
                                                <img src="{{URL::to('/public/storage/restaurant/logo/')}}/{{$restaurant->logo_img}}" class="previewProfilePhoto previewProfilePhotoRes img-thumbnail"  onerror="this.onerror=null;this.src='{{URL::to('/public/restaurant/assets')}}/images/placeholder.png';">                                            
                                            </div>
                                            <div class="col-lg-10 col-md-9 col-7">
                                                <div id="msg"></div>
                                                    <input type="file" name="logo_img" class="profilePic profilePicRes" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto browseProfilePhotoRes btn btn-primary">Change photo</button>
                                                        </div>
                                                    </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Restaurant Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$restaurant->name}}" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Owner Name</label>
                                            <input type="text" name="owner_name" class="form-control" value="{{$restaurant->owner_name}}" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-row">                                  
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{$restaurant->email}}" disabled>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Phone</label>
                                            <input type="text" name="phone" class="form-control" value="{{$restaurant->phone}}" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Service Radius <small>(km)</small></label>
                                            <input type="number" name="service_radius"  value="{{$restaurant->service_radius}}" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row"> 
                                    <div class="col-lg-8 col-md-8 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Address Details</label>
                                            <textarea class="form-control" rows="3" name="address" id="add-input" required>{{$restaurant->address}}</textarea>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row"> 
                                    <div class="col-lg-8 col-md-8 no-margin">
                                        <div class="sav-button">
                                            <input type="Submit" value="Submit" class="bg-yellow">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('addScript')
    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', searchInitialize);
        function searchInitialize() {
            var input = document.getElementById('add-input');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                // place variable will have all the information you are looking for.
                $('#lat').val(place.geometry['location'].lat());
                $('#long').val(place.geometry['location'].lng());
            });
        }
    </script>
@endsection