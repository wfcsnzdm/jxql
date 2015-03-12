<?php
	session_start();
	require_once 'define.php';
	if(!isset($_SESSION['uid'])){
		echo "<script language='javascript'>alert('请先登录再操作！');window.location.href='./login.html';</script>";
	}
	//echo $_SESSION['uid'] ;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>release</title>
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
		<span class="r_span r_span_1">发布一个新活动</span>
		<form action="deal.php" method="post">
		<div class="r_theme">
			<input type="text" id="txt" name="theme" placeholder="主题"></input>
		</div>
		<div class="r_content">
			<textarea name="content" id="txt" rows="5" placeholder="内容" style="height: 215px"></textarea>
			
		</div>
		<div class="r_which_one">
			<div style="float: left; margin: 15px 20px 0 0;">
				<span class="r_span r_span_2">参与部门:</span>
			</div>
			<div style="float: left; width: 300px;">
				<select rel="select" id="txt" name="department">
			    	<?php
						$department = $database -> select("management",["department_id"],["administrator" => $_SESSION['uid']]);
						foreach ($department as  $value) {
							$names = $database -> select("info",["department_name"],["department_id" =>$value['department_id']]);
							foreach ($names as $name) {
								echo "<option value=".$name['department_name'].">".$name['department_name']."</option>";
							}
						}
							?>
			    </select>
		    </div>
		</div>
		<div id="radio" >
			<input type="radio" name="look" value="1"><span id="c_txt">公开</span></input>
			<input type="radio" name="look" value="0"><span id="c_txt">不公开</span></input>
		</div>
		<input type="hidden" name="uid" value=<?php echo $_SESSION['uid']; ?>> 
		<div id="r_submit">    
       		<input id="submit" type="submit" name="ReSubmit" value="发布"></input>
        </div>
        </form>
	</div>
	
</body>
</html>