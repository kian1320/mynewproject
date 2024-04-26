<?php
//this is accounts model
class Accounts
{
    var $acc_id;
    var $username;
    var $password;
	var $access_level;

    function __construct()
    {
        $this->acc_id = 0000;
        $this->username = "rich";
        $this->password = "monreal";
		$this->access_level="admin";
    }

    //setter or mutator
    function setAccId($acc_id)
    {
        $this->acc_id = $acc_id;
    }
    //getter or accessor
    function getAccId()
    {
       return $this->acc_id; 
    }

    function setUsername($username)
    {
        $this->username = $username;
    }
    function getUsername()
    {
        return $this->username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }
    function getAccessLevel()
    {
        return $this->access_level;
    }

    function setAcesslevel($access_level)
    {
        $this->access_level = $access_level;
    }
 

}

?>