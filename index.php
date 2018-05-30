<?php
     header("content-type:text/html;charset=utf-8");
	$GetUsername = $_POST['user'];
	$Getpostword = $_POST['postword'];
	$MyUser = 'zhangsan';
	$Mypostword='12345';
	if($GetUsername==$MyUser&&$Getpostword==$Mypostword){
		echo '登录成功';
	}
	
	else if($GetUsername==''&&$Getpostword==''){
		echo '请输入用户名和密码';	
	}
	else{
		echo '密码错误';
	}
?>