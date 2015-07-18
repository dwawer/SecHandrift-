<?php
	session_start();
	include_once 'config.php';
	include_once 'conn/conn.php';
	include "ifLogin.php";
	
	$id = $_GET['id'];
	$rid = $_GET['rid'];

	$sql = "select * from objects where O_id =".$id.";";
	$rst = $conn->Execute($sql) or die('execute error');	
		
	$date =  $rst->fields['pubDate'];
	$description =  $rst->fields['description'];
	$publisher =  $rst->fields['publisher'];
	$class =  $rst->fields['class'];
	$type =  $rst->fields['type'];
	$path =  $rst->fields['picture'];
	$name =  $rst->fields['name'];	
	$price =  $rst->fields['price'];
	$onshelf = $rst->fields['onshelf'];

	$sql1 = "select * from users where username ='$publisher';";
	$rst = $conn->Execute($sql1) or die('execute error');	
		
	$username =  $rst->fields['username'];
	$QQ =  $rst->fields['QQ'];
	$telephone =  $rst->fields['telephone'];
	$email =  $rst->fields['email'];
	if($onshelf == 1)
		$onshelfdisplay = "<p><a href = reserve.php?id=".$id."><button class='form-button' title='leave msg'><span>预定</span></button></a></p>";			
	else 
		$onshelfdisplay = "<h1 class='form-button'><span class='bgnone'>商品已下架</span></h1>";				
		
    $smarty->assign('onshelfdisplay',$onshelfdisplay);
	$smarty->assign('name',$name);
    if($path == "") 
	    $smarty->assign('path',$defaultPic);
	else 
	    $smarty->assign('path',$path);
	    $smarty->assign('type',$type);
	    $smarty->assign('description',$description);
	    $smarty->assign('publisher',$username);
	    $smarty->assign('QQ',$QQ);
	    $smarty->assign('email',$email);
	    $smarty->assign('telephone',$telephone);
		$smarty->assign('price',$price);

	/*
	$receiver = $_SESSION['member'];
    $rename = "";

	$sql = "select * from messages where receiver = '$username';";
	$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
	
	$rst = $conn->execute($sql);  
	$redisID = $receiver."message";
	$content = "";
	 
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
			$redis->lPush($value['R_id'], $value['receiver']);  //1
			$redis->lPush($value['R_id'], $value['subId']);   //0 
         }	 
		 while($redis->lSize($redisID) != 0)
		 {
			 $R_id = $redis->lPop($redisID);
			 $subid = $redis->lGet($R_id, 0);
			 if($_GET['rid'] == "") {
			    $content .= "<li><a href=".$url."&rid=".$R_id."&re=".$redis->lGet($R_id, 1).">
			     <span class='productinfoleft'>".$redis->lGet($R_id, 3)." : 
				 </span> </a>";
			 }else{
				 $content .= "<li>
			     <span class='productinfoleft'>".$redis->lGet($R_id, 3)." : 
				 </span> ";
				 }
			 $content .= $redis->lGet($R_id, 2)."</br>";
			 
			 echo "subId: ".$subid;
			 while($subid != "")
			 {
				 $sql4 = "select * from messages where R_id = ".$subid.";";
				 $rst4 = $conn->Execute($sql4) or die('execute error');
				 $content .= "&nbsp<span><a href=".$url."&rid=".$subid."&re=".$rst4->fields['receiver'].">".$rst4->fields['publisher']."回复".$rst4->fields['receiver']."</a> : ".
                              $rst4->fields['content']."</span>";
				 $subid = $rst4->fields['subId'];
			 }
             $content .= "</li>";
			 
		 }
		}
	
	  $smarty->assign('content',$content);
	  */
	 if($_GET['re'] != "")
	 { 
		 $rename = $_GET['re'];
	 }
	 $smarty->assign('rename',$rename);
	 $smarty->assign('rid',$rid);
	
	$smarty->display('header.tpl');
	 echo "<div id='maincontainer'>";
	   echo "<section id ='product'>";
	     echo "<div class='container'>";
	       echo "<div class='row'>";
	         $smarty->display('object.tpl');
	         echo "<aside class='span3'>";
			   include 'newlist.php';
	           $smarty->display('newlist.tpl');
		     echo "</aside>";
		   echo "</div>";
		 echo "</div>";
	   echo "</section>";
	 ///  include "showMessage.php";
	   if($_GET['rid'] == "")
	       $smarty->display('desTab.tpl');
	   else 
		   $smarty->display('desTab2.tpl');
	 echo "</div>";
	$smarty->display('faster.tpl');
	
    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
    echo $url;
	echo $price;
?>