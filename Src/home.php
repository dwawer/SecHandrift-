<?php
	session_start();
	include_once 'config.php';
	echo "123123";
	
	if($_SESSION['member'] != "")
	    $smarty->display('header.tpl');
	else 
		$smarty->display('header3.tpl');
	
	echo "<div id='maincontainer'>";
	
	echo "<div class='container'>";
	   echo "<div class='row'>";
	      echo "<aside class='span3 mt40'>";
	       $smarty->display('category.tpl');
           include 'newlist.php';
	       $smarty->display('newlist.tpl');
		   
		   echo "</aside>";
		   echo  "<div class='span9'>";
	       $smarty->display('table.tpl');
	
	echo "</div></div></div>";
	
	$smarty->display('faster.tpl');
	
?>