<?php

session_start();

class User
{
	//用户属性
	var $username = "";
	private $password = "";
	private $QQ = "";
	private $email = "";
	private $telephon ="";
	private $conn ="";
	
	
	public function __construct($username_,$password_,$QQ_,$email_,$telephone_)
	{
		$this->username = $username_;
		$this->password = $password_;
		$this->QQ = $QQ_;
		$this->telephone = $telephone_;
		$this->email = $email_;
	}
		
	function getUsername()
	{
		return $this->username;
	}
	function getQQ()
	{
		if(isset($this->QQ))
		    return $this->QQ;
		else return "";
	}
	function getEmail()
	{
		if(isset($this->email))
		    return $this->email;
		else return "";
	}
	function getTelephone()
	{
		return $this->telephone;
	}
	
	function setUserPassword($password_)
	{
		$password = $password_;
	}
	
	function setAll($password_,$QQ_,$email_,$telephone_)
	{
		$password = $password_;
		$QQ = $QQ_;
		$telephone = $telephone_;
		$email = $email_;
	}
	
	//incomplete
	function Login($username_,$password_)
	{
	    include 'conn/conn.php';
		
		$sql = "select * from users where username='".$username_."'";
       
   	    $rst = $conn->Execute($sql) or die('execute error');	

        if ($rst->RecordCount() == 1) {
		    if($password_ == $rst->fields['password']) {
	    	    $QQ_ = $rst->fields['QQ'];
	    	    $email_ = $rst->fields['email'];
	    	    $telephone_ = $rst->fields['telephone'];
				//echo "aaa".$username_."\n";
			    return new User($username_,$password_,$QQ_,$email_,$telephone_);
			} else {
				return "PasswordError";
			}
		} else {
			return "UsernameError";
		}
	}
	
	function Register($username_ ,$password_ , $QQ_, $email_, $telephone_)
	{
		include 'conn/conn.php';
	
	    $sql = "insert into users(username,password,email,telephone,QQ)" ;
        $sql .= " values ('$username_', '$password_', '$email_', '$telephone_','$QQ_')";
        $rst = $conn->execute($sql);  
	   
   	    if($rst == false)
			return "InsertFalse";
	    
		return new User($username_,$password_,$QQ_,$email_,$telephone_);
			 
	}
	
	function checkUsernameRepeat($username_)
	{
		 include 'conn/conn.php';
		 
		$sql = "select * from users where username='".$username_."'";
       
   	    $rst = $conn->Execute($sql) or die('execute error');	

        if ($rst->RecordCount() != 0) 
    		return "UsernameRepeat";
		else return "UsernameOK";
	}
	
	function checkEmailRepeat($email)
	{
		include 'conn/conn.php';
		 
		$sql = "select * from users where email='".$email."'";
       
   	    $rst = $conn->Execute($sql) or die('execute error');	

        if ($rst->RecordCount() != 0) 
    		return "<font color=#FF0066>邮箱已注册！</font>";
		else return "<font color=green>恭喜您，邮箱可以使用!</font>";
	}
	
	function getUserFromUsername($username_)
	{
	    include 'conn/conn.php';
		
		$sql = "select * from users where username='".$username_."'";
       
   	    $rst = $conn->Execute($sql) or die('execute error');	

        if ($rst->RecordCount() == 1) {
	    	$QQ_ = $rst->fields['QQ'];
	    	$email_ = $rst->fields['email'];
	    	$telephone_ = $rst->fields['telephone'];
			$password_ = $rst->fields['password'];
			return new User($username_,$password_,$QQ_,$email_,$telephone_);
		} else {
			return "UsernameError";
		}
	}
	
	function checkEmailUsername($username_ ,$email_)
	{
		include 'conn/conn.php';
	
        $sql = "select * from users where username='".$username_."' or email = '".$email_."'";
   	    $rst = $conn->Execute($sql) or die('execute error');	

        if ($rst->RecordCount() == 0) {
			return true;
		} else {
			return false;
		}		 
	}
}
