@extends('admin.includes.master')
@section('title', 'Add Restaurants')

@section('content')


<style type="text/css">
    .img-thumbnail {
    height: 150px;
    width: 80%;
}
.browseProfilePhoto {
    margin-top: 50px;
}

@media screen and (max-width:519px) and (min-width:320px) { 
.browseProfilePhoto {
    margin-top: 10px;
    margin-left: 8px;
}
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
                                <h4 class="no-margin">Add Restaurants</h4>
                            </div>
                            <form class="profile-form pad-top-40 pad-bot-20" id="resetPasswordForm" method="post" enctype="multipart/form-data">
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
                                <input type="hidden" name="latitude" id="lat">
                                <input type="hidden" name="longitude" id="long">
                                <div class="form-row">                                    
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="row">
<<<<<<< HEAD
                                            <div class="col-lg-2 col-md-4 col-8">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
=======
                                            <div class="col-lg-2 col-md-5 col-5">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" class="previewProfilePhoto previewProfilePhotoRes img-thumbnail">                                            
>>>>>>> 6360cb6f610be45e3ebbfe1c30b8dd4980c2a9b5
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-12">
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
                                            <input type="text" name="name" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Owner Name</label>
                                            <input type="text" name="owner_name" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>    
                                </div>
                                <div class="form-row">                                  
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                     <div class="col-lg-2 col-md-2 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Phone</label>
                                            <input type="text" name="phone" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Service Radius <small>(km)</small></label>
                                            <input type="number" name="service_radius" value="15" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">  
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Confirm Password</label>
                                            <input type="text" name="password_confirmation" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row"> 
                                    <div class="col-lg-8 col-md-8 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Address Details</label>
                                            <textarea class="form-control" rows="3" name="address" id="add-input" required></textarea>
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