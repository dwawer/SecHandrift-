<?php
	session_start();
	include_once 'config.php';
    include_once 'class/Objlist.php';
	include_once 'conn/conn.php';
    include_once 'redisConnect.php';
	//include "ifLogin.php";
	
	$search = $_POST['searchbox'];
	$objname = "";
	$description = "";
	$type = "";
	$classes = "";
    $price = "";
    $publisher = "";
	$path = "";
	
	$page = $_GET['page'];
	 
	$smarty->display('header.tpl');
	echo "<div id='maincontainer'>
         <section id='product'>
          <div class='container'>
		     <div class='row'><aside class='span3'>";
		 $smarty->display('category.tpl');
		   //$smarty->display('floatsed.tpl');
		   //$smarty->display('floatdrift.tpl');
		   include 'newlist.php';
	       $smarty->display('newlist.tpl');
    echo "</aside>";
	echo " <div class='span9'>          
          <section id='category'>
            <div class='row'>
              <div class='span9'>";	  
                 echo "<section id='categorygrid'>
                  <ul class='thumbnails grid'>";


		$sql1 = "select * from objects where name like '%".$search."%' and onshelf = 1;";
		$sql2 = "select * from objects where description like '%".$search."%' and onshelf = 1;";

		
		$rst1 = $conn->execute($sql1);
		$rst2 = $conn->execute($sql2);

	    if($rst1->RecordCount() == 0){}
	    else{
			$arr1 = $rst1->getArray();
		    $objlist = new objlist(6,$page);
		    $objlist->listInfo($arr1);
		    $objlist->toPage();
		
	    
		if($rst2->RecordCount() == 0){}
	    else{
			$arr2 = $rst2->getArray();
		}
	  }	
	
	 echo "</ul></div></div></section></div></div></div></section></div>";
	 $smarty->display('faster.tpl');
	 echo $page;
	 echo $_GET['page'];
?>