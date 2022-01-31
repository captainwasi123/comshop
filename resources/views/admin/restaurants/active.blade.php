@extends('admin.includes.master')
@section('title', 'Active Restaurants')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Active Restaurants</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.restaurants.add')}}" class="bg-yellow">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Radius</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mr cone</td>
                                            <td>+92-30100-999</td>
                                            <td>Syed</td>
                                            <td>abc@gmail.com</td>
                                            <td>XYZ</td>
                                            <td>16</td>
                                            <td>
                                            	<label class="switch">
							                    <input type="checkbox" checked>
							                    <span class="slider round"></span>
								                </label>
								            </td>
                                            <td>
                                            	<a href="#" class="status-icons"><i class="fa fa-pencil-square-o"></i></a>
                                            	<a href="#" class="status-icons"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>                                            
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