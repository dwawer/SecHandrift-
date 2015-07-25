<?php
    session_start();
    include_once "conn/conn.php";
	include_once "class/User.php";
	include_once 'class/Message.php';
    include "userIfLogin.php";
    include "config.php";

	$user = new User();
    $user = unserialize($_SESSION['member']);
	$publisher = $user->getUsername();
	
	$O_id = $_GET['id'];
	$content = $_POST['massagebox'];
	
	if(isset($_POST['public_message']))
	{
		$message = new Message();
		$message->insertMessage($publisher, $O_id, $content);
	}
?>