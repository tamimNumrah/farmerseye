<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5kXsZFLbyKiRb-1xfC9E4cTpVUD4JAqM&callback=initMap"
  type="text/javascript"></script>
   <script type="text/javascript">
			google.charts.load('current', {'packages': ['geochart']});
     google.charts.setOnLoadCallback(drawMarkersMap);

      function drawMarkersMap() {
     var data = google.visualization.arrayToDataTable([
        ['Country',   'Ph', 'Temperature'],
        ['BD-A',  6.4, 50],
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
		
	
		
  </head>
  <body>
   	
		<div>
		  <div id="chart_div" style="width: 900px; height: 600px;"></div>
		</div>
  </body>
</html>