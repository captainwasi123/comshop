@extends('restaurant.includes.master')
@section('title', 'Dashboard')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid">
            <div class="row">
             	<div class="col-lg-8 col-md-12 col-12">
               		<div class="row sec-26 bg-white bor-radius">
	                  	<div class="col-lg-4 col-md-4 col-6 sec-23">
	                     	<div class="single_quick_activity">
	                        	<div class="count_content sec-22">
	                            	<p class="no-margin">Total Income</p>
	                            	<h3 class="no-margin pad-top-10">$<span class="counter">12,890,00</span> </h3>
	                        	</div>                                                                                  
	                    	</div>  
	                  	</div>
	                  	<div class="col-lg-1 col-md-1 col-1 no-pad"></div>
		                <div class="col-lg-2 col-md-2 col-5 no-pad">
		                	<div class="single_quick_activity sec-24">
		                        <div class="count_content">
		                            <p class="no-margin">Income</p>
		                            <h3 class="no-margin pad-bot-10">$<span class="counter">4345,00</span> </h3>
		                            <i class="fas fa-arrow-circle-up"> <span> +15% </span></i>
		                        </div>  
		                    </div> 
		                </div>
		                <div class="col-lg-2 col-md-2 col-6">
		                    <div class="single_quick_activity sec-25">
		                        <div class="count_content">
		                            <p class="no-margin">Expense</p>
		                            <h3 class="no-margin pad-bot-10">$<span class="counter">2890,00</span> </h3>
		                            <i class="fas fa-arrow-circle-down"> <span> -10%</span></i>
		                        </div> 
		                    </div> 
		                </div>
	                  	<div class="col-lg-3 col-md-3 col-6 no-pad">
	                      	<div class="sec-27">
	                        	<button class="bg-yellow" style="font-size:24px">Withdraw &nbsp; <img src="{{URL::to('/public/restaurant/assets')}}/images/widthdraw-icon.png"></button>
	                      	</div>
	                  	</div>
               		</div> 
	                <div class="row pad-top-30">
	                  	<div class="col-lg-6 col-md-12 col-12 sec-30">                    
	                        <div class="white_box sec-29">
	                        	<div class="bhai">
	                        		<!-- <div id="apex_2"></div> -->
	                        		  <div id="bar-chart"></div>
	                        	</div>
	                        	
	                       	</div>                    
	                  	</div>
		                <div class="col-lg-6 col-md-12 col-12 sec-38">                    
		                    <div class="row pad-top-30 padding-all">
		               			<div class="col-lg-12 col-md-12 col-12">
		               				<div class="sec-37">
		                        		<h4 class="no-margin">Performance</h4>
		                    		</div>
		                    	</div>

		                    	</style>
		                        <div class="col-lg-8 col-md-6 col-12 no-pad">
									<svg viewbox="0 0 110 70">
									  <circle cx="50" cy="50" r="45" fill="#fff"/>
									  <path fill="none" stroke-linecap="box" stroke-width="10" stroke="#f8b602"
									        stroke-dasharray="70,112"
									        d="M50 10
									           a 40 40 0 0 1 0 80
									           a 40 40 0 0 1 0 -80"/>
									  <text x="50" y="40" text-anchor="middle" dy="7" font-size="20" fill="red"></text>
									</svg>
									<div class="circle-class">
										<i class="fas fa-arrow-circle-up"></i>+15%
									</div>
		                        </div>
		                        <div class="col-lg-4 col-md-6 col-12">
		                           <div class="sec-39">
		                              	<p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod tempor</p>
		                           </div>
		                        </div>
		                    </div>            
		                </div>
	                </div> 
               		<div class="row pad-top-30">
	                  	<div class="col-lg-12 col-md-12 col-12 sec-45">
	                    	<div class="white_box">
	                      		<div class="row">
	                         		<div class="col-lg-6 col-md-6 col-6">
			                           	<div class="sec-33">
			                             	<h4 class="no-margin">Order Rate</h4>
			                           	</div>
	                         		</div>
	                         		<div class="col-lg-6 col-md-6 col-6">                 
				                        <div class="white_card_body sec-31">
				                            <div class="dropdown">
				                                <button class="btn sec-32 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                                  Month</button>
				                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				                                  	<a class="dropdown-item" href="#">Action</a>
				                                  	<a class="dropdown-item" href="#">Another action</a>
				                                  	<a class="dropdown-item" href="#">Something else here</a>
				                                </div>
				                            </div>
				                        </div>                             
	                         		</div>
	                      		</div>
	                      		<div class="row pad-top-20">
			                        <div class="col-lg-1 col-md-1 col-2 sec-34">                            
			                            <img src="{{URL::to('/public/restaurant/assets')}}/images/image13.png">
			                        </div>
		                         	<div class="col-lg-2 col-md-2 col-4 sec-35">
		                            	<h2 class="no-margin">Order Total <span> 25.307</span></h2> 
		                         	</div>
		                         	<div class="col-lg-3 col-md-3 col-5 no-margin sec-36 no-pad">
		                            	<h5 class="no-margin pad-bot-10">Target &nbsp; &nbsp; &nbsp; &nbsp;<span> 3.982 </span></h5>
		                            	<div id="bar1" class="barfiller">                               
		                               		<span class="fill" data-percentage="75"></span>
		                            	</div>
		                         	</div>
		                         	<div class="col-lg-12 col-md-12 col-12">		                         		
		                         		<canvas id="myChart" style="width:100%;max-width:100% ; height: 233px !important;"></canvas>
		                         	</div>
	                      		</div>	                    		
	                    	</div>
	                  	</div>
               		</div>        
             	</div>
             	<div class="col-lg-4 col-md-12 col-12 no-pad-mobile">
             		
             		<div class="for-table-visible">
             			<div class="sec-41 bg-white padding-all">
	                 	<div class="row pad-top-10 pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image14.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
			                    <div class="sec-40">
			                        <p>Total Order Complete</p>
			                        <h4 class="no-margin">2.678</h4>
			                    </div>
		                    </div>
	                 	</div>
		                <div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                	    <div class="sec-42">
		                    	    <img src="{{URL::to('/public/restaurant/assets')}}/images/image15.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                        	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">1.234</h4>
		                      	</div>
		                    </div>
		                </div>
	                 	<div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image16.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">123</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                 	<div class="row pad-bot-10">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image17.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">432</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                </div> 
                	<div class="row">
                   		<div class="col-lg-12 col-md-12 col-12">
                      		<div class="sec-44">
                          		<div class="white_box">
                            		<div class="box_header">
                              			<div class="main-title">
                                			<h3 class="no-margin">Popular Food</h3>
                              			</div>
                            		</div>
                            		<div id="piechart"></div>
                          		</div>
                      		</div>
                  		</div>
                	</div>
             		</div>
             		<div class="row for-table-invisible">
             			<div class="col-md-6">
             				<div class="sec-41 bg-white padding-all">
	                 	<div class="row pad-top-10 pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image14.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
			                    <div class="sec-40">
			                        <p>Total Order Complete</p>
			                        <h4 class="no-margin">2.678</h4>
			                    </div>
		                    </div>
	                 	</div>
		                <div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                	    <div class="sec-42">
		                    	    <img src="{{URL::to('/public/restaurant/assets')}}/images/image15.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                        	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">1.234</h4>
		                      	</div>
		                    </div>
		                </div>
	                 	<div class="row pad-bot-40">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image16.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">123</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                 	<div class="row pad-bot-10">
		                    <div class="col-lg-3 col-md-3 col-3">
		                      	<div class="sec-42">
		                        	<img src="{{URL::to('/public/restaurant/assets')}}/images/image17.png">
		                      	</div>
		                    </div>
		                    <div class="col-lg-9 col-md-9 col-9 sec-43 no-pad">
		                      	<div class="sec-40">
		                         	<p>Total Order Complete</p>
		                         	<h4 class="no-margin">432</h4>
		                      	</div>
		                    </div>
	                 	</div>
	                </div> 
             			</div>
             			<div class="col-md-6">
             				<div class="row">
                   		<div class="col-lg-12 col-md-12 col-12">
                      		<div class="sec-44">
                          		<div class="white_box">
                            		<div class="box_header">
                              			<div class="main-title">
                                			<h3 class="no-margin">Popular Food</h3>
                              			</div>
                            		</div>
                            		<div id="piechart"></div>
                          		</div>
                      		</div>
                  		</div>
                	</div>
             			</div>

             			 
             		</div>


	                
             	</div>
          	</div>
          	<div class="order-section-chart pad-top-30 m-r-10">
	          	<div class="row">
		            <div class="col-lg-12 col-md-12 col-12 sec-45">
		                <div class="white_box">
		                    <div class="row">
		                    	<div class="col-lg-12 col-md-12 col-12">
				                   	<div class="sec-33">
				                      	<h4 class="no-margin">Order Rate</h4>
				                   	</div>
		                    	</div>
		                 	</div>
		                    <div class="row pad-top-20">
				      			<div class="col-lg-12 col-md-12 col-12 ">
			                        <div id="apex_2"></div>
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
<!-- waypoints js -->
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/chartlist/Chart.min.js"></script>
<!-- counterup js -->
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/count_up/jquery.counterup.min.js"></script>

<script src="{{URL::to('/public/restaurant/assets')}}/js/chart.min.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/am_chart/amcharts.js"></script>

<script src="{{URL::to('/public/restaurant/assets')}}/vendors/apex_chart/apexcharts.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/apex_chart/apex_dashboard.js"></script>

<script src="{{URL::to('/public/restaurant/assets')}}/vendors/apex_chart/apexcharts.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/apex_chart/apexchart_lists.js"></script>

<!-- custom js -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/js/custom.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/js/dashboard.js"></script>
<script src="{{URL::to('/public/restaurant/assets')}}/vendors/chartjs/chartjs_init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);
function drawCharts() {

  // BEGIN BAR CHART
  /*
  // create zero data so the bars will 'grow'
  var barZeroData = google.visualization.arrayToDataTable([
    ['Day', 'Page Views', 'Unique Views'],
    ['Sun',  0,      0],
    ['Mon',  0,      0],
    ['Tue',  0,      0],
    ['Wed',  0,      0],
    ['Thu',  0,      0],
    ['Fri',  0,      0],
    ['Sat',  0,      0]
  ]);
	*/
  // actual bar chart data
  var barData = google.visualization.arrayToDataTable([
    ['Day', 'Page Views', 'Unique Views'],
    ['Sun',  1050,      600],
    ['Mon',  1370,      910],
    ['Tue',  660,       400],
    ['Wed',  1030,      540],
    ['Thu',  1000,      480],
    ['Fri',  1170,      960],
    ['Sat',  660,       320]
  ]);
  // set bar chart options
  var barOptions = {
    focusTarget: 'category',
    backgroundColor: 'transparent',
    colors: ['cornflowerblue', 'tomato'],
    fontName: 'Open Sans',
    chartArea: {
      left: 50,
      top: 10,
      width: '100%',
      height: '70%'
    },
    bar: {
      groupWidth: '80%'
    },
    hAxis: {
      textStyle: {
        fontSize: 11
      }
    },
    vAxis: {
      minValue: 0,
      maxValue: 1500,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 4
      },
      textStyle: {
        fontSize: 11
      }
    },
    legend: {
      position: 'bottom',
      textStyle: {
        fontSize: 12
      }
    },
    animation: {
      duration: 1200,
      easing: 'out',
			startup: true
    }
  };
  // draw bar chart twice so it animates
  var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
  //barChart.draw(barZeroData, barOptions);
  barChart.draw(barData, barOptions);

  // BEGIN LINE GRAPH

  function randomNumber(base, step) {
    return Math.floor((Math.random()*step)+base);
  }
  function createData(year, start1, start2, step, offset) {
    var ar = [];
    for (var i = 0; i < 12; i++) {
      ar.push([new Date(year, i), randomNumber(start1, step)+offset, randomNumber(start2, step)+offset]);
    }
    return ar;
  }
  var randomLineData = [
    ['Year', 'Page Views', 'Unique Views']
  ];
  for (var x = 0; x < 7; x++) {
    var newYear = createData(2007+x, 10000, 5000, 4000, 800*Math.pow(x,2));
    for (var n = 0; n < 12; n++) {
      randomLineData.push(newYear.shift());
    }
  }
  var lineData = google.visualization.arrayToDataTable(randomLineData);

	/*
  var animLineData = [
    ['Year', 'Page Views', 'Unique Views']
  ];
  for (var x = 0; x < 7; x++) {
    var zeroYear = createData(2007+x, 0, 0, 0, 0);
    for (var n = 0; n < 12; n++) {
      animLineData.push(zeroYear.shift());
    }
  }
  var zeroLineData = google.visualization.arrayToDataTable(animLineData);
	*/

  var lineOptions = {
    backgroundColor: 'transparent',
    colors: ['cornflowerblue', 'tomato'],
    fontName: 'Open Sans',
    focusTarget: 'category',
    chartArea: {
      left: 50,
      top: 10,
      width: '100%',
      height: '70%'
    },
    hAxis: {
      //showTextEvery: 12,
      textStyle: {
        fontSize: 11
      },
      baselineColor: 'transparent',
      gridlines: {
        color: 'transparent'
      }
    },
    vAxis: {
      minValue: 0,
      maxValue: 50000,
      baselineColor: '#DDD',
      gridlines: {
        color: '#DDD',
        count: 4
      },
      textStyle: {
        fontSize: 11
      }
    },
    legend: {
      position: 'bottom',
      textStyle: {
        fontSize: 12
      }
    },
    animation: {
      duration: 1200,
      easing: 'out',
			startup: true
    }
  };

  var lineChart = new google.visualization.LineChart(document.getElementById('line-chart'));
  //lineChart.draw(zeroLineData, lineOptions);
  lineChart.draw(lineData, lineOptions);

  // BEGIN PIE CHART

  // pie chart data
  var pieData = google.visualization.arrayToDataTable([
    ['Country', 'Page Hits'],
    ['USA',      7242],
    ['Canada',   4563],
    ['Mexico',   1345],
    ['Sweden',    946],
    ['Germany',  2150]
  ]);
  // pie chart options
  var pieOptions = {
    backgroundColor: 'transparent',
    pieHole: 0.4,
    colors: [ "cornflowerblue",
              "olivedrab",
              "orange",
              "tomato",
              "crimson",
              "purple",
              "turquoise",
              "forestgreen",
              "navy",
              "gray"],
    pieSliceText: 'value',
    tooltip: {
      text: 'percentage'
    },
    fontName: 'Open Sans',
    chartArea: {
      width: '100%',
      height: '94%'
    },
    legend: {
      textStyle: {
        fontSize: 13
      }
    }
  };
  // draw pie chart
  var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
  pieChart.draw(pieData, pieOptions);
}
</script>


@endsection