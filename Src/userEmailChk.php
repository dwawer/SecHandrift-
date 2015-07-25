<?php
	session_start();
	include_once 'conn/conn.php';
	include "class/User.php";
	
    $temp = new User();
	
	if(isset($_GET['email']))
	{
		$reback = $temp->checkEmailRepeat($_GET['email']);
		echo $reback;
	}
		
?>