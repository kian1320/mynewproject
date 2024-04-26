<?php
//this is the person controller
error_reporting(E_ALL & ~E_NOTICE);

class PersonController 
{
    var $conn;
    function __construct() //use to initialize variables
    {
        define("DB_SERVER", "localhost");
        define("DB_USER", "root");
        define("DB_PASSWORD", "");
        define("DB_DATABASE", "db_ustl");

        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

        if($this->conn->connect_error)
        {
            die("Connection Failed". $this->conn->connect_error);
            
        }
    }

    function addPerson($p)
    {
       
        $sqlAdd = "INSERT INTO tbl_persons (fname,lname,age)
        VALUES ('" . $p->getFname() . "','" . $p->getLname() . "','" . $p->getAge() . "')";
        $this->conn->query($sqlAdd);

        echo "<script> alert('One record was succesfully added!')</script>";
		echo"<meta http-equiv='refresh' content='0;url=viewPerson.php'>";

        $this->conn->close();
   
    }

    function updatePerson($p)
    {
    
        $sqlUpd = "UPDATE tbl_persons SET  fname='" . $p->getFname() . "', lname ='" . $p->getLname() . "'
        ,  age = '" . $p->getAge() . "' WHERE id ='" . $p->getId() . "' ";
        $this->conn->query($sqlUpd);

        $this->conn->close();
    }
    
    function deletePerson($did)
    {
       
        $sqlUpd = "DELETE FROM tbl_persons WHERE id = $did";
        $this->conn->query($sqlUpd);

      

        $this->conn->close();
    }

    function retrievePerson()
    {
       $sqlRetrieve = "SELECT 
						`tbl_persons`.`id`,
						`tbl_persons`.`fname`,
						`tbl_persons`.`lname`,
						`tbl_persons`.`age`
						FROM tbl_persons";
        $result = $this->conn->query($sqlRetrieve);

        if($result->num_rows > 0)
        {
            $data = array();
            $ctr = 0;

            while($row = $result->fetch_assoc())
            {
                $data['id'][$ctr] = $row['id'];
                $data['fname'][$ctr] = $row['fname'];
                $data['lname'][$ctr] = $row['lname'];
                $data['age'][$ctr] = $row['age'];

                $ctr++;

                $data['count'] = $ctr;
            }
            return $data;

        }

        //$this->conn->close();
    }
	
    function updPersonInfo($did)
    {
        $sqlUpdSelect = "SELECT * FROM tbl_persons WHERE id ='$did'";
        $result = $this->conn->query($sqlUpdSelect);

        if($result->num_rows > 0)
        {
            $data = array();
            $row = $result->fetch_assoc();
            
                $data['id']= $row['id'];
                $data['fname'] = $row['fname'];
                $data['lname'] = $row['lname'];
                $data['age'] = $row['age'];
            
            return $data;
        }
        echo"<meta http-equiv='refresh' content='0;url=viewPerson.php>";
    }
}

?>