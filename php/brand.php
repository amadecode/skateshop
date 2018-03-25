<?php
	require("db.php");
	header('Content-Type: application/json');
	if(isset($_GET['action'])){
		$action = $_GET['action'];

		if($action=="getAll"){
			$arr = array();
			$query = "SELECT * FROM `brand`";
			$result = mysqli_query($con,$query) or die(mysql_error());
			while($row = mysqli_fetch_array($result)){
				$arr[] = $row;
			}
			echo json_encode($arr);
		}
	}else{
		$arr = array('status'=>'failed');
		echo json_encode($arr);
	}
?>