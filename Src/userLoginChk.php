<?php
    session_start();
    include_once "conn/conn.php";
	include_once 'class/User.php';
	
//	include_once 'redisConnect.php';
	
    $password = $_POST['password'];
	$username = $_POST['name'];
	
	if (empty($password) || empty($username)) {	
		echo "<script language='javascript'> 
		      alert('请输入完整信息');
		      history.go(-1);
			  </script>";
		
	} else {
		
	    $temp = new User();
		$user = $temp->Login($username,$password);

		if ($user == "PasswordError") {
			echo "<script language='javascript'> 
		      alert('密码错误');
	    	  history.go(-1);
			  </script>";
		} else if ($user == "UsernameError") {
			echo "<script language='javascript'> 
		      alert('用户名不存在');
    		  history.go(-1);
			  </script>";
		} else {
			
			$_SESSION['member'] = serialize($user);
	    	echo "<script language='javascript'> 
		         alert('登陆成功');
		         location.replace('home.php');
			     </script>";
		}
	} 
	
?>