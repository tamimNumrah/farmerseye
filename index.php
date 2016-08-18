
<!DOCTYPE html>
<html lang="en">
  <head>
	<script src="jquery.js"></script>
	<script src="Chart.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Soil Tester</title>
	<!--JavaScript-->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5kXsZFLbyKiRb-1xfC9E4cTpVUD4JAqM&callback=initMap"
  type="text/javascript"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	
  </head>
  <body>
 
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php" style="color:#800000;font-size: 30px;">Farmer's Eye</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="index.php">Home</a></li>
	      <li><a href="">Zones</a></li>
	      <li><a href="">Soil Data</a></li>
	      <li><a href="">Soil table</a></li>
		  <li><a href="">Contact Us</a></li>
		  <li> <form class="navbar-form navbar-left" role="search">
           <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
          </form> </li>

	    </ul>
	    <ul class="nav navbar-nav navbar-right ">
	      <li><a href="upload.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	      <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	    </ul>
	  </div>
	</nav>
	  
	
	
	
	
	
	
	
    <div class="container-fluid">
      <div class="row">
	  
	  
		<div class = "leftbar">
		 <div class="col-md-2 sidebar">
		 <?php
		 include 'leftbar.php'; ?>
		 </div>
		</div>
	  
		<div class="col-md-6 col-md-offset-2 main">
		
		<h3>Overall Soil Situation of country</h3>
		
		<script type="text/javascript">
			google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
     var data = google.visualization.arrayToDataTable([
        ['Country',   'Ph', 'Temperature'],
        ['Dhaka',  6.4, 50],
        ['Rajshahi', 5.6, 27],
        ['Sylhet',  3.4, 23],
		['Barishal', 4.5,34],
		['Chittagong', 3.4, 50],
		['Rangpur',  4.4, 43]
      ]);

      var options = {
        sizeAxis: { minValue: 0, maxValue: 100 },
        //region: 'BD',
        displayMode: 'markers',
       // colorAxis: {colors: ['#e7711c', '#4374e0']}, // orange to blue
		colorAxis: {colors: ['#e31b23', 'black', '#00853f']},
		backgroundColor: null,
		 //backgroundColor: '#81d4fa',
          //datalessRegionColor: '#f8bbd0',
		//defaultColor: '#f5f5f5'
		//resolution: 'divisions'
      };
	  options['region']= 'BD';

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    };
		</script>
		
		
		<div>
		  <div id="chart_div" style="width: 900px; height: 600px;"></div>
		</div>
		
		</div>
	  
		<div class = "rightbar">
	        <div class="col-md-3 ">
			<h3>RIGHTBAR</h3>
			</div>
		</div>

        
      </div>
    </div>
	
	
	
	
	


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src ="js/home.js"></script>
  </body>
</html>