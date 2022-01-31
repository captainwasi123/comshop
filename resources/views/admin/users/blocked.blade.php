@extends('admin.includes.master')
@section('title', 'Blocked Users')

@section('content')

<div class="main_content_iner">
    <div class="container-fluid">
        <div class="order-section-chart ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 sec-45">
                    <div class="white_box">
                       <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Blocked Users</h3>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Syed</td>
                                            <td>+92-30100-999</td>
                                            <td>abc@gmail.com</td>
                                            <td>XYZ</td>
                                            <td>Admin</td>
                                            <td><a href="#" class="status_btn bg-red">Blocked</a></td>
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