<?php
 class page
 {
    private $pagesize;                  //����ÿҳ�����ʾ�ļ�¼��
	private $page;                      //���浱ǰҳ��
	private $pagecount;                 //������ҳ��
	private $total;                     //�����ܼ�¼��
	private $conn;                         
	   
	public function __construct($pagesize,$page)
	{
	   $this->pagesize=$pagesize;
	   $this->page=$page;
	
	} 
	
	public function listInfo()
	{
	   if($this->page=="" || !is_numeric($this->page))
	    {
	      $this->page=1;
	    }
	    
	   $this->conn=mysql_connect("localhost","root","root");
	   mysql_select_db("db_database20",$this->conn);
       mysql_query("set names gb2312");		 
	   $sql=mysql_query("select count(*) as total from tb_student",$this->conn); 
	   $info=mysql_fetch_array($sql);
	   $this->total=$info[total];
	   if($this->total==0)
	   {
	      
		 echo "<table width=704 height=20 border=0 align=center cellpadding=0 cellspacing=0>"+
               "<tr>"+
                "<td><div align=center>����ѧ����Ϣ��</div></td>"+
               "</tr>"+
              "</table>";
		  
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
		
		$sql=mysql_query("select * from tb_student order by sno desc limit ".$this->pagesize*($this->page-1).",$this->pagesize",$this->conn);
		
       ?>
	   
	   <table width="703" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#476106">
        <tr>
         <td width="100" height="20" bgcolor="#C2C41F"><div align="center">ѧ��</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">����</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">�Ա�</div></td>
         <td width="100" bgcolor="#C2C41F"><div align="center">�༶</div></td>
         <td width="297" bgcolor="#C2C41F"><div align="center">סַ</div></td>
        </tr>
	  
	   <?php
	   
	    while($info=mysql_fetch_array($sql))
		{
		?>
		<tr>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sno];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sname];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[ssex];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sclass];?></div></td>
         <td height="20" bgcolor="#FFFFFF"><div align="center"><?php echo $info[saddress];?></div></td>
        </tr>
       <?php  
		   }
		echo "</table>";
	 }	
	   	
  }
	
	public function toPage()
	{
	?>
	   <table width="704" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
         <td width="342">&nbsp;����ѧ����Ϣ&nbsp;<?php echo $this->total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $this->pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $this->page;?>&nbsp;ҳ/��&nbsp;<?php echo $this->pagecount;?>&nbsp;ҳ</td>
         <td width="362"><div align="right">
		      <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1">��ҳ</a>
              <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page>1)
			     echo $this->page-1;
			    else
				 echo 1; 
			  ?>">��һҳ</a>
			  <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
			    if($this->page<$this->pagecount-1) 
			      echo $this->page+1;
			    else
				  echo $this->pagecount;
			  ?>">��һҳ</a>
              <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php echo $this->pagecount;?>">βҳ</a>
		 
		 </div></td>
        </tr>
       </table> 
	  
	<?php
	}
        
       public function __destruct()
	   {
	     mysql_close($this->conn);
	   }
  }

 $obj=new page(4,$_GET["page"]);

?>

	
<?php
$obj->listInfo();
$obj->toPage();
?>

