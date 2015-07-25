<?php
	session_start();
	include_once 'config.php';
	
	//echo "123123";
	//if($_SESSION['member'] == ""){
		$smarty->display('header2.tpl');
		$smarty->display('login.tpl');
		$smarty->display('faster.tpl');
/*	}else{
	  echo "<script language='javascript'> 
		      location.replace('home.php') 
			  </script>"; 
	}*/
?>