 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{URL::to('/restaurant')}}"><img src="{{URL::to('/public/restaurant/assets')}}/images/logo-black.png" width="100%" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
          <a href="{{URL::to('/restaurant')}}" aria-expanded="false">
            <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/dashboard-icon.png" alt="">
            </div>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="{{route('restaurant.menu')}}" aria-expanded="false">
            <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
            </div>
            <span>Menu</span>
          </a>
        </li>
        <li class="mm-active">
          <a href="{{URL::to('/restaurant/orders/order')}}" aria-expanded="false">
            <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/order-icon.png" alt="">
            </div>
            <span>Food Order</span>
          </a>
        </li>
        <li class="mm-active">
          <a href="{{URL::to('/restaurant/reviews/review')}}" aria-expanded="false">
            <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/review-icon.png" alt="">
            </div>
            <span>Reviews</span>
          </a>
        </li>
        <li class="mm-active">
          <a href="{{route('restaurant.profile')}}" aria-expanded="false">
            <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/setting-icon.png" alt="">
            </div>
            <span>Setting</span>
          </a>
        </li>
        <!-- li class="mm-active">
          <a href="#" aria-expanded="false">
            <div class="icon_menu">
                <img src="images/setting-icon.png" alt="">
            </div>
            <span>Delivery Status</span>
          </a>
        </li> -->



          <!-- extra menu -->
          <!-- <li class="mm-active">
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <div class="icon_menu">
                  <img src="img/menu-icon/dashboard.svg" alt="">
              </div>
              <span>Extra Menu</span>
            </a>
            <ul>
              <li><a href="#" class="active">Menu 1</a></li>
              <li><a href="#">Menu 2</a></li>
              <li><a href="#">Menu 3</a></li>
            </ul>
          </li> -->
        <!-- extra menu -->
    </ul>
    <div class="delivery-section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-8">
                <span>Delivery Status</span>
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <label class="switch">
                    <input type="checkbox" name="service_status" id="service_status" {{Auth::guard('restaurant')->user()->service_status == '1' ? 'checked' : ''}}>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
</nav>
<!-- sidebar part end -->


