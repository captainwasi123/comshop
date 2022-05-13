@extends('admin.includes.master')
@section('title', 'Withdraw Request')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Restaurant Name</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Bank Name</th>
                                            <th scope="col">Account Title</th>
                                            <th scope="col">Account No.</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requests as $key => $val)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>{{@$val->rest->name}}</td>
                                                <td><strong>{{$val->amount}}</strong> <font style="font-size:11px;">usd</font></td>
                                                <td>{{@$val->rest->payout->bank_name}}</td>
                                                <td>{{@$val->rest->payout->account_title}}</td>
                                                <td>{{@$val->rest->payout->account_no}}</td>
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
                                                <td>
                                                    @if($val->status == 1)
                                                    	<a href="javascript:void(0)" class="status-icons completeRequest" data-id="{{base64_encode($val->id)}}" title="Complete"><i class="fa fa-thumbs-up"></i></a>
                                                    	<a href="javascript:void(0)" class="status-icons cancelRequest" data-id="{{base64_encode($val->id)}}" title="Cancel"><i class="fa fa-close"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        @if(count($requests) == 0)
                                            <tr>
                                                <td colspan="8">No Restaurant Found.</td>
                                            </tr>
                                        @endif        
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addScript')
    <script type="text/javascript">
        $(document).ready(function(){
            'use strict'

        });
    </script>
@endsection