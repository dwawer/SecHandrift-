﻿<?php
	session_start();
	include_once 'config.php';
    include_once 'class/Objlist.php';
	include_once 'conn/conn.php';
	//include "ifLogin.php";
	
	//global $Smarty;
	$search = $_POST['searchbox'];
	$objname = "";
	$description = "";
	$type = "";
	$classes = "";
    $price = "";
    $publisher = "";
	$path = "";
	
	$page = $_GET['page'];
	$type = $_GET['type'];
		
	$smarty->display('header.tpl');
	echo "<div id='maincontainer'>
         <section id='product'>
          <div class='container'>
		     <div class='row'><aside class='span3'>";
		 $smarty->display('category.tpl');
	//	   $smarty->display('floatsed.tpl');
	//	   $smarty->display('floatdrift.tpl');
		   include 'newlist.php';
	       $smarty->display('newlist.tpl');
    echo "</aside>";
	echo " <div class='span9'>          
          <section id='category'>
            <div class='row'>
              <div class='span9'>";	  
                 echo "<section id='categorygrid'>
                  <ul class='thumbnails grid'>";


		$sql = "select * from objects where type = '".$type."' and onshelf = 1;";

		
		$rst = $conn->execute($sql);
		
	   if($rst->RecordCount() == 0){}
	    else{
		   $arr1 = $rst->getArray();
		   $objlist = new objlist(6,$page);
		   $objlist->listInfo($arr1);
		   $objlist->toPage();
	  }	
	
	 echo "</ul></div></div></section></div></div></div></section></div>";
	 $smarty->display('faster.tpl');
	 echo $page;
	 echo $_GET['page'];
?>