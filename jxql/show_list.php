
<?php 
	require_once 'define.php';
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
	<script type="text/javascript"></script>
</head>
<body>

<div class="container-fluid">
	<div class="row-fluid" style="margin-left:-60px;">
		<div class="span13">
			<h3 class="text-center">
				活动列表
			</h3>
			<table class="table">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							主题
						</th>
						<th>
							参与部门
						</th>
						<th>
							发布人
						</th>
						<th>
							Time
						</th>
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$show = $database ->select("release",["id","theme","content","department","time","publishers"]);
					foreach ($show as $value) {
				?>
					<tr>
						<td>
							<?php echo $value["id"]; ?>
						</td>
						<td>
							<?php echo $value["theme"]; ?>
						</td>
						<td>
							<?php echo $value["department"]; ?>
						</td>
						<td>
							<?php echo $value["publishers"];?>
						</td>
						<td>
							 <?php echo date('Y-m-d', $value["time"]);?>     
						</td>
						<td>
							<a href="./show.php?id=<?php echo $value["id"]; ?>"><?php echo $value["id"]; ?>查看</a>
							<a href="./manage.php?id=<?php echo $value["id"]; ?>">管理</a>
							<a href="#">删除</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
