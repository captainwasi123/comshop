@extends('admin.includes.master')
@section('title', 'Add Drivers')

@section('content')

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
                                <div class="form-row">                                    
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-5">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
                                            </div>
                                            <div class="col-lg-8 col-md-9 col-7">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <button type="button" class="browseProfilePhoto btn btn-primary">Upload Photo</button>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">First Name</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Last Name</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Phone</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Email</label>
                                            <input type="email" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputPassword" class="no-margin pad-bot-10">Password</label>
                                            <input type="text" name="new_password" id="password" value="" class="form-control" required>
                                            <span class="text-danger" id="PasswordErrorMsg"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
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
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-5">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
                                            </div>
                                            <div class="col-lg-8 col-md-9 col-7">
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
                                    <div class="col-lg-4 col-md-4 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-5 col-5">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
                                            </div>
                                            <div class="col-lg-8 col-md-9 col-7">
                                                <div id="msg"></div>
                                                <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                <div class="input-group">
                                                    <div class="input-group-append">
                                                        <button type="button" class="browseProfilePhoto btn btn-primary">Upload Card Back Photo</button>
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