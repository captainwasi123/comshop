<h3 class="inner-order-head no-margin pad-bot-20">Order Details</h3>
<div class="order-detail-section">
    <div class="row">
        <div class="col-lg-8 col-md-6 col-12">
            <h4 class="order-name no-margin">Order #{{$order->id}}</h4>
            <p class="order-date">{{date('M d, Y - h:i A', strtotime($order->created_at))}}</p>
        </div>
        <div class="col-lg-1 col-md-2 col-4 no-pad order-detail-sec">
            <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="placeholder-images">
        </div>
        <div class="col-lg-3 col-md-4 col-7">
            <h4 class="order-name no-margin">{{@$order->buyer->name}}</h4>
            <p class="order-date">User since {{date('Y', strtotime(@$order->buyer->created_at))}}</p>
        </div>
    </div>
    <hr class="hr-order m-t-30 m-b-30">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <p class="order-address pad-bot-10">Delivery Address</p>
            <p class="location-icon pad-bot-10">
                <i class="fas fa-map-marker-alt location-pin"></i>
                {{@$order->delivery->address}}
            </p>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <p class="order-time-est">Estimation Time</p>
            <p class="order-time pad-bot-10">30 Min</p>
            <p class="order-time-est">Distance</p>
            <p class="order-time">2.5 Km</p>
        </div>
        <div class="col-lg-3 col-md-3 col-12">
            <p class="order-time-est">Payment</p>
            <p class="order-time pad-bot-10">
                @switch($order->payment_method)
                    @case('cod')
                        Cash on Delivery
                        @break
                @endswitch
            </p>
            <p class="order-time-est">Payment Status</p>
            <p class="order-time">Completed</p>
        </div>
    </div>
    <hr class="hr-order m-t-30">
    <ul>
        <li class="product pad-top-20 pad-bot-20">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="placeholder-image-3">
                </div>
                <div class="col-lg-8 col-md-5 col-4 no-pad-for-mobile">
                    <h2 class="order-name pad-top-20 no-margin">Pepperoni Pizza</h2>
                    <p class="order-date">x1</p>
                </div>
                <div class="col-lg-2 col-md-4 col-4">
                    <h4 class="price-symbol no-margin pad-top-40">+<span class="col-yellow">$</span>5.59</h4>
                </div>
            </div>
        </li>
        <li class="product pad-top-20 pad-bot-20">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-4">
                    <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="placeholder-image-3">
                </div>
                <div class="col-lg-8 col-md-5 col-4 no-pad-for-mobile">
                    <h2 class="order-name pad-top-20 no-margin">Pepperoni Pizza</h2>
                    <p class="order-date">x1</p>
                </div>
                <div class="col-lg-2 col-md-4 col-4">
                    <h4 class="price-symbol no-margin pad-top-40">+<span class="col-yellow">$</span>5.59</h4>
                </div>
            </div>
        </li>
    </ul>
    <hr class="horirow">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-6">
            <p class="order-name">Total</p>
        </div>
        <div class="col-lg-6 col-md-6 col-6">
            <h4 class="total-price no-margin">+<span class="col-yellow">$</span>12.59</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 detailBtn">
        <a href="#" class="btn rejectorder">
            Reject Order
        </a>
        <a href="#" class="acceptorder bg-yellow">
            Accept Order
        </a>
        <a href="#" class="printorder bg-yellow">
            <i class="fas fa-print print-icon"></i>&nbsp;&nbsp;Print Invoice
        </a>
    </div>                     
</div>