<?php
	session_start();
	include_once 'conn/conn.php';
	include "class/User.php";
    $name = $_POST['name'];
   	$password = $_POST['pwd1'];
   	$tel = $_POST['tel'];
   	$Email = $_POST['email'];
   	$QQ = $_POST['qq'];

    $temp = new User();
	
	if(isset($_GET['user']))
	{
		$reback = $temp->checkUsernameRepeat($_GET['user']);
		echo $reback;
	}
		
	if(isset($_POST['regPost'])) {
	    if($temp->checkEmailUsername($name, $Email)){
		    $user = $temp->Register($name, $password, $QQ, $Email, $tel);
            if ($user == "InsertFalse") {
	            echo '<script>alert(\'添加失败\');history.go(-1);</script>';
		    } else {	
	            $_SESSION['member'] = serialize($user);
	            echo "<script>location.replace('home.php');
			           alert('注册成功');</script>";
            }
		} else {
			echo "<script>alert('用户名邮箱被占用');history.go(-1);</script>";
		}
	}
		
?>