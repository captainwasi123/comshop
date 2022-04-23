@extends('restaurant.includes.master')
@section('title', 'Order')

@section('content')

	<div class="main_content_iner p-0">
        <div class="container-fluid profile-main-section">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="messages_box_area">
                            <div class="white_box message-box-main">
                                <div class="white-box-head pad-bot-30">
                                    <h3 class="inner-order-head no-margin pad-bot-20">Order in</h3>
                                    <ul class="nav nav-tabs nav-item-custom">
                                        <li class="nav-item nav-item-1">
                                            <a class="nav-link active" data-toggle="tab" href="#orderIn">Order in</a>
                                        </li>
                                        <li class="nav-item nav-item-2">
                                            <a class="nav-link" data-toggle="tab" href="#prepared">Prepared</a>
                                        </li>
                                        <li class="nav-item nav-item-3">
                                            <a class="nav-link" data-toggle="tab" href="#delivered">Delivered</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="tab-content order-tab">
                                    <div id="orderIn" class="tab-pane active">
                                        <ul>
                                            @foreach($order_in as $val)
                                                <li class="order-cell">
                                                    <a href="javascript:void(0)" class="order-link orderDetails" data-id="{{base64_encode($val->id)}}">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-md-6 col-6">
                                                                <h4 class="order-name no-margin">Order #{{$val->id}}</h4>
                                                                <p class="order-date">{{date('M d, Y - h:i A', strtotime($val->created_at))}}</p>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                                <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>{{number_format($val->total_price, 2)}}</h4>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                                <i class="fa fa-angle-right right-arrow"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach   
                                            @if(count($order_in) == 0)
                                                <li>
                                                    <span>&nbsp;&nbsp;No Orders Found.</span>
                                                </li>
                                            @endif                                               
                                        </ul>
                                    </div>

                                    <div id="prepared" class="tab-pane fade">
                                        <ul>
                                            @foreach($order_prepared as $val)
                                                <li class="order-cell">
                                                    <a href="javascript:void(0)" class="order-link orderDetails" data-id="{{base64_encode($val->id)}}">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-md-6 col-6">
                                                                <h4 class="order-name no-margin">Order #{{$val->id}}</h4>
                                                                <p class="order-date">{{date('M d, Y - h:i A', strtotime($val->created_at))}}</p>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                                <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>{{number_format($val->total_price, 2)}}</h4>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                                <i class="fa fa-angle-right right-arrow"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach  
                                            @if(count($order_prepared) == 0)
                                                <li>
                                                    <span>&nbsp;&nbsp;No Orders Found.</span>
                                                </li>
                                            @endif                                            
                                        </ul>
                                    </div>

                                    <div id="delivered" class="tab-pane fade">
                                        <ul>
                                            @foreach($order_delivered as $val)
                                                <li class="order-cell">
                                                    <a href="javascript:void(0)" class="order-link orderDetails" data-id="{{base64_encode($val->id)}}">
                                                        <div class="row">
                                                            <div class="col-lg-7 col-md-6 col-6">
                                                                <h4 class="order-name no-margin">Order #{{$val->id}}</h4>
                                                                <p class="order-date">{{date('M d, Y - h:i A', strtotime($val->created_at))}}</p>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                                <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>{{number_format($val->total_price, 2)}}</h4>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                                <i class="fa fa-angle-right right-arrow"></i>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach     
                                            @if(count($order_delivered) == 0)
                                                <li>
                                                    <span>&nbsp;&nbsp;No Orders Found.</span>
                                                </li>
                                            @endif                                             
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        <div class="messages_chat">
                            <div class="white_box order_detail_tray">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="empty_tray">
                                            <img src="{{URL::to('/public/restaurant/assets/images/empty.jpeg')}}">
                                            <h3>ORDER DETAIL WILL BE HERE</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
    </div>
  
@endsection