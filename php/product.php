<?php
	require("db.php");
	header('Content-Type: application/json');
	$table = 'products';

	if(isset($_GET['action'])){
		$isError = false;
		$action = $_GET['action'];	

		if($action=="getAll"){
			$arr = array();
			$query = "SELECT * FROM `$table`";
			$result = mysqli_query($con,$query) or die(mysql_error());
			while($row = mysqli_fetch_array($result)){
				$arr[] = $row;
			}
			echo json_encode($arr);
		}else if($action=="getFilteredByCategory"){
			$category_id = $_GET['category_id'];
			$arr = array();
			$query = "SELECT * FROM `$table` WHERE categories='$category_id'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			while($row = mysqli_fetch_array($result)){
				$arr[] = $row;
			}
			echo json_encode($arr);
		}

/*		else if($action=="getFilteredByCategory"){
			$category_id = $_GET['category_id'];
			$arr = array();
			$query = "SELECT id, category FROM `categories` WHERE parent='$category_id'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			while($row = mysqli_fetch_array($result)){
				//$arr[] = $row[0];
				$id = $row[0];
				$q = "SELECT * FROM '$table' WHERE categories='$id'";
				$arr[] = $q;
				$r = mysqli_query($con,$q) or die(mysql_error());
				while($rr = mysqli_fetch_array($r)){
					$arr[] = $rr;
				}
			}
			echo json_encode($arr);
		}*/		
	
	}else if(isset($_POST['action'])){
		$isError = false;
		$action = $_POST['action'];

		if($action=="insert"){
			$title = $_POST['title'];
			$price = $_POST['price'];
			$list_price = $_POST['list_price'];
			$brand = $_POST['brand'];
			$categories = $_POST['categories'];
			$description = $_POST['description'];
			$featured = $_POST['featured'];
			$sizes = '';
			$deleted = $_POST['deleted'];
			$qty = $_POST['qty'];
			$image = $_POST['image'];

			$query = "SELECT * FROM $table WHERE title='$title' AND brand='$brand' AND categories='$categories' AND description='$description'";
			$result = mysqli_query($con,$query) or die(mysql_error());
			$rows = mysqli_num_rows($result);
			if($rows==0){
				$query = "INSERT INTO $table VALUES('','$title', '$price','$list_price','$brand','$categories','$image','$description','$featured','$sizes','$deleted','$qty')";
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

		if($action=="put"){
			$id = $_POST['id'];
			$title = $_POST['title'];
			$price = $_POST['price'];
			$list_price = $_POST['list_price'];
			$brand = $_POST['brand'];
			$categories = $_POST['categories'];
			$description = $_POST['description'];
			$featured = $_POST['featured'];
			$sizes = '';
			$deleted = $_POST['deleted'];
			$qty = $_POST['qty'];
			$image = $_POST['image'];

			$query = "UPDATE $table SET title='$title', price='$price', list_price='$list_price', brand='$brand', categories='$categories', description='$description', featured='$featured', sizes='$sizes', deleted='$deleted', qty='$qty', image='$image' WHERE id='$id'";
			$result = mysqli_query($con,$query) or die(mysql_error());			
			if($result){
				$arr = array('status'=>'update success','msg'=>$result, 'query'=>$query);
				echo json_encode($arr);
			}else{
				$arr = array('status'=>'update failed','msg'=>$query, 'query'=>$query);
				echo json_encode($arr);				
			}
		}

/*		if($action=="deleteparent"){
			$id = $_POST['id'];

			$query = "DELETE FROM $table WHERE id='$id' OR parent='$id'";
			$result = mysqli_query($con,$query) or die(mysql_error());			
			if($result){
				$query1 = "DELETE FROM products WHERE categories='$id'";
				$result1 = mysqli_query($con,$query1) or die(mysql_error());	
				if($result1){
					$arr = array('status'=>'delete success','msg'=>$result1);
					echo json_encode($arr);
				}else{
					$arr = array('status'=>'delete failed','msg'=>$query1);
					echo json_encode($arr);
				}
			}else{
				$arr = array('status'=>'delete failed','msg'=>$query);
				echo json_encode($arr);				
			}
		}	*/

		if($action=="delete"){
			$id = $_POST['id'];

			$query = "DELETE FROM $table WHERE id='$id'";
			$result = mysqli_query($con,$query) or die(mysql_error());			
			if($result){
				$arr = array('status'=>'delete success','msg'=>$result);
				echo json_encode($arr);
			}else{
				$arr = array('status'=>'delete failed','msg'=>$query);
				echo json_encode($arr);				
			}
		}		
	}else{
		$arr = array('status'=>'failed', 'msg'=>$_POST);
		echo json_encode($arr);
	}
	
?>