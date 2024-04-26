<?php
//this is the account controller
session_start();
error_reporting(E_ALL & ~E_NOTICE);

class AccountController 
{
    var $conn;
    function __construct() //use to initialize variables
    {
        define("DB_SERVER", "dbrich.cknjcke58rx4.us-east-2.rds.amazonaws.com");
        define("DB_USER", "richMaster");
        define("DB_PASSWORD", "richadmin");
        define("DB_DATABASE", "db_ustl");

        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        if($this->conn->connect_error)
        {
            die("Connection Failed". $this->conn->connect_error);
            
        }
    }
function Login($act)
		{
			$username = $act->getUsername();
			$password = $act->getPassword();
			$sql = "SELECT `accounts`.`acc_id`,
							`accounts`.`username`,
							`accounts`.`password`,
							`accounts`.`access_level`
					FROM `accounts`
					WHERE `accounts`.`username`='".$username."' AND `accounts`.`password`='".$password."'";			
			$result = $this->con->query($sql);			
			
			if($result->num_rows > 0)
			{
				$data = array();
				$ctr = 0;
				while($row = $result->fetch_assoc())
				{
					$data['acc_id'][$ctr] = $row['acc_id'];
					$data['username'][$ctr] = $row['username'];
					$data['password'][$ctr] = $row['password'];
					$data['access_level'][$ctr] = $row['access_level'];
					
					if($data['access_level'][$ctr]=="admin"){
						$_SESSION['access_level']=$row['access_level'];
						$_SESSION['acc_id']=$row['acc_id'];
						$_SESSION['username']=$row['username'];
						$_SESSION['password']=$row['password'];
						echo "<script>alert('Successfully Login')</script>";
						echo "<meta http-equiv='refresh'content='0;url=admin.php'>";			
					}
					else if($data['access_level'][$ctr]=="user" ){
						$_SESSION['access_level']=$row['access_level'];
						$_SESSION['acc_id']=$row['acc_id'];
						$_SESSION['username']=$row['username'];
						$_SESSION['password']=$row['password'];
						echo "<script>alert('Successfully Login')</script>";
						echo "<meta http-equiv='refresh'content='0;url=index.php'>";				
					}
					
					else{
						echo "<script>alert('Unknown Account or not Active Account!')</script>";
						echo "<meta http-equiv='refresh'content='0;url=login.php'>";						
					}
					$ctr++;		
					$data['count'] = $ctr;
				}		
				return $data;
			}
			else
			{
			  echo "<script>alert('Login Failed')</script>";
		
		      echo "<meta http-equiv='refresh'content='0;url=login.php'>";	
			}
			//$this->con->close();
		}
 
}

?>