@extends('restaurant.includes.master')
@section('title', 'Wallet')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 ">
                	<div class="positive-review wallet-card">
                		<div class="row">
	                        <div class="col-md-12 col-12">
	                            <h1 class="pos-head no-margin pad-bot-10">Wallet Amount</h1>
                                <hr>
	                            <h2 class="pos-rating no-margin">{{number_format(@Auth::guard('restaurant')->user()->wallet->amount, 2)}}<span>USD</span></h2>
	                        </div>
                    	</div>
                	</div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="negative-review">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <h1 class="pos-head no-margin pad-bot-10">Earning <span>( Current Month )</span></h1>
                                <hr>
                                <h2 class="pos-rating no-margin">{{number_format($month_earning, 2)}}<span>USD</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                	<div class="negative-review">
                		<div class="row">
                            <div class="col-md-12 col-12">
                                <h1 class="pos-head no-margin pad-bot-10">Earning <span>( Total )</span></h1>
                                <hr>
                                <h2 class="pos-rating no-margin">{{number_format($total_earning, 2)}}<span>USD</span></h2>
                            </div>
                    	</div>
                	</div>
                </div>
            </div>
                  
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                	<div class="rec-rev pad-top-60">
                		<h2 class="no-margin">Withdraw History</h2>
                	</div>                            
                </div>
                <div class="col-lg-3">
                    <div class="rec-rev pad-top-60 pull-right">
                        <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#addRequestModal"> 
                            <i class="fa fa-plus"></i> Request Withdraw
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="order-det">
                        <table class="table table-striped withdraw-table">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">#</th>
                                    <th style="width: 50%;">Amount</th>
                                    <th style="width: 20%;">Status</th>
                                    <th style="width: 20%;">Withdraw at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdraw_history as $key => $val)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td><h4>{{number_format($val->amount)}} <span>usd</span></h4></td>
                                        <td>
                                            @switch($val->status)
                                                @case('1')
                                                    <span class="badge badge-primary">Pending</span>
                                                    @break
                                                @case('2')
                                                    <span class="badge badge-success">Completed</span>
                                                    @break
                                                @case('3')
                                                    <span class="badge badge-danger">Rejected</span>
                                                    @break
                                            @endswitch
                                        </td>
                                        <td>{{date('d-M-Y h:i A', strtotime($val->created_at))}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
	    </div>
    </div>


    <!-- Withdraw Popup -->
    <div class="modal fade" id="addRequestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 50%;" role="document">
            <div class="modal-content">
                <form data-validation="true" action="{{route('restaurant.wallet.makeRequest')}}" method="post">
                    @csrf
                    <div class="modal-header sec-46">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Withdraw Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="sec-50">
                        <hr>
                        <div class="row pop-up-form">
                            <div class="col-md-6">
                                <div class="form-group pad-bot-30 no-margin">
                                    <label for="inputAddress">Withdraw Amount</label>
                                    <input type="number" class="form-control" step="any" name="amount" min="1" max="{{number_format(@Auth::guard('restaurant')->user()->wallet->amount, 2, '.', '')}}" placeholder="" required>
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pad-bot-30 no-margin">
                                    <label for="inputAddress">Current Wallet</label>
                                    <input type="number" class="form-control" value="{{number_format(@Auth::guard('restaurant')->user()->wallet->amount, 2, '.', '')}}" readonly>
                                </div>  
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer pad-top-30">
                        <button type="button" class="btn sec-49" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn sec-48">Make Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection