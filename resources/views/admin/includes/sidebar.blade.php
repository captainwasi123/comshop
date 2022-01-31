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
<<<<<<< HEAD
              <li><a href="{{route('admin.restaurants.active')}}" class="active">Active</a></li>
              <li><a href="{{URL::to('/admin')}}" class="active">Blocked</a></li>
              <li><a href="{{URL::to('/admin')}}">Trashed</a></li>
=======
              <li><a href="{{route('admin.restaurant.active')}}" class="active">Active</a></li>
              <li><a href="{{route('admin.restaurant.blocked')}}" class="active">Blocked</a></li>
              <li><a href="{{route('admin.restaurant.trashed')}}">Trashed</a></li>
>>>>>>> ba74f070ae912692356aae2c43574e51c8945505
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
              <span>General</span>
            </a>
            <ul>
              <li><a href="{{route('admin.general.catagories')}}" class="active">Catagories</a></li>
              <li><a href="{{route('admin.general.setting')}}">Setting</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow"  href="#"  aria-expanded="false">
              <!-- <div class="icon_menu">
                  <img src="{{URL::to('/public/restaurant/assets')}}/images/menu-icon.png" alt="">
              </div> -->
              <span>Users</span>
            </a>
            <ul>
              <li><a href="{{route('admin.users.active')}}" class="active">Active</a></li>
              <li><a href="{{route('admin.users.blocked')}}" class="active">Blocked</a></li>
              <li><a href="{{route('admin.users.trashed')}}">Trashed</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- sidebar part end -->


