@extends('restaurant.includes.master')
@section('title', 'Dashboard')

@section('content')

	<div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row">
             	<div class="col-lg-8 col-md-8 col-8">
               		<div class="row sec-26 bg-white bor-radius">
	                  	<div class="col-lg-4 col-md-4 col-4 sec-23">
	                     	<div class="single_quick_activity">
	                        	<div class="count_content sec-22">
	                            	<p class="no-margin">Total Income</p>
	                            	<h3 class="no-margin pad-top-10">$<span class="counter">12,890,00</span> </h3>
	                        	</div>                                                                                  
	                    	</div>  
	                  	</div>
	                  	<div class="col-lg-1 col-md-1 col-1"></div>
		                <div class="col-lg-2 col-md-2 col-2">
		                	<div class="single_quick_activity sec-24">
		                        <div class="count_content">
		                            <p>Income</p>
		                            <h3>$<span class="counter">4345,00</span> </h3>
		                            <i class="fas fa-arrow-circle-up"> <span style="color: #A6C44A; font-size: 14px;font-family: 'Poppins';
		                            font-weight: 500;"> +15% </span></i>
		                        </div>  
		                    </div> 
		                  </div>
                  <div class="col-md-3">
                    <div class="single_quick_activity sec-25">
                        <div class="count_content">
                            <p>Expense</p>
                            <h3>$<span class="counter">2890,00</span> </h3>
                            <i class="fas fa-arrow-circle-down"> <span style="color: #EB5757; font-size: 14px;font-family: 'Poppins';
                            font-weight: 500;"> -10%</span></i>
                        </div> 
                    </div> 
                  </div>
                  <div class="col-md-3 sec-28">
                      <div class="sec-27">
                         <button style="font-size:24px">Withdraw <i class="fa fa-arrow-circle-right"></i></button>
                      </div>
                  </div>
               </div> 
               <div class="row">
                  <div class="col-md-6 sec-30">                    
                       <div class="white_box mb_30 sec-29">
                         <div id="apex_2"></div>
                       </div>                    
                  </div>
                  <div class="col-md-6 sec-38">                    
                     <div class="row">
                         <div class="col-md-12">
                            <div class="sec-37">
                               <h4>Performance</h4>
                            </div>
                         </div>
                     </div>  
                     <div class="row">
                        <div class="col-md-7">
                           
                        </div>
                        <div class="col-md-5">
                           <div class="sec-39">
                              <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor</p>
                           </div>
                        </div>
                     </div>            
                  </div>
               </div> 
               <div class="row">
                  <div class="col-md-12 sec-45">
                    <div class="white_box mb_30">
                      <div class="row">
                         <div class="col-md-6">
                           <div class="sec-33">
                             <h4>Order Rate</h4>
                           </div>
                         </div>
                         <div class="col-md-6">                 
                        <div class="white_card_body sec-31">
                            <div class="dropdown">
                                <button class="btn sec-32 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Month
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>                             
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-md-1 sec-34">                            
                              <img src="images/image13.png">
                         </div>
                         <div class="col-md-1 sec-35">
                               <h2>Order Total<br> <span style="color: black; font-weight: 900; font-size: 18px; font-family: poppins;line-height: 23px;"> 25.307</span></h2> 
                         </div>
                         <div class="col-md-2 sec-36">
                            <h5>Target &nbsp; &nbsp; &nbsp; &nbsp;<span style="color: black; font-size: 18px; font-family: poppins; font-weight: 600;"> 3.982 </span></h5>
                            <div id="bar1" class="barfiller">                               
                               <span class="fill" data-percentage="75"></span>
                            </div>
                         </div>
                      </div>
                    <div id="apex_3"></div>
                    </div>
                  </div>
               </div>        
             </div>
             <div class="col-md-4">
                <div class="sec-41">
                 <div class="row">
                    <div class="col-md-2">
                      <div class="sec-42">
                        <img src="images/image14.png">
                      </div>
                    </div>
                    <div class="col-md-10 sec-43">
                      <div class="sec-40">
                         <p>Total Order Complete</p>
                         <h4>2.678</h4>
                      </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-2">
                      <div class="sec-42">
                        <img src="images/image15.png">
                      </div>
                    </div>
                    <div class="col-md-10 sec-43">
                      <div class="sec-40">
                         <p>Total Order Complete</p>
                         <h4>1.234</h4>
                      </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-2">
                      <div class="sec-42">
                        <img src="images/image16.png">
                      </div>
                    </div>
                    <div class="col-md-10 sec-43">
                      <div class="sec-40">
                         <p>Total Order Complete</p>
                         <h4>123</h4>
                      </div>

                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-2">
                      <div class="sec-42">
                        <img src="images/image17.png">
                      </div>
                    </div>
                    <div class="col-md-10 sec-43">
                      <div class="sec-40">
                         <p>Total Order Complete</p>
                         <h4>432</h4>
                      </div>
                    </div>
                 </div>
                </div> 
                <div class="row">
                   <div class="col-md-12">
                      <div class="sec-44">
                          <div class="white_box mb_30">
                            <div class="box_header ">
                              <div class="main-title">
                                <h3 class="mb-0"> Pie Chart </h3>
                              </div>
                            </div>
                            <canvas style="height: 250px" id="pieChart"></canvas>
                          </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
        </div>
    </div>

@endsection