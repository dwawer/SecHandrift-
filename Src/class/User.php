<?php

session_start();

class User
{
	//用户属性
	var $username = "";
	private $password;
	private $QQ;
	private $email;
	private $telephone;
	private $conn;
	
	
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
		return $this->QQ;
	}
	function getEmail()
	{
		return $this->email;
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
				echo "aaa".$username_."\n";
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
}
