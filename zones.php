
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
		 <?php 
			 if(!empty($_GET['q']))
				{
					$q=$_GET['q'];
					$z=$_GET['z'];
					echo $z;
					$con=mysqli_connect("localhost", "root", "", "soil");
					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					} 
						//mysqli_close($con);
				}
			?>
			
		</div>
		</div>
	  
		<div class = "rightbar">
	        <div class="col-md-1 ">
			<h3>Rightbar<h3>
			
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