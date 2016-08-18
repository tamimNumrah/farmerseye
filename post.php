<?php 
			 if(!empty($_GET['q']))
				{
					$q=$_GET['q'];
					$t=$_GET['t'];
					$con=mysqli_connect("localhost", "root", "", "soil");
					if ($con->connect_error) {
						die("Connection failed: " . $con->connect_error);
					} 
					$sql = "INSERT INTO test (ph, date)
						VALUES ('$q', '$t')";
					
					if ($con->query($sql) === TRUE) {
					echo "New record created successfully";
					} 
					else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}


					
					mysqli_close($con);
				}
			?>