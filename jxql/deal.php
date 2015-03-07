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
	}
?>