<?php
	session_start();
	require_once 'get.php';
	require_once 'define.php';
	if(!isset($_SESSION['uid'])){
		echo "<script language='javascript'>alert('请先登录再操作！');window.location.href='./login.html';</script>";
	}elseif ($_SESSION['uid']!='admin') {
		echo "<script language='javascript'>alert('不好意思你没有权限！');window.location.href='./show_list.php';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>manage</title>
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
	<div id="main">
		<span class="r_span r_span_1">设置管理员</span>
		<div style="margin: 50px 0 0 50px;">
			<form action="deal.php" method="post">
			<div class="r_login">
				<div style="float: left; margin: 15px 20px 0 0;">
					<span class="r_span">用户ID:</span>
				</div>
				<div style="float: left; width: 300px;">
					<input type="text" id="txt" name="user_id"></input>
				</div>
			</div>

			<div class="r_login" style="margin-left:21px;">
				<div style="float: left; margin: 15px 20px 0 0;">
					<span class="r_span">名字:</span>
				</div>
				<div style="float: left; width: 300px; margin-left:5px;">
					<input type="text" id="txt" name="username"></input>
				</div>
			</div>

			<div class="r_login" style="margin-left:21px;">
				<div style="float: left; margin: 15px 20px 0 0;">
					<span class="r_span">密码:</span>
				</div>
				<div style="float: left; width: 300px;">
					<input type="password" id="txt" name="password"></input>
				</div>
			</div>

			<div class="r_which_one" style="margin-left:56px;">
				<div style="float: left; margin: 15px 20px 0 0;">
					<span class="r_span r_span_2">管理的部门:</span>
				</div>
				<div style="float: left; width: 322px;">
					<select rel="select" id="txt" name="department">
				    	<?php
						$de = GetDepartment();
						foreach($de as $dep){
							echo "<option value=".$dep['id'].">".$dep['name']."</option>";
						}
						?>
				    </select>
			    </div>
			</div>
		</div>
		<div id="r_submit">    
       		<input id="submit" type="submit" name="SetSubmit" value="设置"></input>
        </div>
        </form>
	</div>
</body>
</html>