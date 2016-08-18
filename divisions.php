
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
	      <li><a href="question.html">Zones</a></li>
	      <li><a href="be_a_consultant.php">Soil Data</a></li>
	      <li><a href="top_consult.php">Soil table</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
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
	  
		<div class="col-md-8 col-md-offset-2 main">
		
		<div class="container-fluid">
		
		<h3>Average PH value zonewise and datewise:</h3>
		<!--</div><img src="images/<?php echo $_GET['q']?>.png" alt="something" style="width:400px;height:304px;></div>-->
		 <?php 
			 if(!empty($_GET['q']))
				{
					$q=$_GET['q'];
					$con=mysqli_connect("localhost", "root", "", "soil");
					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					} 
					$sql="SELECT * FROM zones WHERE division='$q' ";
					$result = $con->query($sql);
					$zonearray=array();
					$zoneavg=array();
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							
							$zn=$row["zone"];
							$zonearray[]=$zn;
							$sql2="SELECT * FROM ph WHERE division='$q' AND zone='$zn' ";
							$result2 = $con->query($sql2);
							if (mysqli_num_rows($result2) > 0)
							{
								$zonevalue=array();
								while($row2 = mysqli_fetch_assoc($result2))
								{
									//echo $row2["zone"];
									$zonevalue[]=$row2["phvalue"];
								}
								$zoneavg[] = array_sum($zonevalue) / count($zonevalue);
							}
						}
					}
						//mysqli_close($con);
					$sql="SELECT DISTINCT time FROM ph WHERE division='$q' ";
					$result = $con->query($sql);
					$timearray=array();
					$zoneavg2=array();
					if (mysqli_num_rows($result) > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							
							$tm=$row["time"];
							$timearray[]=$tm;
							$sql2="SELECT * FROM ph WHERE division='$q' AND time='$tm' ";
							$result2 = $con->query($sql2);
							if (mysqli_num_rows($result2) > 0)
							{
								$zonevalue1=array();
								while($row2 = mysqli_fetch_assoc($result2))
								{
									//echo $row2["zone"];
									$zonevalue1[]=$row2["phvalue"];
								}
								$zoneavg2[] = array_sum($zonevalue1) / count($zonevalue1);
							}
						}
					}
						//mysqli_close($con);
				}
			?>
			
			<canvas id="mycanvas2" width="350" height="400"></canvas>
			<script>
			var chrt = document.getElementById("mycanvas2").getContext("2d");
			var data = {
			labels: <?php echo json_encode($zonearray) ?>, //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(0,255,0,.8)",
					strokeColor: "rgba(0,255,0,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: <?php echo json_encode($zoneavg) ?> // y-axis
				}
				
			]
			};

		var myFirstChart = new Chart(chrt).Bar(data);
		</script>
		<canvas id="mycanvas3" width="350" height="400"></canvas>
		
			<script>
			var chrt1 = document.getElementById("mycanvas3").getContext("2d");
			var data = {
			labels: <?php echo json_encode($timearray) ?>, //x-axis
			datasets: [
				{
					label: "My First dataset", //optional
					fillColor: "rgba(220,120,220,0.8)",
					strokeColor: "rgba(220,120,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data: <?php echo json_encode($zoneavg2) ?> // y-axis
				}
				
			]
			};

			var myFirstChart = new Chart(chrt1).Bar(data);
			</script>
		
		
		</div>
		
		</div>
	  
		<div class = "rightbar">
	        <div class="col-md-1 ">
			<h3>ZONES</h3>
			<?php
			
			$sql="SELECT * FROM zones WHERE division='$q' ";
			$result = $con->query($sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					//echo $row["zone"];
					//$url="asdhbaids";
					$zon=$row["zone"];
					//echo $q;
				    $url1="zones.php?q="; 
					$url2="&z=";
					$url=$url1.$q.$url2.$zon;
				    //echo $url;
					
					
					echo "<li><a href=".$url.">". $zon."</a></li>";
					echo "</br>";
				}
				//echo "</ul>";
			}
			?>
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