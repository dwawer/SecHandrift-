<?php
	session_start();
    include_once 'conn/conn.php';
	include_once 'config.php';
	include_once 'class/User.php';
	include_once 'class/Objlist.php';
	include "ifLogin.php";
 
	$user = new User();
    $user = unserialize($_SESSION['member']);
	
	$username = $user->getUsername();
	$QQ = $user->getQQ();
    $email=	$user->getEmail();
    $telephone = $user->getTelephone();
	
	$smarty->display('header.tpl');
	echo "<div id='maincontainer'>";
	echo "<div class='container'>";
	   echo "<div class='row'>";
	      echo "<aside class='span3 mt40'>";
		   $smarty->assign('user',$username);
		   $smarty->assign('email',$email);
		   $smarty->assign('qq',$QQ);
		   $smarty->assign('tel',$telephone);
	       $smarty->display('userinfo.tpl');
		   echo "</aside>";
		   echo  "<div class='span9'>";
		   
		   $sql = "select * from objects where publisher = '".$username."';";
			
		   $rst = $conn->execute($sql);
		   $arr1 = $rst->getArray();
		   $objlist = new objlist(6,$page);
		   $objlist->listInfo($arr1);
		   $objlist->toPage();
	
	echo "</div></div></div>";
	
	$smarty->display('faster.tpl');
?>