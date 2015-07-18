<?php
    session_start();
    include_once "conn/conn.php";
    include "ifLogin.php";
    include "config.php";

	$receiver=$_GET['rec'];
    $publisher = $_SESSION['member'];
	$content = $_POST['massagebox'];
	if(isset($_POST['public_message']))
	{
    	$sql = "insert into messages(publisher,receiver,reDate,content,root) 
	        values ('$publisher','$receiver',now(),'$content',1)";
	
    	$rst = $conn->execute($sql);  
        $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
        if($rst == false){ 
	       echo "<script language='javascript'> 
		      alert('留言发布失败');
		      history.go(-1);
			  </script>";
        }else{
	       echo "<script language='javascript'> 
		      alert('留言发布成功');
		      history.go(-1);
			  </script>";        }
	
    	echo $content;
		
	    echo "12123";
		}
	?>