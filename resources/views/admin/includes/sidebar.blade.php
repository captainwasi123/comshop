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
            <a class="has-arrow"  href="javascript:void(0)"  aria-expanded="false">
              <span>Restaurants</span>
            </a>
            <ul>
              <li><a href="{{route('admin.restaurants.add')}}">Add New</a></li>
              <li><a href="{{route('admin.restaurants.active')}}">Active</a></li>
              <li><a href="{{route('admin.restaurants.blocked')}}">Blocked</a></li>
              <li><a href="{{route('admin.restaurants.trashed')}}">Trashed</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow"  href="javascript:void(0)"  aria-expanded="false">
              <span>Drivers</span>
            </a>
            <ul>
              <li><a href="{{route('admin.drivers.newRequest')}}" class="active">New Request</a></li>
              <li><a href="{{route('admin.drivers.add')}}">Add New</a></li>
              <li><a href="{{route('admin.drivers.active')}}">Active</a></li>
              <li><a href="{{route('admin.drivers.blocked')}}">Blocked</a></li>
              <li><a href="{{route('admin.drivers.trashed')}}">Trashed</a></li>
            </ul>
        </li>
        <li class="">
          <a href="{{route('admin.reviews')}}" aria-expanded="false">
            <span>Reviews & Ratings</span>
          </a>
        </li>
        <li>
            <a class="has-arrow"  href="javascript:void(0)"  aria-expanded="false">
              <span>Users</span>
            </a>
            <ul>
              <li><a href="{{route('admin.users.add')}}">Add New</a></li>
              <li><a href="{{route('admin.users.active')}}">Active</a></li>
              <li><a href="{{route('admin.users.blocked')}}">Blocked</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow"  href="javascript:void(0)"  aria-expanded="false">
              <span>Setting</span>
            </a>
            <ul>
              <li><a href="{{route('admin.settings.general')}}">General</a></li>
              <li><a href="{{route('admin.settings.catagories')}}">Catagories</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- sidebar part end -->


