<div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 p-0">
                <div class="header_iner default_header d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area align-items-center">
                        <h2 class="no-margin col-black">Orders</h2>
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker nav-link-notify" href="#"> 
                                    <img src="{{URL::to('/public/restaurant/assets')}}/images/order-noti-icon.png" alt="">
                                </a>
                                <!-- <div class="Menu_NOtification_Wrap">
                                    <div class="notification_Header">
                                        <h4 class="no-margin">Notifications</h4>
                                    </div>
                                    <div class="Notification_body">
                                        <div class="single_notify d-flex align-items-center">
                                            <div class="notify_thumb">
                                                <a href="#">
                                                    <img src="{{URL::to('/public/restaurant/assets')}}/img/staf/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="notify_content">
                                                <a href="#">
                                                    <h5 class="no-margin">Cool Marketing </h5>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nofity_footer">
                                        <div class="submit_button text-center pt_20">
                                            <a href="#" class="btn_1">See More</a>
                                        </div>
                                    </div>
                                </div> -->
                            </li>
                            <li>
                                <a class="CHATBOX_open nav-link-notify" href="#"> 
                                    <img src="{{URL::to('/public/restaurant/assets')}}/images/notification-icon.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#"> 
                                    <img src="{{URL::to('/public/restaurant/assets')}}/images/setting-noti-icon.png" style="width:50px !important" alt="">
                                </a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="{{URL::to('/public/admin/assets')}}/images/user-placeholder.jpg" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Admin </p>
                                    <h5 class="no-margin">{{Auth::guard('admin')->user()->fullname}}</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="{{route('admin.logout')}}">Log Out </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>