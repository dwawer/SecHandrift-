<?php
	session_start();
	include_once 'config.php';
	include_once 'conn/conn.php';
	include_once 'class/User.php';
	include_once 'class/Message.php';
	include "userIfLogin.php";
	
	$id = $_GET['id'];

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
	
	//获取物品拥有者信息 ----------------------------------------------------------
	
	$temp = new User();
    $user = $temp->getUserFromUsername($publisher);
	
	$username = $user->getUsername();
	$QQ = $user->getQQ();
    $email=	$user->getEmail();
    $telephone = $user->getTelephone();

	
	//判断物品是否在架上,显示物品信息----------------------------------------------------------
	if($onshelf == 1)
		$onshelfdisplay = "<p><a href = objectReserve.php?id=".$id."><button class='form-button' title='leave msg'><span>预定</span></button></a></p>";			
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

    //显示物品留言---------------------------------------------------------------------

	$content = "";
	$temp = new Message();
	$content = $temp->showMessage($id);
	$smarty->assign('content',$content);
	
	//显示主要页面---------------------------------------------------------------------
	$smarty->assign('id',$id);
	$smarty->display('header.tpl');
	 echo "<div id='maincontainer'>";
	   echo "<section id ='product'>";
	     echo "<div class='container'>";
	       echo "<div class='row'>";
	         $smarty->display('object.tpl');
	         echo "<aside class='span3'>";
			   include 'objectNewlist.php';
	           $smarty->display('newlist.tpl');
		     echo "</aside>";
		   echo "</div>";
		 echo "</div>";
	   echo "</section>";
	  $smarty->display('desTab.tpl');
	 echo "</div>";
	$smarty->display('faster.tpl');
	
    $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
    echo $url;
	echo $price;
?>