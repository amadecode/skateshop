<?php
	require("db.php");
	header('Content-Type: application/json');

	if(isset($_GET['action'])){
		$isError = false;
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
	
	}else if(isset($_POST['action'])){
		$isError = false;
		$action = $_POST['action'];

		if($action=="insert"){
			$brand = $_POST['brand'];

			$query = "SELECT brand FROM brand WHERE brand='$brand'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==0){
				$query = "INSERT INTO brand VALUES('','$brand')";
				$result = mysqli_query($con,$query) or die(mysql_error());
				if($result){
					$arr = array('status'=>'insert success','msg'=>$result);
					echo json_encode($arr);
				}else{
					$arr = array('status'=>'insert failed','msg'=>$query);
					echo json_encode($arr);				
				}
			}else{
				$arr = array('status'=>'insert failed','msg'=>'brand aleady exists!');
				echo json_encode($arr);		
			}
		}		
	}else{
		$arr = array('status'=>'failed', 'msg'=>$_POST);
		echo json_encode($arr);
	}
	
?>