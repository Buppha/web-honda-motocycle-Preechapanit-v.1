
<?php
	header('Content-Type: application/json');
	$objConnect = mysqli_connect("localhost","root","","map");
	mysqli_set_charset($objConnect, "utf8");
	
	$strSQL = "SELECT * FROM marker ";

	$objQuery = mysqli_query($objConnect,$strSQL);
	$resultArray = array();
	while($obResult = mysqli_fetch_array($objQuery))
	{
		array_push($resultArray,$obResult);
	}
	
	mysqli_close($objConnect);
	
	echo json_encode($resultArray);
?>