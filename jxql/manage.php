<?php
	require_once 'get.php';
	require_once 'define.php';
	if ($_GET['id'])	 {
		$id = $_GET['id'];
		$show = $database ->select("release",["id","theme","content","department","time","publishers"],["id"=>$id]);
	}
?>
<!doctype html>
<html lang="en">
<meta charset="utf8">
<head>
	<link href="http://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="http://www.bootcss.com/p/layoutit/css/layoutit.css" rel="stylesheet">
	<style type="text/css">
	h1{ text-align: center; margin-left: -200px;}
	.dl-horizontal{ font-size: 20px;}
	</style>
	
</head>
<body>
		<h1>
			<?php echo $show['0']['theme']; ?>
		</h1>
	<dl  class="dl-horizontal">
			<dt>
				发布人：
			</dt>
			<dd>
				<?php echo $show['0']['publishers']; ?>
			</dd>
			<dt>
				参与部门：
			</dt>
			<dd>
				<?php echo $show['0']["department"]; ?>
			</dd>
	</dl>
	<form action="deal.php"  method="post">
	<?php
		$get = GetUser(57);
		foreach ($get as $value) {
		if(is_array($value)){
		foreach ($value as $key) {
		?>
	<input type="checkbox" name="checkbox[]" value="<?php echo $key['name'];?>"><?php echo $key['name'];?>
	<?php 
		}
		}
	}
	?>
	<input type="hidden" name="r_id" value="<?php echo $id;?>">
	<br /><input type="submit" name="ManageSubmit" value="set">
	</form>
</body>
</html>