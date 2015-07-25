<?php
	session_start();
    include_once "conn/conn.php";
	include_once 'class/User.php';
	include_once 'config.php';
	include "userIfLogin.php";
	
	$user = new User();
    $user = unserialize($_SESSION['member']);
	
	$QQ = "";
	$telephone = "";
    $email = "";
	$username = $user->getUsername();
	$QQ = $user->getQQ();
    $email=	$user->getEmail();
    $telephone = $user->getTelephone();
	
    if(isset($_POST['submit'])){
		$password = $_POST['pwd1'];
   	    $tel = $_POST['tel'];
   	    $Email = $_POST['email'];
   	    $QQ = $_POST['qq'];
        $sql = "update users set password = ".$password.",email = '".$Email."',
	            telephone = '".$tel."',QQ = '".$QQ."'
	            where username = '".$username."';";
        $rst = $conn->Execute($sql) or die('execute error');	
		$newuser = new USer($username,$password,$QQ,$Email,$tel);
		$_SESSION['member'] = serialize($newuser);
	    echo "<script language='javascript'> 
		      alert('修改成功');
		      location.replace('userCenter.php');
			  </script>";
          }

	$smarty->assign('user',$username);
	$smarty->display('header.tpl');
    $smarty->display('editUser.tpl');
	$smarty->display('faster.tpl');
?>