<?php
 include_once 'config.php';
 class Objlist
 {
    private $pagesize=3;                  //保存每页最多显示的记录数
	private $page;                      //保存当前页数
	private $pagecount;                 //保存总页数
	private $total;                     //保存总记录数
	private $conn;    

	   
	public function __construct($pagesize,$page)
	{
	   $this->pagesize=999;
	   $this->page=$page;
	} 
	
	public function listInfo($infoall)
	{
		global $smarty;
		$this->page = $_GET['page'];
	    if($this->page=="" || !is_numeric($this->page))
	    {
	      $this->page=1;
	    }
	    
	   $this->total= count($infoall);
	   
	   //echo "this total :" .$this->total;
	   if($this->total==0)
	   {      
		 echo "什么都没有~";		  
	   }
	   else
	   {
	       if(($this->total % $this->pagesize)==0)
	       {
		      $this->pagecount=intval($this->total/$this->pagesize);
	     	}
		    else
		   {
		      if($this->total<=$this->pagesize)
		      {
		          $this->pagecount=1;
		       }
		      else
		     {
		         $this->pagecount=ceil($this->total/$this->pagesize);
		     }
		    }
	     $info = array_slice($infoall, $this->pagesize*($this->page-1),$this->pagesize); //第二个参数为pagesize;
		
		
	   foreach($info as $value){
			//  print_r($value);
			 	//echo $value;		  
			  $smarty->assign('objname',$value['name']);
			  $smarty->assign('description',$value['description']);
			  $smarty->assign('publisher',$value['publisher']);
			  $smarty->assign('type',$value['type']);
			  $smarty->assign('class',$value['class']);
			  $smarty->assign('price',$value['price']);
			  if($value['picture'] == "")
				  $smarty->assign('picpath','static/img/default.jpg');
			  else 
			      $smarty->assign('picpath',$value['picture']);
			  $smarty->assign('oid',$value['O_id']);
			  $smarty->display('list.tpl');	  		
	   }
	 }	
	   	
  }
	
	public function toPage()
	{
	?>
           <div class="pagination pull-right">
              <ul>                 
		      <li><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1">首页</a></li>
              <li><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page>1)
			     echo $this->page-1;
			    else
				 echo 1; 
			  ?>">上一页</a></li>
			  <li><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page<$this->pagecount-1) 
			      echo $this->page+1;
			    else
				  echo $this->pagecount;
			  ?>">下一页</a></li>
              <li><a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $this->pagecount;?>">尾页</a></li>
			</ul>
	   </div>
	<?php
	}
        
       public function __destruct()
	   {
	     mysql_close($this->conn);
	   }
  }
?>

