<meta charset="utf8">
<?php
	require_once 'get.php';
	require_once 'define.php';
	$q = GetUser(57);
	foreach ($q as $value) {
		if(is_array($value)){
		foreach ($value as $ke) {
			print_r($ke['name']);
		}
		}
	}
?>