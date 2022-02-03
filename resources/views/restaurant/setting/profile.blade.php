@extends('restaurant.includes.master')
@section('title', 'Profile')

@section('content')

	<div class="main_content_iner ">
        <div class="container-fluid profile-main-section p-0">

	       	<div class="tab">
                <button class="tablinks m-b-20" onclick="openCity(event, 'London')" id="defaultOpen">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12 no-margin tab-image">
                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/restaurant-profile-image.png" width="50%">
                        </div>
                        <div class="col-lg-10 col-md-9 col-12 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Profile</h3>
                            <p class="btn-text desktop tablet">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </button>
                <button class="tablinks m-b-20" onclick="openCity(event, 'Paris')">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12 no-margin tab-image">
                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/location-image.png">
                        </div>
                        <div class="col-lg-10 col-md-9 col-12 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Location</h3>
                            <p class="btn-text desktop tablet">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                        </div>
                    </div>
                </button>
                <button class="tablinks m-b-20" onclick="openCity(event, 'Tokyo')">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-12 no-margin tab-image">
                        	<img class="tab-image" src="{{URL::to('/public/restaurant/assets')}}/images/security-image.png">
                        </div>
                        <div class="col-lg-10 col-md-9 col-12 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Security</h3>
                            <p class="btn-text desktop tablet">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                        </div>
                    </div>
                </button>
            </div>

            <div id="London" class="tabcontent">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h3 class="inner-btn-heading no-margin">Restaurant Profile</h3>
                        <p class="inner-btn-text pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <p class="logo-head pad-top-40 pad-bot-20">Restaurant Logo</p>
                            <form class="restProfileUpdateForm" id="image-form" action="{{route('restaurant.restprofilesetting')}}" method="post"  enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-5">
                              <img src="{{URL::to('/public/storage/restaurant/logo/')}}/{{Auth::guard('restaurant')->user()->logo_img}}" onerror="this.onerror=null;this.src='{{URL::to('/public/restaurant/assets')}}/images/placeholder.png';" id="previewProfilePhoto" class="img-thumbnail">
                                    
                                </div>
                                <div class="col-lg-10 col-md-9 col-7">
                                    <div id="msg"></div>
                                        <input type="file" name="logo_img" class="profilePic"    accept="image/*">
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button type="button" class="browseProfilePhoto btn btn-primary">Change photo</button>
                                                </div>
                                            </div>
                                    
                                </div>
                            </div>
                        <div class="row">
                            <div class="profile-form">
                                <div class="form-row pad-top-40">
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
                                        	<label for="inputEmail4" class="no-margin pad-bot-10">Restaurant Name</label>
                                        	<input type="text" class="form-control" name="resturant_name" value="{{Auth::guard('restaurant')->user()->name}}" required>
                                    	</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputPassword4" class="no-margin pad-bot-10">Phone</label>
	                                        <input type="phone" class="form-control" name="phone"  value="{{Auth::guard('restaurant')->user()->phone}}" required>
	                                    </div>
                                    </div>
                                </div>
                                <div class="form-row pad-top-30">
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputPassword4" class="no-margin pad-bot-10">Owner</label>
	                                        <input type="text" class="form-control" name="owner_name"  value="{{Auth::guard('restaurant')->user()->owner_name}}" required>
	                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputEmail4" class="no-margin pad-bot-10">Email</label>
	                                        <input type="email" class="form-control" name="email" value="{{Auth::guard('restaurant')->user()->email}}" readonly >
	                                    </div>
                                    </div>
                                </div>
                                <div class="sav-button pad-top-50 pad-right-20">
                                	<input type="submit" name="Save Setting" class="bg-yellow">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="Paris" class="tabcontent">
                <div class="row">
                	<div class="col-lg-12 col-md-12 col-12">
                        <h3 class="inner-btn-heading no-margin">Location</h3>
                        <p class="inner-btn-text pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit,eiusmod tempor.</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" action="{{route('restaurant.profile.location')}}">
                                    @csrf
                                    <input type="hidden" name="latitude" id="lat" value="{{Auth::guard('restaurant')->user()->latitude}}">
                                    <input type="hidden" name="longitude" id="long" value="{{Auth::guard('restaurant')->user()->longitude}}">
                                    <div class="profile-form pad-top-40 pad-bot-20">
                                        <div class="form-row">
                                            <div class="col-lg-8 col-md-8 col-12 no-margin">
                                            	<div class="input-form">
                                                    <label for="inputEmail4" class="no-margin pad-bot-10">Address Details</label>
                                                    <input type="text" class="form-control" id="add-input" value="{{Auth::guard('restaurant')->user()->address}}" name="address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 no-margin">
                                            	<div class="input-form">
                                                    <label for="inputPassword4" class="no-margin pad-bot-10">Service Radius (km)</label>
                                                    <input type="number" class="form-control" value="{{Auth::guard('restaurant')->user()->service_radius}}" name="radius" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-lg-12 col-md-12 col-12 no-margin">
                                            	<div class="input-form location-section pad-top-50">
                                                    <label for="inputPassword4">Location</label>
                                                    <div class="map_block" id="map">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sav-button pad-top-50 pad-right-20">
                                        	<input type="submit" value="Save Setting" class="bg-yellow">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <div id="Tokyo" class="tabcontent">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <h3 class="inner-btn-heading no-margin">Security</h3>
                        <p class="inner-btn-text pad-top-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="row">
                         <form class="profile-form pad-top-40 pad-bot-20" id="resetPasswordForm" action="{{route('restaurant.changepassword')}}" method="post">
                            @csrf
                                <div class="form-row security-section">
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Current Password</label>
	                                        <input type="password" name="current_password" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                    	<div class="input-form pad-top-20">
                                        	<label for="inputPassword" class="no-margin pad-bot-10">New Password</label>
                                        	<input type="password" name="new_password" id="password" value="" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="input-form pad-top-20">
                                        	<label for="inputConfirmPassword" class="no-margin pad-bot-10">Confirm Password</label>
                                        	<input type="password" name="confirm_password" id="conform_password" value="" class="form-control" required>
                                             <span class="text-danger" id="ConfirmPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sav-button pad-top-50 pad-right-20">
                                	<input type="Submit" value="Submit" class="bg-yellow">
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

        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {

            var lat = parseFloat({{Auth::guard('restaurant')->user()->latitude}});
            var lng = parseFloat({{Auth::guard('restaurant')->user()->longitude}});
            var rad = {{empty(Auth::guard('restaurant')->user()->service_radius) ? 0 : Auth::guard('restaurant')->user()->service_radius}};

            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 12,
              center: new google.maps.LatLng(lat, lng),
            });

            var circle = new google.maps.Circle({
              map: map,
              center: map.getCenter(),
              radius: rad*1000,
              strokeColor: "#404780",
              strokeOpacity: 0.5,
              strokeWeight: 1,
              fillColor: "#F8B602",
              fillOpacity: 0.5,
            });
            var currMarker = new google.maps.Marker({
              position: map.getCenter(),
              draggable: true,
             
              map: map
            });
            circle.bindTo('center', currMarker, 'position');

            google.maps.event.addListener(currMarker, 'dragend', function(e){
                placeMarkerAndPanTo(e.latLng, map,e.latLng.lat(),e.latLng.lng(), rad);
            });    
        }


        function placeMarkerAndPanTo(latLng, map,lat,lng, rad) { 
            $('#lat').val(lat);
            $('#long').val(lng);
            var latlngs = lat+ " , "+ lng;
            var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + latlngs + "&sensor=false&key={{env('GOOGLE_MAP_API')}}&libraries=places";
            $.getJSON(url, function (data) {  
                var address = data.results[0].formatted_address
                $('#add-input').val(address);
            });
        }
    </script>
@endsection

