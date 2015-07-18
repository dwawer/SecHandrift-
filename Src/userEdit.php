<?php
	session_start();
    include_once "conn/conn.php";
	include_once 'class/User.php';
	include_once 'config.php';
	include "ifLogin.php";
	
	$user = new User();
    $user = unserialize($_SESSION['member']);
	
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
	    echo "<script language='javascript'> 
		      alert('修改成功');
		      location.replace('userCenter.php');
			  </script>";
          }

	$smarty->assign('user',$username);
	$smarty->assign('QQ',$QQ);
	$smarty->assign('telephone',$telephone);
	$smarty->assign('email',$email);
	$smarty->display('header.tpl');
    $smarty->display('editUser.tpl');
	$smarty->display('faster.tpl');
?>