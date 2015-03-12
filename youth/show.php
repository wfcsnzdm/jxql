<?php
//error_reporting(0);
	require_once 'define.php';
	if ($_GET['id']) {
		$id = $_GET['id'];
		$show = $database ->select("release",["id","theme","content","department","time","publishers"],["id"=>$id]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>show</title>
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
	<div id="main1">
		<span class="r_span r_span_1"><?php echo $show['0']["theme"];?></span><br /><br />
		<span class="info">&nbsp;&nbsp;&nbsp;发布人：</span><span class="info info1" >dsadsa</span><br /><br />
		<span class="info">发布时间：</span><span class="info info1" >dsadsa</span><br /><br />
		<span class="info">参与部门：</span><span class="info info1" >dsadsa</span><br /><br/><br /><br />
		<span class="info">内容：</span><br/><br/>
		<p class="sp">世界陷入了无边的寂静，周围只能听到滴答滴答的钟表声和此起彼伏的规律的呼吸声。我安静地闭上了眼，进入了梦乡，落入了自我的沉思的悬崖。

　　何曾几时，我学会了对妈妈说出这样的话：“我已经长大了，别管我了！”是啊，已经上中学的我和刚学拼音的六七岁小孩有着天壤之别，但是真的完全不同吗？答案是否定的。

　　“都别闹了！”身边无数个小孩在无休止地吵闹着，来回不知疲倦地跑着，使我十分烦躁，于是下达了“最后通牒”：“全部都安静，把玩具都收拾好！”放寒假原来是一件开心的事情，可妈妈显得有点担忧过度。她每天甚至每时都在小声地自言自语着：“我要去上班，你整天自己在家怎么办呢？午餐怎么解决？会不会有危险？有客人来了怎么办？”诸如此类。就好像我不是呆在安适的家里，而是被安置在了有无数个定时炸弹的危险地带。

　　最后，她想出了一个“万全之策”。看着摆满玩具和卡通贴纸的桌子，我深深叹了口气——妈妈的办法是让我陪她上班。

　　随着时间的推移，“年味”越来越浓了。耳边响彻着窗外的爆竹声，向外看去，只见深深浅浅的红，在浓雾中飞扬着，散落着，形成一条长长的地毯。屋内，各色各样的手工年画贴满了墙，虽然拙劣的画功和太过鲜艳的色彩让画面充满了幼稚，但那一份认真劲儿却是许多大人都比不了了的。

　　孩子们听到我的吼叫，瞬间就闭上了嘴巴，定住了脚步，一双双眼睛好奇盯着我——奏效了吗！我显得有点欣喜若狂，嘴角也不禁上扬。可惜我马上就像撒了气的气球一般——他们只把注意力在我这边暂存了片刻，没多久就又开始摆弄手中的东西。哭笑不得地，我瘫坐在了椅子上，无可奈何地用手撑着头。同时我也得意地感慨着：这就是小孩子啊！终究只是不明白事理的小孩啊！

　　到了午睡的时间了。

　　拉上窗帘，整个屋子都变暗了，屋外的炮竹声已经暂停，前一秒还在吵吵嚷嚷的“小恶魔”此时却乖巧地闭上了眼睛。耳边仍隐约回荡着刺耳的喧闹声，看着墙上始终的秒针还在缓缓移动，我忽然睡意袭来，便顺从地合上双眼，疲倦地倒在了床上，昏昏沉沉地睡了过去。沉睡着的世界，令人心安。

　　不知这样睡了多久，朦胧之中，我感到冬日的寒冷侵入全身，唤醒了我仅存的一点清醒，但我并不想伸手去拿被子。就像一个手无寸铁的士兵，我只好皱着眉蜷缩起身体。

　　忽然，有人轻柔地把被子盖在我身上，动作很慢很轻，为我阻挡了外界的寒冷。我感到一刹那的温暖。“又多了一个小孩。”是熟悉的嗓音。但我意识到这话的内容，突然睁开眼睛，瞪大瞳孔，一脸绝望地说：“又来了一个吗？”

　　对上妈妈慈祥的目光，我发现我是多么愚笨——我就是她所说的孩子啊！随着年龄的增长，我的心智的确在走向成熟，但是这样，难道我就可以无理取闹地宣扬“自己生活”的口号了吗？难道我就可以无情地拒绝妈妈对我深厚的疼爱之情了吗？

　　相反，没有长大的孩子比我更加真诚，更加懂得怎样去做。
</p><br><br>
<span class="info">报名名单:</span><br><br>
	<table class="bordered">
    <thead>

    <tr>
        <th>#</th>        
        <th>姓名</th>
        <th>状态</th>
    </tr>
    </thead>
    <?php $show = $database ->select("jioning",["name"],["r_id"=>$id]);
    $i = 1;
    foreach ($show as $key ) {
    ?>
    <tr>
        <td><?php echo $i?></td>        
        <td><?php echo $key['name']?></td>
        <td>已报名</td>
    </tr>
    <?php $i++;} ?>        
</table>
</div>
</body>
</html>