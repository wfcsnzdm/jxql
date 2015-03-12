<?php
	session_start();
	//error_reporting(0);
	require_once 'define.php';
	//if ($_GET['id']) {
		//$id = $_GET['id'];
		//$show = $database ->select("release",["id","theme","content","department","time","publishers"],["id"=>$id]);
	//}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>show_list</title>
	<link type="text/css" rel="stylesheet" href="css/base.css" >
	<link type="text/css" rel="stylesheet" href="css/style.css" >
</head>
<body>
	<div id="nav">
		<div id="nav_all">
			<div id="nav_tab">
				<ul>
					<li class="tabs"><a href="./manage.php">设置管理员</a></li>
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
	<div id="main main1">
	<table class="bordered">
    <thead>

    <tr>
        <th>#</th>        
        <th>主题名称</th>
        <th>发布时间</th>
        <th>参与部门</th>
        <th>发布人</th>
        <th>操作</th>
    </tr>
    </thead>
    <?php
    	$i = 1;
    	//echo $_SESSION['uid'] ;
		$show = $database ->select("release",["id","theme","content","department","time","publishers","look"],["publishers"=>$_SESSION['uid']]);
		foreach ($show as $value) {
	?>
    <tr>
        <td><?php echo $i; ?></td>        
        <td><?php echo $value["theme"];?></td>
        <td><?php echo date('Y-m-d', $value["time"]);?></td>
        <td><?php echo $value["department"]; ?></td>
        <td><?php echo $value["publishers"];?></td>
        <td>
        	<a href="./show.php?id=<?php echo $value["id"];?>">查看</a>
        	<a href="./checkbox.php?id=<?php echo $value["id"];?>">管理</a>
        	<a href="./del.php?id=<?php echo $value["id"];?>">删除</a>
        </td>
    </tr>
    <?php  $i++;
			} ?>
</table>

	</div>
</body>
</html>