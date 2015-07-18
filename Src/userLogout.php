<?php
        session_start();
		$_SESSION['member'] = "";
			  echo "<script language='javascript'> 
		      alert('登出成功');
		      location.replace('index.php');
			  </script>";
?>