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
                                <h3 class="inner-order-head no-margin pad-bot-10">Restaurants</h3>
                                <div class="add_button m-b-20 pad-top-10">
                                    <a href="{{route('admin.restaurants.add')}}" class="bg-yellow">Add New</a>
                                </div>
                            </div>
                            <hr>
                            <div class="QA_table restaurant-section">
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>                                            
                                            <th scope="col">S.No</th>
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
                                            <td>1</td>
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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 page-shows-nav">
                    <nav aria-label="Page navigation example" class="Paginate">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link left-arrow" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link-nav " href="#">1</a></li>
                            <li class="page-item"><a class="page-link-nav" href="#">2</a></li>
                            <li class="page-item disable"><a class="page-link-nav" href="#">3</a></li>
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

@endsection
@section('addScript')
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 8],
          ['Eat', 2],
          ['TV', 4],
          ['Gym', 2],
          ['Sleep', 8]
        ]);

          // Optional; add a title and set the width and height of the chart
          var options = {'title':'My Average Day', 'width':370, 'height':300};

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }

        
        // for order rate

        var xValues = [100,200,300,400,500,600,700,800,900,1000];

        new Chart("myChart", {
          type: "line",
          data: {
            labels: xValues,
            datasets: [{ 
              data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
              borderColor: "red",
              fill: false
            }, { 
              data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
              borderColor: "green",
              fill: false
            }, { 
              data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
              borderColor: "blue",
              fill: false
            }]
          },
          options: {
            legend: {display: false}
          }
        });


        // close

    </script>
@endsection