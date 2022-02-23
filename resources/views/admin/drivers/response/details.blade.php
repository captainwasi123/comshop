<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <div class="drive-sec-2">
            <h5>First Name: <span>{{$data->first_name}}</span> &nbsp;</h5>
            <h5>Last Name:  <span>{{$data->last_name}}</span> &nbsp;</h5>
            <h5>Phone: <span>{{$data->phone_number}}</span> &nbsp;</h5>
            <h5>Email: <span>{{$data->email_address}}</span> &nbsp;</h5>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-12">
        <div class="sec-50">
            <hr>
            <div class="row pop-up-form">
                <div class="col-md-12">
                
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="drivers-sec-1">
                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$data->driverDoc->card_front)}}" width="100%" onerror="this.onerror=null;this.src='{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png';">                                         
                            </div>                                    
                            <label>Social Security (Front)</label>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="drivers-sec-1">
                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$data->driverDoc->card_back)}}" width="100%" onerror="this.onerror=null;this.src='{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png';">                                           
                            </div>                                    
                            <label>Social Security (Back)</label>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="drivers-sec-1">
                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$data->driverDoc->license_front)}}" width="100%" onerror="this.onerror=null;this.src='{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png';">
                            </div>                                    
                            <label>Driving License (Front)</label>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="drivers-sec-1">
                                <img src="{{URL::to('/public/storage/driver/imginfo/'.$data->driverDoc->license_back)}}" width="100%" onerror="this.onerror=null;this.src='{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png';">                                           
                            </div>                                    
                            <label>Driving License (Back)</label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 