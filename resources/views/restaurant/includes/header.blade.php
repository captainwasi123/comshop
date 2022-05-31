<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 p-0">
                <div class="header_iner default_header d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area align-items-center">
                        <h2 class="no-margin col-black">@yield('title')</h2>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            
                        </div>
                        <div class="profile_info">
                            <img src="{{URL::to('/public/storage/restaurant/logo/')}}/{{Auth::guard('restaurant')->user()->logo_img}}"   onerror="this.onerror=null;this.src='{{URL::to('/public/restaurant/assets')}}/images/placeholder.png';" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Restaurant </p>
                                    <h5 class="no-margin">{{Auth::guard('restaurant')->user()->name}}</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="{{route('restaurant.profile')}}">Settings</a>
                                    <a href="{{route('restaurant.logout')}}">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>