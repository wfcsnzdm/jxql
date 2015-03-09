<meta charset="utf-8">
<?php
	require_once 'define.php';
	if (!empty($_POST['ManageSubmit'])) {
		$manage = $_POST['checkbox'];
		$r_id = $_POST['r_id'];
		echo $r_id;
		for ($i=0; $i < count($manage); $i++) { 
			$database -> insert("jioning",["r_id" => $r_id,"name" => $manage[$i]]);
		}
		header("Location: ./manage.php?id=$r_id");
	}//post from manage.php
	if(!empty($_POST['SetSubmit'])){
		//echo "stringaaaaa";
		$user_id = $_POST['user_id'];
		$password = $_POST['password'];
		$username =$_POST['username'];
		$department_id = $_POST['department'];
		$select = $database -> select("administrator",["user_id"],["user_id" => $user_id]);
		if (!$select) {
			$database -> insert("administrator",["user_id" => $user_id,"password" => $password]);
		}else{
			$database -> update("administrator",["password" => $password],["user_id" => $user_id]);
			$database -> insert("management",["department_id" => $department_id,"user_name" => $username,"administrator" => $user_id ]);		
		}
		echo "<script language='javascript'>alert('susscess！');</script>";
		header("Location: ./set.php");
	}//post from set.php
?>