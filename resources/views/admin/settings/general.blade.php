@extends('admin.includes.master')
@section('title', 'Commission Settings')

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
                                <h4 class="no-margin">General Settings</h4>
                            </div>
                            <form class="profile-form pad-top-40 pad-bot-20" method="post">
                                @csrf
                                <div class="form-row">                                    
                                    <div class="col-lg-3 col-md-4 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Commission %</label>
                                            <input type="text" name="commission" value="{{$data->commission}}" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
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
