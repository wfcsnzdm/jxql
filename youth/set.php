<?php
	session_start();
	require_once 'get.php';
	require_once 'define.php';
	if(!isset($_SESSION['uid'])){
		echo "<script language='javascript'>alert('请先登录再操作！');window.location.href='./login.html';</script>";
	}
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="http://www.bootcss.com/p/layoutit/css/layoutit.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="shortcut icon" href="http://www.bootcss.com/p/img/favicon.png">
	
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/jquery-2.0.0.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/jquery-ui.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/jquery.htmlClean.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/ckeditor/config.js"></script>
	<script type="text/javascript" src="http://www.bootcss.com/p/layoutit/js/scripts.js"></script>
	<script type="text/javascript">
	function check (form) {
		console.log("123");
		var user_id = form.user_id.value;
		var username = form.username.value;
		var psw = form.psw.value;
		if (user_id == '') {
			alert("请输入用户ID");
			form.user_id.focus();
			return false;
		}
		if (username =='') {
			alert("请输入名字");
			form.username.focus();
			return false;
		}
		if (psw =='' ) {
			alert("请设置密码");
			return false;
		}
		return true;
	}
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span9">
			<h3 class="text-center">
				设置管理员
			</h3>
			<form class="form-horizontal offset2" action="deal.php" name="myform" method="post" onsubmit="return check(this)" >
				<div class="control-group">
					<label class="control-label" for="inputEmail">用户id</label>
					<div class="controls">
						<input id="user_id" type="text" name="user_id" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">名字:</label>
					<div class="controls">
						<input  type="text" name="username" id="username" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">密码</label>
					<div class="controls">
						<input id="psw" type="password" name="password" />
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">管理的部门</label>
					<div class="controls">
						<select name="department">
						<?php
						$de = GetDepartment();
						foreach($de as $dep){
							echo "<option value=".$dep['id'].">".$dep['name']."</option>";
						}
						?>
						</select>
					</div>
				</div>
				<div class="control-group offset1">
					<div class="controls">
						<input class="btn " type="submit" name="SetSubmit" value="设置">
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
</body>
</html>
