<?php
	error_reporting(0);
	require_once 'define.php';
	require_once 'get.php';
	if ($_GET['id']) {
		$id = $_GET['id'];
		$show = $database ->select("release",["id","theme","content","department","time","publishers"],["id"=>$id]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>checkbox</title>
	<link type="text/css" rel="stylesheet" href="css/base.css" >
	<link type="text/css" rel="stylesheet" href="css/style.css" >
</head>
<body>
	<div id="nav">
		<div id="nav_all">
			<div id="nav_tab">
				<ul>
					<li class="tabs"><a href="./manage.php">首页</a></li>
					<li class="tabs"><a href="./release.php">发布活动</a></li>
					<li class="tabs"><a href="./show_list.php">查看活动</a></li>
					<li class="tabs"><a href="./my_show.php">我的活动</a></li>
					<!-- <li class="tabs"><a href="#">关于蜂窝</a></li> -->
					<li class="tabs"><a href="#">联系我们</a></li>
				</ul>
			</div>
			<div id="p_login">
				<span style="float: left; width: 70px; color:#fff">您好</span>
				<a href="./login.html" class="dl_login" style="float: left;">请登录</a>
			</div>
		</div>
	</div>
	<div id="logo">
		<img src="images/logo.png">
	</div>
	<div id="main">
		<span class="r_span r_span_1"><?php echo $show['0']["theme"];?></span><br /><br />
		<form action="deal.php"  method="post">
	<?php
		$get = GetUser(57);
		foreach ($get as $value) {
		if(is_array($value)){
		foreach ($value as $key) {
		?>
		<span id="checkbox">
			<input type="checkbox" name="checkbox[]" value="<?php echo $key['name'];?>"><?php echo $key['name'];?>
		</span>
	<?php 
		}
		}
	}
	?>
	<input type="hidden" name="r_id" value="<?php echo $id;?>">
	<br />
	<div id="r_submit">
	<input id="submit" type="submit" name="ManageSubmit" value="提交">
	</div>
	</form>
	</div>
</body>
</html>