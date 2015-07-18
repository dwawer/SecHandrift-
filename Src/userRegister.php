<?php
	session_start();
	include_once 'config.php';
	$smarty->display('header2.tpl');
    $smarty->display('register.tpl');
	$smarty->display('faster.tpl');
?>