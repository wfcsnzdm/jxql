<?php
	session_start();
	require_once 'get.php';
	require_once 'define.php';
	$de = GetDepartment();
	$database ->query("  TRUNCATE TABLE info");
	foreach($de as $dep){
		$database->insert("info", [
                      		"department_id" => $dep['id'],
                      		"department_name" => $dep['name']
                  ]);
	}
	if (!empty($_POST['submit'])) {
		$uid = $_POST['user_id'];
		$password = $_POST['psw'];
		$_SESSION['uid'] = $uid;
	if ( ($uid == 'admin') && ($password == 'admin')) { 
		echo "<script type='text/javascript' >window.location.href='./manage.php';</script>";
	}
	else{
	$datas = $database->select("administrator", [
    		"user_id",
    		"password"
		], [
    		"user_id" => $uid
		]);
	 $psw = $datas[0]['password'];
	 if ($password == $psw) { 	
	 	echo "<script type='text/javascript' >window.location.href='./release.php';</script>";
	 }else{
	 	echo "<script type='text/javascript'>alert('密码与账号不匹配');window.location.href='./login.html'; </script>";

	 }
	 }
	}
	
?>
