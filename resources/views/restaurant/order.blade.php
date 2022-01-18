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
                                            <a class="nav-link active" data-toggle="tab" href="#home">Order in</a>
                                        </li>
                                        <li class="nav-item nav-item-2">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">Prepared</a>
                                        </li>
                                        <li class="nav-item nav-item-3">
                                            <a class="nav-link" data-toggle="tab" href="#menu2">Delivered</a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="tab-content order-tab">
                                    <div id="home" class="tab-pane active">
                                        <ul>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>                                                
                                        </ul>
                                    </div>

                                    <div id="menu1" class="tab-pane fade">
                                        <ul>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>                                                
                                        </ul>
                                    </div>

                                    <div id="menu2" class="tab-pane fade">
                                        <ul>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="order-cell">
                                                <a href="#" class="order-link">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-6 col-6">
                                                            <h4 class="order-name no-margin">Order #1</h4>
                                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-4 order-price-col">
                                                            <h4 class="price-symbol no-margin"><span class="col-yellow">$</span>202.00</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-2 right-arrow-col">
                                                            <i class="fa fa-angle-right right-arrow"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>                                                
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        <div class="messages_chat">
                            <div class="white_box ">
                                <h3 class="inner-order-head no-margin pad-bot-20">Order Details</h3>
                                <div class="order-detail-section">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-6 col-12">
                                            <h4 class="order-name no-margin">Order #1</h4>
                                            <p class="order-date">June 1, 2020, 08:22 AM</p>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-4 no-pad order-detail-sec">
                                            <img src="{{URL::to('/public/restaurant/assets')}}/images/placeholder.png" class="placeholder-images">
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-7">
                                            <h4 class="order-name no-margin">Ruby Roben</h4>
                                            <p class="order-date">User since 2020</p>
                                        </div>
                                    </div>
                                    <hr class="hr-order m-t-30 m-b-30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <p class="order-address pad-bot-10">Delivery Address</p>
                                            <p class="location-icon pad-bot-10"><i class="fas fa-map-marker-alt location-pin"></i>Elm Street,23</p>
                                            <p class="order-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <p class="order-time-est">Estimation Time</p>
                                            <p class="order-time pad-bot-10">10 Min</p>
                                            <p class="order-time-est">Distance</p>
                                            <p class="order-time">2.5 Km</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <p class="order-time-est">Payment</p>
                                            <p class="order-time pad-bot-10">E-Wallet</p>
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
                
                                <div class="row pad-top-30">
                                    <div class="col-lg-4 col-md-2 col-0"></div>
                                    <div class="col-lg-4 col-md-5 col-6 no-pad">
                                        <a href="#" class="btn rejectorder">Reject Order</a>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-6">
                                        <a href="#" class="acceptorder bg-yellow">Accept Order</a> <br><br><br>
                                        <a href="#" class="printorder bg-yellow"><i class="fas fa-print print-icon"></i>&nbsp;&nbsp;Print Invoice</a>
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