<!DOCTYPE html>
<html lang="en">
	<head>
	<script src="jquery.js"></script>
	<script src="Chart.js"></script>
	</head>
	
	<body>
		<?php
			$con=mysqli_connect("localhost", "root", "", "soil");
			if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
			} 
			echo "Connected successfully";
			$zoneX="zone1";
			$data=array();
			$label=array();
			$sql="SELECT * FROM ph WHERE zone='$zoneX' ";
			$result = $con->query($sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<h3>Zone : ". $row["zone"]." :".$row["phvalue"]."</h3>";
					$data[]=$row["phvalue"];
					$label[]=$row["time"];
					
				}
			}
		?>
		<canvas id="mycanvas" width="256" height="256"></canvas>
		
		<script>
			$(document).ready(function(){
				var ctx = $("#mycanvas").get(0).getContext("2d");

				//pie chart data
				//sum of values = 360
				var data = [
					{
						value: 270,
						color: "cornflowerblue",
						highlight: "lightskyblue",
						label: "PH"
					},
					{
						value: 50,
						color: "lightgreen",
						highlight: "yellowgreen",
						label: "Moisture"
					},
					{
						value: 40,
						color: "orange",
						highlight: "darkorange",
						label: "Nutrients"
					}
				];

				//draw
				var piechart = new Chart(ctx).Pie(data);
			});
		</script>
		<canvas id="mycanvas1" width="400" height="400"></canvas>
		<script>
		var chrt = document.getElementById("mycanvas1").getContext("2d");
		var myarr = [65, 59, 80, 81, 56, 55, 40];
		var data = {
			labels: ["January", "February", "March", "April", "May", "June", "July"], //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(220,220,220,0.8)",
					strokeColor: "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: [65, 59, 80, 81, 56, 55, 40] // y-axis
				},
				{
					label: "My Second dataset", //optional
					fillColor: "rgba(220,120,220,0.8)",
					strokeColor: "rgba(220,120,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: myarr
				}
			]
		};

		var myFirstChart = new Chart(chrt).Bar(data);
		</script>
		<canvas id="mycanvas2" width="400" height="400"></canvas>
		<script>
		var chrt = document.getElementById("mycanvas2").getContext("2d");
		var data = {
			labels: <?php echo json_encode($label) ?>, //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(220,120,220,0.8)",
					strokeColor: "rgba(220,120,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: <?php echo json_encode($data) ?> // y-axis
				}
				
			]
		};

		var myFirstChart = new Chart(chrt).Bar(data);
		</script>
		
		
	</body>

</html>