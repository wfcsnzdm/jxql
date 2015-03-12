<?php
    error_reporting(0);
	require_once 'define.php';
	if ($_GET['id']) {
		$id = $_GET['id'];
		$database->delete("release",["id"=>$id]);
	}
	header("Location: ./my_show.php");
?>