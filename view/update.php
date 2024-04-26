
<?php 
//this is add person version 2

error_reporting(E_ALL & ~E_NOTICE);
include("../model/person.php");
include("../controller/personController.php");

$p = new Person();
$pconn = new PersonController();

$p->setId($_GET['id']);
$p->setFname($_GET['fname']);
$p->setLname($_GET['lname']);
$p->setAge($_GET['age']);


$pconn->updatePerson($p);

echo "<script> alert('One record was succesfully updated!')</script>";

echo"<meta http-equiv='refresh' content='0;url=viewPerson.php'>";


?>