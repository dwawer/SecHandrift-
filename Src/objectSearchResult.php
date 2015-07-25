<?php
	session_start();
	include_once 'config.php';
	include "userIfLogin.php";
    $smarty->display('searchResult.tpl');
?>