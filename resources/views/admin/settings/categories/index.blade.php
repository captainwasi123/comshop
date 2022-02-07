@extends('admin.includes.master')
@section('title', 'Catagories')

@section('content')
<style type="text/css">
.img-thumbnail {
    height: auto;
}
.sec-46 h5 {
    font-size: 22px;
}
@media screen and (max-width:519px) and (min-width:320px) { 
.browseProfilePhoto {
    margin-top: 10px;
    margin-left: 8px;
}
}
@media screen and (max-width:992px) and (min-width:768px) { 
.browseProfilePhoto {
    margin-top: 80px;
}
}

</style>
<div class="main_content_iner">
    <div class="container-fluid">
      	<div class="order-section-chart ">
          	<div class="row">
	            <div class="col-lg-12 col-md-12 col-12 sec-45">
	                <div class="white_box">
	                   <div class="QA_section">
                            <div class="white_box_tittle list_header no-margin">
                                <h3 class="inner-order-head no-margin pad-bot-10">Catagories</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="#" class="bg-yellow" data-toggle="modal" data-target="#add-catagories">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col" style="width:15%">Image</th>
                                            <th scope="col" style="width:50%">Name</th>
                                            <th scope="col">No. of Items</th>
                                            <th scope="col" style="width:15%; text-align: right;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $key => $val)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td>
                                                    <img src="{{URL::to('/public/storage/category/'.$val->image)}}" width="50px"> 
                                                </td>
                                                <td>{{$val->name}}</td>
                                                <td>{{count($val->menu)}}</td>
                                                <td style=" text-align: right;">
                                                	<a href="javascript:void(0)" class="status-icons editCategory" data-id="{{base64_encode($val->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                                	<a href="javascript:void(0)" class="status-icons deleteCategory" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>                               
                                        @endforeach             
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
            {{$categories->links()}}
        </div>
    </div>
</div>

<!-- General add popup -->

    <div class="modal fade" id="add-catagories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;" role="document">
            <div class="modal-content">
                <div class="modal-header sec-46">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Catagories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
<<<<<<< HEAD
                    <form class="profile-form pad-top-20 pad-bot-20" id="resetPasswordForm" action="{{route('admin.settings.catagories.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">                                    
                            <div class="col-lg-12 col-md-4 col-12 no-margin">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5 col-5">
                                        <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" class="previewProfilePhoto previewProfilePhotoCat img-thumbnail">
                                    </div>
                                    <div class="col-lg-8 col-md-9 col-7">
                                        <div id="msg"></div>
                                        <input type="file" name="logo_img" class="profilePic profilePicCat" accept="image/*" required>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button type="button" class="browseProfilePhoto browseProfilePhotoCat btn btn-primary">Change photo</button>
                                            </div>
                                        </div>                                            
=======
                            <form class="profile-form pad-top-20 pad-bot-20" id="resetPasswordForm" action="" method="post">
                                <div class="form-row">                                    
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-7">
                                                <img src="{{URL::to('/public/admin/assets')}}/images/placeholder.png" id="previewProfilePhoto" class="img-thumbnail">                                            
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div id="msg"></div>
                                                    <input type="file" name="logo_img" class="profilePic" accept="image/*">
                                                    <div class="input-group">
                                                        <div class="input-group-append">
                                                            <button type="button" class="browseProfilePhoto btn btn-primary">Change photo</button>
                                                        </div>
                                                    </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12 no-margin">
                                        <div class="input-form res-section-1">
                                            <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Name</label>
                                            <input type="text" name="" value="" class="form-control" required>
                                            <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                        </div>
>>>>>>> 70267c07944cbf6d4eb534120e1656fbea26fe93
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-12 no-margin">
                                <div class="input-form res-section-1">
                                    <label for="inputCurrentPassword"  class="no-margin pad-bot-10">Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                    <span class="text-danger" id="CurrentPasswordErrorMsg"></span>
                                </div>
                            </div>
                        </div>
                        <div class="sav-button pad-top-30 pad-right-20">
                            <input type="Submit" value="Submit" class="bg-yellow">
                        </div>
                    </form>
                </div>                 
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-catagories" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 30%;" role="document">
            <div class="modal-content">
                <div class="modal-header sec-46">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Catagories</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                </div>                 
            </div>
        </div>
    </div>
@endsection