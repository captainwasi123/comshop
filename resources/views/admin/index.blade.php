@extends('admin.includes.master')
@section('title', 'Dashboard')

@section('content')

	<div class="main_content_iner">
        <div class="container-fluid">
          	<div class="order-section-chart ">
	          	<div class="row">
		            <div class="col-lg-12 col-md-12 col-12 sec-45">
		                <div class="white_box">
		                   <div class="QA_section">
                                <div class="white_box_tittle list_header no-margin">
                                    <h3 class="inner-order-head no-margin pad-bot-10">Restaurant</h3>
                                    <div class="add_button m-b-20 pad-top-10">
                                        <a href="#" class="bg-yellow ">Add New</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="QA_table restaurant-section">
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th scope="col">title</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Teacher</th>
                                                <th scope="col">Lesson</th>
                                                <th scope="col">Lesson</th>
                                                <th scope="col">Enrolled</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Category name</td>
                                                <td>Category name</td>
                                                <td>Teacher James</td>
                                                <td>Lessons name</td>
                                                <td>Lessons name</td>
                                                <td>16</td>
                                                <td>$25.00</td>
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