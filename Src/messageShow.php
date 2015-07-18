<?php
    session_start();
    include_once "conn/conn.php";
    include "config.php";
	include "redisConnect.php";
    
	$publisher1="fxy";
	$receiver="hgj";
	
	$publisher2="hgj";
	$receiver2="fxy";
	$sql = "select * from messages where receiver = '$receiver';";
	
	echo $sql;
	$rst = $conn->execute($sql);  
	$redisID = $receiver."message";
	
	if($rst->RecordCount() == 0){}
	else{
		 $arr1 = $rst->getArray();

		 $redis->delete($redisID);
         foreach($arr1 as $value)
         {   
		    $redis->lPush($redisID,$value['R_id']);
		    $redis->delete($value['R_id']);
			$redis->lPush($value['R_id'], $value['publisher']);  //3
			$redis->lPush($value['R_id'], $value['content']);  //2
			$redis->lPush($value['R_id'], $value['reDate']);  //1
			$redis->lPush($value['R_id'], $value['subId']);   //0 
			$redis->rPush($value['R_id'], $value['root']);   //0 
         }
		  echo $redis->lSize($redisID);
		  $content = "";
		  echo "size: ::::".$redis->lSize($redisID);
		 while($redis->lSize($redisID) != 0)
		 {
			 echo "size: ::::".$redis->lSize($redisID);
			 $R_id = $redis->lPop($redisID);
			 $content .= "<li><span class='productinfoleft'>".$redis->lGet($R_id, 3)." : </span>";
			 $content .= $redis->lGet($R_id, 2)."</li>";
		 }
		  echo $content;
		}
    	
	?>