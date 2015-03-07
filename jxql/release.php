<?php
	session_start();
	if(!isset($_SESSION['uid'])){
		echo "<script language='javascript'>alert('请先登录再操作！');window.location.href='./login.html';</script>";
	}
	require_once 'define.php';
	if (!empty($_POST['submit'])) {
		//echo "string";
		$content = $_POST['content'];
		$theme = $_POST['theme'];
		$department = $_POST['department'];
		$time = time();
		$database -> insert("release",["content" => $content,"theme" => $theme,"department" => $department,"time" => $time,"publishers"=>$_SESSION['uid']]);
		echo "release success";
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
	function check(form) {
	  	if(form.user_id.value=='') {
	  		alert("请输入用户帐号!");
	  		form.user_id.focus();
	  		return false;
	  	}
	  	if(form.password.value==''){
                		alert("请输入登录密码!");
                		form.password.focus();
                		return false;
         		}
          		document.myform.submit();
          		alert("success set a gly");
          	}
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h2> Release a new acvtive</h2>
			<div class="tabbable" id="tabs-209743">
				<div class="tab-content">
					<div class="tab-pane active" id="panel-606202">
						<form action="" method="post" >
						theme<input type="text" name="theme"><br />
						content<textarea style="height:200px; width:300px;" name="content"></textarea><br />
						which one <select name="department">
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
						<br />
						<input class="btn " type="submit" name="submit" value="设置">
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
