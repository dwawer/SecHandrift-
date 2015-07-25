<?php
class Message
{
	var $R_id;
	var $publiser;
	var $receiver;
	var $reDate;
	var $content;
	var $subId;
	var $root;
	
	function __contstruct()
	{
	}
	
	function insertMessage($publisher_, $O_id_, $content_) {
		
		include 'conn/conn.php';
		
		$sql = "insert into messages(publisher,O_id,reDate,content,root) 
	        values ('$publisher_','$O_id_',now(),'$content_',1)";
	
    	$rst = $conn->execute($sql);
		
        if($rst == false){ 
	       echo "<script language='javascript'> 
		      alert('留言发布失败');
		      history.go(-1);
			  </script>";
        }else{
	       echo "<script language='javascript'> 
		      alert('留言发布成功');
		      history.go(-1);
			  </script>";        
		}
	}
	
	function showMessage($O_id_) {
		
		include 'conn/conn.php';
		
		$sql = "select * from messages where O_id = '$O_id_';";
	
	    $rst = $conn->execute($sql);  
	    $content = "";

    	if($rst->RecordCount() == 0) {
    	} else {
    		 $arr1 = $rst->getArray();
             foreach($arr1 as $value)
            {   
    			$content .= "<li>
	    		     <span class='productinfoleft'>".$value['publisher']." : 
	    			 </span> ";
	 		
	     		$content .= $value['content']."</br>";	
	    	 }
	    }
		return $content;
	}
}
?>