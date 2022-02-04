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
                            <form class="profile-form pad-top-40 pad-bot-20" id="resetPasswordForm" action="" method="post">
                                <div class="form-row pad-bot-20">                                    
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-4 col-8">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-7">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <button type="button" class="browseProfilePhoto btn btn-primary">Change photo</button>
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
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Last Name</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Phone</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Email</label>
                                            <input type="email" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Password</label>
                                            <input type="text" name="new_password" id="password" value="" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">City</label>
                                            <select class="form-control">
                                                <option>Karachi</option>
                                                <option>Lahore</option>
                                                <option>Islamabad</option>
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
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail" style="width:100%; height: 200px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto btn btn-primary">Upload Card Front Photo</button>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail" style="width:100%; height: 200px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto btn btn-primary">Upload Card Front Photo</button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail" style="width:100%; height: 200px;">                                            
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto btn btn-primary">Upload Card Front Photo</button>
                                                        </div>
                                                    </div> 
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" id="previewProfilePhoto" class="img-thumbnail" style="width:100%; height: 200px;">
                                            </div>
                                            <div class="col-lg-12 col-md-11 col-11">
                                                <div class="upload-btn">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto btn btn-primary">Upload Card Front Photo</button>
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
