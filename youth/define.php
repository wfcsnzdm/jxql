<?php
	require_once 'medoo.php';
	$database = new medoo([
                    'database_type' => 'mysql',
                    'database_name' => 'jxql',
                    'server' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                ]);
?>