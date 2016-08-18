<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5kXsZFLbyKiRb-1xfC9E4cTpVUD4JAqM&callback=initMap"
  type="text/javascript"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
          ['place', 'Popularity'],
          ['Bangladesh',400]
        ]);

        var options = {};
		options['region'] = 'BD';

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>