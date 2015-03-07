<meta charset="utf-8">
<?php
 // error_reporting(0);
  function GetDepartment()
  {
	$access_token 	= GetAccessToken();
	$url = 'https://qyapi.weixin.qq.com/cgi-bin/department/list?access_token='.$access_token;
	//echo $url;
	$obj = doCurlGetRequests($url);
	//var_dump($obj);
	$department = json_decode($obj,TRUE);
	return $department['department']; 
  }
  function GetAccessToken(){
		$AppID = 'wxc3d5b23bba25c648';
		$AppSecret ='QZsQohlJT3NLwRw8JYNRWjE3EqwfCkBCm3Dg59_i00yElNsIoyLMZqpHSF_AtDO0';
		$url = 'https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid='.$AppID.'&corpsecret='.$AppSecret;
		$obj = doCurlGetRequests($url);
		$info = json_decode($obj,TRUE);
    		$access_token = $info['access_token'];
		// echo $access_token;
   	return $access_token;
}
	function doCurlGetRequests($url) {
		//echo $url;
		$ch = curl_init();
        	curl_setopt($ch, CURLOPT_URL, $url);
        	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);																
        	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        	$json_str = curl_exec($ch);
        	curl_close($ch);
		//echo $json_str;
        	return $json_str;
}
	function GetUser($id){
	$access_token 	= GetAccessToken();
	$url = 'https://qyapi.weixin.qq.com/cgi-bin/user/simplelist?access_token='.$access_token.'&department_id='.$id.'&fetch_child=0&status=0';
	//echo $url;
	$obj = doCurlGetRequests($url);
	//var_dump($obj);
	$department = json_decode($obj,TRUE);
	return $department; 
	}      
?>
