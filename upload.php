
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
		
		<h3> Insert M,N,K,P manually </h3>
		
     
      <form class="form-horizontal" role="form"  data-fv-framework="bootstrap"
		data-fv-icon-valid="glyphicon glyphicon-ok"
		data-fv-icon-invalid="glyphicon glyphicon-remove"
		data-fv-icon-validating="glyphicon glyphicon-refresh" action="upload_form.php" method ="get">
          <div class="form-group">
            <label class="col-lg-3 control-label">Division:</label>
            <div class="col-lg-8">
              <input class="form-control" id="division" name="division" required  type="text" value ="Division">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Zone:</label>
            <div class="col-lg-8">
              <input class="form-control" id="zone" name="zone" required  type="text" value ="zone">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Date:</label>
            <div class="col-lg-8">
              <input class="form-control" id="date" name="date" required  type="text" value ="yyyy-mm-dd">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Magnesium:</label>
            <div class="col-lg-8">
              <input class="form-control" id="m" name="m" required  type="text" value ="M">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Nitrogen:</label>
            <div class="col-lg-8">
              <input class="form-control" id="n" name="n" required  type="text" value ="N">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Potassium:</label>
            <div class="col-lg-8">
              <input class="form-control" id="k" name="k" required  type="text" value ="K">
            </div>
          </div>
		   <div class="form-group">
            <label class="col-lg-3 control-label">Phosphorus:</label>
            <div class="col-lg-8">
              <input class="form-control" id="p" name="p" required  type="text" value ="P">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
			  <button class="btn btn-primary" type="submit">Insert</button>
            </div>
          </div>
        </form>
		
		 <h3> Select Excel file to upload to Database</h3>
      <form action="excel_input.php" method="POST" enctype="multipart/form-data">
         <input type="file" name="excel" />
         <input class="btn btn-primary" type="submit"/>
      </form>
		
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