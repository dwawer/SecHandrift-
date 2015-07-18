<?php
    include_once "conn/conn.php";
    include "config.php";
	include "redisConnect.php";
	include "ifLogin.php";

	$content = $_POST['massagebox'];
	$rid = $_GET['rid'];
    
	$publisher = $_SESSION['member'];
	$receiver = $redis->lGet($rid, 3);
	
	$newid;
	if($_GET['rid'] != "")
	{
    	$sql = "insert into messages(publisher,receiver,reDate,content,root) 
	        values ('$publisher','$receiver',now(),'$content',0)";
    	$rst = $conn->execute($sql);  
		
		$newid = mysql_insert_id($conn);
		
		$rst_ = $conn->execute("select last_insert_id()"); 
		
		$newid = $rst_->fields[0];
		echo $newid;
		
		$sql2 = "update messages set subId = '$newid' 
	             where R_id = '$rid'";
		
		//echo $sql2;
    	$rst2 = $conn->execute($sql2); 
		
        if($rst == false || $rst2 == false){ 
	       echo "<script language='javascript'> 
		      alert('留言回复失败');
		    //  history.go(-1);
			  </script>";
        }else{
	       echo "<script language='javascript'> 
		      alert('留言回复成功');
		     // history.go(-1);
			  </script>";        }
	
    	echo $content;
	} else {
		 echo "<script language='javascript'> 
		      alert('回复失败');
		      history.go(-1);
			  </script>";
		}
	?>