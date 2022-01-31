 <!-- sidebar part here -->
<nav class="sidebar vertical-scroll ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="{{URL::to('/admin')}}">
          <img src="{{URL::to('/public/admin/assets')}}/images/logo-black.png" width="100%" alt="">
        </a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li>
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <!-- <div class="icon_menu">
                  <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
              </div> -->
              <span>Restaurants</span>
            </a>
            <ul>
              <li><a href="{{route('admin.restaurant.active')}}" class="active">Active</a></li>
              <li><a href="{{route('admin.restaurant.blocked')}}" class="active">Blocked</a></li>
              <li><a href="{{route('admin.restaurant.trashed')}}">Trashed</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <!-- <div class="icon_menu">
                  <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
              </div> -->
              <span>Drivers</span>
            </a>
            <ul>
              <li><a href="{{route('admin.drivers.new')}}" class="active">New Request</a></li>
              <li><a href="{{route('admin.drivers.active')}}" class="active">Active</a></li>
              <li><a href="{{route('admin.drivers.blocked')}}">Blocked</a></li>
              <li><a href="{{route('admin.drivers.trashed')}}">Transhed</a></li>
            </ul>
        </li>
        <li class="">
          <a href="{{route('admin.reviewrating')}}" aria-expanded="false">
           <!--  <div class="icon_menu">
                <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
            </div> -->
            <span>Reviews & Ratings</span>
          </a>
        </li>
        <li>
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <!-- <div class="icon_menu">
                  <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
              </div> -->
              <span>Setting</span>
            </a>
            <ul>
              <li><a href="{{URL::to('/admin')}}" class="active">Catagories</a></li>
              <li><a href="{{URL::to('/admin')}}">Commission System</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <!-- <div class="icon_menu">
                  <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
              </div> -->
              <span>User Manage</span>
            </a>
            <ul>
              <li><a href="{{URL::to('/admin')}}" class="active">All Users</a></li>
              <li><a href="{{URL::to('/admin')}}" class="active">Add User</a></li>
              <li><a href="{{URL::to('/admin')}}">Update User</a></li>
              <li><a href="{{URL::to('/admin')}}">Delete User</a></li>
            </ul>
        </li>
    </ul>
  <!--   <div class="delivery-section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-8">
                <span>Delivery Status</span>
            </div>
            <div class="col-lg-4 col-md-4 col-4">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div> -->
</nav>
<!-- sidebar part end -->


