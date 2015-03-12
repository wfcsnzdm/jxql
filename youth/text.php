<meta charset="utf8">
<?php
	require_once 'get.php';
	require_once 'define.php';
	$show = $database ->select("jioning",["name"],["r_id"=>1]);
	foreach ($show as $key ) {
		print_r($key);
	}
?>