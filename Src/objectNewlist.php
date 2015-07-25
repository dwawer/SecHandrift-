<?php
    include_once 'conn/conn.php';
	include_once 'config.php';

	$sql = "select * from objects where onshelf = 1 order by pubDate desc limit 3";
	$rst = $conn->execute($sql);
	$arr1 = $rst->getArray();   
	
	$smarty->assign('id1',$arr1[0]['O_id']);
	$smarty->assign('name1',$arr1[0]['name']);
	
	if($arr1[0]['picture'] == "")
		$smarty->assign('picture1',$defaultPic);
	else
	    $smarty->assign('picture1',$arr1[0]['picture']);
	$smarty->assign('class1',$arr1[0]['class']);
	$smarty->assign('price1',$arr1[0]['price']);
	
	
	$smarty->assign('id2',$arr1[1]['O_id']);
	$smarty->assign('name2',$arr1[1]['name']);
	if($arr1[1]['picture'] == "")
		$smarty->assign('picture2',$defaultPic);
	else
	    $smarty->assign('picture2',$arr1[1]['picture']);
	$smarty->assign('class2',$arr1[1]['class']);
	$smarty->assign('price2',$arr1[1]['price']);
	
	
	$smarty->assign('id3',$arr1[2]['O_id']);
	$smarty->assign('name3',$arr1[2]['name']);
	if($arr1[2]['picture'] == "")
		$smarty->assign('picture3',$defaultPic);
	else
	    $smarty->assign('picture3',$arr1[2]['picture']);
	$smarty->assign('class3',$arr1[2]['class']);
	$smarty->assign('price3',$arr1[2]['price']);
	
	
	 
?>
	 
?>