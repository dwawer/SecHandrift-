<?php
     include_once "conn/conn.php";
	 $tempid = $_GET['id'];
     $sql = "update objects set onshelf = 0 where O_id = '$tempid';";
	 $rst = $conn->Execute($sql) or die('execute error');
	 echo "<script language='javascript'> 
		      history.go(-1);
			  </script>"; 
	?>