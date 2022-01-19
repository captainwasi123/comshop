@extends('restaurant.includes.master')
@section('title', 'Profile')

@section('content')

	<div class="main_content_iner ">
        <div class="container-fluid profile-main-section p-0">

	       	<div class="tab">
                <button class="tablinks m-b-20" onclick="openCity(event, 'London')" id="defaultOpen">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2 no-margin tab-image">
                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/restaurant-profile-image.png"     width="50%">
                        </div>
                        <div class="col-lg-10 col-md-9 col-10 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Restaurant Profile</h3>
                            <p class="btn-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </button>
                <button class="tablinks m-b-20" onclick="openCity(event, 'Paris')">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2 no-margin tab-image">
                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/location-image.png">
                        </div>
                        <div class="col-lg-10 col-md-9 col-10 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Location</h3>
                            <p class="btn-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor.</p>
                        </div>
                    </div>
                </button>
                <button class="tablinks m-b-20" onclick="openCity(event, 'Tokyo')">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-2 no-margin tab-image">
                        	<img class="tab-image" src="{{URL::to('/public/restaurant/assets')}}/images/security-image.png">
                        </div>
                        <div class="col-lg-10 col-md-9 col-10 no-pad">
                        	<h3 class="tab-head no-margin pad-bot-10">Security</h3>
                            <p class="btn-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
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
                        <div class="row">
                            <div class="col-lg-2 col-md-3 col-5">
                                <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">
                            </div>
                            <div class="col-lg-10 col-md-9 col-7">
                                <div id="msg"></div>
                                <form method="post" id="image-form">
                                    <input type="file" name="profile_image" class="profilePic" accept="image/*">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button type="button" class="browseProfilePhoto btn btn-primary">Change photo</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <form class="profile-form">
                                <div class="form-row pad-top-40">
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
                                        	<label for="inputEmail4" class="no-margin pad-bot-10">Restaurant Name</label>
                                        	<input type="text" class="form-control" name="resturant_name" required>
                                    	</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputPassword4" class="no-margin pad-bot-10">Phone</label>
	                                        <input type="phone" class="form-control" name="phone" required>
	                                    </div>
                                    </div>
                                </div>
                                <div class="form-row pad-top-30">
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputPassword4" class="no-margin pad-bot-10">Owner</label>
	                                        <input type="text" class="form-control" name="owner_name" required>
	                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputEmail4" class="no-margin pad-bot-10">Email</label>
	                                        <input type="email" class="form-control" name="email" required>
	                                    </div>
                                    </div>
                                </div>
                                <div class="sav-button pad-top-50 pad-right-20">
                                	<input type="submit" name="Save Setting" class="bg-yellow">
                                </div>
                            </form>
                        </div>
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
                            <form class="profile-form pad-top-40 pad-bot-20">
                                <div class="form-row">
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputEmail4" class="no-margin pad-bot-10">Address Details</label>
	                                        <input type="text" class="form-control">
	                                    </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 no-margin">
                                    	<div class="input-form">
	                                        <label for="inputPassword4" class="no-margin pad-bot-10">Service Radius (km)</label>
	                                        <input type="number" class="form-control" placeholder="0">
	                                    </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                    	<div class="input-form location-section pad-top-50">
	                                        <label for="inputPassword4">Location</label>
	                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188820.0433106018!2d-71.11036704065482!3d42.31451859033202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3652d0d3d311b%3A0x787cbf240162e8a0!2sBoston%2C%20MA%2C%20USA!5e0!3m2!1sen!2s!4v1641387636311!5m2!1sen!2s" width="100%" height="300px" style="border:0;"></iframe>
	                                    </div>
                                    </div>
                                </div>
                                <div class="sav-button pad-top-50 pad-right-20">
                                	<input type="submit" name="Save Setting" class="bg-yellow">
                                </div>
                            </form>
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

@endsection


