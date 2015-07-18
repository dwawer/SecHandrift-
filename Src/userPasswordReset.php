<?php
    session_start();
	include_once 'config.php';
	include_once 'conn/conn.php';
    include_once("class/mail.inc.php");
    $smtp = new smtp("smtp.163.com",25,true,"13929517838@163.com","123455515","13929517838@163.com");//发件人信箱信息
    $smtp->debug = false;//是否显示发送的调试信息 FALSE or TRUE

	$content = "";
	 
    if($_GET['reset'] == "1")
    {
	    $str_key = rand(0000000, 9999999);
		
		$content = $_SESSION['member'].": 您的新密码是 ".$str_key;
		 $content = "<section class='newcustomer'>
            <br/><br/><br/> 
            <h1 class='heading2'><span style='font-size:30px'>SecHandrift密码重置</span></h1>
            <br/><br/><br/>
          </section>
        </div>  <br/><br/><br/>
		<h1 class='heading2'><span style='font-size:26px'>".$content."</span></h1>";
        $sql = "update users set password = ".$str_key." where username = '".$_SESSION['member']."';";
		$rst = $conn->Execute($sql) or die('execute error');
	   // echo "您的新密码是".$str_key;
	   // exit();
    } else {

	    $content = "<section class='newcustomer'>
            <br/><br/><br/> 
            <h1 class='heading2'><span style='font-size:40px'>请输入邮箱</span></h1>
            <br/><br/><br/>
          </section>
        </div><form name='contactForm' method='post' action='resetPassword.php'>
		             <br/><br/><br/>
		             <input name='mail' type='text' />
		             <input name='submit' class='btn btn-orange' type='submit' value='Submit' />
	                </form>";
	}
	
    if($_POST["submit"] == "Submit")
	{
		$mailto=$_POST["mail"];
		if(empty($mailto)){
    		echo "<script language=\"JavaScript\">alert(\"请填写邮箱后提交.\");</script>";  
		}  else {
		
		    $sql = "select * from users where email='$mailto'";
		    $rst = $conn->Execute($sql) or die('execute error');
            if($rst->RecordCount() != 1){
		        echo "<script language=\"JavaScript\">alert(\"邮箱未注册.\");</script>";
			} else {
				
				$_SESSION['member'] = $rst->fields['username'];
		
		        $mailsubject="web Message";
		        $mailfrom="SecHandrift密码找回邮件";
	    	    $mailbody="请点击以下网址重置密码：<br>".$_SERVER['HTTP_REFERER']."?reset=1";
	    	    //其他的表单项目以此类推
	    	    $mailtype 		= 	"HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	    	    $mailsubject 	= 	'=?UTF-8?B?'.base64_encode($mailsubject).'?=';//邮件主题
	    	    $mailfrom  	= 	'=?UTF-8?B?'.base64_encode($mailfrom).'?=';//发件人
	    	    $smtp->sendmail($mailto, $mailfrom, $mailsubject, $mailbody, $mailtype);
	    	    echo "<script language=\"JavaScript\">alert(\"邮件发送成功，请查看邮箱修改密码.\");</script>"; 
				echo "<script language=\"JavaScript\">history.go(-1);</script>"; 
		   }
         }
	}
	
	$smarty->assign('content', $content);
	$smarty->display('header2.tpl');
	$smarty->display('findPassword.tpl');
	$smarty->display('faster.tpl');
?>

	