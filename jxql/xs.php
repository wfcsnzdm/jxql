<?php
	require_once 'define.php';
	if ($_GET['id']) {
		$id = $_GET['id'];
		$show = $database ->select("release",["id","theme","content","department","time","publishers"],["id"=>$id]);
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
	// function check(form) {
	//   	if(form.user_id.value=='') {
	//   		alert("请输入用户帐号!");
	//   		form.user_id.focus();
	//   		return false;
	//   	}
	//   	if(form.password.value==''){
 //                		alert("请输入登录密码!");
 //                		form.password.focus();
 //                		return false;
 //         		}
 //          		document.myform.submit();
 //          		alert("success set a gly");
 //          	}
	// </script>
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid" style="margin-left:-60px;">
		<div class="span12">
			<h3 class="text-center">
				<?php echo $show['0']["theme"]; ?>
			</h3>
			<dl class="dl-horizontal">
				<dt>
					发布人：
				</dt>
				<dd>
					<?php echo $show['0']['publishers']; ?>
				</dd>
				<dt>
					发布Time：
				</dt>
				<dd>
				 	<?php echo date('Y-m-d', $show['0']["time"]);?>   
				</dd>
				<dt>
					参与部门：
				</dt>
				<dd>
					<?php echo $show['0']["department"]; ?>
				</dd>
				<dt>
					活动目的：
				</dt>
				<dd>
					<?php echo $show['0']["theme"]; ?>
				</dd>
			</dl>
			<p class="text-center">
				
			</p>
			<table class="table">
				<thead>
					<tr>
						<th>
							
						</th>
						<th>
							姓名：
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
