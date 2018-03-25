<?php
	require("db.php");
	header('Content-Type: application/json');
	if(isset($_POST['action'])){
		$action = $_POST['action'];

		if($action=="validate"){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$arr = array('status'=>'success');
			echo json_encode($arr);
		}
	}else{
		$arr = array('status'=>'failed');
		echo json_encode($arr);
	}
?>