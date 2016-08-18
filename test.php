<?php
			$con=mysqli_connect("localhost", "root", "", "soil");
			if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
			} 
			echo "Connected successfully";
			$zoneX="zone1";
			$sql="SELECT * FROM ph WHERE zone='$zoneX' ";
			$result = $con->query($sql);
			if (mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<h3>Zone : ". $row["zone"]." :".$row["phvalue"]."</h3>";
					
				}
			}
?>