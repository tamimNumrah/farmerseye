<!DOCTYPE html>
<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?PHP
$con=mysqli_connect("localhost", "root", "", "soil");
$val1 = $_GET['division'];
$val2 = $_GET['zone'];
$val3= $_GET['date'];
$val4= $_GET['m'];
$val5= $_GET['n'];
$val6= $_GET['k'];
$val7= $_GET['p'];


$sql = "INSERT INTO table_excel(division, zone, date, M, N, K, P) VALUES ('".$val1."', '".$val2."', '".$val3."', '".$val4."', '".$val5."', '".$val6."', '".$val7."')  ";



if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
	header("Location:upload.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
}
mysqli_close($con);


?>
</body>
</html>