<?php
header("Content-Type:application/json");
$emp = true;
if( $emp ){
	try{
	include("db.php");
	$empId = "E001";
	$query = "SELECT * from employee";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		//echo "===================";
		//print_r($row['empId']);
		response($row);
	}
		mysqli_close($con);
	} catch (Exception $e){
		print_r($e);
	}/**/ 
}

if(isset($_POST) && count($_POST) > 0{
	print_r($_POST)
}
function response($result){
	echo json_encode($result);
}
?>