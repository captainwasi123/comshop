@extends('admin.includes.master')
@section('title', 'Add Drivers')

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
                                <h4 class="no-margin">Add Drivers</h4>
                            </div>
                            <form class="profile-form pad-top-40 pad-bot-20" id="resetPasswordForm" action="{{URL::to('/admin/drivers/update')}}" method="post" enctype="multipart/form-data">
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
                                 <input type="hidden" name="driver_id" value="{{base64_encode($driver->id)}}">
                                <div class="form-row pad-bot-20">                                    
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-8">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDImage">                                            
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-7">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic profilePicDImage " accept="image/*">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <button type="button" class="browseProfilePhotoDImage browseProfilePhoto btn btn-primary">Change photo</button>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="height: 1px; background: #cbcfd1">
                                <div class="form-row">
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">First Name</label>
                                            <input type="text" name="first_name" value="{{$driver->first_name}}" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Last Name</label>
                                            <input type="text" name="last_name" value="{{$driver->last_name}}" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Phone</label>
                                            <input type="text" name="phone_number" value="{{$driver->phone_number}}" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Email</label>
                                            <input type="email" name="email_address" value="{{$driver->email_address}}" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    {{--  <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Password</label>
                                            <input type="password" name="password" id="password" value="" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                     <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="password" value="" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>  --}}
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">City</label>
                                            <select class="form-control" name="city_id"  required>
                                            <option value="">Select</option>
                                              @foreach ($cities as $city)
                                                  <option value="{{$city->id}}"
                                                  {{$city->id == $driver->city_id ?  'selected' : '' }}
                                                  >{{$city->name}}</option>
                                              @endforeach 
                                            </select>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                </div>
                                <hr style="height: 1px; background: #cbcfd1">
                                <div class="form-row pad-top-30 pad-top-20">

                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                {{--  <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCF" style="width:100%; height: 200px;">                                              --}}
                                            
                                             @if($driver->driverDoc->card_front!= 0)
                                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$driver->driverDoc->card_front)}}" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCF" style="width:100%; height: 200px;">
                                                @else
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCF" style="width:100%; height: 200px;">
                                                @endif 
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="card_front" class="profilePic profilePicDCF" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDCF browseProfilePhoto btn btn-primary">Upload Card Front Photo</button>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                                                          
                                            
                                             @if($driver->driverDoc->card_front!= 0)
                                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$driver->driverDoc->card_back)}}" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCB" style="width:100%; height: 200px;">
                                                @else
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDCB" style="width:100%; height: 200px;">
                                                @endif 
                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="card_back" class="profilePic profilePicDCB" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDCB browseProfilePhoto btn btn-primary">Upload Card Back Photo</button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                                                        
                                           
                                                 @if($driver->driverDoc->card_front!= 0)
                                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$driver->driverDoc->license_back)}}" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLF" style="width:100%; height: 200px;">
                                                @else
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLF" style="width:100%; height: 200px;">
                                                @endif 
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="license_front" class="profilePic profilePicDLF" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDLF browseProfilePhoto btn btn-primary">Upload  License Front Photo</button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                               
                                            
                                                @if($driver->driverDoc->card_front!= 0)
                                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$driver->driverDoc->license_front)}}" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLB" style="width:100%; height: 200px;">
                                                @else
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail previewProfilePhotoDLB" style="width:100%; height: 200px;">
                                                @endif 
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="license_back" class="profilePic profilePicDLB" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhotoDLB browseProfilePhoto  btn btn-primary">Upload License Back Photo</button>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
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
