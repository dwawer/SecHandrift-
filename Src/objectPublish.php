<?php
	session_start();
	include_once 'config.php';
	include_once 'class/User.php';
	include_once 'conn/conn.php';
	include_once 'inc/char.php';
	include "userIfLogin.php";
	//echo "<script>alert('物品添加成功');</script>";
	
	$objname = $_POST['objname'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	$classes = $_POST['classes'];
    $price = $_POST['price'];
	
	$user = new User();
    $user = unserialize($_SESSION['member']);
	
	$publisher = $user->getUsername();
	
	$path = $_SESSION['upfile'];
	$img;
	
	if(isset($_POST['public']))
	{				
		if($price == "") $price = 0;
	    $sql = "insert into objects(name,picture,type,class,publisher,gainer,onshelf,description,pubDate,price)" ;
	    $sql .= " values ('$objname', '$path', '$type', '$classes','$publisher',null,1,'$description',now(),'$price')";
	     
	//	echo $sql;	
			  
     	$rst = $conn->execute($sql);
 
	    if($rst == false){
		   echo '<script>alert(\'添加失败\');history.back;</script>';
	    } else {
	    	echo "<script>alert('物品添加成功');</script>";
	    }
	}
	
	//触发上传文件事件----------------------------------------------------
	if($_POST['upload'] == '上传') 
	{ 
    	 // echo "<script>alert('上传文件');</script>";
	    if(!empty($_FILES["loadpic"]["name"])){
			
		    $fileinfo = $_FILES["loadpic"];
		    $type=strstr($fileinfo['name'],".");	
	
		    if($type!=".JPG" && $type!=".jpg" && $type!=".bmp"){
			      echo "<script>alert('您上传的文件格式不正确');</script>";
		    }else{
			    if($fileinfo['size'] < 2097152 && $fileinfo['size'] > 0){	/*  判断文件大小  */
  				    $path="upfile/".$_FILES["loadpic"]["name"];				//定义上传文件的路径
					$_SESSION['upfile'] = $path;
				    move_uploaded_file($fileinfo['tmp_name'],$path);		//上传文件
						
				    if(!is_dir("upfile/")){			
                       echo "<script>alert('目录路径错误！');</script>";					//判断文件名是否为目录
					} else {
						$img = $_FILES["loadpic"]["name"];
						echo "<script>alert('图片上传成功');</script>";
					}
			   } else {
				    echo "<script>alert('文件过大');</script>";
			   }
		   }
	    }		
	} else {
		    $_SESSION['upfile'] = "";
	 }
			    $smarty->assign('descriptionvalue',$description);
				$smarty->assign('objnamevalue',$objname);
                $smarty->assign('pricevalue',$price);
				$smarty->assign('path',$img);
				$smarty->display('header.tpl');
				echo "<div id='maincontainer'>
                      <section id='product'>
                      <div class='container'>";
                $smarty->display('publicObject.tpl');				
				echo "</div></section></div>";
				$smarty->display('faster.tpl');
?>