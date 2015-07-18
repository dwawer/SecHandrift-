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
		$user = $temp->Register($name, $password, $QQ, $Email, $tel);
        if ($user == "InsertFalse") {
	        echo '<script>alert(\'添加失败\');history.back;</script>';
		
        } else if ($user == "UsernameRepeat") {
	    	echo '<script>alert(\'用户名重复\');history.back;</script>';
		
		} else {	
	        $_SESSION['member'] = $user;
		    $_SESSION['QQ'] = $QQ;
		    $_SESSION['email'] = $Email;
		    $_SESSION['telephone'] = $tel;
	        echo "<script>location.replace('home.php');alert('注册成功');window.close();</script>";
        }
	}
		
?>