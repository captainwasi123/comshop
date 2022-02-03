@extends('admin.includes.master')
@section('title', 'Reviews & Ratings')

@section('content')

<style type="text/css">
.sec-46 {
    padding: 0px 10px 10px 0px;
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
                                <h3 class="inner-order-head no-margin pad-bot-10">Reviews & Ratings</h3>
                                <!-- <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.drivers.add')}}" class="bg-yellow">Add New</a>
                                </div> -->
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:5%">S.No</th>
                                            <th scope="col" style="width:30%">Name</th>
                                            <th scope="col" style="width:40%">Address</th>
                                            <th scope="col" style="width:15%">Rating & Reviews</th>
                                            <th scope="col" style="width:10%">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>MR.coone</td>
                                            <td>XYZ</td>
                                            <td>
                                                <i class="fa fa-star"></i>
                                                 5.0 <small>(14 reviews)</small>
                                             </td>
                                            <td>
                                                <a href="{{route('admin.review.details')}}" class="status_btn">View</a>
                                            </td>
                                        </tr>                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>                    		
	                </div>
	            </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 page-shows-col">
                    <div class="page-shows">
                        <p>Showing <strong style="color: black;">1-5</strong> from <strong  style="color: black;">100</strong> data</p>
                    </div>                  
                </div>
                <div class="col-lg-6 col-md-6 col-12 page-shows-nav">
                    <nav aria-label="Page navigation example" class="Paginate">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link left-arrow" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link-nav " href="#">1</a></li>
                            <li class="page-item"><a class="page-link-nav" href="#">2</a></li>
                            <li class="page-item"><a class="page-link-nav" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link rigt-arrow" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Driver View popup -->

    <div class="modal fade" id="new-driver" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 70%;" role="document">
            <div class="modal-content">
                <div class="modal-header sec-46">
                    <h5 class="modal-title" id="exampleModalLongTitle">View Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-6">
                        <div class="drive-sec-2">
                            <h5>First Name: <span>MR.Cone</span> &nbsp;</h5>
                            <h5>Last Name:  <span>Cone</span> &nbsp;</h5>
                            <h5>Phone: <span>+92-30100-999</span> &nbsp;</h5>
                            <h5>Email: <span>xyz@gmail.com</span> &nbsp;</h5>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="sec-50">
                            <hr>
                            <div class="row pop-up-form">
                                <div class="col-md-12">
                                
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="drivers-sec-1">
                                                <!-- <p class="no-margin col-black pad-bot-10">Card Front: </p> -->
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" width="100%">
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="drivers-sec-1">
                                                <!-- <p class="no-margin col-black pad-bot-10">Card Back: </p> -->
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" width="100%">
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="drivers-sec-1">
                                                <!-- <p class="no-margin col-black pad-bot-10">Card Back: </p> -->
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" width="100%">
                                            </div>                                    
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-6">
                                            <div class="drivers-sec-1">
                                                <!-- <p class="no-margin col-black pad-bot-10">Card Back: </p> -->
                                                <img src="{{URL::to('/public/admin/assets')}}/images/id-card-placeholder.png" width="100%">
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
    </div>

@endsection