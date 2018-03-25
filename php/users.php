<?php
	require("db.php");
	header('Content-Type: application/json');
	if(isset($_POST['action'])){
		$action = $_POST['action'];

		if($action=="validate"){
			$username = stripslashes($_REQUEST['username']);
			$username = mysqli_real_escape_string($con,$username);
			$password = stripslashes($_REQUEST['password']);
			$password = mysqli_real_escape_string($con,$password);

			$query = "SELECT * FROM `users` WHERE username='$username'and password='".md5($password)."'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==1){
				$_SESSION['username'] = $username;
				// Redirect user to index.php
				header("Location: index.php");
			}else{
				echo "<div class='form'>
				<h3>Username/password is incorrect.</h3>
				<br/>Click here to <a href='login.php'>Login</a></div>";
			}			

			$arr = array('status'=>'success');
			echo json_encode($arr);
		}
	}else{
		$arr = array('status'=>'failed');
		echo json_encode($arr);
	}
?>